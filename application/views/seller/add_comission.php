<?php if($this->session->userdata('id')==true){ ?>

<aside class="right-side">

  <section class="content nw-cnt">
  <div class="row">

  <div class="col-md-12">
  <form method="POST" action="<?php echo base_url('admin/add_comission_hit'); ?>">
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Name</label>
				<div class="col-md-9 col-sm-9">
				   <input type="text" name="name" class="form-control-plaintext" name="" required="required">
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Platform Fee</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="platformcheck" style="width: 20px; height: auto;">
				   <span><input type="text" name="platform" style="width: 85%;"></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Marketing Fee</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="marketingcheck" style="width: 20px; height: auto;">
				   <span><input type="text" name="marketing" style="width: 85%;"></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Objective</label>
				<div class="col-md-9 col-sm-9">
				   <input type="checkbox" name="objectivecheck" style="width: 20px; height: auto;">
				   <span><textarea type="text" name="objective" style="width: 96%;"></textarea></span>
				</div>
			</div>
			
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Online Selling Tools</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="ostcheck" style="width: 20px; height: auto;">
				   <span><select name="ost" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Automated Logistics And Fulfilment Solutions</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="alafscheck" style="width: 20px; height: auto;">
				   <span><select name="alafs" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Online Payment And COD</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="opaccheck" style="width: 20px; height: auto;">
				   <span><select name="opac" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Amshoppie Consumer Support</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="kcscheck" style="width: 20px; height: auto;">
				   <span><select name="kcs" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Listing On Amshoppie.com</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="lokcheck" style="width: 20px; height: auto;">
				   <span><select name="lok" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Preferential Listing On Amshoppie.com</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="plokcheck" style="width: 20px; height: auto;">
				   <span><select name="plok" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Preferential Placement In Paid Marketing</label>
				<div class="col-md-9 col-sm-9">
				   <input type="checkbox" name="ppipmcheck" style="width: 20px; height: auto;">
				   <span><select name="ppipm" style="width: 96%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Preferential Placement In Amshippie Emails And Push Messeges</label>
				<div class="col-md-9 col-sm-9">
				   <input type="checkbox" name="ppikeapmcheck" style="width: 20px; height: auto;">
				   <span><select name="ppikeapm" style="width: 96%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
			</div>
			
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Exclusive Paid Marketing</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="epmcheck" style="width: 20px; height: auto;">
				   <span><select name="epm" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Exclusive Emails And Push Messeges</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="emapmcheck" style="width: 20px; height: auto;">
				   <span><select name="emapm" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
			</div>
			
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Fully Hosted Amshoppie Kanvas Website</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="fhkkwcheck" style="width: 20px; height: auto;">
				   <span><select name="fhkkw" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Online Marketing Support</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="omscheck" style="width: 20px; height: auto;">
				   <span><select name="oms" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <option value="1">YES</option>

                            <option value="2">NO</option>

                        </select></span>
				</div>
			</div>
			
			<div id="addbut">
				<div class="row">
					<div class="col-md-10 col-sm-10"></div>
					<div class="col-md-2 col-sm-2 col-xs-12"><input type="button" class="btn btn-info" value="Add More" id="addmore" style="padding: 0px;"/></div> 
					
				</div>
				
				<div class="row">
					<div class="col-md-5 col-sm-5"></div>
						<div class="col-md-2 col-sm-2 col-xs-12"><input type="submit" class="btn btn-info" value="Add" style="padding: 0px;"/></div>
					<div class="col-md-5 col-sm-5"></div>
				</div>
			</div>
			<script>
		var optid=1;
$( "#addmore" ).click(function() {
	
  $("#addbut").before("<div class='form-group row'><label for='staticEmail' class='col-md-3 col-sm-3 col-form-label'><input type='text' name='newopthead[]' required='required'></label><div class='col-md-3 col-sm-3'><select name='newopt[]' class='form-control' required><option value=''>CHOOSE</option><option value='1'>YES</option><option value='2'>NO</option></select></div></div>");
optid++;
  });

</script>
  </form>
  </div>

  </div>
  
  
 


  </section>

</aside>





  <!-- ngIf: show_more -->



<?php } else{

   redirect(base_url('seller/login?msg=Please login to continue'));

}?>