
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                My Courses
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            
            <th><i class="icon_profile"></i>Reg_NO</th>
            <th><i class="icon_profile"></i>Program</th>
            <th><i class="icon_profile"></i>Total Marks</th>
            
</tr>
<?php include('header.php');?>
<?php

require_once('config.php');

$query1= "SELECT * FROM Current_Sem " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
             
        }}
        

       $d= $_SESSION['userId'] ;
       $query1= "SELECT * FROM Marks_Distribution where Professor_Id='$d' " ;
    if($result= $mysqli->query($query1))
    {
        while($row1=$result->fetch_object())
        {
            ?>
            <tr>
            <th><i class="icon_profile"></i></th>
            <th><i class="icon_profile"></i>Course</th>
            <th><?php echo $row1->Course ?></th>
           <?php $program=$row1->Program;?>
            
            </tr>
            <?php
        
      $course=$row1->Course;

$query= "SELECT * FROM Marks_Table  where   Semester='$sem' and Course='$course' " ;
    

    if($result1= $mysqli->query($query))
    {
        while($row=$result1->fetch_object())
        {
            
        
            ?>
            <tr>

    <td><?php echo $row->Reg_No   ?> </td>
    <td><?php echo $program   ?> </td>


    <?php $totalM=$row->TA+$row->Mid_em+$row->End_sem+$row->Practical+$row->Internal;?> 
    <td><?php echo $totalM   ?> </td>
   


   



        

          
</div>
</td>
</tr>
<?php
        }
    }
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