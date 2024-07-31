<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{

$qry=mysql_query("insert into register(name,gender,age,email,phone,loc,address,uname,psw) values('$name','$gender','$age','$email','$phone','$loc','$address','$uname','$psw')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
}

}

?>



<script>
  function name()
{
  var name=/^[a-zA-Z ]{3,20}$/;
   if(document.f1.name.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.name.focus();
	 return false;
	 }
	}
	
	
		
	 function age()
{
  var age=/^[0-9]{1,3}$/;
   if(document.f1.age.value.search(age)==-1)
    {
	 alert("enter correct age");
	 document.f1.age.focus();
	 return false;
	 }
	} 
	
	
	
	
	
	 function phone()
{
  var phone=/^[0-9]{10}$/;
   if(document.f1.phone.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.phone.focus();
	 return false;
	 }
	} 
	
	
	
	
	
	function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.f1.email.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.email.focus();
	 return false;
	 }
	}
	
	
	
	
	
	function address()
{
 	var address=/^[a-zA_Z0-9 ,#]{5,100}$/;
   if(document.f1.address.value.search(address)==-1)
    {
	 alert("enter correct address");
	 document.f1.address.focus();
	 return false;
	 }
	} 
	
	
	
	
	
	 function loc()
{
  var loc=/^[a-zA-Z ]{3,20}$/;  
   if(document.f1.loc.value.search(loc)==-1)
    {
	 alert("enter correct Location");
	 document.f1.loc.focus();
	 return false;
	 }
	} 
	
	
	
	
	  function uname()
{
  var uname=/^[a-zA_Z0-9]{3,100}$/;
   if(document.f1.uname.value.search(uname)==-1)
    {
	 alert("enter correct name");
	 document.f1.uname.focus();
	 return false;
	 }
	}
	
	
	
	
	function psw()
{
 	var psw=/^[a-zA_Z0-9]{5,100}$/;
   if(document.f1.psw.value.search(psw)==-1)
    {
	 alert("enter correct address");
	 document.f1.psw.focus();
	 return false;
	 }
	} 
	 
	function vali()
	{
	var name=/^[a-zA-Z ]{3,20}$/;  
	var age=/^[0-9]{1,3}$/;
	var phone=/^[0-9]{10}$/;
	var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	var loc=/^[a-zA-Z ]{3,20}$/;
	var address=/^[a-zA_Z0-9 ,# ,]{5,100}$/;
	var psw=/^[a-zA_Z0-9]{8,100}$/;
	var uname=/^[a-zA_Z0-9]{3,100}$/;
	 //var mesg=/^[a-zA_Z0-9]{10,300}$/;
   if(document.f1.name.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.name.focus();
	 return false;
	 }
	 
	 
	 
	 
	  else if(document.f1.age.value.search(age)==-1)
    {
	 alert("enter correct Age");
	 document.f1.age.focus();
	 return false;
	 }
	 
	 
	 
	 
	  else if(document.f1.phone.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.phone.focus();
	 return false;
	 }
	 
	 
	 
	 else if(document.f1.email.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.email.focus();
	 return false;
	 }
	 
	  
	  else if(document.f1.loc.value.search(loc)==-1)
    {
	 alert("enter correct Location");
	 document.f1.loc.focus();
	 return false;
	 }
	 
	  else if(document.f1.address.value.search(address)==-1)
    {
	 alert("enter correct address");
	 document.f1.address.focus();
	 return false;
	 }
	 
	 
	 
	  if(document.f1.uname.value.search(uname)==-1)
    {
	 alert("enter correct user name");
	 document.f1.uname.focus();
	 return false;
	 }
	 
	 
	 
	 
	  else if(document.f1.psw.value.search(psw)==-1)
    {
	 alert("enter correct password");
	 document.f1.psw.focus();
	 return false;
	 }
	 
	 
	 else
	 
	 {
	 return true;
	 }
	}
	
</script>


<html>
<title>Cattle Management</title>
<style>
#navbar {
  padding: 35px;
  background:#248f24;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:200px;
  text-align:center;
  text-decoration:blink;
  text-color:#cc4400;
   font-family: Arial;
   font-size:35px;
}

p
{
	color:#ffffff;
	text-align: center;
	text-transform: uppercase;
	 font-size:20px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #888844;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
   border-radius:20px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

#footer {
  border: 2px solid #888844;
  padding: 45px;
  background: #888844;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {

  padding:150px;
  background:url("images/5.jpg");
  background-repeat: no-repeat;
  background-size: 1420px  250px;
  border-radius:5px;
   border-radius:500px;
   font-size:35px;
}

</style>
</head>

<div id="navbar"><p>Cattle Management System</p></div>

<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	  <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	   <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	    <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a class="active" href="index.html">Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="admin.php">Admin login</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="user.php">User Login</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="register.php">User Registration</a></li>
</ul>
<div id="bg1"></div>

	 <form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="100%" border="0" align="center">
	
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td width="10%">&nbsp;</td>
      <td width="20%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="25%">&nbsp;</td>
      <br />
      <td colspan="2"  align="center" ><div class="style5"><h3>New User Registation</h></div></td>
      <td width="23%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
    </tr>
	
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
    <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Name</span></td>
      <td><label>
        <input name="name" type="text" id="name" onChange="return name ()" />
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
    <tr>
      <td height="30">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Gender</span></td>
      <td><input name="gender" type="radio" value="male" />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Age</span></td>
      <td><label>
        <input name="age" type="text" id="age" onChange="return age ()" />
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
    <tr>
      <td height="32">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Email Id </span></td>
      <td><input name="email" type="text" id="email" onChange="return email()" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	  <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Phone Number </span></td>
      <td><input name="phone" type="text" id="phone" onChange="return phone()" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Location</span></td>
      <td><input type="text" name="loc" id="loc"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
		
	
	   <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Address</span></td>
      <td><textarea name="address" id="address"></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	

    <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">User Name</span></td>
      <td><input name="uname" type="text" id="uname" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Password</span></td>
      <td><input name="psw" type="password" id="psw" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>



<br>
<br>
<div id="footer"> copyrights&designedby@Cattle management system</div>