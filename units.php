<?php
	$getunits = get_units();
	$getfinishes = get_finishes();
?>
<!DOCTYPE html>
<html>
	<head><title>Units</title></head>
	<body>
		<h3 style = "margin-top: 40px;">UNITS</h3>
			<?php foreach($getunits as $g): ?>
				<div class = "row" style = "margin-top: 20px;">
					<div class = "col-md-5">
						<div>
							<b><?php echo htmlentities($g['unitname']); ?></b>
						</div>
						<div>
							<div class = "row">
								<div class = "col-md-offset-2 col-md-8">
									<img src = "<?php echo htmlentities($g['unitimgurl']); ?>" width = "300px" height = "300px"/>
								</div>
							</div>
						</div>
					</div>
					
					<div class = "col-md-7">
						<div>
							<b>Unit Details</b>
						</div>
						<div>
							<ul style = "margin-top: 20px;">
								<li><?php echo htmlentities($g['unittype']); ?></li>
								<li><?php echo htmlentities($g['unitarea']); ?></li>
							</ul>
						</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-md-12" style = "margin-top: 30px;">
						<div>
							<b>Further Details / Unit Finishes</b>
						</div>
						<div>
							<ul style = "margin-top: 20px;">
							    <?php foreach($getfinishes as $gf): ?>
									<?php if($gf['finishesid'] == $g['unitfinishes1'] || $gf['finishesid'] == $g['unitfinishes2'] || $gf['finishesid'] == $g['unitfinishes3'] || $gf['finishesid'] == $g['unitfinishes4'] || $gf['finishesid'] == $g['unitfinishes5']) {?>
										<li><?php echo htmlentities($gf['finishesname']); } ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<hr/>
			<?php endforeach; ?>
	</body>
</html>