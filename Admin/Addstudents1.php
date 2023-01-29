<?php 

require_once('config.php');
// $stu_id=1;
$stu_id = $_GET['id'];

$query1= "SELECT * FROM studentRequest where Student_id='$stu_id' " ;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $Program=$row->Program;
            $name=$row->P_name;
            $pname=$row->Parent_Name;
            $depart=$row->DEPART;
            $email=$row->EMAIL;
            $contact=$row->CONTACT;
             $dob=$row->Date_of_birth;
            //$dob=12-12-2001;
            $gender=$row->Gender;
            $prof="8767djhvadvh28dbjfe3f3";
        }}


        // if(!empty($dob)){
        //     $query = "INSERT INTO student SET Program='".mysqli_real_escape_string($mysqli,$Program)."', Gender='".mysqli_real_escape_string($mysqli,$gender)."', Date_of_birth='".mysqli_real_escape_string($mysqli,$dob)."', P_name='".mysqli_real_escape_string($mysqli,$name)."', Parent_Name='".mysqli_real_escape_string($mysqli,$pname)."', DEPART='".mysqli_real_escape_string($mysqli,$depart)."', EMAIL='".mysqli_real_escape_string($mysqli,$email)."', CONTACT='".mysqli_real_escape_string($mysqli,$contact)."', Profile_Image='".mysqli_real_escape_string($mysqli,$prof)."'";
        //     }
        //     else{

        // $query = "INSERT INTO student SET Program='".mysqli_real_escape_string($mysqli,$Program)."', Gender='".mysqli_real_escape_string($mysqli,$gender)."',
        //  Date_of_birth='".mysqli_real_escape_string($mysqli,$dob)."', P_name='".mysqli_real_escape_string($mysqli,$name)."',
        //   Parent_Name='".mysqli_real_escape_string($mysqli,$pname)."', DEPART='".mysqli_real_escape_string($mysqli,$depart)."',
        //    EMAIL='".mysqli_real_escape_string($mysqli,$email)."', CONTACT='".mysqli_real_escape_string($mysqli,$contact)."',
        //     Profile_Image='".mysqli_real_escape_string($mysqli,$prof)."'";

        //     }
    // $query = "INSERT INTO student SET Program='$Program',Gender='$gender',  Date_of_birth='$dob',
    //  P_name='$name', Parent_Name='$pname',DEPART='$depart',EMAIL='$email',CONTACT='$contact',
    //  Profile_Image='$prof'";


$query="INSERT INTO student(Student_id,Program,Gender,Date_of_birth,P_name,Parent_Name,DEPART,EMAIL,CONTACT,Profile_Image) 
VALUES ('$stu_id','$Program','$gender','$dob','$name', '$pname','$depart','$email','$contact','$prof' )";
    
    if($mysqli->query($query)){
    
        header('location:viewRequest.php?msg=student Added Successfully'); 
    }
    else{
        // echo $stu_id;
        header('location:viewRequest.php?msg=student NOT Added Successfully '); 
    }


?>


<?php include('footer.php'); ?>
