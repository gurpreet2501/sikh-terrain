		<!--footer start-->
		<footer id="footer" class="bg-overlay bg-cover" style="background-image: url(images/bg/footer-bg.jpg);">
			<a href="#" class="back-to-top yellow-gradient"><i class="fa fa-angle-up"></i></a>
			<div class="container-fluid">
				<div class="row v-middle-row footer-top-row">
					<div class="col col-md-3 col-sm-6 footer-widget matchheightbox">
						<div class="v-middle-row text-center">
							<img class="footer-logo" src="images/logo.svg" alt="">
							<span class="text-md p-l-10 p-r-10">&copy; David Smith. All Rights Reserved.</span>
						</div><!--/.v-middle-row-->
					</div><!--/.col-->
					<div class="col col-md-3 col-sm-6 footer-widget matchheightbox">
						<div class="row footer-menu">
							<div class="col col-xs-6">
								<ul class="fmenu text-uppercase scrollnav">
									<li><a href="#home">Home</a></li>
									<li><a href="#about">About us</a></li>
									<li><a href="#portfolio">Portfolio</a></li>
									<li><a href="#services">Our Services</a></li>
								</ul><!--/.fmenu-->
							</div><!--/.col-->
							<div class="col col-xs-6">
								<ul class="fmenu text-uppercase scrollnav">	
									<li><a href="#skills">Skills</a></li>
									<li><a href="#pricing">Pricing</a></li>
									<li><a href="#blog">Blog</a></li>
									<li><a href="#contact">Contact</a></li>
								</ul><!--/.fmenu-->
							</div><!--/.col-->
						</div><!--/.row-->
					</div><!--/.col-->
					<div class="col col-md-3 col-sm-6 footer-widget matchheightbox">
						<ul class="social-icons list">
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a></li>
							<li><a href="#" title="Pintrest"><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href="#" title="Dribble"><i class="fa fa-dribbble"></i></a></li>
						</ul><!--/.social-icons-->
					</div><!--/.col-->
					<div class="col col-md-3 col-sm-6 footer-widget matchheightbox">
						<div class="subscribe-row">
							<form action="#">
								<div class="newsletter-box">
									<input type="search" class="form-control" placeholder="Subcribe for newsletter">
									<button type="submit" class="subscribe-btn"><i class="fa fa-paper-plane"></i></button>
								</div><!--/.newsletter-box-->
							</form>
						</div><!--/.subscribe-row-->
					</div><!--/.col-->
				</div><!--/.row-->
			</div><!--/.container-fluid-->
		</footer><!--/#footer-->
		<!--footer end-->
		<div class="modal fade" id="hireme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header align-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Hire me</h4>
					</div>
					<div class="modal-body">
						<form action="#" method="post">
							<div class="row">
							<div class="col col-sm-6">
							  <div class="input-field has-icon"> <i class="fa fa-user"></i>
								<input type="text" required class="form-control" name="hirename" placeholder="Name">
							  </div>
							  <!--/.input-field--> 
							</div>
							<!--/.col-->
							<div class="col col-sm-6">
							  <div class="input-field has-icon"> <i class="fa fa-mobile"></i>
								<input type="tel" required class="form-control" name="hirephone" placeholder="Phone">
							  </div>
							  <!--/.input-field--> 
							</div>
							<!--/.col-->
							<div class="col col-sm-6 col-xs-12">
							  <div class="input-field has-icon"> <i class="fa fa-envelope"></i>
								<input type="email" required class="form-control" name="hireemail" placeholder="Email">
							  </div>
							  <!--/.input-field--> 
							</div>
							<!--/.col-->
							<div class="col col-sm-6 col-xs-12">
							  <div class="input-field has-icon"> <i class="fa fa-server"></i>
								<div class="custom-select">
								  <select>
									<option>What are you interested in?</option>
									<option>Design</option>
									<option>Development</option>
									<option>SEO</option>
								  </select>
								</div>
								<!--/.custom-select--> 
							  </div>
							  <!--/.input-field--> 
							</div>
							<!--/.col-->
							<div class="col col-xs-12">
							  <div class="input-field has-icon"> <i class="fa fa-file-text"></i>
								<textarea class="form-control" required name="hiremessage" placeholder="Decribe your project"></textarea>
							  </div>
							  <!--/.input-field--> 
							</div>
							<!--/.col-->
							<div class="col col-xs-12 text-center">
							  <button type="submit" class="btn btn-dark btn-md btn-submit">Submit</button>
							</div>
							<!--/.col-->
							<div class="col col-xs-12">
							  <div id="loading01"> Sending your message....</div>
							  <div id="successmsg01">Your message has been sent.</div>
							  <div id="errormsg01">Something went wrong, please try again.</div>
							</div>
							<!--/.col--> 
						  </div><!--/.row-->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!--/ main #wrapper-->
<script src="<?=base_url('assets/js/jquery.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/js/waypoints.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.appear.js')?>"></script>
<script src="<?=base_url('assets/js/owl.carousel.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.owl-filter.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.easypiechart.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.matchHeight-min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.counterup.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.validate.js')?>"></script>
<script src="<?=base_url('assets/js/parallaxie.js')?>"></script>
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?=base_url('assets/js/snazzy-info-window.min.js')?>"></script>
<script src="<?=base_url('assets/js/general.js')?>"></script>
</body>

<!-- Mirrored from pixlogix.com/themes/html/mybio/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Mar 2018 16:06:41 GMT -->
</html>