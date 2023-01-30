<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                List Of students
</header>

<?php
if(isset($_POST['showList']))
{
?>


<?php include('header.php');?>
<?php


require_once('config.php');


    
 //$prop_id=$_SESSION['userId'];
 


   
    $course=$_POST['course'];
    

   
    $query1= "SELECT * FROM Marks_Distribution where Course='$course' " ;
 
   if($result= $mysqli->query($query1))
   {
       while($row=$result->fetch_object())
       {
           $prop=$row->Professor_Id;
           $program=$row->Program;
        
          
       }}
       $query1= "SELECT * FROM Professors where Professors_ID='$prop' " ;

       if($result= $mysqli->query($query1))
       {
           while($row=$result->fetch_object())
           {
               $Dept=$row->Department;
                //echo $Dept;
           }}
          
           
           $query1= "SELECT * FROM student where DEPART='$Dept' " ;

           ?>
           <table class="table table-striped table-advance table-hove">
           <tbody>
               <tr>
                   <th><?php echo "Course:- $course"?></th>
                   
                   <th><?php echo "Branch:- $Dept"?></th>
                   <th><?php echo "Program:- $program"?></th>
                  
       </tr>
       
       <?php
           
           ?>



           <tr>
           <th><?php echo "Reg. Number"?></th>
           <th><?php echo "Name"?></th>
           <th><?php echo "Email"?></th>
           
</tr>
<?php
           if($result= $mysqli->query($query1))
           {
               while($row=$result->fetch_object())
               {
                   $stu=$row->Student_id;
                   ?>
                   <tr>
                   <th><?php echo $stu  ?> </th>
                   <th><?php echo $row->P_name  ?> </th>
                   <th><?php echo $row->EMAIL  ?> </th>  
               </tr>
                   <?php
                   
               }}
       


      

   // $sem=$_POST['sem']; 

   ?>
   <tbody>
</table><?php
    
  
}


?>
