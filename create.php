<?php 

include"up.php";

if(@$_SESSION['id']!="")
	
{
include "menu.php";
if(isset($_POST['tl']))
			
	{
		
				$sql="insert into content (titlos,url,perigrafi,id_user,imerominia)
				values('$_POST[tl]','$_POST[url]','$_POST[dsr]',$_SESSION[id],NOW())";
				
				if(mysqli_query($conn,$sql))
					
					{
						
						echo "<div class='alert alert-success minima' role='alert' >
					Title of content:' $_POST[tl] is inserted'. The date of your registration is:".date("Y-m-d")."<br>
							</div><br>";
		
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

<div class="container">
<div class="form">


<form action='create.php' method=post>
	  <div class='form-group'>
		<label for='Title'>Title of Content:</label>
		<input type='text' class='form-control' id='tl' placeholder=" Type your title of your content" name="tl" required>
	  </div>
	  <div class='form-group'>
		<label for='url'>URL:</label>
		<input type='url' class='form-control' id='url' placeholder=" Type your url" name="url" required>
	  </div>
	  <div class='form-group'>
		<label for='Description'>Description</label>
		<input type='text' class='form-control' id='dsr' name="dsr" required>
	  </div>

	  <button type='submit' class='btn btn-default'>Create</button>
	 
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