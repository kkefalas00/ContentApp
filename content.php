<?php


include "up.php";

	
	
	if(isset($_POST["em"]))
	{
			$sql="select * from users where email='$_POST[em]' and password='".md5($_POST['pwd'])."'";
			$q=mysqli_query($conn,$sql);
			
			if(mysqli_num_rows($q)>0)
			{
					$r=mysqli_fetch_array($q);
					$_SESSION['id']=$r['id'];
			}
			else
			{
					
					echo "<div class=\"alert alert-danger minima\" >
							  <strong>Error!</strong> The email or password dont exist. <a href='index.php'>Return</a>
						 </div>";
							
						$_SESSION['id']="";
						die();
			}
			
			
			
}

if(@$_SESSION['id']!="")

{
	include "menu.php";
	
	echo "<div id=d2><h1>Welcome to the Content Menu</h1></div>";
	
}
else
{
	
	echo "<div class=\"alert alert-danger minima\">
							  <strong>Error!</strong>You must sign up<a href='index.php'> Return</a>
		 </div>";
		die();
}

include "down.php"
?>