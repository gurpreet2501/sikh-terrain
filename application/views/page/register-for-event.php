<?php $this->load->view('partials/header'); ?>
		<div id="main">
			<!--contact section start-->
			<div id="contact" class="contact-section contact-box">
				<div class="row no-spacing-row">
					<div class="col col-md-3 "></div>
					<div class="col col-md-6 matchheightbox">
						<div class="contact-box text-black">
							<div class="row">
								<div class="col col-sm-12">
									<div class="contact-info text-center">
										<span class="contact-icon"><i class="icon-chat"></i></span>
										<h3 class="text-black">Register For Event</h3>
										<span>Phone: 1-800-222-000</span>
										<span>Fax: 1-800-222-002</span>
									</div><!--/.contact-info-->
								</div><!--/.col-->
								
							</div><!--/.row-->
							<form  action='register/registration_post' method="post" enctype="multipart/form-data"></form>
							<?php echo form_open_multipart('register/registration_post'); ?>
							<!-- <form class="reg_form" id="reg_1" action="<?=site_url('register/registration_post')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8"> -->
								<div class="form-group">
								<input type="file" name="userfile"  />
								<input type="submit" value="upload" />
								</div>
							</form>
			
						</div><!--/.contact-box-->
					</div><!--/.col-->
					<div class="col-md-3"></div>
				</div><!--/.row-->
			</div><!--/.contact-section-->
			<!--contact section end-->
			
<?php $this->load->view('partials/footer'); ?>