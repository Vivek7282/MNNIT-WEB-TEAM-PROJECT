

<?php include('header.php');?>
<main id="main" class="main">

<div class="row">

     <header>

    Practicals


    </header>


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">  Marks Distribution Practicals</h5>

         <form    class="form-horizontal" method="post" action="function.php">



        
         <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Course Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="cname1" required>
              </div>
                </div>
                <label for="type">Program &emsp;&emsp;&emsp; &emsp; &emsp;   &nbsp</label>
                    <select id="" name="program">
                             <option value="">Select Options</option>
                             <option value="BTech">BTech</option>
                             <option value="MTech">MTech</option>
                 
  
                    </select>

                <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
              
              </div>
                </div>

                <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Credit</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="credit" required>
              </div>
                </div>

                

         <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Teaching Assesment</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="ta12" required>
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
                <input type="text" class="form-control"  name="practical" required>
              </div>
             </div>
             
   


             <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add_Marks2" name="addMarks2">Add Marks</button>
                  <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" />
                  

                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>











