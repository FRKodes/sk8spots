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


	// locations.push({title: "El ángulo de Chapu", address: "Avenida Chapultepec Sur 425", neighborhood: "Americana", city: "Guadalajara", state: "Jalisco", country: "México", coords: "20.669700, -103.368504", category: "Street Spot"});
	// locations.push({title: "Parque La Gran Plaza", address: "Calzada Lázaro Cárdenas 3829", neighborhood: "Jardín de San Ignacio", city: "Zapopan", state: "Jalisco", country: "México", coords: "20.670954, -103.405205", category: "Skatepark"});
	// locations.push({title: "Mini Rampa CD. Granja", address: "Avenida Ignacio L. Vallarta S/N", neighborhood: "Ciudad Granja", city: "Zapopan", state: "Jalisco", country: "México", coords: "20.685602, -103.442861", category: "Skatepark"});
	// locations.push({title: "Bowls San Isidro", address: "Calle Paseo de las Palmas 365", neighborhood: "Villas de Zapopan", city: "Zapopan", state: "Jalisco", country: "México", coords: "20.754627, -103.385995", category: "Skatepark"});
	// locations.push({title: "Skatepark Montenegro", address: "Carretera Federal 44 28", neighborhood: "Minerales", city: "Las Pintitas", state: "Jalisco", country: "México", coords: "20.573432, -103.314326", category: "Skatepark"});	
	// locations.push({title: "Skatepark La Jabonera", address: "Antonio García Cubas 3491", neighborhood: "Jardines de Los Historiadores", city: "Guadalajara", state: "Jalisco", country: "México", coords: "20.646643, -103.290536", category: "Skatepark"});
	// locations.push({title: "Skatepark El Álamo", address: "Textiles S/N", neighborhood: "Alamo Industrial", city: "San Pedro Tlaquepaque", state: "Jalisco", country: "México", coords: "20.623162, -103.321591", category: "Skatepark"});
	// locations.push({title: "Gap de Pedro Moreno", Address: "Pedro Moreno 1146", neighborhood: "Americana", city: "Guadalajara", state: "Jalisco", country: "México", coords: "20.675619, -103.361417", category: "Street Spot, Gap."});
	// locations.push({title: "Bowl El Frijol", address: "Avenida Valdepeñas 816-A", neighborhood: "Lomas de Zapopan", city: "Zapopan", state: "Jalisco", country: "México", coords: "20.741649, -103.399106", category: "Bowl"});
	// locations.push({title: "Skatepark Tabachines", address: "Anillo Periférico Norte 1996", neighborhood: "Tabachines", city: "Zapopan", state: "Jalisco", country: "México", coords: "20.734278, -103.358667", category: "Skatepark"});	
	// locations.push({title: "Skatepark Santa Cecilia (Sta. Chila)", address: "De La Selva Norte y Sur 2150", neighborhood: "Santa Cecilia", city: "Guadalajara", state: "Jalisco", country: "México", coords: "20.704390, -103.288825", category: "Skatepark"});
	// locations.push({title: "Jardín San José de Analco", address: "Analco S/N", neighborhood: "Analco", city: "Guadalajara", state: "Jalisco", country: "México", coords: "20.667584, -103.341244", category: "Street Spot"});
	// locations.push({title: "Spot del Globo", address: "Avenida 5 de Febrero 135B", neighborhood: "Las Conchas", city: "Guadalajara", state: "Jalisco", country: "México", coords: "20.661342, -103.343030", category: "Street Spot"});
	// locations.push({title: "10 Escalones Pila Seca", address: "Calle Donato Guerra 5", neighborhood: "Prados del Nilo", city: "San Pedro Tlaquepaque", state: "Jalisco", country: "México", coords: "20.641733, -103.316936", category: "Street Spot"});

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
		
		lat = locations[i].coords.split(', ')[0]
		lng = locations[i].coords.split(', ')[1]

		marker = new google.maps.Marker({
			position: new google.maps.LatLng(lat, lng),
			map: map
		});

		google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
				infowindow.setContent(locations[i].title + '<br />' + locations[i].address + '<br /><a href="/spot/' + locations[i].id + '" title="Ver detalle del spot">¡Ver más!</a> ');
				infowindow.open(map, marker);
			}
		})(marker, i));
	}

	map.mapTypes.set(customMapTypeId, customMapType);
	map.setMapTypeId(customMapTypeId);

}

function initMapDrag(){

		var myLatlngDrag = new google.maps.LatLng(20.674894,-103.354793);
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