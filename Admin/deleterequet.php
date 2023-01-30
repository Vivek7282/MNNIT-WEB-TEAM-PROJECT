
<?php require_once('config.php');

// Get the message ID
$stu_id = $_GET['id'];
//echo  $messageId ;

// Define the delete query
$query = "DELETE FROM student WHERE Student_id = '$stu_id'";

// Execute the query
$result = $mysqli->query($query);

// Check if the query was successful
if($result){
  
  header('location:viewRequest.php');
} else {
  echo "Error: " . $conn->error;
}
?>
