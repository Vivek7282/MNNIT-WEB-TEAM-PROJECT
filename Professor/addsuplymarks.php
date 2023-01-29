
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
            <th><i class="icon_profile"></i></th>
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
            //echo $sem;
        }}
        
        

       $d= $_SESSION['userId'] ;
       // $d=$row->Reg_No;
       // echo $d;

$query= "SELECT * FROM Marks_Distribution  where Semester='$sem' and Professor_Id='$d'  " ;
    

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            
            $course=$row->Course;
            //echo $course;
            $query1= "SELECT * FROM Marks_Table  where  Course='$course'  " ;
            if($result= $mysqli->query($query1))
            {
                while($row=$result->fetch_object())
                {
                    ?>
                    <?php $marks= $row->TA+ $row->Mid_sem+ $row->End_sem + $row->Practical +$row->Internal; ?>
                    <?php if($marks>=30 && $marks<=34){
                        ?>
                           <td><?php echo $row->Reg_No   ?> </td>
                           <td><?php echo $row->Course   ?> </td> 

                           <?php

                $query2= "SELECT * FROM student where Student_Id='$row->Reg_No' " ;
    if($result2= $mysqli->query($query2))
    {
        while($row2=$result2->fetch_object())
        {
            $name=$row2->P_name;
            $program=$row2->Program;
            // echo $sem;
        }}
        ?>
        
                <td><?php echo $name   ?> </td>
               
                <td><?php echo $program   ?> </td>
                 

                <td>   <input type="button"class ="btn btn-primary" onclick="location.href='AddMarks.php';" value="Add Marks" />     </td>
<?php



                    }
                    

                }}

        
            ?>
           
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