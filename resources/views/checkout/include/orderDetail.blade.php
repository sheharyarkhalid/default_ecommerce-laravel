<div class="accordion" id="item_summary_accordion">
  <div class="item_summary_main">
    <div class="item_summary_header" data-toggle="collapse" data-target="#item_summary_toggle" aria-expanded="true">
      <span class="title">Order Details</span>
      <span class="item_acc_icon"><i class="fas fa-angle-down rotate-icon"></i></span>
    </div>
    <div id="item_summary_toggle" class="collapse show" data-parent="#item_summary_accordion">
      <div class="item_summary_toggle_data">
        @foreach ($cart as $cart_item) 
        <div class="item_summary_single_list">
          <div class="item_summary_single_list_detail">
              <figure>
                  <img src="{{asset('images/logo.jpg')}}" alt="Image">
                  <span class="review_order_res_qty">{{ $cart_item['quantity'] }}</span>
              </figure>
              <div class="item_summary_single_list_des">
                  <div class="item_summary_single_list_name">
                      <p>{{ $cart_item['product'][0]['name'] }}</p>
                      
                  </div>
              </div>
          </div>
          <div class="item_summary_single_list_price">
                  <p> <small> {{$currency}} </small>
                    @if ($cart_item['product'][0]['discount'] != 0 )
                    <span>{{ number_format($cart_item['quantity'] * $cart_item['product'][0]['discounted_price_float']) }}</span>
                @else
                <span>{{number_format($cart_item['quantity'] * $cart_item['product'][0]['price_float']) }}</span> 
                @endif 
                  </p>                                                 
          </div>
      </div>
        @endforeach
      </div>
    </div>
  </div>
  
  
</div>
