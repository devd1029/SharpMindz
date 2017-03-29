<!DOCTYPE Html>
	<head>
		<title>Forgot Password</title>
		<link rel="stylesheet" type="text/css" href="css/resetpass.css" >
		<script type="text/javascript">
		  var email, answer , password;
		       function step1process(){
				  
				   email=document.getElementById('email').value;
				   if(email.length > 0)
				   {    
					   document.getElementById('step1').style.display='none';
					   document.getElementById('step2').style.display='block';
					   document.getElementById('progressbar').value=33;
				   }
				   else
				   {
					   alert('Please enter the Email address');
				   }
			    }
				function step2process(){
				   answer=document.getElementById('crush').value;
				   if(answer.length > 0)
				   {   
					   document.getElementById('step2').style.display='none';
					   document.getElementById('step3').style.display='block';
					   document.getElementById('progressbar').value=66;
				   }
				   else
				   {
					   alert('Please enter the Answer');
				   }
			    }
				function step3process(){
				   password=document.getElementById('pass').value;
				   if(password.length > 0)
				   {
					   document.getElementById('step3').style.display='none';
					   document.getElementById('step4').style.display='block';
					   document.getElementById('progressbar').value=99;
					   
					   document.getElementById('display_email').innerHTML=email;
					   document.getElementById('display_answer').innerHTML=answer;
					   document.getElementById('display_pass').innerHTML=password;
				   }
				   else
				   {
					   alert('Please enter the password');
				   }
				   
			    }
				
				function step4process(){
					
				  alert('data is sumitted amd password is change');
				   
			    }
				
		</script>
	</head>
	<body>
	
	     <div id="pack">
		 <h5>Progress</h5><br>
		 <progress id="progressbar" value="0" max="100">hello</progress>
		      <form method="post" onsubmit="return false">
				<div id="step1">
				  <span class="steps">Step 1 out of 3</span>
					<h3>Enter the email address to recover the password</h3>
					Email :<input type="text" placeholder="xyz@abc.com" id="email">
					 <input type="button" id="btn1" value="Next" onclick="step1process()">
				</div>
				
				<div id="step2">
				  <span class="steps">Step 2 out of 3</span>
				  <h3>Answer the Security Question  </h3>
				  <h2>What is your crush name</h2>
				  <input type="text" id="crush" placeholder="confidential info">
				 <input type="button" id="btn2" value="Next" onclick="step2process()">
				</div>
				
				<div id="step3">
				    <span class="steps">Step 3 out of 3</span>
					<h3>Enter the New password</h3>
					<input type="password" id="pass">
					<h3>Confirm Your new password</h3>
					<input type="password" id="pass1">
					<input type="button" id="btn3" value="Submit" onclick="step3process()"> 
				</div>
				<div id="step4">
					 Your Email is <h3 id="display_email">helo</h3>
					 your answer is<h3 id="dispaly_crush">gelo</h3>
					 Your password is<h3 id="display_pass">melo</h3>
					
					<input type="button" id="btn3" value="Submit" onclick="step4process()"> 
				</div>
			  </form>
		</div>	
	</body>
</html>