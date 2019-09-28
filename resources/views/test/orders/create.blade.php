@extends('layouts.front')


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

<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-10">
		
					<h2>طلب عقار</h2>
				




			<form action="{{action('front\OrdersController@store')}}" method="post">

				@csrf
				<label> <h3>الطلب:</h3></label>
				<input type="text" name="title" class="form-control" value="{{old('title')}}"/>
				<br>
				<label> <h3>السعر</h3></label>
				<input type="text" name="price" class="form-control" value="{{old('price')}}"/>
				<br>
				<label> <h3>المساحة</h3></label>
				<input type="text" name="space" class="form-control" value="{{old('space')}}"/>
				<br>
				<label> <h3>عدد الغرف</h3></label>
				<input type="text" name="rooms" class="form-control" value="{{old('rooms')}}"/>
				<br>
				<br>
				<label> <h3>المدن</h3></label>
				<select class="form-control" name="city_id">
                    <option selected disabled>المدينة</option>
                    @foreach($cities as $city)
                    <option value="{{$city->id}}">
                    	{{$city->name}}
                    </option>



                    @endforeach
				</select>
				<br>
				<label> <h3>البينات</h3></label>
				<textarea name="notice" class="form-control"></textarea>
				<br>
				<label> <h3>النوع</h3></label>
				<select class="form-control" name="category_id">
					<option selected disabled>النوع</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">
                    	{{$category->name}}
                    </option>



                    @endforeach
                  </select>
				<br>
				<input type="submit" name="" class="btn login-btn shadow" value="اضافة" />

				<hr>
				<br>
				<hr>
			</form>
			</div>
		</div>

</div>

@endsection