<?php include('header.php');?>
<main id="main" class="main">

<div class="row">

     <header>

    Change Permission


    </header>


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Change Permission</h5>

         <form    class="form-horizontal" method="post" action="function.php">




                <label for="type">Permission To See Result &emsp; &emsp;   &nbsp</label>
                    <select id="" name="ptype">
                             <option value="">Select Options</option>
                             <option value=0>NO</option>
                             <option value=1>YES</option>
                 
  
                    </select>
              
                    <div class="row mb-2">
              </div>




   


                <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add Course" name="addCourses2">Result  Permission</button>
                  <!-- <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" /> -->
                  


                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>