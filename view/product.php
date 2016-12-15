<!DOCTYPE html>
<html>
<title>Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
  require_once("header.php"); 
  require_once("../controller/controller.php");
  if (isset($_GET["product_id"])){
    $pro = controller::product_control();
    $product = $pro[0];
  }
?>
<body>

	<div class="w3-display-container">

  <div class="w3-display-container w3-center">
    <?php  
      echo "<img src=".$product->image." style=\"width:100%\">";
    ?>
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
		  echo "<h1 class=\"w3-xxxlarge w3-text-red\"><b>".$product->product_name."</b></h1>";
      echo "<p>".$product->description."</p>";
		?>
	</div>
</div>

<div class="w3-padding-64 w3-light-grey">
<div class="w3-container">
<h1 class="w3-xxxlarge w3-text-green"><b>Bid now</b></h1>
	
						<ul class="w3-ul">
  							<li><b>Number of Bids:</b></li>
  							<li><b>Bid Increment:</b></li>
 							<li><b>Shipping Cost Per Unit:</b></li>
 							<li><b>Listing #: </b></li>
 							<li><b>Quantity Available:</b></li>
 							<li><b>Condition</b></li>
 							<li><b>Close Date:</b></li>
						</ul>
						<br>
						<button class="w3-btn w3-white w3-border w3-border-green w3-round-xlarge">Button bid</button>
						</div>

</div>

<div class="w3-padding-64 w3-white">
<div class="w3-container w3-center">
<h1 class="w3-jumbo"><b>Related</b></h1>
<div class="w3-row-padding w3-padding-16 w3-center" >
    <div class="w3-quarter">
      <img src="image/sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="image/steak.jpg" alt="Steak" style="width:100%">
      <h3>Let Me Tell You About This Steak</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="image/cherries.jpg" alt="Cherries" style="width:100%">
      <h3>Cherries, interrupted</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      <p>What else?</p>
    </div>
    <div class="w3-quarter">
      <img src="image/wine.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
  </div>


</div>
</div>


</body>
<?php require("footer.php"); ?>
</html>