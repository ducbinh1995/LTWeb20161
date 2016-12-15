<?php session_start() ?>
<!DOCTYPE html>
<html>
<title>Index</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.countdown.css"> 
  <script type="text/javascript" src="js/jquery.plugin.js"></script> 
  <script type="text/javascript" src="js/jquery.countdown.js"></script>
<style>
.mySlides {display:none;}
.mode {display:none;}
</style>
<!-- header -->
<?php 
  if(isset($_SESSION["current_user"])){
    require("nheader.php");
  } else {
    require("header.php");
  }
  require("card.php");
?>
<body>

<!-- hot product -->
<div class="w3-display-container">

  <div class="mySlides w3-display-container w3-center">
    <img src="<?php $_SERVER['DOCUMENT_ROOT'] . "/view/" ?>image/1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Los Angeles</h3>
      <p><b>We had the best time playing at Venice Beach!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php $_SERVER['DOCUMENT_ROOT'] . "/view/" ?>image/2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>New York</h3>
      <p><b>The atmosphere in New York is lorem ipsum.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="<?php $_SERVER['DOCUMENT_ROOT'] . "/view/" ?>image/3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Chicago</h3>
      <p><b>Thank you, Chicago - A night we won't forget.</b></p>    
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

<!-- pending product -->
<div class="w3-container w3-section w3-animate-opacity w3-center">
<div class="w3-tag w3-jumbo w3-red">S</div>
<div class="w3-tag w3-jumbo w3-yellow">A</div>
<div class="w3-tag w3-jumbo w3-blue">L</div>
<div class="w3-tag w3-jumbo">E</div>
</div>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <?php  
      $newCard = new Card("image/sandwich.jpg","Sandwich","200.00$","12/16/2016");
      echo $newCard->getCard(); 
      $newCard = new Card("image/steak.jpg","Steak","150.00$","12/18/2016");
      echo $newCard->getCard();
      $newCard = new Card("image/cherries.jpg","Cherries","150.00$","12/20/2016");
      echo $newCard->getCard();
      $newCard = new Card("image/wine.jpg","Pasta and Wine","150.00$","12/22/2016");
      echo $newCard->getCard();
    ?>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <?php  
      $newCard = new Card("image/sandwich.jpg","Sandwich","200.00$","12/16/2016");
      echo $newCard->getCard(); 
      $newCard = new Card("image/steak.jpg","Steak","150.00$","12/16/2016");
      echo $newCard->getCard();
      $newCard = new Card("image/cherries.jpg","Cherries","150.00$","12/16/2016");
      echo $newCard->getCard();
      $newCard = new Card("image/wine.jpg","Pasta and Wine","150.00$","12/16/2016");
      echo $newCard->getCard();
    ?>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <ul class="w3-pagination">
      <li><a class="w3-black" href="#">1</a></li>
      <li><a class="w3-hover-black" href="#">2</a></li>
      <li><a class="w3-hover-black" href="#">3</a></li>
      <li><a class="w3-hover-black" href="#">4</a></li>
      <li><a class="w3-hover-black" href="#">»</a></li>
    </ul>
  </div>
</div>



</body>
<!-- footer -->
<?php require("footer.php"); ?>
</html>





