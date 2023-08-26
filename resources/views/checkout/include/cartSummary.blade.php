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

  @include('checkout/include/discountCoupon-and-Loyalty')

  <div class="shopping_cart_total_bill_divider shopping_cart_total_bill_first_divider"></div>

  <div class="shopping_cart_total_bill_taxes_box">
    <p>Applicable taxes and fee will be calculated before finalizing checkout</p>
  </div>

  <div class="shopping_cart_total_bill_divider"></div>

  <div class="shopping_cart_total_bill_final_price_box">
    <p>Est.Total</p><span>CAD 129.99</span>
  </div>

  <div class="shopping_cart_total_bill_proceeding_btn">
    <input type="submit" value="Place Order">
  </div>
</div>