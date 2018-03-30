<?php $this->load->view('partials/header'); ?>
  <!-- Start main-content -->
  <div class="main-content">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 blog-pull-right">
            <div class="row">
               <h3 class="text-theme-colored line-bottom text-theme-colored">Courses</h3>
                 <?php foreach (getCoursePages() as $key => $course):?>
                  <a href="<?=site_url('course/detail/'.$course['course_slug'])?>">
                    <div class="course-thumb">
                      <div class="col-md-4">
                       <div class="course-box">
                          <div class="course-tile">
                            <span><?=$course->course_title?></span>
                          </div>              
                       </div> 
                      </div>
                    </div>
                  </a>
                <?php endforeach ?>
            </div>
          </div> <!-- col-md-9 -->
        </div> <!-- row -->
      </div>
    </section>
  </div>
  <!-- end main-content -->
<?php $this->load->view('partials/footer'); ?>