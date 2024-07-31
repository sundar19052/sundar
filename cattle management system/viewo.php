<?php
session_start();
include("dbconnect.php");
extract($_POST);
$uid=$_SESSION['id'];
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

<h2 align="center">Ordered Details</h2>
<table width="96%" align="center">
	<tr>
		<td colspan="10">&nbsp;</td>
  </tr>
	
		    <tr>
          <td width="2%">&nbsp;</td>
          <td width="6%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="10%"><div align="center" class="style6"><strong>Product Name</strong> </div></td>
		    <td width="10%"><div align="center" class="style6"><strong>Quantity</strong> </div></td>
			 <td width="7%"><div align="center" class="style6"><strong>Price</strong> </div></td>
			  <td width="11%"><div align="center" class="style6"><strong>Amount</strong> </div></td>
		      <td width="13%"><div align="center" class="style6"><strong>User Name</strong> </div></td>
		      <td width="12%"><div align="center" class="style6"><strong>Contact No</strong> </div></td>
			  <td width="9%"><div align="center" class="style6"><strong>Address</strong> </div></td>
				  <td width="20%"><div align="center" class="style6"><strong>Action</strong> </div></td>
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from addcart where  status='1'");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		$pid=$row['bid'];
		$uid=$row['uid'];
		$qry1=mysql_query("select * from product where id='$pid'");
		$row1=mysql_fetch_array($qry1);
		$qry2=mysql_query("select * from register where id='$uid'");
		$row2=mysql_fetch_array($qry2);
		?>
        <tr>
		 <td width="2%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row1['pname'];?></div></td>
			  <td><div align="center"><?php echo $row['quantity'];?></div></td>
			 <td><div align="center"><?php echo $row['price'];?></div></td>
			   <td><div align="center"><?php echo $row['amount'];?></div></td>
			    <td><div align="center"><?php echo $row2['name'];?></div></td>
			 <td><div align="center"><?php echo $row2['phone'];?></div></td>
			   <td><div align="center"><?php echo $row2['address'];?></div></td>
			   <td><div align="center"><a href="viewo.php?act=add&oid=<?php echo $row['id'];?>">Deliver</a></div></td>
		 
        </tr>

		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
				<td width="13%">&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		
		
		if($_REQUEST["act"]==('add'))
		{
		
		
		$oid=$_REQUEST['oid'];
		$qry=mysql_query("update addcart set status='2' where id='$oid'");
		
		echo "<script>alert('Delivered Sucess')</script>";
		
		
		}
		
		
		

		?>
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
</table>


<br>
<br>
<div id="footer"> copyrights&designedby@Cattle management system</div>