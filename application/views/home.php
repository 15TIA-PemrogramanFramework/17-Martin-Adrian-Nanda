
<?php $this->load->view('templates/header');?>
<body>
  <?php $this->load->view('templates/nav');?>
  <div id="wrapper">



<br>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <br>
                      <div class="panel-heading">
                          <h1 class="page-header">Pekanbaru, <?php echo tanggal() ?> 
                           <i> <h3>Selamat Datang di website E-Sampah Pekanbaru, <?php echo $this->session->userdata('username'); ?> </h3></i>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- ... Your content goes here ... -->

    </div>
    <?php $this->load->view('templates/footer');?>
</div>

</div>



