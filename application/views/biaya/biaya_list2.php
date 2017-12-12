


<?php 
$this->load->view('templates/header');
?>
<body>
	<?php $this->load->view('templates/nav');?>


	<!-- Page Content -->
	<div id="page-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Selamat Datang <?php echo $this->session->userdata('username'); ?> </h1>
				</div>


<?php if ($this->session->userdata('level')=='admin') { ?>				

				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<CENTER><h2>Data Tagihan Member</h2></CENTER> 
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">

									<div class="col-md-12 text-right" style="margin-top:30px;margin-bottom:10px;">
										<?php echo anchor(site_url("biaya/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"'); ?> 

									</div>
									<thead>
										<tr>
											<th>ID biaya</th>
											<th>ID member</th>
											<th>UID member</th>
											<th>Tagihan</th>	
											<th>Status</th>


											<th>Aksi</th>		
										</tr>
									</thead>
									<tbody>
										
										<?php foreach ($biaya as $key => $value) {

											?>
											<tr>
												<td><?php echo $value->id_biaya; ?></td>
												<td><a href="http://localhost/1043/member"><?php echo $value->id_member; ?></a></td>
												<td><?php echo $value->uid; ?></td>
												<td><?php echo $value->tagihan; ?></td>

												<td ><?php echo $value->status; ?> Bayar</td>
											<td>
												<?php echo anchor(site_url('biaya/edit/'.$value->id_biaya),
													'<i class="fa fa-pencil"></i>',
													'class="btn btn-warning"'); ?>

												<?php echo anchor(site_url('biaya/delete/'.$value->id_biaya),
													'<i class="fa fa-trash"></i>',
													'class="btn btn-danger"'); ?>
												</td>
											</tr>		
											<?php  } ?>	
										</tbody>

									</table>
								</div>
								<!-- /.table-responsive -->




<!-- batasss -->
<?php }else if ($this->session->userdata('level')=='member') { ?>
<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<CENTER><h2>Data Tagihan Member</h2></CENTER> 
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">

									
									<thead>
										<tr>
											<th>ID biaya</th>
											<th>ID member</th>
											<th>UID member</th>
											<th>Tagihan</th>	
											<th>Status</th>


	
										</tr>
									</thead>
									<tbody>
										
										<?php foreach ($biaya as $key => $value) {

											?>
											<tr>
												<td><?php echo $value->id_biaya; ?></td>
												<td><?php echo $value->id_member; ?></td>
												<td><?php echo $value->uid; ?></td>
												<td><?php echo $value->tagihan; ?></td>

												<td ><?php echo $value->status; ?> Bayar</td>
											
											</tr>		
											<?php  } ?>	
										</tbody>

									</table>
								</div>
								<!-- /.table-responsive -->




<!-- batasss -->







<?php } ?>
<!-- batasss -->



							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.panel -->
					</div>
					<?php  $this->load->view('templates/footer'); ?>
				</div> 
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
		<script>
			$(document).ready(function() {
				$('#dataTables-example').DataTable({
					responsive: true
				});
			});
		</script>
	</body>
	</html>
