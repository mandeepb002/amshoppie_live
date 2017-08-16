
<div class="row">
	<div class="container">
	<?php if($sub){ foreach ($sub as $key) { ?>
	  <div class="cate_row">
		<div class="col-md-3" style="margin-bottom: 20px;">
		 <div class="item">
				<a href="<?php echo base_url(); ?>welcome/subcategory?cat=<?php echo $key->cat_id; ?>" title="Buy Jeans"><img src="<?php echo base_url($key->image); ?>" style="width:100%">
				</a>
				<span class="img-text"><?php echo $key->cat_name; ?></span>
			</div>
		</div>
	</div>
	<?php }}else{
			echo "No product available in this category.";
		} ?>
</div>
</div>

