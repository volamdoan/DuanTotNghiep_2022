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
                            <!-- LOGO -->
             <div class="logo pr-55 d-inline-block">
             <a href="/">
             <img  width="200px"src="{{ asset('client/assets/img/logo/logoGENZ.png') }}" class="logo" alt="Genz Store Logo">
             </a> 
        
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


    <!-- sidebar area start -->
    <section class="offcanvas__area">
        <div class="modal fade" id="offCanvasModal" tabindex="-1" aria-labelledby="offCanvasModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="offcanvas__wrapper">
                        <div class="offcanvas__top d-flex align-items-center mb-60 justify-content-between">
                            <div class="logo">
                                <a href="index.html">
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


<!-- page title start -->
<section class="page__title-area pt-30 pb-0">
                <div class="page__title-wrapper text-center">
                    <h3 class="gioithieu" style="font-size: 40px;
    color: #222;
    font-weight: 400;
    line-height: 1;
    margin-bottom: 20px;">ĐIỀU KHOẢN DỊCH VỤ</h3>
                </div>
</section>
<section class="about__history pt-95 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-10">
                <div class="about__history-wrapper">
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre">GIỚI THIỆU: </span>
                    </div>
                        <p>
                        CÔNG TY TNHH GENZSTORE. <br>
                        MST: 0316393653 <br>
                        Địa chỉ trụ sở: 45 Phan Chu Trinh, Phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh<br>
                        Kính chào Quý khách hàng,<br>
                        Website www.GenzStore.com và thương hiệu Genz thuộc quyền sở hữu và quản lý của Công ty TNHH GENZSTORE. Khi Quý khách hàng truy cập vào website www.GenzStore.com tức là Quý khách hàng đã đồng ý với các điều khoản được nêu bên dưới. Chúng tôi có quyền thay đổi, chỉnh sửa, thêm bớt bất kỳ nội dung nào trong Điều khoản dịch vụ này, vào bất cứ thời điểm nào mà không cần có thông báo trước; và các thay đổi này có hiệu lực ngay khi được đăng lên trang web. <br>
                        Quý khách hàng vui lòng đọc Điều khoản dịch vụ trước khi mua hàng.
                        </p>

                        <div class="about__history-title-area">
                        <span class="about__history-title-pre"> HƯỚNG DẪN SỬ DỤNG WEBSITE: </span>
                        <p>
                        Khi vào website của chúng tôi, Quý khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp. Quý khách đảm bảo có đầy đủ hành vi dân sự để thực hiện các giao dịch mua bán hàng hóa theo quy định hiện hành của pháp luật Việt Nam.
                        </p>
                        <p>
                            + Tài khoản (Account) Quý khách hàng đăng ký để thực hiện các giao dịch mua bán trên website www.GenzStore.com được nằm trong khuôn khổ Điều khoản dịch vụ này.<br>
                        </p>
                        <p>
                            + Khi đăng ký tài khoản, Quý khách hàng phải cung cấp thông tin chính xác về bản thân và phải cập nhật nếu có thay đổi. Mỗi người truy cập phải có trách nhiệm với mật khẩu, tài khoản và hoạt động của mình trên web. Chúng tôi không chịu bất kỳ trách nhiệm nào, dù trực tiếp hay gián tiếp, đối với những thiệt hại hoặc mất mát gây ra do Quý khách hàng không tuân thủ quy định.
                        </p>
                        <p>
                            + Nghiêm cấm sử dụng bất kỳ phần nào của trang web này với mục đích thương mại hoặc nhân danh bất kỳ bên thứ ba nào nếu không được sự đồng ý bằng văn bản từ chúng tôi. Nếu vi phạm bất cứ điều nào nêu trên đây, chúng tôi sẽ hủy tài khoản của bạn mà không cần báo trước.
                        </p>
                        <p>Trong suốt quá trình đăng ký, Quý khách hàng đồng ý nhận email quảng cáo từ website. Nếu không muốn tiếp tục nhận mail, Quý khách có thể từ chối bằng cách thực hiện theohướng dẫn của chúng tôi trong mỗi email.</p>
                    </div>
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre"> XÁC NHẬN VÀ TỪ CHỐI ĐƠN HÀNG: </span>
                      <p>  Khi Quý khách hàng đặt hàng trên website, chúng tôi sẽ nhận được yêu cầu đặt hàng và liên hệ lại để xác nhận đơn hàng. Để yêu cầu đặt hàng được xác nhận nhanh chóng, Quý khách hàng vui lòng cung cấp đúng và đầy đủ các thông tin liên quan đến việc giao nhận, hoặc các điều khoản và điều kiện của chương trình khuyến mãi (nếu có) mà Quý khách hàng tham gia.</p>
                      <p>  Chúng tôi có quyền từ chối nhận hoặc hủy đơn đặt hàng của Quý khách hàng vì bất kỳ lý do gì liên quan đến lỗi kỹ thuật, lỗi hệ thống, sự cung cấp sai thông tin, không liên hệ được người nhận hoặc những nguyên nhân khách quan và bất khả kháng như thiên tai, dịch bệnh v.v.</p>
                    </div>
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre"> HỦY ĐƠN HÀNG: </span>
                      <p> Trường hợp Quý khách muốn hủy bỏ đơn hàng đã thực hiện trên website www.GenzStore.com , qua trang Facebook, Instagram của chúng tôi để yêu cầu hủy đơn hàng. </p>

                    </div>
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre"> THANH TOÁN ĐƠN HÀNG: </span>
                      <p>Quý khách có thể tham khảo các phương thức thanh toán đã được nêu trong Thông báo phương thức thanh toán: <br>
                      Thanh toán khi nhận hàng (COD – giao hàng và thu tiền tận nơi). Quý khách vui lòng kiểm tra điều kiện để thanh toán COD trong Chính sách bán hàng.</p>
                    </div>
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre"> GIẢI QUYẾT LỖI NHẬP SAI THÔNG TIN: </span>
                      <p>Quý khách có trách nhiệm cung cấp thông tin đầy đủ và chính xác khi tham gia giao dịch tại www.GenzStore.com. Trong trường hợp Quý khách nhập sai thông tin, chúng tôi có quyền từ chối thực hiện giao dịch.</p>
                    </div>
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre"> GIẢI QUYẾT TRANH CHẤP: </span>
                      <p>Bất kỳ tranh cãi, khiếu nại hoặc tranh chấp phát sinh từ hoặc liên quan đến các Quy định và Điều kiện này đều sẽ được giải quyết theo quy định của Pháp luật hiện hành của nước Cộng Hòa Xã Hội Việt Nam.</p>
                    </div>
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre"> QUY ĐỊNH CHẤM DỨT THỎA THUẬN: </span>
                      <p>Trong trường hợp có bất kỳ thiệt hại nào phát sinh do việc vi phạm Quy Định sử dụng trang web, chúng tôi có quyền đình chỉ hoặc khóa tài khoản của bạn vĩnh viễn. Nếu bạn không hài lòng với trang web hoặc bất kỳ điều khoản, điều kiện, quy tắc, chính sách, hướng dẫn, hoặc cách thức vận hành của GenzStore.vn  thì biện pháp khắc phục duy nhất là ngưng làm việc với chúng tôi.</p>
                    </div>
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre"> QUYỀN PHÁP LÝ: </span>
                      <p>Các điều kiện, điều khoản và nội dung của trang web này được tuân theo luật pháp Việt Nam và Tòa án có thẩm quyền tại Việt Nam sẽ giải quyết bất kỳ tranh chấp nào phát sinh từ việc sử dụng trái phép trang web này.</p>
                    </div>
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre"> QUY ĐỊNH BẢO MẬT: </span>
                      <p>Chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất bảo vệ thông tin và việc thanh toán của Quý khách. Mọi thông tin giao dịch sẽ được bảo mật ngoại trừ trường hợp được cơ quan pháp luật yêu cầu cung cấp thông tin.</p>
                    </div>
                    <div class="about__history-title-area">
                        <span class="about__history-title-pre"> ĐIỀU HÀNH: </span>
                      <p>
                      GenzStore.vn được điều hành bởi CÔNG TY TNHH GENZSTORE<br>
                        Địa chỉ: 45 Phan Chu Trinh, Phường Bến Thành, Quận 1, Thành phố Hồ Chí Minh, Việt Nam<br>
                        Điện thoại: 0903945112<br>
                        Email: contact@GenzStore.vn      
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>
   <script>
    function menuToggle(){
        document.querySelector('.menu').classList.toggle('active');
    }
</script>
   