
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
            <li><a href="#">Payments</a></li>
           
          </ol>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             

              <div class="box">
                <div class="box-header">
                 <h3>Search Payments</h3>
                 

                </div><!-- /.box-header -->
                <div class="box-body">

                   <div class="table-responsive">
                  <table id="paymentsSearch" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>Jobcard ID</th>
                      <th>Garment Type</th>
                        <th>Customer Name</th>
                        <th>Charges</th>
                        <th>Deposit</th>
                        
                        <th>Date Picked</th>
                        <th >Mobile No</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                       if(!empty($payments)){
                      foreach ($payments as $order)
                    {
                      echo '
                      <tr>
                     
                    
                      <td>'.$order->jobcard_id.'</td>
                      <td> '.$order->garmentype.'</td>
                      <td >'.$order->firstname.'</td>
                        <td >'.$order->charges.'</td>
                        
                        <td >'.$order->deposit.'</td>
                       
                       <td>'.$order->datecollected.'</td>
                       
                       <td>'.$order->phone.'</td>
                        
                            
                      </tr>';
                    }
                  }
                      ?>
                     </tbody>
                    <tfoot>
                     <tr>
                      <th>Jobcard ID</th>
                      <th>Garment Type</th>
                        <th>Customer Name</th>
                        <th>Charges</th>
                        <th>Deposit</th>
                        
                        <th>Date Picked</th>
                        <th >Mobile No</th>
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