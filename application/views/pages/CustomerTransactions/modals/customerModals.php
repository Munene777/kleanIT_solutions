



<!-- add a customer Modal -->
<div id="add_customer_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Customer Registration</h4>
      </div>
      <div class="modal-body">
         <form role="form" action="insertNewCustomer" method="post" id="add_customer">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="firstname">First Name:</label>
                      <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required="required">
                    </div>

                    
                     <div class="form-group">
                      <label for="lastname">Last Name:</label>
                      <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required="required">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required="required">
                    </div>
                  </div><!-- /.box-body -->
                  

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ADD</button>
                  </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-default"  data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--edit customer detials Modal -->
<div id="edit_customer_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Customer Details</h4>
      </div>
      <div class="modal-body">
       <form role="form" action="updateCustomer" method="post">
                  <div class="box-body">
                   <div class="form-group">
                      <label for="firstname">First Name:</label>
                      <input type="text" class="form-control" id="edit_firstName" name="edit_firstName" placeholder="First Name" required="required">
                    </div>

                    
                     <div class="form-group">
                      <label for="lastname">Last Name:</label>
                      <input type="text" class="form-control" id="edit_lastName" name="edit_lastName" placeholder="Last Name" required="required">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input type="text" class="form-control" id="edit_phone" name="edit_phone" placeholder="Phone Number" required="required">
                    </div>

                     <input type="hidden" name="customerId" id="customerId" value="not_set" >
                   
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--delete customer Modal -->
<div id="del_customer_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Customer Details</h4>
      </div>
      
      <form action="delCustomer" method="post">
      <div class="modal-body">
      <input type="hidden" name="del_customerId" id="del_customerId" value="not_set" >
     
        <p>Are you sure you want to delete this Customer?</p>
      </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-primary " value="OK" >
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
       </form>
    </div>

  </div>
</div>