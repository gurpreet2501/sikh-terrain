<?php $this->load->view('partials/header'); ?>
  <!-- Start main-content -->
  <div class="main-content">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
            <div class="single-service">
              <div class="text-center">
                
                <img src="<?=base_url('assets/images/vnr_logo.jpg')?>" class="text-center"  width="50%">
              </div>

              <h3 class="text-theme-colored line-bottom text-theme-colored">Contact Us</h3>
                  
                <?php if($this->session->flashdata('success_msgs')): ?>
                    <div class="alert alert-success">
                      <?php echo $this->session->flashdata('success_msgs'); ?>
                    </div>
                <?php endif; ?>
               <p> 
               		<form action="<?=site_url('page/contact_form_post')?>" method="post"> 
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input type="text" class="form-control" placeholder="Phone" name="Phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Message</label>
                      <textarea rows="7" class="form-control" placeholder="Your Message" name="message"></textarea>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-default" name="contact-form-submit" id="c-btn">Submit</button>
                  </form>
			         </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
             <?php $this->load->view('partials/sidebar'); ?>
          </div> <!-- col-sm-12 -->
        </div> <!-- row -->
      </div>
    </section>
  </div>
  <!-- end main-content -->
<?php $this->load->view('partials/footer'); ?>