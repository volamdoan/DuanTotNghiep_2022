@if(Session::has('message'))
                    <p class="alert " style="color:green;background: antiquewhite;font-size:18px;">{{ Session::get('message') }}</p>
                    @endif
<div class="table-content table-responsive" >
    @if(Session::has('Cart')!=null)
<table class="table">
    <thead>
        <tr>
            <th class="product-thumbnail">ảnh</th>
            <th class="cart-product-name">Sản phẩm</th>
            <th class="cart-product-name">Kích thước</th>
            <th class="cart-product-name">Màu sắc</th>
            <th class="product-price">Giá tiền</th>
            <th class="product-quantity">Số lượng</th>
            <th class="product-subtotal">Tổng tiền</th>
            <th class="product-remove">lưu</th>
            <th class="product-remove">Xóa</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach(Session::get('Cart')->products as $n)
        <tr>
            <td class="product-thumbnail"><a href="product-details.html">                           
                 <img src="{{asset('uploads/images/'.$n['productInfo']->thumnail)}}" alt="">
            </a></td>
            <td class="product-name"><a >{{$n['productInfo']->title}}</a></td>
            <td class="product-name"><a >{{ $n['sized']}}</a></td>
            <td class="product-name"><a >{{ $n['color']}}</a></td>

            <td class="product-price"><span class="amount">{{number_format($n['productInfo']->price)}}đ</span></td>
            <td class="product-quantity">
                <div class="cart-plus-minus"><input id="quanty-item" type="text" value="{{$n['quantily']}}" /></div>
            </td>
            <td class="product-subtotal"><span class="amount">{{number_format($n['price'])}}đ</span></td>

            <td class="product-remove"><i style="font-size:23px" class="fa fa-save" onclick="SaveListCart('{{$n['productInfo']->id.$n['sized'].$n['color']}}',this)"  ></i></td>

            <td class="product-remove"><i class="fa fa-times" onclick="DeleteListCart('{{$n['productInfo']->id.$n['sized'].$n['color']}}')"></i></td>

        </tr>
        
        @endforeach
       
       
        @endif
       
    </tbody>
</table>
</div>
{{-- <div class="row">
    <div class="col-12">
        <div class="coupon-all">
            <div class="coupon">
              
                <form action="/checkout_coupon" method ="POST"  data-parsley-validate novalidate enctype="multipart/form-data" >
                    @csrf
                <input id="coupon" class="input-text" name="coupon" 
                    placeholder="Coupon code" type="text">
                <button class="s-btn s-btn-2" onclick="checkout_coupon() type="submit">Mã giảm giá2
                    </button>
                </form>
            </div>
           
            
        </div>
    </div>
    
    
</div> --}}
@if(Session::has('Cart')!=null)
<div class="row justify-content-end">
<div class="col-md-5 ml-auto">
   
    <div class="cart-page-total">
        <h2>Tổng số giỏ hàng</h2>
        <ul class="mb-20">
            <li>Tổng số lượng <span>{{Session::get('Cart')->totalQuanty}}</span></li>
            <li>Tạm tính <span>{{number_format(Session::get('Cart')->totaPrice)}}đ</span></li>
            

        </ul>
        <a class="s-btn s-btn-2" href="/checkout">Thanh toán</a>
    </div>
    
    
</div>


@endif
</div>




    



</div>

