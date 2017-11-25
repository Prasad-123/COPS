<?php
$host="localhost";
$user="root";
$pass="mndp";
$db="login";
mysql_connect($host,$user,$pass);
mysql_select_db($db);
if(isset($_POST['username']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM login_users WHERE username='".$username."' AND password='".$password."'LIMIT 1";
	$res=mysql_query($sql);
	if(mysql_num_rows($res)==1)
	{	
		header('Location:fw.php');

		exit();
		
	}
	else
	{
		header('Location:login.php');
		exit();
		}
}
	

?>
<html>
<style>
form {
    border: 150px solid #f1f1f1;
		margin-left:250px;
		margin-right:250px;
		margin-bottom:100px
	
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<body>


<form method="POST" action="login.php" >
  <div class="imgcontainer">
  <h1>CBIT ONLINE PAYMENT SYSTEM<h1>
    <img src="avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
  <!--  <th><span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><input type="submit" name="submit"></th>
  --><button input type="submit" >Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
