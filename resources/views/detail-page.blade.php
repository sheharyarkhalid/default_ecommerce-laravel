@extends('Layout')

@section('content')
<div class="product_detail_page_parent">
  <section class="product_detail_page_section">
    <div class="detail_page_container">
      <div class="product_detail_page_content">
        <div class="product_detail_page_figure_box">
          <figure>
            <img src="https://static.tossdown.com/images/c1292ab5-1b84-4014-99d8-626feb1cf231.jpg" />
          </figure>
        </div>

        <div class="product_detail_page_box">
          <div class="product_detail_page_box_section">
            <div class="product_detail_page_box_header">
              <small class="product_detail_page_category">Tea & coffee</small>
              <div class="product_detail_page_heading">
                <h2>Tim horton french vanila cappuccino</h2>
                <a class="product_detail_page_wish_list"><i class="far fa-heart"></i></a>
              </div>
            </div>

            <div class="product_detail_page_box_content_list">
              <p>
                please indicate how the chicken should be cut (16 pieces
                (Karahi), 12 pieces, 8 pieces, Whole chicken (do not cut).
                Please also provide any further instructions on how to process
                your order in comments .
              </p>
              <strong><span>Note:</span> The approximate price of one chicken is $8.99. Price of
                each chicken varies depending on weight of the chicken. The
                actual is calculated at $2.99 per LB at the time we are
                processing your order</strong>
              <ul>
                <li>Convenient 16 Ounce container</li>
                <li>
                  Makes a cup of rich, delicious frothy flavored cappuccino
                  anytime
                </li>
                <li>
                  Mix with hot water and treat yourself to the smooth, creamy
                  French vanilla flavor
                </li>
                <li>Ideal for Automatic Coffee Makers</li>
                <li>A perfect way to relax and indulge</li>
              </ul>
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
              <strong>CAD 50.70</strong>
              <strong class="text_decoration_line_through">CAD 8.99</strong>
              <span>10 % OFF</span>
            </div>

            <div class="product_detail_page_box_cart_btns_with_outofstock">
              <div class="cart_product_outofstock">
                <h3>Out of Stock</h3>
              </div>
              <div class="product_detail_page_box_cart_btns">
                <div class="product_detail_page_quantity_plus_minu_btns">
                  <i class="far fa-minus decrement_btn"></i><span>1</span><i class="fal fa-plus increment_btn"></i>
                </div>
                <div class="product_detail_page_add_to_cart_btn">
                  <a>Add to cart</a>
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
      </div>
    </div>
  </section>


  <div class="log_des_data_parent">
    <div class="detail_page_container">
      <div class="accordion" id="log_des_accordion">
        <div class="log_des_acc_main">
          <div class="log_des_acc_header" data-toggle="collapse" data-target="#log_des_toggle_one" aria-expanded="true">
            <span class="title">Ingredients</span>
            <span class="acc_icon"><i class="fas fa-angle-down rotate-icon"></i></span>
          </div>
          <div id="log_des_toggle_one" class="collapse show" data-parent="#log_des_accordion">
            <div class="log_des_toggle_data">
              <ul class="log_des_toggle_data_listing">
                <li><i class="fas fa-circle"></i>Noodle</li>
                <li><i class="fas fa-circle"></i>Teriyaki Sauce</li>
                <li><i class="fas fa-circle"></i>Prune Concentrate Juice</li>
                <li><i class="fas fa-circle"></i>Modified Food Starch</li>
                <li><i class="fas fa-circle"></i>Caramel Color</li>
                <li><i class="fas fa-circle"></i>Salt</li>
                <li><i class="fas fa-circle"></i>Carrots</li>
                <li><i class="fas fa-circle"></i>Broccoli</li>
                <li><i class="fas fa-circle"></i>Noodle</li>

              </ul>

            </div>
          </div>
        </div>
        <div class="log_des_acc_main">
          <div class="log_des_acc_header collapsed" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="false" aria-controls="collapseTwo">
            <span class="title">ALLERGENS</span>
            <span class="acc_icon"><i class="fas fa-angle-down rotate-icon"></i></span>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#log_des_accordion">
            <div class="log_des_toggle_data">
              <ul class="log_des_toggle_data_listing">
                <li><i class="fas fa-circle"></i>Wheat</li>
                <li><i class="fas fa-circle"></i>Egg</li>
                <li><i class="fas fa-circle"></i>Soy</li>
                <li><i class="fas fa-circle"></i>Sesame</li>
              </ul>

            </div>
          </div>
        </div>
        <div class="log_des_acc_main">
          <div class="log_des_acc_header collapsed" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="false">
            <span class="title">how we prepare</span>
            <span class="acc_icon"><i class="fas fa-angle-down rotate-icon"></i></span>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#log_des_accordion">
            <div class="log_des_toggle_data">
              <ul class="log_des_toggle_data_listing_two">
                <li><span>1</span>Remove Label & Plastic
                  Film</li>
                <li><span>2</span>Cook for 2-3 minutes</li>
                <li><span>3</span>Stirring half way
                  through</li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="log_des_rating_box">
        <div class="log_des_rating_num">
          <h3>RATING OVERVIEW</h3>
          <small>Overall Rating</small>
          <div class="log_des_rating_num_detail">
            <h2>4.0</h2>
            <div class="log_des_total_rating">
              <div class="log_des_total_rating_stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fal fa-star"></i>
              </div>
              <p>Based on 56 reviews</p>
            </div>
          </div>
        </div>

        <div class="log_des_review_list_main">
          <h3>reviews</h3>
          <div class="log_des_review_list">
            <div class="log_des_single_review">
              <figure>
                <img src="https://images-beta.tossdown.com/site/57c86017-30f4-483a-8042-8d60311e982f.webp">
                <figcaption>
                  <h5>Devon Lane</h5>
                  <span>7 June, 2023</span>
                </figcaption>
              </figure>
              <div class="log_des_single_review_data">
                <div class="log_des_single_review_stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur. Facilisis amet sed et fermentum erat nisl. Quis sit gravida
                  tincidunt feugiat. Aliquam proin aliquet nunc consequat est.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>  
@endsection