
<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>


<link href="css/signup.css" rel="stylesheet" type="text/css">
	  <script language="javascript">
	function check()
	{   
	   var uname=document.getElementById('lid').value;
	   var name=document.getElementById('name').value;
	 
		var letters = /^[0-9a-zA-Z]+$/;  
			if(uname.match(letters))  
			{   
			document.getElementById('userimg').src="image/y.png";
			}  
			else  
			{  
			document.getElementById('userimg').src="image/x.png"; 
			uname.focus();    
			} 
				
			if(name.match(letters))  
			{  
			document.getElementById('nameimg').src="image/y.png";
			}  
			else  
			{  
			document.getElementById('nameimg').src="image/x.png"; 
			 name.focus();   
			}
	}
	function checkname()
	{   
	  
	   var name=document.getElementById('name').value;
		var letters = /^[A-Za-z]+$/; 
			if(name.match(letters))  
			{  
			document.getElementById('nameimg').src="image/y.png";
			}  
			else  
			{  
			document.getElementById('nameimg').src="image/x.png"; 
			 name.focus();   
			}
	}
	function checklname()
	{   
	  
	   var lname=document.getElementById('lname').value;
		var letters = /^[A-Za-z]+$/; 
			if(lname.match(letters))  
			{  
			document.getElementById('lnameimg').src="image/y.png";
			}  
			else  
			{  
			document.getElementById('lnameimg').src="image/x.png"; 
			 lname.focus();   
			}
	}
	function checkemail()
	{   
	  
	   var email=document.getElementById('email').value;
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
			if(email.match(mailformat))  
			{  
			document.getElementById('emailimg').src="image/y.png";
			}  
			else  
			{  
			document.getElementById('emailimg').src="image/x.png"; 
			 email.focus();   
			}
	}
	
	 function checkinsist()
	{   
	  
	   var insist=document.getElementById('insist').value;
		var letters = /^[0-9A-Za-z]+$/; 
			if(insist.match(letters))  
			{  
			document.getElementById('insistimg').src="image/y.png";
			}  
			else  
			{  
			document.getElementById('insistimg').src="image/x.png"; 
			 insist.focus();   
			}
	}
	 function checkpass()
	{   
	  
	   var insist=document.getElementById('pass').value;
		var letters = /^[0-9A-Za-z]+$/; 
			if(insist.match(letters))  
			{  
			document.getElementById('insistimg').src="image/y.png";
			}  
			else  
			{  
			document.getElementById('insistimg').src="image/x.png"; 
			 insist.focus();   
			}
	}
	
	 function checkaddress()
	{   
	  
	   var ad=document.getElementById('address').value;
		var letters = /^[0-9A-Za-z]+$/; 
			if(insist.match(letters))  
			{  
			document.getElementById('insistimg').src="image/y.png";
			}  
			else  
			{  
			document.getElementById('insistimg').src="image/x.png"; 
			 insist.focus();   
			}
	}
	function checkseq_que()  
		{   var seq_que=documet.getElementById('seq_que').value;
		if( seq_que== "Default")  
		{  
		alert('Select your country from the list');  
		seq_que.focus();  
		return false;  
		}  
		else  
		{  
	    alert('hello');
		return true;  
		}  
		}  
</script>
</head>

<body>
<?php
include("header.php");

?>

   <h1 align="center"><span id="signuphead">New User Signup</span></h1>
   <form name="form1" method="post" action="signupuser.php" onSubmit="return check();" enctype="multipart/form-data">

       <table class="sign">
          <tr>
				<td><img  id="userimg" class="validate" src=""></td>
			  <td>
					<input name="lid" type="text" id="lid" onblur="check()" placeholder="User Name" pattern="[a-zA-Z ]+" 
						required title="Insert only letters of the alphabet">
			 </td>
              <td>
					<div class="upload">
						<input type="file" id="profile" name="file" Onblur="upload()" value="Upload"/>
					</div>
			   </td>
			  
		      <td class="fans" id="warn" width="200px"></td>
         </tr>
	
		  <tr>
           <td><img class="validate" id="nameimg" src=""></td>
           <td><input name="name" type="text" id="name" onblur="checkname()" placeholder="First Name" pattern="[a-zA-Z ]+" 
						required title="Insert only letters of the alphabet"></td>
		   <td><input name="lname" type="text" id="lname" onblur="checklname()" placeholder="Last Name" pattern="[a-zA-Z ]+" 
						required title="Insert only letters of the alphabet"></td> 
		    <td><img class="validate" id="lnameimg" src=""></td>
         </tr>
		 <tr>
           <td><img class="validate" id="emailimg" src=""></td>
           <td><input name="email" type="email" id="email" onblur="checkemail()" placeholder="Email"
				required title="Insert a valid email"></td>
               <td><input type="text" name="insist" id="insist" onblur="checkinsist()" placeholder="Institute/College name" pattern="[a-zA-Z ]+" 
						required title="Insert only letters of the alphabet"></td>
                <td><img class="validate" id="insistimg" src=""></td>
         </tr>
		  <tr>
          
       
         </tr>
         <tr>
            <td><img class="validate" id="passimg" src=""></td>
           <td><input type="password" name="pass" onblur="checkpass()" placeholder="Password" required></td>
		    <td><input name="cpass" type="password" id="cpass" onblur="check()" placeholder="Confirm password" required></td>
		    <td><img class="validate" id="cpassimg" src=""></td>
         </tr>
      
         <tr>
           <td><img class="validate" id="addressimg" src=""></td>
           <td><textarea name="address" id="address" onblur="checkaddress()"placeholder="Address"></textarea></td>
            <td><input name="phone" type="text" id="phone" onblur="check()" placeholder="Mobile No"pattern="[0-9]+" 
              required  title="Insert only numbers not chars"></td>
		    <td><img class="validate" id="phoneimg" src=""></td>
         </tr>
		  <tr>
           
           <td><select name="seq_que" id="seq_que" required onblur='checkseq_que'>
					<option selected="" value="Default">(Please select a Security Question )</option>
					<option value="What is the name of your favorite pet ?">What is the name of your favorite pet ?</option>
					<option value="What is the name of your first school?">What is the name of your first school?</option>
					<option value="What was your childhood nickname?">What was your childhood nickname?</option>
					<option value="What is your favorite team?">What is your favorite team?</option>
					<option value="What was the make and model of your first car?">What was the make and model of your first car?</option>
					<option value="What is your crush name?">What is your crush name?</option>
				</select>	
		   </td>
            <td><input name="seq_ans" type="text" id="seq_ans" onblur="check()" placeholder="Type your answer" required></td>
		  <td><img class="validate" id="seq_ansimg" src=""></td>
         </tr>
	
         <tr>
           <td>&nbsp;</td>
           <td>
		    <button type="submit" class="button" style="vertical-align:middle"><span>Sign-Up</span></button>
           </td>
         </tr>
       </table>
     </form>
 <form>
 <p>&nbsp; </p>
</body>
</html>
