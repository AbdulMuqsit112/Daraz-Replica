<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<?php include ('libraries.php')?>
<body>
<?php include('navbar1.php')?>
<?php include('navbar2.php')?>
           <div class="container" style=" width: 70%; ">
            <h2 class="text-left">Welcome to Daraz! Please login.</h2>
            <p class="hint-text text-right" >New member <a href="signup.php">Register</a> here</p>
<form action="act2.php" method="POST" class="col-13" >
            <div class=" py-4 px-4" style="width: 45%; height: 25%;  float: left; background-color: #ffffff;">
    
        <div class="form-group py-3" >
            <label class="small">Email*</label>
                <div class="border"><input  id="form"  type="text" class="form-control" name="email" placeholder="Please Enter Email" required="required"></div>
            </div>
        <div class="form-group py-3">
            <label class="small">Password*</label>           
            <input type="password" id="form"  name="password" class="form-control border" placeholder="Please Enter your Password" required="required">
          </div>
        </div>
<div class="py-4 px-4" style="width: 45%; height: 25%;  float: right; background-color: #ffffff;">

 <div class="form-group">
     <button type="submit" class="btn  btn-lg btn-block w-75" name ="login"style="background-color:#FE701E;">Log In</button>
 </div>
</div>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
  </body>
</html>



