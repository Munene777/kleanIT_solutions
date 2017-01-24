<?php
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Job Order Payment Summary";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
 ob_start();
    // we can have any view part here like HTML, PHP etc
echo '
 <table cellspacing="0" cellpadding="1" border="1">
                    <thead>
                      <tr>
                      
                      <th>Job Order Number</th>
                         <th>Total Collection</th>
                        <th>Total Amount Paid</th>
                        <th>Outstanding bal</th>
                        

                      </tr>
                    </thead>
                    <tbody>
                       ';
                       $totalAmount=0;
                       $totalPaid=0;
                       $totalBal=0;
                       if(!empty($orders)){

                      foreach ($orders as $order)
                    {
                      $amount=0;
                      $paid=0;
                      $bal=0;
                      foreach ($garments as $garment) {
                        # code...
                        if($order->jobcard_id == $garment->jobcard_id){
                         $amount += $garment->charges; 
                         $paid +=$garment->deposit;
                        }

                      }
                      $totalAmount +=$amount;
                      $totalPaid +=$paid;
                      $bal= $amount- $paid;

                      $totalBal +=$bal;
                      echo '
                      <tr>
                     
                      
                      <td>'.$order->jobcard_id.'</td>
                      <td>'.$amount.'</td>
                        <td>'.$paid.'</td>
                        
                        <td >'.$bal.'</td>
                      
                      </tr>';
                    }
                  }
                echo '
                     </tbody>
                    <tfoot>
                        <tr>
                      
                      <th>Grad Total</th>
                         <th style="color:red">'.$totalAmount.'</th>
                        <th style="color:red">'.$totalPaid.'</th>
                        <th style="color:red">'.$totalBal.'</th>
                        
                        
                      </tr>
                    </tfoot>
                  </table>';
    $content = ob_get_contents();
ob_end_flush();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('output.pdf', 'I');


