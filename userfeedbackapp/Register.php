<?php
     require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type=text/css href="Register.css" />
</head>

<body>
    <div class='a'>
      <h1>User Feedback Application</h1>
      <ul class="h" type="none">
      <li><a class="s" href="login.php">Login </a></li>
     <!--<li><a class="s" href="Register">Register </a></li>-->
      <li><a class="s" href="about.php">About </a></li>
      </ul>
    </div>
	<center>
	<div class="har">
    <form method="post" action="Register.php" >
	    <fieldset>
		
        <table class="h">
                <tr>
                 <td>Username :</td>
                 <td><input type="text" name="userid" class="textinput" required></td>
                 </tr>
                 <tr>
                 <td>Email :</td>
                 <td><input type="text" name="username" class="textinput" required></td>
                 </tr>
                 <tr>
                 <td>Passkey : </td>
                 <td><input type="email" name="email" class="textinput" required></td>
                 </tr>
                 <tr>
                 <td>Confirm Passkey :</td>
                 <td><input type="password" name="password" class="textinput" required></td>
                 </tr>
                 <tr>
                 <td>Contact No:</td>
                 <td><input type="password1" name="password1" class="textinput" required></td>
                 </tr>
				 <tr>
                 <td></td>
                 <td><a href="login.php"><input type="submit" value="register" name="register_btn" class="Register"></a></td>
                 </tr>

        </table>
		</fieldset>
    </form>
	<?php
	    if(isset($_POST['register_btn'])){
			$username=stripslashes($_POST['username']);
            $email=stripslashes($_POST['email']);
            $password=stripslashes($_POST['password']);
            $password1=stripslashes($_POST['password1']);
            $contact=stripslashes($_POST['contact']);
			if($password == $password1){
				$query="select * from users where username='$username'";
				$sql=mysqli_query($con,$query);
				if(mysqli_num_rows($sql)>0){
					echo '<script type="text/javascript">alert("user already exists ....try another username")</script>';
					
				}else
				{
					$query="INSERT INTO user(username,email,password)VALUES('$username','$email','$password')";
					$sql=mysqli_query($con,$query);
					if($sql){
						echo '<script type="text/javascript">alert("user registered ...go to login page")</script>';
					}
					else{
						echo '<script type="text/javascript">alert("error")</script>';
					}
				}
         
		   }
		   else{
			   echo '<script type="text/javascript">alert("password and confirm password doesnot match")</script>';
		   }
	
		}
	?>
	</div>
	</center>
</body>

</html>
