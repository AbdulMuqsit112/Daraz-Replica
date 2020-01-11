<?php 
session_start();
?>
<!doctype html>
<?php include ('libraries.php')?>
  <body>
    <?php include('navbar1.php')?>
    <?php include('navbar2.php')?>          
             <div>
               <!-- Image Slider -->
               <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"class=""></li>
                  </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Assets\IMG\home\home slider image1.jpg" alt="First slide"height="342">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Assets\IMG\home\home slider image2.webp" alt="Second slide"height="342">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Assets\IMG\home\home slider image3.webp" alt="Third slide" height="342">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Assets\IMG\home\home slider image4.webp" alt="Fourth slide" height="342">
          </div>
        </div>
      </div>
      <?php include('menu.php')?>
        
    <div style=" height:70px;"></div>
      </div>
      
      <div class="card w-75 border border-0 "style="background-color:#F0F0F0;">
  <div class="card-body ml-3">
    <h3 class="card-title">Just For You</h3>
  </div>
</div>
<div class="container">


<div id ="message"></div>
<div class="row mt-2 pb-3">
<?php
include 'config.php';
$stmt = $conn->prepare("SELECT * FROM product");
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()):
?> 
<div class="col-sm-6 col-md-4 col-lg-3 mb-2" > 
<div class="card-deck"  >  
<div class="card border border-light "  id="product">
    <img class="card-img-top" src="<?= $row['product_image'] ?>" >
    <div class="card-body border border-light" style="background-color: #ffffff">
      <h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
      <h5 class="card-text text-center text-danger">Rs. <?= number_format($row['product_price'],2) ?></h5> 
    </div>
    <div class="card-footer border border-light" style="background-color: #ffffff">
    <form action="" class="form-submit">
      <input type="hidden" class="pid" value="<?= $row['id']?>">
      <input type="hidden" class="pname" value="<?= $row['product_name']?>">
      <input type="hidden" class="pprice" value="<?= $row['product_price']?>">
      <input type="hidden" class="pimage" value="<?= $row['product_image']?>">
      <input type="hidden" class="pcode" value="<?= $row['product_code']?>">
      <button class="btn btn-block addItemBtn" style="background-color: #FE701E; color:#ffffff">Add To Cart</button>
    </form>
    </div>
  </div>
</div>
</div>
<?php endwhile; ?>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
    $(document).ready(function(){
      $(".addItemBtn").click(function(e){
        e.preventDefault();
        var $form =$(this).closest(".form-submit");
        var pid = $form.find(".pid").val();
        var pname = $form.find(".pname").val();
        var pprice = $form.find(".pprice").val();
        var pimage = $form.find(".pimage").val();
        var pcode = $form.find(".pcode").val();

        $.ajax({
          url:'action.php',
          method:'post',
          data:{pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
          success:function(response){
            $('#message').html(response);
            window.scrollTo(0,500);
            load_cart_item_number();
          }
        });
      });
      load_cart_item_number();

      function load_cart_item_number(){
        $.ajax({
          url:'action.php',
          method:'get',
          data:{cartItem:"cart_item"},
          success:function(response)
          {
            $('#cart-item').html(response);


          }
        })

      }



    });
    </script>

    <script src="Assets\JS\home.js"></script>
    <script src="Assets\JS\menu.js"></script>
</body>
</html>