<html>
	<head></head>
	<body>
		<h1><center>New Booking</center></h1>
		<p><center>Room Details</center></p>
		<table>
			<tr>
				<td>Reservation date</td>
				<td>{{$hotel['date']}}</td>
			</tr>
			<tr>
				<td>Hotel</td>
				<td>{{$hotel['hotel']}}</td>
			</tr>
			<tr>
				<td>Room</td>
				<td>{{$hotel['room']}}</td>
			</tr>
			<tr>
				<td>From - To Dates</td>
				<td>{{$data['from'].' - '.$data['to']}}</td>
			</tr>
			<tr>
				<td>Nights</td>
				<td>{{$data['nights']}}</td>
			</tr>
			<tr>
				<td>Subtotal</td>
				<td>{{$data['subtotal']}}</td>
			</tr>
			<tr>
				<td>Tax</td>
				<td>{{$data['tax']}}</td>
			</tr>
			<tr>
				<td>Fee</td>
				<td>{{$data['fee']}}</td>
			</tr>
			<tr>
				<td>Total</td>
				<td>{{$data['total']}}</td>
			</tr>
		</table>
		<p><center>Personal Information</center></p>
		<table>
			<tr>
				<td>First name</td>
				<td>{{$data['first_name']}}</td>
			</tr>
			<tr>
				<td>Last name</td>
				<td>{{$data['last_name']}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{$data['email']}}</td>
			</tr>
			<tr>
				<td>Phone</td>
				<td>{{$data['phone']}}</td>
			</tr>
			<tr>
				<td>Country</td>
				<td>{{$data['country']}}</td>
			</tr>
			<tr>
				<td>Address 1</td>
				<td>{{$data['address_1']}}</td>
			</tr>
			<tr>
				<td>Addres 2</td>
				<td>{{$data['address_2']}}</td>
			</tr>
			<tr>
				<td>City</td>
				<td>{{$data['city']}}</td>
			</tr>
			<tr>
				<td>State</td>
				<td>{{$data['state']}}</td>
			</tr>
			<tr>
				<td>Zip Code</td>
				<td>{{$data['zip']}}</td>
			</tr>
		</table>
		<p><center>Payment information</center></p>
		<table>
			<tr>
				<td>Name on Card</td>
				<td>{{$data['name_card']}}</td>
			</tr>
			<tr>
				<td>Card Number</td>
				<td>{{$data['card']}}</td>
			</tr>
			<tr>
				<td>Expire Month</td>
				<td>{{$data['expire_month']}}</td>
			</tr>
			<tr>
				<td>Expire year</td>
				<td>{{$data['expire_year']}}</td>
			</tr>
			<tr>
				<td>CCV</td>
				<td>{{$data['ccv']}}</td>
			</tr>
		</table>
	</body>
</html>