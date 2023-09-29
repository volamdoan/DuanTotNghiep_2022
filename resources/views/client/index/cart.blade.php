
   
@if(Session::has('Cart')!=null)
<div class="cartmini__list" style="height:396px">
    
    <ul>
        
        @foreach(Session::get('Cart')->products as $n)
        <li class="cartmini__item p-rel d-flex align-items-start">
            <div class="cartmini__thumb mr-15">
                <a href="product-details.html">
                    <img src="{{asset('uploads/images/'.$n['productInfo']->thumnail)}}" alt="">
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
    <h5>Total</h5>
    <span>{{number_format(Session::get('Cart')->totaPrice)}}đ</span>
    <input hidden id="total-quantily-cart" type="number" value="{{Session::get('Cart')->totalQuanty}}">
</div>
@endif
<div class="cartmini__bottom">
    <a href="/listCart" class="s-btn w-100 mb-20">Xem giỏ hàng</a>
    <a href="/checkout" class="s-btn s-btn-2 w-100">Thanh toán</a>
</div>




</div>
