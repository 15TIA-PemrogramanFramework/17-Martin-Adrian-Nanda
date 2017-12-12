<?php  $this->load->view('templates/header'); ?>
 <body>
<?php $this->load->view('templates/nav');?>


<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Selamat Datang <?php echo $this->session->userdata('username'); ?> </h1>
			</div>


			<form action="<?php echo $action; ?>"  method="POST"> 


<div class="form-group">
		<label>ID Member</label>
		<input type="text" placeholder="Masukan ID Member" value="<?php echo $id_member; ?>" class="form-control" name="id_member">
</div>





<div class="form-group">
		<label>Tagihan</label>
		<input type="text" placeholder="Masukan Tagihan" value="<?php echo $tagihan; ?>" class="form-control" name="tagihan">
</div>




<div class="form-group">
		<label>status</label>
		<select class="form-control" name="status" value="<?php echo $status; ?>">
			<option>Belum</option>
			<option>Sudah</option>
		</select>
</div>

<input type="hidden" name="id_biaya" value="<?php echo $id_biaya; ?>">
<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
<a href="<?php echo site_url('biaya') ?>" class="btn btn-default">Cancel</a>
</form>

			<?php  $this->load->view('templates/footer'); ?>

		</div>

		<!-- ... Your content goes here ... -->

	</div>
</div>







<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/');?>/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/');?>/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url('assets/');?>/js/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url('assets/');?>/js/raphael.min.js"></script>
<script src="<?php echo base_url('assets/');?>/js/morris.min.js"></script>
<script src="<?php echo base_url('assets/');?>/js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('assets/');?>/js/startmin.js"></script>

</body>
</html>
