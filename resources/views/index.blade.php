@extends('layouts.app')

@section('content')

        <div class="col-lg-5 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>1</h3>

                 
               <h2>@lang('lang.Orders')</h2>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="orders" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-5 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>2</h3>

              <h2>@lang('lang.Offers')</h2>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="offers" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-5 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>3</h3>

              <h2>@lang('lang.Clients')</h2>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="clients" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-5 col-xs-6">
                 <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>4</h3>

              <h2>@lang('lang.Restaurant')</h2>
            </div>
            <div class="icon">
              <i class="fas fa-utensils"></i>
            </div>
            <a href="resturants" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

          <div class="col-lg-5 col-xs-6">
                 <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>5</h3>

              <h2>@lang('lang.Products')</h2>
            </div>
            <div class="icon">
              <i class="fas fa-hamburger"></i>
            </div>
            <a href="products" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-5 col-xs-6">
                 <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>6</h3>

              <h2>@lang('lang.Settings')</h2>
            </div>
            <div class="icon">
              <i class="fas fa-cogs"></i>
            </div>
            <a href="settings" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
         <div class="col-lg-5 col-xs-6">
                 <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>7</h3>

              <h2>@lang('lang.Cities')</h2>
            </div>
            <div class="icon">
              <i class="fas fa-city"></i>
            </div>
            <a href="cities" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

         <div class="col-lg-5 col-xs-6">
                 <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>8</h3>

              <h2>@lang('lang.Districts')</h2>
            </div>
            <div class="icon">
              <i class="fas fa-swatchbook"></i>
            </div>
            <a href="districts" class="small-box-footer">More info <i class="fa fa-arrow-circle-right-danger"></i></a>
          </div>
        </div>
        <!-- ./col -->

         <div class="col-lg-5 col-xs-6">
                 <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3>9</h3>

              <h2>@lang('lang.Categoires')</h2>
            </div>
            <div class="icon">
              <i class="fas fa-tags"></i>
            </div>
            <a href="categories" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->


@endsection
