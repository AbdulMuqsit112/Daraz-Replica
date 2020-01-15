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
            <h2 class="text-left">Create Your Daraz Account</h2>
            <p class="hint-text text-right" >Alredy member <a href="login.php">Login</a> here</p>
            <div class=" py-4 px-4" style="width: 45%; height: 25%;  float: left; background-color: #ffffff;" id="show">
            <form action="" method="post" class="col-13" id="signup">
        <div class="form-group py-3">
            <label class="small">Phone Number*</label>
                <div class="border"><input  id="form"  type="text" class="form-control" name="phone" placeholder="Please Enter Phone Number" required="required"></div>
                          
            </div>
        <div class="form-group py-3" >
            <label class="small">Email Address*</label>
            <input type="email" id="form" class="form-control border" name="email" placeholder="Please Enter Your Email" required="required">
                       
        </div>
        <div class="form-group py-3">
            <label class="small">Password*</label>           
            <input type="password" id="form"  class="form-control border" name="password" placeholder="Minimum 6 characters within a number or letter" required="required">
                       
        </div>
</div>
<div class="py-4 px-4" style="width: 45%; height: 25%;  float: right; background-color: #ffffff;" id="show">

 <div class="form-group py-3" >
     <label class="small">Full Name*</label>
         <div class="border"><input  id="form" type="text" class="form-control" name="name" placeholder="Enter Your First And Last Name" required="required"></div>
                    
     </div>
     <div class="form-group py-3" >
     <label class="small">Address*</label>
         <div class="border"><textarea id="form" class="form-control" name="address" placeholder="Enter Your Address" required="required"></textarea>
         </div>
                    
     </div>

 <div class="form-group">
     <label class="checkbox-inline"><input  id="form"  type="checkbox" required="required">  I want to receive exclusive offers and promotions from Daraz</label>
 </div>
 <div class="form-group">
     <button type="submit" class="btn  btn-lg btn-block w-50" style="background-color:#FE701E;">Sign Up</button>
 </div>
 </div>
</form>
</div>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#signup').submit(function(e){
        e.preventDefault();
        $.ajax({
          url:'action.php',
          method: 'post',
          data: $('form').serialize()+"&action=signup",
          success:function(response){
            $('#show').html(response);
            window.location.href = "login.php";
          }

        })

      })

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



