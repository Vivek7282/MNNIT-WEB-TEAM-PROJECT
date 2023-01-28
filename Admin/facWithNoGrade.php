<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
                Professors Who Have Not Entered Marks 
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
        <th><i class="icon_profile"></i>Course</th>
            <th><i class="icon_profile"></i>Professor Id</th>
            
            <th><i class="icon_profile"></i>No of students</th>
            <th><i class="icon_profile"></i>Program</th>
           
</tr>

<?php
session_start();
require_once('config.php');

$query = "SELECT COUNT(*) as count FROM student WHERE Program='BTech'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
$count = $row['count'];

$query = "SELECT COUNT(*) as count1 FROM student WHERE Program='MTech'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
$count1 = $row['count1'];
//echo $count1;


    $query1= "SELECT * FROM Marks_Distribution " ;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
             $course1=$row->Course;
            //  echo $row->Course; 
             $prop_id=$row->Professor_Id;
             $program=$row->Program;
             
             


             $stmt = $mysqli->prepare("SELECT * FROM Marks_Table where Course=?");
$stmt->bind_param("s", $course1);
$stmt->execute();
$result1 = $stmt->get_result();
$count2 = mysqli_num_rows($result1);
            //  echo $count2;
            if( $program=="BTech" && $count2 !=$count){
               // echo $count;
                ?>
                <tr>
                <th><?php echo $course1  ?> </th>
                 <th><?php echo $prop_id   ?> </th>
               

<?php
                if($program=="BTech" && $count2==0){
                    ?>
                    <th><?php echo "ALL"  ?> </th>
                    <th><?php echo "BTech"  ?> </th>
                    <?php
                }
                else{
                    ?>
                    <th><?php echo $count2  ?> </th>
                    <th><?php echo "BTech"  ?> </th>
                    <?php 
                }
               
                ?>
            </tr>
                <?php
            }
            if( $program=="MTech" && $count2!='$count1'){
                // echo $count;
                 ?>
                 <tr>
                 <th><?php echo $course1  ?> </th>
                  <th><?php echo $prop_id   ?> </th>
                 
                 <?php
                if($count2==0){
                    ?>
                    <th><?php echo "ALL"  ?> </th> 
                     <th><?php echo "MTech"  ?> </th>
                    <?php
                }
                else{
                    ?>
                    <th><?php echo $count2  ?> </th>
                    <th><?php echo "MTech"  ?> </th>
                    <?php 
                }
               
                ?>


             </tr>
                 <?php
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