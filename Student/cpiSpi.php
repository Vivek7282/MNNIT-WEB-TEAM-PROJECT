
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                RESULT
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            <th><i class="icon_profile"></i>Course</th>
            <th><i class="icon_profile"></i>Grade</th>
            <th><i class="icon_profile"></i>Credit</th>
</tr>
<?php include('header.php');?>
<?php

require_once('config.php');

$spi=0;
$total_sub=0;
$PASS=1;
$toc=0;

    $query1= "SELECT * FROM Permissions where Ind=0  " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
            $res=$row->Result;
             $sem=$sem-1;
        }}
        
        

       $d= $_SESSION['userId'] ;
       // $d=$row->Reg_No;
       // echo $d;
       

$query= "SELECT * FROM Marks_Table  where Semester='$sem' and Reg_No='$d' " ;
    

    if($res!=0 && $result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            
         $total_sub++;
            ?>
            <tr>

    <td><?php echo $row->Course   ?> </td>

   <?php $marks= $row->TA+ $row->Mid_sem+ $row->End_sem + $row->Practical +$row->Internal; 
   $e=10;
   $toc+= $row->Credit ;
      
   ?>
  <?php
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
        


        ?>
        <tr>
                    <th><i class="icon_profile"></i></th>
                    
                    
                    <th><i class="icon_profile"></i>Spi</th>
                  <?php $spi1= number_format((float)$spi/$toc, 2, '.', '') ?>
                    <th><?php echo  $spi1   ?> </th>
                   
        </tr>
        <tr>
                    <th><i class="icon_profile"></i></th>
                    <th><i class="icon_profile"></i></th>
                    <th><?php    ?> </th>
                   
        </tr>
        <tr>
            <?php
        
    }
    
    else{
        ?>
        
       <?php echo "Results have been not declared"?>
       <?php
    }

?>




    <!-- $status="FAIL"; -->
<?php  
if($PASS==1)
{$status="PASS";}
 else if($PASS==-1)
 {
$status= "supply";
               }
               else{
                $status="Fali"; 
               }
              
            
            ?> 
            <th><i class="icon_profile"></i></th>
            <th><i class="icon_profile"></i>RESULT STATUS</th>
            
            <th><?php echo  $status  ?> </th>
           
</tr>




<tbody>
</table>
</section>
</div>
</div>

</main>

<?php include('footer.php');?>