<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KleanIT | Solutions</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet"
  href="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

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
                <i class="fa fa-exchange"></i>
                <span>Customer Transactions</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>index.php/Welcome/newCustomer"><i class="fa fa-circle-o"></i> Register New Customer</a></li>
                <li><a href="<?php echo base_url() ?>index.php/Welcome/processOrder"><i class="fa fa-circle-o"></i>Process Customer Orders</a></li>
                <li><a href="<?php echo base_url() ?>index.php/Welcome/makePayment"><i class="fa fa-circle-o"></i> Make Laundry Payment</a></li>
                
              </ul>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-spinner"></i>
                <span>Garments Process</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>index.php/GarmentsProcessing/"><i class="fa fa-circle-o"></i> New Garments Type</a></li>
                <li><a href="<?php echo base_url() ?>index.php/GarmentsProcessing/readyGarment"><i class="fa fa-circle-o"></i>Enter Ready Garments</a></li>
                <li><a href="<?php echo base_url() ?>index.php/GarmentsProcessing/readyGarments"><i class="fa fa-circle-o"></i>View Ready Garments</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-search"></i>
                <span>Quick Search</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Search for Customer</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Search for Orders</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Search for Payments</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Dryclaen Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Job Order Payment Summary</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Detailed Customer Payment</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>KleanIT Customer's Profile</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Garments Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Uncollected Garments</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Collected Garments</a></li>
                 <li><a href="#"><i class="fa fa-circle-o"></i> Generate Garment Catalogue</a></li>
              </ul>
            </li>
           
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Payment Reports</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Payment Summary by dates</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Current Week Payments</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Current Month Payments</a></li>
              </ul>
            </li>
            
            
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
