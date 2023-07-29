<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Transcript
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
       

<?php
session_start();
require_once('config.php');


    $query1= "SELECT * FROM Permissions " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
            // echo $sem;
        }}
        
        
        ?>
        <?php
         $cpi=0.0;
         $cpi1=0.00;
         $tolc=0;
         $d= $_SESSION['userId'] ;

         for($i=1;$i<$sem;$i++){
            
            $query= "SELECT * FROM Marks_Table  where Semester='$i' and Reg_No='$d' " ;
            ?>
            <tr>
            
            <th><i class="icon_profile"></i>Semester </th>
            <th><i class="icon_profile"></i> </th>
            <th><?php echo  $i  ?> </th>
</tr>
             <tr>
            <th><i class="icon_profile"></i>Course</th>
            <th><i class="icon_profile"></i>Grade</th>
            <th><i class="icon_profile"></i>Credit</th>
</tr>

            
            
            <?php 
            $spi=0;
           
$total_sub=0;
$toc=0;
$PASS=1;

        $query= "SELECT * FROM Marks_Table  where Semester='$i' and Reg_No='$d' " ;
    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            
         $total_sub++;
         ?>
            <tr>

    <td><?php echo $row->Course   ?> </td>

   <?php $marks= $row->TA+ $row->Mid_sem+ $row->End_sem + $row->Practical +$row->Internal; 
   $e=10;
  $toc+=$row->Credit;
  $tolc+=$row->Credit;
   $grade;
   if($marks>=85)
   {$grade='A+'; $spi=$spi + 10 * $row->Credit ;}
   else if($marks>=75)
   {$grade='A'; $spi=$spi + 9 * $row->Credit ;}
   else if($marks>=65)
   {$grade='B+'; $spi=$spi + 8 * $row->Credit ;}
   else if($marks>=55)
   {$grade='B'; $spi=$spi + 7 * $row->Credit ;}
   else if($marks>=45)
   {$grade='c'; $spi=$spi + 6 * $row->Credit ;}
   else if($marks>=35)
   {$grade='D'; $spi=$spi + 5 * $row->Credit ;}
   else if($marks>=30)
   {$grade='E'; $spi=$spi + 4 * $row->Credit ;$PASS=-1;}
   else 
   {$grade='F'; $spi=$spi + 3 * $row->Credit ;$PASS=0;}
   
   
   ?>
    <td><?php   echo $grade ?> </td>

    <td><?php echo $row->Credit   ?> </td>
    
    <td>





          
</div>
</td>
</tr>
<?php
        }
        



        
    }
    ?>

         <td><i class="icon_profile"></i></td>
          <td><i class="icon_profile"></i>SPI</td>
          <?php   $spi1=number_format((float)$spi/$toc, 2, '.', '')   ?> 
            <td><?php echo  $spi1   ?> </td>
            <td><i class="icon_profile"></i></td>
            <?php $cpi= $cpi+$spi?> 
            <?php $cpi1+=$spi1 ?>
            <?php $cpi2=number_format((float)$cpi/($tolc),2,'.','') ?>
          
    <?php

    ?>
    <tr>
    <?php  
if($PASS==1)
{$status="PASS";}
 else if($PASS==-1)
 {
$status= "supply";
               }
              
            
            ?> 
            <th><i class="icon_profile"></i></th>
            <th><i class="icon_profile"></i>RESULT STATUS</th>
            
            <th><?php echo  $status  ?> </th>
           
</tr>
</tr>
<?php


$query111="INSERT INTO CPISPI(student_reg,semester,spi,cpi,totalCredit)
 VALUES ('$d','$i','$spi1','$cpi2','$toc')";
if($result111= $mysqli->query($query111))
{ 
     echo ".";
   
}
else{
     echo " . ";
}



}



?>


<tr>
    
    <!-- $status="FAIL"; -->
<?php  
if($PASS=1)
{$status="PASS";}
 else if($PASS=-1)
 {
$status= "You have supplementary examinations.";
               }
              
            
            ?> 
            <th><i class="icon_profile"></i></th>
            <th><i class="icon_profile"></i>CPI</th>
            
            <th><?php echo number_format((float)$cpi/($tolc),2,'.','') ?> </th>
           
</tr>




<tbody>
</table>
</section>
</div>
</div>




<?php
$data = array();

// Connect to the database and fetch the data
// $conn = mysqli_connect("host", "username", "password", "database");
$result = mysqli_query($mysqli, "SELECT semester, cpi, spi FROM CPISPI WHERE student_reg = '$d'");

// Store the data in an array
while ($row = mysqli_fetch_array($result)) {
    
    $data[$row['semester']] = array("cpi" => $row['cpi'], "spi" => $row['spi']);
}

// Close the connection
// mysqli_close($conn);

// Use the Google Charts API to create the graph
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Semester', 'CPI', 'SPI'],
          <?php
          foreach ($data as $semester => $values) {
              echo "['$semester', " . $values['cpi'] . ", " . $values['spi'] . "],";
          }
          ?>
        ]);

        var options = {
          title: 'CPI and SPI over Semesters',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 1000px; height: 500px"></div>
  </body>
</html>
















</main>

<?php include('footer.php');?>