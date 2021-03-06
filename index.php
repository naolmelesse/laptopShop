<?php
  @include 'Database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
    <style>

      img {
          width: 100%;
      }
      .height {
          height: 10px;
      }
            
      /* Image-container design */
      .image-container {
          max-width: 800px;
          position: relative;
          margin: auto;
          
      }
            
      .next {
          right: 0;
      }
            
      /* Next and previous icon design */
      .previous,
      .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          padding: 10px;
          margin-top: -25px;
      }
            
      /* caption decorate */
      .captionText {
          color: #000000;
          font-size: 14px;
          position: absolute;
          padding: 12px 12px;
          bottom: 8px;
          width: 100%;
          text-align: center;
      }
            
     
      .fa {
          color: #053742;
          font-size: 32px;
      }
            
      .fa:hover {
          transform: rotate(360deg);
          transition: 1s;
          color: #bbbbbb;
      }
            
      .footerdot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          margin-bottom: 3em;
          background-color: #bbbbbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.5s ease;
      }
            
      .active,
      .footerdot:hover {
          background-color: black;
      }
            
  </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
</head>
<body>
    <div class="top-section container-fluid">
        <div>
            <h1>LaptopShop</h1>
        </div>
        <div class="searchBar">
            <input type="text">
            <button type="button" class="btn">Search</button>
            <a href="login.html"><button type="button" class="btn">Login</button></a>
            
        </div>
    </div>
    <div class="container-fluid body-container">
        <!-- Left menu -->
        <div class="left-side">
            <h3 class="text-center">New Arrivals</h3>
            <div class="item-container">
                <div class="item-img">
                <img src="images/slideimage4.jpg" alt="">    
                </div>
                    <button type="button" class="btn col-12">Buy</button>

            </div>
            <div class="item-container">
                <div class="item-img">
                <img src="images/slideimage5.jpg" alt="">    
                </div>
                    <button type="button" class="btn col-12">Buy</button> 
            </div>
            <div class="item-container">
                <div class="item-img">
                <img src="images/slideimage6.jpg" alt="">    
                </div>
                    <button type="button" class="btn col-12">Buy</button>
            </div>
        </div>
        <!-- Main body -->
        <div class="main-body container-fluid">
         

            <h2>Featured laptops</h2>
            <br>

            <div class="image-container">
              <div class="slide">
                  
                  <img src="images/slideimage1.jpg" alt=""> 
              </div>
              <div class="slide">
                  
                  <img src="images/slideimage4.jpg" alt=""> 
              </div>
              <div class="slide">
                  
                  <img src="images/slideimage3.jpg" alt=""> 
              </div>
        
              <!-- Next and Previous icon to change images -->
              <a class="previous" onclick="moveSlides(-1)">
                  <i class="fa fa-chevron-circle-left"></i>
              </a>
              <a class="next" onclick="moveSlides(1)">
                  <i class="fa fa-chevron-circle-right"></i>
              </a>
          </div>
          <br>
        
          <div style="text-align:center">
              <span class="footerdot"
                  onclick="activeSlide(1)">
              </span>
              <span class="footerdot"
                  onclick="activeSlide(2)">
              </span>
              <span class="footerdot"
                  onclick="activeSlide(3)">
              </span>
          </div>

            <div class="row1">

                  <?php

                  $select = mysqli_query($conn, "SELECT * FROM products");
                  
                  ?>
                  <?php while($row = mysqli_fetch_assoc($select)){ ?>
                  <div class="card" style="width: 18rem;" >
                      <img src="uploaded_img/<?php echo $row['image']; ?>" class="card-img-top" height="250" alt="">
                      <div class="card-body">
                      <p><?php echo $row['name']; ?></p>
                      <p><?php echo $row['detail']; ?></p>
                      <p>Price: $<?php echo $row['price']; ?>/-</p>
                      <a href="#" class="btn col-12" style="margin-bottom: 1em;">Buy</a>
                      <a href="product.php?id=<?php echo $row['id'] ?>" class="btn col-12">View</a>
                      </div>
                     
                  </div>
                <?php } ?>
                </div>

               
        </div>
    </div>
    <div class="footer">
      <footer class="page-footer font-small stylish-color-dark pt-4">
        <div class="container text-center text-md-left">
          <div class="row">
            <div class="col-md-4 mx-auto">
              <h5
                class="font-weight-bold text-uppercase mt-3 mb-4"
                style="
                  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold',
                    sans-serif;
                "
              >
                LaptopShop
              </h5>
              <p>
                Get the laptop you deserve!
              </p>
            </div>

            <hr class="clearfix w-100 d-md-none" />

            <div class="col-md-2 mx-auto">
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">
                Categories
              </h5>

              <ul class="list-unstyled footer-links">
                <li>
                  <a href="#!">Office laptops</a>
                </li>
                <li>
                  <a href="#!">Work stations</a>
                </li>
                <li>
                  <a href="#!">Gaming</a>
                </li>
                <li>
                  <a href="#!">For school</a>
                </li>
              </ul>
            </div>

            <hr class="clearfix w-100 d-md-none" />

            <div class="col-md-2 mx-auto">
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Explore</h5>

              <ul class="list-unstyled footer-links">
                <li>
                  <a href="contact.html">Contact us</a>
                </li>
                <li>
                  <a href="#!">Refubrished</a>
                </li>
                <li>
                  <a href="#!">Discounts</a>
                </li>
                <li>
                  <a href="#!">Discover</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <hr />

        <ul class="list-unstyled list-inline text-center py-2">
          <li class="list-inline-item">
            <h5 class="mb-1">Start shopping.</h5>
          </li>
          <li class="list-inline-item">
            <a
              href="form.html"
              class="btn btn-danger btn-rounded bg-dark text-light"
              style="background-color: #053742; border: none"
              >Create account!</a
            >
          </li>
        </ul>

        <hr />

        <ul class="list-unstyled list-inline text-center">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
              <i class="bi bi-instagram"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
              <i class="bi bi-twitter"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
              <i class="bi bi-facebook"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
              <i class="bi bi-telegram"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
              <i class="bi bi-whatsapp"> </i>
            </a>
          </li>
        </ul>

        <div class="footer-copyright text-center py-3">
          ?? 2022 Copyright:
          <a href="index.php">LaptopShop</a>
        </div>
      </footer>
    </div>


    <script>
      var slideIndex = 1;
      displaySlide(slideIndex);
    
      function moveSlides(n) {
        displaySlide(slideIndex += n);
      }
    
      function activeSlide(n) {
        displaySlide(slideIndex = n);
      }
    
      /* Main function */
      function displaySlide(n) {
        var i;
        var totalslides =
          document.getElementsByClassName("slide");
        var totaldots =
          document.getElementsByClassName("footerdot");
        
        if (n > totalslides.length) {
          slideIndex = 1;
        }
        
        if (n < 1) {
          slideIndex = totalslides.length;
        }
        for (i = 0; i < totalslides.length; i++) {
          totalslides[i].style.display = "none";
        }
        for (i = 0; i < totaldots.length; i++) {
          totaldots[i].className =
          totaldots[i].className.replace(" active", "");
        }
        totalslides[slideIndex - 1].style.display = "block";
        totaldots[slideIndex - 1].className += " active";
      }
    </script>
    
</body>
</html>