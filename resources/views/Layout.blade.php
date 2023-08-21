<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/dragable_cart.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/detail_page.css')}}" />


  <!-- fontawsome link start-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

    <!-- fontawsome link end -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

   


  <!-- dragable cart script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

  <script src="{{asset('assets/js/jquery.ui.touch-punch.min.js')}}"></script>

  <script type=text/javascript src="{{asset('assets/js/custom_script.js')}}"></script>


  <script type=text/javascript src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>

  <link rel=stylesheet type=text/css href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css" />
  <link rel=stylesheet type=text/css href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css" />

</head>

<body>


    @include('include/header')

    @section('content')
    @show

    @include('include/cart')
    
    @include('include/footer')
    <div class="success_message_box ">
<p>Item added to cart</p>
</div>
<script>
    // $(".add_to_cart").click(function(){
    //     $(this).button('loading');
    //     setTimeout(function() {
    //         $(this).button('reset');
    //     }, 5000);
    // });
    
    // Button Loading Animation
    $.button_loading = function(btn, action){
        
        if(action==true){
            btn.attr("disabled", "disabled");
        } else if (action==false ){
            btn.removeAttr("disabled");
        }
        if(action && !btn.data('old-html')){
            btn.data('old-html', btn.html()).prop("disabled", true).html('<i class="fas fa-circle-notch fa-spin" style="font-size:20px" ></i>&nbsp; Add to Cart' );
            return
        }
        if(!btn.data('old-html')) return;
        btn.prop("disabled", false).html(btn.data('old-html')).data('old-html', false);
    } 
    
    
    $(document).on("click",  ".cart_quantity_switcher, .item_quantity_switcher", function(ev) {
        
      var currentQty = $('input[name="quantity"]').val();
      var qtyDirection = $(this).data("direction");
      var newQty = 0;
      
      if (qtyDirection == "1") {
        newQty = parseInt(currentQty) + 1;
      }
      else if (qtyDirection == "-1") {
        newQty = parseInt(currentQty) - 1;
      }
    
      // make decrement disabled at 1
      if (newQty == 1) {
        $(".decrement-quantity").attr("disabled", "disabled");
      }
      
      // remove disabled attribute on subtract
      if (newQty > 1) {
        $(".decrement-quantity").removeAttr("disabled");
      }
      
      if (newQty > 0) {
        newQty = newQty.toString();
        $('input[name="quantity"]').val(newQty);
        $(".quantity_switcher").val(newQty);
         console.log(newQty);

      }
      else {
        $('input[name="quantity"]').val("1");
        $(".quantity_switcher").val(1);
      }
     
    });
    // Add to cart function
    $(document).on("click", ".add_to_cart", function() {
        var $btn = $(this);
        $.button_loading($btn, true);
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var product_id = $(this).attr("data-id");
        console.log($(".quantity_switcher").val());
        
        
        if($(".quantity_switcher").length != 0) {
            var quantity = $(".quantity_switcher").val();
        } else {
            var quantity = 1;
        }
        
       
        $.ajax({
			url: "/add_to_cart",
			type: "POST",
			data: { product_id : product_id,  quantity: quantity , _token :  csrfToken  },
			// Complete callback (responseText is used internally)
			success: function( response ) {
				// Store the response as specified by the jqXHR object
				var data = JSON.parse(response);
				
				var updated_cart_html = data.html;
				var message = data.message;
				console.log(message);
				$("#cart_template").html(updated_cart_html);
				$(".cart_item_count").html(data.cart_info.items_count);
				$(".quantity_switcher").val(1);
        $(".success_message_box>p").html(message);
       
      
				setTimeout(function () {
                  $.button_loading($btn, false);
                  $(".success_message_box").addClass("show_add_message");
                }, 1000);
                setTimeout(function () {
                  $(".success_message_box").removeClass("show_add_message");
                }, 2000);
			
			}
		});
        
        
    });
    
   
    // Product Detail Popup

    $(".product_detail_popup_button").click(function(){
      
      var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var product_id = $(this).attr("data-id");

        $.ajax({
          url: "/product_details",
          type: "POST",
          data: { product_id : product_id, _token :  csrfToken  },
          // Complete callback (responseText is used internally)
          success: function( response ) {
            // Store the response as specified by the jqXHR object
              var data = JSON.parse(response);
              
              var product_details_html = data.html;
              
              $(".product_popup_detail_content").html(product_details_html);
              
              setTimeout(function () {
              
                $("#add_to_cart_popup").modal("show");
              }, 1000);
          
          }
        });
        console.log("yes");
    })
   


    $(document).on("click", ".cart-item-decrease", function() {
        // var $btn = $(this);
        // $.button_loading($btn, true);
        
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        
        var product_id = $(this).attr("data-id");
        
        $.ajax({
			url: "/cart_decrease",
			type: "POST",
			data: { product_id : product_id , _token :  csrfToken  },
		
			// Complete callback (responseText is used internally)
			success: function( response ) {
				// Store the response as specified by the jqXHR object
				var data = JSON.parse(response);
				
				var updated_cart_html = data.html;
				var message = data.message;
				console.log(message);
				$("#cart_template").html(updated_cart_html);
				$(".cart_item_count").html(data.cart_info.items_count);
			
			
			}
         
		});
        
        
    });
    
      $(document).on("click", ".cart-item-increase", function() {
        // var $btn = $(this);
        // $.button_loading($btn, true);
        
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        
        var product_id = $(this).attr("data-id");
        
        $.ajax({
			url: "/cart_increase",
			type: "POST",
			data: { product_id : product_id , _token :  csrfToken  },
		
			// Complete callback (responseText is used internally)
			success: function( response ) {
				// Store the response as specified by the jqXHR object
				var data = JSON.parse(response);
				
				var updated_cart_html = data.html;
				var message = data.message;
				console.log(message);
				$("#cart_template").html(updated_cart_html);
				$(".cart_item_count").html(data.cart_info.items_count);
			
			}
		});
        
        
    });
    
    
      $(document).on("click", ".remove-cart-item", function() {
        // var $btn = $(this);
        // $.button_loading($btn, true);
        $(this).parent().css("background", "#ffd6d6 !important")
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
       
        var product_id = $(this).attr("data-id");
        $(".cart_item"+product_id).addClass("cart_item_animate_right");
        
       
        $.ajax({
			url: "/cart_remove",
			type: "POST",
			data: { product_id : product_id , _token :  csrfToken  },
		
			// Complete callback (responseText is used internally)
				success: function( response ) {
				// Store the response as specified by the jqXHR object
				var data = JSON.parse(response);
				
				var updated_cart_html = data.html;
				var message = data.message;
				console.log(message);
        setTimeout(function () {
          $("#cart_template").html(updated_cart_html);
                }, 300);

				$(".cart_item_count").html(data.cart_info.items_count);
				
			
			}
         
		});
        
        
    });
    
  
</script>


</body>

</html>