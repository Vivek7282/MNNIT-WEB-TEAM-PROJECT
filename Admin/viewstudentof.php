<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                List of students
</header>

<?php
if(isset($_POST['showList']))
{
?>


<?php include('header.php');?>
<?php


require_once('config.php');


    
 //$prop_id=$_SESSION['userId'];
 


   
    $branch=$_POST['depart'];
    

    ?>
    <table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
           
       
            <th><?php echo "Student_id"?></th>
            <th><?php echo "Name"?></th>
            <th><?php echo "Branch: $branch"?></th>
           
</tr>

<?php 
    $query1= "SELECT * FROM student where DEPART='$branch' " ;
 
   if($result= $mysqli->query($query1))
   {
       while($row=$result->fetch_object())
       {
        ?>
                   <tr>
                   <th><?php echo $row->Student_id  ?> </th>
                   <th><?php echo $row->P_name  ?> </th> 
               </tr>
                   <?php
          
       }}
       
           
           
       


      

   // $sem=$_POST['sem']; 

   ?>
   <tbody>
</table><?php
    
  
}


?>
