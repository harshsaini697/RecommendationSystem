function validUser()
{
var p = /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/;
var x = document.getElementById("un").value;
if(x == null || x == "")
{
	document.getElementById("do").innerHTML = "*Please enter your name.";
	return false;
}
	else if(!x.match(p))
	{
		document.getElementById("do").innerHTML = "*Please enter your valid name.";	
		return false;	
	}
else
{
	
	document.getElementById("do").innerHTML = "";
	return true;
}
}

function validPass()
{
	var x = document.getElementById("ps").value;
	if(x == null || x == "")
	{ 
		document.getElementById("do").innerHTML = "*Please enter your password.";

	}
	else if(x.length < 6)
	{
		document.getElementById("do").innerHTML = "*minimun 6 characters";
		return false;
	}
	else if(x.length > 16)
	{
		document.getElementById("do").innerHTML = "*maximum 16 characters";
		return false;
	}
	
	else {
		
		document.getElementById("do").innerHTML = "";
		return true;
			}

}

function validEmail()
{
	var x = document.getElementById("mail").value;
	var p = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(x == null || x == "")
	{
	document.getElementById("do").innerHTML = "*Please provide your email";
	return false;
	}
	else if(!x.match(p))
	{
	document.getElementById("do").innerHTML = "*Wrong email format, please provide correct email id";
	return false;
	}
	else
	{
	document.getElementById("do").innerHTML = "";
	return true;
	}
}

function validAge()
{
	var x = document.getElementById("pn").value;
	var p = /^[0-9]+$/
	if(x == null || x == "")
	{
	document.getElementById("do").innerHTML = "*please Enter your phone number";
	return false;
	}
	else if(x == 0)
	{
	document.getElementById("do").innerHTML = "*number cannot be zero";
	return false;
	}
	else if(x.length!=10)
	{
	document.getElementById("do").innerHTML = "*number cannot be greater than or less than ten";

	}
	else if(!x.match(p))
	{
	document.getElementById("Age").innerHTML = "plese enter valid number";
	return false;
	}
	else
	{
	
	document.getElementById("do").innerHTML = "";
	return true;
	}


}
function validate()
{

var flagUser = validUser();
var flagPass = validPass();
var flagEmail = validEmail();
var flagAge = validAge();


if((flagUser)&&(flagPass)&&(flagEmail)&&(flagAge)){
			return true;
		}
	else 
	return false;

}