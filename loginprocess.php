<!DOCTYPE html>
<head>
	<title>Arngren</title>
	<link rel="stylesheet" type="text/css" href="logpro.css">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Train+One&family=Work+Sans:wght@100;300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap');

* {
	margin: 0;
	padding: 0;
	font-family: 'Work Sans', sans-serif;
	color: #383838;
}

.submit
{ 
  padding: 10px 130px; 
  border: none;
  color: white;
  background-color: black;
}

.btn
{
	text-align: center;
	padding-bottom: 5%;
}


.reg
{
	text-align: center;
	padding-bottom: 20%;
	font-size: 15px;
}

.tbl
{
	padding-left: 13%;
	padding-top: 5%;
}

.tbl a:hover {
    color: blue;
	text-decoration: underline;
}

.lbl
{
 
}

.lbl2
{
	font-size: 20px;
	padding-bottom: 5%;
	padding-top: 5%;
}

#emailbox
{
	width:300px;
	font-size: 15px;
	border:none;
	background:transparent;
	border-bottom: solid 1px gray;
	outline: 0;
}

.bn
{
	padding-bottom: 50px;
	font-size: 15px;
}

#passwordbox
{
	width:300px;
	font-size: 15px;
	border:none;
	background:transparent;
	border-bottom: solid 1px gray;
	outline: 0;
}

.bt
{
	padding-bottom: 20px;
	font-size: 15px;
}

.col
{
	width:30%;
	margin-top: 6%;
	margin-left:auto;
	margin-right:auto;
	background-color: #F0F0F0;
	border-radius: 5px;
	box-shadow: 0px 10px;
	border: solid 1px;
	border-color: grey;
	opacity: 0.9;
}


.main-logo
{
    color: #4d84e2;
    font-size: 20px;
    font-weight: 800;
	font-family: 'Train One', cursive;
	cursor: pointer;
	float: top;
	margin-left: 3%;
	padding-top: 1%;
}

.imglogo
{
	width: 70px;
	height: 70px;
}

body
{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(img/bg.jpg);
}

</style>

<body>
	
<div class="col">
	<table class="tbl">
		<tr>
			<th class="lbl"><img src="img/logo.gif" class="imglogo"><br><p class="main-logo">A R N G R E N</p></th>
		</tr>
		<tr>
			<th class="lbl2">Log In</th>
		</tr>
		<tr>
	        <td class="bn">Email<br><br><input type="text" name="email" id="emailbox" placeholder="example: john@gmail.com"></td>
	    </tr>
	    <tr>
            <td class="bt">Password<br><br><input type="password" name="password" id="passwordbox" placeholder="********"></td>
        </tr>
        <tr>
	        <td class="btn"><input type="submit" id="submit" class="submit" value="Log In"></td>
	    </tr>
	    <tr>
	        <td class="reg"><p>Create an account? Register <a href="register.php">here</a></p></td>
	    </tr>
    </table>
</div>
	<script src="arngren.js"></script>
</body>
</html>