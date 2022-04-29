<?php
include "up.php";

if(@$_SESSION['id']!="")
{
include "menu.php";
if(isset($_POST['em']))
{
	if($_POST['pwd']=="")
	{
		$sql="update users set onoma='$_POST[fn]',
								email='$_POST[em]',
								tilefono='$_POST[ph]'
								where id=$_SESSION[id]";
	}
	else
	{
		$sql="update users set onoma='$_POST[fn]',
								email='$_POST[em]',
								password='".md5($_POST['pwd'])."',
								tilefono='$_POST[ph]'
								where id=$_SESSION[id]";
	}
			
		mysqli_query($conn,$sql);
	
}
	
			$sql="select * from users where id=$_SESSION[id]";
			$q=mysqli_query($conn,$sql);
			$r=mysqli_fetch_array($q);
			


?>


<div class="container">
<div class="form">


<form action='profile.php' method=post>
	  <div class='form-group'>
		<label for='Email'>Email:</label>
		<input type='email' class='form-control' id='em' placeholder=" email ex:user@gr" name="em" required value='<?php echo $r['email']; ?>'>
	  </div>
	  <div class='form-group'>
		<label for='fullname'>Fullname:</label>
		<input type='text' class='form-control' id='fn' placeholder=" fullname" name="fn" required value='<?php echo $r['onoma']; ?>'>
	  </div>
	  <div class='form-group'>
		<label for='password'>Password:</label>
		<input type='password' class='form-control' id='pwd' name="pwd" value=''>
	  </div>
	  <div class='form-group'>
		<label for='phone'>Phone:</label>
		<input type='number' class='form-control' id='ph' name="ph" required value='<?php echo $r['tilefono']; ?>'>
	  </div>
	  <button type='submit' class='btn btn-default'>Submit</button>
	 
</form>

</div>
</div>

<?php 

}
	
else
{
		echo "
<div class=\"alert alert-danger\">
  <strong>Error!</strong> You must login. <a href='index.php'>Go to login page</a>
</div>
";
}

include "down.php";
?>