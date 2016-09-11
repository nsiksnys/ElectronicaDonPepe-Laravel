<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Electronica Don Pepe</title>
		<!-- Estilos css -->
		{!!Html::style('assets/css/bootstrap.css')!!}
		{!!Html::style('assets/css/style.css')!!}
		{!!Html::style('assets/css/amelia.css')!!}
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
					<span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!!URL::to('/')!!}">Electronica Don Pepe</a>
			</div>
			
<!-- 			<center>
				<div class="navbar-brand">Home</div>
			</center>  -->

			<!-- Si el usuario esta logueado -->
			@if (Auth::check()) 
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Auth::user()->name <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="{!!URL::to('/logout')!!}">Cerrar sesión</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			@endif
		</nav> <!-- /Navbar -->

		<!-- Contenido -->
		<div class="container">
			@yield('content')
		</div>

		<!-- Custom Theme files -->
		{!!Html::script('assets/js/jquery.min.js')!!}
		{!!Html::script('assets/js/bootstrap.min.js')!!}
   	</body>
</html>