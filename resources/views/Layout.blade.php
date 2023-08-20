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
            btn.data('old-html', btn.html()).prop("disabled", true).html("<i class='fa fa-spinner fa-spinn'></i>" );
            return
        }
        if(!btn.data('old-html')) return;
        btn.prop("disabled", false).html(btn.data('old-html')).data('old-html', false);
    } 
    
    
    
    // Add to cart function
    $(".add_to_cart").click(function() {
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
			success: function( updated_cart_html ) {
				// Store the response as specified by the jqXHR object
				
				
				$(".dropdown-cart").html(updated_cart_html);
				setTimeout(function () {
                  $.button_loading($btn, false);
                }, 1000);
			
			}
		});
        
        
    });
    
   

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
				console.log(response);
			
				$("#cart_template").html(response);
				// setTimeout(function () {
    //               $.button_loading($btn, false);
    //             }, 1000);
			
			},
         
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
				console.log(response);
			
				$("#cart_template").html(response);
				// setTimeout(function () {
    //               $.button_loading($btn, false);
    //             }, 1000);
			
			},
         
		});
        
        
    });
    
    
      $(document).on("click", ".remove-cart-item", function() {
        // var $btn = $(this);
        // $.button_loading($btn, true);
        $(this).parent().css("background", "#ffd6d6 !important")
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        
        var product_id = $(this).attr("data-id");
        
        $.ajax({
			url: "/cart_remove",
			type: "POST",
			data: { product_id : product_id , _token :  csrfToken  },
		
			// Complete callback (responseText is used internally)
			success: function( response ) {
				console.log(response);
			
				$("#cart_template").html(response);
				// setTimeout(function () {
    //               $.button_loading($btn, false);
    //             }, 1000);
			
			},
         
		});
        
        
    });
    
    
    
    
    // $(".product-description ul").each(function(){
    //     $(this).addClass("list-dot");     
    // });
    // $(".card-product-description ul").each(function(){
    //     $(this).addClass("list-features");     
    // });
</script>


</body>

</html>