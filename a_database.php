<?php include'config.php'; ?>
<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<?php include 'navbar.php';?>

<section id="contacts" class="team">
		<div class="container">
			<div class="row">
				<div class="head_title text-center wow zoomIn" data-wow-duration="0.5s">
					<h2>Database</h2>
					<div class="separetor"></div>
				</div><br>
				<div>
				<iframe height="580" width="100%" src="http://localhost/phpmyadmin/db_structure.php?server=1&db=pkl"></iframe>									
				</div>
			</div>
		</div>
</section>

<?php include 'script.php';?>
</body>
</html>