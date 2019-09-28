@extends('layouts.front')
     <!-- breedcrumb-->

@section('content')


<header id="header">
        <div class="container-fluid">
          <div class="header-text">
          <h1 class="head-text">بنك الدم نمضى قدماً لصحة افضل</h1>
          <p class="follow-text">هذا النص هو مثال لنص يمكن أن يستبدل
              في نفس المساحة،<br> لقد تم توليد هذا النص
              من مولد النص العرب</p>
              <a href="#"><button class="btn login-btn">المزيد</button></a>
              </div>
        </div>
      </header>


   <!-- articles -->
<section id="articles">
<h2 class="articles-head">المعروض </h2>
<div class="container custom" style="direction: ltr">
  <div class="owl-carousel owl-theme" id="owl-articles">
  
   
   
    
    @foreach($products as $product)
    <div class="item">
      <div class="card" style="width: 22rem;">
        <i onclick="toggleFavourite(this)"  class="fab fa-gratipay first-heart"></i>
        <img class="card-img-top" src="imgs/p1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$product->title}}</h5>
          <p class="card-text">{{$product->title}}</p>
          <a href="/test/products/{{$product->id}}"><button class="btn details-btn">التفاصيل</button></a>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>
</section>

       
   
@endsection