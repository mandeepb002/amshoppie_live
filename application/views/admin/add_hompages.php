<?php if($this->session->userdata('id')==true){ ?>
 <aside class="right-side">
			  <section class="content">
              <form method="post" action="<?php echo base_url('setting/add_hompages1'); ?>" enctype="multipart/form-data">
              	<div class="form-group">
					<div class="col-md-3" style="text-align: right;">
						<label for="name">Name:</label>
					</div>
					<div class="col-md-9">
						<input type="text" class="form-control" name="name" /><span><?php echo form_error('name'); ?></span>
					</div>
                </div>
                <div class="form-group">
					<div class="col-md-3" style="text-align: right;">    
                    	<label for="">Link</label>
					</div>
					<div class="col-md-9">
						<input type="text" class="form-control" name="link" /><span><?php echo form_error('link'); ?></span>
					</div>
                </div>
				<!--div class="form-group">
					<div class="col-md-3" style="text-align: right;">    
                    	<label for="">Price</label>
					</div>
					<div class="col-md-9">
						<input type="text" class="form-control" name="price" /><span><!?php echo form_error('price'); ?></span>
					</div>
                </div>
                <div class="form-group">
					<div class="col-md-3" style="text-align: right;">
						<label for="">category</label>
					</div>
					<div class="col-md-9">
							<select name="category" class="btn btn-default cat_btn23">
                                  <option selected="selected">Select Category</option>
								   <!--?php  foreach($records as $row){ ?>
                
     <option value="<!--?php print_r($row->cat_id); ?>"><!--?php print_r($row->cat_name); ?></option>
    <!_-?php foreach ($row->sub as $child){ ?>
     <option value="<!--?php print_r($child->cat_id); ?>"><!--?php print_r($row->cat_name.">".$child->cat_name); ?></option>
                <!--?php foreach($child->sub as $grand){ ?>
           <option value="<!--?php print_r($grand->cat_id); ?>"><!-?php print_r($row->cat_name.">".$child->cat_name.">".$grand->cat_name); ?></option>
                                            <!-?php foreach($grand->sub as $grand_child){ ?>
            <option value="<!-?php print_r($grand_child->cat_id); ?>"><!-?php print_r($row->cat_name.">".$child->cat_name.">".$grand->cat_name.">".$grand_child->cat_name); ?></option>
            <!-?php } ?>
                                            
         <!-?php } ?>
       <!-?php }
      //print_r($row->sub[0]->cat_name);
      ?>
            
                    
     <!-?php  } ?>
							</select>
							</div>
						</div!-->
						
					<div class="form-group">
					<div class="col-md-12">
                    <div id="integration-list">
    <ul>
	
		<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0px 0px;">
			<div class="box-shadow">
		
				<li>
						     
		  
						<div class="detail detail22">
							<div class="row padding11">
							
										<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#fileupload").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
		 
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class='col-md-3 box-img'>" + "<span class=\"pip\">" +
            "<div class=\"picture\"><img class=\"imageThumb1\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/></div>" +
			"<span class=\"remove\">x</span>"+
			"<br><br>"+
			"<div class=\"\"><label><input type=\"radio\" value=\"1\" name='main_image"+i+"'>Make Primary Image</label></div>"+
            "</span>" + "</div>").insertAfter("#fileupload"); 
          //$('span').click(function(){
			  
		  //});
		  $(".remove").click(function(){
			 // confirm("Are You Sure To Delete This Image?");
			 if (window.confirm('Are you sure to delete?')) 
    {
            $(this).parent(".pip").remove();
	}
          });
		   
		   
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API");
  }
});
</script>

</div>
</div>

						<div class="col-md-12 col-sm-12 col-xs-12 boxx">
						<input type="file" name="userfiles[]" value="fileupload" id="fileupload"  multiple>
							<div class="col-md-3"><label for="fileupload" class="fileupload">
							</label> </div>
																
						 </div>                      
				
				</li>
			</div>
		</div>
	</ul>
</div>
</div>
</div>
<div class="form-group">
	<div class="col-md-3 col-md-offset-9"> 
		<input type="submit" class="form-control btn btn-info" value="ADD" />
	</div>
</div>
                </form>

			  </section>
              
</aside>

 <script>
     function goBack() {
         window.history.back();
     }
 </script>
<?php }else{

} ?>