<?php $this->load->view('admin/partials/header'); ?>
<div class="row">
	<div class="col-md-12">
		<div id="gallery">
			<button class="btn btn-primary" v-on:click="slides += 1">Add Slide</button>
			<form method="post" action="<?=site_url('data/galleryDataPost')?>" enctype="multipart/form-data">
				<div class="form-group" v-for="slide in slides">
					<label>Upload Image {{slide}}</label>
					<input class="form-control" type="file" v-bind:name="'image_'+slide"  />
				</div>
				<input type="submit" value="submit">
			</form>
		</div>
		
	</div>
</div>
<?php $this->load->view('admin/partials/footer'); ?>