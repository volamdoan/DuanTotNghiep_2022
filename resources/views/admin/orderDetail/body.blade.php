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
                        <li class="menu-title">Navigation</li>

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
                                           
                                            <hr>
                                            <table id="dt-opt" class="table table-striped add-edit-table table-bordered">
                                                <thead>
                                                    <tr style="background-color:#36404e;color:white;">
                                                        <th style="text-align: center;font-size:18px;padding-left:41px">Ảnh</th>
                                                        <th style="text-align: center;font-size:18px;width: 79px;">Tên sản phẩm</th>
                                                        <th style="text-align: center;font-size:18px;width: 100px;">Số lượng</th>

                                                        <th style="text-align: center;font-size:18px;">Kích cỡ</th>
                                                        <th style="text-align: center;font-size:18px;width: 100px;">Màu sắc</th>

                                                        <th style="text-align: center;font-size:18px;">Giá</th>
                                                        <th style="text-align: center;font-size:18px;width: 500px;">Thành tiền</th>
                                                    </tr>
                                                </thead>
                                                
                                                <h1 class="text-center" style="font-family: system-ui;">CHI TIẾT HÓA ĐƠN</h1>
                                                @foreach( $orderDetail as $o)
                                                   
                                                <tbody>
                                                    <tr>
                                                        <th style="font-size:17px;width: 115px;padding-left: 44px;">
                                                            <image width="95px" height="100px" src="{{asset('uploads/images/'.$o->thumnail)}}">
                                                         </th>
                                                        <th style="font-size:17px;">{{$o->title}}</th>
                                                        <td>{{$o->quantily_order}}</td>
                                                        <th style="width:143px;"><button class="btn btn-info btn-sm">{{$o->size_detail}}</button></th>
                                                        <th style="width:143px;"><button class="btn btn-waring btn-sm">{{$o->color_detail}}</button></th>

                                                        <th style="font-size:18px;width: 100px;"> {{ number_format($o->price) }}đ</th>
                                                        
                                                        <th style="font-size:18px">{{ number_format($o->total_pro_detail) }}đ</th>
                                                    </tr>
                                                </tbody>
                                               
                                                @endforeach
                                               
                                              

                                            </table>
                                            {{-- <?php
                                          dd($orderDetail);

?> --}}
                                            <div class="row col-12" >
                                                <form style="width:600px" method="post">
                                                    @csrf
                                                    <div class="mb-3">
                                                      <label for="exampleInputEmail1" class="form-label">Đơn hàng</label>
                                                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="order_id" value="#{{$orderDetail[0]->order_id  }}" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                      <label for="exampleInputPassword1" class="form-label">Tên Khách hàng</label>
                                                      <input type="text" class="form-control" id="exampleInputPassword1"name="name_order" value="{{$orderDetail[0]->name_order  }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">SĐT</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" value="{{$orderDetail[0]->phone}}">
                                                      </div>
                                                      <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="{{$orderDetail[0]->address}}">
                                                      </div>
                                                      
                                                      <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Tỉnh/Thành Phố</label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" name="city" aria-describedby="emailHelp"value="{{$orderDetail[0]->city}}">
                                                      </div>
                                                      <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Quận/Huyện/</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="district" value="{{$orderDetail[0]->district}}">
                                                      </div>
                                                      <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Phường/Xã </label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" name="ward" aria-describedby="emailHelp" value="{{$orderDetail[0]->ward}}" >
                                                      </div>



                                                      
                                                      <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Email </label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"  aria-describedby="emailHelp" value="{{$orderDetail[0]->email}}" >
                                                      </div>
                                                      <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Ghi chú</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1" name="note" value="{{$orderDetail[0]->note}}" disabled>
                                                      </div>
                                                      <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Ngày Đặt  </label>
                                                        <input type="text" class="form-control" id="exampleInputEmail1" name="order_date"  aria-describedby="emailHelp" value="{{date('d-m-Y', strtotime($orderDetail[0]->order_date))}}">
                                                      </div>
                                                      <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Tổng tiền</label>
                                                        <input type="text" class="form-control" id="exampleInputPassword1"  name="total_price" value="{{ number_format($orderDetail[0]->total_price) }}đ">
                                                      </div>
                                                      <div class="form-group">
                                                        
                                                        <label for="userName">Trạng thái<span class="text-danger">*</span></label><br>    
                                                               <select style="width: 200px;height: 33px;border-radius:5px;text-align:center;font-size:15px" class="form-select"  name="status" aria-label="Default select example">
                                                               <?php 
                                                                    $trangThai = array('0'=>'Đang chờ xử lý','1'=>'Đã xác nhận','2'=>'Đã hủy');
                                                                ?>
                                                                @foreach ( $trangThai as $row => $item)
                                                                    
                                                                    @if ($row == $order->status)
                                                                        <option selected value="{{$row}}">{{$item}}</option>
                                                                    @else
                                                                        <option value="{{$row}}">{{$item}}</option>
                                                                    @endif

                                                                @endforeach
                                                            
                                                            </select>
                                                            
                                                    </div>
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                        Xác nhận đơn hàng
                                                    </button>
                                                    <button class="btn btn-danger btn-sm" style="height:34px"><a href="/admin/show-order"   style="color:white;height:50px">Hủy bỏ</a></button>                                                            

                                                  </form>
                                            </div>
                                          
                                        </div>
                                        </div>
                                       
                                       
                                        
                                    </div>
                                   
                                  
                                </div>
                              

                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    {{-- @foreach( $orderDetail as $or)
                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                         <h4>{{ $or->name}}</h4>
                            
                        </div>
                      </div>
                      @endforeach --}}
                </div> <!-- container -->
               
            </div> <!-- content -->



        </div>
        









</body>

</html>
