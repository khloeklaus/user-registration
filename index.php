<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <?php include "includes/head.html";?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xw9pe7KV8oHLRcdVu+QkOQ8fUfOe2MQ0dwH5v/I1jP5H25tZL/XFYdL+1cZQ2tjIBl5jMcZQ7clEx5/FM9v+mw==" crossorigin="anonymous" />
    <style>
footer {
  text-align: center;
  padding: 3px;
  background-color: DarkSalmon;
  color: white;
}
</style>

</head>
 
<body>
    <div class="container">
        <div class="row"style="bgcolor:pink;">
          <?php include 'includes/nav.php'; ?>
        </div>
        <!-- This is the conent row -->
        <div class="row"style="bg-color:blue;">
          <div class="col-lg-3">
          <img src="image/wlm pic 2.jpg" alt="GFG" width="300" height="300" class="d-block w-50" alt="...">
             
          </div>

    
          <div class="col-lg-6">
            <h1 class="text-center">Carousel example</h1>
            <div id="carouselExample" class="carousel slide">
            <center>
            <div class="carousel-inner bg-secondary">
              <div class="carousel-item active">
              <p class="text-bg-danger display-6">Slide 1</p>
              <img src="image/user pic.png" alt="GFG" width="600" height="300" class="d-block w-50" alt="...">
              </div>
              <div class="carousel-item">
              <p class="text-bg-danger display-6">Slide 2</p>
              <img src="image/wlm pic 2.jpg" alt="GFG" width="300" height="300" class="d-block w-50" alt="...">
              </div>
              <div class="carousel-item">
              <p class="text-bg-danger display-6">Slide 3</p>
              <img src="image/wlm pic 4.jpg" alt="GFG" width="300" height="300" class="d-block w-50" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </center>
              
              </div>

          </div>
          <div class="col-lg-3">
          <img src="image/right pic.webp" alt="GFG" width="3000" height="400" class="d-block w-50" alt="...">
            
          </div>
        </div> 
        <?php include "includes/footer.php";?>
</body>
</html>
