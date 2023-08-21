

<div class="cart_navigation" id="cart_template">
    @include('include/cartData')
</div>
<div class="draging_icon_parent" id="parent">
    <div class="draging_icon_btn"> 
        <div class="draging_icon">
            <i class="fal fa-shopping-cart"></i>
            <div class="drag_click_btn_qty">
                <span class="cart_item_count">{{ $cart_info['items_count'] }}</span>
            </div>
        </div>
    </div>
</div>