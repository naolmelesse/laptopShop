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
                    <img src="data:image/jpeg;base64,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eACSaALieVE86Lhk0ZD0nesxjlmG8HiXLaY00/MxwLoiRagE1oA1rf8AiufMUjZwXQ28A2K7OtdkQY9IbQ9RVK81OsbzfPoqjC2NJjHaOHqX10UjZw9S2MFMBlrwf9AAWRZdPNNcqmkQDfgWtKwZNDopGzh6l9MU54cPUtt2mLa16H0+gat6+gDMXgdwePRVAahFOeHD1IIxz9HqWwNGZrXc149GSyoDia12gP8APUHr2oDU2MTjhw9SNik5U34epbSAc69IESvEgr6QCcakdD6jromQaWxSdnD1I2MThXzepby0ZYka6h9d2rbuQswpi4a6iIcNeoelZBo052+3BfdOdvtwUl0OmANccqPI+gLBuWAI3EPoKZYAIDQYxyrTq9Sya8nWPN2LdCZ0tw2Pod9AMF9Ipk0kV1Bw9FUBH0hrT2+hfBFPt+CkvxIIBBH6XDwR7UWcVoNHAm9so8ecjX05oYIgeTlRSrLcWxoT6VuRWPplW68OpXqX2I3JzSb3Q/E9Yw7VPs9jS5pxxIBF2ISDt8HLrQH6asq0WR4YiMOBzGtp1gqavPOSkw6FQjIgBw2jt3rv4MUOAcMisyWDEXk2IiLyegiIgCxJpiVkqrlBJRo0EsgR9BEqCH3Q/KuBB30x3IDCdj38PFGW/eVRz4wK4W3JXlFL1JLo7B40AQovzNGInzVxcxy7nQS18w4EGha5sNpB2EFlQVsTSNbi2X/KuFzyVy72qNM8pokTw4t79z0BRTaw8ocW9iNmcFmGrINVV31HlDi3sX3vqPKHFvYsZGC2DVkBTH2r7fQqjvuPKHFvYnfceUOLexZyMFsHrMRN6p++42ji3sX0WwNreLexMjBciLvKyEU7TxVL35G0cW9iyFtN2ji3sTIwXQjHaeKyEY7TxVJ36btbxb2J37btHFvYmRgvNMdp4ppjtPFUvfxu0cW9id/G7Rxb2JkYLwCuPt7di+6NUQt5u0cW9i+9/wAbR+83sTIwXejTRqk7/jaP3m9ixNvjaOLexMoYL0QgrqwpYXhguH7/AHxhxb2LZC5URG+DFp+52LKkjDR79ZbMAr6TeW5dYX5yhcv5wYNmjuFIR/4rr7CfyimaGHpYbD48ZsKC3g5l8jeGlYbTCi0e4scCKhZqg5KWdNwYbhNzImHuoea0NDKVqAQBerhjQZK/Ws2BERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAf/9k=" alt="">
                </div>
                    <button type="button" class="btn col-12">Buy</button>

            </div>
            <div class="item-container">
                <div class="item-img">
                    <img src="data:image/jpeg;base64,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eACSaALieVE86Lhk0ZD0nesxjlmG8HiXLaY00/MxwLoiRagE1oA1rf8AiufMUjZwXQ28A2K7OtdkQY9IbQ9RVK81OsbzfPoqjC2NJjHaOHqX10UjZw9S2MFMBlrwf9AAWRZdPNNcqmkQDfgWtKwZNDopGzh6l9MU54cPUtt2mLa16H0+gat6+gDMXgdwePRVAahFOeHD1IIxz9HqWwNGZrXc149GSyoDia12gP8APUHr2oDU2MTjhw9SNik5U34epbSAc69IESvEgr6QCcakdD6jromQaWxSdnD1I2MThXzepby0ZYka6h9d2rbuQswpi4a6iIcNeoelZBo052+3BfdOdvtwUl0OmANccqPI+gLBuWAI3EPoKZYAIDQYxyrTq9Sya8nWPN2LdCZ0tw2Pod9AMF9Ipk0kV1Bw9FUBH0hrT2+hfBFPt+CkvxIIBBH6XDwR7UWcVoNHAm9so8ecjX05oYIgeTlRSrLcWxoT6VuRWPplW68OpXqX2I3JzSb3Q/E9Yw7VPs9jS5pxxIBF2ISDt8HLrQH6asq0WR4YiMOBzGtp1gqavPOSkw6FQjIgBw2jt3rv4MUOAcMisyWDEXk2IiLyegiIgCxJpiVkqrlBJRo0EsgR9BEqCH3Q/KuBB30x3IDCdj38PFGW/eVRz4wK4W3JXlFL1JLo7B40AQovzNGInzVxcxy7nQS18w4EGha5sNpB2EFlQVsTSNbi2X/KuFzyVy72qNM8pokTw4t79z0BRTaw8ocW9iNmcFmGrINVV31HlDi3sX3vqPKHFvYsZGC2DVkBTH2r7fQqjvuPKHFvYnfceUOLexZyMFsHrMRN6p++42ji3sX0WwNreLexMjBciLvKyEU7TxVL35G0cW9iyFtN2ji3sTIwXQjHaeKyEY7TxVJ36btbxb2J37btHFvYmRgvNMdp4ppjtPFUvfxu0cW9id/G7Rxb2JkYLwCuPt7di+6NUQt5u0cW9i+9/wAbR+83sTIwXejTRqk7/jaP3m9ixNvjaOLexMoYL0QgrqwpYXhguH7/AHxhxb2LZC5URG+DFp+52LKkjDR79ZbMAr6TeW5dYX5yhcv5wYNmjuFIR/4rr7CfyimaGHpYbD48ZsKC3g5l8jeGlYbTCi0e4scCKhZqg5KWdNwYbhNzImHuoea0NDKVqAQBerhjQZK/Ws2BERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAf/9k=" alt="">
                </div>
                    <button type="button" class="btn col-12">Buy</button> 
            </div>
            <div class="item-container">
                <div class="item-img">
                    <img src="data:image/jpeg;base64,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eACSaALieVE86Lhk0ZD0nesxjlmG8HiXLaY00/MxwLoiRagE1oA1rf8AiufMUjZwXQ28A2K7OtdkQY9IbQ9RVK81OsbzfPoqjC2NJjHaOHqX10UjZw9S2MFMBlrwf9AAWRZdPNNcqmkQDfgWtKwZNDopGzh6l9MU54cPUtt2mLa16H0+gat6+gDMXgdwePRVAahFOeHD1IIxz9HqWwNGZrXc149GSyoDia12gP8APUHr2oDU2MTjhw9SNik5U34epbSAc69IESvEgr6QCcakdD6jromQaWxSdnD1I2MThXzepby0ZYka6h9d2rbuQswpi4a6iIcNeoelZBo052+3BfdOdvtwUl0OmANccqPI+gLBuWAI3EPoKZYAIDQYxyrTq9Sya8nWPN2LdCZ0tw2Pod9AMF9Ipk0kV1Bw9FUBH0hrT2+hfBFPt+CkvxIIBBH6XDwR7UWcVoNHAm9so8ecjX05oYIgeTlRSrLcWxoT6VuRWPplW68OpXqX2I3JzSb3Q/E9Yw7VPs9jS5pxxIBF2ISDt8HLrQH6asq0WR4YiMOBzGtp1gqavPOSkw6FQjIgBw2jt3rv4MUOAcMisyWDEXk2IiLyegiIgCxJpiVkqrlBJRo0EsgR9BEqCH3Q/KuBB30x3IDCdj38PFGW/eVRz4wK4W3JXlFL1JLo7B40AQovzNGInzVxcxy7nQS18w4EGha5sNpB2EFlQVsTSNbi2X/KuFzyVy72qNM8pokTw4t79z0BRTaw8ocW9iNmcFmGrINVV31HlDi3sX3vqPKHFvYsZGC2DVkBTH2r7fQqjvuPKHFvYnfceUOLexZyMFsHrMRN6p++42ji3sX0WwNreLexMjBciLvKyEU7TxVL35G0cW9iyFtN2ji3sTIwXQjHaeKyEY7TxVJ36btbxb2J37btHFvYmRgvNMdp4ppjtPFUvfxu0cW9id/G7Rxb2JkYLwCuPt7di+6NUQt5u0cW9i+9/wAbR+83sTIwXejTRqk7/jaP3m9ixNvjaOLexMoYL0QgrqwpYXhguH7/AHxhxb2LZC5URG+DFp+52LKkjDR79ZbMAr6TeW5dYX5yhcv5wYNmjuFIR/4rr7CfyimaGHpYbD48ZsKC3g5l8jeGlYbTCi0e4scCKhZqg5KWdNwYbhNzImHuoea0NDKVqAQBerhjQZK/Ws2BERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAf/9k=" alt="">
                </div>
                    <button type="button" class="btn col-12">Buy</button>
            </div>
        </div>
        <!-- Main body -->
        <div class="main-body container-fluid">

       


            <h2>All categories</h2>
            <br>
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