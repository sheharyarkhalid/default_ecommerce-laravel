@extends('checkoutLayout')

@section('content')
  

  <!--  -->
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
                  <a class="active show" id="delivery-tab" data-toggle="tab" href="#checkout_delivery_tab" role="tab" aria-controls="delivery" aria-selected="true"><div class="active_method_box"><small></small></div><span>Delivery</span></a>
                  <a class="" id="pickup-tab" data-toggle="tab" href="#checkout_pickup_tab" role="tab" aria-controls="pickup" aria-selected="false"><div class="active_method_box"><small></small></div><span>Pickup</span></a>
                </div>

              </div>

              <div class="tab-content check_out_shipping_method_tab_content" id="myTabContent">
                <div class="check_out_shipping_method_tab_data tab-pane fade active show" id="checkout_delivery_tab" role="tabpanel" aria-labelledby="delivery-tab"> 
                  <div class="shipping_method_tab_heading">
                    <h3>Delivery Details</h3>
                  </div>

                    <div class="check_out_form_content_box">
                      <div class="check_out_form_field_box">
                        <div class="check_out_single_field_box">
                          <span>Email*</span>
                          <input type="email" placeholder="Enter your email" name="email">
                         
                        </div>
                        <label class="error" generated="true" for="email"></label>
                      </div>
                        <div class="check_out_form_data_box">
                          
                            <div class="check_out_form_field_box">
                              <div class="check_out_single_field_box">
                                <span>Full Name*</span>
                                <input type="text" placeholder="Enter your name" name="name">
                               
                              </div>
                              <label class="error" generated="true" for="name"></label>
                            </div>

                            <div class="check_out_form_field_box">
                              <div class="check_out_single_field_box">
                                <span>Contact no.*</span>
                                <input type="password" placeholder="Enter your number" name="num">
                               
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
                            <textarea type="text" placeholder="Write your message here....." name="address"></textarea>
                          
                           
                          </div>
                          <label class="error" generated="true" for="address"></label>
                        </div>

                       
                     </div>

                     <div class="checkout_payment_type_box">
                       <h3>Select Payment Method</h3>
                       <div class="checkout_payment_type_list">
                        <div class="checkout_single_payment_type">
                          <input type="radio" id="cash_On_delivery" name="On_delivery" checked>
                          <label for="cash_On_delivery">Cash On Delivery</label>
                        </div>
                        <div class="checkout_single_payment_type">
                          <input type="radio" id="card_On_delivery" name="On_delivery">
                          <label for="card_On_delivery">Card On Delivery</label>
                        </div>
                       </div>
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

                    <div class="check_out_form_content_box">
                      <div class="check_out_form_field_box">
                        <div class="check_out_single_field_box">
                          <span>Email*</span>
                          <input type="email" placeholder="Enter your email" name="email">
                         
                        </div>
                        <label class="error" generated="true" for="email"></label>
                      </div>
                        <div class="check_out_form_data_box">
                          
                            <div class="check_out_form_field_box">
                              <div class="check_out_single_field_box">
                                <span>Full Name*</span>
                                <input type="text" placeholder="Enter your name" name="name">
                               
                              </div>
                              <label class="error" generated="true" for="name"></label>
                            </div>

                            <div class="check_out_form_field_box">
                              <div class="check_out_single_field_box">
                                <span>Contact no.*</span>
                                <input type="password" placeholder="Enter your number" name="num">
                               
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
                            <textarea type="text" placeholder="Write your message here....." name="address"></textarea>
                          
                           
                          </div>
                          <label class="error" generated="true" for="address"></label>
                        </div>

                       
                     </div>

                     
                     <div class="checkout_payment_type_box">
                      <h3>Select Payment Method</h3>
                      <div class="checkout_payment_type_list">
                       <div class="checkout_single_payment_type">
                         <input type="radio" id="cash_On_pickup" name="On_pickup" checked>
                         <label for="cash_On_pickup">Cash On pickup</label>
                       </div>
                       <div class="checkout_single_payment_type">
                         <input type="radio" id="card_On_pickup" name="On_pickup">
                         <label for="card_On_pickup">Card On pickup</label>
                       </div>
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
          <div class="shopping_cart_total_bill_box">
            <div class="shopping_cart_total_bill_box_heading">
              <h5>Cart Summary</h5>
            </div>
            <div class="shopping_cart_total_bill_box_content">
              <div class="shopping_cart_total_bill_box_inner_content">
                <div class="total_bill_box_inner_subtotal_heading">
                  <p>Subtotal</p><small>3 Item(s)</small>
                </div><span>CAD 100.99</span>
              </div>
              <div class="shopping_cart_total_bill_box_inner_content">
                <p>Total Discount</p><span>10%</span>
              </div>
              <div class="shopping_cart_total_bill_box_inner_content">
                <p>GST</p><span>16%</span>
              </div>
              <div class="shopping_cart_total_bill_box_inner_content">
                <p>Delivery Charges</p><span>CAD 5.99</span>
              </div>

            </div>

            <div class="shopping_cart_total_bill_get_discount_box">
              <div class="shopping_cart_total_bill_box_get_discount_fields">

                <div class="accordion shopping_cart_total_bill_box_discount_Coupon" id="main_Apply_discount_Coupon"
                  role="tablist" aria-multiselectable="true">

                  <!-- Accordion card -->
                  <div class="card">

                    <!-- Card header -->
                    <div class="summary_Apply_discount_Coupon_header" role="tab" id="Apply_discount_Coupon">
                      <a data-toggle="collapse" data-parent="#main_Apply_discount_Coupon"
                        href="#Apply_discount_Coupon_collapse" aria-expanded="true"
                        aria-controls="Apply_discount_Coupon_collapse">
                        <h5>
                          Apply discount Coupon <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                      </a>
                    </div>

                    <!-- Card body -->
                    <div id="Apply_discount_Coupon_collapse" class="collapse " role="tabpanel"
                      aria-labelledby="Apply_discount_Coupon" data-parent="#main_Apply_discount_Coupon">
                      <div class="summary_Apply_discount_Coupon_body">
                        <form>
                          <div class="summary_discount_Coupon_input">
                            <div class="summary_discount_Coupon_input_field">
                              <input type="text" placeholder="DIS23455">
                              <label class="error">some thing worng</label>
                            </div>
                            <div class="summary_discount_Coupon_btn"><a>Apply</a></div>
                          </div>

                        </form>
                      </div>
                    </div>

                  </div>
                </div>


              </div>
              <div class="shopping_cart_total_bill_box_get_discount_fields">
                <div class="shopping_cart_total_bill_box_loyalty_point" type="button" data-toggle="modal"
                  data-target="#summary_box_loyalty_point">
                  <p>Redeem Loyalty Points <i class="fas fa-angle-right"></i></p>
                </div>

                <section class="modal fade" id="summary_box_loyalty_point" tabindex="-1" role="dialog"
                  aria-labelledby="summary_box_loyalty_pointLabel" aria-hidden="true">
                  <div class="modal-dialog summary_box_loyalty_point_container" role="document">
                    <div class="summary_box_loyalty_point_pop_up">
                      <div class="summary_box_loyalty_point_pop_up_figure">
                        <figure><img
                            src="https://static.tossdown.com/images/ed38c4b6-8d62-4071-9bda-9de6f7e57868.png" />
                        </figure>
                      </div>
                      <div class="summary_box_loyalty_point_pop_up_des">
                        <h5>Redeem Loyalty Points!</h5>
                        <p>You have total <span>500 loyalty points</span> which can be redeemed</p>
                      </div>
                      <form>
                        <div class="summary_box_loyalty_point_pop_up_input">
                          <div class="summary_box_loyalty_point_pop_up_input_field">
                            <input type="text" placeholder="DIS23455">
                            <label class="error">some thing worng</label>
                          </div>
                          <div class="summary_box_loyalty_point_pop_up_btn"><a>Apply</a></div>
                        </div>
                      </form>

                    </div>

                  </div>

                </section>

              </div>

            </div>

            <div class="shopping_cart_total_bill_box_discounted_data_section">
              <div class="shopping_cart_total_bill_box_discounted_data">
                <div class="shopping_cart_total_bill_box_discounted_data_field">
                  <span>Loyalty Redeemed</span><small>-100 Points</small>
                </div>
                <div class="shopping_cart_total_bill_box_discounted_data_field">
                  <span>Loyalty Discount</span>
                  <p>CAD 12.99</p>
                </div>
              </div>
            </div>

            <div class="shopping_cart_total_bill_divider shopping_cart_total_bill_first_divider"></div>

            <div class="shopping_cart_total_bill_taxes_box">
              <p>Applicable taxes and fee will be calculated before finalizing checkout</p>
            </div>

            <div class="shopping_cart_total_bill_divider"></div>

            <div class="shopping_cart_total_bill_final_price_box">
              <p>Est.Total</p><span>CAD 129.99</span>
            </div>

            <div class="shopping_cart_total_bill_proceeding_btn"><a>Proceed to checkout</a></div>
          </div>
        </div>

        <!-- Cart bill Summary section End -->
      </div>
    </div>
  </div>

  @endsection