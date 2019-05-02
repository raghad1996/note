<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@if(Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		<span class="sr-only">Close</span>
	</button>
	{!! \Session::get('success') !!}
	</div>
@endif

<div style="margin-top:50px;margin-left:30px">
<table class="table">
  <thead>
    <tr>
      <th scope="col">title</th>
      <th scope="col">description</th>
    </tr>
  </thead>
  <tbody>
    @foreach($notes as $note)
		<tr>
			<td>{{$note->title}}</td>
			<td>{{$note->description}}</td>
		</tr>

	@endforeach
</tbody>
    
<table>
	<thead>
  <tr>
	<th>title</th>
	<th>description</th>
  </tr>
	</thead>
	<tbody>
	@foreach($notes as $note)
		<tr>
			<td>{{$note->title}}</td>
			<td>{{$note->description}}</td>
		</tr>

	@endforeach
</tbody>
</table>
</div>