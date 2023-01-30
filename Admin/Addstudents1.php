<?php 

require_once('config.php');

$stu_id = $_GET['id'];
$s = 1;

$query1 = "SELECT * FROM student WHERE Student_id=? and Approved=0";
$stmt = $mysqli->prepare($query1);
$stmt->bind_param("i", $stu_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $query = "UPDATE student SET Approved=? WHERE Student_id=?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ii", $s, $stu_id);
    if ($stmt->execute()) {
        header('location:viewRequest.php?msg=student Added Successfully'); 
    } else {
        header('location:viewRequest.php?msg=student NOT Added Successfully'); 
    }
}

?>
