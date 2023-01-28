

<?php include('header.php');?>






<main id="main" class="main">

<div class="row">

     <header>

    Practical Marks
   
    </header>
  


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">  Marks</h5>
            
   

         <form    class="form-horizontal" method="post" action="function.php">



         

         <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Reg. Number</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="reg1" required>
              </div>
                </div>

                


                <label for="type"> Course ID &emsp;&emsp;&emsp; &emsp;  &nbsp  &nbsp</label>
                <select id="" name="cid1">
                <option value="">Select Options</option>
               

                
                <?php

require_once('config.php');

// Get the session ID
$sessionId = $_SESSION['userId'];

// Define the query
$sub="Practical";
$query = "SELECT * FROM Marks_Distribution WHERE Professor_Id = '$sessionId' and category='$sub'";

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



                
<div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                
              </div>
                </div>
                


         <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Teaching Assesment</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="ta21" required>
              </div>
                </div>


             <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Internals</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="inter" required>
              </div>
              </div>


             <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Practicals</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="Practical" required>
              </div>
             </div>
             
   


             <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add_Marks4" name="addMarks4">Add Marks</button>
                  <!-- <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" /> -->
                  

                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>











