<html>
	<head>
	
		<?php 
		//including CSS Links for page
		include 'css_links.php';
		?>

		<title>School Of Commerce</title>

	</head>

	<body>
		<?PHP 
		//include header
		include 'header.php';
		?>
		
		<div class="row ">
			<div class="col-sm-12 ">
				<?php
				//including slider 
				include 'slider.php';
				?>
			</div>
		</div>
		
		<div class="container">
			<hr>
			<div class="row">
				<div class="col-sm-4">
					<!--Notice and annoucements-->
					<div class="panel panel-default">
			    <div class="panel-heading"><strong>Notice and Annoucements</strong></div>
			    <div class="panel-body">Panel Content</div>
			  </div>
				</div>
				<div class="col-sm-4">
				<!--News-->
				<div class="panel panel-default">
			    <div class="panel-heading"><strong>News</strong></div>
			    <div class="panel-body">Panel Content</div>
			  </div></div>
				<div class="col-sm-4">
					<!--Events-->
					<div class="panel panel-default">
			    <div class="panel-heading"><strong>Events</strong></div>
			    <div class="panel-body">Panel Content</div>
			  </div>
				</div>
			</div>
		</div>
		
		<?php
		//including footer
		include 'footer.php';
		?>

		<?php 
		//including all the js files
		include 'js_links.php';
		?>
	</body>
</html>
