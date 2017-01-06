
<?php
 $this->load->view('header');

?>
  


       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="center_me">
           Klean Administrative Site
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">New Customer</a></li>
           
          </ol>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             

              <div class="box">
                <div class="box-header">
                 <h3>Register a new Customer
                 <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#add_customer_modal">New Customer</button></h3>

                </div><!-- /.box-header -->
                <div class="box-body">


                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th class="hidden"></th>
                      <th>First Name</th>
                         <th>Last Name</th>
                        <th>Mobile No</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                  
                   <?php
                       if(!empty($customers)){
                      foreach ($customers as $customer)
                    {
                      echo '
                      <tr>
                      <td class="hidden">'.$customer->customerid.'</td>
                      <td>'.$customer->firstname.'</td>
                        <td >'.$customer->lastname.'</td>
                        <td>'.$customer->phone.'</td>
                       
                       
                        
                         <td><a class="btn btn-link editCustomer"  data-toggle="modal" data-target="#edit_customer_modal">Edit</a></td>
                        <td><a class="btn btn-link delCustomer"  data-toggle="modal" data-target="#del_customer_modal">Del</a></td>        
                      </tr>';
                    }
                  }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                      <th class="hidden"></th>
                      <th>First Name</th>
                         <th>Last Name</th>
                        <th>Mobile No</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tfoot>
                  </table>


                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    
     <?php
 $this->load->view('pages/CustomerTransactions/modals/customerModals');

?> 
  <?php
 $this->load->view('footer');

?>