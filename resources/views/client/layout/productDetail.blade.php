<body>

    <?php
use Carbon\Carbon;
use app\Http\Controllers\client\ClientController;
?>
<body>
    <?php 
    // dd(Session::get('Cart')->products);
?>
   
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
                                <a href="index.html" class="logo" style="
                                font-size: 24px;
                                text-transform: uppercase;
                                font-family: 'Hind Madurai', sans-serif;
                                font-weight: 600;
                                letter-spacing: 1px;
                                line-height: 70px;"><span>GENZ<span style="color: #7fc1fc;">FASHION</span></span><i class="mdi mdi-layers"></i></a>
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
                                <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-8 col-sm-6 col-8">
                                    <div class="header-right-wrapper d-flex align-items-center justify-content-end">
                                        <div class="header-right header-right-2 d-flex align-items-center justify-content-end">                               <div class="header-icon header-icon-2 d-inline-block ml-30">
                                     @if(Session::has('Cart')!=null)
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
        <div  id="change-item-cart">
            @if(Session::has('Cart')!=null)
        <div class="cartmini__top d-flex align-items-center justify-content-between">
            <h4>GIỎ HÀNG</h4>
            <div class="cartminit__close">
                <button type="button" data-bs-toggle="modal" data-bs-target="#cartMiniModal" class="cartmini__close-btn"> <i class="fal fa-times"></i></button>
            </div>
        </div>
        <div class="cartmini__list" style="line-height:30px; height:472px">
           
            <ul>
              
                @foreach(Session::get('Cart')->products as $n)
                 
                <li class="cartmini__item p-rel d-flex align-items-start">
                    <div class="cartmini__thumb mr-15">
                        <a href="product-details.html">
                            <img  src="{{asset('uploads/images/'.$n['productInfo']->thumnail)}}" alt="">
                        </a>
                    </div>
                    <div class="cartmini__content">
                        <h3 class="cartmini__title">
                            <a href="product-details.html">{{$n['productInfo']->title}}</a>
                        </h3>
                        Kích thước:<span style="font-size:15px"> {{$n['sized']}}</span><br>

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
            <span>{{number_format(Session::get('Cart')->totaPrice)}}đ </span>
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


    <!-- sidebar area start -->
    <section class="offcanvas__area">
        <div class="modal fade" id="offCanvasModal" tabindex="-1" aria-labelledby="offCanvasModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="offcanvas__wrapper">
                        <div class="offcanvas__top d-flex align-items-center mb-60 justify-content-between">
                            <div class="logo">
                                <a href="/">
                                   <img src="client/assets/img/logo/logo-black.png" alt="">
                                </a>
                             </div>
                           <div class="offcanvas__close">
                              <button class="offcanvas__close-btn" data-bs-toggle="modal" data-bs-target="#offCanvasModal">
                                 <svg viewBox="0 0 22 22">
                                    <path d="M12.41,11l5.29-5.29c0.39-0.39,0.39-1.02,0-1.41s-1.02-0.39-1.41,0L11,9.59L5.71,4.29c-0.39-0.39-1.02-0.39-1.41,0
                                    s-0.39,1.02,0,1.41L9.59,11l-5.29,5.29c-0.39,0.39-0.39,1.02,0,1.41C4.49,17.9,4.74,18,5,18s0.51-0.1,0.71-0.29L11,12.41l5.29,5.29
                                    C16.49,17.9,16.74,18,17,18s0.51-0.1,0.71-0.29c0.39-0.39,0.39-1.02,0-1.41L12.41,11z"/>
                                 </svg>
                              </button>
                           </div>
                        </div>
                        <div class="offcanvas__content p-relative z-index-1">
                           <div class="canvas__menu fix ">
                              <div class="mobile-menu"></div>
                           </div>
                           <div class="offcanvas__action mb-15">
                              <a href="login.html">Login</a>
                           </div>
                           <div class="offcanvas__action mb-15 ">
                              <a href="wishlist.html" class="has-tag">
                                 <svg viewBox="0 0 22 22">
                                    <path d="M20.26,11.3c2.31-2.36,2.31-6.18-0.02-8.53C19.11,1.63,17.6,1,16,1c0,0,0,0,0,0c-1.57,0-3.05,0.61-4.18,1.71c0,0,0,0,0,0
                                    L11,3.41l-0.81-0.69c0,0,0,0,0,0C9.06,1.61,7.58,1,6,1C4.4,1,2.89,1.63,1.75,2.77c-2.33,2.35-2.33,6.17-0.02,8.53
                                    c0,0,0,0.01,0.01,0.01l0.01,0.01c0,0,0,0,0,0c0,0,0,0,0,0L11,20.94l9.25-9.62c0,0,0,0,0,0c0,0,0,0,0,0L20.26,11.3
                                    C20.26,11.31,20.26,11.3,20.26,11.3z M3.19,9.92C3.18,9.92,3.18,9.92,3.19,9.92C3.18,9.92,3.18,9.91,3.18,9.91
                                    c-1.57-1.58-1.57-4.15,0-5.73C3.93,3.42,4.93,3,6,3c1.07,0,2.07,0.42,2.83,1.18C8.84,4.19,8.85,4.2,8.86,4.21
                                    c0.01,0.01,0.01,0.02,0.03,0.03l1.46,1.25c0.07,0.06,0.14,0.09,0.22,0.13c0.01,0,0.01,0.01,0.02,0.01c0.13,0.06,0.27,0.1,0.41,0.1
                                    c0.08,0,0.16-0.03,0.25-0.05c0.03-0.01,0.07-0.01,0.1-0.02c0.07-0.03,0.13-0.07,0.2-0.11c0.03-0.02,0.07-0.03,0.1-0.06l1.46-1.24
                                    c0.01-0.01,0.02-0.02,0.03-0.03c0.01-0.01,0.03-0.01,0.04-0.02C13.93,3.42,14.93,3,16,3c0,0,0,0,0,0c1.07,0,2.07,0.42,2.83,1.18
                                    c1.56,1.58,1.56,4.15,0,5.73c0,0,0,0.01-0.01,0.01c0,0,0,0,0,0L11,18.06L3.19,9.92z"/>
                                 </svg>
                                 <span class="tag">2</span>
                              </a>
                           </div>
                           <div class="offcanvas__action mb-15 d-sm-block">
                              <a href="cart.html" class="has-tag">
                                <i class="far fa-shopping-bag"></i>
                                <span class="tag">4</span>
                              </a>
                           </div>
                           <div class="offcanvas__social mt-15">
                              <ul>
                                 <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                 </li>
                                 <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
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
        
     </section>
     <!-- sidebar area end -->

    <main>

       
        <!-- breadcrumb area end -->

        <!-- product details area start -->
        <section class="product__details-area pb-45 box-plr-45 gray-bg-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div class="product__details-nav-wrapper d-sm-flex align-items-center">
                            <div class="product__details-nav mr-120">
                                <ul class="nav nav-tabs flex-sm-column" id="productDetailsNav" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="pro-nav-1-tab" data-bs-toggle="tab" data-bs-target="#pro-nav-1" type="button" role="tab" aria-controls="pro-nav-1" aria-selected="true">
                                          <img style="width:80px;height:102px" src="{{asset('uploads/images/'.$product->thumnail)}}" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="pro-nav-2-tab" data-bs-toggle="tab" data-bs-target="#pro-nav-2" type="button" role="tab" aria-controls="pro-nav-2" aria-selected="false">
                                        <img style="width:80px;height:102px" src="{{asset('uploads/images/'.$product->thumnail_two)}}" alt="">
                                    </button>
                                    </li>
                                  
                                  </ul>
                            </div>
                            <div class="product__details-thumb">
                                <div class="tab-content" id="productDetailsTabContent">
                                    {{-- @foreach($product as $p) --}}
                                    <div class="tab-pane fade show active" id="pro-nav-1" role="tabpanel" aria-labelledby="pro-nav-1-tab">
                                        <div class="product-nav-thumb-wrapper">
                                            <a href="{{asset('uploads/images/'.$product->thumnail)}}" class="product-img-zoom popup-image">
                                                <i class="fal fa-compress"></i>
                                            </a>
                                            <img src="{{asset('uploads/images/'.$product->thumnail)}}" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pro-nav-2" role="tabpanel" aria-labelledby="pro-nav-2-tab">
                                        <div class="product-nav-thumb-wrapper">
                                            <a href="{{asset('uploads/images/'.$product->thumnail_two)}}" class="product-img-zoom popup-image">
                                                <i class="fal fa-compress"></i>
                                            </a>
                                            <img src="{{asset('uploads/images/'.$product->thumnail_two)}}" alt="">
                                        </div>
                                    </div>
                                    
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-6 col-lg-6">
                        <div class="product__details-content pt-60">
                            <h3 class="product__details-title">
                                <a href="product-details.html">{{$product->title}}</a>
                                <p>Lượt xem: <i class="fa fa-eye"></i> {{$product->view}}</p>
                            </h3>
                            <div class="product__details-price">
                                <span style="color:red;font-size:25px;font-weight:bold">{{ number_format($product->price) }}đ</span>
                                @if ($product->price_saled)
                                <del style="color:red">{{ number_format($product->price_saled) }}đ</del>
                                @endif
                               
                            </div>
                            @if($product->saled)
                           
                                <div class="product__details-price">
                                    Giảm giá: <b style="color:red">{{$product->saled}}%</b>
                                </div>
                               

                            
                                 @endif

                            <div class="product__details-color d-sm-flex align-items-center mb-25">
                                <span>Màu sắc:</span>
                                <select id="color" style="width: 140px;height: 40px;text-align:center;font-size:15px" class="form-select"   aria-label="Default select example">
                                    @foreach ($color as $key => $v)
                                    <option  value="{{ $v }}">{{$v}}</option>  
                                    
                                    @endforeach                                                 
                                </select>
                            </div>
                            <div class="product__details-size d-sm-flex align-items-center mb-30">
                                <span>Kích thước: </span>
                                
                                <select id="size" style="width: 140px;height: 40px;border-radius:4px;text-align:center;font-size:15px" class="form-select"   aria-label="Default select example">
                                    @foreach ($pro as $key => $v)
                                    <option  value="{{$v}}">{{$v}}</option>  
                                    
                                    @endforeach  
                                                                             
                                </select>
                               
                            </div>
                            <div class="product__details-action">
                               
                              
                                    <div class="product__details-quantity d-sm-flex align-items-center">
                                        <div class="product-quantity mb-20 mr-15">
                                            <div class="cart-plus-minus"><input  type="text" id="quanty-item-{{$product->id}}" value="1" /></div>
                                        </div>
                                        <div class="product-add-cart mb-20">
                                            <button class="s-btn s-btn-2 s-btn-big" onclick="AddCart({{$product->id}})">Thêm vào giỏ hàng</button>
                                        </div>
                                    </div>
                               
                              
                             
                            </div>
                           
                            <div class="product__details-meta mb-25">
                                <ul>
                                    <li>
                                        {{-- <div class="product-availibility">
                                            <span>Tình trạng:</span>
                                            <p>
                                                <span>Còn hàng</span>
                                            </p>
                                        </div> --}}
                                    </li>
                                    <li>
                                        {{-- <div class="product-sku">
                                            <span>Sku:</span>
                                            <p>
                                                <span>0026AG90</span>
                                            </p>
                                        </div> --}}
                                    </li>
                                    @foreach( $category as $c)
                                    <li>
                                        <div class="product-sku">
                                            <span>Danh mục:</span>
                                            <p>
                                                <a href="#">{{$c->name}}</a>
                                               
                                            </p>
                                        </div>
                                    </li>
                                    @endforeach
                                    <li>
                                        <div class="product-sku">
                                            <span>Từ khóa:</span>
                                            <p>
                                                <a href="#">{{$product->tags}}</a>
                                               
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="product__details-social d-sm-flex align-items-center">
                                <span>Share: </span>
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
          
        </section>
        <!-- product details area end -->

        <!-- product info area start -->
        <section class="product__info-area pt-95">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__info-btn text-center" role="tablist">
                            <ul class="nav nav-tabs d-sm-flex justify-content-center" id="productInfoTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" type="button" id="des-tab" data-bs-toggle="tab" data-bs-target="#des"  role="tab" aria-controls="des" aria-selected="true">Mô tả</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" type="button" id="addi-tab" data-bs-toggle="tab" data-bs-target="#addi"  role="tab" aria-controls="addi" aria-selected="true">Thông tin thêm</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" type="button" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" role="tab" aria-controls="review" aria-selected="true">Nhận xét </button>
                                </li>
                              </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__info-tab-content tab-content pb-75">
                            <div class="tab-pane fade show active" id="des" role="tabpanel" aria-labelledby="des-tab">
                                <div class="product__details-description pt-100">
                                    <div class="row">
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="description-thumb m-img text-center">
                                                <img src="client/assets/img/products/details/description/product-des-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="description-thumb m-img text-center">
                                                <img src="client/assets/img/products/details/description/product-des-2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                            <div class="description-thumb m-img text-center">
                                                <img src="client/assets/img/products/details/description/product-des-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xxl-12 ">
                                            <p class="product-additional-des mt-90">{{$product->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="addi" role="tabpanel" aria-labelledby="addi-tab">
                                <div class="product__details-info mt-50">
                                    <ul>
                                       <li>
                                          <h4>Trọng lượng</h4>
                                          <span>2 lbs</span>
                                       </li>
                                       <li>
                                          <h4>Kích thước</h4>
                                          <span>12 × 16 × 19 in</span>
                                       </li>
                                       <li>
                                          <h4>Sản phẩm</h4>
                                          <span>{{$product->title}}</span>
                                       </li>
                                       <li>
                                          <h4>Màu sắc</h4>
                                          <span>{{$product->color}}</span>
                                       </li>
                                       <li>
                                          <h4>Kích thước</h4>
                                          <span>{{$product->size}}</span>
                                       </li>
                                      
                                       <li>
                                          <h4>Gía tiền</h4>
                                          <span>{{ number_format($product->price) }}đ</span>
                                          @if ($product->price_saled)
                                    <del style="padding-left:24px">{{ number_format($product->price_saled) }}đ</del>
                                    @endif
                                       </li>
                                       
                                       <li>
                                          <h4>Thương hiệu</h4>
                                          @foreach ($brand as $b)
                                          <span>{{$b->name}}</span>
                                          @endforeach
                                       </li>
                                    </ul>
                                 </div>
                            </div>
                            <div class="tab-pane fade " id="review" role="tabpanel" aria-labelledby="review-tab">
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product info area end -->

        <!-- product details banner start -->
        <section class="product__details-banner product__details-banner-ptb-230 include-bg" data-background="assets/img/products/details/bg/product-details-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="product__details-banner-content text-center">
                            <img src="client/assets/img/logo/logo-white-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <!-- popup area start -->
      
        <!-- popup area end -->

        <!-- subscribe area start -->
   
        <!-- subscribe area end -->

</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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

$("#change-item-cart").on("click", ".cartmini__remove", function() {
    $.ajax({
        url: '/DeleteCart/' + $(this).data("id"),
        type: 'GET',
    }).done(function(response) {

        RenderCart(response);
    })
})

function RenderCart(response) {
    $("#change-item-cart").empty();
    $("#change-item-cart").html(response);
    $("#total-quantily-show").text($("#total-quantily-cart").val());
    

}
</script>
<script>
    function menuToggle(){
        document.querySelector('.menu').classList.toggle('active');
    }
</script>
    <!-- footer area start -->
   