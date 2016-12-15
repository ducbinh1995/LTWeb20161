<!DOCTYPE html>
<html>
<title>Product</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php require("header.php"); ?>
<body>

	<div class="w3-display-container">

  <div class="mySlides w3-display-container w3-center">
    <img src="image/1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image/2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="image/3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">  
    </div>
  </div>


  <a class="w3-btn-floating w3-display-left" onclick="plusDivs(-1)">&#10094;</a>
  <a class="w3-btn-floating w3-display-right" onclick="plusDivs(1)">&#10095;</a>
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
		<h1 class="w3-xxxlarge w3-text-red"><b>Product name</b></h1>
		<h3>THE TWENTYFOURTH COIN IN THE HISTORIC PRESIDENTIAL GOLDEN DOLLAR SERIES</h3>
		<p>Building on the success of the 50 State Quarter Series in 2007 the US Mint released the first coin in their new Presidential Series of One Dollar Coins struck using a metal combination of a pure copper core with an outer layer of manganese brass, giving this coin it's distinctive golden hue. Rarely encountered in circulation, these beautiful coins recognize the spirit of Liberty and Democracy by depicting each US President on the obverse and the Statue of Liberty on the reverse. Scheduled to be released at a rate of 4 coins per year, this is the twentyfourth coin in the series, honoring the secondt term of Grover Cleveland our 22nd and 24th President.  </p>
		<h3>ABOUT THE SECOND TERM OF GROVER CLEVELAND, OUR TWENTYFOURTH PRESIDENT</h3>
		<p>The first Democrat elected after the Civil War, Grover Cleveland was the only President to leave the White House and return for a second term four years later.<br>

One of nine children of a Presbyterian minister, Cleveland was born in New Jersey in 1837 and raised in upstate New York. As a lawyer in Buffalo, he became notable for his single-minded concentration. Running as a reformer, he was elected mayor of Buffalo in 1881 and later, governor of New York. He first won the presidency in 1884 with the combined support of Democrats and reform Republicans known as the "Mugwumps."<br>

After losing the presidency to Benjamin Harrison in 1888, he was returned to office in 1892. As the 24th President, Cleveland faced an economic depression. He dealt directly with the financial crisis rather than with business failures, farm mortgage foreclosures and unemployment. He obtained repeal of the mildly inflationary Sherman Silver Purchase Act and, with the aid of Wall Street, maintained the Treasury Department's gold reserve.<br>

When railroad strikers in Chicago violated an injunction, Cleveland sent federal troops to enforce it. His blunt treatment of the railroad strikers stirred the pride of many Americans, as did the vigorous way he forced Great Britain to accept arbitration of a disputed boundary in Venezuela. But overall, his policies during the depression were unpopular, and in 1896, his party instead nominated William Jennings Bryan. After leaving the White House the second time, Cleveland lived in retirement in Princeton, New Jersey, and died in 1908.<br>

Coinage Legislation under President Glover Cleveland (second term)</p>
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