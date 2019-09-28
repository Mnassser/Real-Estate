@extends('layouts.front')
@section('content')
<section id="donations">
<div class="container custom-position">
<div class="row  dropdown">
<div class="col-md-5">
   
</div>

<div class="col-md-5">
    
</div>
<div class="col-md-2 search">
<a href="/test/orders/create"class="btn login-btn shadow">
<i class="fa fa-plus">طلب عقار</i>
</a>
</div>

</div>


      @foreach($items as $item)
    <div class="row background-div ">
      <div class="col-lg-2">
      <div class="blood-type border-circle">
      <div class="blood-txt">

      </div>

      </div>
      </div>
      <div class="col-lg-7">
      <ul class="order-details">
        <li class="cutom-display">  الطلب:</li>
        <span class="cutom-display"></span>{{$item->title}} <br>

        <li class="cutom-display custom-padding" >المدينة:</li>
        <span class="cutom-display custom-padding">{{$item->city->name}}</span> <br>
        <div class="adjust-position">  <li class="cutom-display ">  النوع:</li>
          <span class="cutom-display ">{{$item->category->name}}</span></div>


      </ul>

</div>
<div class="col-lg-3">
    <a href="/test/orders/{{$item->id}}"><button class="btn more2-btn">التفاصيل </button></a>

    <form action="{{action('front\OrdersController@destroy',$item->id)}}" method="post">
      
         
          <a href='/test/orders/{{$item->id}}/edit' class="btn btn-success">edit</a>
           @csrf
           @method('DELETE')
           
           <input type="submit" class="btn btn-danger" value="delete" name="delete"/> 
           
          </form>
</div>

</div>
@endforeach

<links></links>
</section>
  
@endsection