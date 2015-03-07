<?php 
	if(isset($_POST['submit']))
	{
		$photo = $_FILES['photo'];
		if (!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name']))
		{
			$unitid = $_POST['unitid'];
			$unitname = $_POST['unitname'];
			$unittype = $_POST['unittype'];
			$unitarea = $_POST['unitarea'];
			$unitimgname = $photo['name'];
			$unitimgtype = $photo['type'];
			$unitimgurl = 'unitimages/'.$photo['name'];
			$unitfinishes1 = isset($_POST['unitfinishes1']) ? $_POST['unitfinishes1'] : '';
			$unitfinishes2 = isset($_POST['unitfinishes2']) ? $_POST['unitfinishes2'] : '';
			$unitfinishes3 = isset($_POST['unitfinishes3']) ? $_POST['unitfinishes3'] : '';
			$unitfinishes4 = isset($_POST['unitfinishes4']) ? $_POST['unitfinishes4'] : '';
			$unitfinishes5 = isset($_POST['unitfinishes5']) ? $_POST['unitfinishes5'] : '';
			$unitstatus = isset($_POST['unitstatus']) ? $_POST['unitstatus'] : '';

			update_unit($unitid, $unitname, $unittype, $unitarea, $unitimgname, $unitimgtype, $unitimgurl, $unitfinishes1, $unitfinishes2, $unitfinishes3, $unitfinishes4, $unitfinishes5, $unitstatus);
				
			echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfuly updated unit.</div>";
			header("Refresh:1");
		}
		else
		{
			if($photo && !$photo['error'] && substr($photo['type'], 0, 5) == 'image')
			{
				$unitid = $_POST['unitid'];
				$unitname = $_POST['unitname'];
				$unittype = $_POST['unittype'];
				$unitarea = $_POST['unitarea'];
				$unitimgname = $photo['name'];
				$unitimgtype = $photo['type'];
				$unitimgurl = 'unitimages/'.$photo['name'];
				$unitfinishes1 = $_POST['unitfinishes1'];
				$unitfinishes2 = $_POST['unitfinishes2'];
				$unitfinishes3 = $_POST['unitfinishes3'];
				$unitfinishes4 = $_POST['unitfinishes4'];
				$unitfinishes5 = $_POST['unitfinishes5'];
				$unitstatus = $_POST['unitstatus'];

				update_unit($unitid, $unitname, $unittype, $unitarea, $unitimgname, $unitimgtype, $unitimgurl, $unitfinishes1, $unitfinishes2, $unitfinishes3, $unitfinishes4, $unitfinishes5, $unitstatus);
				
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
				
				echo "<div class = 'alert alert-success' style = 'width: 265px;'>Successfuly updated unit.</div>";
				header("Refresh:1");
			}
			else
			{
				echo '<code>Invalid file.</code>';
			}
		}
	}
	
	$getupdateunits = get_update_units();
	$getfinishes = get_finishes();
?>
<!DOCTYPE html>
<html>
	<head><title>Update Units</title>
	<body>
		<h4>UPDATE UNIT</h4><hr/>
		<div class = "col-md-3">
			<form class = "form" method = "post" enctype = "multipart/form-data">
				<div class = "form-group">
					<label>Title</label>
					<select name = "unitid" required = "required" class = "form-control">
						<option value = "" disabled>Please select</option>
						<?php foreach($getupdateunits as $g): ?>
							<option value = "<?php echo htmlentities($g['unitid']); ?>"><?php echo htmlentities($g['unitname']); ?></option>
						<?php endforeach; ?>
					</select>	
				</div>
				<div class = "form-group">
					<label>Blueprint Image:</label>
					<input type = "file" name = "photo">
				</div>
				<div class = "form-group">
					<label>Unit Name:</label>
					<input type = "text" class = "form-control" name = "unitname" placeholder = "Unit name here..."/>
				</div>
				<div class = "form-group">
					<label>Unit Type:</label>
					<input type = "text" class = "form-control" name = "unittype" placeholder = "Unit type here..."/>
				</div>
				<div class = "form-group">
					<label>Unit Area:</label>
					<input type = "text" class = "form-control" name = "unitarea" placeholder = "Unit area here ex(100 sq.ft)..."/>
				</div>
				<div class = "form-group">
					<label>Unit Finishes 1:</label>
					<select name = "unitfinishes1" class = "form-control">
						<option value = "" disabled = "disabled" selected = "selected">Please select</option>
						<?php foreach($getfinishes as $g): ?>
							<option value = "<?php echo htmlentities($g['finishesid']); ?>"><?php echo htmlentities($g['finishesname']); ?></option>
						<?php endforeach; ?>
						<option value = "0">None</option>
					</select>
				</div>
				<div class = "form-group">
					<label>Unit Finishes 2:</label>
					<select name = "unitfinishes2" class = "form-control">
						<option value = "" disabled = "disabled" selected = "selected">Please select</option>
						<?php foreach($getfinishes as $g): ?>
							<option value = "<?php echo htmlentities($g['finishesid']); ?>"><?php echo htmlentities($g['finishesname']); ?></option>
						<?php endforeach; ?>
						<option value = "0">None</option>
					</select>						
				</div>
				<div class = "form-group">
					<label>Unit Finishes 3:</label>
					<select name = "unitfinishes3" class = "form-control">
						<option value = "" disabled = "disabled" selected = "selected">Please select</option>
						<?php foreach($getfinishes as $g): ?>
							<option value = "<?php echo htmlentities($g['finishesid']); ?>"><?php echo htmlentities($g['finishesname']); ?></option>
						<?php endforeach; ?>
						<option value = "0">None</option>
					</select>						
				</div>
				<div class = "form-group">
					<label>Unit Finishes 4:</label>
					<select name = "unitfinishes4" class = "form-control">
						<option value = "" disabled = "disabled" selected = "selected">Please select</option>
						<?php foreach($getfinishes as $g): ?>
							<option value = "<?php echo htmlentities($g['finishesid']); ?>"><?php echo htmlentities($g['finishesname']); ?></option>
						<?php endforeach; ?>
						<option value = "0">None</option>
					</select>						
				</div>
				<div class = "form-group">
					<label>Unit Finishes 5:</label>
					<select name = "unitfinishes5" class = "form-control">
						<option value = "" disabled = "disabled" selected = "selected">Please select</option>
						<?php foreach($getfinishes as $g): ?>
							<option value = "<?php echo htmlentities($g['finishesid']); ?>"><?php echo htmlentities($g['finishesname']); ?></option>
						<?php endforeach; ?>
						<option value = "0">None</option>
					</select>						
				</div>
				<div class = "form-group">
					<label>Status:</label>
					<select name = "unitstatus" class = "form-control">
						<option value = "" disabled = "disabled" selected = "selected">Please select</option>
						<option value = "1">Active</option>
					</select>
				</div>
				<div class = "form-group">
					<button type = "submit" class = "btn" name = "submit">Save</button>
				</div>
			</form>
		</div>
	</body>