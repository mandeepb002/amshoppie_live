<aside class="right-side">
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<form method="post" action="<?php echo base_url() ?>csv/importcsv" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-md-6">
						<input type="file" name="userfile" required="required" style="margin-bottom: 15px;">
					</div>
					<div class="col-md-6">
						<input type="submit" name="submit" value="UPLOAD" class="btn btn-info">
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<div class="col-md-12">
					<a href="<?php echo base_url() ?>assets/sample.csv" target="_blank" download="filename.csv" class="download_file">Download sample file</a>
				</div>
			</div>
		</div>
	</div>
</section>
</aside>