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
                            <a href="/" class="logo" style="
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
     <div class="div" id="change-item-cart">
        @if(Session::has('Cart')!=null)

<div class="modal-content">
<div class="cartmini__wrapper">
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
                <a href="#" class="cartmini__remove" data-id="{{$n['productInfo']->id.$n['sized']}}">
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
        <a href="checkout.html" class="s-btn s-btn-2 w-100">checkout</a>
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
                            <a href="index.html">
                               <img src="{{asset('client/assets/img/logo/logo-black.png')}}" alt="">
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

<div class="hi">
    <img src="{{asset('client/assets/img/contact/shape.png')}}" class="square" alt="" />
    <div class="col-md-6 col-sm-12 col-xs-12 wrapbox-iframe-contact boxContact-sticky">
      <div class="box-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1405.9175074320149!2d106.66735219737502!3d10.7711092766592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752edc4a98617b%3A0xa921473a4b34903e!2zSOG6u20gNDA3IFPGsCBW4bqhbiBI4bqhbmgsIFBoxrDhu51uZyAxMCwgUXXhuq1uIDEwLCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1603357529074!5m2!1svi!2s" width="600" height="670"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

    </div>
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Liên hệ</h3>
        <p class="text1">
          Xin chào ! <br>
          <span>Mọi thắc mắc hoặc có vấn đề gì vui lòng gửi nội dung đến địa chỉ email của chúng tôi, chúng tôi sẽ giải đáp cho các bạn trong giây lát. Xin cảm ơn </span>
        </p>
        <div class="info">
          <div class="information">
            <img src="{{asset('client/assets/img/contact/location.png')}}" class="icon" alt="" />
            <p>CN1: 403 Sư Vạn Hạnh, P.12, Q.10 </p>
          </div>
          <div class="information">
            <img src="{{asset('client/assets/img/contact/location.png')}}" class="icon" alt="" />
            <p>CN2: The Playground, 90 Lê Lai, Q.1</p>
          </div>
          <div class="information">
            <img src="{{asset('client/assets/img/contact/email.png')}}" class="icon" alt="" />
            <p>genzstore2022@gmail.com
            </p>
          </div>
          <div class="information">
            <img src="{{asset('client/assets/img/contact/phone.png')}}" class="icon" alt="" />
            <p>+84915491540</p>
          </div>
        </div>

        <div class="social-media">
          <p>Liên hệ với chúng tôi qua :</p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form action="{{route('send.email')}}" method="POST" id="contact_form">
          @csrf
          <h3 class="title1">Gửi thắc mắc cho chúng tôi</h3>
          <div class="input-container">
<input type="text" name="name" value="{{old('name')}}" class="input" />
            <label for="">Họ và tên</label>
            <span>Họ và tên</span>
            @error('name') <a class="text-danger">{{$message}}</a>@enderror
          </div>
          <div class="input-container">
            <input type="email" name="email" value="{{old('email')}}" class="input" />
            <label for="">Email</label>
            <span>Email</span>
            @error('email') <a class="text-danger">{{$message}}</a>@enderror
          </div>
          <div class="input-container">
            <input type="text" name="phone" value="{{old('phone')}}" class="input" />
            <label for="">Số điện thoại</label>
            <span>Số điện thoại</span>
            @error('phone') <a class="text-danger">{{$message}}</a>@enderror
          </div>
          <div class="input-container">
            <input type="text" name="subject" value="{{old('subject')}}" class="input" />
            <label for="">Vấn đề của bạn</label>
            <span>Vấn đề của bạn</span>
            @error('subject') <a class="text-danger">{{$message}}</a>@enderror
          </div>
          <div class="input-container textarea">
            <textarea name="message" value="{{old('message')}}" class="input"></textarea>
            <label for="">Nội dung</label>
            <span>Nội dung</span>
            @error('message') <a class="text-danger">{{$message}}</a>@enderror
          </div>
          <div class="sitebox-recaptcha">
          <img src="{{asset('client/assets/img/contact/recaptcha.png')}}" class="icon" alt="" />
            Trang web này được bảo vệ bởi reCAPTCHA và Google
            <a class="text" href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Chính sách bảo mật</a> 
            và <a class="text" href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Điều khoản dịch vụ</a> áp dụng.
          </div>
          <br>
          <input type="submit" value="Gửi" class="button" />
        </form>
      </div>
    </div>
  </div>
  </body>