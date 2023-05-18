<?php
//============================================================+
// File name   : example_061.php
// Begin       : 2010-05-24
// Last Update : 2014-01-25
//
// Description : Example 061 for TCPDF class
//               XHTML + CSS
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: XHTML + CSS
 * @author Nicola Asuni
 * @since 2010-05-25
 */

// Include the main TCPDF library (search for installation path).


// create new PDF document
require_once(APPPATH . 'libraries/tcpdf.php');

class MYPDF extends TCPDF {
    public function Header() {
        // Get the current page break margin
        $bMargin = $this->getBreakMargin();
    
        // Get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
    
        // Disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
    
        // Define the path to the image that you want to use as watermark.
        // Render the image
        
        // Restore the auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
    
        // Set the starting point for the page content
        $this->setPageMark();
    }
    }
    // $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
    $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
    
    // set default header data
    //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 061', PDF_HEADER_STRING);
    
    // set header and footer fonts
    //$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    //$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, 5, PDF_MARGIN_RIGHT);
    // $pdf->SetHeaderMargin(true);
    $pdf->SetFooterMargin(true);
    
    $pdf->SetPrintHeader(true);
    $pdf->SetPrintFooter(false);
    
    
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, 1);
    
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }
    
    // ---------------------------------------------------------
    
    // set font
    //$pdf->SetFont('helvetica', '', 10);
    // add a page
    $pdf->AddPage();
    
    /* NOTE:
     * *********************************************************
     * You can load external XHTML using :
     *
     * $html = file_get_contents('/path/to/your/file.html');
     *
     * External CSS files will be automatically loaded.
     * Sometimes you need to fix the path of the external CSS.
     * *********************************************************
     */
    
    // define some HTML content with style
    
    $html ='<!-- EXAMPLE OF CSS STYLE -->
    <style>
    .text-center
    {
      text-align: center;
    }
    .margin-top-minus
      {
        margin-top:-200px;
      }
    .text-right
    {
      text-align:right;
    }
    .border-apply
    {
      border:1px solid #000;
    
    }
    .font-size-wise
    {
      font-size:11px;
    }
    
    </style>';
    // $r = array("Parent Copy","Bank Copy "," School Copy");
    // $baseurl = base_url("assets/images/abcd.jpg");
    $html2 = '<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>
            Report PDF
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
    </head>
    <style>
            @import url("https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro");
            *{
                font-family: "Kdam Thmor Pro", sans-serif;
            }
            body{
                background-image: url("assets/background.jpg");
            }
      table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #000;
      }
      
      th, td {
        padding: 10px;
        text-align: center;
        border: 2px solid #000;
      }
      
      th {
        background-color: #000;
      }
    
    </style>
    <body>
        <h1 style="font-size: 40px;color:blue;font-weight:bold;text-align: center;" >Generated Report</h1>';
    
    $i=1;
    foreach ($formdata as $key => $value) {
        if ($i==1){
            $year="First Year";
            $html2.= '</table><br/><h1 style="font-size: 20px;color:red;font-weight:bold;text-align: center;" >'.$year.'</h1>';
            $html.= '<table class="table">
    <thead>
    <th>Course Code</th>
    <th>Course GPA</th>
    </thead>'; 
                   }    
        if ($i==12){
            $year="Second Year";
            $html2.= '</table><br/><h1 style="font-size: 20px;color:red;font-weight:bold;text-align: center;" >'.$year.'</h1>';
            $html2.= '<table class="table">
    <thead>
    <th>Course Code</th>
    <th>Course GPA</th>
    </thead>';  
                   }
        
        if ($i==23){
        $year="Third Year";
        $html2.= '</table><br/><h1 style="font-size: 20px;color:red;font-weight:bold;text-align: center;" >'.$year.'</h1>'; 
        $html2.= '<table class="table">
    <thead>
    <th>Course Code</th>
    <th>Course GPA</th>
    </thead>'; 
    }              
    $html2.= '
    <tbody>

        <tr>
        <td>'.$key.'</td>
        <td>'.$value.'</td>

        </tr>';
    $i++;
}
$pdf->writeHTML($html2, true, false, false, false, '');
$pdf->Output('marksheet.pdf', 'I');

?>

   
    
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    
    // ---------------------------------------------------------
    
    //Close and output PDF document
    $pdf->Output('marksheet.pdf', 'I');
    
    //============================================================+
    // END OF FILE
    //============================================================+
    
    ?>


