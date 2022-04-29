<?php

include "up.php";

if(@$_SESSION['id']!="")
{
	include "menu.php";
	
		if(isset($_POST['fn2']))
		{
	
			$sql="update users set onoma='$_POST[fn2]' where users.id=$_SESSION[id]";	
			mysqli_query($conn,$sql);
	
		}
		
		if(isset($_POST['tl2']))
		{
	
			$sql="update content set titlos='$_POST[tl2]' where content.id_user=$_SESSION[id]";
			mysqli_query($conn,$sql);
	
		}
		
	 if(isset($_GET['id']))
		 
		{
			$sql="delete from content where id=$_GET[id]";
			mysqli_query($conn,$sql);
		}
	

?>

	<div class="container">
	
				<table class="table table-hover">
				<tr>
					<th>Title</th>
					<th>Date</th>
					<th>User</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
	</div>	

<?php

	

	$sql="select *, content.id as idc from content,users where  users.id=content.id_user and $_SESSION[id]=users.id ";
	$q=mysqli_query($conn,$sql);
	while($r=mysqli_fetch_array($q))
	{
		
		echo "
				<tr>
					<td>$r[titlos]</td>
					<td>$r[imerominia]</td>
					<td>$r[onoma]</td>
					<td><a href='mycontent.php?id=$r[idc]'><span class=\"glyphicon glyphicon-trash\"></span></a></td>
					<td><a href='edit.php?idu=$r[id]'><span class=\"glyphicon glyphicon-pencil\"></span></a></td>
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