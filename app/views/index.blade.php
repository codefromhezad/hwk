Here is a list of locations: <br>

<ul>
@foreach($locations as $location)
	<li>{{ $location->name }}</li>
@endforeach
</ul>