



<?php
session_start();
require_once('config.php');


//user login code
if(isset($_POST['addDoc']))
{

    $email=$_POST['email'];
    $pass=($_POST['pass']);
    
    $query= "SELECT * FROM Professors where email= '$email' and passwor='$pass' ";
    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            
            
            $_SESSION['userId'] = $row->Professors_ID;
            $_SESSION['userName'] = $row->NAME;
            $_SESSION['usePic'] = $row->profile_Image; 
            $_SESSION['course'] = $row->Course;  
            $_SESSION['email'] = $row->EMAIL;  
            $_SESSION['con'] = $row->CONTACT;       
            $_SESSION['d_id'] = $row->Department; 
            $_SESSION['dob'] = $row->DOB;     
            header('location:professorDashboard.php');
        }
    }
    else{
        header('location:index.php?msg="Invalid Email Password"'); 
    }

}






//cahnge Password
if(isset($_POST['change']))
{

    $old=$_POST['old'];
    $new=$_POST['new'];
    $d= $_SESSION['userId'];
    $query= "SELECT * FROM Professors where passwor='$old' and Professors_ID='$d' ";
    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            
            
            $query1="UPDATE Professors SET passwor = '$new' WHERE Professors_ID='$d'";
            if($result1= $mysqli->query($query1)){
            header('location:professorDashboard.php?msg="Changed Password Successfully"');}
            else{
                header('location:professorDashboard.php?msg=" Password not updated"');  
            }
        }
    }
    else{
        header('location:professorDashboard.php?msg="Invalid old Password"'); 
    }
    header('location:professorDashboard.php?msg="Invalid old Password"'); 
}















// view Courses




if(isset($_POST['viewCourse']))
{

    $user=$_SESSION['userId'];
   
    
    $query= "SELECT * FROM Marks_Distribution where Professor_Id= '$user'  ";


    
    if($result= $mysqli->query($query))
    {
    
        while($row=$result->fetch_assoc())
        {

           
           echo "Course Name:- " . $row["Course"]. "   Category:- ". $row["category"]. "<br>";


           
        }
       
    }
    else{
        header('location:viewCourses.php?msg="No Course found"'); 
        
    }

}








// add courses
if(isset($_POST['addCourses']))
{
   
   
    $ctype=$_POST['ctype'];

    $query= "SELECT * FROM Permissions where Course_Entry= 'YES'  "; 
    $co=0;
    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            $co=$co+1;
        }
    }
    if ($co==1){
   
    
        if( $ctype=="Theory")
    {
       

            header('location:marksdistribution.php');
        
    }
    else if( $ctype=="Practical")
    {
       
            header('location:marksdistribution2.php');
        
    }
    else{ 

        header('location:addCourses.php?msg= Course Not added ');
    }
}
else{
    header('location:addCourses.php?msg= Adding Course Not Allowed '); 
}

}

// add marks Theory
if(isset($_POST['addMarks1']))
{
    
    $prop_id=$_SESSION['userId'];
 //$_SESSION['userId'] = $row->Professors_ID;

    //$prop_id= $_SESSION['userId'];
    
    //$prop_id=$_POST['id'];
    $cname=$_POST['cname'];
    $ta11=$_POST['ta1'];
    $credit=$_POST['credit'];
    $mid=$_POST['mid'];
    $program=$_POST['program'];

    $query1= "SELECT * FROM Permissions " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
            // echo $sem;
        }}
        


   // $sem=$_POST['sem'];
    $end=$_POST['end'];
    $cat="Theory";
    $IN=0;
    $query="INSERT INTO Marks_Distribution(Course,Program,Professor_Id,category,Credit,Semester,Teaching_Assesment,Internals,Mid_sem,End_sem,Practicals) VALUES ('$cname','$program','$prop_id', '$cat','$credit','$sem','$ta11','$IN','$mid', '$end','$IN' )";
    
    
    
        if($mysqli->query($query) === true)
    {
       
            header('location:AddCourses.php?msg = marks Added Successfully ');
        
    }
    
    else{ 

        header('location:marksdistribution.php?msg= Marks Not added 11  ');
    }

}

// add marks Practicals
if(isset($_POST['addMarks2']))
{
 
    //$prop_id1=$_POST['id2'];
    $prop_id1=$_SESSION['userId'];
    $cname2=$_POST['cname1'];
    $credit=$_POST['credit'];
    $ta12=$_POST['ta12'];
    $IN1=$_POST['inter'];
    $program=$_POST['program'];
    //$sem=$_POST['sem1'];


    $query1= "SELECT * FROM Permissions " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
            // echo $sem;
        }}
    $practical=$_POST['practical'];
    $mid1=0;
    $end1=0;
    $cat="Practical";
    $query="INSERT INTO Marks_Distribution(Course,Program,Professor_Id,category,Credit,Semester,Teaching_Assesment,Internals,Mid_sem,End_sem,Practicals) VALUES ('$cname2','$program','$prop_id1', '$cat','$credit','$sem','$ta12','$IN1','$mid1', '$end1','$practical' )";
    
    //$query1="INSERT INTO Marks_Distribution(Couse,category,Teaching_Assesment,Mid_sem,End_sem,Practicals) VALUES ('$name1','$ctype')";
    
        if($mysqli->query($query) === true)
    {
       
            header('location:AddCourses.php?msg = marks Added Successfully');
        
    }
    
    else{ 

        header('location:marksdistribution2.php?msg= Marks Not added ');
    }

}



//add marks to student





if(isset($_POST['addmarks']))
{
   
   
    $ctype=$_POST['ctype2'];
    $query= "SELECT * FROM Permissions where Marks_Entry= 'YES'  "; 
    $co=0;
    if($result= $mysqli->query($query))
    {
        while($row=$result->fetch_object())
        {
            $co=$co+1;
        }
    }
    if ($co==1){

   // $query="INSERT INTO Courses(Subjects,Semester,Catogary) VALUES ('$name1','$sname','$ctype')";
    
    //$query1="INSERT INTO Marks_Distribution(Course,category,) VALUES ('$name1','$ctype')";
    
    if( $ctype=="Theory")
    {
       

            header('location:AddMarksTheory.php');
        
    }
    else if( $ctype=="Practical")
    {
       
            header('location:AddMarksPractical.php');
        
    }
    else{ 

        header('location:AddMarks.php?msg= marks Not added ');
    }
}
else{
    header('location:AddMarks.php?msg= Adding Marks Not Allowed '); 
}

}

//Add theory marks to student  addMarks3



if(isset($_POST['addMarks3']))
{
    
 //$prop_id=$_SESSION['userId'];
 


    $reg=$_POST['reg'];
    $course=$_POST['cid'];
    //$sem=$_POST['sem1'];
    $query1= "SELECT * FROM Permissions where Ind=0 " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
            // echo $sem;
        }}
    $ta2=$_POST['ta2'];
    //$credit=$_POST['credit'];


    $query1= "SELECT * FROM Marks_Distribution where Course='$course' " ;
   $credit;
   if($result= $mysqli->query($query1))
   {
       while($row=$result->fetch_object())
       {
           $credit=$row->Credit;
           // echo $sem;
       }}
    $mid=$_POST['mid2'];
    $end=$_POST['end2'];
    
    $IN=0;
    $query="INSERT INTO Marks_Table(Reg_No,Course,Semester,Credit,TA,Mid_sem,End_sem,Practical,Internal) VALUES ('$reg','$course','$sem','$credit', '$ta2','$mid','$end','$IN','$IN' )";
    
    
    
        if($mysqli->query($query) === true)
    {
       
            header('location:AddMarks.php?msg = marks Added Successfully ');
        
    }
    
    else{ 

        header('location:AddMarksTheory.php?msg= Marks Not added  ');
    }

}



//Add Practical marks to student  addMarks4



if(isset($_POST['addMarks4']))
{
    
 //$prop_id=$_SESSION['userId'];
 


    $reg=$_POST['reg1'];
    $course=$_POST['cid1'];
    $ta2=$_POST['ta21'];
   // $credit=$_POST['credit'];


   $query1= "SELECT * FROM Marks_Distribution where Course='$course' " ;
   $credit;
   if($result= $mysqli->query($query1))
   {
       while($row=$result->fetch_object())
       {
           $credit=$row->Credit;
           // echo $sem;
       }}


   // $sem=$_POST['sem']; 

   $query1= "SELECT * FROM Permissions where Ind=0 " ;
    $sem=0;
    if($result= $mysqli->query($query1))
    {
        while($row=$result->fetch_object())
        {
            $sem=$row->Semester;
            // echo $sem;
        }}
    $inter=$_POST['inter'];
    $pract=$_POST['Practical'];
    
    $IN=0;
    $query="INSERT INTO Marks_Table(Reg_No,Course,Semester,Credit,TA,Mid_sem,End_sem,Practical,Internal) VALUES ('$reg','$course','$sem','$credit', '$ta2','$IN','$IN','$pract','$inter' )";
    
    
    
        if($mysqli->query($query) === true)
    {
       
            header('location:AddMarks.php?msg = marks Added Successfully ');
        
    }
    
    else{ 

        header('location:AddMarksPractical.php?msg= Marks Not added  ');
    }
}








// add professor


if(isset($_POST['addprop']))
{
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $depart=$_POST['depart'];
    
    $prof="12hsj3hs83hshs";
  $a=0;


$query="INSERT INTO Professors(Approved,NAME,EMAIL,CONTACT,passwor,DOB,Department,profile_Image)
 VALUES ('$a','$name','$email','$contact','$pass','$dob','$depart','$prof')";

    if($mysqli->query($query)===true)
    {
        
            //   move_uploaded_files($_FILES["photo"]['tmp_name'], $path);
            header('location:index.php?msg= Registration Request sent Successfully '); 
    }
    

    else{
        header('location:index.php?msg = ERROR1 ');
    }
    // move_uploaded_file($_FILES["photo"]["tmp_name," ]);

}



































?>
















