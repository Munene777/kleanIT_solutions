<div id="editDepositModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Deposit Amount</h4>
      </div>
      <div class="modal-body">
         <form role="form" action="editDeposit" method="post" id="edit_Deposit">
                  <div class="box-body">
                    
                     <div class="form-group">
                      <label for="normal">Charges Amount</label>
                      <input type="text" class="form-control" id="orderCharges" name="orderCharges"  readonly>
                    </div>

                    <div class="form-group">
                      <label for="express">Deposited Amount</label>
                      <input type="text" class="form-control" id="depositPaid" name="depositPaid" placeholder="Enter Deposited amount" required="required">
                    </div>

                  </div><!-- /.box-body -->
                  
                   <input type="hidden" name="garmentId" id="garmentId" value="not_set">
                    <input type="hidden" name="jobcardId" id="jobcardId" value="not_set">

                    
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-default"  data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>