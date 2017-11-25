<?php
$db=mysql_connect('localhost','root','mndp');
if(!$db){
	die('could not connect: '.mysql_error());
}
mysql_select_db('login');

	

if(isset($_POST['No']))
{
	$No=$_POST['No'];
	$sql="SELECT * FROM feedetails WHERE No='".$No."'LIMIT 1";
	$rec=mysql_query($sql);
	if (!$rec) { // add this check.
    die('Invalid query: ' . mysql_error());
}

	if (! $rec){
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
          <li class="active"><a href="fw.php">ACADEMIC FEES</a></li>
          <li><a class="drop" href="#">MISCELLANEOUS</a>
            <ul>
              <li><a href="library.php">Library dues</a></li>
              <li><a href="fine.php">Fine/dues</a></li>
              <li><a href="canteen.php">Canteen</a></li>
            <!--  <li><a href="basic-grid.html">Basic Grid</a></li>-->
            </ul>
          </li>
          <li><a href="examfees.php">EXAM FEES</a></li>
          <li><a href="transport.php">TRANSPORT FEES</a></li>
        </ul>
      </nav>
    </header>
  </div>
  </div>
 <form method="POST" action="fw.php" > 
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content">
	
    <label><b>Enter Your Number</b></label>
    <input type="text" placeholder="Enter Username" name="No" required>
		<!--<button input type="submit" >GO</button>-->
		 <input type="submit" name="insert" value="insert" onclick="select()" />
		 </form>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content">
		<table width="10" border="1" cellpadding="30" cellspacing="30">
<tr>
<th>Roll Number</th>
<th>UG/PG</th>
<th>Branch</th>
<th>Due Fees</th>
<tr>

<?php


	while($row=mysql_fetch_assoc($rec))
	{
	
	echo"<tr>";
	echo"<td>".$row['No']."</td>";
	echo"<td>".$row['UG/PG']."</td>";
	echo"<td>".$row['Branch']."</td>";
	echo"<td>".$row['Fees']."</td>";
	
	echo"</tr>";
	}

?>
</table>
		
		
		
		
		
		
		<button type="button" onclick="alert('Proceed to pay!')">Pay Now</button>
	   
      </div>
    </div>

	
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
   <p align="center">Designed and developed by Durga Prasad & Ravi Teja</p>
     </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>