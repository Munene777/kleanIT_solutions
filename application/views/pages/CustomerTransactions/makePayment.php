
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
                  
 <form role="form" action="insertNewOrder" method="post" id="add_Order">
                <div class="row">
                            <div  class="col-md-4">
                            
                  
                    <div class="form-group">
                      <label for="jobNo">Job Order No:</label>
                      <input type="text" class="form-control" id="jobNo" name="jobNo" placeholder="Job Order No" required="required">
                    </div>

                    
                     <div class="form-group">
                      <label for="lastname">Customer Name:</label>
                      <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Customer Name" required="required">
                    </div>
                    <div class="form-group">
                      <label for="dropDate">Drop Date</label>
                      <input type="date" class="form-control" id="dropDate" name="dropDate" placeholder="Drop Date" required="required">
                    </div>
                    <div class="form-group">
                      <label for="pickDate">Pickup Date</label>
                      <input type="date" class="form-control" id="pickDate" name="pickDate" placeholder="Pick Date" required="required">
                    </div>

                    <div class="form-group">
                      <label for="ready">Job Order Ready ?</label>
                      <input type="text" class="form-control" id="ready" name="ready" placeholder="Ready?" required="required">
                    </div>


                   
                            </div>
                      <div class="col-md-8">
                       <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                      <label for="amountDue">Amount Due</label>
                      <input type="text" class="form-control" id="amountDue" name="amountDue" value="0.00" required="required">
                    </div>
                    </div>
                    <div class="col-md-2">
                     <div class="form-group">
                      <label for="deposit">Deposit</label>
                      <input type="text" class="form-control" id="deposit" name="deposit" value="0.00" required="required">
                    </div>
                    </div>
                    <div class="col-md-3">
                     <div class="form-group">
                      <label for="balance">Balance</label>
                      <input type="text" class="form-control" id="balance" name="balance" value="0.00" required="required">
                    </div>
                    </div>
                      
                       
                        

                    </div>

                    <div class="row">
                      <div class="col-md-8">
                    <button type="button" class="btn btn-info pull-right" > New Payment</button>
                    </div>
                    </div>
                    <br>
                     <div class="row">
                      <div class="col-md-8">
                    <button type="button" class="btn btn-info pull-right" > Save Record</button>
                    </div>
                    </div>
                      </div>

                      </div>
                      <div class="row">
                      <div class="col-md-12">
                      <table id="orderProcessing" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>Garment No</th>
                         <th>Service Type</th>
                        <th>Charges</th>
                        <th>Deposit</th>
                        <th>Picked?</th>
                        <th>Date Picked</th>
                      </tr>
                    </thead>
                    <tbody>

                     </tbody>
                    <tfoot>
                      <tr>
                     <th>Garment No</th>
                         <th>Service Type</th>
                        <th>Charges</th>
                        <th>Deposit</th>
                        <th>Picked?</th>
                        <th>Date Picked</th>
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
 $this->load->view('footer');

?>