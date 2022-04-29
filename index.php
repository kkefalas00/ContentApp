
<?php

include "up.php";


?>

<div class="container">

  <div class=form>
	<h2>Login Form</h2>
	  <form action="content.php" method=post>
		<div class="form-group">
		  <label for="email">Email:</label>
		  <input type="email" class="form-control" id="email" placeholder="email ex:user@gr" name="em" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Password:</label>
		  <input type="password" class="form-control" id="pwd" placeholder="Type your password" name="pwd" required>
		</div>
		
		<button type="submit" class="btn btn-default">Login</button>
		
	  </form><br>
	  <a href="signup.php"><button type="button" class="btn btn-default">Signup</button></a>
	</div>
</div>
 
<?php

include "down.php";


?>
