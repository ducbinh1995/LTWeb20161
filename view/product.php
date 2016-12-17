<?php
  session_start();  
?>
<!DOCTYPE html>
<html>
<title>Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
  if(isset($_SESSION["current_user"])){
    require_once("nheader.php");
  } else {
    require_once("header.php");
  } 
  require_once("../controller/controller.php");
  if (isset($_GET["auction_id"])){
    $prod = controller::auction_control_id($_GET["auction_id"]);
  }
?>
<body>

	<div class="w3-display-container">

  <div class="w3-display-container w3-center">
    <?php  
      echo "<br><br>" ;
      echo "<img src=".$prod->product->image." style=\"width:500px\">";
    ?>
    <form method="POST" action="../controller/del_product.php" >
    <?php
    if (isset($_SESSION["current_user"])) {
      if ($_SESSION["current_user"] == 1) {
      
      echo "<br><br>
       <input type=\"hidden\"  name=\"auction_id\" value= $prod->auction_id /> 
        <button class=\"w3-btn w3-white w3-border w3-border-green w3-round-xlarge w3-margin-top\" type = \"submit\"> Delete</button> ";
      
      }
    }
      
    ?>
    </form> 
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    </div>
  </div>

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<div class="w3-padding-64 w3-dark-grey">
	<div class="w3-container">
    <?php  
		  echo "<h1 class=\"w3-xxxlarge w3-text-red\"><b>".$prod->product->product_name."</b></h1>";
      echo "<p>".$prod->product->description."</p>";
		?>
	</div>
</div>

<div class="w3-padding-64 w3-light-grey">
<div class="w3-container">
<h1 class="w3-xxxlarge w3-text-green"><b>Bid now</b></h1>
            
              <form method="POST" action="../controller/edit_bid.php" >
            
            <ul class="w3-ul">
            <?php  
              echo "<li><b>Current Price:</b>".$prod->current_price."$</li>";
              echo "<li><b>Bid Increment:</b>".$prod->step."</li>";
              ?>
              <?php
              if (isset($_SESSION["current_user"])) {
                if ($_SESSION["current_user"] != 1 && $_SESSION["current_user"] != $prod->product->owner_id ){
                  echo "<label><b>Enter your bid: </b></label>";
                  echo "</ul>";
                  echo "<br>";
                  echo "<div class=\"w3-row\">";
            
                  echo "<input type=\"hidden\"  name=\"auction_id\" value= $prod->auction_id /> ";
            
                  echo "<input class=\" w3-col l3 w3-input w3-border w3-round-xlarge\" type=\"text\" name=\"bid_price\">";
                  echo "</div><br>";
                  echo "<button class=\"w3-btn w3-white w3-border w3-border-green w3-round-xlarge\"  type=\"submit\">Bid</button>";
                }
            
              }
              ?>
              
            </div>
            </form>
</div>

</body>
<?php require("footer.php"); ?>
</html>