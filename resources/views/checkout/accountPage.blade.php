
@extends('checkoutLayout')

@section('content')
  

<div class="check_out_option_section">
    <div class="checkout_container">
     <div class="check_out_option_form_box">

      <!-- account login/create section start -->
        <div class="check_out_option_account_form_box"> 
         <div class="check_out_option_form_box_one">
             <div class="check_out_option_form_box_one_content">
                 <div class="check_out_option_form_box_one_content_header">
                     <h3>No Account? No Problem</h3>
                     <p>Checkout as a guest to avoid any inconvenience</p>
                 </div>
                  <div class="check_out_option_form_box_one_guest_btn"><a href="#"><span>continue as a guest</span></a></div> 
                  
             </div>
         </div>

         <div class="check_out_option_form_box_two">
            <div class="check_out_option_form_box_two_content">
              <div class="check_out_account_tabs_main">
             
              <div class="nav check_out_account_tabs" id="myTab" role="tablist">
                <a class=" active" id="login-tab" data-toggle="tab" href="#checkout_login_tab" role="tab" aria-controls="login" aria-selected="true">Login</a>
                <a class=" " id="signup-tab"  data-toggle="tab"  href="#checkout_signup_tab" role="tab" aria-controls="signup" aria-selected="false" >signup</a>
              </div>

                <div class="tab-content check_out_account_tab_content" id="myTabContent">
                  <div class="check_out_account_tab_data tab-pane fade show active" id="checkout_login_tab" role="tabpanel" aria-labelledby="login-tab">
                 
                    <div class="check_out_option_form_box_two_content_header">
                      <h3>Login to your account</h3>
                  </div>
  
                       <form>
                          <div class="check_out_form_content_box">
                            
                              <div class="check_out_form_field_box">
                                <div class="check_out_single_field_box">
                                  <span>Email</span>
                                  <input type="email" placeholder="Enter your email" name="email">
                                  <i class="fa-light fa-envelope"></i>
                                </div>
                                <label class="error" generated="true" for="email"></label>
                              </div>

                              <div class="check_out_form_field_box">
                                <div class="check_out_single_field_box">
                                  <span>Password</span>
                                  <input type="password" placeholder="Enter password" name="password">
                                  <i class="fa-light fa-eye-slash"></i>
                                </div>
                                <label class="error" generated="true" for="password"></label>
                              </div>

                             
                                
                              <div class="check_out_option_box_two_signin_form_signin_btn">
                                 <button>Login in</button>
                              </div>  
                          </div>
                       </form>

                
                  </div>
                  <div class="check_out_account_tab_data tab-pane fade" id="checkout_signup_tab" role="tabpanel" aria-labelledby="signup-tab">
                  
                    <div class="check_out_option_form_box_two_content_header">
                      <h3>Create your account</h3>
                  </div>
  
                       <form>
                          <div class="check_out_form_content_box">
                            <div class="check_out_form_field_box">
                              <div class="check_out_single_field_box">
                                <span>Full Name</span>
                                <input type="text" placeholder="Enter your name" name="name">
                              
                              </div>
                              <label class="error" generated="true" for="name"></label>
                            </div>
                            <div class="check_out_form_field_box">
                              <div class="check_out_single_field_box">
                                <span>Email</span>
                                <input type="email" placeholder="Enter your email" name="email">
                                <i class="fa-light fa-envelope"></i>
                              </div>
                              <label class="error" generated="true" for="email"></label>
                            </div>

                            <div class="check_out_form_field_box">
                              <div class="check_out_single_field_box">
                                <span>Password</span>
                                <input type="password" placeholder="Enter password" name="password">
                                <i class="fa-light fa-eye-slash"></i>
                              </div>
                              <label class="error" generated="true" for="password"></label>
                            </div>
                              <div class="check_out_option_box_two_signin_form_signin_btn">
                                 <button>Sign up</button>
                              </div>  
                          </div>
                       </form>

                 
                  </div>
                 
                  </div>


            </div>
              
                 
                     <div class="check_out_option_box_two_form_divider">
                     <div> <a type="button" data-toggle="modal" data-target="#account_forget_password_popup">Forgot password?</a></div>
                      <section class="modal fade" id="account_forget_password_popup" tabindex="-1" role="dialog" aria-labelledby="account_forget_password_popupLabel" aria-hidden="true">
                        <div class="modal-dialog account_forget_password_container" role="document">
                            <div class="account_forget_password_popup">
                              
                                <div class="account_forget_password_popup_des">
                                  <h5>Forgot Password</h5>
                                </div>
                                 <form>
                                  <div class="account_forget_password_popup_input">
                                    <div class="account_forget_password_popup_input_field">
                                      <input type="text" placeholder="Enter Your Email Address">
                                       <label class="error">some thing worng</label>
                                    </div>
                                    <div class="account_forget_password_popup_btn">
                                      <a>Submit</a>
                                      <a data-dismiss="modal">close</a>
                                    </div>
                                    </div>
                                 </form>
                                 
                               </div>
                              
                            </div>
                      
                      </section>
                      <div class="form_divider_lines"><small></small><span>or</span><small></small></div>

                        </div>

                     <div class="check_out_google_signin_btn">
                     <a href="#" class="google_btn"><img src="{{asset('images/google_img.png')}}"> <span>Sign in with Google</span></a>
                     <a href="#" class="fb_btn"><i class="fab fa-facebook-f"></i> <span>Login with Facebook</span></a>
                    </div> 

            </div>
        </div>
        </div>
 <!-- account login/create section End -->

           <!-- Cart bill Summary section start -->
           <div class="check_out_option_form_box_three">
            <div class="shopping_cart_total_bill_box">
              <div class="shopping_cart_total_bill_box_heading"><h5>Cart Summary</h5></div>
              <div class="shopping_cart_total_bill_box_content">
                <div class="shopping_cart_total_bill_box_inner_content">
                  <div class="total_bill_box_inner_subtotal_heading"><p>Subtotal</p><small>3 Item(s)</small></div><span>CAD 100.99</span>
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

                   <div class="accordion shopping_cart_total_bill_box_discount_Coupon" id="main_Apply_discount_Coupon" role="tablist" aria-multiselectable="true">

                     <!-- Accordion card -->
                     <div class="card">
                 
                       <!-- Card header -->
                       <div class="summary_Apply_discount_Coupon_header" role="tab" id="Apply_discount_Coupon">
                         <a data-toggle="collapse" data-parent="#main_Apply_discount_Coupon" href="#Apply_discount_Coupon_collapse" aria-expanded="true"
                            aria-controls="Apply_discount_Coupon_collapse">
                           <h5>
                              Apply discount Coupon <i class="fas fa-angle-down rotate-icon"></i>
                           </h5>
                         </a>
                       </div>
                 
                       <!-- Card body -->
                       <div id="Apply_discount_Coupon_collapse" class="collapse " role="tabpanel" aria-labelledby="Apply_discount_Coupon"
                            data-parent="#main_Apply_discount_Coupon">
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
                    <div class="shopping_cart_total_bill_box_loyalty_point" type="button" data-toggle="modal" data-target="#summary_box_loyalty_point">
                   <p>Redeem Loyalty Points <i class="fas fa-angle-right"></i></p>
                    </div> 

                    <section class="modal fade" id="summary_box_loyalty_point" tabindex="-1" role="dialog" aria-labelledby="summary_box_loyalty_pointLabel" aria-hidden="true">
                         <div class="modal-dialog summary_box_loyalty_point_container" role="document">
                             <div class="summary_box_loyalty_point_pop_up">
                                <div class="summary_box_loyalty_point_pop_up_figure">
                                  <figure><img src="https://static.tossdown.com/images/ed38c4b6-8d62-4071-9bda-9de6f7e57868.png" /></figure>
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
                     <span>Loyalty Discount</span><p>CAD 12.99</p>
                   </div>
                 </div>
                </div>

               <div class="shopping_cart_total_bill_divider shopping_cart_total_bill_first_divider"></div>

               <div class="shopping_cart_total_bill_taxes_box"><p>Applicable taxes and fee will be calculated before finalizing checkout</p></div>

               <div class="shopping_cart_total_bill_divider"></div>
              
               <div class="shopping_cart_total_bill_final_price_box"><p>Est.Total</p><span>CAD 129.99</span></div>

               <div class="shopping_cart_total_bill_proceeding_btn"><a>Proceed to checkout</a></div>
             </div>
          </div> 
         <!-- Cart bill Summary section End -->



     </div>

    </div>

    

</div>

@endsection