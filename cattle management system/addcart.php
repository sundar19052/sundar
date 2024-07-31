<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uid=$_SESSION['id'];
if(isset($btn))
{
$amount=0;
	$mq2=mysql_query("select max(orderid) from addcart");
$mr2=mysql_fetch_array($mq2);
$order=$mr2['max(orderid)']+1;
	for($i=0;$i<count($gid);$i++)
	{
	$amt=$price[$i]*$qty[$i];
	$amount+=$amt;
	mysql_query("update addcart set price=$price[$i],quantity=$qty[$i],amount=$amt,status=1,orderid=$order where id=$gid[$i]");
	}

header("location:payment.php?id=".$order);
}
if($_REQUEST['act']=="del")
{
$did=$_REQUEST['did'];
mysql_query("delete from addcart where id=$did");

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
	  <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	   <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
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
   <form name="form1" method="post" action="">
	<table width="801" border="1" align="center" cellpadding="5">
      <tr>
        <th width="81" scope="col">Image</th>
        <th width="81" scope="col">Product</th>
        <th width="128" scope="col">Price</th>
        <th width="171" scope="col">Quantity</th>
        <th width="171" scope="col">Action</th>
		
		
      </tr>
      <?php
	$q1=mysql_query("select * from addcart where uid='$uid' && status=0");
  $num=mysql_num_rows($q1);
  if($num>0)
  {  
	while($r1=mysql_fetch_array($q1))
	{
	
	$q3=mysql_query("select * from product where id=".$r1['bid']."");
	$r3=mysql_fetch_array($q3);

	?>
      <tr>
        <td align="left"><img src="images/<?php echo $r3['img']; ?>" width="80" height="80" /></td>
        <td align="left"><?php echo $r3['pname']; ?></td>
        <td align="left"><?php echo $r3['price']; ?></td>
        <td align="left"><input type="text" name="qty[]" />
            <input type="hidden" name="gid[]" value="<?php echo $r1['id']; ?>" />
            <input type="hidden" name="bid[]" value="<?php echo $r1['bid']; ?>" />
            <input type="hidden" name="price[]" value="<?php echo $r3['price']; ?>" />
        </td>
		<td align="left"><a href="addcart.php?act=del&did=<?php echo $r1['id'];?>">Remove</a></td>
      </tr>
      <?php
	}
	?>
	<p align="center">
 <tr>
 <td colspan="6" align="center"><input type="submit" name="btn" value="Order" /></td>
 </tr>
  </p> <?php
  }
  else
  {
  echo "Order is Empty!";
  }
  ?>
  </form>
  </table>
<br>
<br>
<div id="footer"> copyrights&designedby@Cattle management system</div>