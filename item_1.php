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
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;500&display=swap');

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

.category {
    padding-top: 190px;
	padding-right: 6%;
	padding-left: 6%;
}

.category a {
    text-decoration: none;
	color: #000;
}

.category a:hover {
    color: blue;
	text-decoration: underline;
}

.category span {
    color: blue;
}

.content {
	padding-top: 10px;
	padding-right: 6%;
	padding-left: 6%;
	height: auto;
}

.content .slider {
	width: 29%;
	margin-top: 20px;
	overflow: hidden;
	margin-left: 4%;
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
	border: 1px solid black;
}

.content .slider .images {
    display: flex;
	width: 100%;
	margin-left: 3%;
	text-align: center;
}

.content .slider .images img {
    height: 320px;
	width: 320px;
	padding: 5px;
	transition: all 0.15s ease;
}

.content .slider .images input {
    display: none;
}

.content .slider .dots {
    display: flex;
	justify-content: center;
	margin: 10px;
}

.content .slider .dots label {
    height: 10px;
	width: 10px;
	border-radius: 50%;
	border: 2px solid #000;
	cursor: pointer;
	transition: all 0.15s ease;
	margin: -20px;
}

.content .slider .dots label:hover {
    background-color: #000;
}

#img1:checked ~ .m1 {
    margin-left: -0%;
}

#img2:checked ~ .m2 {
    margin-left: -95%;
}

#img3:checked ~ .m3 {
    margin-left: -192%;
}

#img4:checked ~ .m4 {
    margin-left: -287%;
}

.item {
    color: #000;
	float: right;
	width: 50%;
	margin-top: -340px;
	margin-right: 9%;
	height: auto;	
}

.item .item-name {
    border-bottom: 1px solid #ccc;
	margin-left: -25px;
}

.item .item-name h1{
    font-size: 20px;
	margin-bottom: 10px;
	font-family: 'IBM Plex Sans', sans-serif;
	text-transform: uppercase;
}

.item .item-name a {
    color: #134070;
	text-decoration: none;
	font-weight: 700;
	font-size: 14px;
}

.item .item-name a:hover {
    color: blue;
	text-decoration: underline;
}

.item .item-name .item-rating{
    margin-bottom: 10px;
	margin-top: 7px;
}

.item .item-name .item-rating .fas{
    color: #4d84e2;
}

.item .item-name .item-rating span {
    font-weight: 600;
	margin-left: 5px;
}

.item .item-rating .cart {
    background: #134070; 
	border-radius: 50px;
	padding: 10px 15px 10px 15px;
	float: right;
	margin-top: -40px;
	margin-right: 80px;
	width: 100px;
	color: #fff;
	font-size: 12px;
	font-family: 'IBM Plex Sans', sans-serif;
	text-transform: uppercase;
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
}

.item .item-rating .cart:hover{
    background: #4d84e2; 
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
}

.item .item-price {
    margin-top: 15px;
	margin-left: -25px;
	border-bottom: 1px solid #ccc;
	padding-bottom: 10px;

}
.item .item-price ul li{
    text-decoration: none;
	list-style-type: none;
	padding-bottom: 10px;
	font-size: 16px;
	font-family: 'IBM Plex Sans', sans-serif;
} 

.item .item-price span {
    font-size: 16px;
	font-weight: 500;
	padding-left: 70px;
}

.item-description {
    color: #000;
	margin-top: 40px;
	padding-right: 10%;
	padding-left: 13%;
	padding-bottom: 30px;
	text-align: justify;
	height: auto;
    border-bottom: 1px solid #ccc;	
}

.item-description h1 {
    margin-left: -30px;
    font-size: 17px;
	font-family: 'IBM Plex Sans', sans-serif;
	margin-bottom: 15px;
	color: #4d84e2;
	text-transform: uppercase;
}

.item-description ul li {
    line-height: 1.8;
	padding-bottom: 10px;
	font-size: 16px;
	font-family: 'IBM Plex Sans', sans-serif;
}

.item-description span{
    font-weight: 500;
}

.more-items {
    color: #4d84e2;
    font-size: 9px;
	font-weight: bold;
	font-family: 'IBM Plex Sans', sans-serif;
	padding-left: 6%;
	padding-top: 20px;
	text-transform: uppercase;
}

.sub-footer {
    margin-top: 10px;
	width: 90%;
	display: grid;
	grid-template-columns: repeat(6, minmax(185px,185px));
	gap: 30px;
	justify-content: center;
	padding-left: 10%;
	padding-top: 20px;
	padding-bottom: 20px;
}

.sub-footer .other-item .other-image {
    width: 170px;
	height: auto;
	border: 1px solid black;
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
	margin-bottom: 10px;
}

.sub-footer .other-item .other-image:hover {
    box-shadow: 0 0 5px blue;
}

.sub-footer .other-item p{
    text-transform: uppercase;
	font-weight: bold;
	font-size: 14px;
	margin-bottom: 10px;
}

.sub-footer .other-item span {
    font-size: 15px;
	color: red;
	font-weight: bold;
}

.next {
    background: #134070; 
	border-radius: 10px;
	padding: 10px 15px 10px 15px;
	float: right;
	margin-top: 65px;
	margin-right: 80px;
	width: 10px;
	height: 15px;
	color: #fff;
	font-size: 12px;
	font-weight: bold;
	font-family: 'IBM Plex Sans', sans-serif;
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
}

.next:hover {
    background: #4d84e2; 
	box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
}

.footer {
    background: #000;
	color: #fff;
	width: 100%;
	height: 35%;
	display: grid;
	grid-template-columns: repeat(4, minmax(300px,300px));
	gap: 5px;
	justify-content: center;
	padding-left: 8%;
	padding-top: 30px;
	padding-bottom: 30px;
	margin-left: -8%;
	margin-top: 40px;
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
	
	<div class="category">
	    <p><a href="new_items.php"> New Items </a> >  <span>  Kid Toys </span> </p>
	</div>
	
	<div class="content">
	    <div class="slider">
			   <div class="images">
			      <input type ="radio" name="slide" id="img1">
				  <input type ="radio" name="slide" id="img2">
				  <input type ="radio" name="slide" id="img3">
				  <input type ="radio" name="slide" id="img4">
				
			      <img src="img/1.jpg" class="m1" alt="img1">
				  <img src="img/1-3.jpg" class="m2" alt="img2">
				  <img src="img/1-2.jpeg" class="m3" alt="img3">
				  <img src="img/1-1.jpeg" class="m4" alt="img4">
			   </div>
			<div class="dots">
			    <label for="img1"></label>
				<label for="img2"></label>
				<label for="img3"></label>
				<label for="img4"></label>
			</div>
		</div>
	</div>
	
	<div class="item">
		    <div class="item-name"> 
			   <h1>  Grave Digger All-Terrain Remote Control Monster Truck </h1>
			   <a href="#"> Visit the Master Jam Store </a>
			   <div class="item-rating"> 
			        <p> <i class="fas fa-star"></i> 
			        <i class="fas fa-star"></i> 
			        <i class="fas fa-star"></i> 
			        <i class="fas fa-star"></i> 
			        <i class="fas fa-star-half-alt"></i> <span> 4.5/5 ratings </span> </p>
					<div class= "cart">
					    <p> <i class="fas fa-cart-arrow-down" style="color: #fff; padding-right: 5px;"></i> Add to Cart </p>
					</div>
			    </div>
			</div>
			<div class="item-price"> 
			    <ul>
			        <li> Price:	<span> <span style="color: red; font-weight: 600;">$84.00 </span> + No Import Fees Deposit & $210.99 Shipping to Philippines</span> </li>
                    <li> Color: <span style="margin-left: 70px;"> Multicolor </span> </li>
                    <li> Brand: <span style="margin-left: 65px;"> Monster Jam </span> </li>
                    <li> Material: <span style="margin-left: 50px;"> Plastic </span> </li>
                    <li> Item Dimensions: <span style="margin-left: -15px;"> 8.5 x 18.6 x 17.5 inches </span> </li>
					<li style="margin-top: -8px;"> LxWxH </li>
                    <li> Item Weight: <span style="margin-left: 20px;"> 5.56 Pounds </span> </li>
			    </ul>
			</div>
			
	</div>
	
	<div class="item-description"> 
		<h1>About this item </h1>
		<ul>
			<li> BIGGEST RC GRAVE DIGGER EVER: <span> Over 2-feet long, the Mega Grave Digger RC lives up to its name! Larger, faster and more powerful than any other Grave Digger RC, control it from up to 250 feet away with the 2.4GHz frequency dual joystick controller and drive in any direction! </span> </li>
			<li> DRIVE OVER ANY OBSTACLE: <span> Overcome any obstacle on and off road – Mega Grave Digger is unstoppable! Its lightweight design and huge tires help you roll over obstacles with ease. With its rubber treads, mega-sized shocks and suspension, this RC monster truck can tackle anything! </span> </li>
			<li> OFFICIAL GRAVE DIGGER REPLICA: <span> With authentic graphics, oversized BKT Tires and working lights, it’s like driving the real thing! Featuring a built-in USB charging cable, power up and keep on rolling. </span> </li>
			<li> TOP GIFT FOR BOYS: <span> The Monster Jam Mega Grave Digger RC is the ultimate monster trucks for boys or birthday gift for kids aged 4 and up. Requires 2 AAA batteries for the remote control (not included). </span> </li>
			<li> MONSTER JAM TRUCKS: <span> Look for all of our authentic licensed monster truck-themed toys (each sold separately), including remote control vehicles, True Metal die-cast trucks and playsets. You’ve never been closer to the action than with Monster Jam! </li>
			<li> Includes: <span> 1 Mega Grave Digger RC, 1 Remote Control, 1 Instruction Guide </span> </li>
		</ul>
	</div>
	
	<div class="more-items">
	    <h1>  More Items to Explore </h1>
	</div>
	
	<div class="sub-footer">
	    <div class ="other-item">
		    <img src="img/2.jpg" class="other-image">
			<p>Transforming Batmobile R/C Vehicle</p>
			<span> $59.00 </span>
        </div>
		
		<div class ="other-item">
		    <img src="img/5.jpg" class="other-image">
			<p>Rimable Skateboard</p>
			<span> $52.88 </span>
        </div>
		
		<div class ="other-item">
		    <img src="img/8.jpg" class="other-image">
			<p>818 Hornet Beginner Drone with Camera</p>
			<span> $159.80 </span>
        </div>
		
		<div class ="other-item">
		    <img src="img/10.jpg" class="other-image">
			<p>Genesis Mini</p>
			<span> $94.94 </span>
        </div>
		
		<div class ="other-item">
		    <img src="img/6.jpg" class="other-image">
			<p>Monopoly: Fortnite Edition</p>
			<span> $26.00 </span>
        </div>
		
		<div class="next">
		    <p> > </p>
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
			<a href="#"><p>  Home </p></a>
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