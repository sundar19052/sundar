<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uid=$_SESSION['id'];

$ctg=$_REQUEST['ctg'];


if($_REQUEST['act']=="add")
{
$pid=$_REQUEST['pid'];
$amnt=$_REQUEST['price'];
$mq=mysql_query("select max(id) from addcart");
$mr=mysql_fetch_array($mq);
$id=$mr['max(id)']+1;
$ins=mysql_query("insert into addcart(id,uid,orderid,bid,price,quantity,amount,status)
values($id,'$uid','0','$pid','0','0','0','0')");
header("location:userhome.php");
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
	 <li><a class="active" href="userhome.php">User Home</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="addcart.php">Addcart</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="ordered.php">View Ordered</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="index.html">LogOut</a></li>
</ul>
<div id="bg1"></div>

	 
	  <table width="74%" border="0" align="center">
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td width="14%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
      <td colspan="2"  align="center" ><div class="style5"><h3>View Products</h></div></td>
      <td width="13%">&nbsp;</td>
      <td width="40%">&nbsp;</td>
    </tr>
	
	<?php
	$qry=mysql_query("select * from product");
	while($row=mysql_fetch_array($qry))
	{
	?>	
	<tr>
      <td height="35"rowspan="1"><img src="images\<?php echo $row['img'];?>"width="100" height="100"></td>
      <td>Product Name</td>
      <td><?php echo $row['pname'];?></td>
      <td>Quantity:</td>
      <td><?php echo $row['quantity'];?></td>
	  
    </tr>
	  <tr>
	   <td>&nbsp;</td>
      <td>Manufacturing:</td>
      <td><?php echo $row['md'];?></td>
      <td>Expiry Date</td>
	  <td><?php echo $row['ed'];?></td>
    </tr>
	
	  <tr>
	   <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>

	  <tr>
	   <td>&nbsp;</td>
      <td>Price:</td>
      <td><?php echo $row['price'];?></td>
      <td colpsan="2"><a href="userhome.php?act=add&pid=<?php echo $row['id'];?>&price=<?php echo $row['price'];?>">Order</a></td>
    </tr>
	
	
	
	  <tr>
	   <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>

	<?php
	}
	?>

</table>

<br>
<br>
<div id="footer"> copyrights&designedby@Cattle management system</div>