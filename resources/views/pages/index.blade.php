@extends('layouts')
@section('content')
@section('title','home')

  <div class="main">
      <div class="container">
      

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-4">
            <ul class="list-group margin-bottom-25 sidebar-menu">


              @foreach($category as $category)
              <li class="list-group-item clearfix"><a href="{{route('product_by_category',$category->id)}}"><i class="fa fa-angle-right"></i><h4>{{$category->cat_name}}</h4></a></li>
              @endforeach

              
               
                  
          </div>
          <!-- END SIDEBAR -->

          <!-- slider -->
          <div class="col-md-9 col-sm-8">
            <div class="content-slider">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  @php $i=1; @endphp
                  @foreach($slider as$slider)
                  <div class="item {{ $i=='1'?'active':' '}}">
                    @php $i++; @endphp
                    <img src="{{asset($slider->slider_image)}}" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  @endforeach     
                </div>
              </div>
            </div>
          </div>
          <!-- slider  -->
        

        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>New Arrivals</h2>
            <div class="owl-carousel owl-carousel5">

      @foreach($product as$product)

              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="{{asset($product->product_image)}}" class="img-responsive" alt="Berry Lace Dress">
                    <div>
                      
                      <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                    </div>
                  </div>
                  <h3><a href="shop-item.html">{{$product->product_name}} || {{$product->selling_price}}Tk</a></h3>
               
                  <form action="{{route('addToCatr',$product->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="price" value="{{$product->selling_price}}">
                  <button type="submit"> Add to cart</button>
                  </form>


                  <div class="sticker sticker-sale"></div>
                </div>
              </div>
              @endforeach



             
              <div>
              
              </div>  
             
            </div>
            
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN TWO PRODUCTS & PROMO -->
               
        <!-- END TWO PRODUCTS & PROMO -->
      </div>
    </div>

    <!-- BEGIN BRANDS -->
    <div class="brands">
      <div class="container">
            <div class="owl-carousel owl-carousel6-brands">
              @foreach($brand as$brand)
              <a href="shop-product-list.html"><img src="{{asset($brand->logo)}}" alt="gap" title="gap"></a>
           @endforeach
            </div>
        </div>
    </div>


@endsection