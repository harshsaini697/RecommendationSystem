function validKey()
{
var p =  /^[a-zA-Z]+$/;
var x = document.getElementById("key").value;
if(x == null || x == "")
{
	document.getElementById("key_m").innerHTML = "*cannot be blank!";
	return false;
}
	else if(!x.match(p))
	{
		document.getElementById("key_m").innerHTML = "*Please enter characters only!";	
		return false;	
	}
else
{
	
	document.getElementById("key_m").innerHTML = "";
	return true;
}
}


function validate_key()
{

var flagKey = validKey();


if((flagKey)){
			return true;
		}
	else 
	return false;

}