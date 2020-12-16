<?php include "includes/head.php" ?>
  <body>
    <!-- Navigation bar 0 -->
    <?php include "includes/navigation.php" ?>

      

      <!-- JomboTron --  STartign barnner -->


      <?php include "includes/search.php" ?>


      <!-- PAGE HEADING -->
            <!-- <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="display-4 mb-5">Locations</h2>
                        </div>
                    </div>
                </div>
            </section> -->

      <!-- Featured listing on homepage -->
      <section>
          <div class="container">
            <div class="row">
              <!-- first column for Display listing based on categories -->
                <div class="col-sm-8">
                    <div class="">
                      <h1 class="display-4">Business Title</h1>
                        <img src="images/salon.jpg" class="card-img-top" alt="...">
                        <div class="">
                          <p class="lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <!-- Setting review  -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Your Review</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Reviews</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- Review Forms -->
                          <form>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" class="form-control">
                              </div>

                                <div class="form-group">
                                  <label for="=">Email address</label>
                                  <input type="email" class="form-control">
                                </div>

                                <div class="form-group">
                                  <label for="=">Review</label>
                                  <textarea class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card p-1 m-1">
                          <div class="card-body">
                            <h5 class="card-title">Godred Akoto</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus tenetur, consequuntur laboriosam quibusdam dignissimos laudantium rem ea sint error nihil, modi dicta! Molestias dicta amet consequatur perspiciatis sint odit est?</p>
                          </div>
                        </div>
                        <div class="card p-1 m-1">
                          <div class="card-body">
                            <h5 class="card-title">Nathan Quao</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus tenetur, consequuntur laboriosam quibusdam dignissimos laudantium rem ea sint error nihil, modi dicta! Molestias dicta amet consequatur perspiciatis sint odit est?</p>
                          </div>
                        </div>
                      </div>
                    </div>
                
                </div>

                <!-- second column for Sidebar with categories -->
                <?php include "includes/sidebar.php" ?>
            </div>
          </div>
      </section>

      <!-- Footer -->
    <?php include "includes/footer.php" ?>