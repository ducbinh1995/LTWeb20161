
<header>
<div class="w3-top">
  <ul class="w3-navbar w3-black">
      <li><a href="#"><i class="fa fa-home"></i></a></li>
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
      <li class="w3-right"><button onclick="init();" class="w3-btn"><i class="  fa fa-sign-in"></i> Log In</button></li>
    </ul>
    </div>
    <!-- open login -->
 <div class="w3-container"> 
 <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">



    <div class="w3-row">
    <a href="javascript:void(0)" onclick="openMode(event, 'Login');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Login</div>
    </a>
    <a href="javascript:void(0)" onclick="openMode(event, 'New');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">New account</div>
    </a>
    <a href="javascript:void(0)" onclick="openMode(event, 'Forgot');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Forgot password</div>
    </a>
  </div>
  <br>
    <!-- login form -->
    <div id="Login" class="w3-container mode">
      <div class="w3-center"><br>        
        <img src="image/img_avatar2.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" method="post" action="../controller/user_control.php">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required>
          <button class="w3-btn-block w3-green w3-section w3-padding" name="login" type="submit">Login</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
        </div>
      </form>
    </div>


    <!-- new account form -->
    <div id="New" class="w3-container mode">
      <div class="w3-center"><br>        
        <img src="image/img_avatar2.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="form.asp">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="psw" required><br>
          <label><b>Confirm Password</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Confirm Password" name="confirmpsw" required><br>
          <label><b>First Name</b></label>
          <input class="w3-input w3-border " type="text"  placeholder="Enter First Name" name="firstname" required><br>
          <label><b>Last Name</b></label>
          <input class="w3-input w3-border " type="text"  placeholder="Enter Last Name" name="lastname" required><br>
          <label><b>Email</b></label>
          <input class="w3-input w3-border " type="email" placeholder="Email" name="email" required><br>
          <label><b>Phone number</b></label>
          <input class="w3-input w3-border " type="text"  placeholder="Phone Number" name="phone" required>
          <button class="w3-btn-block w3-green w3-section w3-padding" type="submit">Create</button>
        </div>
      </form>
    </div>

    <!-- reset password -->    
    <div id="Forgot" class="w3-container mode">
      <div class="w3-center"><br>        
        <img src="image/img_avatar2.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="form.asp">
        <div class="w3-section">
          <label><b>Username</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" required>
          <label><b>Email</b></label>
          <input class="w3-input w3-border" type="email" placeholder="Enter Email" name="email" required>
          <button class="w3-btn-block w3-green w3-section w3-padding" type="submit">Reset Password </button>
        </div>
      </form>
    </div>

    <script>
function openMode(evt, modeName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("mode");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(modeName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>

 <script>
        function init() {
           document.getElementById('id01').style.display='block';
           openMode(event, 'Login');
        }
  </script>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
      </div>

    </div>
  </div>
 </div>
 </header>