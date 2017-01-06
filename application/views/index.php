
<?php
 $this->load->view('header');

?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">KleanIT</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
            
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" >
                  <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Sign Out</span>
                </a>
                
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>KleanIT Admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
         
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Customer Transactions</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>index.php/Welcome/newCustomer"><i class="fa fa-circle-o"></i> Register New Customer</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Process Customer Orders</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Make Laundry Payment</a></li>
                
              </ul>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Garments Process</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> New Garments Type</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i>Enter Ready Garments</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i>View Ready Garments</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Quick Search</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i>Search for Customer</a></li>
                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i>Search for Orders</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Search for Payments</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Dryclaen Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i>Job Order Payment Summary</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i>Detailed Customer Payment</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i>KleanIT Customer's Profile</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Garments Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Uncollected Garments</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Collected Garments</a></li>
                 <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Generate Garment Catalogue</a></li>
              </ul>
            </li>
           
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Payment Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i>Payment Summary by dates</a></li>
                <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i>Current Week Payments</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i>Current Month Payments</a></li>
              </ul>
            </li>
            
            
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="center_me">
           Klean Administrative Site
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Welcome</a></li>
           
          </ol>
           
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             

              <div class="box">
                <div class="box-header">
                 
                </div><!-- /.box-header -->
                <div class="box-body">


                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     

  <?php
 $this->load->view('footer');

?>