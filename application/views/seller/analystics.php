 <aside class="right-side">
  <section class="content">
		<div class="container-fluid padding-top-15 padding-bottom-25 ng-scope" ng-init="init();">
    <div class="row">
            <div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-solid">
                <!-- form start -->
                <form class="form-horizontal ng-pristine ng-valid">
                  <div class="box-body">
                    <div class="form-group margin-top-15">
                      <label for="inputEmail3" class="col-sm-2 control-label">GA Tracking ID</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control ng-pristine ng-valid ng-empty ng-touched" ng-model="tracking_data.ga_id" id="ga_tracking_id" placeholder="GA Tracking ID" ng-trim="false" ng-change="validate_ga_id()">
                      </div>
                      <div class="col-sm-1">
                      <!-- ngIf: ga_id_update_success==true -->
                      <!-- ngIf: ga_id_update_error==true -->
                      <!-- ngIf: ga_id_updating==true -->
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                  <div class="row">
                  <div class="col-md-2 col-md-offset-9">
                    <button type="submit" class="btn btn-block btn-info btn-flat pull-right" ng-click="saveTrackingData($event)" ng-disabled="ga_id_update_error||save_disabled">Save</button>
                  </div><!-- /.box-footer -->
                  </div>
                  </div>

                </form>
              </div><!-- /.box -->
            </div><!--/.col (right) -->
    </div>
</div>
  </section>
   </aside>