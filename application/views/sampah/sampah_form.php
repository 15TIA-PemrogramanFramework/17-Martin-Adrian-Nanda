<?php  $this->load->view('templates/header'); ?>
 <body>
<?php $this->load->view('templates/nav');?>


<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Selamat Datang <?php echo $this->session->userdata('username'); ?></h1>
			</div>


			<form action="<?php echo $action; ?>"  method="POST"> 
<div class="form-group">
		<label>ID Member</label>
		<input type="text" placeholder="Masukan ID Member" value="<?php echo $id_member; ?>" class="form-control" name="id_member">
</div>
<div class="form-group">
		<label>ID Member</label>
	

		<input type="text" placeholder="Masukan ID Member" value="<?php echo $id_member; ?>" class="form-control" name="id_member">

		
</div>

<div class="form-group">
		<label>ID Kurir</label>
	

		<input type="text" placeholder="Masukan ID Member" value="<?php echo $id_kurir	; ?>" class="form-control" name="id_kurir">

		
</div>

<div class="form-group">
		<label>UID</label>
	

		<input type="text" placeholder="Masukan ID Member" value="<?php echo $uid; ?>" class="form-control" name="uid">

		
</div>

<div class="form-group">
		<label>Lokasi</label>
	

		<input type="text" placeholder="Masukan ID Member" value="<?php echo $lokasi; ?>" class="form-control" name="lokasi">

		
</div>

<div class="form-group">
		<label>tanggal</label>
		<input type="date" placeholder="Masukan tanggal" value="<?php echo $tanggal; ?>" class="form-control" name="tanggal">
</div>

<div class="form-group">
		<label>detail</label>
		
		<select class="form-control" name="detail" value="<?php echo $detail; ?>">
			<option>Organik</option>
			<option>Non Organik</option>
		</select>
</div>

<div class="form-group">
		<label>status</label>
		<select class="form-control" name="status" value="<?php echo $status; ?>">
			<?php if ($this->session->userdata('level')=='admin') { ?>
			<option>Belum</option>
			<option>Sudah</option>
			<?php } elseif  ($this->session->userdata('level')=='member') { ?>
			<option>Belum</option>
			<?php } elseif  ($this->session->userdata('level')=='kurir') { ?>
			<option>Belum</option>
			
			<?php } ?>
		</select>
</div>

<input type="hidden" name="id_sampah" value="<?php echo $id_sampah; ?>">
<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
<a href="<?php echo site_url('sampah') ?>" class="btn btn-default">Cancel</a>
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
