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
<<<<<<< HEAD
<?php require("header.php"); ?>
=======
<?php require("nheader.php"); ?>
>>>>>>> fe1c6af8a09f66741bd59afd0ad95841b1042403
<body>
<div class="w3-content" style="max-width:2000px;margin-top:40px">
<!-- siddenav -->
	<nav class="w3-sidenav w3-center w3-small w3-hide-small">
  <!-- Avatar image in top left corner -->
<<<<<<< HEAD
  <img src="image/img_avatar2.png" style="width:100%">
=======
  <?php
  
  $curr = User::findById($_SESSION["current_user"]);
  $img1 = $curr->profile_image;
  echo " <img src=\"$img1\" style=\"width:100%\"> " ;
  #echo $img1 ;
  ?>
>>>>>>> fe1c6af8a09f66741bd59afd0ad95841b1042403
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

	<!-- page content -->
	<div class="w3-padding-large" id="main">


	<div class="w3-container" id="products">
	<h1 class="w3-xxxlarge w3-text-green"><b>Products List</b></h1>
		<ul class="w3-ul w3-card-4">
<<<<<<< HEAD
			<li class="w3-padding-16">
				<img src="image/img_avatar1.png" class="w3-left w3-circle w3-margin-right" style="width:60px">
      			<span class="w3-xlarge">productname</span><br>
     			<span>time remain</span>
     	
			</li>
			<li class="w3-padding-16">
=======
    <?php
      function test($var) {
      return $var->owner_id==$_SESSION["current_user"];
    }
      $result=Product::find("test");
      //echo json_encode($result);
      foreach($result as $result_value) {
        $p_img = $result_value->image ;
      
			echo "<li class=\"w3-padding-16\">";
			echo "<img src=$p_img class=\"w3-left w3-circle w3-margin-right\" style=\"width:60px\">";
      			echo "<span class=\"w3-xlarge\">".$result_value->product_name."</span><br>";
     			echo "<span>time remain</span>";
			echo "</li>";
      }
    ?>
			<!-- <li class="w3-padding-16">
>>>>>>> fe1c6af8a09f66741bd59afd0ad95841b1042403
				<img src="image/img_avatar1.png" class="w3-left w3-circle w3-margin-right" style="width:60px">
      			<span class="w3-xlarge">productname</span><br>
     			<span>time remain</span>
     		
			</li>
			<li class="w3-padding-16">
				<img src="image/img_avatar1.png" class="w3-left w3-circle w3-margin-right" style="width:60px">
      			<span class="w3-xlarge">productname</span><br>
     			<span>time remain</span>
     			
<<<<<<< HEAD
			</li>
=======
			</li> -->
>>>>>>> fe1c6af8a09f66741bd59afd0ad95841b1042403
		</ul>
	</div><hr>



    </div>

	</div>

</body>
<?php require("footer.php"); ?>
</html>