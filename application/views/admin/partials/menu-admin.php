<ul class="nav navbar-nav">
    <li class="active">
      <a href='<?php echo site_url('/dashboard/index')?>'>Dashboard</a> 
    </li>
   
     

        <li><a href="<?=site_url('data/registrations')?>">Registrations</a></li>
        <li class="dropdown" id='data-management-menu'>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage Gallery<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=site_url('data/addGalleryImages')?>">Add Gallery Images</a></li>
           </ul>
        </li>
<?php /*

        <li class="dropdown" id='data-management-menu'>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bookings<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href='<?php echo site_url('/billing/create')?>'>Create Pre Booking</a></li>
            <li><a href='<?php echo site_url('/data/pre_bookings')?>'>See Previous Bookings</a></li>
          </ul>
        </li>
        */?>
    </ul>