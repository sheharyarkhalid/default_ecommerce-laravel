<div class="cart_navigation_content">
    <div class="cart_navigation_header">
        <div class="cart_navigation_heading">
            <h3>Your Cart
                @if (count($cart)!=0)
                    <span><?php if($cart_info['items_count']<10){echo '0';} echo $cart_info['items_count'];?></span>  
                @else
                <?php echo '<span>0</span>';?>
                @endif  
            </h3>
            
            <div class="cart_navigation_close_btn">
                <i class="close_cart_navigation_btn fas fa-times"></i>
            </div>
        </div>

    </div>
    <div class="cart_navigation_item_list">
        @if (count($cart)==0)
        <p class="empty_drag_text">No items in the cart</p>
        @else 
            @foreach ($cart as $cart_item) 
                <div class="cart_navigation_single_item cart_item{{ $cart_item['product'][0]['id'] }}">

                    <figure><span>{{ $cart_item['quantity'] }}</span><img src="{{asset('images/logo.jpg')}}" /></figure>
                    <div class="cart_navigation_single_item_detail">
                        <p>{{ $cart_item['product'][0]['name'] }}</p>
                        <a>View details</a>
                        <div class="cart_navigation_item_price">
                            @if ($cart_item['product'][0]['discount'] != 0 )
                                <strong><div class="drag_Cart_curr">{{$currency}}</div>{{ number_format($cart_item['quantity'] * $cart_item['product'][0]['discounted_price_float']) }}</strong>
                                <span><div class="drag_Cart_curr">{{$currency}}</div>{{number_format($cart_item['quantity'] * $cart_item['product'][0]['price_float']) }} </span>
                                
                                <small>{{round($cart_item['product'][0]['discounted_percentage'],2)}} % off</small>
                            @else
                                <strong><div class="drag_Cart_curr">{{$currency}}</div>{{number_format($cart_item['quantity'] * $cart_item['product'][0]['price_float']) }} </strong>
                            @endif
                        </div>
                        <div class="cart_navigation_qty_main">
                            <div class="cart_navigation_qty_plus_minu_btns">
                                <div class="counter_minus_btn">
                                    <a   href="javascript:void(0);"  class="cart-item-decrease cart_quantity_switcher" data-id="{{ $cart_item['product'][0]['id'] }}"><i class="fa fa-minus"></i></a>
                                </div>
                                <input type="hidden" name="quantity"  value="1" disabled>
                                <span  class="total_count_quantity"  > {{ $cart_item['quantity'] }} </span>
                                <div class="counter_plus_btn">
                                    <a  href="javascript:void(0);"  class=" cart-item-increase cart_quantity_switcher" data-id="{{ $cart_item['product'][0]['id'] }}"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="cart_navigation_del_btns">
                                <a href="javascript:void(0);"  class="remove-cart-item" type="button" data-id="{{ $cart_item['product'][0]['id'] }}"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach   
        @endif

    </div>
</div>
@if (count($cart)!=0)
    <div class="cart_navigation_proceeding_btn">
        <div class="drag_btn_main">
            <div class="subtotal_price_calculation">
              
                    <span>Subtotal</span><strong>{{ $cart_info['total']  }}</strong>
                
            </div>

            <div class="cart_navigation_checkout_btn"><a>Checkout</a></div>
        </div>
    </div>
@endif