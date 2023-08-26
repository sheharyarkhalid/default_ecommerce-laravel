
@extends('checkout/checkoutLayout')

@section('content')


<div class="check_out_option_section">
    <div class="checkout_container">
      <?php
      if(count($cart)!=0){
        ?>
        <div class="check_out_option_form_box">
     <?php }
        ?>
      

      <!-- account login/create section start -->
      <?php
      if(count($cart)!=0){
        ?>
        <div class="check_out_option_account_form_box"> 
        <?php 
      }
      else{
        ?>
        <div class="check_out_option_account_form_box_else">
       <?php }
        ?>
        
          <?php
          if(count($cart)!=0){
            ?>
          <div class="check_out_option_form_box_one">
             <div class="check_out_option_form_box_one_content">
                 <div class="check_out_option_form_box_one_content_header">
                     <h3>No Account? No Problem</h3>
                     <p>Checkout as a guest to avoid any inconvenience</p>
                 </div>
                  <div class="check_out_option_form_box_one_guest_btn"><a href="#"><span>continue as a guest</span></a></div> 
                  
             </div>
         </div>
         <?php }
         ?>

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
  
                       <form action="/login" method="post">
                        @csrf
                          <div class="check_out_form_content_box">
                            
                              <div class="check_out_form_field_box">
                                <div class="check_out_single_field_box">
                                  <span>Email</span>
                                  <input type="email" name="user_email"  placeholder="Enter your email">
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

                                      @if ($errors->any())
                                        <div class="alert alert-danger">
                                          <ul>
                                              @foreach ($errors->all() as $error)
                                                  <li>{{ $error }}</li>
                                              @endforeach
                                          </ul>
                                        </div>
                                     @endif
                                
                              <div class="check_out_option_box_two_signin_form_signin_btn">
                                <input class="font-md-bold btn btn-buy" type="submit" value="Sign In">
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
      <?php
       if(count($cart)!=0){
        ?>
          <!-- Cart bill Summary section start -->
          <div class="check_out_option_form_box_three">
            @include('checkout/include/cartSummary')
          </div> 
         <!-- Cart bill Summary section End -->
       <?php }
      ?>
        
        <?php
        if(count($cart)!=0){
          ?>
           </div>
       <?php }
          ?>
   
</div>


@endsection