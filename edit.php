<?php
include "up.php";
if($_SESSION['id']!="")
	
{
	include "menu.php";
	$sql="select * from users,content where users.id='$_GET[idu]' and content.id_user='$_GET[idu]'";
	$q=mysqli_query($conn,$sql);
	$r=mysqli_fetch_array($q);
?>
<div class="container">
<div class="form">


<form action='mycontent.php' method=post>
	  <div class='form-group'>
		<label for='fullname'>Fullname:</label>
		<input type='text' class='form-control' id='fn2' placeholder="Type your new name" name="fn2" value=<?php echo $r['onoma']; ?> >
	  </div>
	  <div class='form-group'>
		<label for='title'>Title:</label>
		<input type='text' class='form-control' id='tl2' placeholder="Type your new title of your content" name="tl2" value=<?php echo $r['titlos']; ?> >
	  </div>
	  <button type='submit' class='btn btn-default'>Edit</button>
	 
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