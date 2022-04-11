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
    <title>Home</title>
    <style>
            /* Accordion */

            :focus, :active { outline:0; }

      #accordion { 
        width:250px; 
        margin:0 auto; 
        font:normal normal 13px sans-serif; 
        color:#000000; 
      }

      #accordion h3 {
        padding:5px; 
        -webkit-border-radius:3px; 
        border-radius:3px;
        -moz-box-shadow:0 1px 4px #CCC; 
        -webkit-box-shadow:0 1px 4px #CCC; 
        box-shadow:0 1px 4px #CCC; 
        margin:3px 0; 
        cursor:pointer;
      }

      #accordion div {
        margin:0 0 0 10px; 
        padding:10px; 
        border:solid 1px #F6F6F6; 
        height:auto;
      }

      #accordion li{
      list-style: none;
      box-shadow:0 1px 4px #CCC; 
      /* border: black 1px solid; */
      font-size: large;
      margin: 0.2em;
      padding: 0.2rem;
      color: #000000;
      text-align: center;
      }
      #accordion a{
      color: #555;
      text-decoration: none;
      }
      /* Accordion end */
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
            <a href="logout.php"><button type="button" class="btn">Logout</button></a>
            
        </div>
    </div>
    <div class="container-fluid body-container">
        <!-- Left menu -->
        <div class="left-side">
        <div id="accordion">
    
          <h3>Categories</h3>
              <div>
              <li><a href="home.php">All laptops</a></li>
                <li><a href="gaming.php">Gaming laptops</a></li>
                <li><a href="">Business laptops</a></li>
                <li><a href="student.php">Student laptops</a></li>
              </div>
              
          <h3>Account</h3>
              <div>
                <li><a href="">My orders</a></li>
                <li><a href="">Wishlist</a></li>
                <li><a href="">Returns</a></li> 
              </div>

        </div>
            <h3 class="text-center">New Arrivals</h3>
            <div class="item-container">
                <div class="item-img">
                   <img src="images/login-image.jpg" alt="">                
                  </div>
                    <button type="button" class="btn col-12">Buy</button>

            </div>
            
        </div>
        <!-- Main body -->
        <div class="main-body container-fluid">

       


            <h2>Student laptops</h2>
            <br>
            <div class="row1">
                
                  <?php

                  $select = mysqli_query($conn, "SELECT * FROM products where category='Student'");
                  
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
                  <a href="#!">New arrivals</a>
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
          <!-- <li class="list-inline-item">
            <a
              href="form.html"
              class="btn btn-danger btn-rounded bg-dark text-light"
              style="background-color: #053742; border: none"
              >Create account!</a
            >
          </li> -->
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
          © 2022 Copyright:
          <a href="index.php">LaptopShop</a>
        </div>
      </footer>
    </div>

    <script>
      $(document).ready(function() {
          // jQuery FUNCTION.
          $("#accordion").accordion({
              heightStyle: "content"
          });
      });
      // EXPAND AND COLLAPSE MENUS ON “HEADER CLICK”
      $("#accordion h3").click(function() {
          $("#accordion h3").animate({ 'background-color': '#FFF' }, 300);
          $("#accordion h3").css({ 'color': '#000' });
  
          // HIGHLIGHT THE SELECTED HEADER (BLOCK)
          $(this).animate({ 'background-color': '#395B64' }, 300); 
          $(this).css({ 'color': '#FFF' });
      });
  </script>
</body>
</html>