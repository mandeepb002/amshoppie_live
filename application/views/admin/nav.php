 <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo base_url()."admin" ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="<?php echo base_url(); ?>assets/admin/img/m-logo.png">
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </a>
                            
                        </li>
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $this->session->userdata('mobile'); 	
								?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                               
                                <li class="divider"></li>

                                    <li>
                                        <a href="#">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="<?php echo base_url()."admin/logout"; ?>"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
								<!-- Messages: style can be found in dropdown.less-->
                        
                            </ul>
                        </div>
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas" style="height:601px !important;">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                            <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="<?php echo base_url(); ?>assets/admin/img/26115.jpg" class="img-circle" alt="User Image" />
                                </div>
                                <div class="pull-left info">
                                    <p><?php echo "Hello ,".$this->session->userdata('mobile'); 	
								?> </p>

                                    
									<span><?php echo $this->session->userdata('email');?></span> 	
								
                                </div>
                            </div>
                           
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            <ul class="sidebar-menu lh">
                                <li class="active a">
                                    <a href="<?php echo base_url(); ?>admin">
                                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                    </a>
                                </li>
								
								<li class="b">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-cubes" aria-hidden="true"></i>Manage Users<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>admin/user"> <i class="fa fa-plus" aria-hidden="true"></i>Registered</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/block_user'); ?>"> <i class="fa fa-eye" aria-hidden="true"></i>BLOCKED USER</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/active_user'); ?>"> <i class="fa fa-eye" aria-hidden="true"></i>ACTIVE USER</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/pending_user'); ?>"> <i class="fa fa-eye" aria-hidden="true"></i>PENDING USER</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                               
                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>
