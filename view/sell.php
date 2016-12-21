<!DOCTYPE html>
<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  .w3-sidenav {width: 120px;}
  #main {margin-left: 120px}
  .w3-row-padding img {margin-bottom: 12px}
</style>
<!-- header -->
<?php require("nheader.php"); ?>
<body>
<div class="w3-content" style="max-width:2000px;margin-top:40px">
<!-- siddenav -->
  <nav class="w3-sidenav w3-center w3-small w3-hide-small">
  <!-- Avatar image in top left corner -->
  <?php
      
  if(!isset($_SESSION)) 
    { 
  session_start();
}
  $curr = User::findById($_SESSION["current_user"]);
  $img1 = $curr->profile_image;
  $u_name = $curr->user_name;
  $fi_name = $curr->first_name;
  $la_name = $curr->last_name;
  $mail = $curr->email;
  $p_num = $curr->phone;
  function test($var) {
      return ($var->owner_id==$_SESSION["current_user"]) && ($var->status == "waiting");
    }
      $result=Product::find("test");

  echo "<img src=$img1 class=\"w3-circle w3-margin-right\" style=\"width:100px\"> ";
  #echo $img1 ;
  ?>
  
    <a class="w3-padding-large w3-hover-green" href="#info">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a class="w3-padding-large w3-hover-green" href="#users">
    <i class="fa fa-users w3-xxlarge"></i>
    <p>USERS</p>
  </a>
  <a class="w3-padding-large w3-hover-green" href="#products">
    <i class="fa fa-shopping-cart w3-xxlarge"></i>
    <p>PRODUCTS</p>
  </a>
  <a class="w3-padding-large w3-hover-green" href="#messages">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>MESSAGES</p>
  </a>
  </nav>
  <!-- form -->
<div class="w3-padding-large" id="main">
  <div class="w3-container" id="info">
    <h1 class="w3-xxxlarge w3-text-green"><b>SELL</b></h1>

        <div class="w3-section">
        <h1>Select Your Free Option</h1>
        <form method="POST" action="../controller/sell_product.php" >
        <select class="w3-select w3-border" name="product_id">
          <option value="" disabled selected>Choose your product</option>
          <?php 
          $i =0;
          foreach($result as $result_value) {

           echo  " <option value=$result_value->product_id>$result_value->product_name</option> ";


          }

          ?>
          
        </select><br>
        <br>
          <label><b>Start price</b></label><br>
          <input type="number" name="current_price">
          <br><br>
          <label><b>Step</b></label><br>
          <input type="number" name="step">
          <br><br>
          <label><b>End date</b></label><br>
          <input type="datetime-local" name="end_date">
          <br><br>
          <a  href="edit.php"><button class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge w3-margin-top" tpye="submit">Post</button></a>
        </div>
        </form>

      
  </div><hr>
  </body>
</html>