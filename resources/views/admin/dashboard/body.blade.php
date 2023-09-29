
<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
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

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p style="font-size: 11px;" class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Category">Doanh Thu trong tháng này</p>
                                    
                                    <h2> {{number_format($order_price)}}<small>VNĐ</small></h2>
                                    
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-account-convert widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p style="font-size: 11px;" class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Product">Đơn hàng trong tháng này</p>
                                    <h2> {{$order}}<small>Đơn hàng</small></h2>
                                   
                                </div>
                            </div>
                        </div><!-- end col -->

                      

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-av-timer widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p style="font-size: 11px;" class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Request Per Minute">Số lượng sản phẩm đã bán</p>
                                    <h2> {{$product}}<small>Sản phẩm</small></h2>
                                    
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-account-multiple widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Total Users"> Tài Khoản người dùng </p>
                                    <h2>{{$user}}<small></small></h2>
                                   
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-download widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="New Downloads">ADMIN</p>
                                    <h2>{{$admin}}<small></small></h2>
                                    
                                </div>
                            </div>
                        </div><!-- end col -->

                    </div>
                    <!-- end row -->


                   
                    <!-- end row -->


                    <!-- end row -->




                </div> <!-- container -->

            </div> <!-- content -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-lg-12">
                                @if(Session::has('message'))
                                <p class="alert " style="color:green;background: antiquewhite;font-size:18px;">{{ Session::get('message') }}</p>
                                @endif
                                <div class="demo-box">
                                    <form action="" class="form-inline" role="form">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm" name="key" value="{{request()->key}}">
                                        <button style="background-color:#36404e;" type="submit" class="btn btn- "><i style="color:white;" class="fas fa fa-search"></i></button>
                                    </form>
                                    <hr>
                                    <table id="dt-opt" class="table table-striped add-edit-table table-bordered">
                                        <thead>
                                            <tr style="background-color:#36404e;color:white;">
                                                <th style="text-align: center;font-size:18px;">Mã đơn hàng</th>
                                                <th style="text-align: center;font-size:18px;"> Tên</th>                                                       
                                                <th style="text-align: center;font-size:18px;">SĐT</th>                                                     
                                                <th style="text-align: center;font-size:18px;">Địa chỉ</th>
                                                <th style="text-align: center;font-size:18px;">Email</th>
                                                <th style="text-align: center;font-size:18px;">Ghi chú</th>
                                                <th style="text-align: center;font-size:18px;">Ngày đặt hàng</th>
                                                <th style="text-align: center;font-size:18px;">Tổng giá</th>


                                               
                                                <th style="text-align: center;font-size:18px;">Trạng thái</th>
                                                <th style="text-align: center;font-size:18px;">Xem chi tiết đơn hàng</th>
                                                <th style="text-align: center;font-size:18px;width: 108px;">Hành động</th>
                                            </tr>
                                        </thead>
                                       
                                        @foreach(  $orderw as $o)

                                        <tbody>
                                            <tr>
                                                <td>#{{$o->id}}</td>
                                                <th style="font-size:17px;"><a href="/admin/show-order/{{$o->id}}" >{{$o->name_order}}</a></th>


                                                <td style="font-size:17px;">{{$o->phone}}</td>
                                                <th style="font-size:17px;">{{$o->address}}</th>
                                                <td style="font-size:17px;">{{$o->email}}</td>
                                                <th style="font-size:17px;">{{$o->note}}</th>
                                                <td style="font-size:17px;">{{date('d-m-Y', strtotime($o->order_date))}}</td>
                                                <th style="font-size:17px;">{{ number_format($o->total_price)}}đ</th>
                                               
                                                {{-- <th>{!! $o->status==0?'<button class="btn btn-danger btn-sm">Đang xử lý</button>':$o->status==1?'<button class="btn btn-success btn-sm ">Đã hoàn thành</button>':'<button class="btn btn-info btn-sm ">Đã hủy</button>'!!}</th> --}}
                                                <th>
                                                    @if($o->status==0)
                                                    <button class="btn btn-danger btn-sm">Đang xử lý</button>
                                                    @elseif($o->status==1)
                                                        <button class="btn btn-success btn-sm ">Đã xác nhận</button>
                                                    @elseif($o->status==2)
                                                    <button class="btn btn-warning btn-sm ">Đã hủy</button>
                                                    @endif
                                                </th>
                                                <th class=" text-center font-size-10" style="width:98px">
                                                    <a href="/admin/show-order/{{$o->id}}"  style="color:white" class="btn btn-info btn-sm">Chi tiết</a>
                                                    
                                                </td>
                                                <td class=" text-center font-size-10" style="width:98px">
                                                   <a href="/admin/deleteOrder/{{$o->id}}" onclick="alert(event,{{$o->id}})"  class="btn btn-danger btn-sm"><h5 style="color:white;">Xóa</h5></a>
                                                    
                                                </td>
                                            </tr>
                                        </tbody>

                                        @endforeach
                                    </table>

                                </div>

                            </div>


                        </div>
                        <div class="form-group " style="padding-left:600px;font-size:20px">
                            <!-- phân trang  -->
                            {{$orderw->appends(request()->all())->links()}}
                        </div>

                    </div> <!-- end card-box -->
                </div>
            </div>
            
          















</body>



</html>
