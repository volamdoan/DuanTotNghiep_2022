<?php
use Carbon\Carbon;
use app\Http\Controllers\client\ClientController;

?>
<body>
    <?php 
    // dd(Session::get('Cart')->products);
?>
    <!-- preloader start -->
   
    <!-- preloader end -->

    <!-- header area start -->
    <header >
        <div class="header-area">
            <div class=" pl-60 pr-60 d-none d-md-block">
                <div class="row align-items-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-4">
                        
                       
                    </div>
                    <marquee behavior="alternate"
                                    style="background:white; color:rgb(12, 12, 12); font-size: 20px;">
                                    <h3 class="nhapnhay">GIẢM GIÁ LỚN VÀO NGÀY 11.11</h3>
                                </marquee>
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-8">
                        
                    </div>
                </div>
            </div>
            <div id="header-sticky" class="header-main header-main-2 header-padding-2 pl-60 pr-60 header-sticky header-sticky-white">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-6 col-4">
                        <div class="header-left">
                            <div class="logo pr-55 d-inline-block">
                                <a href="/" class="logo" style=";font-size: 24px;text-transform: uppercase;font-family: 'Hind Madurai', sans-serif;font-weight: 600;letter-spacing: 1px; line-height: 70px;">
                                  <img src="client/assets/img/logo/logoGENZ.png" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-8 col-lg-8 d-none d-lg-block">
                        <div class="main-menu p-rel d-flex align-items-center justify-content-center">
                            
                            <nav id="mobile-menu">
                               
                                <ul>
                                <li ><a style="font-family: 'Archivo';font-size: 16px;" href="/">Trang chủ</a>
                                   
                                </li>
                                <li class="static">
                                    <a style="font-family: 'Archivo';font-size: 16px;" href="/shop">Cửa hàng<i class="icon-arrow-down"></i></a>
                                   
                                 </li>                                                                   
                                <li>
                                    <a style="font-family: 'Archivo';font-size: 16px;" href="/blog">Tin tức</a>
                                   
                                </li>
                                <li>
                                    <a style="font-family: 'Archivo';font-size: 16px;" href="/about-us">Giới thiệu</a>
                                    
                                </li>
                                <li><a style="font-family: 'Archivo';font-size: 16px;" href="/contact">Liên hệ</a></li>
                            </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-8 col-sm-6 col-8">
                        <div class="header-right-wrapper d-flex align-items-center justify-content-end">
                            @guest
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="d-none d-xxl-inline-block">{{ __('Đăng nhập/') }}</a>
                            @endif

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="d-none d-xxl-inline-block">{{ __('Đăng ký') }}</a>
                            @endif
                        @else
                        <div class="action">
                  <div class="profile" onclick="menuToggle()">
                        <img src="{{Auth::user()->picture}}" alt="">
                     </div>
       
                         <div class="menu">
                         <h3 class="user_name">{{Auth::user()->name}}
                             <br>
                             @if(Auth::user()->role == '2')
                             <span>(Admin)</span>
                             @else
                             <span>(Khách hàng)</span>
                             @endif
                          </h3>
                      <ul>
                        <li>
                             <i class="fa fa-user"></i>
                                   <a href="/profile/edit_profile">Thông tin </a>
                          </li>
                          @if (Auth::user()->role == '2')
                         <li>
                            <i class="fa fa-database"></i>
                                 <a href="/admin/dashboard">Quản lý hệ thống</a>
                          </li>
               @endif
               <li>
                   <i class="fa fa-cog"></i>
                   <a href="/profile/change-password">Thay đổi mật khẩu</a>
               </li>
               <li>
                   <i class="fa fa-sign-out"></i>
                   <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">{{ __('Đăng xuất') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
               </li>
           </ul>
       </div>
       
   </div>
     </div>
                        @endguest
                            <div class="header-right header-right-2 d-flex align-items-center justify-content-end">
                                <div class="header-icon header-icon-2 d-inline-block ml-30">
                                     @if(Session::has('Cart') != null)
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal"><i class="fal fa-shopping-cart"></i><span id="total-quantily-show">{{Session::get('Cart')->totalQuanty}}</span></button>
                                     @else
                                     <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal"><i class="fal fa-shopping-cart"></i><span id="total-quantily-show">0</span></button>
                                     @endif
                                </div>
                            </div>
                            <div class="header-bar ml-20 d-lg-none">
                                <button type="button" class="header-bar-btn header-bar-btn-black" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    
    <!-- cart mini area start -->
    <div class="cartmini__area">
        <div class="modal fade" id="cartMiniModal" tabindex="-1" aria-labelledby="cartMiniModal" aria-hidden="true">
            <div class="modal-dialog">
         
                
<div class="modal-content">
    <div class="cartmini__wrapper">
        
        <div class="cartmini__top d-flex align-items-center justify-content-between">
            <h4>GIỎ HÀNG</h4>
            <div class="cartminit__close">
                <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal" class="cartmini__close-btn"> <i class="fal fa-times"></i></button>
            </div>
        </div>
        <div class="div" id="change-item-cart">
            @if(Session::has('Cart')!=null)
        <div class="cartmini__list" style="line-height:30px; height:472px">
            
            <ul>
                
                
                    
                @foreach(Session::get('Cart')->products as $n)

                <li class="cartmini__item p-rel d-flex align-items-start">
                    <div class="cartmini__thumb mr-15">
                        <a href="product-details.html">
                            <img   src="{{asset('uploads/images/'.$n['productInfo']->thumnail)}}" alt="">
                        </a>
                    </div>
                    <div class="cartmini__content">
                        <h3 class="cartmini__title">
                            <a href="product-details.html">{{$n['productInfo']->title}}</a>
                        </h3>
                        Kích thước:<span style="font-size:15px"> {{$n['sized']}}</span><br>
                        Màu sắc:<span style="font-size:15px"> {{$n['color']}}</span><br>

                        <span class="cartmini__price">
                            <span class="price">{{$n['quantily']}} × {{number_format($n['productInfo']->price)}}đ</span>
                        </span>
                    </div>
                    <a href="#" class="cartmini__remove" data-id="{{$n['productInfo']->id.$n['sized'].$n['color']}}">
                        <i class="fal fa-times"></i>
                    </a>
                </li>
                @endforeach
                
            </ul>
            
           
        </div>
        
        <div class="cartmini__total d-flex align-items-center justify-content-between">
            <h5>Tổng tiền:</h5>
            <span>{{number_format(Session::get('Cart')->totaPrice)}}đ</span>
        </div>
       
    
        @endif
            
       
        
        
       
        <div class="cartmini__bottom">
            <a href="/listCart" class="s-btn w-100 mb-20">Xem giỏ hàng</a>
            <a href="/checkout" class="s-btn s-btn-2 w-100">Thanh toán</a>
        </div>
        
       </div>
       
    </div>
   
</div>

        
            </div>
        </div>
    </div>
    <!-- cart mini area end -->

    <!-- search area start -->
    <div class="search__area">
        <div class="search__close">
            <button type="button" class="search__close-btn search-close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="search__wrapper">
            <h4>Searching</h4>
            <div class="search__form">
                <form action="#">
                    <div class="search__input">
                        <input type="text" placeholder="Search Products">
                        <button type="submit">
                            <i class="far fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- search area end -->


  
     <!-- sidebar area end -->

    <main>
<?php

use app\Http\Controllers\client\ShopController;

?>


    <!-- preloader start -->
   
    <!-- preloader end -->


    <!-- header area start -->
   

        <!-- breadcrumb area start -->
        <div class="row">
            <h4 style="padding-left:300px;"></h4><hr>
        </div>
        <!-- breadcrumb area end -->

        <!-- shop area start -->
        <div class="shop-area mb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-3 col-lg-4">
                        <div class="shop-sidebar-area pt-7 pr-60">
                            <div class="single-widget pb-50 mb-50">
                                {{-- <h4 class="widget-title">Danh mục</h4>
                                <div class="widget-category-list">
                                    @foreach ( $category as $c)
                                        <div class="single-widget-category">
                                            
                                            <p>{{$c->name}} <span>{{ShopController::countProductByIdCate($c->id)}}</span></p>
                                        </div>
                                       @endforeach
                                    
                                </div> --}}
                                <div class="card">
                                    <div class="card-header" style="text-align:center">
                                      Danh mục
                                    </div>
                                    <div class="card-body">
                                        @foreach ( $category as $c)
                                        <div class="single-widget-category">
                                            
                                            <p ><a href="/sanpham/{{$c->id}}">{{$c->name}}</a> <span>{{ShopController::countProductByIdCate($c->id)}}</span></p>
                                        </div>
                                       @endforeach
                                      
                                    </div>
                                  </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-9 col-lg-8 order-first order-lg-last">
                        <div class="shop-top-area mb-40">
                            <div class="row">
                                <div class="col-xxl-4 col-xl-2 col-md-3 col-sm-3">
                                    
                                </div>
                                <div class="col-xxl-4 col-xl-6 col-md-6 col-sm-6">
                                  
                                </div>
                                <div class="col-xl-4 col-xl-4 col-md-3 col-sm-3">
                                    <div class="text-sm-end">
                                       <div class="select-default">
                                       
                                       
                                            <select name="short" onchange=" fiter()" id="sort" class="shorting-select">
                                                <option value="?filter=desc&loai=id" >Sản phẩm mới nhất</option>
                                                <option  value="?filter=asc&loai=id">Sản phẩm cũ nhất</option>
                                                <option value="?filter=asc&loai=price" >Giá tăng dần</option>
                                                <option value="?filter=desc&loai=price" >Giá giảm dần</option>
                                                

                                            </select>
                                        
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /. shop top area -->
                        <div class="shop-main-area">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade  show active" id="tab1">
                                    <div class="row pb-20">
                                        @foreach($product as $p)
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="single-product mb-15 wow fadeInUp" data-wow-delay=".1s">
                                                <div class="product-thumb">
                                                    <img src="{{asset('uploads/images/'.$p->thumnail)}}" alt="#">
                                                    <img src="{{asset('uploads/images/'.$p->thumnail_two)}}" alt="#">
                                                    <div class="cart-btn cart-btn-1 p-abs">
                                                        <a  style="font-family: 'Archivo';font-size: 16px;"href="/productDetail/{{$p->id}}">Chi tiết sản phẩm</a>
                                                    </div>

                                                      @if($p->saled)
                                    <span class="discount discount-3 p-abs"  >       
                                        {{$p->saled}}%   
                                         </span> @endif
                                                   
                                                </div>
                                                <div class="product-content">
                                                    <h4 class="pro-title pro-title-1"><a href="product-details.html">{{$p->title}}</a></h4>
                                                    <div class="pro-price">
                                                        <span>{{ number_format($p->price) }}đ</span>
                                        @if ($p->price_saled)<del style="text-decoration:line-through;">{{ number_format($p->price_saled) }}đ</del> @endif
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                       
                                       @endforeach
                                       
                                       
                                      
                                        
                                       
                                        
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="product-wrap">
                                       
                                        
                                          
                                        
                                       
                                       
                                       
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shop-pagination" style="
                        
                            padding-left: 500px;
                            font-size: 19px;
                            width: 100px;
                          ;
                        ">
                            {{$product->appends(request()->all())->links()}}
                           
                        </div>
                        <!-- /. shop main area -->
                    </div>
                </div>
            </div>
        </div>
        <!-- shop area end -->

        <!-- product modal area start -->
        <div class="product__modal-area modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="product__modal-inner position-relative">
                    <div class="product__modal-close">
                        <button data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti-close"></i>
                        </button>
                    </div>
                    <div class="product__modal-left">
                        <div class="tab-content mb-10" id="productModalThumb">
                            <div class="tab-pane fade show active" id="pro-1" role="tabpanel" aria-labelledby="pro-1-tab">
                                <div class="product__modal-thumb w-img">
                                    <img src="assets/img/products/modal/product-modal-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-2" role="tabpanel" aria-labelledby="pro-2-tab">
                                <div class="product__modal-thumb w-img">
                                    <img src="assets/img/products/modal/product-modal-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-3" role="tabpanel" aria-labelledby="pro-3-tab">
                                <div class="product__modal-thumb w-img">
                                    <img src="assets/img/products/modal/product-modal-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-4" role="tabpanel" aria-labelledby="pro-4-tab">
                                <div class="product__modal-thumb w-img">
                                    <img src="assets/img/products/modal/product-modal-4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product__modal-nav">
                            <ul class="nav nav-tabs" id="productModalNav" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab" data-bs-target="#pro-1" type="button" role="tab" aria-controls="pro-1" aria-selected="true">
                                      <img src="assets/img/products/modal/product-modal-sm-1.jpg" alt="">
                                  </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2" type="button" role="tab" aria-controls="pro-2" aria-selected="false">
                                    <img src="assets/img/products/modal/product-modal-sm-2.jpg" alt="">
                                  </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3" type="button" role="tab" aria-controls="pro-3" aria-selected="false">
                                    <img src="assets/img/products/modal/product-modal-sm-3.jpg" alt="">
                                  </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pro-4-tab" data-bs-toggle="tab" data-bs-target="#pro-4" type="button" role="tab" aria-controls="pro-4" aria-selected="false">
                                      <img src="assets/img/products/modal/product-modal-sm-4.jpg" alt="">
                                    </button>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class="product__modal-right">
                        <h3 class="product__modal-title">
                            <a href="product-details.html">Living Room Lighting</a>
                        </h3>
                        <div class="product__modal-rating d-flex align-items-center">
                            <ul class="mr-10">
                                <li>
                                    <a href="#"><i class="ti-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-star"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ti-star"></i></a>
                                </li>
                            </ul>
                            <div class="customer-review">
                                <a href="#">(1 customer review)</a>
                            </div>
                        </div>
                        <div class="product__modal-price mb-10">
                            <span class="price new-price">$700.00</span>

                            <span class="price old-price">$899.99</span>
                        </div>
                        <div class="product__modal-available">
                            <p> Availability: <span>In Stock</span> </p>
                        </div>
                        <div class="product__modal-sku">
                            <p> Sku: <span> 0026AG90-1</span> </p>
                        </div>
                        <div class="product__modal-des">
                            <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod legunt saepius.…</p>
                        </div>
                        <div class="product__modal-quantity mb-15">
                            <h5>Quantity:</h5>
                            <form action="#">
                                <div class="pro-quan-area d-lg-flex align-items-center">
                                    <div class="product-quantity mr-20 mb-25">
                                        <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                    </div>
                                    <div class="product__modal-cart mb-25">
                                        <button class="product-modal-cart-btn " type="submit">Add to cart</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="product__modal-categories d-flex align-items-center">
                            <span>Categories: </span>
                            <ul>
                                <li><a href="#">Decor, </a></li>
                                <li><a href="#">Lamp, </a></li>
                                <li><a href="#">Lighting</a></li>
                            </ul>
                        </div>
                        <div class="product__modal-categories d-flex align-items-center">
                            <span>Tags: </span>
                            <ul>
                                <li><a href="#">Furniture, </a></li>
                                <li><a href="#">Lighting, </a></li>
                                <li><a href="#">Living Room, </a></li>
                                <li><a href="#">Table</a></li>
                            </ul>
                        </div>
                        <div class="product__modal-share d-flex align-items-center">
                            <span>Share this product: </span>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <!-- product modal area start -->

        <!-- popup area start -->
       
        <!-- popup area end -->

        <!-- subscribe area start -->
       
        <!-- subscribe area end -->

</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
   

function fiter(){
    let value = document.getElementById("sort").value;
    
    window.location.href = value;

   }
   function AddCart(id, quantily,size,color) {
    // test thử
    var size = document.getElementById("size").value;
    var color = document.getElementById("color").value;
    
    $.ajax({
        url: '/AddCart/' + id + '/' + $("#quanty-item-"+id).val()+ '/'+size+'/'+color,
        type: 'GET',
    }).done(function(response) {
        RenderCart(response);
        toastr.success('Bạn đã thêm sản phẩm thành công');
    })
}

</script>
   