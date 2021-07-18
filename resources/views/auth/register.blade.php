@extends('layouts.frontend')

@section('contenido')

<div class="bg_color_2">
	<div class="container margin_60_35">
		<div id="login">
			<h1>Regístrate!</h1>
			<div class="box_form">
				<form>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Ingresa tu Nombre" name="name">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Ingresa tu email" name="email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Ingresa tu password" id="password" name="password">
					</div>
					<div class="form-group text-center add_top_20">
						<input class="btn_1 medium" type="submit" value="Login">
					</div>
				</form>
			</div>
			<p class="text-center link_bright">¿Ya tienes una cuenta? <a href="{{ url('login') }}"><strong>Inicia sesión!</strong></a></p>
		</div>
		<!-- /login -->
	</div>
</div>
@endsection