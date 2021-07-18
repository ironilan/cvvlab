@extends('layouts.frontend')

@section('contenido')
<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Examen</a></li>
					<li>Pagar</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
				<div class="box_general_3 cart">
					<div class="message">
						<p>¿Ya eres Cliente? <a href="#0"> Ingresa con tu Cuenta</a></p>
					</div>
					<div class="form_title">
						<h3><strong>1</strong>Datos Personales</h3>
						<p>
							Ingrese los datos de la persona que se tomará los examenes
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Nombres</label>
									<input type="text" class="form-control" id="firstname_booking" name="firstname_booking" placeholder="Jhon">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Apellidos</label>
									<input type="text" class="form-control" id="lastname_booking" name="lastname_booking" placeholder="Doe">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Correo</label>
									<input type="email" id="email_booking" name="email_booking" class="form-control" placeholder="jhon@doe.com">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Celular</label>
									<input type="text" id="telephone_booking" name="telephone_booking" class="form-control" placeholder="51 996 005 788">
								</div>
							</div>
						</div>
						
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>2</strong>Información de Pago</h3>
						<p>
							Ingrese los datos de la Tarjeta
						</p>
					</div>
					
					<div class="step">
						<div class="checkbox-holder mb-4 p-3 row text-left">
							<div class="form-check col-4">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
								  Pagar con Tarjeta
								</label>
							  </div>
							  <div class="form-check col-4">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
								<label class="form-check-label" for="flexRadioDefault2">
								  Depósito Bancario
								</label>
							  </div>
							  <div class="form-check col-4">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
								<label class="form-check-label" for="flexRadioDefault2">
								  Pagar en el Laboratorio
								</label>
							  </div>
						</div>
						<div class="form-group">
							<label>Nombre del Propietario de la Tarjeta</label>
							<input type="text" class="form-control" id="name_card_booking" name="name_card_booking" placeholder="Jhon Doe">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Numero de la tarjeta</label>
									<input type="text" id="card_number" name="card_number" class="form-control" placeholder="xxxx - xxxx - xxxx - xxxx">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/payments.png" alt="Cards" class="cards">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Fecha de expiración</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Codigo de seguridad</label>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
											</div>
										</div>
										<div class="col-md-8">
											<img src="img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End row -->

						<h5>Cuentas de Banco</h5>
						<p>
							Puedes tambien pagar en nuestras cuentas de banco
						</p>
						<p>
							<img src="img/paypal_bt.png" alt="Image">
						</p>
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>3</strong>Datos de Facturación</h3>
						<p>
							Mussum ipsum cacilds, vidis litro abertis.
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label>Country</label>
								<div class="form-group">
									<select class="form-control" name="country" id="country">
										<option value="">Select your country</option>
										<option value="Europe">Europe</option>
										<option value="United states">United states</option>
										<option value="Asia">Asia</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Street line 1</label>
									<input type="text" id="street_1" name="street_1" class="form-control" placeholder="Street line 1">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Street line 2</label>
									<input type="text" id="street_2" name="street_2" class="form-control" placeholder="Street line 1">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>City</label>
									<input type="text" id="city_booking" name="city_booking" class="form-control" placeholder="Miami">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>State</label>
									<input type="text" id="state_booking" name="state_booking" class="form-control" placeholder="Florida">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Postal code</label>
									<input type="text" id="postal_code" name="postal_code" class="form-control" placeholder="00342">
								</div>
							</div>
						</div>
						<!--End row -->
					</div>
					<hr>
					<!--End step -->
					<div id="policy">
						<h4>Cancellation policy</h4>
						<div class="form-group">
							<div class="checkboxes">
								<label class="container_check">I accept <a href="#0">terms and conditions and general policy</a>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
					</div>
				</div>
				</div>
				<!-- /col -->
				<aside class="col-xl-4 col-lg-4" id="sidebar">
					<div class="box_general_3 booking">
						<form>
							<div class="title">
								<h3>Detalle de Compra</h3>
							</div>
							<div class="summary">
								<ul>
									<li>Date: <strong class="float-right">11/12/2017</strong></li>
									<li>Time: <strong class="float-right">10.30 am</strong></li>
									
								</ul>
							</div>
							<ul class="treatments checkout clearfix">
								<li>
									Back Pain visit <strong class="float-right">$55</strong>
								</li>
								<li>
									Cardiovascular screen <strong class="float-right">$55</strong>
								</li>
								<li class="total">
									Total <strong class="float-right">$110</strong>
								</li>
							</ul>
							<hr>
							<button class="btn_1 full-width">Pagar</button>
						</form>
					</div>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>

@endsection