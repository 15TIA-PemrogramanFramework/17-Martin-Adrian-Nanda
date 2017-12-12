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
					<label>username</label>
					<input type="text" placeholder="Masukan username" value="<?php echo $username; ?>" class="form-control" name="username">
				</div>
				
				<div class="form-group">
					<label>password</label>
					<input type="text" placeholder="Masukan password" value="<?php echo $password; ?>" class="form-control" name="password">
				</div>
				<div class="form-group">
                <label>level</label>
                <select class="form-control" value="<?php echo $level; ?>" name="level">
                   <?php if ($this->session->userdata('level')=='admin') { ?>
                    <option>admin</option>
                    <option>member</option>
                    <option>kurir</option>
                <?php }elseif ($this->session->userdata('level')=='member') { ?>
                 
                    <option>member</option>
                 <?php } elseif ($this->session->userdata('level')=='kurir') { ?>
                 	<option>kurir</option>
                 <?php } ?>  
                </select>
            </div>

				<input type="hidden" name="uid" value="<?php echo $uid; ?>">
				<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
				<a href="<?php echo site_url('l_s') ?>" class="btn btn-default">Cancel</a>
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
