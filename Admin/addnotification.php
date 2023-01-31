<?php include('header.php');
require_once('config.php');
?>
<main id="main" class="main">

                    <div class="col-lg-8 mt-5 mt-lg-0">
                    <h2>New Notification</h2>

                    <form method="POST" action="function.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject1" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message1" rows="5" placeholder="Notice" required></textarea>
                            </div>
                            <!-- <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> -->
                            <div class="form-group mt-3">
                                <!-- <textarea class="form-control" name="message1" rows="5" placeholder="Notice" required></textarea> -->
                            </div>
                            <div class="text-center"><button class ="btn btn-primary"name ="message3" type="submit">Notify</button></div>
                        </form>

                    </div>

               
</main>
              <?php include ('footer.php');?>