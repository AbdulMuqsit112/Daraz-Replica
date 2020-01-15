<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<?php include('libraries.php')?>
<body>
<?php include('navbar1.php')?>
<?php include('navbar2.php')?>
<div style="height: 8rem;"></div>
<div class="alert alert-success alert-dismissible mt-2 d-none" id="message">
 <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
    <strong>Sucessful Payment</strong>
</div>
<div class="alert alert-danger alert-dismissible mt-2 d-none" id="message1">
 <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
    <strong>Login First</strong>
</div>


<div class="container">
<h3>CHECKOUT</h3>
<form action="" method="POST" class="col-13" >
        <div class=" py-4 px-4" style="width: 45%; height: 25%;  float: left; background-color: #ffffff;">
        <div class="form-group py-3" >
            <label class="small">Enter Card Number*</label>
                <div class="border"><input  id="form"  type="text" class="form-control" name="cnumb" placeholder="Please Enter Your Credit Card Number" required="required"></div>
            </div>
        <div class="form-group">
            <button type="submit" class="btn  btn-lg btn-block w-75 pay" name ="PAY"style="background-color:#FE701E;" id="pay">PAY</button>
        </div>
    </div>
</form>

</div>
<script type="text/javascript">
$(document).ready(function(){
      $("#pay").click(function(e){
        e.preventDefault();
        <?php
        if (!empty($_SESSION['name'])) {
        include('config.php');
        $stmt = $conn->prepare("TRUNCATE TABLE cart;");
        $stmt->execute();
        ?>
        $('#message').removeClass('d-none');
      <?php }
      else
      {?>
      $('#message1').removeClass('d-none');
       window.location.href="login.php";
      <?php }?>

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