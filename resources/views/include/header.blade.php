
<header class="desk_header">
    <div class="header_bar_1">
      <div class="custom_container">
        <div class="header_bar_1_list">
          <div class="header_location_bar">
            <a type="button" data-toggle="modal" data-target="#current_location_modal" class="header_location_selector">
              <i class="fas fa-map-marker-alt"></i>
              <div class="header_location_data">
                <span>Current Location <i class="fas fa-caret-down"></i></span>
                <p>Al hamra Town, Lahore</p>
              </div>
            </a>
          </div>
          <a class="header_logo"><img class="lazy" data-src=""
              src="{{asset('images/logo.jpg')}}" alt="logo" /></a>
          <div class="header_ecomerce_links">
            <a class="header_location_btn" type="button" data-toggle="modal" data-target="#web_header_search"><i
                class="fa-regular fa-magnifying-glass"></i></a>
            <a class="header_signin_btn"><i class="fa-regular fa-user"></i></a>
            <a class="header_cart_btn"><i class="fa-regular fa-cart-shopping"></i></a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <header class="mobile_header">
    <div class="mobile_header_bar_1">
      <div class="mobile_header_bar_1_left">
        <a class="header_logo"><img class="lazy" data-src=""
            src="https://static.tossdown.com/site/73a7cf0f-cd0f-4a0d-ba40-8559468e62ac.webp" alt="logo" /></a>
        <a type="button" data-toggle="modal" data-target="#current_location_modal" class="header_location_selector">
          <i class="fas fa-map-marker-alt"></i>
          <div class="header_location_data">
            <span>Current Location <i class="fas fa-caret-down"></i></span>
            <p>Al hamra Town, Lahore</p>
          </div>
        </a>
      </div>

      <div class="header_ecomerce_links">
        <a class="header_location_btn" type="button" data-toggle="modal" data-target="#web_header_search"><i
            class="fa-regular fa-magnifying-glass"></i></a>
        <a class="header_signin_btn"><i class="fa-regular fa-user"></i></a>
      </div>

    </div>
  </header>
  <div class="modal fade" id="web_header_search" tabindex="-1" role="dialog" aria-labelledby="web_header_search"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered web_header_modal_zoom search_modal_container" role="document">
      <div class="modal-content search_modal_content">
        <div class="search_modal_header">
          <h3>Search</h3>
          <a type="button" class="search_modal_cross_btn" data-dismiss="modal" aria-label="Close">
            <i class="fa-solid fa-xmark-large"></i>
          </a>
        </div>
        <div class="search_modal_body">
          <div class="search_modal_box">
            <input type="search" autocomplete="off" name="header_search" placeholder="Search products here…" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="current_location_modal" tabindex="-1" role="dialog"
    aria-labelledby="current_location_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered web_header_modal_zoom search_modal_container" role="document">
      <div class="modal-content current_location_content">
        <div class="current_location_header">
          <a type="button" class="current_location_cross_btn" data-dismiss="modal" aria-label="Close">
            <i class="fa-solid fa-xmark-large"></i>
          </a>
        </div>
        <div class="current_location_body">
          <figure><img src="https://static.tossdown.com/site/73a7cf0f-cd0f-4a0d-ba40-8559468e62ac.webp"></figure>
          <div class="current_location_box">
            <span>Choose Your Nearest Branch</span>
            <select>
              <option selected disabled>Select your location</option>
            </select>
          </div>
          <div class="current_location_box_btn">
            <button>Select</button>
          </div>
        </div>
      </div>
    </div>
  </div>