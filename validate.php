<html>
<head>
<script language="javascript">
function check()
{  
   var uname=document.getElementById('lid').value;
	var letters = /^[A-Za-z]+$/;  
if(uname.match(letters))  
{  
document.getElementById('n1').src="image/y.png";
 
}  
else  
{  
document.getElementById('n1').src="image/x.png"; 
uname.focus();  
return false;  
}  
	
  }
 
</script>
</head>
<body>
<div>

	<form name="form1" >
		<input name="lid" type="text" id="lid" placeholder="User Name" pattern="[a-zA-Z ]+" 
						required title="Insert only letters of the alphabet" onblur="check()"><img id="n1" src="">
			 <input name="name" type="text" id="name" onblur="check()" placeholder="First Name" pattern="[a-zA-Z ]+" 
						required title="Insert only letters of the alphabet"><img id="n2" src="">
		   
	</form>

</div>
</body>
</html>