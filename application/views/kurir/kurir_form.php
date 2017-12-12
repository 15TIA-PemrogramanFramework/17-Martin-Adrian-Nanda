<?php 
$this->load->view('templates/header');
?>
<body>
	<?php 
$this->load->view('templates/nav');
?>

<div id="page-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Selamat Datang <?php echo $this->session->userdata('username'); ?> </h1>
			</div>
<form action="<?php echo $action; ?>"  method="POST"> 
<div class="form-group">
		<label>Nama kurir</label>
		<input type="text" placeholder="Masukan kurir" value="<?php echo $nama_kurir; ?>" class="form-control" name="nama_kurir">
</div>
<div class="form-group">
		<label>phone</label>
		<input type="text" placeholder="Masukan phone" value="<?php echo $phone; ?>" class="form-control" name="phone">
</div>


<input type="hidden" name="id_kurir" value="<?php echo $id_kurir; ?>">
<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
<a href="<?php echo site_url('kurir') ?>" class="btn btn-default">Cancel</a>
</form>
 <?php  $this->load->view('templates/footer'); ?>
</div>
</div>
</div>



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
		 <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
	</body>
	</html>
