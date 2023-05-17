<html>
	<head>
		<title>IPG Demo Tool</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

		<script src="../components/navbar.js" type="text/javascript" defer></script>
	</head>

	<body>
		<navbar-component></navbar-component>

		<div class="container my-4">
			<div id="pageHeading" class="text text-center mb-4">
				<h2><strong>Transaction Result Call</strong></h2>
				
				<p>
					<?php		
					// Get payload date/time
					echo date('Y-m-d H:i:s', explode('_', pathinfo($_GET['id'])['filename'])[0])
					?>
				</p>
			</div>

			<table class="table table-sm table-striped table-bordered">
				<thead>
					<tr>
						<th style="width: 50%" scope="col">Parameter</th>
						<th style="width: 50%" scope="col">Value</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// Check if user or guest
					$user = "Guest";
					if(isset($_COOKIE["user"])) {
						$user = $_COOKIE["user"];
					}
					
					// Get contents from specified payload file
					$payload_file = file_get_contents('logs/'.$user.'/'.$_GET['id']) or die("Unable to open file!");
					$parameters = explode("&", urldecode($payload_file));
					asort($parameters);

					// Print params
					foreach($parameters as $value){
						$keyValue = explode("=", $value, 2);
						echo '<tr>';
						echo '<td>'.$keyValue[0].'</td>';
						echo '<td>'.$keyValue[1].'</td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</body>
	
	<!-- JS functions -->
	<script src="../scripts/js/utils.js" type="text/javascript"></script>
</html>