<?php

require 'db.php';
session_start();
?>
	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tronix Electronics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">
	<strong>
	<?php  
	if(isset($_SESSION['name']))
  {
      echo "<div id='welcome_msg'>Welcome ".$_SESSION['name']."</div>";
  }
  	else
		echo "Welcome Guest";
	 ?>
	</strong>
	</div>
	<div class="span6">
	<div class="pull-right">
		<a href="product_summary.php"><span>Amount:</span>
		<span class="btn btn-mini">P0.00</span></a>
		<a href="product_summary.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ 0 ] Items in your cart </span> </a> 
		<a href="additem.php"><span class="btn btn-mini btn-primary">Add an Item </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php" style="padding-top: 0px;padding-bottom: 0px;"><img src="logo.png" alt="Bootsshop" width="200px"></a>
		<form class="form-inline navbar-search" method="post" action="products.php" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>DIY Robotics and Electronics </option>
			<option>Electronic Components </option>
			<option>Automation Parts</option>
			<option>Electrical Components</option>
			<option>Tools and Equipment</option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="special_offer.php">Specials Offer</a></li>
	 <li class=""><a href="normal.php">Delivery</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 <li class="">

	 	<?php if(isset($_SESSION['name'])): ?>
  <a href="logoutaction.php" style="padding-right:0" ><span class="btn btn-large btn-success">Log out</span></a>
<?php else: ?>
  <a href="login.php" style="padding-right:0" ><span class="btn btn-large btn-success">Log in</span></a>
<?php endif; ?>

	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png" alt="cart">0 Items in your cart  <span class="badge badge-warning pull-right">$0.00</span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a>DIY Robotics and Electronics</a>
				<ul>
				<li><a class="active" href="products.php"><i class="icon-chevron-right"></i>DIY Robot Kits</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Kits and Modules</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Device and Gizmos</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Hobby Motors</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Servo Motors</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Power Sources</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Project Making</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Kits and Module Cases</a></li>
				</ul>
			</li>
			<li class="subMenu"><a>Electronic Components</a>
			<ul style="display:none">
				<li><a href="products.php"><i class="icon-chevron-right"></i>Discrete Components</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Electro-Mechanical Components</a></li>											
				<li><a href="products.php"><i class="icon-chevron-right"></i>Integrated Circuits</a></li>	
				<li><a href="products.php"><i class="icon-chevron-right"></i>Opto Components</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Passive Components</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Sensors</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Wiring and Connectors</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>Automation Parts</a>
				<ul style="display:none">
				<li><a href="products.php"><i class="icon-chevron-right"></i>Controllers</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Industrial Counter & Timer</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Industrial Robots</a></li>	
				<li><a href="products.php"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Motors</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Pneumatics</a></li>															
			</ul>
			</li>
			<li class="subMenu"><a>Electrical Components</a>
				<ul style="display: none;">
				<li><a href="products.php"><i class="icon-chevron-right"></i>Circuit Protectors</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Contractors</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Fans, Filters, Heaters and Meters</a></li>	
				<li><a href="products.php"><i class="icon-chevron-right"></i>Power Supplies</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Relays and Solid State Relays</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Switches and Terminals</a></li>	
				<li><a href="products.php"><i class="icon-chevron-right"></i>Miscellaneous</a></li>
				</ul>	
			</li>
			<li class="subMenu"><a>Tools and Equipment</a>
				<ul style="display: none;">
				<li><a href="products.php"><i class="icon-chevron-right"></i>Diagnostic Tools</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Lab Equipments</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Test Equipments</a></li>	
				<li><a href="products.php"><i class="icon-chevron-right"></i>Tools</a></li>
				</ul>	
			</li>
		</ul>
		<br/>
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Tronix Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
	
	<form class="form-horizontal"  action="register.php" method="post">
		<h4>Your personal information</h4>
		<div class="control-group">
			<label class="control-label" for="fname">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="fname" placeholder="First Name" name="fname" required="" e/>
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="lname">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="lname" placeholder="Last Name" name="lname" required="" />
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="uname">Username <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="uname" placeholder="Username" name="uname" required="" />
		</div>
	  	</div>	

	  	<div class="control-group">
		<label class="control-label" for="email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="email" placeholder="Email" name="email"/>
		</div>
	  	</div>

		<div class="control-group">
		<label class="control-label" for="pass">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="pass" placeholder="Password" name="pass"/>
		</div>
	  	</div>	  
		<div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<div class="controls">
		  <select class="span1" name="bmonth">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
					<option value="7">8&nbsp;&nbsp;</option>
					<option value="7">9&nbsp;&nbsp;</option>
					<option value="7">10&nbsp;&nbsp;</option>
					<option value="7">11&nbsp;&nbsp;</option>
					<option value="7">12&nbsp;&nbsp;</option>
			</select>
			<select class="span1" name="bday">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
					<option value="7">8&nbsp;&nbsp;</option>
					<option value="7">9&nbsp;&nbsp;</option>
					<option value="7">10&nbsp;&nbsp;</option>
					<option value="7">11&nbsp;&nbsp;</option>
					<option value="7">12&nbsp;&nbsp;</option>
					<option value="7">13&nbsp;&nbsp;</option>
					<option value="7">14&nbsp;&nbsp;</option>
					<option value="7">15&nbsp;&nbsp;</option>
					<option value="7">16&nbsp;&nbsp;</option>
					<option value="7">17&nbsp;&nbsp;</option>
					<option value="7">18&nbsp;&nbsp;</option>
					<option value="7">19&nbsp;&nbsp;</option>
					<option value="7">20&nbsp;&nbsp;</option>
					<option value="7">21&nbsp;&nbsp;</option>
					<option value="7">22&nbsp;&nbsp;</option>
					<option value="7">23&nbsp;&nbsp;</option>
					<option value="7">24&nbsp;&nbsp;</option>
					<option value="7">25&nbsp;&nbsp;</option>
					<option value="7">26&nbsp;&nbsp;</option>
					<option value="7">27&nbsp;&nbsp;</option>
					<option value="7">28&nbsp;&nbsp;</option>
					<option value="7">29&nbsp;&nbsp;</option>
					<option value="7">30&nbsp;&nbsp;</option>
					<option value="7">31&nbsp;&nbsp;</option>
			</select>
			<select class="span1" name="byear">
				<option value="">-</option>
					<option value="1">1991&nbsp;&nbsp;</option>
					<option value="2">1992&nbsp;&nbsp;</option>
					<option value="3">1993&nbsp;&nbsp;</option>
					<option value="4">1994&nbsp;&nbsp;</option>
					<option value="5">1995&nbsp;&nbsp;</option>
					<option value="6">1996&nbsp;&nbsp;</option>
					<option value="7">1997&nbsp;&nbsp;</option>
					<option value="7">1998&nbsp;&nbsp;</option>
					<option value="7">1999&nbsp;&nbsp;</option>
					<option value="7">2001&nbsp;&nbsp;</option>
					<option value="7">2002&nbsp;&nbsp;</option>
					<option value="7">2003&nbsp;&nbsp;</option>
					<option value="7">2004&nbsp;&nbsp;</option>
					<option value="7">2005&nbsp;&nbsp;</option>
					<option value="7">2006&nbsp;&nbsp;</option>
					<option value="7">2007&nbsp;&nbsp;</option>
					<option value="7">2008&nbsp;&nbsp;</option>
					<option value="7">2009&nbsp;&nbsp;</option>
					<option value="7">2010&nbsp;&nbsp;</option>
			</select>
		</div>
	  </div>


		<h4>Your address</h4>
		
		<div class="control-group">
			<label class="control-label" for="loc">Address<sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="loc" placeholder="Adress" name="loc"/> <span>Street address, P.O. box, company name, c/o</span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="phone">Phone <sup>*</sup></label>
			<div class="controls">
			  <input type="text"  name="phone" id="phone" placeholder="phone"/> <span>You must register at least one phone number</span>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone </label>
			<div class="controls">
			  <input type="text"  name="mobile" id="mobile" placeholder="Mobile Phone"/> 
			</div>
		</div>
		
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" value="Register" />
			</div>
		</div>		
	</form>
</div>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="user.php">YOUR ACCOUNT</a>
				<a href="user.php">PERSONAL INFORMATION</a> 
				<a href="user.php">ADDRESSES</a> 
				<a href="user.php">DISCOUNT</a>  
				<a href="user.php">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.php">CONTACT</a>  
				<a href="registeran.php">REGISTRATION</a>  
				<a href="legal_notice.php">LEGAL NOTICE</a>  
				<a href="tac.php">TERMS AND CONDITIONS</a> 
				<a href="faq.php">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.php">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Tronix</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	

</body>
</html>