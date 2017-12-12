<?php if ($this->session->userdata('level')=='admin') { ?>		
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
					<label>Nama Member</label>
					<input type="text" placeholder="Masukan Member" value="<?php echo $nama; ?>" class="form-control" name="nama">
				</div>
				
				
				<div class="form-group">
					<label>Uid (ID login)</label>
					<input type="text" placeholder="Masukan uid" value="<?php echo $uid; ?>" class="form-control" name="uid">
				</div>

<div class="form-group">
					<label>Lokasi</label>
					<input type="text" placeholder="Masukan lokasi" value="<?php echo $lokasi; ?>" class="form-control" name="lokasi">
				</div>

				<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
				<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
				<a href="<?php echo site_url('member') ?>" class="btn btn-default">Cancel</a>
			</form>

			<?php  $this->load->view('templates/footer'); ?>

		</div>

		<!-- ... Your content goes here ... -->
		
	</div>
</div>
<?php }else ?> <?php ?>







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
