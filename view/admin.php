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

	<!-- page content -->

	<div class="w3-padding-large" id="main">
	<div class="w3-container" id="info">
		<h1 class="w3-xxxlarge w3-text-green"><b>User Information</b></h1>
		<form class="w3-container" action="form.asp">
        <div class="w3-section">
          <label><b>Username</b></label>
          <?php
           echo "<p class=\"lead\"> $u_name </p>" ;
       		?>
          <label><b>First Name</b></label>
          <?php
           echo "<p class=\"lead\"> $fi_name </p>" ;
       		?>
          <label><b>Last Name</b></label>
          <?php
           echo "<p class=\"lead\"> $la_name </p>" ;
       		?>
          <label><b>Email</b></label>
          <?php
           echo "<p class=\"lead\"> $mail </p>" ;
       		?>
          <label><b>Phone number</b></label>
          <?php
           echo "<p class=\"lead\"> $p_num </p>" ;
       		?>
          <button class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge w3-margin-top" type="submit">Update</button>
        </div>
      </form>
	</div><hr>

	<div class="w3-container" id="products">
	<h1 class="w3-xxxlarge w3-text-green"><b>Products List</b></h1>
		<ul class="w3-ul w3-card-4">
			<li class="w3-padding-16">
				<img src="image/img_avatar1.png" class="w3-left w3-circle w3-margin-right" style="width:60px">
      			<span class="w3-xlarge">productname</span><br>
     			<span>time remain</span>
     	
			</li>
			<li class="w3-padding-16">
				<img src="image/img_avatar1.png" class="w3-left w3-circle w3-margin-right" style="width:60px">
      			<span class="w3-xlarge">productname</span><br>
     			<span>time remain</span>
     		
			</li>
			<li class="w3-padding-16">
				<img src="image/img_avatar1.png" class="w3-left w3-circle w3-margin-right" style="width:60px">
      			<span class="w3-xlarge">productname</span><br>
     			<span>time remain</span>
     			
			</li>
		</ul>
	</div><hr>

	

</body>
</html>