@extends('layouts.master')

@section('title', 'Payment details')

@section('main')
	<div class="hero_in cart_section start_bg_zoom">
		<div class="wrapper">
			<div class="container">
				<div class="bs-wizard clearfix">
					<div class="bs-wizard-step">
						<div class="text-center bs-wizard-stepnum">Room Selection</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a href="/" class="bs-wizard-dot"></a>
					</div>

					<div class="bs-wizard-step active">
						<div class="text-center bs-wizard-stepnum">Payment</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a href="#0" class="bs-wizard-dot"></a>
					</div>

					<div class="bs-wizard-step disabled">
						<div class="text-center bs-wizard-stepnum">Finish!</div>
						<div class="progress">
							<div class="progress-bar"></div>
						</div>
						<a href="#0" class="bs-wizard-dot"></a>
					</div>
				</div>
				<!-- End bs-wizard -->
			</div>
		</div>
	</div>
	<!--/hero_in-->

	<div class="bg_color_1" style="transform: none;">
		<div class="container margin_60_35" style="transform: none;">
			{{ Form::open(array('method' => 'POST', 'url' => '/process', 'id' => 'payment-form')) }}
				<div class="row" style="transform: none;">
					
					<div class="col-lg-8">
						
							<div class="box_cart">
							<div class="form_title">
								<h3><strong>1</strong>Your Details</h3>
								<p>
									Mussum ipsum cacilds, vidis litro abertis.
								</p>
							</div>
							<div class="step">
								<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>First name</label>
										<input type="text" class="form-control" id="firstname_booking" name="firstname_booking">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Last name</label>
										<input type="text" class="form-control" id="lastname_booking" name="lastname_booking">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" id="email_booking" name="email_booking" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Confirm email</label>
										<input type="email" id="email_booking_2" name="email_booking_2" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Telephone</label>
										<input type="text" id="telephone_booking" name="telephone_booking" class="form-control">
									</div>
								</div>
							</div>
							</div>
							<hr>
							<!--End step -->

							<div class="form_title">
								<h3><strong>2</strong>Payment Information</h3>
								<p>
									Mussum ipsum cacilds, vidis litro abertis.
								</p>
							</div>
							<div class="step">
								<div class="form-group">
								<label>Name on card</label>
								<input type="text" class="form-control" id="name_card_bookign" name="name_card_bookign">
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Card number</label>
										<input type="text" id="card_number" name="card_number" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<img src="{{asset('_assets/img/cards_all.svg')}}" alt="Cards" class="cards-payment">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Expiration date</label>
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
										<label>Security code</label>
										<div class="row">
											<div class="col-4">
												<div class="form-group">
													<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
												</div>
											</div>
											<div class="col-8">
												<img src="{{asset('_assets/img/icon_ccv.gif')}}" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--End row -->
							</div>
							<hr>
							<!--End step -->

							<div class="form_title">
								<h3><strong>3</strong>Billing Address</h3>
								<p>
									Mussum ipsum cacilds, vidis litro abertis.
								</p>
							</div>
							<div class="step">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Country</label>
											<div class="custom-select-form">
											<select class="wide add_bottom_15" name="country" id="country" style="display: none;">
												<option data-display="Select your country">Select your country</option>
												<option value='United States'>United States</option>
											</select>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Street line 1</label>
											<input type="text" id="street_1" name="street_1" class="form-control">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Street line 2</label>
											<input type="text" id="street_2" name="street_2" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>City</label>
											<input type="text" id="city_booking" name="city_booking" class="form-control">
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<label>State</label>
											<input type="text" id="state_booking" name="state_booking" class="form-control">
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<label>Postal code</label>
											<input type="text" id="postal_code" name="postal_code" class="form-control">
										</div>
									</div>
								</div>
								<!--End row -->
							</div>
							<hr>
							<!--End step -->
							<div id="policy">
								<h5>Cancellation policy</h5>
								<p class="nomargin red">- {{ $data['policy'] }}</p>
							</div>
							</div>
						
					</div>
					
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
						
					<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 917.5px;"><div class="box_detail">
							<div id="total_cart">
								Total <span class="float-right">{{ money_format('$%i', $data['total']) }}</span>
							</div>
							<ul class="cart_details">
								<li>From <span>{{ $data['dates']['from'] }}</span></li>
								<li>To <span>{{ $data['dates']['to'] }}</span></li>
								<li>{{ $data['dates']['nights'] }} Night(s)<span>{{ money_format('$%i', $data['subtotal']) }}</span></li>
								<li>Tax 14% <span>{{ money_format('$%i', $data['tax']) }}</span></li>
								<li>Fee <span>{{ money_format('$%i', $data['fee']) }}</span></li>
							</ul>
							<input type='submit' id='purchase-button' class="btn_1 full-width purchase" value='Purchase' />
							<div class="text-center"><small>No money charged in this step</small></div>
						</div><div class="resize-sensor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 390px; height: 1491px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></aside>
				</div>
				<input type='hidden' name='room' value='{{ $data['room_id'] }}' />
				<input type='hidden' name='from' value='{{ $data['dates']['to'] }}' />
				<input type='hidden' name='to' value='{{ $data['dates']['from'] }}' />
			{{ Form::close() }}
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_color_1 -->
@stop