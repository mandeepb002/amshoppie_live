<?php if($this->session->userdata('id')==true){ ?>
<aside class="right-side">
	 <section class="content">
		<section class="box-shadow22">
		
		<div class="container-fluid padding-top-15 padding-bottom-25 ng-scope" ng-init="init();">
    <div class="row">
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-solid">
            
                <!-- form start -->
                <form method="post" action="<?php echo base_url();?>seller/socialsss?id=<?php echo $this->session->userdata('id'); ?>"<class="form-horizontal" enctype="multipart/form-data">
                         
                  <div class="box1-body">

                    <div class="form-group margin-top-20">
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="input-group">
                          <span class="input-group-addon link-facebook"><i class="fa fa-lg fa-facebook fa-fw"></i></span>
                          <span class="input-group-addon input-label-box social-link-text">https://www.facebook.com/</span>
                          <input type="text" class="form-control ng-valid ng-dirty ng-valid-parse ng-touched ng-empty" ng-model="social_links.fb" placeholder="" ng-trim="false" ng-change="validate_facebook()" name="facebook">
                        </div>
                      </div>
                      <div class="col-sm-1">
                      <!-- ngIf: fb_update_success==true -->
                      <!-- ngIf: fb_update_error==true -->
                      <!-- ngIf: fb_updating==true -->
                      </div>
                    </div>

                    <div class="form-group margin-top-20">
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="input-group">
                          <span class="input-group-addon link-twitter"><i class="fa fa-lg fa-twitter fa-fw"></i></span>
                          <span class="input-group-addon input-label-box social-link-text">https://www.twitter.com/</span>
                          <input type="text" class="form-control ng-valid ng-dirty ng-valid-parse ng-empty ng-touched" ng-model="social_links.twitter" placeholder="" ng-trim="false" ng-change="validate_twitter()" name="twitter">
                        </div>
                      </div>
                      <div class="col-sm-1">
                      <!-- ngIf: twitter_update_success==true -->
                      <!-- ngIf: twitter_update_error==true -->
                      <!-- ngIf: twitter_updating==true -->
                      </div>
                    </div>

                    <div class="form-group margin-top-20">
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="input-group">
                          <span class="input-group-addon link-gplus"><i class="fa fa-lg fa-google-plus fa-fw"></i></span>
                          <span class="input-group-addon input-label-box social-link-text">https://plus.google.com/</span>
                          <input type="text" class="form-control ng-valid ng-dirty ng-valid-parse ng-empty ng-touched" ng-model="social_links.gplus" placeholder="" ng-trim="false" ng-change="validate_gplus()" name="google">
                        </div>
                      </div>
                      <div class="col-sm-1">
                      <!-- ngIf: gplus_update_success==true -->
                      <!-- ngIf: gplus_update_error==true -->
                      <!-- ngIf: gplus_updating==true -->
                      </div>
                    </div>

                    <div class="form-group margin-top-20">
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="input-group">
                          <span class="input-group-addon link-pinterest"><i class="fa fa-lg fa-pinterest fa-fw"></i></span>
                          <span class="input-group-addon input-label-box social-link-text">https://in.pinterest.com/</span>
                          <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="social_links.pinterest" placeholder="" ng-trim="false" ng-change="validate_pinterest()" name="pinterest">
                        </div>
                      </div>
                      <div class="col-sm-1">
                      <!-- ngIf: pinterest_update_success==true -->
                      <!-- ngIf: pinterest_update_error==true -->
                      <!-- ngIf: pinterest_updating==true -->
                      </div>
                    </div>

                    <div class="form-group margin-top-20">
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="input-group">
                          <span class="input-group-addon link-youtube"><i class="fa fa-lg fa-youtube fa-fw"></i></span>
                          <span class="input-group-addon input-label-box social-link-text">https://www.youtube.com/channel/</span>
                          <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="social_links.youtube" placeholder="" ng-trim="false" ng-change="validate_youtube()" name="youtube">
                        </div>
                      </div>
                      <div class="col-sm-1">
                      <!-- ngIf: youtube_update_success==true -->
                      <!-- ngIf: youtube_update_error==true -->
                      <!-- ngIf: youtube_updating==true -->
                      </div>
                    </div>

                    <div class="form-group margin-top-20">
                      <div class="col-sm-10 col-sm-offset-1">
                        <div class="input-group">
                          <span class="input-group-addon link-instagram"><i class="fa fa-lg fa-instagram fa-fw"></i></span>
                          <span class="input-group-addon input-label-box social-link-text">https://www.instagram.com/</span>
                          <input type="text" class="form-control ng-pristine ng-untouched ng-valid ng-empty" ng-model="social_links.instagram" placeholder="" ng-trim="false" ng-change="validate_instagram()" name="instagram">
                        </div>
                      </div>
                      <div class="col-sm-1">
                      <!-- ngIf: instagram_update_success==true -->
                      <!-- ngIf: instagram_update_error==true -->
                      <!-- ngIf: instagram_updating==true -->
                      </div>
                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                  <div class="row">
                  <div class="col-md-2 col-md-offset-9">
                    <button type="submit" class="btn btn-block btn-info btn-flat pull-right" ng-click="saveSocialLinks($event)" ng-disabled="fb_update_error||twitter_update_error||gplus_update_error||pinterest_update_error||youtube_update_error||instagram_update_error||save_disabled">Save</button>
                  </div><!-- /.box-footer -->
                  </div>
                  </div>

                </form>
              </div><!-- /.box -->
            </div><!--/.col (right) -->
    </div>
</div>
		
		</section>
	 </section>
</aside>	
		<?php }else{
    redirect(base_url('seller/login?msg=Please login to continue'));
} ?>