

<?php if($this->session->userdata('id')==true){ ?>

<aside class="right-side">

  <section class="content nw-cnt">
  
	<?php foreach($record as $row){?>
  
  <div class="row">

  <div class="col-md-12">
  <form method="POST" action="<?php echo base_url('admin/edit_comission_hit?id='.$row->id); ?>">
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Name</label>
				<div class="col-md-9 col-sm-9">
				   <input type="text" name="name" class="form-control-plaintext" value="<?php echo $row->name; ?>" required="required">
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Platform Fee</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="platformcheck" style="width: 20px; height: auto;" <?php if($row->platformcheck == 1){ ?> checked <?php } ?>>
				   <span><input type="text" name="platform" style="width: 85%;" value="<?php echo $row->platform; ?>"></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Marketing Fee</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="marketingcheck" style="width: 20px; height: auto;" <?php if($row->marketingcheck == 1){ ?> checked <?php } ?>>
				   <span><input type="text" name="marketing" style="width: 85%;" value="<?php echo $row->marketing; ?>"></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Objective</label>
				<div class="col-md-9 col-sm-9">
				   <input type="checkbox" name="objectivecheck" style="width: 20px; height: auto;" <?php if($row->objectivecheck == 1){ ?> checked <?php } ?>>
				   <span><textarea type="text" name="objective" style="width: 96%;"><?php echo $row->objective; ?></textarea></span>
				</div>
			</div>
			
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Online Selling Tools</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="ostcheck" style="width: 20px; height: auto;" <?php if($row->ostcheck == 1){ ?> checked <?php } ?>>
				   <span><select name="ost" style="width: 85%;" required>

                            <option value="">CHOOSE</option>
							<?php 

                                              if(($row->ost)==1){?>

                                                  <option value="1" selected="selected">YES</option>

                                                  <option value="NO">NO</option>

                                             <?php }else{ ?>

                                                  <option value="1">YES</option>

                                                  <option value="NO" selected="selected">NO</option>

                                             <?php }

                                            ?>

                            

                        </select></span>
				</div>
				
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Automated Logistics And Fulfilment Solutions</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="alafscheck" style="width: 20px; height: auto;" <?php if($row->alafscheck == 1){ ?> checked <?php } ?>>
				   <span><select name="alafs" style="width: 85%;" required>

                            <option value="">CHOOSE</option>

                            <?php if(($row->alafs)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>

                        </select></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Online Payment And COD</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="opaccheck" style="width: 20px; height: auto;" <?php if($row->opaccheck == 1){ ?> checked <?php } ?>>
				   <span><select name="opac" style="width: 85%;" required>

                            <option value="">CHOOSE</option>
							<?php if(($row->opac)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>

                        </select></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Amshoppie Consumer Support</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="kcscheck" style="width: 20px; height: auto;" <?php if($row->kcscheck == 1){ ?> checked <?php } ?>>
				   <span><select name="kcs" style="width: 85%;" required>

                            <option value="">CHOOSE</option>
							<?php if(($row->kcs)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>

                        </select></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Listing On Amshoppie.com</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="lokcheck" style="width: 20px; height: auto;" <?php if($row->lokcheck == 1){ ?> checked <?php } ?>>
				   <span><select name="lok" style="width: 85%;" required>

                            <option value="">CHOOSE</option>
							<?php if(($row->lok)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>

                        </select></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Preferential Listing On Amshoppie.com</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="plokcheck" style="width: 20px; height: auto;" <?php if($row->plokcheck == 1){ ?> checked <?php } ?>>
				   <span><select name="plok" style="width: 85%;" required>

                            <option value="">CHOOSE</option>
							<?php if(($row->plok)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>

                        </select></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Preferential Placement In Paid Marketing</label>
				<div class="col-md-9 col-sm-9">
				   <input type="checkbox" name="ppipmcheck" style="width: 20px; height: auto;" <?php if($row->ppipmcheck == 1){ ?> checked <?php } ?>>
				   <span><select name="ppipm" style="width: 96%;" required>

                            <option value="">CHOOSE</option>
							<?php if(($row->ppipm)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>
											
                        </select></span>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Preferential Placement In Amshippie Emails And Push Messeges</label>
				<div class="col-md-9 col-sm-9">
				   <input type="checkbox" name="ppikeapmcheck" style="width: 20px; height: auto;" <?php if($row->ppikeapmcheck == 1){ ?> checked <?php } ?>>
				   <span><select name="ppikeapm" style="width: 96%;" required>

                            <option value="">CHOOSE</option>
							<?php if(($row->ppikeapm)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>
											


                        </select></span>
				</div>
			</div>
			
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Exclusive Paid Marketing</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="epmcheck" style="width: 20px; height: auto;" <?php if($row->epmcheck == 1){ ?> checked <?php } ?>>
				   <span><select name="epm" style="width: 85%;" required>

                            <option value="">CHOOSE</option>
							<?php if(($row->epm)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>

                        </select></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Exclusive Emails And Push Messeges</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="emapmcheck" style="width: 20px; height: auto;" <op<?php if($row->emapmcheck == 1){ ?> checked <?php } ?>>
				   <span><select name="emapm" style="width: 85%;" required>

                            <option value="">CHOOSE</option>
							<?php if(($row->emapm)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>


                        </select></span>
				</div>
			</div>
			
			
			<div class="form-group row">
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Fully Hosted Amshoppie Kanvas Website</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="fhkkwcheck" style="width: 20px; height: auto;" <opt<?php if($row->fhkkwcheck == 1){ ?> checked <?php } ?>>
				   <span><select name="fhkkw" style="width: 85%;" required>

                            <option value="">CHOOSE</option>
							<?php if(($row->fhkkw)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>


                        </select></span>
				</div>
				
				<label for="staticEmail" class="col-md-3 col-sm-3 col-form-label">Online Marketing Support</label>
				<div class="col-md-3 col-sm-3">
				   <input type="checkbox" name="omscheck" style="width: 20px; height: auto;" <?php if($row->omscheck == 1){ ?> checked <?php } ?>>
				   <span><select name="oms" style="width: 85%;" required>

                            <option value="">CHOOSE</option>
							<?php if(($row->oms)==1){?>
								<option value="1" selected="selected">YES</option>
								<option value="NO">NO</option>
							<?php }else{ ?>
								<option value="1">YES</option>
								<option value="NO" selected="selected">NO</option>
							<?php } ?>

                        </select></span>
				</div>
			</div>
				<?php if(json_decode($row->json)){
					$myObj=json_decode($row->json);
					//print_r($myObj);die;
					foreach($myObj as $rows){
						?>
					<div class="form-group row">
					<label for='staticEmail' class='col-md-3 col-sm-3 col-form-label'><input type='text' name='newopthead[]' required='required' value="<?php echo $rows->name; ?>"></label>
					
					<div class="col-md-3 col-sm-3">
						<span>
							<select name="<?php echo $rows->name; ?>" style="width: 85%;" required>
								<option value="">CHOOSE</option>
								<?php if(($rows->value)==1){?>
									<option value="1" selected="selected">YES</option>
									<option value="NO">NO</option>
								<?php }else{ ?>
									<option value="1">YES</option>
									<option value="NO" selected="selected">NO</option>
								<?php } ?>
							</select>
						</span>
					</div>	
					<div class="col-md-3 col-sm-3">
						<a href="<?php echo base_url() ?>admin/deleteoption?name=<?php echo $rows->name; ?>&&id=<?php echo $row->id;?>"><input type="button" value="Delete" class="btn btn-red" /></a>
					</div> 
							
					</div>
				<?php }
				} ?>
			
	<?php }?>		
		  
	  
			<div id="addbut">
				<div class="row">
					<div class="col-md-10 col-sm-10"></div>
					<div class="col-md-2 col-sm-2 col-xs-12"><input type="button" class="btn btn-info" value="Add More" id="addmore" style="padding: 0px;"/></div> 
					
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-4"></div>
						<div class="col-md-4 col-sm-4 col-xs-12"><input type="submit" class="btn btn-sub" value="Add" style="padding: 0px;"/></div>
					<div class="col-md-4 col-sm-4"></div>
				</div>
			</div>
  </form>
  </div>

  </div>
  <script>
		var optid=1;
$( "#addmore" ).click(function() {
	
  $("#addbut").before("<div class='form-group row'><label for='staticEmail' class='col-md-3 col-sm-3 col-form-label'><input type='text' name='newopthead[]' required='required'></label><div class='col-md-3 col-sm-3'><select name='newopt[]' class='form-control' required><option value=''>CHOOSE</option><option value='1'>YES</option><option value='2'>NO</option></select></div></div>");
optid++;
  });

</script>
  
  
  
  <!--
  
  

	


     

    </table>
	 </form>
	 -->



  </section>

</aside>





  <!-- ngIf: show_more -->



<?php } else{

   redirect(base_url('seller/login?msg=Please login to continue'));

}?>