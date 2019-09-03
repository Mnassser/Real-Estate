@extends('layouts.app')


@section('content')



@if($errors->any())

<div class="alert alert-danger">
	<ul>

		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach

</ul>

</div>

@endif

<form action="{{route('governments.store')}}" method="POST">
@csrf
<label>Create Government:</label>
<input type="text" name="name"/>
<br>
<input type="submit" name="submit" class="btn btn-success" value="create" />

</form>


@endsection







