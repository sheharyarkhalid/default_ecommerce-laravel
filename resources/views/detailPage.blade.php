@extends('Layout')

@section('content')
<div class="product_detail_page_parent">
  <section class="product_detail_page_section">
    <div class="detail_page_container">
      <div class="product_detail_page_content">
<<<<<<< Updated upstream
        <div class="product_detail_page_figure_box">
          <figure>
            <img src="https://static.tossdown.com/images/c1292ab5-1b84-4014-99d8-626feb1cf231.jpg" />
          </figure>
        </div>
=======
        
        @include('include/productDetails')
>>>>>>> Stashed changes

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