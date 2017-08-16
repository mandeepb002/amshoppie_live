<section>
<div class="container">
<div class="row">
    <div class="left">
		 <div class="checkbox_row1">
			    <p class="cate_head">CATEGORIES</p>
				<form class="check_form">
					<?php if($sub){ foreach ($sub as $key) { ?>
					<input type="checkbox" name="vehicle" value="<?php echo $key->cat_id; ?>"><?php echo $key->cat_name; ?><br>
					<?php } } ?>
				</form>
			</div>
			 <div class="checkbox_row2">
			 <p class="cate_head">BRANDS</p>
				<form class="check_form">
				<?php if($brand){ foreach($brand as $brands){?>
					<input type="checkbox" name="vehicle" value="<?php echo $brands->id; ?>"><?php echo $brands->name; ?><br>
				<?php } } ?>
				</form>
			</div>
			<div class="checkbox_row3">
			    <p class="cate_head">Size</p>
				<form class="check_form">
				<?php if($size){ foreach($size as $sizes){?>
					<input type="checkbox" name="vehicle" value="<?php echo $sizes->id; ?>"><?php echo $sizes->name; ?><br>
				<?php } } ?>	
				</form>
			</div>
			
			
			<div class="checkbox_row4">
				<div data-role="main" class="ui-content">
				<form method="post" action="/action_page_post.php">
      <div data-role="rangeslider">
        <label for="price-min">Price:</label>
        <input type="range" name="price-min" id="price-min" value="200" min="0" max="50000">
        <!--label for="price-max">Price:</label>
        <input type="range" name="price-max" id="price-max" value="800" min="0" max="1000"-->
      </div>
      </form>
	</div>


	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">			
			</div>
		 <div class="checkbox_row5">
			    <p class="cate_head">Discount</p>
				<form class="check_form">
					<input type="checkbox" name="vehicle" value="thirty"> 40% or more<br>
					<input type="checkbox" name="vehicle" value="forty"> 30% or more <br>
					<input type="checkbox" name="vehicle" value="forty"> 20% or more <br>
					<input type="checkbox" name="vehicle" value="forty"> 10% or more <br>
					
				</form>
			</div>
	    </div>
		<div class="right">
		  
		<div class="row">
			<div class="col-md-12">
				<div class="subcate_row1">
					 <h2>
					 	<?php
					 		$this->db->select('*');
					 		$this->db->from('categories');
					 		$this->db->where('cat_id',$_GET['cat']);
					 		$query = $this->db->get();
					 		if($query->num_rows()>0){
					 			foreach ($query->result() as $key) {
					 				echo $key->cat_name;
					 			}
					 		}else{
					 			echo "No product added yet in this category.";
					 		}
					 	?>
					 </h2>
					  <p>Subcategories</p>
					  <hr>
				</div>
			</div>
		</div>
		
			<div class="row">
			<div class="subcate_row3">
			<?php if($sub){ foreach ($sub as $keyy) {?>
			  <div class="col-md-2" style="margin-right: 10px">
			    <div class="img_subcat">
				<a href="<?php echo base_url(); ?>welcome/innercategory?cat=<?php echo $keyy->cat_id; ?>">
					<img src="<?php echo base_url($keyy->image); ?>" height="100px" widhth="70px" class="img-t-shirt"></a>
				</div>
				<div class="text_subcat">
					<?php echo $keyy->cat_name; ?>
				</div>
			  </div>
			  <?php }}else{
			  		echo "No Product Added Ye In This Category.";
			  	}?>
			</div>
		</div>	
		
		
		<div class="row"> 
			<div class="col-md-10">
				
			</div>
			<div class="col-md-2">
				
					<div class="form-group">
					  
					  <select class="form-control" id="sel1">
						<option>Sort By</option>
						<option>Lowest Price</option>
						<option>New arrivals</option>
						<option>Discount</option>
						
					  </select>
	
				</div>
			</div>
		</div>
		
		
		<div class="row">
		<div class="subcate_row4">
	
		</div>
		</div>
		
     <div class="row">
		<div class="subcate_row5">
		  <div class="col-md-3">
		  <div class="img_hover">
		  <img src="<?php echo base_url(); ?>assets/user/image/polo-t-shirt.jpg" style="width:100%">
		  <p class="shirt-name">NoLogo Dark Rust Polo T-Shirt</p>
		  <p class="shirt-name">(NOLOGO-PT-188)</p>
		<p class="shirt-name">Rs. 599</p>
		</div>
		</div>
		
		
		<div class="col-md-3">
		<img src="<?php echo base_url(); ?>assets/user/image/polo-t-shirt2.jpg" style="width:100%">
		 <p class="shirt-name">NoLogo Dark Rust Polo T-Shirt</p>
		  <p class="shirt-name">(NOLOGO-PT-188)</p>
		<p class="shirt-name">Rs. 499</p>
		</div>
		
		<div class="col-md-3">
		  <img src="<?php echo base_url(); ?>assets/user/image/polo-t-shirt.jpg" style="width:100%">
		   <p class="shirt-name">NoLogo Dark Rust Polo T-Shirt</p>
		  <p class="shirt-name">(NOLOGO-PT-188)</p>
		<p class="shirt-name">Rs. 600</p>
		</div>
		
		<div class="col-md-3">
		<img src="<?php echo base_url(); ?>assets/user/image/polo-t-shirt2.jpg" style="width:100%">
		 <p class="shirt-name">NoLogo Dark Rust Polo T-Shirt</p>
		  <p class="shirt-name">(NOLOGO-PT-188)</p>
		<p class="shirt-name">Rs. 799</p>
		</div>
		
		
		</div>
	</div>
	
	
	 <div class="row">
		<div class="subcate_row5">
		  <div class="col-md-3">
		  <div class="img_hover">
		  <img src="<?php echo base_url(); ?>assets/user/image/polo-t-shirt.jpg" style="width:100%">
		  <p class="shirt-name">NoLogo Dark Rust Polo T-Shirt</p>
		  <p class="shirt-name">(NOLOGO-PT-188)</p>
		<p class="shirt-name">Rs. 599</p>
		</div>
		</div>
		
		
		<div class="col-md-3">
		<img src="<?php echo base_url(); ?>assets/user/image/polo-t-shirt2.jpg" style="width:100%">
		 <p class="shirt-name">NoLogo Dark Rust Polo T-Shirt</p>
		  <p class="shirt-name">(NOLOGO-PT-188)</p>
		<p class="shirt-name">Rs. 499</p>
		</div>
		
		<div class="col-md-3">
		  <img src="<?php echo base_url(); ?>assets/user/image/polo-t-shirt.jpg" style="width:100%">
		   <p class="shirt-name">NoLogo Dark Rust Polo T-Shirt</p>
		  <p class="shirt-name">(NOLOGO-PT-188)</p>
		<p class="shirt-name">Rs. 600</p>
		</div>
		
		<div class="col-md-3">
		<img src="<?php echo base_url(); ?>assets/user/image/polo-t-shirt2.jpg" style="width:100%">
		 <p class="shirt-name">NoLogo Dark Rust Polo T-Shirt</p>
		  <p class="shirt-name">(NOLOGO-PT-188)</p>
		<p class="shirt-name">Rs. 799</p>
		</div>
		
		
		</div>
	</div>
  
  
	</div>
</div>
</div>
</section>
