<?php
include("dbconnect.php");
session_start();
extract($_POST);
$uid=$_SESSION['id'];
$id=$_REQUEST['id'];
$sql1 = mysql_query("select sum(amount) from addcart where orderid='$id'");
$row2 = mysql_fetch_array($sql1);
 $k = $row2['sum(amount)'];
 if(isset($_POST['btn']))
{
?>
<script language="javascript">
	alert("Amount Transfer Successfull..");
	window.location.href="userhome.php";
	</script>
<?php
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

<form method="post" action="#">
	  <table width="50%" border="0" align="center">
        <tr>
          <td colspan="2"><span class="style1">Payment Mode.... </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="image" name="imageField" src="images/payment.png" />
          </label></td>
        </tr>
        <tr>
          <td width="35%"><span class="style4">Amount</span> </td>
		  <td> <?php echo $k;?></td>
        </tr>
        <tr>
          <td height="33"><span class="style4">Enter Card Number </span></td>
          <td><input name="cno" type="text" id="cno" required pattern="[0-9]{12}"/></td>
        </tr>
        <tr>
          <td height="36"><span class="style4">CVV Number </span></td>
          <td><input name="cvv" type="password" id="cvv" required size="3" pattern="[0-9]{3}" /></td>
        </tr>
        <tr>
          <td><span class="style4">Card Name </span></td>
          <td><input name="cname" type="text" id="cname"  required pattern="[A-Za-z ]{3,32}"/></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="btn" type="submit"value="Click To Pay" /></td>
        </tr>
      </table> 
  </form>
    
 <div class="cleaner"></div>
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of main -->
        
</div> <!-- end of wrapper -->

<div id="tooplate_cr_wrapper">
	<div id="tooplate_cr">
    	
          Copyright © 2019 <a href="#">Home Appliances Management System</a> - Design:</a>
        
    </div> <!-- end of footer wrapper -->
</div> <!-- end of footer -->

</body>
</html>  