
<section>
<div class="container">
<div class="row">

		<div class="left">
		 
			 <div class="checkbox_innrrow">
			    <p class="cate_head">CATEGORIES</p>
				<form class="check_form">
					<input type="checkbox" name="vehicle" value="hero"> 
					<?php if($get_s){ foreach($get_s as $value){?>
						<span><?php echo $value->cat_name; ?></span>
						<?php } } ?>
					<br>
					
				</form>
			</div>
			 <div class="checkbox_innrrow">
			 <p class="cate_head">BRANDS</p>
				<form class="check_form">
					
					<input type="checkbox" name="vehicle" value="Slogan"> Lee (1)<br>
					<input type="checkbox" name="vehicle" value="Polos">  Levis (8)<br>
					<input type="checkbox" name="vehicle" value="Stripes"> Numero Uno (2)<br>
					
					
				</form>
			</div>
			<div class="checkbox_row3">
			    <p class="cate_head">Size</p>
				<form class="check_form">
					<input type="checkbox" name="vehicle" value="hero"> Small (7)<br>
					<input type="checkbox" name="vehicle" value="T-Shirts"> Medium (11)<br>
					<input type="checkbox" name="vehicle" value="Slogan"> Large (12)<br>
					<input type="checkbox" name="vehicle" value="Polos">  Xtra Large (10)<br>
					<input type="checkbox" name="vehicle" value="Stripes">  Xtra Xtra Large (6)<br>
					<input type="checkbox" name="vehicle" value="Printed"> 39 (1)<br>
					<input type="checkbox" name="vehicle" value="Pocket"> 46 (1)<br>
				
				</form>
			</div>
			
			 
	    </div>
		<div class="right">
		  
		<div class="row">
			<div class="col-md-12">
				<div class="subcate_row1">
					 <h2>
					 	<?php if($get_s){ foreach($get_s as $value){?>
						<span><?php echo $value->cat_name; ?></span>
						<?php } } ?>
					 </h2>
					
					  <hr>
				</div>
			</div>
		</div>
	
	
     <div class="row">
		<div class="subcate_row5">
			<?php 
		if($sub){ foreach ($sub as $key) {?>
			
		  <div class="col-md-3">
		  <div class="img_hover">
		  <a href="<?php echo base_url();?>welcome/p_view/<?php echo $key->id; ?>"><img src="
		  		<?php 
		  $query = $this->db->query('SELECT * FROM  `product_image` WHERE `main_image` = 1 AND `p_id` ='.$key->id); 
		  if($query->num_rows()>0){
		  	print_r(base_url('uploads/'.$query->result()[0]->image)); 
		  }else{
		  	echo "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxVOF1kQtcJe4dxOZyC6kmrgwzmycZ7h1xDZdCV6RIHXS2q1QG";
		  }
			
		  ?>
		  " style="width:100%">


		  <p class="shirt-name"><?php echo $key->product_name; ?></p>
		  <p class="shirt-name"><?php echo $key->product_sku; ?></p>
		<p class="shirt-name"><?php echo $key->item_price; ?></p></a>
		</div>
		</div>
		
		<?php  } } else{ echo "No product available yet."; } ?>
		</div>
		
		
		</div>
	</div>
	
	
	
</div>
</div>
</div>
</section>

