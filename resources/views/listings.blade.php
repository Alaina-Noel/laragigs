<h1>{{$heading;}} </h1>
@if(count($listings) == 0)
<p> No Listings </p>
@endif

@foreach($listings as $listing)
  <h2>id - {{$listing['id']}}</h2>
  <h3>title - {{ $listing['title'] }}</h3>
  <h3>description - {{ $listing['description'] }}</h3>
@endforeach