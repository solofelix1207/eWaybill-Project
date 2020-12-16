<?php include "includes/head.php" ?>
  <body>
    <!-- Navigation bar 0 -->
<?php include "includes/navigation.php" ?>

      

      <!-- JomboTron --  STartign barnner -->
<?php include "includes/search.php" ?>



      <!-- Starting body section: list directory by category -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h5 class="display-4">Contact us for support</h5>
                <!-- Form -->
                <form>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mobile Number</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="my-select">Subject</label>
                        <select  class="form-control" name="">
                            <option>Consulting</option>
                            <option>Enquiries</option>
                            <option>Advertising</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <textarea class="form-control" name="" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            
            <!-- INCLUDE SIDEBAR WHICH IS ALREADY IN COL-SM-4 -->
            <?php include "includes/sidebar.php"; ?>
        </div>
    </div>



      <!-- Footer -->
  <?php include "includes/footer.php" ?>
