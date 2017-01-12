<!-- add a garment order Modal -->
<div id="add_garmentOrder_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Garment Order</h4>
      </div>
      <div class="modal-body">
         <form role="form" action="insertNewGarment" method="post" id="add_garment">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="garmentype">Garment Type</label>
                      <select class="form-control" id="garmentTypeOrder" name="garmentTypeOrder" onchange="fetchCharges()">
                      <option>....</option>
                      <?php
                      if(!empty($category))
                        foreach ($category as $cat) {
                          # code...
                          echo '<option value="'.$cat->categoryid.'">'.$cat->garmentype.'</optio>';
                        }
                        ?>
                      </select>
                    
                    </div>
                    <div class="form-group">
                      <label for="serviceType">Service Type :</label>
                      <select class="form-control" id="serviceType" name="serviceType">
                    
                      </select>
                    </div>


                    <div class="form-group">
                      <label for="garmentInspection">Garment Inspection :</label>
                      <select class="form-control" id="garmentInspection" name="garmentInspection">
                     <option>OK</option>
                     <option>Faded</option>
                     <option>Teer</option>
                     <option>Stained</option>
                      </select>
                    </div>

                    <input type="hidden" name="newGarmentOrder" id="newGarmentOrder" value="not_set">
                    <input type="hidden" name="serviceTypeText" id="serviceTypeText" value="not_set">

                    

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
