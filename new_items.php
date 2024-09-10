<html lang="en">  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Arngren </title>
  <script src="https://kit.fontawesome.com/b0811c54d0.js" crossorigin="anonymous"></script>
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Train+One&family=Work+Sans:wght@100;300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap');

* {
	margin: 0;
	padding: 0;
	font-family: 'Work Sans', sans-serif;
}

.navbar {
    width: 100%;
	height: 25vh;
	background: #fff;
	position: fixed;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	border-bottom: 1px solid #ccc;
	border-top: 7px solid black;
}

.top-navbar {
	margin-top: 15px;
	padding-left: 5%;
	padding-right: 5%;
}

.top-navbar ul li{
	display: inline-block;
	list-style-type: none;
	font-size: 14px;
	font-weight: 800;
	text-transform: uppercase;
	text-align: center;
}

.top-navbar .main-logo{
    color: #4d84e2;
    font-size: 28px;
    font-weight: 800;
	font-family: 'Train One', cursive;
	margin-left: 313px;
	margin-right: 310px;
	cursor: pointer;
}

.top-navbar .sub-logo {
	color: #000;
	font-size: 14px;
	font-weight: 600;
	text-transform: none;
	margin-left: 490px;
} 

.top-navbar span {
    color: #ccc;
	font-size: 30px;
	font-weight: 400;
	padding-right: 10px;
	padding-left: 10px;
}

.top-navbar .fas {
    font-size: 18px;
    margin-left: -30px;	
	margin-bottom: -5px;
}

.top-navbar a{
    text-decoration: none;
	color: #000;
}

.top-navbar a:hover {
    color: blue;
	text-decoration: underline;
}

.top-navbar .bottom-navbar {
    border: 2px solid black;
	margin-top: 20px;
	padding-top: 10px;
	height: 30px;
	text-align: center;
}

.top-navbar .bottom-navbar .fas {
    font-size: 18px;
    margin-right: 5px;	
	color: #4d84e2;
}

.top-navbar .bottom-navbar li{
    display: inline-block;
	list-style-type: none;
}

.top-navbar .bottom-navbar a {
    text-decoration: none;
	color: #000;
	font-size: 14px;
	font-weight: 800;
	text-transform: uppercase;
	transition: 0.05s;
}

.top-navbar .bottom-navbar a:hover {
    color: blue;
	text-decoration: underline;
}

.content {
	padding-top: 100px;
	padding-right: 6%;
	padding-left: 6%;
	height: auto;
}

.content .banner img {
    width: 60%;
	margin-top: 120px;
	margin-left: 20%;
	margin-bottom: 20px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	border-bottom: 1px solid #ccc;
}

.cards {
	margin-top: 40px;
	display: grid;
	grid-template-columns: repeat(3, minmax(302px, 302px));
	gap: 50px;
	justify-content: center;
} 

.card {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	border: 1px solid #ccc;
}

.card:hover {
    box-shadow: 0 0 5px blue;
}

.card-image {
    width: 200px;
	height: 200px;
	display: block;
	margin-left: 50px;
}

.card-content {
    line-height: 1.5;
	font-size: 0.9em;
	padding: 15px;
	background: #fafafa;
	border-top: 1px solid #ccc;
}

.card-content > p:first-of-type {
    margin-top: 0;
	margin-bottom: 15;
}

.card-content > p:last-of-type {
    margin-bottom: 0;
}

.item-name {
   color: blue;
   font-size: 14px;
   text-transform: uppercase;
   font-weight: 800;
}

.item-description {
   font-size: 12px;
   font-weight: 600;
   text-align: left;
}

.card-info {
    padding: 15px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	color: #555555;
	font-weight: 600;
	background: #eeeeee;
	font-size: 0.8em;
	border-bottom: 2px solid #cccccc;
}

.add-to-cart {
    color: green;
	font-weight: 700;
	text-decoration: none;
}

.sub-footer {
    margin-top: 40px; 
	margin-bottom: 40px;
	margin-left: 41%;
    background: #f2f2f2;
	width: 18%;
	display: grid;
	grid-template-columns: repeat(6, minmax(25px,25px));
	gap: 5px;
	justify-content: center;
	padding-top: 7px;
	padding-bottom: 7px;
}

.promo {
    border-right: 2px solid #ccc;
	padding: 5px;
 
}
.promo p{
    text-transform: uppercase;
	font-weight: bold;
	font-size: 15px;
}

.promo a{
    text-decoration: none;
	color: black;
}

.promo a:hover{
    color: blue;
    text-decoration: underline;	
}

.footer {
    background: #000;
	color: #fff;
	width: 114.8%;
	height: 35%;
	display: grid;
	grid-template-columns: repeat(4, minmax(300px,300px));
	gap: 5px;
	justify-content: center;
	padding-top: 30px;
	padding-bottom: 30px;
	margin-left: -8%;
	border-top: 10px solid #ccc;
}

.footer .bottom-logo {
    width: 55px;
	height: auto;
	border: 1px solid white;
	border-radius: 50px;
	
}

.footer .column {
    border-right: 1px solid #ccc;
	padding-left: 20px;
}

.footer .column .fas{
    float: left;
	padding-top: 5px;
	padding-right: 10px;
}

.footer .column p{
    padding-top: 2px;
    font-size: 14px;
	line-height: 1.5;
}

.footer .column h1 {
    font-size: 17px;
	font-weight: bold;
	padding-bottom: 20px;
}

.footer .column a {
    text-decoration: none;
	font-size: 20px;
	color: #fff;
	margin-right: 10px;
}

.footer .column a:hover {
    color: #4d84e2;
	text-decoration: underline;
}

</style>
<body>
	<div class="navbar">
	    <div class="top-navbar">
			<ul>
		        <li> <i class="fas fa-search"></i>  <br>Search <span> | </span></li>
			    <li> <i class="fas fa-language"></i> <br>Language <span> | </span></li>
				<li class="main-logo"> A R N G R E N </li>	
				<li><span> | </span></li>
				<li class="right-nav"> <i class="fas fa-shopping-cart"></i><br>Cart <span> | </span></li>
                <li class="right-nav"><i class="fas fa-user"></i> <br><a href="login.php">Sign in </a><span></li>
				<br>
				<li class="sub-logo"> Norwey's Ultimate Online Hobby Store </li>
				<div class="bottom-navbar">
				<li style="margin-right: 85px;"><i class="fas fa-home"></i><a href="index.php"> Home </a></li>
				<li style="margin-right: 85px;"><i class="fas fa-bars"></i><a href="#"> Categories </a></li>
			    <li style="margin-right: 85px;"><i class="fas fa-map"></i><a href="#"> About us </a></li>
			    <li style="margin-right: 85px;"><i class="fas fa-phone"></i><a href="#"> Contact </a></li>
			    <li><i class="fas fa-question-circle"></i><a href="#"> Help </a></li>
				</div>
			</ul>
		</div>
	</div>
	
	<div class="content">
	    <div class="banner">
		   <img src="img/new_items_banner_2.png">
		</div>
 	
	<div class ="cards">
	    <div class ="card">
		    <a href="item_1.php"><img src="img/1.jpg" class="card-image"></a>
			    <div class="card-content">
				<p class= "item-name"> Grave Digger All-Terrain Remote Control Monster Truck </p>
				<p class= "item-description"> Testers were impressed with how easy it was for kids to control this remote controlled Grave Digger truck, despite its enormous size. </p>
				<br>
				</div>
			<div class= "card-info">
			    <div>
				$84.00
				</div>
				<div>
				   <a href="item_1.php" class="add-to-cart"> View Item </a>
				</div>
			</div>
        </div>
		
		<div class ="card">
			<img src="img/2.jpg" class="card-image">
			    <div class="card-content">
				<p class= "item-name"> Transforming Batmobile R/C Vehicle </p>
				<p class= "item-description"> This remote-controlled car zooms around with an easy-to-use remote. But kid testers loved when it transforms into battle mode, raising up and shooting four projectile discs. </p>
				<p class= "item-description" style="color: white; font-size: 2px;"> eme </p>
				</div>
			
			<div class= "card-info">
			    <div>
				$59.00
				</div>
				<div>
				   <a href="#" class="add-to-cart"> View Item </a>
				</div>
			</div>
		    </div>
			
			<div class ="card">
			<img src="img/3.jpg" class="card-image">
			    <div class="card-content">
				<p class= "item-name"> Blue-Light Blocking Glasses </p>
				<p class= "item-description" style="color: white;"> eme </p>
				<p class= "item-description"> These special glasses are perfect for all of the screen addicts out there. They claim to block 97% of the harmful blue light which can help prevent eye strain and improve sleep. </p>
				<p class= "item-description" style="color: white; font-size: 4px;"> eme </p>
				</div>
			
			<div class= "card-info">
			    <div>
				$29.99
				</div>
				<div>
				   <a href="#" class="add-to-cart"> View Item </a>
				</div>
			</div>
		    </div>
			
			<div class ="card">
			<img src="img/4.jpg" class="card-image">
			    <div class="card-content">
				<p class= "item-name"> Genesis Mini </p>
				<p class= "item-description"> If he loves video games but already has all the latest consoles, then he will appreciate this miniature replica of the classic video game console SEGA Genesis. </p>
				</div>
			
			<div class= "card-info">
			    <div>
				$94.94
				</div>
				<div>
				   <a href="#" class="add-to-cart"> View Item </a>
				</div>
			</div>
		    </div>
			
			<div class ="card">
			<img src="img/5.jpg" class="card-image">
			    <div class="card-content">
				<p class= "item-name"> Rimable Skateboard </p>
				<p class= "item-description"> It's the perfect size for getting him to and from school without taking up a ton of space. Plus, it comes in a ton of fun colors and patterns (like this cool night sky print). </p>
				</div>
			
			<div class= "card-info">
			    <div>
				$52.88
				</div>
				<div>
				   <a href="#" class="add-to-cart"> View Item </a>
				</div>
			</div>
		    </div>
			
			<div class ="card">
			<img src="img/6.jpg" class="card-image">
			    <div class="card-content">
				<p class= "item-name"> Monopoly: Fortnite Edition </p>
				<p class= "item-description"> There are so many different spins on the classic game of Monopoly, but this one is inspired by his favorite video game.</p>
				<p class= "item-description" style="color: white;"> eme </p>
				</div>
			
			<div class= "card-info">
			    <div>
				$26.00
				</div>
				<div>
				   <a href="#" class="add-to-cart"> View Item </a>
				</div>
			</div>
		    </div>
			
			<div class ="card">
			<img src="img/7.jpg" class="card-image">
			    <div class="card-content">
				<p class= "item-name"> Chromebook Spin 11 </p>
				<p class= "item-description" style="color: white;"> eme </p>
				<p class= "item-description"> This Chromebook easily converts from a laptop to a tablet, making it great for teens because they can use it for school work, gaming or artwork.</p>
				<br>
				</div>
			
			<div class= "card-info">
			    <div>
				$284.95
				</div>
				<div>
				   <a href="#" class="add-to-cart"> View Item </a>
				</div>
			</div>
		    </div>
			
			<div class ="card">
			<img src="img/8.jpg" class="card-image">
			    <div class="card-content">
				<p class= "item-name"> 818 Hornet Beginner Drone with Camera </p>
				<p class= "item-description"> Drones are the hottest gaming trend in recent years, especially for older kids and teens. This model from Altair Aerial takes live video while in the air and flies for 15 minutes on each battery.</p>
				<p class= "item-description" style="color: white;"> eme </p>
				</div>
			
			<div class= "card-info">
			    <div>
				$159.80
				</div>
				<div>
				   <a href="#" class="add-to-cart"> View Item </a>
				</div>
			</div>
		    </div>
			
			<div class ="card">
			<img src="img/9.jpg" class="card-image">
			    <div class="card-content">
				<p class= "item-name"> Bedside Lamp with Bluetooth Speaker </p>
				<p class= "item-description"> It has four different brightness levels and the option for a color-changing mode. Plus, it doubles as a bluetooth speaker so he can play his favorite songs while hanging out in his room.</p>
				<p class= "item-description" style="color: white;"> eme </p>
				</div>
			
			<div class= "card-info">
			    <div>
				$35.99
				</div>
				<div>
				   <a href="#" class="add-to-cart"> View Item </a>
				</div>
			</div>
		    </div>
	</div>
	
	<div class="sub-footer">
	    <div class ="promo">
			<a href="new.php"><p> 1 </p></a>
        </div>
		
		<div class ="promo">
			<a href="#"><p> 2 </p></a>
        </div>
		
		<div class ="promo">
			<a href="#"><p> 3 </p></a>
        </div>
		
		<div class ="promo">
			<a href="#"><p> 4 </p></a>
        </div>
		
		<div class ="promo">
			<a href="#"><p> 5 </p></a>
        </div>
		
		<div class ="promo" style="border-right: none;">
			<a href="#"><p> >> </p></a>
        </div>
	</div>	
	
	<div class="footer">
	     <div class ="column">
		    <img src="img/logo.gif" class="bottom-logo">
			<br>
			<br>
			<i class="fas fa-map-marker-alt"></i><p>Norway</p>
			<br>
			<i class="fas fa-phone"></i> <p>123-456-7890</p>
			<br>
			<i class="fas fa-envelope"></i><p>fritjof@arngren.net</p>
        </div>
		
		<div class ="column">
		    <h1>  My Account </h1>
			<a href="#"><p>  Sign In </p></a>
		    <a href="#"><p>  Create an Account </p></a>
			<a href="#"><p>  Forgot my Password </p></a>
			<a href="#"><p>  Shipping & Returns </p></a>
			<a href="#"><p>  Privacy Policy </p></a>
			<a href="#"><p>  Track your Order </p></a>
		</div>
		
		<div class ="column">
		    <h1>  Quick Links </h1>
			<a href="index.php"><p>  Home </p></a>
		    <a href="#"><p>  Reviews </p></a>
			<a href="#"><p>  About </p></a>
			<a href="#"><p>  Contact</p></a>
			<a href="#"><p>  Sitemap </p></a>
		</div>
		
		<div class ="column" style="border-right: none;">
		    <h1>  Follow Us </h1>
			<a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-pinterest"></i></a>
			<br><br><br><br><br><br>
			<p style="class: font-style: italic;">&copy; Copyright 1995-2021 Arngren Inc. | <br> All Rights Reserved</p>
		</div>
	</div>
	
</html>