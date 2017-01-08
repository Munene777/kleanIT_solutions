



<!-- add a garment Modal -->
<div id="add_garment_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Garment</h4>
      </div>
      <div class="modal-body">
         <form role="form" action="insertNewGarment" method="post" id="add_garment">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="garmentype">Garment Type</label>
                      <input type="text" class="form-control" id="garmentype" name="garmentype" placeholder="Garment Type" required="required">
                    </div>

                    
                     <div class="form-group">
                      <label for="desc">Description</label>
                      <input type="text" class="form-control" id="desc" name="desc" placeholder="Description" required="required">
                    </div>
                    <div class="form-group">
                      <label for="normal">Normal Cost</label>
                      <input type="text" class="form-control" id="normal" name="normal" placeholder="Normal Charges" required="required">
                    </div>

                    <div class="form-group">
                      <label for="express">Express Cost</label>
                      <input type="text" class="form-control" id="express" name="express" placeholder="Express Charges" required="required">
                    </div>

                     <div class="form-group">
                      <label for="special">Special Cost</label>
                      <input type="text" class="form-control" id="special" name="special" placeholder="Special Charges" required="required">
                    </div>

                    <div class="form-group">
                      <label for="pressing">Pressing Only</label>
                      <input type="text" class="form-control" id="pressing" name="pressing" placeholder="Pressing Charges" required="required">
                    </div>

                     <div class="form-group">
                      <label for="others">Others</label>
                      <input type="text" class="form-control" id="others" name="others" placeholder="Other Charges" required="required">
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

<!--edit garment detials Modal -->
<div id="edit_garment_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Garment Details</h4>
      </div>
      <div class="modal-body">
       <form role="form" action="updateGarment" method="post">
                  <div class="box-body">
                  <div class="form-group">
                      <label for="edit_garmentype">Garment Type</label>
                      <input type="text" class="form-control" id="edit_garmentype" name="edit_garmentype" placeholder="Garment Type" required="required">
                    </div>

                    
                     <div class="form-group">
                      <label for="edit_desc">Description</label>
                      <input type="text" class="form-control" id="edit_desc" name="edit_desc" placeholder="Description" required="required">
                    </div>
                    <div class="form-group">
                      <label for="edit_normal">Normal Cost</label>
                      <input type="text" class="form-control" id="edit_normal" name="edit_normal" placeholder="Normal Charges" required="required">
                    </div>

                    <div class="form-group">
                      <label for="edit_express">Express Cost</label>
                      <input type="text" class="form-control" id="edit_express" name="edit_express" placeholder="Express Charges" required="required">
                    </div>

                     <div class="form-group">
                      <label for="edit_special">Special Cost</label>
                      <input type="text" class="form-control" id="edit_special" name="edit_special" placeholder="Special Charges" required="required">
                    </div>

                    <div class="form-group">
                      <label for="edit_pressing">Pressing Only</label>
                      <input type="text" class="form-control" id="edit_pressing" name="edit_pressing" placeholder="Pressing Charges" required="required">
                    </div>

                     <div class="form-group">
                      <label for="edit_others">Others</label>
                      <input type="text" class="form-control" id="edit_others" name="edit_others" placeholder="Other Charges" required="required">
                    </div>

                     <input type="hidden" name="categoryId" id="categoryId" value="not_set" >
                   
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
<!--delete garment Modal -->
<div id="del_garment_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Garment Details</h4>
      </div>
      
      <form action="delGarment" method="post">
      <div class="modal-body">
      <input type="hidden" name="del_categoryId" id="del_categoryId" value="not_set" >
     
        <p>Are you sure you want to delete this garment?</p>
      </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-primary " value="OK" >
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
       </form>
    </div>

  </div>
</div>