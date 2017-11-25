<?php
$db=mysql_connect('localhost','root','mndp');
if(!$db){
	die('could not connect: '.mysql_error());
}
mysql_select_db('login');

if(isset($_POST['No']))
{
	$No=$_POST['No'];
	
	$randomid = (rand(1,1000000)); // <--- imagine 25 was returned

$sql = "INSERT INTO paid (No, Tid, towards, fees)
        SELECT No, ".$randomid.", regularsupply, fees
        FROM examfees
        WHERE No='".$No."' ";
		$sql1="SELECT * from paid WHERE No='".$No."'";
		$rec1=mysql_query($sql1);
	$rec=mysql_query($sql);
	if (!$rec) { // add this check.
    die('Invalid query: ' . mysql_error());
	}

	if (! $rec1){
   }
}

?>

<!DOCTYPE html>

<html lang="">
<head>
<title>COPS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top"><div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <ul>      <li><p id="demo"></p>
<script>
document.getElementById("demo").innerHTML = Date();
</script></li>
      <li><i class="fa fa-phone"></i> +9829348924</li>
      <li><i class="fa fa-envelope-o"></i> cops@gmail.com</li>
      <li><a href="fw.php"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="#" title="Login"><i class="fa fa-lg fa-sign-in"></i></a></li>
      <li><a href="login.php" title="logout"><i class="fa fa-lg fa-edit"></i></a></li>
    </ul></div>
</div><div class="bgded overlay" > 
  
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.html">CBIT ONLINE PAYMENT SYSTEM</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="fw.php">ACADEMIC FEES</a></li>
          <li><a class="drop" href="#">MISCELLANEOUS</a>
            <ul>
              <li><a href="library.php">Library dues</a></li>
              <li><a href="fine.php">Fine/dues</a></li>
              <li><a href="canteen.php">Canteen</a></li>
            <!--  <li><a href="basic-grid.html">Basic Grid</a></li>-->
            </ul>
          </li>
          <li class="active"><a href="#">EXAM FEES</a></li>
          <li><a href="transport.php">TRANSPORT FEES</a></li>
        </ul>
      </nav>
    </header>
  </div>
  </div>
 <form method="POST" action="paid.php" > 
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content">
	
    
	<label><b>Enter Your Number to make payment</b></label>
    <input type="text" placeholder="Enter Username" name="No" required>
		<!--<button input type="submit" >GO</button>-->
		 <input type="submit" name="insert" value="PAY" onclick="select()" />
	
    
		 
		 </form>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content">
		<table width="10" border="1" cellpadding="30" cellspacing="30">
<tr>
<th>Roll Number</th>
<th>Transaction id</th>
<th>Towards</th>
<th>Amount Paid</th>
<tr>

<?php


	while($row=mysql_fetch_assoc($rec1))
	{
	
	echo"<tr>";
	echo"<td>".$row['No']."</td>";
	echo"<td>".$row['Tid']."</td>";
	echo"<td>".$row['towards']."</td>";
	echo"<td>".$row['fees']."</td>";
	
	echo"</tr>";
	}

?>
</table>
		
		
		
		
		
		
		
		
		<!--<form>
			<h4><strong>Your payment details: <h4>
			<div text-align="center">
			<hr>
			<p> Your Number	:160114737039</p>
			<p> UG/PG				:UG</p>
			<p> Branch				:IT</p>
			<p> Tution fees	:160169 (year=1+2+3+4)</p>		
		</form>		--><input type=button onClick="location.href='back.php'" value='Confirmation'>
      </div>
    </div>

	
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
   <p align="center">Designed and developed by Durga Prasad & Ravi Teja </p>
     </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>