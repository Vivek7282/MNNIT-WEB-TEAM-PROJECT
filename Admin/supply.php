
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                List of Student with Supply
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
        <th><i class="icon_profile"></i>Reg. Number</th>
        <th><i class="icon_profile"></i>Course</th>
            <th><i class="icon_profile"></i>Name</th>
            
            <th><i class="icon_profile"></i>Program</th>
</tr>
<?php include('header.php');?>
<?php

require_once('config.php');

$spi=0;
$total_sub=0;
$PASS=1;
$toc=0;

    $query1= "SELECT * FROM Current_Sem " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
            // echo $sem;
        }}
        
        

       //$d= $_SESSION['userId'] ;
       // $d=$row->Reg_No;
       // echo $d;
       $sem1=$sem;
       $sem--;

//$query= "SELECT * FROM Marks_Distribution  where (Semester='$sem' OR Semester='$sem1')  and Professor_Id='$d'  " ;
    
$query= "SELECT * FROM Marks_Table  where Semester='$sem' OR Semester='$sem1'  " ;
    

    if($result1= $mysqli->query($query))
    {
        while($row=$result1->fetch_object())
        {
            
        
            ?>
            <?php $marks= $row->TA+ $row->Mid_sem+ $row->End_sem + $row->Practical +$row->Internal; ?>
            <tr>
<?php
            if($marks>=30 && $marks<=34){
                ?>
                <td><?php echo $row->Reg_No   ?> </td>
                <td><?php echo $row->Course   ?> </td>
<?php
                $query1= "SELECT * FROM student where Student_Id='$row->Reg_No' " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $name=$row->P_name;
            $program=$row->Program;
            // echo $sem;
        }}
        ?>
        
                <td><?php echo $name   ?> </td>
               
                <td><?php echo $program   ?> </td>

<?php
            }
            
        

    
?>





          
</div>
</td>
</tr>
<?php
        }
        



        
    }
    





?>



<tbody>
</table>
</section>
</div>
</div>

</main>

<?php include('footer.php');?>