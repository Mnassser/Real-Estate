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





<form action="{{ route('products.update',$item->id)}}" method="post">
@csrf
@method('PUT')
<input type="text" name="title" class="form-control" value="{{$item->title}}" />
        <br>
        <textarea name="notice" class="form-control">{{$item->notice}}</textarea>
        <br>
        <input type="file" name="image" class="form-control" />
        <br>
        <select class="form-control" name="type">
                    @foreach($items as $item)
                    <option value="{{$item->id}}">
                      {{$item->name}}
                    </option>



                    @endforeach
                  </select>
        <br>
        <input type="submit" name="" class="btn btn-success" />



      </form>

</form>


@endsection