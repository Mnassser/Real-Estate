@extends('layouts.app')


@section('content')

@role('admin|editor')
@if($errors->any())

<div class="alert alert-danger">
	<ul>

		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach

</ul>

</div>

@endif

<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-5">
		
					<h2>Create</h2>
				</div>




			<form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data">

				@csrf
				<input type="text" name="title" class="form-control" value="{{old('title')}}"/>
				<br>

				<input type="text" name="price" class="form-control" value="{{old('price')}}"/>
				<br>
				<input type="text" name="space" class="form-control" value="{{old('space')}}"/>
				<br>
				<input type="text" name="rooms" class="form-control" value="{{old('rooms')}}"/>
				<br>
				<br>
				<select class="form-control" name="city_id">
                    @foreach($cities as $city)
                    <option value="{{$city->id}}">
                    	{{$city->name}}
                    </option>



                    @endforeach
				</select>
				<br>
				<textarea name="notice" class="form-control"></textarea>
				<br>
				<input type="file" name="pictures[]" class="form-control" multiple/>
				<br>
				<select class="form-control" name="type">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">
                    	{{$category->name}}
                    </option>



                    @endforeach
                  </select>
				<br>
				<input type="submit" name="" class="btn btn-success" />



			</form>
		</div>

</div>
@else
cant access
@endrole
@endsection