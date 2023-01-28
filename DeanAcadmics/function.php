



<?php
session_start();
require_once('config.php');
//patients appointment

   
    


//message
if(isset($_POST['message2']))
{
  
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject1'];
    $message=$_POST['message1'];
    
   


    $query="INSERT INTO Message(A_Name,EMAIL,A_subject,Info) VALUES ('$name','$email','$subject','$message')";
    
        if($mysqli->query($query)===true)
        {
            
                //   move_uploaded_files($_FILES["photo"]['tmp_name'], $path);
                header('location:index.php?msg=Message sent successfully '); 
        }
    
    
        else{
            header('location:index.php?msg = ERROR1 ');
        }
        // move_uploaded_file($_FILES["photo"]["tmp_name," ]);
    
    
    
    }
    





//Appointment List


// if(isset($_POST['appoint']))
// {
   
//     $name=$_POST['name'];
//     $date=$_POST['date'];
//     $doctor=$_POST['doctor'];
   


//     $query="INSERT INTO APPOINTMENTS(P_ID,D_ID,DATE_OF_APPOINTMENT,DATE_OF_CREATION) VALUES ('$name',$doctor,'$date','$date')";
    
//         if($mysqli->query($query)===true)
//         {
            
//                 //   move_uploaded_files($_FILES["photo"]['tmp_name'], $path);
//                 header('location:index.php?msg=Appointment Booked successfully '); 
//         }
    
    
//         else{
//             header('location:index.php?msg = ERROR1 ');
//         }
//         // move_uploaded_file($_FILES["photo"]["tmp_name," ]);
    
    
    
//     }






?>