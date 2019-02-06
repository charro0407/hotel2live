<h1><center>Latest Searches in the site</center></h1>

<table>
	<tr>
		<td>Keywords</td>
		<td>Date range</td>
		<td>Location</td>
	</tr>
	@foreach ($data as $row)
		<tr>
			<td>{{$row['keyword']}}</td>
			<td>{{$row['date_range']}}</td>
			<td>{{ $location[array_search($row['location'], array_column($location, 'id'))]['name'] }}</td>
		</tr>
	@endforeach
</table>