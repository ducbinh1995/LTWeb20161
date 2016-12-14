<!DOCTYPE html>
<html>
<title>Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.picture {display:none}
.mode {display:none;}
</style>
<!-- header -->
<?php require("header.php"); ?>
<body class="w3-light-grey">
<div class="w3-content" style="max-width:2000px;margin-top:46px">

	<div class="w3-row">
		<div class="w3-col l8">
			<div class="w3-card-4 w3-margin w3-white">
			<h2 class="w3-container w3-section w3-leftbar w3-border-green w3-pale-green"><b>ĐỒNG TIỀN XƯƠNG MÁU </b></h2><br>
				<div class="w3-row">
					<div class="w3-half">
						<!-- image -->

						<div class="w3-margin">
<div class="w3-row">
  <div class="w3-col s4 w3-container">
  <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('pro1');">
    <img src="image/pro1.jpg" alt="pro1" style="width:100%">
  </a>
  </div>
  <div class="w3-col s4 w3-container">
    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('pro2');">
      <img src="image/pro2.jpg" alt="pro2" style="width:100%">
    </a>
  </div>
  <div class="w3-col s4 w3-container">
    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('pro3');">
      <img src="image/pro3.jpg" alt="pro3" style="width:100%">
    </a>
  </div>
<!--   <div class="w3-col s3 w3-container">
    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('pro4');">
      <img src="image/pro4.jpg" alt="pro4" style="width:100%">
    </a>
  </div> -->
</div><br>

<div id="pro1" class="picture w3-display-container">
  <img src="image/pro1wide.jpg" alt="pro1" style="width:100%">
  
</div>

<div id="pro2" class="picture w3-display-container">
  <img src="image/pro2wide.jpg" alt="pro2" style="width:100%">
  
</div>

<div id="pro3" class="picture w3-display-container">
  <img src="image/pro3wide.jpg" alt="pro3" style="width:100%">
  
</div>

<!-- <div id="pro4" class="picture w3-display-container">
  <img src="image/pro4wide.jpg" alt="pro4" style="width:100%">
  
</div>
 -->



<script>
openImg("pro1")
function openImg(imgName) {
  var i, x;
  x = document.getElementsByClassName("picture");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(imgName).style.display = "block";
}
</script>










						</div>
					</div>

					<div class="w3-half">
						<!-- price -->
						<div class="w3-margin">
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
						<button class="w3-btn w3-green w3-border">Button</button>
						</div>
					</div>
				
				</div>

			</div>

			<div class="w3-card-4 w3-margin w3-white">
			<!-- content -->





  <ul class="w3-navbar w3-pale-green">
    <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Description');">Description</a></li>
    <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Warranty');">Warranty</a></li>
    <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Shipping');">Shipping cost</a></li>
  </ul>

  <div id="Description" class="w3-container w3-border mode">
    <h2>US MINT PEACE SILVER DOLLAR DATED BETWEEN 1921 AND 1935</h2>
    <p>LHere is a marvelous opportunity to own the last SILVER Dollar made for US commerce. Happy that World War 1 was finally over, the American public lobbied the government to issue a coin commemorating the fact that the world was finally at peace. In 1921 the Peace Silver Dollar was born.
 
	Designed by Anthony DeFrancisci, the coin was the result of a competition to find designs emblematic of peace. The obverse represents the head and neck of the Goddess of Liberty in profile with the legend "In God We Trvst". This was not a spelling error but intentionally used the classic Roman letter "V" in place of the "U" in Trust. On the reverse depicts a bald eagle resting on a mountaintop clutching an olive branch, with the legend "Peace" written below. It was the last United States dollar coin to be struck for circulation in silver.
	Destined to be a great investment, not only for their timeless beauty but also for the fact that each coin contains of 3/4 of an ounce of pure silver. Minted at the Philadelphia, Denver and San Francisco Mints, you can find the mintmark to the left of the Eagle's tail feathers on the reverse as in the picture below. Coins minted in Philadelphia did not have a mintmark.</p>
  </div>

  <div id="Warranty" class="w3-container w3-border mode">
    <p>See Standard Notice</p> 
  </div>

  <div id="Shipping" class="w3-container w3-border mode">
    <h4>Shipping charges will be added to the final bid price of each item. The shipping rates are:</h4>
    <ul class="w3-ul">
  		<li>Continental U.S. = $6.87</li>
  		<li>Alaska, Hawaii = $6.87</li>
 		<li>Ha Noi, Viet Nam = $69.98</li>
	</ul>
  </div>
</div>

<script>
openCity(event, 'Description')
function openCity(evt, modeName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("mode");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-green", "");
  }
  document.getElementById(modeName).style.display = "block";
  evt.currentTarget.className += " w3-green";
}
</script>






			</div>

		<div class="w3-col l4">
        <div class="w3-card-2 w3-margin w3-margin-top w3-green w3-center">
        <h2>Related product</h2>
        </div>
  			<div class="w3-card-2 w3-margin w3-margin-top w3-white">
  			<img src="image/popsicle.jpg" alt="Popsicle" style="width:100%">
        <h3>All I Need Is a Popsicle</h3>
        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
  			</div>
        <div class="w3-card-2 w3-margin w3-margin-top w3-white ">
        <img src="image/salmon.jpg" alt="Salmon" style="width:100%">
        <h3>Salmon For Your Skin</h3>
        <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
        </div>
  		</div>	
		</div>
</div>
</body>
<!-- footer -->
<?php require("footer.php"); ?> 
</html>