@extends('checkout/checkoutLayout')

@section('content')
  

  <!--  -->
  <form action="{{ url('/place_order') }}" method="POST" >
    @csrf
  <div class="checkout_page_section">
    <div class="checkout_container">
      <div class="checkout_page_box">
        <!-- checkout details section start  -->
        <div class="checkout_page_box_one">
            <div class="checkout_page_box_heading_box">
              <h2>Checkout</h2>
            </div>
       

          <div class="check_out_verification_steps_main">
            <div class="check_out_verification_steps">
              <div class="check_out_shipping_method_box">
                <div class="check_out_verification_steps_heading">
                  <h2>Choose Shipping method:</h2>
                </div>

                <div class="nav check_out_shipping_method_tabs" id="myTab" role="tablist">
                  <a href="javascript:void(0)" class="change_order_type active show"  data-order-type="delivery"  id="delivery-tab" aria-selected="true">
                      <div class="active_method_box"><small></small></div><span>Delivery</span>
                  </a>
                  <a href="javascript:void(0)" class="change_order_type" data-order-type="pickup" id="pickup-tab"  aria-selected="false">
                      <div class="active_method_box"><small></small></div><span>Pickup</span>
                  </a>
                  
                  <input type="hidden" name="order_type" id="order_type" value="delivery">   
                </div>

              </div>

              <div class="tab-content check_out_shipping_method_tab_content" id="myTabContent">
                <div class="check_out_shipping_method_tab_data tab-pane fade active show" id="checkout_delivery_tab" role="tabpanel" aria-labelledby="delivery-tab"> 
                 
                  <div class="shipping_method_tab_heading">
                    <h3>Delivery Details</h3>
                  </div>

                </div>
                <div class="check_out_shipping_method_tab_data tab-pane fade" id="checkout_pickup_tab" role="tabpanel" aria-labelledby="pickup-tab">
                  <div class="check_out_location_selector">
                    <span>Choose pickup location:</span>
                    <div class="check_out_form_field_box">
                      <div class="check_out_single_field_box">
                        <span>Choose location</span>
                        <select>
                          <option selected>Store location</option>
                        </select>
                       
                      </div>
                      <label class="error" generated="true" for="location"></label>
                    </div>
                  </div>
                  <div class="shipping_method_tab_heading">
                    <h3>Pickup Details</h3>
                  </div>
                </div>


                <div class="check_out_form_content_box">
                  <div class="check_out_form_field_box">
                    <div class="check_out_single_field_box">
                      <span>Email*</span>
                      <input type="email" placeholder="Enter your email" name="user_info[email]">
                     
                    </div>
                    <label class="error" generated="true" for="email"></label>
                  </div>
                    <div class="check_out_form_data_box">
                      
                        <div class="check_out_form_field_box">
                          <div class="check_out_single_field_box">
                            <span>Full Name*</span>
                            <input type="text" placeholder="Enter your name" name="user_info[name]">
                           
                          </div>
                          <label class="error" generated="true" for="name"></label>
                        </div>

                        <div class="check_out_form_field_box">
                          <div class="check_out_single_field_box">
                            <span>Contact no.*</span>
                            <input type="password" placeholder="Enter your number" name="num" name="user_info[phone]">
                           
                          </div>
                          <label class="error" generated="true" for="num"></label>
                        </div>
                        
                    </div>

                    <div class="check_out_form_field_box">
                      <div class="check_out_single_field_box">
                        <span>Complete address*</span>
                        <input type="text" placeholder="Enter your address" name="address">
                       
                      </div>
                      <label class="error" generated="true" for="address"></label>
                    </div>
                    <div class="check_out_form_field_box">
                      <div class="check_out_single_field_box check_out_textarea">
                        <span>Special Instructions(Optional)</span>
                        <textarea type="text" placeholder="Write your message here....." name="user_info[address]"></textarea>
                      
                       
                      </div>
                      <label class="error" generated="true" for="address"></label>
                    </div>

                   
                </div>

                <div class="checkout_payment_type_box">
                  <h3>Select Payment Method</h3>
                  <div class="checkout_payment_type_list">
                   <div class="checkout_single_payment_type">
                     <input type="radio" id="cash_On_pickup" name="payment_info[type]" value="COD" checked>
                     <label for="cash_On_pickup">Cash On pickup</label>
                   </div>
                   <div class="checkout_single_payment_type">
                     <input type="radio" id="card_On_pickup" name="payment_info[type]" value="payment">
                     <label for="card_On_pickup">Card On pickup</label>
                   </div>
                  </div>
                </div>
               
                </div>


           


            </div>
          
          </div>



        </div>
        <!-- checkout details section End  -->

        <!-- Cart bill Summary section start -->
      <div class="checkout_page_box_two">
          <div class="checkout_page_item_summary">
           
          @include('checkout/include/orderDetail')
 
          </div>
        @include('checkout/include/cartSummary')
         
      </div>

        <!-- Cart bill Summary section End -->
      </div>
    </div>
  </div>

</form>

<script>

  $.radio_loading = function(btn , text, action){
      if(action==true){
          btn.attr("disabled", "disabled");
      } else if (action==false ){
          btn.removeAttr("disabled");
      }
      if(action && !btn.data('old-html')){
          btn.data('old-html', btn.html()).prop("disabled", true).html('<div class="active_method_box"><i class="fas fa-circle-notch fa-spin" style="font-size:20px" ></i></div><span>'+text+'</span>');
          return
      }
      if(!btn.data('old-html')) return;
      btn.prop("disabled", false).html(btn.data('old-html')).data('old-html', false);
  }
  const orderTypeElement = document.querySelector(".change_order_type");
  $(".change_order_type").click(function(){
      var $btn = $(this);
      var text = $(this).children("span").html();
      $.radio_loading($btn,text, true);
       // This function will be called when the element is clicked
      const orderType = $(this).attr("data-order-type");
      const tokenMetaTag = document.querySelector('meta[name="csrf-token"]');
      const token = tokenMetaTag.getAttribute("content");
      
      const url = "https://ecom.3xservices.com/checkout/ajax/order_type";
      const data = {
          order_type: orderType,
          _token: token
      };
      
      fetch(url, {
          method: "POST",
          headers: {
              "Content-Type": "application/json"
          },
          body: JSON.stringify(data)
      })
      .then(response => response.json())
      .then(data => {
          console.log("Response data:", data);
          const order_type = data.type;
          $.radio_loading($btn,text, false);
          $(`.change_order_type`).removeClass("active");
          $(`.change_order_type`).removeClass("open");
          $(`.change_order_type`).removeClass("show");
          
          $(`[data-order-type="${order_type}"`).addClass("active");
          $(`[data-order-type="${order_type}"`).addClass("open");
          $(`[data-order-type="${order_type}"`).addClass("show");
          
          $(".check_out_shipping_method_tab_data").removeClass("active");
          $(".check_out_shipping_method_tab_data").removeClass("show");
          
          $(`#checkout_${order_type}_tab`).addClass("active");
          $(`#checkout_${order_type}_tab`).addClass("show");
          
      })
      .catch(error => {
          console.error("Error:", error);
      });
      console.log("Element clicked");
  });
 
  
   
</script>
  @endsection

