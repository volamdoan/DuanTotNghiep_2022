<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo"><span>GENZ<span>FASHION</span></span><i class="mdi mdi-layers"></i></a>
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

                    <!-- Right(Notification) -->
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
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-arc"></i><span>ĐƠN HÀNG</span> <span class="menu-arrow"></span></a>
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
                                                <input type="text" class="form-control" placeholder="Tìm kiếm....." name="key" value="{{request()->key}}">
                                                <button style="background-color:#36404e;" type="submit" class="btn btn- "><i style="color:white;" class="fas fa fa-search"></i></button>
                                            </form>
                                            <hr>
                                            <table id="dt-opt" class="table table-striped add-edit-table table-bordered">
                                                <thead>
                                                    <tr style="background-color:#36404e;color:white;">
                                                        <th style="text-align: center;font-size:18px;width: 79px;">Thứ tự</th>
                                                        <th style="text-align: center;font-size:18px;">Tiêu đề</th>

                                                        <th style="text-align: center;font-size:18px;width: 96px;">Số lượng</th>
                                                        <th style="text-align: center;font-size:18px;">Tiền</th>
                                                        <th style="text-align: center;font-size:18px;">Kích thước</th>
                                                        <th style="text-align: center;font-size:18px;">Ngày</th>
                                                        <th style="text-align: center;font-size:18px;">Ảnh</th>
                                                        <th style="text-align: center;font-size:18px;">Ảnh 2</th>
                                                        <th style="text-align: center;font-size:18px;">Mô tả</th>
                                                        <th style="text-align: center;font-size:18px;width: 99px;">Từ khóa</th>
                                                        <th style="text-align: center;font-size:18px;width: 99px;">Trạng thái</th>
                                                        <th style="text-align: center;font-size:18px;width:106px;"> Hành động</th>
                                                    </tr>
                                                </thead>
                                                @foreach( $product as $p)

                                                <tbody>
                                                    <tr>
                                                        <td>{{$p->id}}</td>
                                                        <th style="font-size:17px;">{{$p->title}}</th>
                                                        <td>{{$p->quantily}}</td>
                                                        <th>{{ number_format($p->price) }}đ</th>
                                                        <th style="width:143px;">{!! !empty($p->size) ?'<button class="btn btn-success btn-sm">M</button><button class="btn btn-danger btn-sm">L</button><button class="btn btn-warning btn-sm">XL</button><button class="btn btn-info btn-sm">S</button>': 0 !!}</th>
                                                        <th style="width:86px">{{date('d-m-Y', strtotime($p->date))}}</th>
                                                        <th>
                                                            <image width="60px" height="80px" src="{{asset('uploads/images/'.$p->thumnail)}}">
                                                         </th>
                                                         <td>
                                                            <image width="60px" height="80px" src="{{asset('uploads/images/'.$p->thumnail_two)}}">
                                                         </td>
                                                        <th style="font-size:17px;">{{$p->description}}</th>
                                                        <th>{{$p->tags}}</th>

                                                        <th>{!! $p->status==0?'<button class="btn btn-success btn-sm"><h5 style="color:white;">Hiện</h5></button>':'<button class="btn btn-danger btn-sm "><h5 style="color:white;">Ẩn</h5></button>'!!}</th>
                                                        <td class=" text-center font-size-10" style="width: 100%;display: flex;justify-content: space-between;padding-top: 65px;">
                                                            <a href="/admin/product/{{$p->id}}" class="btn btn-primary btn-sm" style="width:48%"><h5 style="color:white;font-family: 'Varela Round';">Sửa</h5></a>
                                                            <a href="/admin/deletedProduct/{{$p->id}}" onclick="alert(event,{{$p->id}})" class="btn btn-danger btn-sm" style="width:48%"><h5 style="color:white;font-family: 'Varela Round';">Xóa</h5></a>

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
                                    {{$product->appends(request()->all())->links()}}
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
            text: "Bạn sẽ không thể trở lại ban đầu !",
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
                window.location.href ='deletedProduct/'+id;

            }
        })
    }
</script>

</html>
