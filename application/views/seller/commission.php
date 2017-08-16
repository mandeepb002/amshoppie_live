<style type="text/css">
.fa-check{
  color: green;
  font-size: 20px;
}  

.fa-times{
  color: red;
  font-size: 20px;
}
</style>

<?php 

if($this->session->userdata('id')==true){ 
?>
<aside class="right-side">
  <section class="content">
  

<div class="container-fluid  ng-scope" ng-init="init();">
    <div class="row">
        <div class="col-md-12 _c_pad">
            <div class="row coupon-background">
                <div class="col-md-1 image-coupon">
                    <img class="image-commission" src="https://amshoppie.com//assets/seller/img/calculator11.png">
                </div>
                <div class="col-md-11">
                    <div class="seller-tier-text">Now select your own commission plan.</div>
                    <div class="">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                        <p class="pull-right"><u><a href="#" target="_blank">Frequently Asked Questions</a></u></p>
                        <!-- <a href="#" class="read-more-coupon">Terms and conditions</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row commission-text">
	
        <div class="col-md-9">If you want to change your commission plan then please select other plan and click subscribe on it.</div>
        <div class="col-md-2 padding-left-71"><a class="btn btn-primary cmsn-btn" href="#">Commission Plan Logs</a></div>
    
        
	</div>

          <?php foreach ($record as $row): ?>
    
           
	       <div class="col-md-4 subscribr-bottom-margin ng-scope" ng-repeat="plan in commission track by $index" ng-show="planAval">

               <div class="_t_box">
               <!-- ngIf: shop.commission_subs == plan.plan_id -->
               <div class="_t-plan text-align text-center">
                   <h3 class="ng-binding"><?= $row->name; ?></h3>
               </div>
               <div class="_t-plandesc">
               <p class="plan_desc ng-binding"><?= $row->objective; ?></p>
                   <hr>
               <div class="_t-scheme _t-type tier_container">
                   <ul class="ul_bullets">
                       <!-- ngRepeat: tiers in plan.tiers --><li ng-repeat="tiers in plan.tiers" class="ng-binding ng-scope">
                           Default Commission <span class="pull-right ng-binding" id="def"><?= $row->platform; ?>%</span><br>
                           <?php if(($row->marketing)>0){?>
                           Marketing Fee<span class="pull-right ng-binding" id="def"><?= $row->marketing; ?>%</span>
                           <?php } ?>
                       </li><!-- end ngRepeat: tiers in plan.tiers -->
                   </ul>
               </div>
              <div class="_t-comm">
                  Total commission <span class="pull-right ng-binding">
                    <?php 
                      $def = $row->platform;
                      $mar = $row->marketing;
                      $res = $def + $mar;
                      echo $res."%";
                    ?>
                  </span>
                  </div>
                   <div class="text-right">* 15% Service Tax Applicable</div>
                  <div class="">
                      <form method="post" action="">
                      <input type="checkbox" id="checked-<?php echo $row->id; ?>" required="true" name="">&nbsp;&nbsp;&nbsp;
                      <span>I have read <a href="#" class="tandc" target="_blank">Terms and Conditions </a>for this plan.</span>
					  
                      
                  </div>
                   <!-- ngIf: selected_plan_id == plan.plan_id -->
                   <!-- ngIf: shop.commission_subs != plan.plan_id --><div class="_t-opt-button ng-scope" ng-if="shop.commission_subs != plan.plan_id">
				   
							 <?php
                            $condition = array(
                                    'user_id'=>$this->session->userdata('id'),
                                    'plan_id'=>$row->id,
                            );
                                $this->db->select('*');
                                $this->db->from('subscribe_comission');
                                $this->db->where($condition);
                                $query = $this->db->get();
                                if($query->num_rows()>0){ ?>
								 <!-- ngIf: coupon.has_seller_opted == '0' --><button type="submit" id="c_optform<?php echo $row->id; ?>" class="btn btn-primary btn-medium btn-block ng-scope disabled formbutton subscribed" >Subscribed</button>
								 <script type="text/javascript">
								 var but="<button type="button" id="c_opt" class="btn btn-primary btn-medium btn-block ng-scope disabled" data-toggle="modal" data-target="#myModal" >Subscribed</button><!-- end ngIf: coupon.has_seller_opted == '0' -->";
								 </script>
								 
                              <?php  }else{ ?>
                                    <!-- ngIf: coupon.has_seller_opted == '0' --><button type="submit" id="c_optform<?php echo $row->id; ?>" class="btn btn-primary btn-medium btn-block ng-scope subscribe" >Subscribe</button>
									<!-- end ngIf: coupon.has_seller_opted == '0' -->

                                  
                       <script type="text/javascript">
            $(document).ready(function(){
              
             $('#checked-<?php echo $row->id; ?>').click(function(){
              if($("#checked-<?php echo $row->id; ?>").prop('checked')){
				  if($("3c_optform<?php echo $row->id; ?>").hasClass("subscribed")){
				 $('#c_optform<?php echo $row->id; ?>').after('<button type="button" id="c_opt<?php echo $row->id; ?>" class="btn btn-primary btn-medium btn-block ng-scope disabled" data-toggle="modal" data-target="#myModal" >Subscribed</button>'); 
				  }else{
					 $('#c_optform<?php echo $row->id; ?>').after('<button type="button" id="c_opt" class="btn btn-primary btn-medium btn-block ng-scope" data-toggle="modal" data-target="#myModal" required="true">Subscribe</button>'); 
					  }
				 $('#c_optform<?php echo $row->id; ?>').remove();
				
			  }
			
            });
			 
            });
          </script>
                        </form>
						       
                       <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog">
                          
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Subscribe Plan</h4>
                              </div>
                              <div class="modal-body">
                                <h2>Do You Want To Change This Plain</h2>
                              </div>
							  
                              <div class="modal-footer">
                                <a href="<?php echo base_url('seller/commission_plain?cp='.$row->id); ?>" class="btn btn-info">YES</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
								
                              </div>
                            </div>
                            </div>
                          </div>
						  <?php  } ?>
                   </div><!-- end ngIf: shop.commission_subs != plan.plan_id -->
                   <!-- ngIf: shop.commission_subs == plan.plan_id -->
                   <!-- ngIf: show_more==false --><div class="text-center ng-scope"> <button class="kks" style="color: blue">Show More</button>
                   </div><!-- end ngIf: show_more==false -->
                   <!-- ngIf: show_more==true -->
				    
               </div>
			  
            </div>
           </div>
		   
          <script type="text/javascript">
            $(document).ready(function(){
              $('#kk').hide();
             $('.kks').click(function(){
               $('#kk').toggle();
            });
            });
          </script>           
        <?php endforeach; ?>

        <div class="col-md-12" style="margin-top: 20px;" id="kk">
                      
          <table class="table table-bordered text-center">
          
            <tbody>
            
              <tr>
              <th></th>
              <?php foreach($record as $rows): ?>
                <th><?= $rows->name; ?></th>
              <?php endforeach ?>   
              </tr>
            <?php 
			$platformshow = 0;
			foreach($record as $rows){
				if($rows->platformcheck == 1){
					$platformshow = 1;
				}
			}
			?>
			<?php if($platformshow == 1){?>
				<tr>
				<th>Platform Fee</th>
				<?php foreach($record as $rows): ?>
				<?php
					$pch= $rows->platformcheck;
				?>
                <td>
				<?php
					if($pch == 1){
						echo $rows->platform."%"; 
					}else{
						echo "Not Applicable";
					}
				?></td>
				<?php endforeach ?>     
              </tr>
			<?php } ?>
			<?php 
				$marketingshow = 0;
				foreach($record as $rows){
					if($rows->marketingcheck == 1){
						$marketingshow = 1;
					}
				}
			?>
			<?php if($marketingshow == 1){?>
				<tr>
					<th>Marketing Fee</th>
					<?php foreach($record as $rows): ?>
						<?php
							$mch= $rows->marketingcheck;
						?>
						<td><?php
							if($mch == 1){
								echo $rows->marketing."%";
							}else{
							   echo "Not Applicable";
							}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php } ?>

            <tr>
              <th>Total Comission</th>
              <?php foreach($record as $rows): ?>
			  
                <td>
                  <?php 
                        $a = $rows->platform;
                        $b = $rows->marketing;
                        $c = $a + $b;
                        echo $c."%";
                  ?>
                </td>
              <?php endforeach ?>     
              </tr>
            <?php 
				$objectiveshow = 0;
				foreach($record as $rows){
					if($rows->objectivecheck == 1){
						$objectiveshow = 1;
					}
				}
			?>
			
			<?php if($objectiveshow == 1){?>  
				<tr>
					<th>Objective</th>
					<?php foreach($record as $rows): ?>
						<td><?php
								$och= $rows->objectivecheck;
								if($och == 1){
									echo $rows->objective;
								}else{
								   echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php } ?>
			<?php 
				$ostshow = 0;
				foreach($record as $rows){
					if($rows->ostcheck == 1){
						$ostshow = 1;
					}
				}
			?>
			<?php if($ostshow == 1):?>
				<tr>
					<th>Online Selling Tools</th>
					<?php foreach($record as $rows): ?>
							<td><?php
								$ostch= $rows->ostcheck;
								if($ostch == 1){
									if(($rows->ost) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
								   echo "Not Applicable";
								}
							?></td>
						<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$alafsshow = 0;
				foreach($record as $rows){
					if($rows->alafscheck == 1){
						$alafsshow = 1;
					}
				}
			?>
			<?php if($alafsshow == 1):?>
				<tr>
					<th>Automated Logistics and Fulfillment Solutions</th>
					<?php foreach($record as $rows): ?>
						<td><?php
								if(($rows->alafscheck) == 1){
									if(($rows->alafs) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
								   echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$opacshow = 0;
				foreach($record as $rows){
					if($rows->opaccheck == 1){
						$opacshow = 1;
					}
				}
			?>
			<?php if($opacshow == 1):?>
				<tr>
					<th>Online Payment and COD</th>
					<?php foreach($record as $rows): ?>
						<td>
							<?php
								if(($rows->alafscheck) == 1){
									if(($rows->opac) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
									echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$kcsshow = 0;
				foreach($record as $rows){
					if($rows->opaccheck == 1){
						$kcsshow = 1;
					}
				}
			?>
			<?php if($kcsshow == 1):?>
				<tr>
					<th>Amshoppie Customer Support</th>
					<?php foreach($record as $rows): ?>
						<td>
							<?php
								if(($rows->kcscheck) == 1){
									if(($rows->kcs) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
									echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$lokshow = 0;
				foreach($record as $rows){
					if($rows->lokcheck == 1){
						$lokshow = 1;
					}
				}
			?>
			<?php if($lokshow == 1):?>
				<tr>
					<th>Listing on Amshoppie.com</th>
					<?php foreach($record as $rows): ?>
						<td>
							<?php
								if(($rows->lokcheck) == 1){
									if(($rows->lok) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
									echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$plokshow = 0;
				foreach($record as $rows){
					if($rows->plokcheck == 1){
						$plokshow = 1;
					}
				}
			?>
			<?php if($plokshow == 1):?>
				<tr>
					<th>Preferential Listing on Amshoppie.com</th>
					<?php foreach($record as $rows): ?>
						<td>
							<?php
								if(($rows->plokcheck) == 1){
									if(($rows->plok) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
									echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$ppipmshow = 0;
				foreach($record as $rows){
					if($rows->ppipmcheck == 1){
						$ppipmshow = 1;
					}
				}
			?>
			<?php if($ppipmshow == 1):?>
				<tr>
					<th>Preferential Placement in Paid Marketing</th>
					<?php foreach($record as $rows): ?>
						<td>
							<?php
								if(($rows->ppipmcheck) == 1){
									if(($rows->ppipm) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
									echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$ppikeapmshow = 0;
				foreach($record as $rows){
					if($rows->ppikeapmcheck == 1){
						$ppikeapmshow = 1;
					}
				}
			?>
			<?php if($ppikeapmshow == 1):?>
				<tr>
					<th>Preferential Placement in Amshoppie Emails and Push Messages</th>
					<?php foreach($record as $rows): ?>
						<td>
							<?php
								if(($rows->ppikeapmcheck) == 1){
									if(($rows->ppikeapm) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
									echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$epmshow = 0;
				foreach($record as $rows){
					if($rows->epmcheck == 1){
						$epmshow = 1;
					}
				}
			?>
			<?php if($epmshow == 1):?>
				<tr>
					<th>Exclusive Paid Marketing</th>
					<?php foreach($record as $rows): ?>
						<td>
							<?php
								if(($rows->epmcheck) == 1){
									if(($rows->epm) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
									echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$emapmshow = 0;
				foreach($record as $rows){
					if($rows->emapmcheck == 1){
						$emapmshow = 1;
					}
				}
			?>
			<?php if($emapmshow == 1):?>
				<tr>
					<th>Exclusive Emails and Push Messages</th>
					<?php foreach($record as $rows): ?>
						<td>
							<?php
								if(($rows->emapmcheck) == 1){
									if(($rows->emapm) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
									echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$fhkkwshow = 0;
				foreach($record as $rows){
					if($rows->fhkkwcheck == 1){
						$fhkkwshow = 1;
					}
				}
			?>
			<?php if($fhkkwshow == 1):?>
				<tr>
					<th>Fully Hosted Amshoppie Kanvas Website</th>
					<?php foreach($record as $rows): ?>
						<td>
							<?php
								if(($rows->fhkkwcheck) == 1){
									if(($rows->fhkkw) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
									echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php 
				$omsshow = 0;
				foreach($record as $rows){
					if($rows->omscheck == 1){
						$omsshow = 1;
					}
				}
			?>
			<?php if($omsshow == 1):?>
				<tr>
					<th>Online Marketing Support</th>
					<?php foreach($record as $rows): ?>
						<td>
							<?php
								if(($rows->omscheck) == 1){
									if(($rows->oms) == 1){
										echo "<i class='fa fa-check' aria-hidden='true'></i>";
									}else{
										echo "<i class='fa fa-times' aria-hidden='true'></i>";
									}
								}else{
									echo "Not Applicable";
								}
							?>
						</td>
					<?php endforeach ?>     
				</tr>
			<?php endif ?>
			<?php
			
			$optarr1=array();
			
			$optname=array();
			
				foreach($record as $rows){

					$myJSON=$rows->json;
						$optarr=json_decode($myJSON);
					
						$optarr2=array();
						foreach($optarr as $option){
							$exist=0;
							if($option){
							foreach($optname as $option1){
								if($option1){
									if(($option1)==($option->name)){
										$exist=1;
									}
								}
							}
							if(($exist==0) && ($option->name)){
								$optname[]=$option->name;
								$optarr2[]=$option;
								
							}
							}
							
							
						}
					
					$optarr1[]=$optarr2;
					
					
				}

			foreach($optname as $option){?>
				<tr>
					<th><?php echo $option; ?></th>
					
					<?php foreach($optarr1 as $option1){ ?>
					
						<td>
						<?php 
							if(empty($option1)){
								echo "Not Applicable";
							}else{
								$exist=0;
								 foreach($option1 as $option2){
									 
									 if(($option2->name) == $option){
										 $exist=1;
										if(($option2->value) == 1){
											echo "<i class='fa fa-check' aria-hidden='true'></i>";
										}else{
											echo "<i class='fa fa-times' aria-hidden='true'></i>";
										}
									}
									
								 }
								 if($exist==0){
										echo "Not Applicable";
									}
								 
							}?>
							
							
						</td>
					<?php } ?>     
				</tr>
			<?php } ?>
			
			
            </tbody>
          
          </table>
          
        </div>
		   
</section>
</aside>


  <!-- ngIf: show_more -->

<?php } else{
   redirect(base_url('seller/login?msg=Please login to continue'));
}?>

