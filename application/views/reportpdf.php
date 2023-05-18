<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>
        Report PDF
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
   
</head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro');
        *{
            font-family: 'Kdam Thmor Pro', sans-serif;
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
    <h1 style="font-size: 40px;color:blue;font-weight:bold;text-align: center;" >Generated Report</h1>
    
    <?php

    $i=1;
    foreach ($formdata as $key => $value) {
        if ($i==1){
            $year="First Year";
            echo '</table><br/><h1 style="font-size: 20px;color:red;font-weight:bold;text-align: center;" >'.$year.'</h1>';
            echo '<table class="table">
    <thead>
    <th>Course Code</th>
    <th>Course GPA</th>
    </thead>'; 
                   }    
        if ($i==12){
            $year="Second Year";
            echo '</table><br/><h1 style="font-size: 20px;color:red;font-weight:bold;text-align: center;" >'.$year.'</h1>';
            echo '<table class="table">
    <thead>
    <th>Course Code</th>
    <th>Course GPA</th>
    </thead>';  
                   }
        
        if ($i==23){
        $year="Third Year";
        echo '</table><br/><h1 style="font-size: 20px;color:red;font-weight:bold;text-align: center;" >'.$year.'</h1>'; 
        echo '<table class="table">
    <thead>
    <th>Course Code</th>
    <th>Course GPA</th>
    </thead>'; 
    }              
    echo '
    <tbody>

        <tr>
        <td>'.$key.'</td>
        <td>'.$value.'</td>

        </tr>';
    $i++;
}
    
?>
</body>
</html>