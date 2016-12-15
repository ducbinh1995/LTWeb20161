
<header>
	<div class="w3-top">
  <ul class="w3-navbar w3-black">
      <li><a href="index.php"><i class="fa fa-home "></i></a></li>
      <!-- <li><a href="#">Link 1</a></li> -->
      <li class="w3-dropdown-hover">
      <a href="#">Categories</a>
      <div class="w3-dropdown-content w3-white w3-card-4">
        <a href="#">Fashion</a>
        <a href="#">Electric</a>
        <a href="#">Condom</a>
      </div>
      </li>
      <li><input type="text" class="w3-input w3-dark-grey" placeholder="Search.."></li>
      <li><a class="w3-green" href="#"><i class="fa fa-search"></i></a></li>
      
 
    	<li class="w3-dropdown-hover w3-right">
      <?php
      require_once("../model/user.php");
  if(!isset($_SESSION)) 
    { 
  session_start();
}
  $curr = User::findById($_SESSION["current_user"]);
  $img1 = $curr->profile_image;
  echo "<img src=$img1 class=\"w3-circle w3-margin-right\" style=\"width:35px\"> ";
  #echo $img1 ;
  ?>
    		
    		<div class="w3-dropdown-content w3-white w3-card-4" style="right:0">
      			<a href="admin.php"><i class="fa fa-user w3-xlarge"></i>  Me</a>
            <a href="#"><i class="fa fa-users w3-xlarge"></i> Users</a>
            <a href="../controller/product_control.php?show_product"><i class="fa fa-shopping-cart w3-xlarge"></i> Products</a>
            <a href="../controller/user_control.php?show_user"><i class="fa fa-users w3-xlarge"></i> Users</a>
            <a href="../controller/product_control.php?show_product"><i class="fa fa-shopping-cart w3-xlarge"></i> Products</a>
            <a href="#"><i class="fa fa-envelope w3-xlarge"></i> Messages</a>
      			<a href="../controller/user_control.php?logout"><i class="fa fa-sign-out w3-xlarge"></i>Log out</a>
     			 
    		</div>
    	</li>
<!--     	<li class="w3-right"><img src="image/img_avatar2.png" class="w3-circle w3-margin-right" style="width:35px"></li>
 -->  </div>

  <div class="w3-clear"></div>
    </ul>
    </div>
</header>