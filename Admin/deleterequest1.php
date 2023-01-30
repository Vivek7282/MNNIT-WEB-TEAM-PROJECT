
<?php require_once('config.php');

// Get the message ID
$prop_id = $_GET['id'];


// Define the delete query
$query = "DELETE FROM Professors WHERE Professors_ID = '$prop_id'";

// Execute the query
$result = $mysqli->query($query);

// Check if the query was successful
if($result){
  
  header('location:viewRequest1.php');
} else {
  echo "Error: " . $conn->error;
}
?>
