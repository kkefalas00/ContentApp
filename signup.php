<?php

include "up.php";


?>



<div class="container">
<div class="form">

<div><h1>Sign up</h1></div>
<form action='signup.php' method=post>
	  <div class='form-group'>
		<label for='Email'>Email:</label>
		<input type='email' class='form-control' id='em' placeholder=" email ex:user@gr" name="em" required>
	  </div>
	  <div class='form-group'>
		<label for='fullname'>Fullname:</label>
		<input type='text' class='form-control' id='fn' placeholder=" fullname" name="fn" required>
	  </div>
	  <div class='form-group'>
		<label for='password'>Password:</label>
		<input type='password' class='form-control' id='pwd' name="pwd" required>
	  </div>
	  <div class='form-group'>
		<label for='phone'>Phone:</label>
		<input type='number' class='form-control' id='ph' name="ph" required>
	  </div>
	  <button type='submit' class='btn btn-default'>Submit</button>
	  <a href="index.php"><button type='button'  class='btn btn-default'>Back</button></a>
</form>

</div>



<?php

if(isset($_POST['fn']))
{
	
	$sql="insert into users set
		email='$_POST[em]',
		onoma='$_POST[fn]',
		password='".md5($_POST['pwd'])."',
		tilefono='$_POST[ph]'";
	
	
	if(mysqli_query($conn,$sql))
	{	
		echo "<div class='alert alert-success minima' role='alert' >
			  the user with name: $_POST[fn]  is inserted<br>
			   </div><br>";
		echo "<a href='index.php'><button id='min1'>Go to login page</button></a>";
		
	}

	else
	{
		echo "<div class='alert alert-danger minima' role='alert'>
			  Wrong Insertion!
			  </div>";
		header('Location: index.php');
		
	}
	
	
}

?>


</div>


<?php

include "down.php";

?>