

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
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span>SẢN PHẨM</span> <span class="menu-arrow"></span></a>
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
                                            <h1 class="text-center" style="font-family: system-ui;">SỬA SẢN PHẨM</h1>
											<div class="demo-box">
                                                <form  method ="POST"  data-parsley-validate novalidate enctype="multipart/form-data">
                                                @csrf
                                                    <div class="form-group">
                                                        <label for="userName">Tiêu đề<span class="text-danger">*</span></label>
                                                        <input type="text" name="title" parsley-trigger="change" required
                                                               placeholder="Tiêu đề" class="form-control" id="userName" value="{{$product->title}}">
                                                               @if($errors->has('title'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('title') }}</strong>
                                                               @endif
                                                    </div>
                
                                                    <div class="form-group">
                                                        <label for="slug">Đường dẫn<span class="text-danger">*</span></label>
                                                        <input type="slug" name="slug" parsley-trigger="change" required
                                                               placeholder="slug " class="form-control" id="slug" value="{{$product->slug}}">
                                                               @if($errors->has('slug'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('slug') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Số lượng<span class="text-danger">*</span></label>
                                                        <input type="number" name="quantily" parsley-trigger="change" required
                                                               placeholder="số lượng" class="form-control" id="userName" value="{{$product->quantily}}">
                                                               @if($errors->has('quantily'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('quantily') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Tiền<span class="text-danger">*</span></label>
                                                        <input type="number" name="price" parsley-trigger="change" required
                                                               placeholder="giá" class="form-control" id="userName" value="{{$product->price}}">
                                                               @if($errors->has('price'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('price') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Tiền giảm giá<span class="text-danger">*</span></label>
                                                        <input type="number" name="price_saled" parsley-trigger="change" required
                                                               placeholder="giảm giá" class="form-control" id="userName" value="{{$product->price_saled}}">
                                                              
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Kích thước<span class="text-danger">*</span></label>
                                                        <input type="text" name="size" parsley-trigger="change" required
                                                               placeholder="Size" class="form-control" id="userName" value="{{$product->size}}" >
                                                               @if($errors->has('size'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('size') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Màu sắc<span class="text-danger">*</span></label>
                                                        <input type="text" name="color" parsley-trigger="change" required
                                                               placeholder="color" class="form-control" id="userName" value="{{$product->color}}">
                                                               @if($errors->has('color'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('color') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Ngày<span class="text-danger">*</span></label>
                                                        <input type="date" name="date" parsley-trigger="change" required
                                                               placeholder="ngày" class="form-control" id="userName" value="{{date('Y-m-d', strtotime($product->date))}}">
                                                               @if($errors->has('date'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('date') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Ảnh</label>
                                                        <input type="file" name="thumnail"  class="filestyle" data-buttonname="btn-default" value="{{$product->thumnail}}"><br>
                                                        <img src="{{asset('uploads/images/'.$product->thumnail)}}" alt="" width="100px" height="80px"> 
                                                        @if($errors->has('thumnail'))
                                                        <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('thumnail') }}</strong>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Ảnh 2</label>
                                                        <input type="file" name="thumnail_two"  class="filestyle" data-buttonname="btn-default" value="{{$product->thumnail_two}}"><br>
                                                        <img src="{{asset('uploads/images/'.$product->thumnail_two)}}" alt="" width="100px" height="90px"> 
                                                        @if($errors->has('thumnail_two'))
                                                        <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('thumnail_two') }}</strong>
                                                        @endif
                                                    </div>
                                                    
                                                   
                                                    <div class="form-group">
                                                        <label for="userName">Danh mục<span class="text-danger">*</span></label><br>                                                   
                                                            <select style="width: 170px;height: 33px;border-radius:4px;text-align:center;font-size:15px" class="form-select"  name="category_id" aria-label="Default select example">
                                                                @foreach( $category as $c) 
                                                                    @if ($c->id == $product->category_id)
                                                                        <option selected value="{{$c->id}}">{{$c->name}}</option>          
                                                                    @else
                                                                        <option  value="{{$c->id}}">{{$c->name}}</option> 
                                                                    @endif
                                                                                                           
                                                                 @if($errors->has('category_id'))
                                                              <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('category_id') }}</strong>
                                                              @endif 
                                                              @endforeach
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Thương hiệu<span class="text-danger">*</span></label><br>
                                                        
                                                               <select style="width: 170px;height: 33px;border-radius:4px;text-align:center;font-size:14px" class="form-select"  name="brand_id" aria-label="Default select example">
                                                                @foreach( $brand as $b) 
                                                                    @if ($b->id == $product->brand_id)
                                                                        <option selected value="{{$b->id}}">{{$b->name}}</option>          
                                                                    @else
                                                                        <option  value="{{$b->id}}">{{$b->name}}</option> 
                                                                    @endif
                                                                                                           
                                                                 @if($errors->has('brand_id'))
                                                              <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('brand_id') }}</strong>
                                                              @endif 
                                                              @endforeach
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Mô tả<span class="text-danger">*</span></label>
                                                        <textarea type="text" name="description" parsley-trigger="change" required
                                                               placeholder="description" class="form-control" id="userName" value="{{$product->description}}"></textarea>
                                                               @if($errors->has('description'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('description') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="userName">Từ khóa<span class="text-danger">*</span></label>
                                                        <input type="text" name="tags" parsley-trigger="change" required
                                                               placeholder="tags" class="form-control" id="userName" value="{{$product->tags}}">
                                                               @if($errors->has('tags'))
                                                               <strong style="color:red;font-size:18px;background-color: #FCE77D">{{ $errors->first('tags') }}</strong>
                                                               @endif
                                                    </div>
                                                    <div class="form-group">
                                                      
                                                            <label for="userName">Trạng thái<span class="text-danger">*</span></label><br>    
                                                            <select style="width: 170px;height: 33px;border-radius:4px;text-align:center;font-size:15px" class="form-select"  name="status" aria-label="Default select example">
                                                            <?php 
                                                                 $trangThai = array('0'=>'Hiện','1'=>'Ẩn');
                                                             ?>
                                                             @foreach ( $trangThai as $row => $item)
                                                                 
                                                                 @if ($row == $product->status)
                                                                     <option selected value="{{$row}}">{{$item}}</option>
                                                                 @else
                                                                     <option value="{{$row}}">{{$item}}</option>
                                                                 @endif

                                                             @endforeach
                                                         
                                                         </select>
                                                    </div>
                                                    
                
                                                    <div class="form-group text-right m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Sửa
                                                        </button>
                                                        <button class="btn btn-danger btn-sm" style="height:34px"><a href="/admin/show-product"   style="color:white;height:50px">Hủy bỏ</a></button>                                                            

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