<?php 
session_start();

?>
<!doctype html>
<html lang="en">
<?php include ('libraries.php')?>
  <body>

  <?php include('navbar1.php')?>
    <?php include('navbar2.php')?>        
        <div style="height: 5rem"></div>
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