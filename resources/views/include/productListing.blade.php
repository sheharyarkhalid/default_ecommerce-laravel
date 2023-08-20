<div class="cat_tab_slider_main">
    <div class="product_container">
      <div class="cat_tab_slider_parent">
        <ul class="nav cat_tab_slider">
          <li class="nav-item"><a class="nav-link scrolling_tabs active" href="#featured_section_4_all">All</a></li>
          @foreach ($products as $cat_group_item)
          <li class="nav-item">
            <a class="nav-link scrolling_tabs " href="#featured_section_4_{{ $cat_group_item['info']->cat_slug }}">{{ $cat_group_item['info']->cat_name }}</a>
          </li>
      @endforeach
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
        
        @foreach ($products as $cat_group_item)
            <div class="shop_product_list_main" id="featured_section_4_{{ $cat_group_item['info']->cat_slug }}">
                  <div class="shop_product_list_heading">
                        <h3>{{ $cat_group_item['info']->cat_name }}</h3>
                  </div>
                  <div class="product_list_parent">
                        @foreach( $cat_group_item['cat_products'] as $product)
                        
                            @include('include/singleProduct')
                            
                        @endforeach
        
                  </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>