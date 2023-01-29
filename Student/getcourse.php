<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Courses
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
            <th><i class="icon_profile"></i>Course Name</th>
            <th><i class="icon_profile"></i>Category</th>
</tr>

<?php
session_start();
require_once('config.php');

$d= $_SESSION['userId'] ;
    $query1= "SELECT * FROM Current_Sem " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
          //  echo $d;
        }}
        $query1= "SELECT * FROM student where Student_id='$d' " ;

    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $depart=$row->DEPART;
            //echo $depart;
        }}



        $query= "SELECT * FROM Marks_Distribution  where Semester='$sem' " ; 
       
    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
        $cor= $row->Course  ;
        $prop=$row->Professor_Id;
        // echo $row->Course  ;
        // echo $row->Professor_Id; 


       

    $query1= "SELECT * FROM Professors where Professors_ID='$prop' " ;

if($result1= $mysqli->query($query1))
{
    while($row1=$result1->fetch_object())
    {
        $deprt=$row1->Department;
        //echo $row1->Department;
        if($deprt== $depart)
        ?>
        <tr>
         <td><?php echo $cor  ?> </td>
    <td><?php echo $row->category  ?> </td>
    </tr>
    <?php
    }}

        }}
?>
   
  
    
    <td>





          
</div>
</td>
</tr>
<?php
        
        



        
    
    





?>





<tbody>
</table>
</section>
</div>
</div>

</main>

<?php include('footer.php');?>