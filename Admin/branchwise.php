
<?php include('header.php');?>



<main id="main" class="main">

<div class="row">

     <header>

    List of Branch Wise Students
   
    </header>
  


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">   List of Branch Wise Students</h5>
            
   

         <form    class="form-horizontal" method="post" action="viewstudentof.php">



        
                <label for="type"> Branch  &emsp;&emsp;&emsp; &emsp;  &nbsp  &nbsp</label>
                <select id="" name="depart">
                <option value="">Select Options</option>
               

                
                <?php

require_once('config.php');


$query = "SELECT DISTINCT DEPART FROM student ";

// Execute the query
$result = $mysqli->query($query);


// Check if the query was successful
if($result){
  

  
  
           
  while ($row = mysqli_fetch_object($result)) {
  ?>
    <option value="<?php echo $row->DEPART; ?>" > <?php echo $row->DEPART ?></option>
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
                


        


   


             <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add_Mark" name="showList">Show List</button>
                  <!-- <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" /> -->
                  

                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>











