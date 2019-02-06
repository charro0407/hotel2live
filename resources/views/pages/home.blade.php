@extends('layouts.master')

@section('title', 'Find hotel')

@section('main')
	<section class="hero_in hotels">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp banner-title"><span></span>Find your hotel in Miami</h1>
			</div>
		</div>
	</section>
	<!--/hero_in-->
	@if (count($hotels)>0)
		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked data-filter="*" class="selected">
							<label for="all">All</label>
							<input type="radio" id="popular" name="listing_filter" value="popular" data-filter=".popular">
							<label for="popular">Popular</label>
						</div>
					</li>
					<li>
						<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
	@endif
	<!-- /filters -->

	<div class="collapse" id="collapseMap">
		<div id="map" class="map"></div>
	</div>
	<!-- End Map -->

	<div class="container margin_60_35">

		@if (!count($hotels)>0)
			<h4 style='margin-bottom: 35px;'><center>Start making a search</center></h4>
		@endif

		{{ Form::open(array('method' => 'GET', 'url' => '/', 'autocomplete' => 'off')) }}
			<div class="col-lg-12">
				<div class="row no-gutters custom-search-input-2 inner">
					<div class="col-lg-4">
						<div class="form-group">
							<input class="form-control" type="text" name='search' value='@php
							if (null !== Request::get('search')) echo Request::get('search');
							@endphp' placeholder="What hotel are you looking for...">
							<i class="icon_search"></i>
						</div>
					</div>
					<div class="col-lg-3">
	                    <div class="form-group">
	                        <input class="form-control" type="text" name="dates" value='@php
							if (count($hotels)>0) echo $dates['from'].' > '.$dates['to'];
							@endphp' placeholder="When..">
	                        <i class="icon_calendar"></i>
	                    </div>
	                </div>
					<div class="col-lg-3">
						<select class="wide" name='location'>
							<option value='0'>Select location</option>
							@foreach ($location as $row)
								<option value='{{ $row['id'] }}' @php
							if ($row['id'] == Request::get('location')) echo 'selected';
							@endphp>{{ $row['name'] }}</option>
							@endforeach
						</select>
					</div>
					<div class="col-lg-2">
						<input type="submit" class="btn_search" value="Search">
					</div>
				</div>
				<!-- /row -->
			</div>
		{{ Form::close() }}
		<!-- /custom-search-input-2 -->
		<div class="isotope-wrapper">





		@if (count($hotels)>0)
			@foreach($hotels as $key => $data)
				<div id='hotel_{{ $data['hotel']['id'] }}' class="box_list isotope-item @php
					if ($data['hotel']['popular'] == 1) echo 'popular'
				@endphp">
					<div class="row no-gutters">
						<div class="col-lg-5">
							<figure>
								<small>{{ $location[array_search($data['hotel']['location'], array_column($location, 'id'))]['name'] }}</small>
								<a href="#0" class='expand_hotel'>
									<img src="{{ asset('uploads/hotel_'.$data['hotel']['image'].'.jpg') }}" class="img-fluid" alt="" width="800" height="533">
								</a>
							</figure>
						</div>
						<div class="col-lg-7">
							<div class="wrapper">
								<a href="#0" class="wish_bt"></a>

								<div class="cat_star">
									@php
										$stars = 5;
									@endphp
									@for ($i=0; $i<$data['hotel']['stars']; $i++)
										<i class="icon_star"></i>
										@php
											$stars --;
										@endphp
									@endfor
									@for ($i=0; $i<$stars; $i++)
										<i class="icon_star_alt"></i>
									@endfor
								</div>

								<h3>
									<a href="#0">{{ $data['hotel']['name'] }}</a>
								</h3>

								<p><strong>{{$data['hotel']['address']}}</strong><br />{{$data['hotel']['description']}}</p>

								<span class="price">From <strong>${{$data['hotel']['min_price']}}</strong> per night</span>
							</div>
							<ul>
								<li>
									<a class='btn_1 show-rooms' href='#'>
										<i class="icon-down-big"></i> Rooms / Availability
									</a>
								</li>
								<li>
									<div class="score">
										<span>Good<em>{{$data['hotel']['reviews']}} Reviews</em></span><strong>{{$data['hotel']['calification']}}</strong>
									</div>
								</li>
							</ul>
						</div>
					</div>

					<div class="room-availability card" style='border-top: 1px solid #ededed;'>
						<div class="collapse show">
							<div class="card-body">
								<table class='table cart-list room-info'>
									<thead>
										<th>Room type</th>
										<th>Status</th>
										<th>More info</th>
										<th>Price</th>
										<th>Action</th>
									</thead>
									<tbody>
										@foreach($data['rooms'] as $key2 => $room)
											<tr class='view'>
												<td>{{$room['name']}}
													@if ($room['promo'] == 1)
														<span class='promo'>*Promos / Special Conditions Available</span>
													@endif
												</td>
												<td><span class="status @php
													echo $status[array_search($room['status'], array_column($status, 'id'))]['color'];
													@endphp">@php
													echo $status[array_search($room['status'], array_column($status, 'id'))]['name'];
													@endphp</span></td>
												<td><a href='#'><i class="icon-down-dir-1"></i>Details</a></td>
												<td class='price'><strong>${{$room['price']}}</strong> USD Per Night</td>
												<td class='request'><a href="/payment?room={{$room['id']}}&dates={{Request::get('dates')}}">Request <i class="icon-right-big"></i></a></td>
											</th>
											<tr class='fold'>
												<td colspan='5'>
													<div class="fold-content">
														<div class="room_type">
															<div class="row">
																<div class="col-md-4">
																	<img src="{{ asset('uploads/room_'.rand(1, 10).'.jpg') }}" class="img-fluid" alt="">
																	<div class='row gallery'>
																		<div class="col-md-4">
																			<img src="{{ asset('uploads/room_gallery/room_'.rand(1, 11).'.jpg') }}">
																		</div>
																		<div class="col-md-4">
																			<img src="{{ asset('uploads/room_gallery/room_'.rand(1, 11).'.jpg') }}">
																		</div>
																		<div class="col-md-4">
																			<img src="{{ asset('uploads/room_gallery/room_'.rand(1, 11).'.jpg') }}">
																		</div>
																	</div>
																</div>
																<div class="col-md-8">
																	<div class='row'>
																		<div class="col-md-6">
																			<h4>{{ $room['name'] }}</h4>
																			<p><strong>Conditions and Offers:</strong><br />
																			- {{ $room['offers'] }}</p>
																			<p><strong>Cancellation Policy:</strong><br />
																			<span class='red'>- {{ $room['policy'] }}</span></p>
																			<ul class="hotel_facilities">
																				<li><img src="{{asset('_assets/img/hotel_facilites_icon_2.svg')}}" alt="">Single Bed King</li>
																				<li><img src="{{asset('_assets/img/hotel_facilites_icon_4.svg')}}" alt="">Free Wifi</li>
																				<li><img src="{{asset('_assets/img/hotel_facilites_icon_5.svg')}}" alt="">Shower</li>
																				<li><img src="{{asset('_assets/img/hotel_facilites_icon_7.svg')}}" alt="">Air Condition</li>
																			</ul>
																		</div>
																		<div class="col-md-6">
																			<div class="box_detail">
																				<div id="total_cart">
																					Total <span class="float-right">{{ money_format('$%i', $room['total']) }}</span>
																				</div>
																				<ul class="cart_details">
																					<li>{{ $dates['nights'] }} Night(s) <span>{{ money_format('$%i', $room['subtotal']) }} USD</span></li>
																					<li>Taxes 14% <span>{{ money_format('$%i', $room['tax']) }} USD</span></li>
																					<li>Fees <span>{{ money_format('$%i', $room['fee']) }} USD</span></li>
																				</ul>
																				@if ($room['status'] == 3)
																					<h3 style='color: red;'><center>Sold Out</center></h3>
																				@else
																					<a href="/payment?room={{$room['id']}}&dates={{Request::get('dates')}}" class="btn_1 full-width purchase">Request</a>
																					<div class="text-center"><small>No money charged in this step</small></div>
																				@endif
																				
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- /row -->
														</div>
													</div>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		@endif





		
		</div>
		<!-- /isotope-wrapper -->

	</div>
	<!-- /container -->
	<div class="bg_color_1">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-md-4">
					<a href="#0" class="boxed_list">
						<i class="pe-7s-help2"></i>
						<h4>Contact with Us</h4>
						<p>Cum appareat maiestatis interpretaris et, et sit.</p>
					</a>
				</div>
				<div class="col-md-4">
					<a href="#0" class="boxed_list">
						<i class="pe-7s-wallet"></i>
						<h4>Payments and Refunds</h4>
						<p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
					</a>
				</div>
				<div class="col-md-4">
					<a href="#0" class="boxed_list">
						<i class="pe-7s-note2"></i>
						<h4>Quality Standards</h4>
						<p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
					</a>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
@stop

@section('map')
	<script src="http://maps.googleapis.com/maps/api/js?key={{ env('GMAPS_API_KEY')}}"></script>
	<script src="{{ asset('_assets/js/maps.js' )}}"></script>
	<script type='text/javascript'>
	@include('includes.map_hotels')
	</script>
@stop