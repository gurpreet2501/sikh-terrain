<?php $this->load->view('partials/header'); ?>
  <!-- Start main-content -->
  <div class="main-content">
    <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-md-9 blog-pull-right">
            <div class="single-service">
              <h3 class="text-theme-colored line-bottom text-theme-colored">Photo Gallery</h3>
               
                <hr>
             <!-- Gallery code -->
              <div id="blueimp-gallery" class="blueimp-gallery">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
                
                
                <!-- //Gallery Images -->
                <div id="links">
                  <?php foreach (images() as $key => $img): $image = $img->image;?>
                    <a href="<?=base_url("assets/images/gallery/{$image}")?>" class="gallery-img"> <!-- Img  -->
                        <img src="<?=base_url("assets/images/gallery/{$image}")?>"> <!-- Thumb -->
                    </a>
                  <?php endforeach ?>
                  
                </div>

                <script src="js/blueimp-gallery.min.js"></script>
                <script>
                document.getElementById('links').onclick = function (event) {
                    event = event || window.event;
                    var target = event.target || event.srcElement,
                        link = target.src ? target.parentNode : target,
                        options = {index: link, event: event},
                        links = this.getElementsByTagName('a');
                    blueimp.Gallery(links, options);
                };
                </script>
                <!-- Gallery code ends -->
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