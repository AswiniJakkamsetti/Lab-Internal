<?php
 session_start();
?>
<html>
<head>
    <link rel="stylesheet" type=text/css href="Logout.css" />
</head>

<body>
    <div class='a'>
      <h1>User Feedback Application</h1>
      <ul class="h" type="none">
      <li><a class="s" href="Login.php">Login </a></li>
     <!--<li><a class="s" href="Register">Register </a></li>-->
     <!-- <li><a class="s" href="feedback.php">About </a></li>-->
	  <?php
	    session_destroy();
        header('location:Home.php');
	  ?>
      </ul>
    </div>
</body>
</html>
