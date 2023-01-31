
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
            <th><i class="icon_profile"></i>Course</th>
            <th><i class="icon_profile"></i>Program</th>
            <th><i class="icon_profile"></i>category</th>
            <th><i class="icon_profile"></i>Credit</th>
</tr>
<?php include('header.php');?>
<?php

require_once('config.php');

$query1= "SELECT * FROM Permissions where Ind=0 " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
             
        }}
        

       $d= $_SESSION['userId'] ;
       

$query= "SELECT * FROM Marks_Distribution  where  Professor_Id='$d' and Semester='$sem' " ;
    

    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            
        
            ?>
            <tr>

    <td><?php echo $row->Course   ?> </td>
    <td><?php echo $row->Program   ?> </td>
    <td><?php echo $row->category   ?> </td>
    <td><?php echo $row->Credit   ?> </td>


   





          
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