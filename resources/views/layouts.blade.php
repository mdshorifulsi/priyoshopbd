<!DOCTYPE html>

<html lang="en">

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="{{asset('assets/frontend/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="{{asset('assets/frontend/assets/pages/css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/plugins/owl.carousel/assets/owl.carousel.css')}}" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="{{asset('assets/frontend/assets/pages/css/components.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/ssets/pages/css/slider.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/pages/css/style-shop.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/frontend/assets/corporate/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/corporate/css/style-responsive.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/corporate/css/themes/red.css')}}" rel="stylesheet" id="style-color">
  <link href="{{asset('assets/frontend/assets/corporate/css/custom.css')}}" rel="stylesheet">

  <!-- Toster --> 
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <!-- BEGIN CURRENCIES -->
                        <li class="shop-currencies">
                            <a href="javascript:void(0);">€</a>
                            <a href="javascript:void(0);">£</a>
                            <a href="javascript:void(0);" class="current">$</a>
                        </li>
                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">English </a>
                            <div class="langs-block-others-wrapper"><div class="langs-block-others">
                              <a href="javascript:void(0);">French</a>
                              <a href="javascript:void(0);">Germany</a>
                              <a href="javascript:void(0);">Turkish</a>
                            </div></div>
                        </li>
                        <!-- END LANGS -->
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="shop-account.html">My Account</a></li>
                        <li><a href="shop-wishlist.html">My Wishlist</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                        <li><a href="page-login.html">Log In</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="{{route('home')}}"><img src="{{asset('assets/frontend/assets/corporate/img/logos/logo-shop-red.png')}}" alt="Metronic Shop UI"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

       @php
       $total=App\Models\Cart::all()->where('user_ip',request()->ip())->sum(
        function($total){

          return $total->price*$total->qty;
        });

        $quantity=App\Models\Cart::all()->where('user_ip',request()->ip())->sum('qty');

       @endphp
        <div class="top-cart-block">
          <div class="top-cart-info">
            <a href="{{route('cart')}}" class="top-cart-info-count"><h5>{{$quantity}} items</h5></a>
            <a href="{{route('cart')}}" class="top-cart-info-value"><h5>Tk {{$total}}</h5></a>
          </div>
          <i class="fa fa-shopping-cart"></i>
                        
                     
        </div>

        @if(Session::has('customer'))
        <div class="top-cart-block">
          <div id="loginmodel" class="top-cart-info">
            <a href="{{url('customer-logout')}}"><h4>Logout</h4></a>

          </div>            
        </div>

        @else

        <div class="top-cart-block">
          <div id="loginmodel" class="top-cart-info">
            <a data-toggle="modal" data-target="#addcategorymodel" data-whatever="@mdo"><h4>Login/signup</h4></a>
          </div>            
        </div>
        @endif
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">

                


                <button class="btn btn-primary">Offer</button>
                <button class="btn btn-primary">Offer</button>
                <button type="button" class="btn btn-outline-light">Light</button>
                <button class="btn btn-sm btn-success btn pull-right">Search your choice</button><input type="search" name="">
                
              </a>
                
             
            <!-- END TOP SEARCH -->
          </ul>
        </div>
     
      </div>
    </div>
 
  @yield('content')

    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam </p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Information</h2>
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Delivery Information</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Customer Service</a></li>
            
            </ul>
          </div>
          <!-- END INFO BLOCK -->

          <!-- BEGIN TWITTER BLOCK --> 
        
          <!-- END TWITTER BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
        
          <!-- END BOTTOM CONTACTS -->
        </div>
        <hr>
        <div class="row">
          <!-- BEGIN SOCIAL ICONS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-icons">
              <li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
              <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
              <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
              <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
              <li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
              <li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
              <li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
              <li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
            </ul>
          </div>
          <!-- END SOCIAL ICONS -->
          <!-- BEGIN NEWLETTER -->
        
          <!-- END NEWLETTER -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    
    <!-- END FOOTER -->

    <!-- BEGIN fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 700px;">
            <div class="product-page product-pop-up">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-3">
                  <div class="product-main-image">
                    <img src="assets/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive">
                  </div>
                  <div class="product-other-images">
                    <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="assets/pages/img/products/model3.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model4.jpg"></a>
                    <a href="javascript:;"><img alt="Berry Lace Dress" src="assets/pages/img/products/model5.jpg"></a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-9">
                  <h2>Cool green dress with red bell</h2>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span>47.00</strong>
                      <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                      Availability: <strong>In Stock</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p>Lorem ipsum dolor ut sit ame dolore  adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat Nostrud duis molestie at dolore.</p>
                  </div>
                  <div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm">
                        <option>L</option>
                        <option>M</option>
                        <option>XL</option>
                      </select>
                    </div>
                    <div class="pull-left">
                      <label class="control-label">Color:</label>
                      <select class="form-control input-sm">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div>
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly name="product-quantity" class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                    <a href="shop-item.html" class="btn btn-default">More details</a>
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
    </div>
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>  
    <![endif]-->

       {{-- Toster --}}
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}

    <script src="{{asset('assets/frontend/assets/plugins/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/frontend/assets/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/frontend/assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>      
    <script src="{{asset('assets/frontend/assets/corporate/scripts/back-to-top.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/frontend/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{asset('assets/frontend/assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}" type="text/javascript"></script><!-- pop up -->
    <script src="{{asset('assets/frontend/assets/plugins/owl.carousel/owl.carousel.min.js')}}" type="text/javascript"></script><!-- slider for products -->
    <script src='{{asset('assets/frontend/assets/plugins/zoom/jquery.zoom.min.js')}}' type="text/javascript"></script><!-- product zoom -->
    <script src="{{asset('assets/frontend/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js')}}" type="text/javascript"></script><!-- Quantity -->

    <script src="{{asset('assets/frontend/assets/corporate/scripts/layout.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/frontend/assets/pages/scripts/bs-carousel.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>


{{-- customer login model  start--}}
<div class="modal fade" id="addcategorymodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

          <div class="modal-header">
              <h3 class="text-center">Place Login your Account</h3>
          </div>
        <div class="modal-body">

          
    <form action="{{ url('customer-login') }}" method="POST">
      @csrf

      <div class="form-group">
          <label for="recipient-name" class="col-form-label">email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
          <label for="recipient-name" class="col-form-label">password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
      </div>

      

      <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Login</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 

      </div>

    </form>
    <a href="{{url('customer_registration')}}">register account</a>


        </div>
    </div>
</div>

</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">

  $(document).ready(function allcart(){
      

      $.ajax({
                url:"{{route('all/cart')}}",
                type:"GET",
                async:false,
                data:request,
                success:function(data){
                    console.log(data);
                   
                },

            });

    
  });
   

</script>



</body>
<!-- END BODY -->
</html>


