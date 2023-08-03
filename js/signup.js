function validate()
{
	var username=document.getElementById("username").value;
	var email=document.getElementById("email").value;
	var password=document.getElementById("password").value; 
	var confirm_password=document.getElementById("upassword").value;
	if(username=="admin" && email=="user@gmail.com" && password=="user"&&confirm_password=="user" && password==confirm_password)
	
{
	alert("signup succesfully");
	return false;
}
else
{
	alert("signup failed");
}


}
