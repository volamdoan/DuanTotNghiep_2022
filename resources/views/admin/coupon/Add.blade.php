

    <body class="fixed-left" >

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar" >

                <!-- LOGO -->
                <div class="topbar-left" >
                    <a href="/admin/dashboard" class="logo"><span>GENZ<span>FASHION</span></span><i class="mdi mdi-layers"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="assets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                          
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                    <img src="/admin/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                                </a>
        
                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                            <li>
                                                <h5> {{ Auth::user()->name }}</h5>
                                            </li>
                                            <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Thông tin</a></li>
                                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Cài đặt</a></li>
                                            <li><a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-5"></i>  {{ __('Đăng xuất') }}</a>
                                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form></li>
                                        </ul>
                            </li>
        
                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	

                            <li class="has_sub">
                                <a href="/admin/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="label label-success pull-right"></span> <span> THỐNG KÊ </span> </a>
                                
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> SẢN PHẨM</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-product">Liệt kê</a></li>
                                    <li><a href="/admin/product">Thêm sản phẩm</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>DANH MỤC </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-category"> Liệt kê</a></li>
                                    <li><a href="/admin/category"> Thêm danh mục</a></li>
                                   
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> BÀI VIẾT </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-posts"> Liệt kê</a></li>
                                    <li><a href="/admin/posts"> Thêm bài viết</a></li>
                                   
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span>THƯƠNG HIỆU</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-brand"> Liệt kê</a></li>
                                    <li><a href="/admin/brand"> Thêm Thương Hiệu</a></li>
        
                                </ul>
                            </li>
    
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-arc"></i><span> ĐƠN HÀNG</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-order"> Liệt kê</a></li>
                                    
    
                                </ul>
                            </li>
                            
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gift"></i><span>MÃ GIẢM GIÁ</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-coupon"> Liệt kê</a></li>
                                    <li><a href="/admin/coupon"> Thêm coupon</a></li>
    
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-user"></i><span>TÀI KHOẢN</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-user"> Liệt kê</a></li>
                                    
    
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-user"></i><span>BANNER</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="/admin/show-banner"> Liệt kê</a></li>
                                    
    
                                </ul>
                            </li>

                            

                           

                          

                            
                            

                           
                        </ul>
                    </div>
                   

                    

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

        

               
              {{-- copy --}}
                
              <div class="content-page" >
                <!-- Start content -->
                <div class="content" >
                    <div class="container" >


                        
                        <!-- end row -->



                        <div class="row" style="margin-top:10px;padding-left:150px; ">
							<div class="col-sm-9" >
								<div class="card-box" >
									<div class="row">
										<div class="col-lg-12" >
                                            <h1 class="text-center" style="font-family: system-ui;">THÊM MÃ GIẢM GIÁ</h1>
											<div class="demo-box">
                                                <form action="/admin/coupon" method ="POST"  data-parsley-validate novalidate enctype="multipart/form-data">
                                                    @csrf
                                                   
                
                                                    <div class="form-group">
                                                        <label for="slug">Tên<span class="text-danger">*</span></label>
                                                        <input type="text" name="coupon_name" parsley-trigger="change" required
                                                               placeholder="Name " class="form-control" id="slug" value="{{old('coupon_name')}}">
                                                               @if($errors->has('coupon_name'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('coupon_name') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Mã giảm giá<span class="text-danger">*</span></label>
                                                        <input type="text" name="coupon_code" parsley-trigger="change" required
                                                               placeholder="coupon_code" class="form-control" id="userName" value="{{old('coupon_code')}}">
                                                               @if($errors->has('coupon_code'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('coupon_code') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Số lượng mã<span class="text-danger">*</span></label>
                                                        <input type="number" name="coupon_time" parsley-trigger="change" required
                                                               placeholder="coupon_time" class="form-control" id="userName" value="{{old('coupon_time')}}">
                                                               @if($errors->has('coupon_time'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('coupon_time') }}</strong>
                                                               @endif
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="userName">Tính năng mã<span class="text-danger">*</span></label><br>
                                                        <select style="width: 140px;height: 30px;border-radius:10px;text-align:center;font-size:15px" class="form-select"  name="coupon_condition" aria-label="Default select example">
                                                            <option value="1">Giảm theo %</option>    
                                                            <option value="2">Giảm theo tiền</option>                                                    
                                                          @if($errors->has('coupon_condition'))
                                                          <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('coupon_condition') }}</strong>
                                                          @endif 
                                                          
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Nhập số % hoặc số tiền<span class="text-danger">*</span></label>
                                                        <input type="text" name="coupon_number" parsley-trigger="change" required
                                                               placeholder="coupon_number" class="form-control" id="userName" value="{{old('coupon_number')}}">
                                                               @if($errors->has('coupon_number'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('coupon_number') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Trạng thái<span class="text-danger">*</span></label><br>    
                                                               <select style="width: 140px;height: 30px;border-radius:10px;text-align:center;font-size:15px" class="form-select"  name="status" aria-label="Default select example">
                                                                <option value="0">Hiện</option>    
                                                                <option value="1">Ẩn</option>                                                    
                                                              @if($errors->has('status'))
                                                              <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('status') }}</strong>
                                                              @endif 
                                                              
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Ngày bắt đầu<span class="text-danger">*</span></label>
                                                        <input type="date" name="start_at" parsley-trigger="change" required
                                                               placeholder="giá" class="form-control" id="userName" value="{{old('start_at')}}">
                                                               @if($errors->has('start_at'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('start_at') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Ngày kết thúc<span class="text-danger">*</span></label>
                                                        <input type="date" name="expired_at" parsley-trigger="change" required
                                                               placeholder="số lượng" class="form-control" id="userName" value="{{old('expired_at')}}">
                                                               @if($errors->has('expired_at'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('expired_at') }}</strong>
                                                               @endif
                                                    </div>
                
                                                    <div class="form-group text-right m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Thêm
                                                        </button>
                                                        <button class="btn btn-danger btn-sm" style="height:34px"><a href="/admin/show-coupon"   style="color:white;height:50px">Hủy bỏ</a></button>                                                            

                                                    </div>
                
                                                </form>
                                             
												
											</div>

										</div>

										
									</div>
                                   

								</div> <!-- end card-box -->
							</div> <!-- end col -->
						</div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

              

            </div>

            
            </div>


        </div>


    </body>
    
</html>