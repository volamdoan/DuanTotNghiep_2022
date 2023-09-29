
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
               @if(Auth::user()->id_google == '')
               <li>
                   <i class="fa fa-cog"></i>
                   <a href="/profile/change-password">Thay đổi mật khẩu</a>
               </li>
               @endif
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
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area-3 pt-215 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">     
                        <div class="breadcrumb-wrapper-2 text-center">
                            <h3>Thanh toán</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                  <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                                </ol>
                            </nav>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

         <!-- coupon-area start -->
         <section class="coupon-area pt-100 pb-30">
            <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                       
                        <!-- ACCORDION END -->
                  </div>
               </div>
               @if(Session::get('Cart'))
               <div class="col-md-6">
                  @if(Session::has('message'))
                  <p  style="color:green;background: antiquewhite;font-size:18px;text-transform: none ">{{ Session::get('message') }}</p>
                  @endif
                  <div class="coupon-accordion">
                        <!-- ACCORDION START -->
                        <h3> <span id="showcoupon" style="text-transform: none">Nhấn vào để nhập mã giảm giá</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content">
                           <div class="coupon-info">
                             
                              <form action="/checkout_coupon" method="POST">
                                 @csrf
                                    <p class="checkout-coupon">
                                       <input type="text" name="coupon"placeholder="Nhập mã " />
                                       <button class="s-btn s-btn-2" type="submit">Sử dụng</button>
                                      
                                    </p>
                              </form>
                           </div>
                        </div>
                        <!-- ACCORDION END -->
                  </div>
               </div>
               @endif
            </div>
         </div>
         </section>
         <!-- coupon-area end -->

         <!-- checkout-area start -->
         <section class="checkout-area pb-70">
          
               <div class="container">
                 
                 
                  <form action="/checkout" method ="POST"  data-parsley-validate novalidate enctype="multipart/form-data">
                    @csrf
                     <div class="row">
                           <div class="col-lg-6">
                              <div class="checkbox-form">
                                 <h3>Chi tiết thanh toán</h3>
                                 <div class="row">
                                       <div class="col-md-12">
                                          
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Họ và tên <span class="required">*</span></label>
                                             <input type="text" name="name_order" value="{{old('name')}}"/>
                                             @if($errors->has('name_order'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('name_order') }}</strong>
                                                               @endif
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="checkout-form-list">
                                             <label>Số điện thoại<span class="required">*</span></label>
                                             <input type="text"  name="phone" value="{{old('phone')}}"/>
                                             @if($errors->has('phone'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('phone') }}</strong>
                                                               @endif
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="checkout-form-list">
                                             <label>Email</label>
                                             <input type="text"  name="email" value="{{old('email')}}"/>
                                             @if($errors->has('email'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('email') }}</strong>
                                                               @endif
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="checkout-form-list">
                                             <label>Địa chỉ <span class="required">*</span></label>
                                             <input type="text"  name="address" value="{{old('address')}}"/>
                                             @if($errors->has('address'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('address') }}</strong>
                                                               @endif
                                          </div>
                                       </div>
                                    
                                    <div class="col-md-6">
                                        <div class="country-select">
                                           <label>Tỉnh / Thành <span class="required">*</span></label>
                                           
                                           <select name="city" onchange="cityList()" id="ma_tp">
                                             
                                             @foreach($city as $city)
                                              <option    value="{{$city->matp < 10  ? '0' . $city->matp : $city->matp}}">{{ $city->name}}</option>
                                             @endforeach
                                           </select>
                                           
                                           @if($errors->has('city'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('city') }}</strong>
                                                               @endif
                                        </div>
                                       
                                  </div>
                                 
                                  <div class="col-md-6">
                                    <div class="country-select">
                                       <label>Quận / Huyện <span class="required">*</span></label>
                                       <select name="district" id="district" onchange="districtList()" >
                                         
                                         
                                          @foreach($district as $dis)
                                         
                                          <option  value="{{$dis->maqh< 016  ? '00' . $dis->maqh : $dis->maqh}}">{{$dis->name}}</option>
                                         @endforeach
                                       </select>
                                       @if($errors->has('district'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('district') }}</strong>
                                                               @endif
                                    </div>
                              </div>
                              <div class="col-md-6">
                                <div class="country-select">
                                   <label>Phường / Xã <span class="required">*</span></label>

                                   <select name="ward" id="dislist">
                                  
                                    @foreach($ward as $w)

                                      <option value="{{$w->maqh}}">{{$w->name}}</option>
                                     @endforeach
                                   </select>
                                   @if($errors->has('ward'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('ward') }}</strong>
                                                               @endif
                                </div>
                          </div>
                                      
                                 </div>
                                 <div class="different-address">
                                       
                                       <div class="order-notes">
                                          <div class="checkout-form-list">
                                             <label>Ghi chú</label>
                                             <textarea name="note" id="checkout-mess" cols="30" rows="10"
                                                   placeholder="" value="{{old('note')}}"></textarea>
                                                   @if($errors->has('note'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('note') }}</strong>
                                                               @endif
                                          </div>
                                       </div>
                                 </div>
                              </div>
                             
                           </div>
                           <div class="col-lg-6">
                              <div class="your-order mb-30 ">
                                 <h3>Đơn hàng</h3>
                                
                                 <div class="your-order-table table-responsive">
                                    
                                       <table>
                                        @if(Session::has('Cart')!=null)
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">ảnh</th>
                                                <th class="cart-product-name">Sản phẩm</th>
                                                <th class="cart-product-name">Kích thước</th>
                                                <th class="cart-product-name">Màu sắc</th>
                                                <th class="cart-product-name">Giá</th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                            @foreach(Session::get('Cart')->products as $n)
                                             <tr class="cart_item">
                                                <td class="product-thumbnail"><a href="product-details.html">                           
                                                    <img style="width:100px" src="{{asset('uploads/images/'.$n['productInfo']->thumnail)}}" alt="">
                                               </a></td>
                                           
                                                <td class="amount"><a href="">{{$n['productInfo']->title}}</a></td>
                                                <td class="amount"><a style="padding-left:35px" href="" >{{ $n['sized']}}</a></td>
                                                <td class="amount"><a href="" >{{ $n['color']}}</a></td>
                                                <td class="product-subtotal"><span class="amount">{{number_format($n['price'])}}đ</span></td>

                                              
                                                  
                                             </tr>
                                             @endforeach
                                          </tbody>
                                       
                                         
                                             
                                         </div>
                                          <tfoot>
                                             <tr class="cart-subtotal">
                                                   <th>Số lượng</th>
                                                   <td><span class="amount">{{Session::get('Cart')->totalQuanty}}</span></td>
                                             </tr>
                                             <tr class="shipping">
                                                   <th>Tạm tính</th>
                                                   <td>
                                                      <ul>
                                                         <li>
                                                              
                                                                <span class="amount">{{number_format(Session::get('Cart')->totaPrice)}}đ</span>
                                                               
                                                         </li>
                                                         
                                                      </ul>
                                                      
                                                   </td>
                                                   
                                             </tr>
                                             <tr class="shipping">
                                                <th>Vận chuyển</th>
                                                <td>
                                                   <ul>
                                                      <li>
                                                           
                                                             <span class="amount">Miễn Phí</span>
                                                            
                                                      </li>
                                                      
                                                   </ul>
                                                   
                                                </td>
                                             </tr>
                                           
                                          @if(Session::get('coupon'))
                                             <tr class="shipping">
                                                <th>Giảm giá</th>
                                                <td>
                                                   <ul>
                                                      <li>
                                                           <?php 
                                                           $total = Session::get('Cart')->totaPrice;
                                                           ?>
                                                             @if(Session::get('coupon'))
                                                                 @foreach(Session::get('coupon') as $key => $cou)
                                                                 @if($cou['coupon_condition']==1)
                                                                 Mã giảm:{{$cou['coupon_number']}}%
                                                                 <p>
                                                                  @php
                                                                  $total_coupon = ($total*$cou['coupon_number']/100);
                                                                  echo '<p><li>Tổng giảm:'.number_format($total_coupon,0,',','.').'đ</li></p>'

                                                                 
                                                                 @endphp
                                                                 </p>
                                                                 {{-- <p> <li>Tổng đã giảm:{{number_format($total-$total_coupon,0,',','.')}}đ</li></p> --}}
                                                            @elseif($cou['coupon_condition']==2)
                                                            Mã giảm:{{number_format($cou['coupon_number'],0,',','.')}}k
                                                            <p>
                                                               @php
                                                               $total_coupon=$total-$cou['coupon_number'];
                                                               @endphp
                                                            </p>
                                                            
                                                            @endif
                                                            @endforeach
                                                            @endif
                                                            <?php
                                                         //  Session::get('Cart')->totaPrice = $total_coupon;
                                                          
                                                            ?>
                                                      </li>
                                                      
                                                   </ul>
                                                   @if(Session::get('coupon'))
                                                   <a class="btn btn-primary" href="{{ url('/unset_coupon')}}">Xóa mã</a>
                                                   @endif
                                                </td>
                                             </tr>
                                                
                                          </tr>
                                          @if(Session::get('coupon')['0']['coupon_condition']==1)
                                             <tr class="order-total">
                                                   <th>Tổng tiền</th>
                                                   <td><strong><span class="amount">{{number_format($total-$total_coupon,0,',','.')}}đ</span></strong>
                                                   </td>
                                             </tr>
                                          @elseif(Session::get('coupon')['0']['coupon_condition']==2)
                                             <tr class="order-total">
                                                <th>Tổng tiền</th>
                                                <td><strong><span class="amount">{{number_format($total_coupon,0,',','.')}}đ</span></strong>
                                                </td>
                                          </tr>
                                          @endif
                                          </tfoot>
                                          @endif 
                                          <tr class="order-total">
                                             <th>Tổng tiền</th>
                                             <td><strong><span class="amount">{{number_format(Session::get('Cart')->totaPrice,0,',','.')}}đ</span></strong>
                                             </td>
                                       </tr>
                                       </table>
                                       @endif
                                 </div>

                                 <div class="payment-method">
                                    <h5>Chọn hình thức thanh toán</h3>
                                       
                                          @csrf
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="payment_option" id="flexRadioDefault1" value="1" checked>
                                       <label class="form-check-label" for="flexRadioDefault1"> 
                                          <i class="fa fa-money" style="font-size:29px"></i> Thanh toán khi giao hàng (COD)
                                       </label>
                                     </div>
                                    
                                    
                                    {{-- <div class="card">
                                      

                                       <div class="card-body">
                                          <i class="fa fa-money" style="font-size:29px"></i> Thanh toán khi giao hàng (COD)
                                       </div>
                                       <div class="card-body">
                                          <i class="fa fa-cc-visa"style="font-size:29px"></i> Thanh toán ATM
                                       </div>
                                     </div> --}}
                                    <div class="order-button-payment mt-20">
                                       <button type="submit" class="s-btn s-btn-2">Hoàn tất đơn hàng</button>
                                    </div>
                                   
                                 </div>
                              </div>
                           </div>
                     </div>
                  </form>
                 
                    
               </div>
         </section>
         <!-- checkout-area end -->

    

</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
   
       function cityList(){
      
        var matp = document.getElementById("ma_tp").value;
      
             $.ajax({
                url:"/city"+'/'+matp,
                type:"post",
                data: {
                  "_token": "{{ csrf_token() }}",
                  "matp":matp,
                  },
                success:function(data){
                  let kq = '';
                  $.each(data, function (index, value) { 
                     kq  += `<option value="${value.maqh}">${value.name}</option>`;
                  });
                  $("#district").html(kq);
                },                
            })
       }
           
       function districtList(){
      
      var maqh = document.getElementById("district").value;
   
           $.ajax({
              url:"/district"+'/'+maqh,
              type:"post",
              data: {
                "_token": "{{ csrf_token() }}",
                "maqh":maqh,
                },
              success:function(data){
            
                let dis = '';
                $.each(data, function (index, value) { 
                  dis  += `<option value="${value.maqh}">${value.name}</option>`;
                });
                $("#dislist").html(dis);
                console.log(dis);
              },                
          })
     }
    

   </script>
        
   