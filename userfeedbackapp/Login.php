<?php
        session_start();
        require 'dbconfig/config.php';
?>

<html>
<head>
    <link rel="stylesheet" type=text/css href="login.css" />
</head>
<body>
<div class='a'>
      <h1>PET ADOPTION</h1>
      <ul class="h" type="none">
      <li><a class="s" href="Login">Login </a></li>
      <!--<li><a class="s" href="Register">Register </a></li>-->
      <li><a class="s" href="Feedback">Feedback </a></li>
      </ul>
    </div>
	<div class="har">
<center>
  <pre>
    <div class="ha">
	<h1>Login</h1>
    <form action= "Login.php" method="POST">
     username:<input type="text" name="username"/><br/>
     passkey:<input type="password" name="password"/><br/>
     <input class="hs" type="submit" value="Login" name="Login"/><br>
	 <a href="Register.php"><input class="hv" type="button" value="Register"></a>
   </form>
   <?php
   if(isset($_POST['Login'])){
	   
		$username=($_POST['username']);
		$password=($_POST['password']);
		$query="select * from users where username='$username' AND password ='$password'";
		$sql=mysqli_query($con,$query);
		if(mysqli_num_rows($sql)>0){
			$_SESSION['username']=$username;
			header("location:feedback.php");
		}
		else{
			echo '<script type="text/javascript">alert("invalid credentials")</script>';
		}
   }
   ?>
   </div>
  </pre>
</center>
</div>
</body>
</html>
