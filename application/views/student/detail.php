<?php $this->load->view('partials/header'); ?>
  <!-- Start main-content -->
  <div class="main-content">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <a href="<?=site_url('page/certificate-verification')?>"><button class="btn btn-danger pull-right">Go back</button></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9 blog-pull-right">
            <div class="single-service">
              <h3 class="text-theme-colored line-bottom text-theme-colored"><div class="alert alert-success" role="alert">Student Detail</div></h3>
               <?php if(count($data)): ?>
                <table class="table table-stripped">
                  <tr>
                    <td><strong>Enrollment No.</strong></td>
                    <td><?=$data['enrollment_no']?></td>
                  </tr>

                  <tr>
                    <td><strong>Name</strong></td>
                    <td><?=$data['name']?></td>
                  </tr>

                  <tr>
                    <td><strong>Grade</strong></td>
                    <td><?=$data['grade']?></td>
                  </tr>

                  <tr>
                    <td><strong>Course Type</strong></td>
                    <td><span class="label label-danger"><?=$data['course_type']?></span></td>
                  </tr>

                  <tr>
                    <td><strong>Registration Date</strong></td>
                    <td><strong><?=date('M d,Y  H:i A', strtotime($data['registration_date']));?></strong></td>
                  </tr>
                </table>
                
                <div class="middle-logo text-center">
                  <img src="<?=base_url('assets/images/vnr_logo.jpg')?>" width="20%" />
                </div>

                <h3>Certificate/Diploma Details</h3>
                <table class="table table-hover">
                  <tr>
                    <td>
                      <strong>NAME</strong>
                    </td>
                    <td>
                      <strong>DURATION IN MONTHS</strong>
                    </td>
                    <td>
                      <strong> DETAIL</strong>
                    </td>
                  </tr>
                  <?php foreach ($data->certificates as $key => $cert): ?>
                  <tr>
                    <td align="center">
                      <?=$cert['certificate_name']?>
                    </td>
                    <td align="center">
                      <div class="top-pad-5"></div>
                      <span class="label label-danger"><?=$cert['certificate_duration_in_months'].' months'?></span>
                    </td>
                    <td align="center">
                      <?=$cert['certificate_detail']?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </table>
                
                <hr>
                <h3>Course Details</h3>
                <table class="table table-hover">
                  <tr>
                    <td>
                      <strong>COURSE NAME</strong>
                    </td>
                    <td>
                      <strong>COURSE DETAIL</strong>
                    </td>
                  </tr>
                  <?php foreach ($data->courses as $key => $course): ?>
                  <tr>
                    <td>
                      <div class="top-pad-5"></div>
                      <span class="label label-danger"><?=$course['name']?></span>
                    </td>
                    <td align="center">
                      <div class="top-pad-5"></div>
                      <?=$course['course_desc']?>
                    </td>
                    </tr>
                  <?php endforeach; ?>
                </table>
            <?php else: ?>                
              <div class="row">
                <div class="col-xs-12">
                  <h3 class="text-center">No Record Found! </h3>
                </div>
              </div>
            <?php endif; ?>                
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