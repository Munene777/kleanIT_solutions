<!-- edit ready status of a garment Modal -->
<div id="edit_readyStatus_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Ready Status of a garment</h4>
      </div>
      <div class="modal-body">
         <form role="form" action="readyStatus" method="post" id="edit_readyStatus">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="ready">Ready? </label>

                      <select class="form-control" id="edit_ready" name="edit_ready">
                        
                        <option>No</option>
                        <option>Yes</option>
                      </select>
                     

                    </div>
                     <div class="form-group">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" id="readyDate" name="readyDate" placeholder="Date Ready" required="required">
                    </div>


                      <input type="hidden" name="orderId" id="orderId" value="not_set" >
                   
                  </div><!-- /.box-body -->
                  

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

<script >

  
</script>