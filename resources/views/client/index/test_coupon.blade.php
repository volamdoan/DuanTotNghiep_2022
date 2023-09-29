
 @if(Session::has('message'))
 <p class="alert " style="color:green;background: antiquewhite;font-size:18px;">{{ Session::get('message') }}</p>
 @endif<form action="/checkout_coupon" method="post">
    @csrf
    <input type="text" name="coupon"placeholder="Mã code">
    <input type="submit" value="Sử dụng">
 </form><hr>  
 
@if(Session::get('coupon'))
  @foreach(Session::get('coupon') as $key => $cou)
  @if($cou['coupon_condition']==1)
    Mã giảm: {{$cou['coupon_number']}}%
    <p>
        <?php
        $total_coupon = ($total = $cou['coupon_number'])/100;
        echo  number_format($total_coupon);
        ?>
    </p>
  @endif
  @endforeach
  @elseif($cou['coupon_condition']==2)
  Mã giảm: {{$total_coupon}}
  <p>
      <?php
      $total_coupon = $total-$cou['coupon_number'];
      echo  number_format($total_coupon);
      ?>
  </p>
  @endif