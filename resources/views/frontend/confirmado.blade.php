@extends('layouts.frontend')

@section('contenido')
<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Pagar</a></li>
			<li>Pago confirmado</li>
		</ul>
	</div>
</div>
<!-- /breadcrumb -->

<div class="container margin_120">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div id="confirm">
				<div class="icon icon--order-success svg add_bottom_15">
					<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
						<g fill="none" stroke="#8EC343" stroke-width="2">
							<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
							<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
						</g>
					</svg>
				</div>
			<h2>¡Gracias por tu compra!</h2>
			<p>se te ha enviado un correo con el detalle.</p>
			</div>
		</div>
	</div>
	<!-- /row -->
</div>

@endsection