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
		
		
		
		<div class="container">

			<div class="row ">

				<div class="col-sm-3">
					<!--Notice and annoucements-->
					<div class="panel panel-default">
			    		<div class="panel-heading">
			    			<strong>Notice and Annoucements</strong>
			    		</div>
				    	<div class="panel-body">
				    		Panel Content	
				    	</div>
				 	</div>
				 	  
			    </div>
			   
				<div class="col-sm-6 ">
					<?php
						//including slider 
						include 'slider.php';
					?>
					<br>
				</div>
				

				<div class="col-sm-3">
				<!--News-->
					<div class="panel panel-default">
				    	<div class="panel-heading">
				    		<strong>News</strong>	
				    	</div>
				    	<div class="panel-body">
				    		Panel Content
				    	</div>
				    </div>

			    </div>

			</div>
			<hr>

			<div align="center">
			<!--Div for qoute -->
			<i><h2 > " Great Dreams of great dreamers are always transcended. " </h2>
			<h4 class="pull-right"> - APJ Abdul Kalam </h4></i>
			<br><br>
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
