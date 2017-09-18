function initMap(pointers) {
	var locations = new Array();
	locations = pointers;

	var customMapType = new google.maps.StyledMapType([
	{
		stylers: [
			{hue: '#67CDA7'},
			{visibility: 'simplified'},
			{gamma: 0.7},
			{weight: 0.4}
		]
	},
	{
		elementType: 'labels',
		stylers: [{visibility: 'on'}]
	},
	{
		featureType: 'water',
		stylers: [{color: '#419FA2'}]
	}
	], {
		name: 'Sk8Spots Map Style'
	});
	
	var customMapTypeId = 'custom_style';
	var myLatLng = {lat: 20.674894, lng: -103.354793};

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 12,
		scrollwheel: false,
		center: myLatLng,  // GDL 
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
		}
	});

	var infowindow = new google.maps.InfoWindow();
	var marker, i, lat, lng;

	for (i = 0; i < locations.length; i++) {
		
		lat = locations[i].coords.split(',')[0]
		lng = locations[i].coords.split(',')[1]

		marker = new google.maps.Marker({
			position: new google.maps.LatLng(lat, lng),
			map: map
		});

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(locations[i].title + '<br />' + locations[i].address + '<br /><a href="/spot/' + locations[i].slug + '" title="Ver detalle del spot">¡VER ESTE SPOT!</a> ');
				infowindow.open(map, marker);
			}
		})(marker, i));
	}

	map.mapTypes.set(customMapTypeId, customMapType);
	map.setMapTypeId(customMapTypeId);

}

function initMapDrag(){
		
		console.log('custom position map!');

		var myLatlngDrag = new google.maps.LatLng(20.674894,-103.354793);

		var spot_coords = null;
		if (spot_coords = document.getElementById('coords').value) {
			var lat = spot_coords.split(',')[0]
			var lng = spot_coords.split(',')[1]
			var myLatlngDrag = new google.maps.LatLng(lat,lng);

		}

		var mapOptions = {
		  zoom: 12,
		  scrollwheel: false,
		  center: myLatlngDrag,
		}
		
		var map = new google.maps.Map(document.getElementById("map-drag"), mapOptions);
		var markerDrag = new google.maps.Marker({
		    position: myLatlngDrag,
		    map: map,
		    draggable:true,
		    title:"Drag me!"
		});

		google.maps.event.addListener(markerDrag, 'dragend', function (event) {
		    document.getElementById("coords").value = this.getPosition().lat().toFixed(6) + ',' + this.getPosition().lng().toFixed(6);
		});

}

(function() {
	$('#city_id').change(function(){
		var option = $('option:selected', this).attr('data-state-id');
		$('#state_id').val(option);

		if (option == 'other') {
			$('#other_city').removeClass('hidden');
		}else{
			$('#other_city').addClass('hidden');
		}
	});

	$(document).ready(function() {
	    $.ajax({
	        type: "GET",
	        url: "/api/getspots",
	        success: function(response){
	            initMap(response);
	        }
		});

		/*validator*/
		$(function(){ 
		  var formSettings = {
		    singleError : function($field, rules){ 
		      $field.closest('.form-group').removeClass('valid').addClass('error');
		      $('.alert_field').fadeIn();
		    },
		    singleSuccess : function($field, rules){ 
		      $field.closest('.form-group').removeClass('error').addClass('valid');
		      $('.alert_field').fadeOut();
		    },
		    overallSuccess : function(){
		      var form      = $('#contactForm'),
		        nombre    	= form.find( "input[name='nombre']").val(),
		        email     	= form.find( "input[name='email']").val(),
		        telefono	= form.find( "input[name='telefono']").val(),
		        _token		= form.find( "input[name='_token']").val(),
		        comentario	= form.find( "textarea[name='comentario']").val(),
		        action    	= form.attr( "action"),
		        url       	= action;

		      var posting = $.post(
		        url, { 	nombre: nombre,
						email: email,
		        		telefono: telefono,
		        		_token: _token,
		        		comentario: comentario }
		      );
		      posting.done(function( data ){
		        console.log(data);
		        $('#contactForm')[0].reset();
		        $('.email-sent-alert').fadeIn().delay(3000).fadeOut();
		      });
		    },
		    overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
		      autoDetect : true, debug : true
		    };
		  var $validate = $('#contactForm').validate(formSettings).data('validate');
		});
	});

})(this);