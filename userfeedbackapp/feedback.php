<?php
     require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type=text/css href="feedback.css" />
</head>

<body>
    <div class='a'>
      <h1>User Feedback Application</h1>
      <ul class="h" type="none">
      <li><a class="s" href="Logout.php">Logout </a></li>
     <!--<li><a class="s" href="Register">Register </a></li>-->
      <li><a class="s" href="Home.php">Home </a></li>
      </ul>
    </div>
	<center>
	<div class="har">
    <form method="post" action="feedback.php" >
	    <fieldset>
		
        <table class="h">
                <tr>
                 <td>Itemname :</td>
                 <td><input type="text" name="itemname" class="textinput" required></td>
                 </tr>
                 <tr>
                 <td>rating :</td>
                 <td><input type="text" name="rating" class="textinput" required></td>
                 </tr>
                 <tr>
                 
                 <td><input type="submit" value="feedback" name="feedback_btn" class="feedback"></a></td>
                 </tr>

        </table>
		</fieldset>
    </form>
	
	</div>
	</center>
</body>

</html>
