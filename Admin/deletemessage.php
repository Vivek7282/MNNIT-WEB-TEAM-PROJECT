
<?php require_once('config.php');

// Get the message ID
$messageId = $_GET['id'];
//echo  $messageId ;

// Define the delete query
$query = "DELETE FROM Message WHERE U_ID = '$messageId'";

// Execute the query
$result = $mysqli->query($query);

// Check if the query was successful
if($result){
  
  header('location:viewMessage.php');
} else {
  echo "Error: " . $conn->error;
}
?>
