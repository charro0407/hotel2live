<?php

use Carbon\Carbon;

// Main view for the search hotel
Route::get('/', function()
{
	// Get list of status array from MySql
	$status = DB::table('room_status')->get();
	$status = json_decode(json_encode($status), true);

	// Get list of locations array from MySql
	$location = DB::table('locations')->get()->toArray();
	$location = json_decode(json_encode($location), true);

	$data = array();
	$dates = get_dates();

	// If have a search, show the hotels
	if (Input::has('search') or Input::has('dates') or Input::has('location')) {

		$_search = Input::get('search');
		$_dates = Input::get('dates');
		$_location = Input::get('location');

		DB::table('searches')->insert(
	    	[
	    		'keyword' => $_search,
	    		'date_range' => $dates['from'].' > '.$dates['to'],
	    		'location' => $_location
		    ]);

		// If we have a location, filter the hotel by location in mysql, if no, only show all hotels
		if ($_location > 0) {
			$hotels = DB::table('hotels')->where('name', 'LIKE', '%'.$_search.'%')->where('location', $_location)->get();
		} else {
			$hotels = DB::table('hotels')->where('name', 'LIKE', '%'.$_search.'%')->get();
		}

		$dates = get_dates($_dates);

		foreach($hotels as $key => $hotel) {
			$data[$key]['hotel'] = json_decode(json_encode($hotel), true);
			$rooms = DB::table('rooms')->where('hotel', $hotel->id)->get();
			foreach ($rooms as $room) {
				$tmp = json_decode(json_encode($room), true);
				$tmp = get_room_price($tmp, $dates['nights']);
				$data[$key]['rooms'][] = $tmp;
			}
			$data[$key]['hotel']['min_price'] = min(array_column($data[$key]['rooms'], 'price'));
			
		}
	}

	


	return view('pages.home', [
		'hotels' => $data,
		'status' => $status,
		'location' => $location,
		'dates' => $dates
	]);

});

// Route to payment details. Calculate the total for the checkout
Route::get('payment', function()
{
	if (Input::has('room') or Input::has('dates')) {
		$room = DB::table('rooms')->where('id', Input::get('room'))->first();
		$room = json_decode(json_encode($room), true);
	
		$dates = get_dates(Input::get('dates'));

		$data = get_room_price($room, $dates['nights']);

		$data['room_id'] = $room['id'];
		$data['fee'] = $room['fee'];
		$data['dates'] = $dates;
		$data['policy'] = $room['policy'];

		return view('pages.payment', [
			'data' => $data
		]);
	}
});

Route::post('/process', function()
{
	// Get room info from database
	$room = DB::table('rooms')->where('id', Input::get('room'))->first();
	$room = json_decode(json_encode($room), true);

	// Convert string date to object and calculate the price for the room
	$dates = get_dates(Input::get('from').' > '.Input::get('to'));
	$price = get_room_price($room, $dates['nights']);

	// Create the array of data to insert in database
	$_data = array (
		'room' => Input::get('room'),
    	'from' => Input::get('from'),
    	'to' => Input::get('to'),
    	'nights' => $dates['nights'],
    	'tax' => $price['tax'],
    	'fee' => $room['fee'],
    	'subtotal' => $price['subtotal'],
    	'total' => $price['total'],
    	'first_name' => Input::get('firstname_booking'),
    	'last_name' => Input::get('lastname_booking'),
    	'email' => Input::get('email_booking'),
    	'phone' => Input::get('telephone_booking'),
    	'country' => Input::get('country'),
    	'phone' => Input::get('telephone_booking'),
    	'address_1' => Input::get('street_1'),
    	'address_2' => Input::get('street_2'),
    	'city' => Input::get('city_booking'),
    	'state' => Input::get('state_booking'),
    	'zip' => Input::get('postal_code'),
    	'name_card' => Input::get('name_card_bookign'),
    	'card' => Input::get('card_number'),
    	'expire_month' => Input::get('expire_month'),
    	'expire_year' => Input::get('expire_year'),
    	'ccv' => Input::get('ccv')
	   );

	// Insert Data in Database
	DB::table('bookings')->insert($_data);

	// Update Room status
	DB::table('rooms')->where('id', Input::get('room'))->update(['status' => 2]);

	// Get hotel and Room name information
	$hotel = DB::table('hotels')
            ->join('rooms', 'rooms.hotel', '=', 'hotels.id')
            ->select('hotels.name as hotel', 'rooms.name as room')
            ->first();
    $hotel = json_decode(json_encode($hotel), true);
    $date = Carbon::now();
    $date->format('d-m-y h:i a');
    $hotel['date'] = $date->format('d-m-y h:i a');

	// Admin Email Notification
	Mail::send('layouts.emailAdmin', ['data' => $_data, 'hotel' => $hotel], function ($m) {
        $m->from(env('MAIL_FROM'), 'Hotel2Live');

        $m->to(env('MAIL_ADMIN_NOTIFICATION'), 'Hotel2Live Admin')->subject('New Booking from Hotel2Live');
    });

    // Customer Email Notification
	Mail::send('layouts.emailCustomer', ['data' => $_data, 'hotel' => $hotel], function ($m) use($_data) {
        $m->from(env('MAIL_FROM'), 'Hotel2Live');

        $m->to($_data['email'], $_data['first_name'].' '.$_data['last_name'])->subject('Booking Confirmation');
    });

	// Redirect to confirmation route
	return redirect('/finish');
});

// Confirmation Route
Route::get('/finish', function()
{
	return view('pages.finish');
});

// Convert from string to object date and calculate the total nights
function get_dates($date = NULL) {
	if ($date !== NULL) {
		$date = explode(' ', $date);
		$from = Carbon::createFromFormat('d-m-y', $date['0']);
		$to = Carbon::createFromFormat('d-m-y', $date['2']);
		return array (
			'nights' => $from->diffInDays($to),
			'from' => $date['0'],
			'to' => $date['2']
		);
	} else {
		$today = Carbon::now();
		$tomorrow = Carbon::now()->addDays(1);

		return array (
			'nights' => $today->diffInDays($tomorrow),
			'from' => $today->format('d-m-y'),
			'to' => $tomorrow->format('d-m-y')
		);
	}
}

// Get all price calculation for the room
function get_room_price($room, $nights = 1) {
	$room['subtotal'] = $room['price'] * $nights;
	$room['tax'] = $room['subtotal']*0.14;
	$room['total'] = $room['subtotal'] + $room['tax'] + $room['fee'];
	return $room;
}


