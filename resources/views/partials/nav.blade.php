<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}">Sk8SpotsMx</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('/acerca-de') }}">About</a></li>
				<li><a href="{{ url('/contacto') }}">Contact</a></li>
				<!-- Authentication Links -->
				@if (Auth::guest())
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				            Mi Cuenta <span class="caret"></span>
				        </a>
				        <ul class="dropdown-menu" role="menu">
						    <li><a href="{{ url('/login') }}">Iniciar sesión</a></li>
						    <li><a href="{{ url('/register') }}">Registrarme</a></li>
				        </ul>
					</li>
				@else
				    <li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				            {{ Auth::user()->name }} <span class="caret"></span>
				        </a>
				        <ul class="dropdown-menu" role="menu">
				        	@can('edit_info')
								<li><a href="{{ url('/admin/users') }}">Users</a></li>
				        	@endcan
				            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
				        </ul>
				    </li>
				@endif
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>