<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
//checking name
$qry=mysql_query("insert into product(pname,quantity,price,stock,md,ed,img) values('$name','$qty','$price','$ns','$md','$ed','$img')");
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
	  <li><a class="active" href="adminhome.php">Admin Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="viewp.php">View Product</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="viewo.php">View Ordered</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="views.php">View Sales</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="viewu.php">View User Details</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="index.html">LogOut</a></li>
</ul>
<div id="bg1"></div>

	 <form id="f1" name="f1" method="post" action="#">
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
      <td colspan="2"  align="center" ><div class="style5"><h3>Enter Products</h></div></td>
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
      <td><span class="style6">Product Name</span></td>
      <td><label>
        <input name="name" type="text" id="name"/>
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
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><span class="style6">Quantity</span></td>
      <td><label>
        <input name="qty" type="text" id="qty"/>
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
      <td><span class="style6">Price</span></td>
      <td><input name="price" type="text" id="price" /></td>
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
      <td><span class="style6">Number Of stck</span></td>
      <td><input name="ns" type="text" id="ns"/></td>
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
      <td><span class="style6">Manfacture Date</span></td>
      <td><input type="date" name="md" id="md"></td>
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
      <td><span class="style6">Expiry Date</span></td>
      <td><input type="date" name="ed"></td>
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
      <td><span class="style6">Product Image</span></td>
      <td><input type="file" name="img"></td>
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