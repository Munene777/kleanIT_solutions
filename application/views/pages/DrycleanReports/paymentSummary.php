
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
            <li><a href="#">Job Order Payment summary</a></li>
           
          </ol>
           
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             

              <div class="box">
                <div class="box-header">
                 <h3>Job Order Payment Summary
                <a href="<?php echo base_url() ?>index.php/DrycleanReports/generateOrderReport"> <button type="button" class="btn btn-info pull-right" >Print Report <i class="fa fa-print"></i></button></a>
                </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                      <div class="row">
                      <div class="col-md-12 table-responsive">
                     
                 
              
                    <table id="jobOrderPaymentReport" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      
                      <th>Job Order Number</th>
                         <th>Total Collection</th>
                        <th>Total Amount Paid</th>
                        <th>Outstanding bal</th>
                        

                      </tr>
                    </thead>
                    <tbody>
                       <?php
                       $totalAmount=0;
                       $totalPaid=0;
                       $totalBal=0;
                       if(!empty($orders)){

                      foreach ($orders as $order)
                    {
                      $amount=0;
                      $paid=0;
                      $bal=0;
                      foreach ($garments as $garment) {
                        # code...
                        if($order->jobcard_id == $garment->jobcard_id){
                         $amount += $garment->charges; 
                         $paid +=$garment->deposit;
                        }

                      }
                      $totalAmount +=$amount;
                      $totalPaid +=$paid;
                      $bal= $amount- $paid;

                      $totalBal +=$bal;
                      echo '
                      <tr>
                     
                      
                      <td>'.$order->jobcard_id.'</td>
                      <td>'.$amount.'</td>
                        <td>'.$paid.'</td>
                        
                        <td >'.$bal.'</td>
                      
                      </tr>';
                    }
                  }
                      ?>
                     </tbody>
                    <tfoot>
                        <tr>
                      
                      <th>Grad Total</th>
                         <th class="red"><?php echo $totalAmount; ?></th>
                        <th class="red"><?php echo $totalPaid; ?></th>
                        <th class="red"><?php echo $totalBal; ?></th>
                        
                        
                      </tr>
                    </tfoot>
                  </table>

                    </div>
                    </div>
                    
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php
 $this->load->view('pages/CustomerTransactions/modals/editDepositModal');

?> 

  <?php
 $this->load->view('footer');

?>