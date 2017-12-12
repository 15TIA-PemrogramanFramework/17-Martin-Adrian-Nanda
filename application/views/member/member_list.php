<?php ?>	
 
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


				

				 <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               <CENTER><h2>Data Member</h2></CENTER> 
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    	 <div class="col-md-12 text-right" style="margin-top:30px;margin-bottom:10px;">
										<?php echo anchor(site_url("member/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"'); ?> 

									</div>  
                                    
                                     <thead>
						<tr>
							<th>ID member</th>
							<th>Nama Member</th>
							<th>Username</th>	
							<th>Password</th>	

							<th>Lokasi</th>

							<th>Aksi</th>		
						</tr>
					</thead>
					<tbody>
						<?php foreach ($member as $key => $value) {

							?>
							<tr>
								<td><?php echo $value->id_member; ?></td>
								<td><?php echo $value->nama; ?></td>
								<td><?php echo $value->username; ?></td>
								<td><?php echo $value->password; ?></td>
								<td><?php echo $value->lokasi; ?></td>

								<td>
									<?php echo anchor(site_url('member/edit/'.$value->id_member),
										'<i class="fa fa-pencil"></i>',
										'class="btn btn-warning"'); ?>

									<?php echo anchor(site_url('member/delete/'.$value->id_member),
										'<i class="fa fa-trash"></i>',
										'class="btn btn-danger"'); ?>
									</td>
								</tr>		
								<?php  } ?>	
							</tbody>  
                                    </table>

                                </div>
                                <!-- /.table-responsive -->
                               
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                     <?php  $this->load->view('templates/footer'); ?>

			</div> 
		</div>
	</div>

			<?php  ?>	








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
