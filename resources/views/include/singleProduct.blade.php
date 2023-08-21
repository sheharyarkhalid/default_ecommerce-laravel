<<<<<<< Updated upstream
          <div class="single_product_box_main">
             @if ($product['discount'] != 0 )
             <div class="single_product_discount_percentage">-{{ $product['discounted_percentage'] }}% </div>
              @endif
           
              <a href="/product/{{ $product['slug']."-".$product['id']."/" }}" class="single_product_box">
                <figure>
                  <img src="https://static.tossdown.com/logos/25d2e6c6-5566-4bb4-b21e-73eb9b393765.jpg">

                </figure>
                <div class="single_product_box_figcaption">

                  <div class="product_name">
                  <p>{{ $product['name']  }}</p>
                  </div>
                  <div class="product_description">
                    <p>  {{ $product['pro_card_des'] }} </p>
                  </div>
                  <div class="price_tags">
                    <div class="total_and_discount_price">
                      
                    @if ($product['discount'] == 0)
                    <small class="orignal_price"><span class="pro_currency">{{$currency}}</span>{{$product['price_float']}}</small>
                    @else 
                    <small class="orignal_price">
                    <span class="pro_currency">{{$currency}}</span>{{$product['discounted_price_float']  }}
                    </small>
                    <!-- Actual price-->
                    <h6 class="discount_price text_decoration_line_through"> 
                    <span class="pro_currency">{{$currency}}</span>{{$product['price_float'] }}
                    </h6>
                     @endif

                    </div>
                  </div>
                  <object class="product_cart_btn"><a href="detail-page.html">Add to Cart</a></object>
                </div>
        </a>
            </div>



=======
@php 
use Illuminate\Support\Facades\Request;

$base_url = Request::getScheme() . '://' . Request::getHost() ;

@endphp

<div class="single_product_box_main">
  @if ($product['discount'] != 0 )
  <div class="single_product_discount_percentage">-{{ $product['discounted_percentage'] }}% </div>
   @endif

   <div class="single_product_box">
         <figure>
           <img src="https://static.tossdown.com/logos/25d2e6c6-5566-4bb4-b21e-73eb9b393765.jpg">
    
         </figure>
         <div class="single_product_box_figcaption">
            <a href="{{ url('/product/'. $product['slug']."-".$product['id']."/") }}" >
               <div class="product_name">
                    <p>{{ $product['name']  }}</p>
               </div>
            </a> 
            <div class="product_description">
             <p>  {{ $product['pro_card_des'] }} </p>
            </div>
            <div class="price_tags">
             <div class="total_and_discount_price">
               
             @if ($product['discount'] == 0)
                 <small class="orignal_price"><span class="pro_currency">{{$currency}}</span>{{$product['price_float']}}</small>
             @else 
                 <small class="orignal_price">
                 <span class="pro_currency">{{$currency}}</span>{{$product['discounted_price_float']  }}
                 </small>
                 <!-- Actual price-->
                 <h6 class="discount_price text_decoration_line_through"> 
                 <span class="pro_currency">{{$currency}}</span>{{$product['price_float'] }}
                 </h6>
              @endif
    
            </div>
           </div>
           <div class="product_cart_btn">
            {{-- <button class="add_to_cart"data-id="{{ $product['id'] }}" href="javascript:void(0);">Add to Cart</button> --}}

            <button class="product_detail_popup_button" type="button" data-toggle="modal" data-target="#add_to_cart_popup" data-id="{{ $product['id'] }}">Add to Cart</button>
         </div>
    </div>
 </div>
</div>
>>>>>>> Stashed changes
