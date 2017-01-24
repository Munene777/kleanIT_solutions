 

 <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2017 KleanIT Solutions.</strong> All rights reserved.
      </footer>

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
     <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url() ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
     <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
   <!-- jvectormap -->
    <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url() ?>assets/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url() ?>assets/bootstrap/js/jquery.datetimepicker.full.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url() ?>assets/plugins/fastclick/fastclick.min.js"></script>
     <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
   
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
    <!-- page script -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/customer.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/garment.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/bootstrap/js/sidemenuTweek.js"></script>
    


    <script>
    function fetchCharges() {
 // alert($('#garmentTypeOrder').val());
            /* $.ajax({
            url: 'fetchCharges',
            method: 'POST',
            contentType: false,
            processData: false,
            cache: false,
            dataType: 'json',
            data: {id:$('#garmentTypeOrder').val() },
                success: function(data){


                    
                       alert("It worked");
                    },
                    error: function (response) {
                            alert("An error occurred"+response);
                        }


           
                        
                        //var x=document.getElementById("idd");
                        //document.getElementById(id).hide();
                       //document.getElementById(location).reset();


                    
                
            });*/

            $.post('fetchCharges',{id:$('#garmentTypeOrder').val() },
              function(data){
                var charges= data.split(" ");

                var optionText= ['Normal','Express','Special','Others'];

                var options= document.getElementById("serviceType");

                for(var i=0;i<charges.length;i++){
                  var option= document.createElement("option");
                  option.text=optionText[i];
                  option.value=optionText[i]+','+charges[i];
                  options.add(option);

                }
                
                
              });
        }

        function fetchOrder(form){

       form.submit();

        }
      $(function () {
        $("#orderProcessing").DataTable({

          "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
        });
        $("#readyGarments").DataTable();
         $("#paymentsSearch").DataTable();
         $("#orderPaymentProcessing").DataTable();
         $("#alreadyGarments").DataTable();
          $("#jobOrderPaymentReport").DataTable();
         
        $("#quickSearchCustomers").DataTable();
        $("#customers").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });


       $('#pickDate').datetimepicker({
        minDate:'2016/01/02', 
  maxDate:'2017/12/31'
       });
       $('#dropDate').datetimepicker({

       });

       $('#readyDate').datetimepicker({

       });
    </script>
  </body>
</html>
    
