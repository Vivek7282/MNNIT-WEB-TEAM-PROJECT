

<?php include('header.php');?>






<main id="main" class="main">

<div class="row">

     <header>

    Change Password
   
    </header>
  


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"> </h5>
            
   

         <form    class="form-horizontal" method="post" action="function.php">



         

         <div class="row mb-3">
              
              <label for="course" class="col-sm-2 col-form-label">Old Password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="old" required>
              </div>
                </div>        
         <div class="row mb-3">   
              <label for="course" class="col-sm-2 col-form-label">New password</label>
              <div class="col-sm-10">
                <input type="text" class="form-control"  name="new" required>
              </div>
                </div>
             <div class="text-center">
                  <button type="submit" class="btn btn-primary" value="Add_Marks4" name="change">Change Password</button>
                  <!-- <input type="button"class ="btn btn-primary" onclick="location.href='viewCourses.php';" value="List of Course" /> -->
                  

                </div>
                
         </form>

              
              </div>
              </div>
              </div>
              </div>
</main>
              <?php include ('footer.php');?>











