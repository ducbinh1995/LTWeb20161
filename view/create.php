<?php require_once ("../controller/controller.php"); ?>
<!DOCTYPE html>
<html>
<title>User</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.w3-sidenav {width: 140px;}
	#main {margin-left: 120px}
	.w3-row-padding img {margin-bottom: 12px}
</style>
<!-- header -->
<?php require("header.php"); ?>
<body>
<div class="w3-content" style="max-width:2000px;margin-top:40px">
<!-- siddenav -->
	<nav class="w3-sidenav w3-center ">
  <!-- Avatar image in top left corner -->
  <img src="image/img_avatar2.png" style="width:100%">
    <a class="w3-padding-large w3-hover-green" href="#info">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a class="w3-padding-large w3-hover-green" href="#new">
    <i class="fa fa-plus w3-xxlarge"></i>
    <p>CREATE</p>
  </a>
  <a class="w3-padding-large w3-hover-green" href="#bid">
    <i class="fa fa-shopping-bag w3-xxlarge"></i>
    <p>MY BID</p>
  </a>
  <a class="w3-padding-large w3-hover-green" href="#listing">
    <i class="fa fa-shopping-cart w3-xxlarge"></i>
    <p>MY LISTING</p>
  </a>
  <a class="w3-padding-large w3-hover-green" href="#messages">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>MESSAGES</p>
  </a>
	</nav>


<div class="w3-padding-large" id="main">
    <div class="w3-container" id="new">
  <h1 class="w3-xxxlarge w3-text-green"><b>New Product</b></h1>
    <form class="w3-container w3-card-4" method="post" action="../controller/product_control.php" enctype="multipart/form-data">
        <div class="w3-section">
          <label><b>Product name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"  name="prd_name" required>
          <label><b>Descripion</b></label>
          <textarea class=" w3-border w3-input" name="descrip" rows="5" cols="40"></textarea><br>
          <label><b>Category</b></label>
          <select class="w3-select w3-border" name="category_id">
        <option value="" disabled selected>Choose your option</option>
        <?php
        $list_category=controller::category_control();
        $i=1;
        foreach($list_category as $category_value) {
          echo "<option value=\"$i\">".$category_value->category_name."</option>";
          $i+=1;
        }
        ?>
          </select>
        <br><br>
          <label><b>Image</b></label>
          <input class="w3-input w3-border" type="file" name="image"><br>
          <button class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge w3-margin-top" type="submit" name="add_product">Create</button>
        </div>
      </form>
  </div><hr>
</div>

  </div>
  </body>
  </html>