<?php include('header.php');?>
<main id="main" class="main">

<div class="row">

     <header>

    Add Marks


    </header>


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">course</h5>

         <form    class="form-horizontal" method="post" action="function.php">




         <label for="type"> Course ID &emsp;&emsp;&emsp; &emsp;  &nbsp  &nbsp</label>
                <select id="" name="cid1">
                <option value="">Select Options</option>
               

                
                <?php

require_once('config.php');

// Get the session ID
$sessionId = $_SESSION['userId'];

// Define the query
$sub="Practical";
$query1= "SELECT * FROM Permissions where Ind=0" ;
$sem=0;
if($result= $mysqli->query($query1))
{
    while($row=$result->fetch_object())
    {
        $sem=$row->Semester;
         $sem=$sem;
    }}
$query = "SELECT * FROM Marks_Distribution WHERE Professor_Id = '$sessionId'  and Semester='$sem'";

// Execute the query
$result = $mysqli->query($query);


// Check if the query was successful
if($result){
  

  
  
           
  while ($row = mysqli_fetch_object($result)) {
  ?>
    <option value="<?php echo $row->Course; ?>" > <?php echo $row->Course ?></option>
    <?php
  }
  
  
} 

?>
</select>
<div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add Course" name="addmarks111">Add Marks</button>
                  <!-- <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" /> -->
                  


                </div>
                
         </form>
         

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>