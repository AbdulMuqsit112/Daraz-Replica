<?php
session_start();
require 'config.php';
if(isset($_POST['pid']))
{
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pimage = $_POST['pimage'];
    $pcode = $_POST['pcode'];
    $pqty =1;

    $stmt = $conn->prepare("SELECT product_code FROM cart WHERE product_code=?");
    $stmt->bind_param("s",$pcode);
    $stmt->execute();
    $res = $stmt->get_result();
    $r = $res->fetch_assoc();
    $code = $r['product_code'];

    if(!$code)
    {
        $query =$conn->prepare("INSERT INTO cart(product_name,product_price,product_image,qty,total_price,product_code) 
        VALUES(?,?,?,?,?,?)");
      $query->bind_param("sssiss",$pname,$pprice,$pimage,$pqty,$pprice,$pcode);
      $query->execute();
      echo'<div class="alert alert-success alert-dismissible mt-2">
           <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
           <strong>Item Added</strong>
           </div>';  
    }
    else
    {
        echo'<div class="alert alert-danger alert-dismissible mt-2">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
        <strong>Item Already Added</strong>
        </div>';  
    }

}
if(isset($_GET['cartItem'])&& isset($_GET['cartItem']) == 'cart_item')
{
    $stmt = $conn->prepare("SELECT * FROM cart");
    $stmt->execute();
    $stmt->store_result();
    $rows =$stmt->num_rows;

    echo $rows;
}

if(isset($_GET['remove']))
{
    $id = $_GET['remove'];
    $stmt = $conn->prepare("DELETE FROM cart WHERE id =?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $_SESSION['showAlert']='block';
    $_SESSION['message'] = 'Item removed from the cart';
    header('location:cart.php');

}

if(isset($_POST['action']) && isset($_POST['action']) == 'signup')
{

    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $phone =$_POST['phone'];
    $address =$_POST['address'];
    $data ='';

    $stmt = $conn->prepare("INSERT INTO user (name,email,password,phone,address) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss",$name,$email,$password,$phone,$address);
    $stmt->execute();

    $data .= '<div class ="text-center">
            <h1 class="display-4 mt-2">Sucessfully Signed-up</h1>
    
              </div>';
echo $data;
sleep(2);
}



?>