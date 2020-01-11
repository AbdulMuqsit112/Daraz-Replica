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

        <nav class="navbar navbar-expand-sm py-0 navbar-light " style="background-color:#F0F0F0;">
                
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
                          <?php if (!empty($_SESSION['name'])) { // or however you determine they're logged in ?>
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
             <div style="height: 5rem">

             </div>


        
        <div class="container">
            <div class="alert alert-success alert-dismissible"   
            style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];} else {echo 'none'; } unset($_SESSION['showAlert']);  ?>">
                <button type="button" class="close" data-dismiss="alert">
                </button>
                <strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];} unset($_SESSION['showAlert']);  ?></strong>
            </div>
        <div class="card-footer">    
        <div class="row">
            
                <div class="col-12 col-md-8">ITEMS</div>
                <div class="col-sm">PRICE</div>
                <div class="col-sm">QUANTITY</div>
            </div>
            </div>
                            <!-- PRODUCT -->

                               <?php
                               include 'config.php';
                               $stmt = $conn->prepare("SELECT * FROM cart");
                               $stmt->execute();
                               $result = $stmt->get_result();
                               $grand_total=0;
                               while($row = $result->fetch_assoc()):
                               ?>     
                              <div class="card flex-row flex-wrap">
                              <div class="card-header border-0 ">
                              <img class="img-responsive" src="<?= $row['product_image'] ?>" width="120" height="100">  
                               </div>              
                            <div class="card-block px-2">
                            
            
                             <div class="py-2"><h6 class="product-name"><strong><?= $row['product_name'] ?></strong></h6></div>
                             <div class="py-2" style="margin-left: 35rem;">
                             <p class="card-text  ">Rs. <?= number_format($row['product_price'],2) ?></p>
                             <a href="action.php?remove=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to remove this item? ');" style="color: black" ><i class="fa fa-trash"></i></a>
                            </div>
                             <div class="py-2" style="margin-left: 50rem;"><?= $row['qty'] ?></div>
                            </div>
                            </div>
                            <?php $grand_total +=$row['total_price'];?>
                               <?php endwhile;?>
                            
                   <!-- END PRODUCT -->         
                           
                        <div class="card-footer" style="background-color: white">
                           <div class="row">  
                        <div class="">
                            <a href="" class="btn btn-outline-secondary pull-right">
                                Update shopping cart
                            </a>
                        </div>
                        <div class="ml-5 pl-5">
                            <span class="ml-5 pl-5"></span>
                          <span class="ml-5 pl-5"><B>GRAND TOTAL:</B></span>
                        </div>
                        <div class="ml-5 pl-5">
                          <span class="ml-5 pl-2"><b>Rs. <?= number_format($grand_total,2); ?></b></span>        
                        </div>
                        <div class="ml-5 pl-5" >
                            <a href="checkout.php" class="btn  px-4 <?= ($grand_total>1)?"":"disabled"; ?>" style="background-color: #FE701E; color:#ffffff">Proceed To Pay</a>
                        </div>    
                    </div>
                          
                    </div>
                </div>
                               
        <script type="text/javascript">
    $(document).ready(function(){
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