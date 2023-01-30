<?php 

require_once('config.php');
// $stu_id=1;
$stu_id = $_GET['id'];
$s = 1;

$query1 = "SELECT * FROM Professors WHERE Professors_ID=? and Approved=0";
$stmt = $mysqli->prepare($query1);
$stmt->bind_param("i", $stu_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $query = "UPDATE Professors SET Approved=? WHERE Professors_ID=?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ii", $s, $stu_id);
    if ($stmt->execute()) {
        header('location:viewRequest1.php?msg=Professor Added Successfully'); 
    } else {
        header('location:viewRequest1.php?msg=professor NOT Added Successfully'); 
    }
}
?>


<?php include('footer.php'); ?>
