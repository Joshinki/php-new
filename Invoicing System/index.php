<?php
	include 'classes/pageController.php';
	$page = new Page;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Invoicing System</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet">
	<script src="src/javascript.js" language="javascript"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="header">
				<h1>Invoicing</h1>
			</div>
		</div>
		
		<div class="divider"></div>
		
		<div class="row">
			<div class="col-md-2">
				<div class="side-menu">
					<?php $page->showNavigation(); ?>
				</div>
			</div>
			
			<div class="col-md-10">
				<div class="main-frame">
					<?php 
						if(isset($_GET['page']) AND $_GET['page'] != "") {
							$page->view($_GET['page']);
						} else {
							$page->viewHomepage();
						}
					?>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>