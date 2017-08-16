<aside class="right-side">
  <section class="content">

<div class="container-fluid  ng-scope" ng-init="init();">
    <?php if(!empty($_GET['msg'])){ ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><?php echo $_GET['msg']; ?></strong>
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-md-12">
            <div class="coupon-background _c_flex _c_pad">
                <div class="image-coupon">
                    <img src="https://amshoppie.com//assets/seller/img/coupon.png" height="80" width="80">
                </div>
                <div class="_c-margin-top">
                <div class="seller-funded-text">
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
					<a href="#" target="_blank" class="read-more-coupon">Read More</a>
                </div>
                   
                </div>
                </div>
            </div>
             <?php
	if(!empty($records)){
        foreach($records as $row):
    ?>
        <div class="col-md-12 _c_pad">
        <div class="coupon-background">
            <div class="_ctext">
                Coupons
            </div>
           
            <div class="_c_pad">
            <div class="row">
                
                <!-- ngRepeat: coupon in coupons track by $index --><div class="col-md-6 col-xs-12 padding-bottom-25 ng-scope" ng-repeat="coupon in coupons track by $index" ng-show="couponAval">
                    <div class="_c_decor">
                   
                    <img src="<?php echo base_url().'coupon/'.$row->image; ?>" style="width:50%;">	
	
                    <div class="row _c_pad min_c_height">
                     <div class="col-md-6  _cline-height">
                         <span class="_c_text">Offer Code :</span> <span class="_c_color ng-binding"><?php
						 echo $row->code;
                         ?></span>
                     </div>
                        <div class="col-md-6  _cline-height">

                            <span class="_c_text">Discount :</span> <span class="ng-binding"><?php echo $row->discount?><span class="ng-scope" ng-if="coupon.type == 'P'">%</span><!-- end ngIf: coupon.type == 'P' --> </span>
                        </div>
                        <div class="col-md-6 _cline-height">
                            <span class="_c_text">Start Date :</span> <span class="ng-binding"><?php echo $row->start?></span>
                        </div>
                        <div class="col-md-6 _cline-height">
                           <span class="_c_text"> End Date :</span> <span class="ng-binding"><?php echo $row->end;?></span>
                        </div>
                        <div class="col-md-6 _cline-height">
                            <span class="_c_text">Minimum Purchase :</span> <i class="fa fa-inr"></i><span class="ng-binding"><?php echo $row->minimum_purchase;?></span>
                        </div>
                        
                        <div class="_c_opt-button col-md-12">
                            <?php
                            $condition = array(
                                    'user_id'=>$this->session->userdata('id'),
                                    'coupon_id'=>$row->id,
                            );
                                $this->db->select('*');
                                $this->db->from('coupon_opt');
                                $this->db->where($condition);
                                $query = $this->db->get();
                                if($query->num_rows()>0){ ?>
                                    <!-- ngIf: coupon.has_seller_opted == '0' --><button type="button" id="c_opt" class="btn btn-primary btn-medium btn-block ng-scope disabled" data-toggle="modal" data-target="#myModal" >Opted</button><!-- end ngIf: coupon.has_seller_opted == '0' -->
                              <?php  }else{ ?>
                                    <!-- ngIf: coupon.has_seller_opted == '0' --><button type="button" id="c_opt" class="btn btn-primary btn-medium btn-block ng-scope" data-toggle="modal" data-target="#myModal" >Opt In</button><!-- end ngIf: coupon.has_seller_opted == '0' -->
                                                                                                                                                                                                                                   <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <h2 style="margin: 30px;">Are you sure you want to opt into this coupon?</h2>
                                                <p style="margin-left: 30px;">Please note: Once you opt in, you will not be able to opt out of these coupons. Offers will automatically expire on Aug 31, 2017.</p>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
                                                    <button type="button" class="btn btn-info"><a href="<?php echo base_url('manage_seller/coupon_opt?cp='.$row->id); ?>">CONFIRM</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--------------------------------------------------------->
                              <?php  } ?>






                            <!-------------------------------------------------------->




                        </div>
                    </div>
                    </div>
                </div><!-- end ngRepeat: coupon in coupons track by $index -->
                   <div class="col-md-12 _ctext text-center ng-binding ng-hide" ng-hide="couponAval">
                   
                </div>
            </div>
            </div>
        </div>
        </div>
         
          <?php
        endforeach;
		} else{
		echo 'No Record Found';
	}
    ?>
	</div>
        </div>
		</div>
 </section>
   </aside>		