<?php
require_once 'header.php';
?>

<div class="container mt-5">
    <!-- Jumbotron with Carousel -->
    <div class="p-5 mb-4 bg-info rounded-3">
      <div class="row align-items-center">
        <!-- Jumbotron Text -->
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold">RBAC Implementation in PHP</h1>
          <p class="fs-4">A simple implementation of RBAC (Role Based Access Control) using PHP, MySQL and JWT.</p>          
          <form action="features.php" method="POST">
            <button type="submit" class="btn btn-primary btn-lg">Learn More</button>
          </form>
        </div>

        <!-- Carousel Section -->
        <div class="col-lg-6">
          <div id="jumbotronCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#jumbotronCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#jumbotronCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#jumbotronCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#jumbotronCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner rounded">
              <div class="carousel-item active">
                <img src="../images/RBAC-Authentication.png" class="d-block w-100" alt="RBAC Authentication">
                <!--<div class="carousel-caption d-none d-md-block">
                  <h5>RBAC</h5>
                  <p>PHP, MySQL, JWT, bootstrap</p>
                </div>-->
              </div>
              <div class="carousel-item">
                <img src="../images/RBAC-Authorization-UseCase1.png" class="d-block w-100" alt="RBAC Authorization UseCase1">
                <!--<div class="carousel-caption d-none d-md-block">
                  <h5>Second Slide</h5>
                  <p>Experience the latest features.</p>
                </div>-->
              </div>
              <div class="carousel-item">
                <img src="../images/RBAC-Authorization-UseCase2.png" class="d-block w-100" alt="RBAC Authorization UseCase2">
                <!--<div class="carousel-caption d-none d-md-block">
                  <h5>Third Slide</h5>
                  <p>Get started today!</p>
                </div>-->
              </div>
              <div class="carousel-item">
                <img src="../images/RBAC-Authorization-UseCase3.png" class="d-block w-100" alt="RBAC Authorization UseCase3">
                <!--<div class="carousel-caption d-none d-md-block">
                  <h5>Fourth Slide</h5>
                  <p>Get started today!</p>
                </div>-->
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#jumbotronCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#jumbotronCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
require_once 'footer.php';
?>
