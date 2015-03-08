<?php
	$updgetarticles = upd_get_articles();
	$articletitle = '';
	$articlebody = '';
	
	if(isset($_POST['submit']))
	{
		$photo = $_FILES['photo'];
		if (!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name']))
		{
			$articleid = $_POST['articleid'];
			$articletitle = $_POST['articletitle'];
			$articlebody = $_POST['articlebody'];
			$articlestatus = isset($_POST['articlestatus']) ? $_POST['articlestatus'] : '';
			$articleimgname = $photo['name'];
			$articleimgtype = $photo['type'];
			$articleimgurl = 'articleimages/'.$photo['name'];

			update_article($articleid, $articletitle, $articlebody, $articlestatus, $articleimgname, $articleimgtype, $articleimgurl);
			
			echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully updated article.</div>";
			header("Refresh:1");
		}
		else
		{
			if(($photo && !$photo['error']) && substr($photo['type'], 0, 5) == 'image')
			{
					$articleid = $_POST['articleid'];
					$articletitle = $_POST['articletitle'];
					$articlebody = $_POST['articlebody'];
					$articlestatus = $_POST['articlestatus'];
					$articleimgname = $photo['name'];
					$articleimgtype = $photo['type'];
					$articleimgurl = 'articleimages/'.$photo['name'];

					update_article($articleid, $articletitle, $articlebody, $articlestatus, $articleimgname, $articleimgtype, $articleimgurl);
					
					$target = "../articleimages/";  
					$target = $target . basename($_FILES['photo']['name']); 
					
					if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
					{  
						//echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";  
					}  
					else 
					{   
						echo "Sorry, there was a problem uploading your file.";  
					}  
					
					echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully updated article.</div>";
					header("Refresh:1");
			}
			else
			{
				echo '<code>Invalid file.</code>';
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Update Article</title></head>
	<body>
		<h4>UPDATE ARTICLE</h4><hr/>
			<div class = "col-md-3">
				<form class = "form" method = "post" enctype="multipart/form-data">
					<div class = "form-group">
             <label>Article Title</label>
					   <select class = "form-control" name = "articleid" required = "required">
							<option value = "" disabled>Please select</option>
							<?php foreach($updgetarticles as $d): ?>
								<option value = "<?php echo htmlentities($d['articleid']); ?>"><?php echo htmlentities($d['articletitle']); ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class = "form-group">
						<label>New Article Title</label>
						<input type = "text" value = "<?php htmlentities($articletitle); ?>" name = "articletitle" class = "form-control" placeholder = "New title here"/>
					</div>	
					<div class = "form-group">
						<label>Image</label>
						<input type = "file" name = "photo">
					</div>
					<div class = "form-group">
						<label>Description:</label>
						<br>
						<textarea class = "form-control" value = "<?php htmlentities($articlebody); ?>" name = "articlebody" rows = "3" placeholder = "New Description..."></textarea>
					</div>
					<div class = "form-group">
						<label>Status</label>
						<select class = "form-control" name = "articlestatus">
							<option value = "" disabled = "disabled" selected = "selected">Select status</option>
							<option value = "1">Active</option>
						</select>
					</div>
					<div class = "form-group">
						<button type = "submit" class = "btn" name = "submit">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>