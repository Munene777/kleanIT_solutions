
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
            <li><a href="#">Search Customer</a></li>
           
          </ol>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             

              <div class="box">
                <div class="box-header">
                 <h3>Quick Search Customers
                 

                </div><!-- /.box-header -->
                <div class="box-body">

                   <div class="table-responsive">
                <table id="quickSearchCustomers" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      
                      <th>First Name</th>
                         <th>Last Name</th>
                        <th>Mobile No</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                  
                   <?php
                       if(!empty($customers)){
                      foreach ($customers as $customer)
                    {
                      echo '
                      <tr>
                      
                      <td>'.$customer->firstname.'</td>
                        <td >'.$customer->lastname.'</td>
                        <td>'.$customer->phone.'</td>
                       
                       
                        
                                 
                      </tr>';
                    }
                  }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                     
                      <th>First Name</th>
                         <th>Last Name</th>
                        <th>Mobile No</th>
                       
                      </tr>
                    </tfoot>
                  </table>
                   </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    
    
  <?php
 $this->load->view('footer');

?>