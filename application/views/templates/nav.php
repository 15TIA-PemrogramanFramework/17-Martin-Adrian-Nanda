



      


           
  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="home"><i class="fa fa-trash-o fa-fw"></i>E-Sampah Pekanbaru</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="home"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
           
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>Hay <?php echo $this->session->userdata('username'); ?> sebagai <?php echo $this->session->userdata('level'); ?> , <i class="fa fa-calendar fa-fw"></i> <?php echo tanggal() ?>  
                </a>
               
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>

                   <?php if ($this->session->userdata('level')=='admin') { ?>
                    <li>
                        <a href="<?php echo site_url('home'); ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('l_s'); ?>" class="active"><i class="fa fa-user fa-fw"></i> Data Login</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('member'); ?>" class="active"><i class="fa fa-user fa-fw"></i> Member</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('kurir'); ?>" class="active"><i class="fa fa-user fa-fw"></i> Kurir</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('sampah'); ?>" class="active"><i class="fa fa-trash-o fa-fw"></i> Sampah</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('biaya'); ?>" class="active"><i class="fa fa-money fa-fw"></i> Tagihan Member</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('login/logout'); ?>" class="active"><i class="fa fa-sign-out fa-fw"></i> Log out</a>
                    </li>
                   

                     <?php }else if ($this->session->userdata('level')=='member') { ?>

                     <li>
                        <a href="<?php echo site_url('home'); ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('l_s'); ?>" class="active"><i class="fa fa-user fa-fw"></i> Data Login</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('member'); ?>" class="active"><i class="fa fa-user fa-fw"></i>Member</a>
                    </li>
                         <li>
                        <a href="<?php echo site_url('sampah'); ?>" class="active"><i class="fa fa-trash-o fa-fw"></i> Sampah</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('biaya'); ?>" class="active"><i class="fa fa-money fa-fw"></i> Tagihan Member</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('login/logout'); ?>" class="active"><i class="fa fa-sign-out fa-fw"></i> Log out</a>
                    </li>
                     <?php }else if ($this->session->userdata('level')=='kurir') { ?>

                     <li>
                        <a href="<?php echo site_url('home'); ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('l_s'); ?>" class="active"><i class="fa fa-user fa-fw"></i> Data Login</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('kurir'); ?>" class="active"><i class="fa fa-user fa-fw"></i> Kurir</a>
                    </li>
                         <li>
                        <a href="<?php echo site_url('sampah'); ?>" class="active"><i class="fa fa-user fa-fw"></i> Sampah</a>
                    </li>
                     
                     <li>
                        <a href="<?php echo site_url('login/logout'); ?>" class="active"><i class="fa fa-sign-out fa-fw"></i> Log out</a>
                    </li>
                    <?php } ?>
                </ul>

            </div>
        </div>
    </nav>
 