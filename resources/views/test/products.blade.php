@extends('layouts.front')
@section('content')
<section id="donations">
<div class="container custom-position">
<div class="row  dropdown">
<div class="col-md-5">
   
</div>

<div class="col-md-5">
    
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
    <a href="/test/products/{{$item->id}}"><button class="btn more2-btn">التفاصيل </button></a>

</div>

</div>
@endforeach

<links></links>
</section>
  
@endsection