
    function login()
	{
		var uname = document.getElementById("email").value;
		var pwd = document.getElementById("pwd1").value;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(uname =='')
		{
			alert("please enter admin name.");
			return false;
		}
		else if(pwd=='')
		{
        	alert("enter the password");
        	return false;
		}
		else if(!filter.test(uname))
		{
			alert("Enter valid email id.");
			return false;
		}
		else if(pwd.length < 8 || pwd.length > 8)
		{
			alert("Password min and max length is 8.");
			return false;
		}
		else
		{
			alert('Thank You for Login. You can now access this portal');
		}
	}
	//Reset Inputfield code.
	function clearFunc()
	{
		document.getElementById("email").value="";
		document.getElementById("pwd1").value="";
	}