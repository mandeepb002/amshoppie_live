<?php if($cart){ ?>
<form method="POST" action="<?php echo base_url('payment/pay'); ?>">
<div class="row">
<div class="container">
	<div class="col-md-12">
		<img src="http://amshoppie.com/assets/user/img/logo.png" height="60">
		<hr>
	</div>
</div>
</div>
 <div class="row">
   <div class="container">
	 <div class="payment_row">
		<div class="col-md-12">
		
		<div class="row">
			<div class="payment_row2">
			  <div class="col-md-6">
				
				<h4 class ="pay_head1"> Shipping Address </h4>
				<?php if($ship){foreach ($ship as $ships) {?>
				<p class="shpng_addrs">
					<label><input type="radio" name="ship_address" style="font-size: 10px" value="<?php echo $ships->id; ?>" required> Select Address</label><br>
				
				        <?php echo $ships->name; ?> <br>
						<?php echo $ships->mobile; ?> <br>
						<?php echo $ships->pincode; ?> <br>
						<?php echo $ships->address; ?><br>
						<?php echo $ships->locality; ?><br>
						<?php echo $ships->landmark; ?><br>
						<?php echo $ships->country; ?><br>
					
				</p>
				<?php }} ?>
				<span style="color:#FF8C69;">Cash on Delivery is not available with this purchase</span>	
			  </div>

			  <div class="col-md-6">
			  <i class="fa fa-plus" aria-hidden="true"></i><a href="">ADD NEW ADDRESS</a>
				<h4 class ="pay_head1"> One item from Amshoppie </h4>
				<div class="row">
				<div class="payment_item">
				<div class="col-md-3">
				 <img src="http://amshoppie.com/assets/user/image/m6.jpg" style="height:100px">
			     </div>
				 <div class="col-md-9">
					<p class="product-det">Monte Carlo Navy Blue Trouser<br>
						Rs. 949<br>
						qty:1
					</p>
					<p class="product-det"> Estimated Delivery:<span class="est-date">June 24,2017-June 28,2017</span> </p>
			     </div>
				 </div>
				</div>
				
			 </div>
			</div>
		 </div>
			
			  <div class="row">
			  <div class="payment_row2">
				<h2 class ="pay_head1"> Payment Method </h2>
			  </div>
		    </div>
			
			<div class="row">
			  
				 <h5 style="color:#FF8C69; font-size: 16px;">Get extra 10% cashback on payments made by credit card.debit card,netbanking or wallets.</h5>
			</div>	 
		    <div class="row">
			  <div class="payment_row2">
				 
				 	<label class="radio-inline radio_add">
					  <input type="radio" name="payment_method" value="1">COD
					</label>
				 
			  
			 </div>
			  </div>
			<div class="row">
			  <div class="payment_row2">
				<img src="/assets/user/image/cards.png" height="40px">
			  </div> 
		    </div>
			
			<div class="row">
			  <div class="payment_row2">
				<h2 class ="pay_head1"> Billing Address </h2>
			  </div>
		    </div>
			
			<div class="row">
			 
			<table class="table pay_table">
			  <tr>
				<td><label class="radio-inline radio_add">
					  <input type="radio" name="billing_address" value="1">Same as shipping address
					</label> </td>
			  </tr>
			  <tr>
				<td>
					<label class="radio-inline radio_add">
					  <input type="radio" name="billing_address" value="0">Used a different billing address
					</label>
				</td>
			  </tr>
			</table>
			
		    </div>
	
	
	<div class="row">
			  
			  <div class="payment_row2">
				<h2 class ="pay_head1"> Order Summary </h2>
			  </div>
			  
		</div>
	
	<div class="row">
			
		      <div class="col-md-12">
			
				 <table class="table pay_table">
					 <tr>
					  <td class="paytb_head"> Order Total </td>
					  <td class="paytb_head">
					  	<?php
					  	if($cart){
					$sum = 0;
					$result=$cart;
					
					foreach($result as $key){

					if(isset($key->item_price))   
					    $sum += $key->item_price*$key->quent;
					
					}
					echo "<input type='text' value='".$sum."' style='padding:10px; font-size:30px;'  disabled>";
					}
					?>
					<input type="hidden" name='total_amount' value="<?php echo $sum; ?>">
					<input type="hidden" name='user_id' value="<?php echo $this->session->userdata('id'); ?>">
					  </td>
				    </tr>
				 </table>
				 
			  </div>
			  
		    </div>
				
			 </div>
			 <div class="row">
			 
			    <div class="col-md-12">
				<div class="orderbtn_row">
				<button type="submit" class="btn btn-default order_btn">Place Order</button>
				
				</div>
			</div> 
			</div>

	</div>
	</div>
	</div>
	</div>
</form>
<?php }else{
	redirect(base_url('welcome/add_to?msg=Your cart is empty, please add some product'));
	} ?>