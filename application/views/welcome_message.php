<style>
#product-slider-01 .product{
width:210px !important;
display: inline-block;
}
</style>
<script src="<?php echo base_url(); ?>assets/user/js/home-slider.js"></script>
<?php
if(!empty($_GET['msg'])){
	?>
    <script type="text/javascript">
		alert("<?php echo $_GET['msg']; ?>");
	</script>
    <?php
}
?>

<!--category-men-women-kids-->
<section id="category-men-women-kids">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="cate-men wow fadeInDown">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-pad">
						
							<img src="<?php echo $cat_image->image; ?>" width="220" height="350px" />								
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-pad">
							<div class="sub-category-men-cate">
								<h4> Men's<br>Popular</h4>
								<ul class="category-list-block">
									<li><a href="<?php echo base_url('welcome/subcategory?cat=155'); ?>">T-shirt</a></li>
									<li><a href="<?php echo base_url('welcome/subcategory?cat=171'); ?>">Jacket</a></li>
									<li><a href="<?php echo base_url('welcome/subcategory?cat=159'); ?>">Jeans</a></li>
									<li><a href="<?php echo base_url('welcome/category'); ?>">Shoes</a></li>
									<li><a href="<?php echo base_url('welcome/subcategory?cat=161'); ?>">Accesories</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="cate-women wow fadeInDown">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-pad">
							<img src="<?php echo $cat_image1->image; ?>" width="220" height="350px" />
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-pad">
							<div class="sub-category-women-cate">
								<h4> Women's<br>Popular</h4>
								<ul class="category-list-block">
									<li><a href="<?php echo base_url();?>welcome/innercategory?cat=268">T-shirt</a></li>
									<li><a href="<?php echo base_url();?>welcome/category">Jacket</a></li>
									<li><a href="<?php echo base_url();?>welcome/subcategory?cat=230">Jeans</a></li>
									<li><a href="<?php echo base_url();?>welcome/subcategory?cat=231">Shoes</a></li>
									<li><a href="<?php echo base_url();?>welcome/subcategory?cat=229">Accesories</a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="cate-kids wow fadeInDown">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-pad">
							<img src="<?php echo $cat_image2->image; ?>" width="220" height="350px" />
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 no-pad">
							<div class="sub-category-kids-cate">
								<h4> Kids's<br>Popular</h4>
								<ul class="category-list-block">
									<li><a href="<?php echo base_url();?>welcome/category?cat=151">T-shirt</a></li>
									<li><a href="<?php echo base_url();?>welcome/category">Jacket</a></li>
									<li><a href="<?php echo base_url();?>welcome/category">Jeans</a></li>
									<li><a href="<?php echo base_url();?>welcome/category">Shoes</a></li>
									<li><a href="<?php echo base_url();?>welcome/subcategory?cat=297">Accesories</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>	
	</div>
</section> 
<!--/category-men-women-kids-->
 
 
<!--/deal-of the day--> 
<section id="deal-of-the-day">
	<div class="container-fluid">
		<div class="deal-box-wrapper offer-box-white wow fadeInLeft">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="deal-box wow fadeInDown">
						<h2>Deals of the Day</h2>
						<h3><i class="fa fa-clock-o" aria-hidden="true"></i> 21: 50: 59</h3>
						<a class="btn btn-color" href="<?php echo base_url('welcome/category'); ?>">View All</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="deal-products">
						<div class="slider"> <!-- slider-->
      <div class="product-slider">
	  <?php foreach($deal_product as $row){?>
		  <div class="thumbnail product"> <!-- item -->
			<figure class="snip1584 wow fadeInUp"><img src="<?php echo base_url('uploads');?>/<?php echo $row['image'];?>" alt="Poster name" />
			  <figcaption>
				<h3><?php echo $row['product_name']; ?></h3>
				<h5>Rs. <?php echo $row['offer_price']; ?>/-</h5>
			  </figcaption><a href="<?php echo base_url();?>welcome/p_view/<?php echo $row['product_id'];?>"></a>
			</figure>
         </div> <!-- /.item -->
	 <?php }?>
      </div>
   </div> <!-- /.slider-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/deal-of the day--> 

<!--/deal-of the day--> 
<?php
	/* if(!empty($images)){
		$sec_name = '';
		$count = 0;
        foreach($images as $k=>$row):
if($k > 0)
continue;
	
		if($sec_name != $row->name) { */
//echo "<pre>";print_r($all_data);die;
		foreach($all_data as $row){?>
		<section id="deal-of-the-day">
		<div class="container-fluid">
		<div class="deal-box-wrapper offer-box-white wow fadeInLeft">
			<div class="row">
<?php foreach($row as $rows){?>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right">
					<div class="deal-box-men-cato wow fadeInDown">
						<h2><?php echo $rows->name; ?></h2>
						<h3>Shop by Category</h3>
						<a href="<?php echo addhttp($rows->link); ?>" class="btn btn-color">View All</a>
					</div>
<?php break; } ?>
				</div>
	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<div class="deal-products">
	<div class="slider"> <!-- slider-->
						
						
      <div class="product-slider">
				
				
	<?php foreach($row as $rows){?>
	

			
				
		<?php //} //ends if of sec ?>
         <div class="product"> <!-- item -->
        
                 <a href="<?php echo addhttp($rows->link); ?>"><img src="<?= base_url()."uploads/".$rows->image; ?>" /></a>
             
         </div> <!-- /.item -->
    
	   
	
			
			<?php }
    ?>	</div>
   <!-- /.slider-->
					
	</div>	
	</div>	
	 </div>	
    
				</div>
			</div>
		</div>
		
		
		
</section>
	<?php } ?>
<?php
   /*  $sec_name = $row->name;
	$count++;
    endforeach;
		} else{
		echo 'No Record Found';
	} */
    ?>
<!--/deal-of the day--> 
<?php /*
<!--/deal-of the day--> 
<section id="deal-of-the-day">
	<div class="container-fluid">
		<div class="deal-box-wrapper offer-box-white wow fadeInLeft">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="deal-box-women-cato wow fadeInDown">
						<h2>Women Clothing</h2>
						<h3>Shop by Category</h3>
						<a href="<?php echo base_url('welcome/category?cat=143'); ?>" class="btn btn-color">View All</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="deal-products">
						<div class="slider"> <!-- slider-->
      <div class="product-slider">
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/001.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/002.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/003.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/004.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/005.png" alt="Poster name" /></a> </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/006.png" alt="Poster name" /></a>  </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/001.png" alt="Poster name" /></a>  </figure>
         </div> <!-- /.item -->
      </div>
   </div> <!-- /.slider-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/deal-of the day--> 

<!--/deal-of the day--> 
<section id="deal-of-the-day">
	<div class="container-fluid">
		<div class="deal-box-wrapper offer-box-white wow fadeInLeft">
			<div class="row">
				<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
					<div class="deal-box-kids-cato wow fadeInDown">
						<h2>Kids Clothing</h2>
						<h3>Shop by Category</h3>
						<a href="<?php echo base_url('welcome/category?cat=144'); ?>" class="btn btn-color">View All</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="deal-products">
						<div class="slider"> <!-- slider-->
      <div class="product-slider">
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/001.png" alt="Poster name" /></a>   </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/002.png" alt="Poster name" /></a>          </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/003.png" alt="Poster name" /></a>             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/004.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/005.png" alt="Poster name" /></a> </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/006.png" alt="Poster name" /></a>     </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                  <a href="http://amshoppie.com/welcome/subcategory"><img src="assets/user/img/product/icon/01/001.png" alt="Poster name" /></a>  </figure>
         </div> <!-- /.item -->
      </div>
   </div> <!-- /.slider-->
					</div>
				</div>
			<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="deal-box-kids-cato wow fadeInDown">
						<h2>Kids Clothing</h2>
						<h3>Shop by Category</h3>
						<a href="<?php echo base_url('welcome/category?cat=144'); ?>" class="btn btn-color">View All</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/deal-of the day--> 

<!--/deal-of the day--> 
<section id="deal-of-the-day">
	<div class="container-fluid">
		<div class="deal-box-wrapper offer-box-white wow fadeInLeft">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="deal-box-indian-wear wow fadeInDown">
						<h2>Top Offers on Indian Wear</h2>
						<a href="<?php echo base_url('welcome/category'); ?>" class="btn btn-color">View All</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="deal-products">
						<div class="slider"> <!-- slider-->
      <div class="product-slider">
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/02/001.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/02/002.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/02/003.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/02/004.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/02/005.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/02/001.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/02/002.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
      </div>
   </div> <!-- /.slider-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/deal-of the day--> 

<!--/deal-of the day--> 
<section id="deal-of-the-day">
	<div class="container-fluid">
		<div class="deal-box-wrapper offer-box-white wow fadeInLeft">
			<div class="row">
				<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
					<div class="deal-box-men wow fadeInDown">
						<h2>Top Offers For Men</h2>
						<a href="<?php echo base_url('welcome/category'); ?>" class="btn btn-color">View All</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="deal-products">
						<div class="slider"> <!-- slider-->
      <div class="product-slider">
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/001.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/002.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/003.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/004.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/005.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/001.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/002.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
      </div>
   </div> <!-- /.slider-->
					</div>
				</div>
			<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="deal-box-men wow fadeInDown">
						<h2>Top Offers For Men</h2>
						<a href="<?php echo base_url('welcome/category'); ?>" class="btn btn-color">View All</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/deal-of the day--> 


<!--/deal-of the day--> 
<section id="deal-of-the-day">
	<div class="container-fluid">
		<div class="deal-box-wrapper offer-box-white wow fadeInLeft">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="deal-box-kids wow fadeInDown">
						<h2>Top Offers For Kids</h2>
						<a href="<?php echo base_url('welcome/category'); ?>" class="btn btn-color">View All</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="deal-products">
						<div class="slider"> <!-- slider-->
      <div class="product-slider">
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/006.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/007.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/008.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/009.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/010.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/006.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/007.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
      </div>
   </div> <!-- /.slider-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/deal-of the day--> 


<!--/deal-of the day--> 
<section id="deal-of-the-day">
	<div class="container-fluid">
		<div class="deal-box-wrapper offer-box-white wow fadeInLeft">
			<div class="row">
				<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
					<div class="deal-box-price wow fadeInDown">
						<h2>Shop by price </h2>
						<a href="<?php echo base_url('welcome/category'); ?>" class="btn btn-color">View All</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="deal-products">
						<div class="slider"> <!-- slider-->
      <div class="product-slider">
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/offer/99.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/offer/299.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/offer/499.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/offer/799.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/offer/999.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/offer/99.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/offer/299.png" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
      </div>
   </div> <!-- /.slider-->
					</div>
				</div>
			<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="deal-box-price wow fadeInDown">
						<h2>Shop by price</h2>
						<button class="btn btn-color">View All</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/deal-of the day-->


<!--/deal-of the day--> 
<section id="deal-of-the-day">
	<div class="container-fluid">
		<div class="deal-box-wrapper offer-box-white wow fadeInLeft">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="deal-box-brands wow fadeInDown">
						<h2>Featured Brands </h2>
						<a href="<?php echo base_url('welcome/category'); ?>" class="btn btn-color">View All</a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="deal-products">
						<div class="slider"> <!-- slider-->
      <div class="product-slider">
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/011.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/012.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/013.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/014.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/011.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/012.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
         <div class="thumbnail product"> <!-- item -->
             <figure class="wow fadeInUp">
                 <a href="<?php echo base_url();?>welcome/subcategory"><img src="<?php echo base_url();?>assets/user/img/product/06/013.jpg" alt="Poster name" /></a>
             </figure>
         </div> <!-- /.item -->
      </div>
   </div> <!-- /.slider-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/deal-of the day-->*/ ?>

<?php
function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}
?>