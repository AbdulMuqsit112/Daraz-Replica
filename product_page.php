<?php 
session_start();
include('config.php');
if(isset($_GET ['id']))
{

    $id = $_GET['id'];
    $_SERVER['ide']=$id;
    $stmt = $conn->prepare("SELECT * FROM product WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
  
  }
?>
<!doctype html>
<html lang="en">
<?php include('libraries.php')?>
<body>
<?php include('navbar1.php')?>
<?php include('navbar2.php')?>
<div  style="height: 6rem; "></div>
<div id="message"></div>
<div class="container">
<div class="">
<div class="card flex-row flex-wrap">
<div class="card-header border-0 ">                              
<img class="img-responsive" src="<?= $r['product_image'] ?>"  height="450rem">  
</div>              
<div class="card-block px-2">
  <div class="py-2"><h3 class="product-name"><strong><?= $r['product_name']; ?></strong></h3></div>
     <div class="py-2" style="margin-left: 1rem;">
         <p class="card-text  ">Rs. <?= number_format($r['product_price'],2); ?></p>
     </div>
     <div class="py-2"><h5 class=""><strong><?= $r['product_discription']; ?></strong></h5></div>
     <div class="container">
     <form action="" class="form-submit">
      <input type="hidden" class="pid" value="<?= $r['id']?>">
      <input type="hidden" class="pname" value="<?= $r['product_name']?>">
      <input type="hidden" class="pprice" value="<?= $r['product_price']?>">
      <input type="hidden" class="pimage" value="<?= $r['product_image']?>">
      <input type="hidden" class="pcode" value="<?= $r['product_code']?>">
     <div class="row">
     <div class="form-group" style="margin-right: 10px">
     <button type="submit" class="btn  btn-lg btn-block w-100 addItem" name ="add"style="background-color:#FE701E;color:#ffffff ">ADD TO CART</button>
     </div>   
     <div class="form-group">
     <button type="submit" class="btn  btn-lg btn-block w-100 checkout" name ="checkout"style="background-color:#FE701E;color:#ffffff ;margin-right:25px;">CHECKOUT</button>
     </div>  
    </div>
     </form>
     </div>
</div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
      $(".addItem").click(function(e){
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
      $(".checkout").click(function(e){
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
            window.location.href="checkout.php"
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



</body>
</html>