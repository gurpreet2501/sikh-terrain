<?php $this->load->view('partials/header'); 

$course = filterCourseBySlug($this->uri->segment(3));

?>
  <!-- Start main-content -->
  <div class="main-content">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
            
            <?php if (!empty($course)): ?>
                
              <div class="single-service">
                <h3 class="text-theme-colored line-bottom text-theme-colored"><?=$course->course_title?></h3>
                  <ul class="review_text list-inline">
                    <li>
                      <div class="star-rating" title="Rated 4.50 out of 5"><span style="width: 90%;">4.50</span></div>
                    </li>
                  </ul>
                 <p> 
                <?=$course->course_desc?>
                 </p>
              </div>

           <?php else: ?>  

            <div class="row">
              <div class="col-xs-12">
                <h1 class="text-center"> No Course Found!</h1>
              </div>
            </div>
           <?php endif; ?>  

          </div>
          <div class="col-sm-12 col-md-3">
             <?php $this->load->view('partials/sidebar'); ?>
          </div> <!-- col-sm-12 -->
        </div> <!-- row -->
      </div>
    </section>
  </div>
  <!-- end main-content -->
  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-color="#1f1f1f">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
        
          <p class="font-12 mt-20 mb-20">VNR is an ISO 9001-2015 Certified Organization provides Consulting and Training Solutions to help you in achieving your goals.</p>
          <ul class="styled-icons flat medium list-inline mb-40">
            <li>
              <i class="fa fa-facebook"></i>
           </li>
            <li>
              <i class="fa fa-twitter"></i>
            </li>
            <li>
              <i class="fa fa-linkedin"></i>
            </li>
            <li>
              <i class="fa fa-google-plus"></i>
            </li>
            <li>
              <i class="fa fa-youtube"></i>
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4"></div>
      </div>
      <div class="row">
  <!--       <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">FIND US</h4>
            <div class="opening-hours">
            
            </div>
          </div>
        </div> -->
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">FIND US</h4>
            <div class="opening-hours">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3804.362052025116!2d78.38254805117026!3d17.537940987929684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8e0ab28e0975%3A0x7b048b2858fdee94!2sVNR+Vignana+Jyothi+Institute+of+Engineering+and+Technology!5e0!3m2!1sen!2sin!4v1510468018642" width="300" height="220" frameborder="0" style="border:0" allowfullscreen></iframe> -->
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7017.37983764741!2d80.5764438!3d28.4286119!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x13717efc45e4ed8!2sVNR+COMPUTER+INSTITUTE!5e0!3m2!1sen!2sin!4v1511702278455" width="300" height="220" frameborder="0" style="border:0" allowfullscreen></iframe>
              
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title">Useful Links</h4>
            <ul class="list angle-double-right list-border">
             <li><a href="/">VNR</a></li>
             <li><a href="<?=site_url('/page/courses')?>">Our Courses</a></li>
             <li><a href="<?=site_url('/page/facilities')?>">Facilities</a></li>
             <?php /*<li><a href="<?=site_url('/page/certificate-validity')?>">Check Certificate Validity</a></li>*/?>
             <li><a href="<?=site_url('/page/certificate-verification')?>">Certificate Verification</a></li>
             <?php /*<li><a href="<?=site_url('/page/quality-policy')?>">Quality Policy</a></li>*/?>
             <li><a href="<?=site_url('/page/videos')?>">Video</a></li>
             <li><a href="<?=site_url('/page/contact-us')?>">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
              <h5 class="widget-title">Tags</h5>
              <div class="tags">
                <a href="#"  onclick="return false">Computer Basics</a>
                <a href="#"  onclick="return false">DCS</a>
                <a href="#"  onclick="return false">DCA</a>
                <a href="#"  onclick="return false">O' Level</a>
                <a href="#"  onclick="return false">DCA</a>
                <a href="#"  onclick="return false">SSC</a>
                <a href="#"  onclick="return false">LIC</a>
                <a href="#"  onclick="return false">PCS Level Upp</a>
                <a href="#"  onclick="return false">TET</a>
                <a href="#"  onclick="return false">B.Ed.</a>
                <a href="#"  onclick="return false">English Speaking (British, American)</a>
                <a href="#"  onclick="return false">ITIL</a>
                <a href="#"  onclick="return false">Tally Erp 9 (GST) with manual accounting</a>
              </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Quick Contact</h4>
            <form id="quick_contact_form2" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php" method="post">
              <div class="form-group">
                <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-default btn-flat btn-xs btn-quick-contact text-gray pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
              </div>
            </form>

            <!-- Quick Contact Form Validation-->
            
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2f2f2f">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2017 VNR. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#">

    <i class="fa fa-angle-up"></i>

  </a> </div>
<!-- end wrapper --> 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="<?=base_url('assets/js/blueimp-gallery.min.js')?>"></script>
<script type="text/javascript">
  jQuery(function(){
    $('.course_link').hover(function(){
       $('.course_link ul').show();
    });

     $('body').click(function(){
       $('.course_link ul').hide();
    });


  })
</script>
  <script src="<?=base_url('assets/js/gps.js')?>"></script>

</body>
</html>
        