
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
            <li><a href="#">Process Customer Order</a></li>
           
          </ol>
           
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             

              <div class="box">
                <div class="box-header">
                 <h3>Process Customer Order</h3>
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
                      <label for="amount">Total Amount Due</label>
                      <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount Due" required="required">
                    </div>


                   
                            </div>
                      <div class="col-md-8">

                      <table id="orderProcessing" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th>GarmentId</th>
                      <th>Garment Type</th>
                         <th>Service Type</th>
                        <th>Deatiled Description</th>
                        <th>Charges</th>
                        <th>Garment Inspection</th>
                      </tr>
                    </thead>
                    <tbody>

                     </tbody>
                    <tfoot>
                      <tr>
                      <th>GarmentId</th>
                      <th>Garment Type</th>
                         <th>Service Type</th>
                        <th>Deatiled Description</th>
                        <th>Charges</th>
                        <th>Garment Inspection</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                    </div>
                    <div class="row">
                    <div class="col-md-3">
                      <button type="button" class="btn btn-info pull-right" > New JOb Order</button>
                    </div>
                    <div class="col-md-2">
                     <button type="button" class="btn btn-info" > Save Record</button> 
                    </div>
                    <div class="col-md-3">
                      <button type="button" class="btn btn-info pull-left" > Process Payment</button>
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