<?php
	$delgetarticles = del_get_articles();
	
	if(isset($_POST['submit']))
	{
		delete_article($_POST['articleid']);
		header("Refresh:1");
		echo "Successfuly deleted article";
	}
?>
<!DOCTYPE html>
<html>
	<head><title>Delete Article</title>
	<body>
		<h4>DELETE ARTICLE</h4>
			<div class = "col-md-3">
				<form class = "form" method = "post">
					<div class = "form-group">
					    <select class = "form-control" name = "articleid" required = "required">
							<option value = "" disabled>Please select</option>
							<?php foreach($delgetarticles as $d): ?>
								<option value = "<?php echo htmlentities($d['articleid']); ?>"><?php echo htmlentities($d['articletitle']); ?></option>
							<?php endforeach; ?>
						 </select>
					</div>
					<div class = "form-group">
						<button type = "submit" name = "submit" class = "btn">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>