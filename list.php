<?php

include "up.php";

if(@$_SESSION['id']!="")
{
	include "menu.php";
	 
?>

	<div class="container">
	
				<table class="table table-hover">
				<tr>
					<th>Title</th>
					<th>Date</th>
					<th>User</th>
				</tr>
	</div>	

<?php

	

	$sql="select * from content,users where users.id=content.id_user";
	$q=mysqli_query($conn,$sql);
	while($r=mysqli_fetch_array($q))
	{
		
		echo "
				<tr>
					<td>$r[titlos]</td>
					<td>$r[imerominia]</td>
					<td>$r[onoma]</td>
				</tr>
			";
		
	}
?>

	</table>
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