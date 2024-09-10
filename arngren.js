
function intro()
{
	const splash = document.querySelector('.splash');

	document.addEventListener('DOMContentLoaded', (e)=>{

		setTimeout(()=>{
		splash.classList.add('display-none');
	   }, 2000)
	});

	    setTimeout(()=>{
	       window.location="loginprocess.php";  
	   }, 3000);
}

document.getElementById('submit').onclick = function()
{

    var email = document.getElementById("emailbox").value;
    var pass = document.getElementById("passwordbox").value;

	if(!email || !pass)
	{
        alert("Email or Password is empty");
	}
	else if(email != pass)
	{
		alert("Failed to Log In");
	}
	else
	{
		if(email == pass)
		{
			window.location="index.php";
		}
	}
}

document.getElementById("register").onclick = function()
{
	var emailr = document.getElementByClassName("emailboxxx").value;
	var passr = document.getElementById("passwordbox").value;
	var conpassr = document.getElementById("conpasswordbox").value;

	if(!email || !pass)
	{
		alert("Email or Password is Empty");
	}
	else if(!email && !pass)
	{
		alert("Both Email and Password are Empty");
	}
}



