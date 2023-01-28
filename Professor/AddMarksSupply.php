<?php 
include('header.php');
require_once('config.php');

if(isset($_POST['submit'])){
    $reg_no = $_POST['reg_no'];
    $course = $_POST['course'];
    $ta = $_POST['ta'];
    $mid_sem = $_POST['mid_sem'];
    $end_sem = $_POST['end_sem'];
    $credit=$_POST['credit'];

    $query = "UPDATE Marks_Table SET TA='$ta', Mid_sem='$mid_sem', End_sem='$end_sem' WHERE Reg_No='$reg_no' AND Course='$course'";
    if($mysqli->query($query)){
        echo "Marks updated successfully!";
    }
    else{
        echo "Error updating marks: " . $mysqli->error;
    }
}

?>

<main id="main" class="main">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add Marks
                </header>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="reg_no">Reg. Number</label>
                        <input type="text" class="form-control" id="reg_no" name="reg_no" required>
                    </div>
                    <div class="form-group">
                        <label for="course">Course</label>
                        <input type="text" class="form-control" id="course" name="course" required>
                    </div>
                    <div class="form-group">
                        <label for="ta">Teaching Assessment</label>
                        <input type="text" class="form-control" id="ta" name="ta" required>
                    </div>
                    <div class="form-group">
                        <label for="mid_sem">Mid Semester</label>
                        <input type="text" class="form-control" id="mid_sem" name="mid_sem" required>
                    </div>
                    <div class="form-group">
                        <label for="end_sem">End Semester</label>
                        <input type="text" class="form-control" id="end_sem" name="end_sem" required>
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </form>
            </section>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>
