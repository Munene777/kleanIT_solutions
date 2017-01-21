
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
            <li><a href="#">Garments Status</a></li>
           
          </ol>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             

              <div class="box">
                <div class="box-header">
                 <h3>Enter Ready Garments</h3>
                 

                </div><!-- /.box-header -->
                <div class="box-body">

                <div class="table-responsive">
                <table id="readyGarments" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                     
                      <th>Job Order No</th>
                         <th>Drop Date</th>
                        <th>Pickup Date</th>
                        <th>First Name</th>
                        <th>Mobile No</th>
                        <th>Ready?</th>
                        <th>Date</th>
                        <th></th>
                       
                      </tr>
                    </thead>
                    <tbody>
                  
                   <?php
                       if(!empty($orders)){
                      foreach ($orders as $order)
                    {
                      echo '
                      <tr>
                     
                      <td>'.$order->jobcard_id.'</td>
                        <td >'.$order->orderdate.'</td>
                        <td>'.$order->pickdate.'</td>
                       <td>'.$order->firstname.'</td>
                       <td>'.$order->phone.'</td>
                       <td>'.$order->readystatus.'</td>
                       <td>'.$order->dateready.'</td>
                       
                        
                         <td><a class="btn btn-link editReady"  data-toggle="modal" data-target="#edit_readyStatus_modal">Edit</a></td>
                             
                      </tr>';
                    }
                  }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                     <th>Job Order No</th>
                         <th>Drop Date</th>
                        <th>Pickup Date</th>
                        <th>First Name</th>
                        <th>Mobile No</th>
                        <th>Ready?</th>
                        <th>Date</th>
                        <th></th>
                        
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
 $this->load->view('pages/GarmentsProcess/modals/readyStatus');

?> 
  <?php
 $this->load->view('footer');

?>