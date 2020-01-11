<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets\CSS\home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="Assets/IMG/Tlogo.png">
    <link rel="stylesheet"href="Assets\CSS\Product.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




    <title>Online Shopping in Pakistan:Fashion,Electronics & Books-Daraz.pk</title>
  </head>
  <body>

        <nav class="navbar navbar-expand-sm py-0 navbar-light " style="background-color:#F0F0F0;" id="navbar">
                
                 <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link py-0" href="#">SAVE MORE <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active py-0 ">
                      <a class="nav-link py-0" href="#">SELL ON DARAZ</a>
                    </li>
                    <li class="nav-item active py-0">
                      <a class="nav-link py-0" href="#">CUSTOMER CARE</a>
                    </li>
                    <li class="nav-item active py-0">
                            <a class="nav-link py-0" href="#">TRACK MY ORDER</a>
                          </li>
                          <?php if (!empty($_SESSION['name'])) { ?>
                              <li class="nav-item active py-0">
                                <a class="nav-link py-0" href="#"><?php echo $_SESSION['name'];?></a>
                              </li>      
                              <li class="nav-item active py-0">
                                    <a class="nav-link py-0" href="home.php" onclick="<?php $_SESSION['name']=null; sleep(1);?>">Log out</a>
                                  </li>
                                  <?php } else { ?>
                                  <li class="nav-item active py-0">
                                <a class="nav-link py-0" href="login.php">LOGIN</a>
                              </li>      
                              <li class="nav-item active py-0">
                                    <a class="nav-link py-0" href="signup.php">SIGNUP</a>
                                  </li>    
                                  <?php } ?>
                     </ul>
                </div>
              </nav>

              <nav class="navbar navbar-expand  navbar-light" style="background-color: #ffffff">
                
                <div class="collapse navbar-collapse d-flex">
                 <ul class="navbar-nav">
                   <li class="nav-item pl-4">
                     <a class="nav-link" href="home.php">
                     <img src="Assets\IMG\logo.png" alt="DARAZ" height="41" width="136"> </a>
                   </li>
                   <li class="nav-item  pl-5 pr-0" >
                   <a class="nav-link" href="#">
                   <input type="text" id="box" class="form-control " placeholder="SEARCH ON DARAZ" ></a>
                   </li>
                   <li class="nav-item pl-0 col-auto" >
                               <a class="nav-link" href="#"><button id="search" class="py-2 pr-3 pt-1" style="background-color:#FE701E;border:none;">
                               <i class="fa fa-search pl-2 mt-2"></i></button></a>
                             </li>     
                             <li class="nav-item pl-2">
                                   <a class="nav-link" href="cart.php">
                                   <i class='fa fa-shopping-cart' style='font-size:28px'></i><span id="cart-item" class="badge badge-danger"></span></a>
                                 </li>           
                  <li class="nav-item pl-3">
                  <a class="nav-link " href="#">
                  <img src="Assets\IMG\home\daraz app download.png" alt="Download App" height="45" width="188"></a>
                   </li>
                    </ul>
               </div>
             </nav>
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
    
      
    <div class="container ml-4" style="position: absolute;left: 0;top:0;margin: 100px;">
      
      <div id="null void"class="container d-none" style=" float: left;"></div> 
<ul class ="list-group menu border border-light" style="list-style-type:none; width: 19%;">
    <li id="a" class="menu py-1 pl-1">Electronic Device <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
    <li id="b" class="menu pb-1 pl-1">Electronic Accessories <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
    <li id="c" class="menu pb-1 pl-1">Tv & Home Appliances <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li> 
    <li id="d" class="menu pb-1 pl-1">Health and Beauty <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
    <li id="e" class="menu pb-1 pl-1">Babies & Toys <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
    <li id="f" class="menu pb-1 pl-1">Groceries & Pets <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
    <li id="g" class="menu pb-1 pl-1">Home & Lifestyle <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
    <li id="h" class="menu pb-1 pl-1">Women's Fashion <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
    <li id="i" class="menu pb-1 pl-1">Men's Fashion <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
    <li id="j" class="menu pb-1 pl-1">Watches,Bags & Jewelery <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
    <li id="k" class="menu pb-1 pl-1">Sports & Outdoor <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
    <li id="l" class="menu pb-2 pl-1">Automotive & Motorbike <span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li> 
    </ul>
  </div>
  <div  class=" sub-menu d-none "  id="A" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 805px; width: 17%;">
    <ul class ="list-group sub-menu  border-right border-light border-left border-light" style="list-style-type:none;">            
        <li id="aa" class="sub-menu py-2 pl-1 " >Mobile Phones<span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
        <li id="ab" class="sub-menu pb-2 pl-1 ">Tablets<span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
        <li id="ac" class="sub-menu pb-2 pl-1 " >Laptops<span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
        <li id="ad" class="sub-menu pb-2 pl-1 " >Desktops<span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
        <li id="ae" class="sub-menu pb-2 pl-1 " >Gamming Console<span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
        <li id="af" class="sub-menu pb-2 pl-1 " >Action/Video Cameras<span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
        <li id="ag" class="sub-menu pb-2 pl-1 " >Security Cameras<span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
        <li id="ah" class="sub-menu pb-2 pl-1 " >Digital Cameras<span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
        <li id="ai" class="sub-menu pb-2 pl-1 " >Insurance & Protection<span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
        <li id="aj" class="sub-menu pb-4 pl-1 " >Used Phones<span hidden id="arrow"><i class="fa fa-chevron-right" style="font-size:24px"></i></span></li>
        </ul>
    </div>

    <div id="B" class="sub-menu d-none" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
      <ul style="list-style-type:none;">            
          <li>Mobile Accessories</li>
          <li>Audio</li>
          <li>Wearable</li>
          <li>Console Accessories</li>
          <li>Camera Accessories</li>
          <li>Computer Accessories</li>
          <li>Storage</li>
          <li>Printers</li>
          <li>Computer Components</li>
          <li>Network Components</li>
          </ul>
      </div>
      <div id="C" class="sub-menu  d-none" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
        <ul style="list-style-type:none;">            
            <li>Mobile Phones</li>
            <li>Tablets</li>
            <li>Laptops</li>
            <li>Desktops</li>
            <li>Gamming Console</li>
            <li>Action/Video Cameras</li>
            <li>Security Cameras</li>
            <li>Digital Cameras</li>
            <li>Insurance & Protection</li>
            <li>Used Phones</li>
            </ul>
        </div>
        <div id="D"  class="sub-menu d-none"  style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
        <ul style="list-style-type:none;">            
            <li>Mobile Phones</li>
            <li>Tablets</li>
            <li>Laptops</li>
            <li>Desktops</li>
            <li>Gamming Console</li>
            <li>Action/Video Cameras</li>
            <li>Security Cameras</li>
            <li>Digital Cameras</li>
            <li>Insurance & Protection</li>
            <li>Used Phones</li>
            </ul>
        </div>
        <div id="E" class="sub-menu d-none" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
        <ul style="list-style-type:none;">            
            <li>Mobile Phones</li>
            <li>Tablets</li>
            <li>Laptops</li>
            <li>Desktops</li>
            <li>Gamming Console</li>
            <li>Action/Video Cameras</li>
            <li>Security Cameras</li>
            <li>Digital Cameras</li>
            <li>Insurance & Protection</li>
            <li>Used Phones</li>
            </ul>
        </div>
        <div id="F"  class="sub-menu d-none" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
        <ul style="list-style-type:none;">            
            <li>Mobile Phones</li>
            <li>Tablets</li>
            <li>Laptops</li>
            <li>Desktops</li>
            <li>Gamming Console</li>
            <li>Action/Video Cameras</li>
            <li>Security Cameras</li>
            <li>Digital Cameras</li>
            <li>Insurance & Protection</li>
            <li>Used Phones</li>
            </ul>
        </div>
        <div id="G"  class="sub-menu d-none" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
        <ul style="list-style-type:none;">            
            <li>Mobile Phones</li>
            <li>Tablets</li>
            <li>Laptops</li>
            <li>Desktops</li>
            <li>Gamming Console</li>
            <li>Action/Video Cameras</li>
            <li>Security Cameras</li>
            <li>Digital Cameras</li>
            <li>Insurance & Protection</li>
            <li>Used Phones</li>
            </ul>
        </div>
        <div id="H" class="sub-menu d-none" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
        <ul style="list-style-type:none;">            
            <li>Mobile Phones</li>
            <li>Tablets</li>
            <li>Laptops</li>
            <li>Desktops</li>
            <li>Gamming Console</li>
            <li>Action/Video Cameras</li>
            <li>Security Cameras</li>
            <li>Digital Cameras</li>
            <li>Insurance & Protection</li>
            <li>Used Phones</li>
            </ul>
        </div>
        <div id="I" class="sub-menu d-none" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
        <ul style="list-style-type:none;">            
            <li>Mobile Phones</li>
            <li>Tablets</li>
            <li>Laptops</li>
            <li>Desktops</li>
            <li>Gamming Console</li>
            <li>Action/Video Cameras</li>
            <li>Security Cameras</li>
            <li>Digital Cameras</li>
            <li>Insurance & Protection</li>
            <li>Used Phones</li>
            </ul>
        </div>
        <div id="J"  class="sub-menu d-none" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
        <ul style="list-style-type:none;">            
            <li>Mobile Phones</li>
            <li>Tablets</li>
            <li>Laptops</li>
            <li>Desktops</li>
            <li>Gamming Console</li>
            <li>Action/Video Cameras</li>
            <li>Security Cameras</li>
            <li>Digital Cameras</li>
            <li>Insurance & Protection</li>
            <li>Used Phones</li>
            </ul>
        </div>
        <div id="K"  class="sub-menu d-none" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
        <ul style="list-style-type:none;">            
            <li>Mobile Phones</li>
            <li>Tablets</li>
            <li>Laptops</li>
            <li>Desktops</li>
            <li>Gamming Console</li>
            <li>Action/Video Cameras</li>
            <li>Security Cameras</li>
            <li>Digital Cameras</li>
            <li>Insurance & Protection</li>
            <li>Used Phones</li>
            </ul>
        </div>
        <div id="L" class="sub-menu d-none" style="position: absolute;right: 0;top:0;margin: 100px; margin-right: 865px;">
        <ul style="list-style-type:none;">            
            <li>Mobile Phones</li>
            <li>Tablets</li>
            <li>Laptops</li>
            <li>Desktops</li>
            <li>Gamming Console</li>
            <li>Action/Video Cameras</li>
            <li>Security Cameras</li>
            <li>Digital Cameras</li>
            <li>Insurance & Protection</li>
            <li>Used Phones</li>
            </ul>
        </div>
  </div>
    

    
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