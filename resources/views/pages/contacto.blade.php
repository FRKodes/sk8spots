@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h1>Contacto</h1>
				<p>
					En <strong>Sk8SpotsMX</strong> estamos para escucharte. Si tienes alguna duda o inquietud sobre lo que hacemos o quieres colaborar, incluso si tiene alguna queja o sugerencia, estamos para ayudarte.
				</p>
				{{ Form::open(['url'=>'send_contact_mail', 'id'=>'contactForm']) }}
					<div class="form-group">
						<input type="text" name="nombre" class="form-control" placeholder="Nombre*" data-validate="required">
						<div class="alert_field">El nombre es requerido.</div>
					</div>
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="Correo Electrónico*" data-validate="required|email">
						<div class="alert_field">El correo es requerido, verifica que sea un correo válido.</div>
					</div>
					<div class="form-group">
						<input type="text" name="telefono" class="form-control" placeholder="Teléfono">
					</div>
					<div class="form-group">
						<textarea name="comentario" class="form-control" placeholder="Comentarios*" data-validate="required" id="comentario" cols="30" rows="10"></textarea>
						<div class="alert_field">El comentario es requerido</div>
					</div>
					<div class="form-group">
						<input type="submit" value="Enviar" class="btn btn-primary green-btn pull-right">
					</div>
					<div class="email-sent-alert">Gracias por tus comentarios, nos pondremos en contacto contigo a la brevedad.</div>
				{{ Form::close() }}
			</div>
		</div>
	</div>
@endsection