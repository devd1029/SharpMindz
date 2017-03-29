<script language="javascript">
function check()
{

 if(document.form1.name.value=="")
  {
	document.getElementById('warn').innerHTML ="* Please Enter the Username";
	return false;
  }
  else
  {
	  document.getElementById('warn').style.display="none";
  }
   if(document.form1.insist.value=="")
  {
	  
   document.getElementById('warninsist').innerHTML ="* Compulsory";
	
	return false;
  }
 if(document.form1.pass.value=="")
  {
	  
    document.getElementById('warnpass').innerHTML ="* Compulsory";
	
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
   document.getElementById('warnpassc').innerHTML ="* Compulsory";

	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
   document.getElementById('warnmatch').innerHTML ="* Password Donot Match";

	return false;
  }
  
  if(document.form1.address.value=="")
  {
  document.getElementById('warnadd').innerHTML ="* Compulsory";
	
	return false;
  }
 
  if(document.form1.phone.value=="")
  {
   document.getElementById('warnphone').innerHTML ="* Compulsory";
	
	return false;
  }
  if(document.form1.email.value=="")
  {
    document.getElementById('warnemail').innerHTML ="* Compulsory";

	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			document.getElementById('warnemail').innerHTML ="* Enter Valid Compulsory";
			
			return false;
		}
		document.getElementById('warn').innerHTML ="";
  return true;
  
  }
  function upload()
  {
	 
	 alert('hi');
	
	// include 'filevalidation.php';
	document.forms["form1"].submit();
  }
</script>