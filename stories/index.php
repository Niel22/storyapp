<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories Website</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php include 'partials/connect.php'; ?>
    <div class="container-fluid px-0 slider">
        <?php include 'partials/header.php'; ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/img/img11.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="assets/img/img10.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="assets/img/img3.jpg" class="d-block w-100" alt="">
              </div>
            </div>
          </div>
          <div class="container">
            <h1 class="text-center featureTitle mb-5"> Features Stories</h1>
            <div class="row">
              <?php
              $stmt = $conn->prepare('SELECT * FROM topics');
              $stmt->execute();
              $result = $stmt->get_result();

              if($result){
                while($row = $result->fetch_assoc()){
              ?>
              <div class="col-md-4 col-sm-6 mb-5">
                <div class="card" style="width: 18rem;">
                  <img src="<?= $row['topic_image'];?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?= $row['topic_name'];?></h5>
                    <p class="card-text"><?= $row['topic_desc'];?></p>
                    <a href="#" class="btn btn-primary">Continue Reading</a>
                  </div>
                </div>
              </div>
              <?php
                }
              }?>
            </div>
          </div>
          <?php include 'partials/footer.php'; ?>
    </div>
</body>
</html>