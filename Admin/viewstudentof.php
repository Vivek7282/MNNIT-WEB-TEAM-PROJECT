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
        <tr> <th><?php echo "Branch: $branch"?></th></tr>
        <tr>
           
       
            <th><?php echo "Student_id"?></th>
            <th><?php echo "Name"?></th>
            <th><?php echo "Program"?></th>
            <th><?php echo "Email"?></th>
           
           
</tr>

<?php 
    $query1= "SELECT * FROM student where DEPART='$branch' and Approved=1 " ;
 
   if($result= $mysqli->query($query1))
   {
       while($row=$result->fetch_object())
       {
        ?>
                   <tr>
                   <td><?php echo $row->Student_id  ?> </td>
                   <td><?php echo $row->P_name  ?> </td>
                   <td><?php echo $row->Program  ?> </td> 
                   <td><?php echo $row->EMAIL  ?> </td>   
               </tr>
                   <?php
          
       }}
       
           
           
       


      

   // $sem=$_POST['sem']; 

   ?>
   <tbody>
</table><?php
    
  
}


?>
