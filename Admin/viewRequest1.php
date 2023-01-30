<?php include('header.php');?>
<main id="main" class="main">
<div class ="row">
    <div class ="col-lg-12">
        <section class ="panel">
            <header class="panel-heading">
           Request For registrations 
        
</header>





<table class="table table-striped table-advance table-hove">
    <tbody>
        <tr>
        <th><i class="icon_profile"></i>Name</th>
           
           
            <th><i class="icon_profile"></i>Department</th> 
            <th><i class="icon_profile"></i>Email</th>
            <th><i class="icon_profile"></i>DOB</th>
           
            <th><i class="icon_profile"></i></th>
            <th><i class="icon_profile"></i></th>
           
           
</tr>

<?php
session_start();
require_once('config.php');

// $query = "SELECT COUNT(*) as count FROM student WHERE Program='BTech'";
// $result = $mysqli->query($query);
// $row = $result->fetch_assoc();
// $count = $row['count'];

// $query = "SELECT COUNT(*) as count1 FROM student WHERE Program='MTech'";
// $result = $mysqli->query($query);
// $row = $result->fetch_assoc();
// $count1 = $row['count1'];
//echo $count1;


    $query1= "SELECT * FROM Professors where Approved=0 " ;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            ?>
             <tr>
  
             <td><?php echo $row->NAME; ?> </td>
             <td><?php echo $row->Department; ?> </td>
             <td><?php echo $row->EMAIL; ?> </td>
             <td><?php echo $row->DOB;?> </td>
             
             <td>   <input type="button"class ="btn btn-primary" onclick="location.href='AddPROFESSOR1.php?id=<?php echo $row->Professors_ID ?>';" value="Add professor" />     </td>
             <td>  <input type="button" class="btn btn-primary" name='del' onclick="location.href='deleterequest1.php?id=<?php echo $row->Professors_ID ?>';" value="Delete Request" />    </td>
             <!-- $pname=$row->Parent_name;
            //  echo $row->Course; 
             $depart=$row->DEPART;
             $email=$row->EMAIL;
             $dob=$row->date_of_birth;
             $gender=$row->Gender;
             $program=$row->Program;
              -->
        </tr>
<?php
        }}

       
        
       

        



        






?>







<tbody>
</table>
</section>
</div>
</div>

</main>

<?php include('footer.php');?>