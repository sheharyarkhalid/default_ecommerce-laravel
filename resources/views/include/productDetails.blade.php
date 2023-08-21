
        <div class="product_detail_page_figure_box">
          <figure>
            <img src="{{asset('images/logo.jpg')}}" />
          </figure>
        </div>

        <div class="product_detail_page_box">
          <div class="product_detail_page_box_section">
            <div class="product_detail_page_box_header">
              <object> <a class="product_detail_page_category" href="{{  url('/shop/'.$category_info->cat_slug)  }}">{{ $category_info->cat_name;  }}</a></object>
              <div class="product_detail_page_heading">
                <h2>{{ $product_info['name'] }}</h2>
                <a class="product_detail_page_wish_list"><i class="far fa-heart"></i></a>
              </div>
            </div>

            <div class="product_detail_page_box_content_list">
              
                    {!! $product_info['desc']  !!}
              
           
            </div>

            <div class="product_detail_page_box_extras">
              <div class="detail_page_box_extras_list">
                <strong>Weight :</strong><span>454g</span>
              </div>
              <div class="detail_page_box_extras_list">
                <strong>Brand :</strong><span>Tim Hortons</span>
              </div>
            </div>

            <div class="product_detail_page_box_prices">
                @if ($product_info['discount']!=0)
                    <strong>{{  $product_info['discounted_price'] }}</strong>
                    <strong class="text_decoration_line_through">{{ $product_info['price'] }} </strong>
                    <!--<span>10 % OFF</span>-->
                @else 
                
                     <strong>{{  $product_info['price'] }}</strong>
                @endif
                
                
                      
            </div>

            <div class="product_detail_page_box_cart_btns_with_outofstock">
              <div class="cart_product_outofstock">
                <h3>Out of Stock</h3>
              </div>
              <div class="product_detail_page_box_cart_btns">
                <div class="product_detail_page_quantity_plus_minu_btns">
                  <button type="button" data-direction="-1" class="item_quantity_switcher decrement-quantity decrement_btn" >
                      <i class="far fa-minus decrement_btn "></i>
                  </button>
                  <input type="number" class="quantity_switcher"  value="1" min="1" name="quantity" disabled>
    
                  <button type="button" data-direction="1" class="item_quantity_switcher increment_btn" >
                    <i class="fal fa-plus increment_btn"></i>
                  </button>
                </div>
                <div class="product_detail_page_add_to_cart_btn">
                  <button  class="add_to_cart" type="button" data-id="{{ $product_info['id'] }}" >Add to cart</button>
                </div>
              </div>
            </div>

            <div class="product_detail_page_box_social_links">
              <h5>Share using:</h5>
              <div class="product_detail_page_socail_links_list">
                <a style="background: #425893"><i class="fab fa-facebook-f"></i></a>
                <a style="background: #4d9eea"><i class="fab fa-twitter"></i></a>
                <a style="background: #3375b0"><i class="fas fa-info"></i></a>
                <a style="background: #65d072"><i class="fab fa-whatsapp"></i></a>
                <a style="
                        background: linear-gradient(
                          216.61deg,
                          #a232c1 7.99%,
                          #f24d57 46.49%,
                          #ffbb4f 85.9%
                        );
                      "><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      