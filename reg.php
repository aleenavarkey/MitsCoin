<?php
//if (session_status() !== PHP_SESSION_ACTIVE)
{
session_start();
}
if(session_id() == '' || !isset($_SESSION))
{
session_start();
}
if (isset($_SESSION["username"]))
{
header ("location:index.php");
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,
initial-scale=1.0"/>
<title>Register</title>
<link rel="stylesheet" href="css/foundation.css" />
<script src="js/vendor/modernizr.js"></script>
</head>
<body>
<nav class="top-bar" data-topbar role="navigation">
<ul class="title-area">
<li class="name">
</li>
<li class="toggle-topbar menuicon"><ahref="#"><span></span></a></li>
</ul>
<section class="top-bar-section">
<!-- Right Nav Section -->
<ul class="right">
<li><a href="about.php">About</a></li>
<?php
if(isset($_SESSION['username']))
{
echo '<li><a href="products.php">Pay</a></li>';
echo '<li><a href="cart.php">View Cart</a></li>';
echo '<li><a href="orders.php">My Orders</a></li>';
}
?>
<li><a href="contact.php">Contact</a></li>
<?php
if(isset($_SESSION['username']))
{
echo '<li><a href="account.php">My
Account</a></li>';
echo '<li><a href="logout.php">Log Out</a></li>';
}
Else
{
echo '<li><a href="login.php">Log In</a></li>';
echo '<li
class="active"><ahref="register.php">Register</a></li>';
}
?>
</ul>
</section>
</nav>
<form method="POST" action="insert.php" style="margintop:30px;">
</div>
<div class="small-8 columns">
<input type="text" id="right-label" placeholder="Enter
firstname" name="fname">
</div>
</div>
<div class="row">
<div class="small-4 columns">
<label for="right-label" class="right
inline">LastName</label>
</div>
registration.php
<div class="small-8 columns">
<input type="text" id="right-label" placeholder="Enter
lastname" name="lname">
</div>
</div>
<div class="row">
<div class="small-4 columns">
<label for="right-label" class="right
inline">Address</label>
</div>
<div class="small-8 columns">
<input type="text" id="right-label"
placeholder="Enteraddress" name="address">
</div>
</div>
<div class="row">
<div class="small-4 columns">
<label for="right-label" class="right
inline">City</label>
</div>
<div class="small-8 columns">
<input type="text" id="right-label" placeholder="Enter
city"name="city">
</div>
</div>
<div class="row">
<div class="small-4 columns">
<label for="right-label" class="right
inline">PinCode</label>
</div>
<div class="small-8 columns">
<input type="number" id="right-label"
placeholder="Enterpincode" name="pin">
</div>
</div>
<div class="row">
<div class="small-4 columns">
<label for="right-label" class="right inline">EMail</label>
</div>
<div class="small-8 columns">
<input type="email" id="right-label" placeholder="Enter
emailid" name="email">
</div>
</div>
<div class="row">
<div class="small-8">
<div class="row">
<div class="small-4 columns">
<label for="right-label" class="right
inline">FirstName</label>
<div class="row">
<div class="small-4 columns">
<label for="right-label"
class="rightinline">Password</label>
</div>
<div class="small-8 columns">
<input type="password" id="right-label"
placeholder="Enterpassword" name="pwd">
</div>
</div>
<div class="row">
<div class="small-4 columns">
<label for="right-label" class="right
inline">Securityquestion: What is your MITS DBlab password?
(In case you forget yourpassword)</label>
</div>
<div class="small-8 columns">
<input type="text" id="right-label"
placeholder="Enteranswer" name="answer">
</div>
</div>
<div class="row">
<div class="small-4 columns">
</div>
<div class="small-8 columns">
<input type="submit" id="right-label"
value="Register"style="background: #0078A0; border: none;
color: #fff; font-family:'Helvetica Neue', sans-serif;
font-size: 1em; padding: 10px;">
<input type="reset" id="right-label"
value="Reset"style="background: #0078A0; border: none;
color: #fff; font-family:'Helvetica Neue', sans-serif;
font-size: 1em; padding: 10px;">
<hr>
</div>
</div>
</div>
</div>
</form>
<div class="row" style="margin-top:10px;">
<div class="small-12">
<footer>
<p style="text-align:center; font-size:0.8em;">&copy;
MITCoins!All Rights Reserved.</p>
</footer>
</div>
</div>
<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
$(document).foundation();
</script>
</body>
</html>
