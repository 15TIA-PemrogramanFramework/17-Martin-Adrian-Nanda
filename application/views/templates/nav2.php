  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="home">E-Sampah Pekanbaru</a>
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
                    <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('username'); ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                   
                    
                    <li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
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

                     
                    <li>
                        <a href="<?php echo site_url('home1'); ?>" class="active"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                    </li>
                   
                        <a href="<?php echo site_url('sampah'); ?>" class="active"><i class="fa fa-user fa-fw"></i> Sampah</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('biaya'); ?>" class="active"><i class="fa fa-money fa-fw"></i> Tagihan Member</a>
                    </li>
                     <li>
                        <a href="<?php echo site_url('login/logout'); ?>" class="active"><i class="fa fa-sign-out fa-fw"></i> Log out</a>
                    </li>
                    
                </ul>

            </div>
        </div>
    </nav>