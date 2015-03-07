<?php
	
	if(isset($_POST['submit']))
	{
		$photo = $_FILES['photo'];
		if($photo && !$photo['error'] && substr($photo['type'], 0, 5) == 'image')
		{
			$articletitle = $_POST['articletitle'];
			$articlebody = $_POST['articlebody'];
			$articleimgname = $photo['name'];
			$articleimgtype = $photo['type'];
			$articleimgurl = 'articleimages/'.$photo['name'];

			add_article($articletitle, $articlebody, $articleimgname, $articleimgtype, $articleimgurl);
			
			$target = "../articleimages/";  
			$target = $target . basename( $_FILES['photo']['name']); 
			
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
			{  
				//echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";  
			}  
			else 
			{   
				echo "Sorry, there was a problem uploading your file.";  
			}  
			
			echo 'New article has been uploaded.';
		}
		else
		{
			echo '<code>Invalid file.</code>';
		}
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Add Article</title>
	<body>
		<h4>ADD ARTICLE</h4>
			<div class = "col-md-3">
				<form method="post" enctype="multipart/form-data">
					<div class = "form-group">
						<label>Title</label>
						<input type = "text" name = "articletitle" class = "form-control" maxlength = "50" required = "required"/>
					</div>
					<div class = "form-group">
						<label>Image</label>
						<input type = "file" name = "photo" required = "required">
					</div>
					<div class = "form-group">
						<label>Description:</label>
						<textarea class="form-control" rows="5" name = "articlebody" maxlength = "1000" required = "required"></textarea>
					</div>
					<div class = "form-group">
						<button type = "submit" class = "btn" name = "submit">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>