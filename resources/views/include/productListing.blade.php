<div class="cat_tab_slider_main">
    <div class="product_container">
      <div class="cat_tab_slider_parent">
        <ul class="nav cat_tab_slider">
          <li class="nav-item"><a class="nav-link scrolling_tabs active" href="#featured_section_4_all">All</a></li>
          <li class="nav-item">
            <a class="nav-link scrolling_tabs " href="#featured_section_4_pizza">Pizza</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scrolling_tabs" href="#featured_section_4_icecream">Ice Cream</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scrolling_tabs" href="#featured_section_4_sundae">Sundae</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scrolling_tabs" href="#featured_section_4_icecreamshake">Ice Cream Shake</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scrolling_tabs" href="#featured_section_4_tornadoes">Tornadoes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scrolling_tabs" href="#featured_section_4_icedtea">Iced Tea</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scrolling_tabs" href="#featured_section_4_softdrinks">Soft Drinks</a>
          </li>
        </ul>
        <div class="home_product_nav_scroll_btn"><button class="left_arrow" onclick="rightScroll()"><i
              class="fa fa-angle-left" aria-hidden="true"></i></button> <button class="right_arrow"
            onclick="leftScroll()"><i class="fa fa-angle-right"></i></button>
        </div>
      </div>
    </div>
  </div>



  <div class="product_listing_main_section">
    <div class="product_container">
      <div class="shop_product_list_parent">
        <div class="" id="featured_section_4_all"> </div>
        <div class="shop_product_list_main" id="featured_section_4_pizza">
          <div class="shop_product_list_heading">
            <h3>Bags</h3>
          </div>
          <div class="product_list_parent">
          @foreach ($products as $product) 
     
             @include("include/singleProduct")

             @endforeach

          </div>
        </div>
        <div class="shop_product_list_main" id="featured_section_4_icecream">
          <div class="shop_product_list_heading">
            <h3>Bags</h3>
          </div>
          <div class="product_list_parent">

            <div class="single_product_box_main">
              <div class="single_product_box">
                <figure>
                  <img src="https://static.tossdown.com/logos/25d2e6c6-5566-4bb4-b21e-73eb9b393765.jpg">

                </figure>
                <div class="single_product_box_figcaption">

                  <div class="product_name">
                    <p>Headset for office and gaming</p>
                  </div>
                  <div class="product_description">
                    <p>This headset is the perfect all-around choice for those who are looking for comfortable,
                      practical sound quality. </p>
                  </div>
                  <div class="price_tags">
                    <div class="total_and_discount_price"><small class="orignal_price">PKR 850</small>
                      <h6 class="discount_price text_decoration_line_through">PKR 333.50</h6>
                    </div>
                  </div>
                  <div class="product_cart_btn"><a href="detail-page.html">Add to Cart</a></div>
                </div>
              </div>
            </div>
            <div class="single_product_box_main">
              <div class="single_product_box">
                <figure>
                  <img src="https://static.tossdown.com/logos/25d2e6c6-5566-4bb4-b21e-73eb9b393765.jpg">

                </figure>
                <div class="single_product_box_figcaption">

                  <div class="product_name">
                    <p>Gaming mouse</p>
                  </div>
                  <div class="product_description">
                    <p>This gaming mouse is packed with features that make it the perfect tool for any gaming session.
                    </p>
                  </div>
                  <div class="price_tags">
                    <div class="total_and_discount_price"><small class="orignal_price">PKR 700</small></div>
                  </div>
                  <div class="product_cart_btn"><a href="detail-page.html">Add to Cart</a></div>
                </div>
              </div>
            </div>
            <div class="single_product_box_main">
              <div class="single_product_box">
                <figure>
                  <img src="https://static.tossdown.com/logos/25d2e6c6-5566-4bb4-b21e-73eb9b393765.jpg">

                </figure>
                <div class="single_product_box_figcaption">

                  <div class="product_name">
                    <p>Hot gaming headset</p>
                  </div>
                  <div class="product_description">
                    <p>Are you looking for the ultimate gaming headset? Look no further than the Flexible Gaming
                      Headset! With top-notch sound quality and stylish lights on the sides, you'll be ready for your
                      next gaming session. </p>
                  </div>
                  <div class="price_tags">
                    <div class="total_and_discount_price"><small class="orignal_price">PKR 1200</small></div>
                  </div>
                  <div class="product_cart_btn"><a href="detail-page.html">Add to Cart</a></div>
                </div>
              </div>
            </div>
            <div class="single_product_box_main">
              <div class="single_product_box">
                <figure>
                  <img src="https://static.tossdown.com/logos/25d2e6c6-5566-4bb4-b21e-73eb9b393765.jpg">

                </figure>
                <div class="single_product_box_figcaption">

                  <div class="product_name">
                    <p>Xbox gaming console + controller</p>
                  </div>
                  <div class="product_description">
                    <p>Experience the ultimate gaming experience with the Xbox Console! This sleek white Xbox console
                      comes with the must-have Xbox wireless controller, so you can dive into the action right away.
                    </p>
                  </div>
                  <div class="price_tags">
                    <div class="total_and_discount_price"><small class="orignal_price">PKR 6800</small></div>
                  </div>
                  <div class="stock_box">
                    <p>Not Available</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>