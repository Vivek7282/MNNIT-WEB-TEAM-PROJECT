<?php 

require_once('config.php');
// $stu_id=1;
$prop_id = $_GET['id'];

$query1= "SELECT * FROM ProfessorsRequest where Professors_ID='$prop_id' " ;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $name=$row->NAME1;
            
            $depart=$row->Department;
            $email=$row->EMAIL;
            $contact=$row->CONTACT;
             $dob=$row->DOB;
            //$dob=12-12-2001;
            $pass=$row->passwor;
            $prof="8767djhvadvh28dbjfe3f3";
        }}


   $query="INSERT INTO Professors(Professors_ID,NAME,EMAIL,CONTACT,passwor,Department,DOB,profile_Image) 
   VALUES ('$prop_id','$name','$email','$contact','$pass', '$depart','$dob','$prof' )";
         



    if($mysqli->query($query)){
    
        header('location:viewRequest1.php?msg=student Added Successfully'); 
    }
    else{
         //echo $name;
           header('location:viewRequest1.php?msg=student NOT Added  '); 
    }


?>


<?php include('footer.php'); ?>
