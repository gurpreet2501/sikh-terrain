<?php $this->load->view('partials/header-without-slider'); ?>
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
										<h3 class="text-black">Register For Events</h3>
										
									</div><!--/.contact-info-->
								</div><!--/.col-->
								
							</div><!--/.row-->
							<?php $this->load->view('common/messages'); ?> 
							<form  action='register/registration_post' method="post" enctype="multipart/form-data"></form>
							<?php echo form_open_multipart('register/registration_post'); ?>
							<!-- <form class="reg_form" id="reg_1" action="<?=site_url('register/registration_post')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8"> -->
								<div class="input-field has-icon">
									<label>Name:</label>
									<input type="text" required class="form-control" name="name" placeholder="Enter your Name"> 
								</div><!--/.input-field-->
								<div class="input-field has-icon">
									<label>Email:</label>
									<input type="email" required class="form-control" name="email" placeholder="Enter your Email"> 
								</div><!--/.input-field-->
								<div class="input-field has-icon">
									<label>Phone:</label>
									<input type="text" required class="form-control" name="phone" placeholder="Enter your Contact no." > 
								</div><!--/.input-field-->
								<div class="input-field has-icon">
									<label>City:</label>
									<input type="text" required class="form-control" name="city" placeholder="Enter your City" > 
								</div><!--/.input-field-->
								<div class="input-field has-icon">
									<label>State:</label>
									<input type="text" required class="form-control" name="state" placeholder="Enter your State" > 
								</div><!--/.input-field-->
								<div class="input-field has-icon">
									<label>Country:</label>
									<input type="text" required class="form-control" name="country" placeholder="Enter your Country" > 
								</div><!--/.input-field-->
								<div class="input-field has-icon">
									<label>Zip:</label>
									<input type="text" required class="form-control" name="zip" placeholder="Enter your location Zipcode" > 
								</div><!--/.input-field-->
								<div class="form-group input-field">
								<label>Upload Image</label>
									<input type="file" name="user_image"  class"form-control" />
								</div>
								<input type="submit" value="Register" class="btn btn-warning" />
							</form>
			
						</div><!--/.contact-box-->
					</div><!--/.col-->
					<div class="col-md-3"></div>
				</div><!--/.row-->
			</div><!--/.contact-section-->
			<!--contact section end-->
			
<?php $this->load->view('partials/footer'); ?>