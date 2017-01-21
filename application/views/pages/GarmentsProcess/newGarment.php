
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
            <li><a href="#">New Garment</a></li>
           
          </ol>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
             

              <div class="box">
                <div class="box-header">
                 <h3>Add a new Garment
                 <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#add_garment_modal">New Garment</button></h3>

                </div><!-- /.box-header -->
                <div class="box-body">

                   <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <th class="hidden"></th>
                      <th>Garment Type</th>
                         <th>Description</th>
                        <th>Normal Cost</th>
                        <th>Express Cost</th>
                        <th>Special Cost</th>
                        <th>Pressing Only</th>
                        <th>Other Charges</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                  
                   <?php
                       if(!empty($garments)){
                      foreach ($garments as $garment)
                    {
                      echo '
                      <tr>
                      <td class="hidden">'.$garment->categoryid.'</td>
                      <td>'.$garment->garmentype.'</td>
                        <td >'.$garment->description.'</td>
                        <td>'.$garment->charges.'</td>
                       <td>'.$garment->express.'</td>
                       <td>'.$garment->special.'</td>
                       <td>'.$garment->pressing.'</td>
                       <td>'.$garment->others.'</td>
                       
                        
                         <td><a class="btn btn-link editGarment"  data-toggle="modal" data-target="#edit_garment_modal">Edit</a></td>
                        <td><a class="btn btn-link delGarment"  data-toggle="modal" data-target="#del_garment_modal">Del</a></td>        
                      </tr>';
                    }
                  }
                      ?>
                    </tbody>
                    <tfoot>
                      <tr>
                      <th class="hidden"></th>
                     <th>Garment Type</th>
                         <th>Description</th>
                        <th>Normal Cost</th>
                        <th>Express Cost</th>
                        <th>Special Cost</th>
                        <th>Pressing Only</th>
                        <th>Other Charges</th>
                        <th></th>
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
 $this->load->view('pages/GarmentsProcess/modals/newGarmentModals');

?> 
  <?php
 $this->load->view('footer');

?>