<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="/admin/dashboard" class="logo"><span>GENZ<span>FASHION</span></span><i class="mdi mdi-layers"></i></a>
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
                            <a href="/admin/dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="label label-success pull-right">2</span> <span> THỐNG KÊ </span> </a>

                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> SẢN PHẨM</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="/admin/show-product">Liệt kê</a></li>
                                <li><a href="/admin/product">Thêm sản phẩm</a></li>

                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> DANH MỤC </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="/admin/show-category"> Liệt kê</a></li>
                                <li><a href="/admin/category"> Thêm danh mục</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#" class="waves-effect"><i class="mdi mdi-calendar"></i><span> BÀI VIẾT </span><span class="menu-arrow"></span></a>
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
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gift"></i><span> MÃ GIẢM GIÁ</span> <span class="menu-arrow"></span></a>
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



                    <!-- end row -->



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
                                            <table id="dt-opt" class="table table-striped add-edit-table table-bordered ">
                                                <thead style="background-color:#36404e;color:white;">
                                                    <tr>
                                                        <th style="text-align: center;font-size:18px">Thứ tự</th>
                                                        <th style="text-align: center;font-size:18px">Tên</th>
                                                        <th style="text-align: center;font-size:18px">Mã giảm giá</th>
                                                        <th style="text-align: center;font-size:18px">Tính năng mã</th>
                                                        <th style="text-align: center;font-size:18px">Số lượng</th>
                                                        <th style="text-align: center;font-size:18px">số % hoặc vnd</th>

                                                        <th style="text-align: center;font-size:18px">Trạng thái</th>
                                                        <th style="text-align: center;font-size:18px">Ngày bắt đầu</th>
                                                        <th style="text-align: center;font-size:18px">Ngày kết thúc</th>
                                                        <th style="text-align: center;font-size:18px">Hành động</th>
                                                    </tr>
                                                </thead>
                                                @foreach( $coupon as $c)
                                                <tbody>
                                                    <tr>
                                                        <th style="text-align: center">{{$c->id}}</td>
                                                        <td style="text-align: center">{{$c->coupon_name}}</td>
                                                        <th style="text-align: center">{{$c->coupon_code}}</th>
                                                        <th style="text-align: center">{{$c->coupon_condition}}</td>
                                                        <th style="text-align: center">{{$c->coupon_time}}</th>
                                                        <td style="text-align: center">{{$c->coupon_number}}</td>
                                                        <th style="text-align: center">{!! $c->status==0?'<button class="btn btn-success btn-sm"><h5 style="color:white;">Hiện</h5></button>':'<button class="btn btn-danger btn-sm " "><h5 style="color:white;">Ẩn</h5></button>'!!}</th>
                                                        <th style="text-align: center">{{date('d-m-Y', strtotime($c->start_atdate))}}</td>
                                                        <th style="text-align: center">{{date('d-m-Y', strtotime($c->expired_at))}}</td>
                                                            <td class=" text-center font-size-10">
                                                               
                                                                <a href="/admin/deleteCoupon/{{$c->id}}" onclick="alert(event,{{$c->id}})" class="btn btn-danger btn-sm" type="submit"><h5 style="color:white;">Xóa</h5></a>
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
                                    {{$coupon->appends(request()->all())->links()}}
                                </div>

                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->



                </div> <!-- container -->

            </div> <!-- content -->



        </div>










</body>
<script type="text/javascript">
    function alert(event,id) {
        event.preventDefault();
        Swal.fire({
            title: 'Bạn có chắc không?',
            text: "Bạn sẽ không thể trở lại ban đầu!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có, xóa nó!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Xóa!',
                    'Đã bị xóa',
                    'Thành công'
                )
                // xóa
                window.location.href ='deleteCoupon/'+id;
            
            }
        })
    }
</script>

</html>