<?php $this->load->view('partials/header'); ?>
  <!-- Start main-content -->
  <div class="main-content">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
            <div class="single-service">
              <h3 class="text-theme-colored line-bottom text-theme-colored">Certificate Verification</h3>
                <form action="<?=site_url('student/detail')?>" method="post">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Enter Enrollment No.</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enrollment no" name="enrollment_no">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
                    
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