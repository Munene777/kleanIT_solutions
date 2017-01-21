
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
            <li><a href="#">Make Laundary Payment</a></li>
           
          </ol>
           
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             

              <div class="box">
                <div class="box-header">
                 <h3>Make Laundary Payment</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
 <form role="form" action="processPayment" method="post" id="process_payment">
                <div class="row">
                            <div  class="col-md-4">
                            
                  
                    <div class="form-group">
                      <label for="jobNo">Job Order No:</label>
                      <select class="form-control" id="garmentPayment" name="garmentPayment" onchange="fetchOrder(this.form)" 
                      value="">
                      <?php if(!empty($client)){ 
                    foreach ($client as $customer) {
                      # code...
                      echo '<option value="'.$customer->jobcard_id.'">'.$customer->jobcard_id.'</option>';
                    }
                      
                      } ?>
                      <option>...</option>
                      <?php
                      if(!empty($orders))
                        foreach ($orders as $order) {
                          # code...
                          echo '<option value="'.$order->jobcard_id.'">'.$order->jobcard_id.'</option>';
                        }
                        ?>
                      </select>
                    </div>

                    
                     <div class="form-group">
                      <label for="lastname">Customer Name:</label>
                      <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Customer Name" required="required" value="<?php if(!empty($client)){ 
                    foreach ($client as $customer) {
                      # code...
                      echo $customer->firstname.' '.$customer->lastname;
                    }
                      
                      } ?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="dropDate">Drop Date</label>
                      <input type="date" class="form-control" id="dropDateMP" name="dropDateMP" placeholder="Drop Date" required="required"  value=" <?php if(!empty($client)){ 
                    foreach ($client as $customer) {
                      # code...
                      echo $customer->orderdate;
                    }
                      
                      } ?>  
                " readonly>
                    </div>
                    <div class="form-group">
                      <label for="pickDate">Pickup Date</label>
                      <input type="date" class="form-control" id="pickDateMP" name="pickDateMP" placeholder="Pick Date" required="required" value=" <?php if(!empty($client)){ 
                    foreach ($client as $customer) {
                      # code...
                      echo $customer->pickdate;
                    }
                      
                      } ?>  
                " readonly>
                    </div>

                    <div class="form-group">
                      <label for="ready">Job Order Ready ?</label>
                      <input type="text" class="form-control" id="ready" name="ready" placeholder="Ready?" required="required"
                      value="<?php if(!empty($client)){ 
                    foreach ($client as $customer) {
                      # code...
                      echo $customer->readystatus;
                    }
                      
                      } ?>" readonly>
                    </div>


                   
                            </div>
                      <div class="col-md-8">
                       <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                      <label for="amountDue">Amount Due</label>
                      <input type="text" class="form-control" id="amountDue" name="amountDue" value="
                      <?php
                       $amount=0.00;
                       if(!empty($clientOrders)){

                      foreach ($clientOrders as $order)
                    {
                      $amount += $order->charges;

                    }
                  }
                    echo $amount;?>


                      " readonly>
                    </div>
                    </div>
                    <div class="col-md-3">
                     <div class="form-group">
                      <label for="deposit">Deposit</label>
                      <input type="text" class="form-control" id="deposit" name="deposit" value="
                      <?php
                       $deposit=0.00;
                       if(!empty($clientOrders)){

                      foreach ($clientOrders as $dep)
                    {
                      $deposit += $dep->deposit;

                    }
                  }
                    echo $deposit;?>" readonly>
                    </div>
                    </div>
                    <div class="col-md-3">
                     <div class="form-group">
                      <label for="balance">Balance</label>
                      <input type="text" class="form-control" id="balance" name="balance" value="
                      <?php
                       
                       
                    echo $amount- $deposit;?>" readonly>
                    </div>
                    </div>
                      
                       
                        

                    </div>

                    <div class="row">
                      <div class="col-md-8">
                    <a href="<?php echo base_url() ?>index.php/Welcome/makePayment"><button type="button" class="btn btn-info pull-right" > New Payment</button></a>
                    </div>
                    </div>
                    <br>
                    
                      </div>

                      </div>
                      <div class="row">
                      <div class="col-md-12 table-responsive">
                      <table id="orderPaymentProcessing" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th class="hidden">Garment No</th>
                      <th>Garment Type</th>
                         <th>Service Type</th>
                        <th>Charges</th>
                        <th>Deposit</th>
                        <th>Picked?</th>
                        <th>Date Picked</th>
                        <th class="hidden">Jobcard ID</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                       if(!empty($clientOrders)){
                      foreach ($clientOrders as $order)
                    {
                      echo '
                      <tr>
                     
                      <td class="hidden">'.$order->garmentid.'</td>
                      <td>'.$order->garmentype.'</td>
                      <td> '.$order->typeservice.'
                        
                        </td>
                        <td >'.$order->charges.'</td>
                        
                        <td >'.$order->deposit.' <i class="fa fa-edit pull-right editDeposit"></i></td>
                       <td>'.$order->collected.'
                       </td>
                       <td>'.$order->datecollected.'
                       </td>
                       
                       <td class="hidden">'.$order->jobcard_id.'</td>
                        
                            
                      </tr>';
                    }
                  }
                      ?>
                     </tbody>
                    <tfoot>
                      <tr>
                      <th class="hidden">Garment No</th>
                      <th>Garment Type</th>
                         <th>Service Type</th>
                        <th>Charges</th>
                        <th>Deposit</th>
                        <th>Picked?</th>
                        <th>Date Picked</th>
                        <th class="hidden">Jobcard ID</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                    </div>
                   

                     </form>
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