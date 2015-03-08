<?php 
	if(isset($_POST['submit']))
	{
		$photo = $_FILES['photo'];
		if($photo && !$photo['error'] && substr($photo['type'], 0, 5) == 'image')
		{
			$unitname = $_POST['unitname'];
			$unittype = $_POST['unittype'];
			$unitarea = $_POST['unitarea'];
			$unitimgname = $photo['name'];
			$unitimgtype = $photo['type'];
			$unitimgurl = 'unitimages/'.$photo['name'];
			$unitfinishes1 = isset($_POST['unitfinishes1']) ? $_POST['unitfinishes1'] : 0;
			$unitfinishes2 = isset($_POST['unitfinishes2']) ? $_POST['unitfinishes2'] : 0;
			$unitfinishes3 = isset($_POST['unitfinishes3']) ? $_POST['unitfinishes3'] : 0;
			$unitfinishes4 = isset($_POST['unitfinishes4']) ? $_POST['unitfinishes4'] : 0;
			$unitfinishes5 = isset($_POST['unitfinishes5']) ? $_POST['unitfinishes5'] : 0;

			add_unit($unitname, $unittype, $unitarea, $unitimgname, $unitimgtype, $unitimgurl, $unitfinishes1, $unitfinishes2, $unitfinishes3, $unitfinishes4, $unitfinishes5);
			
			$target = "../unitimages/";  
			$target = $target . basename( $_FILES['photo']['name']); 
			
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
			{  
				//echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";  
			}  
			else 
			{   
				echo "Sorry, there was a problem uploading your file.";  
			}  
			
			echo "<div class = 'alert alert-success' style = 'width: 265px;'>New unit has been added.</div>";
		}
		else
		{
			echo '<code>Invalid file.</code>';
		}
	}
	
	$getfinishes = get_finishes();
?>
<!DOCTYPE html>
<html>
	<head><title>addunits.php</title>
	<body>
		<h4>ADD UNIT</h4><hr/>
			<div class = "col-md-3">
				<form class = "form" method = "post" enctype = "multipart/form-data">
					<div class = "form-group">
						<label>Blueprint Image:</label>
						<input type = "file" name = "photo" required = "required">
					</div>
					<div class = "form-group">
						<label>Unit Name:</label>
						<input type = "text" class = "form-control" name = "unitname" placeholder = "Unit name here..." required = "required"/>
					</div>
					<div class = "form-group">
						<label>Unit Type:</label>
						<input type = "text" class = "form-control" name = "unittype" placeholder = "Unit type here..." required = "required"/>
					</div>
					<div class = "form-group">
						<label>Unit Area:</label>
						<input type = "text" class = "form-control" name = "unitarea" placeholder = "Unit area here ex(100 sq.ft)..." required = "required"/>
					</div>
					<div class = "form-group">
						<label>Unit Finish 1:</label>
						<select name = "unitfinishes1" class = "form-control">
							<option value = "" disabled = "disabled" selected = "selected">Please select</option>
							<?php foreach($getfinishes as $g): ?>
								<option value = "<?php echo htmlentities($g['finishesid']); ?>"><?php echo htmlentities($g['finishesname']); ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class = "form-group">
						<label>Unit Finish 2:</label>
						<select name = "unitfinishes2" class = "form-control">
							<option value = "" disabled = "disabled" selected = "selected">Please select</option>
							<?php foreach($getfinishes as $g): ?>
								<option value = "<?php echo htmlentities($g['finishesid']); ?>"><?php echo htmlentities($g['finishesname']); ?></option>
							<?php endforeach; ?>
						</select>						
					</div>
					<div class = "form-group">
						<label>Unit Finish 3:</label>
						<select name = "unitfinishes3" class = "form-control">
							<option value = "" disabled = "disabled" selected = "selected">Please select</option>
							<?php foreach($getfinishes as $g): ?>
								<option value = "<?php echo htmlentities($g['finishesid']); ?>"><?php echo htmlentities($g['finishesname']); ?></option>
							<?php endforeach; ?>
						</select>						
					</div>
					<div class = "form-group">
						<label>Unit Finish 4:</label>
						<select name = "unitfinishes4" class = "form-control">
							<option value = "" disabled = "disabled" selected = "selected">Please select</option>
							<?php foreach($getfinishes as $g): ?>
								<option value = "<?php echo htmlentities($g['finishesid']); ?>"><?php echo htmlentities($g['finishesname']); ?></option>
							<?php endforeach; ?>
						</select>						
					</div>
					<div class = "form-group">
						<label>Unit Finish 5:</label>
						<select name = "unitfinishes5" class = "form-control">
							<option value = "" disabled = "disabled" selected = "selected">Please select</option>
							<?php foreach($getfinishes as $g): ?>
								<option value = "<?php echo htmlentities($g['finishesid']); ?>"><?php echo htmlentities($g['finishesname']); ?></option>
							<?php endforeach; ?>
						</select>						
					</div>
					<div class = "form-group">
						<button type = "submit" class = "btn" name = "submit">Save</button>
					</div>
				</form>
			</div>
	</body>
</html>