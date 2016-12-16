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
    require_once("nheader.php");
  } else {
    require_once("header.php");
  }
  require_once("card.php");
  require_once("../controller/controller.php");
  $list = controller::auction_control();
  if (isset($_GET["category_id"])) {
    $category_id = $_GET["category_id"];
    $list = null;
    $list = controller::auction_control_with_category($category_id);
  }
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
      if (isset($_GET["page"])) {
        $page = $_GET["page"];
        for ($i=($page-1)*8; $i < $page*8-3; $i++) {
          if ($i >= count($list)) {
             break;
          } 
          $result = $list[$i];
          $newCard = new Card($result->product->image,$result->product->product_name,$result->current_price,"12/12/2018",$result->auction_id);
          echo $newCard->getCard();
        }
      }
      else{
        $page = 1;
        for ($i=($page-1)*8; $i < $page*8-3; $i++) {
          if ($i >= count($list)) {
             break;
          } 
          $result = $list[$i];
          $newCard = new Card($result->product->image,$result->product->product_name,$result->current_price,"12/12/2018",$result->auction_id);
          echo $newCard->getCard();
        }
      }
    ?>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <?php  
      if (isset($_GET["page"])) {
        $page = $_GET["page"];
        for ($i=($page-1)*8-3; $i < $page*8; $i++) {
          if ($i >= count($list)) {
             break;
          } 
          $result = $list[$i];
          $newCard = new Card($result->product->image,$result->product->product_name,$result->current_price,"12/12/2018",$result->auction_id);
          echo $newCard->getCard();
        }
      }
    ?>
  </div>

  <!-- Pagination -->
  <?php  
    $total_pages = ceil(count($list)/8);
    if (count($list) > 8){
      echo "<div class=\"w3-center w3-padding-32\">
            <ul class=\"w3-pagination\">";
      if (isset($_GET["category_id"])) {
        echo "<li><a class=\"w3-black\" href='index.php?category_id = ".$_GET["category_id"]."&page=1'>".'|<'."</a></li>";
      }
      else {
        echo "<li><a class=\"w3-black\" href='index.php?page=1'>".'|<'."</a></li>";
      }
      for ($i=1; $i<=$total_pages; $i++) { 
        if (isset($_GET["category_id"])) {
          echo "<a class=\"w3-hover-black\" href='index.php?category_id = ".$_GET["category_id"]."&page=".$i."'>".$i."</a> "; 
        }
        else{
          echo "<a class=\"w3-hover-black\" href='index.php?page=".$i."'>".$i."</a> "; 
        }
      };
      if (isset($_GET["category_id"])) {
        echo "<a href='index.php?category_id = ".$_GET["category_id"]."&page=$total_pages'>".'>|'."</a> ";  
      }
      echo "<a href='index.php?page=$total_pages'>".'>|'."</a> ";
      echo "</ul>
          </div>";
    }
  ?>
</div>



</body>
<!-- footer -->
<?php require("footer.php"); ?>
</html>





