<!DOCTYPE html>

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
			<div class="text text-center mb-4"><h2><strong>Transaction Response</strong></h2></div>

			<table class="table table-sm table-striped table-bordered">
				<thead>
					<tr>
						<th style="width: 50%" scope="col">Parameter</th>
						<th style="width: 50%" scope="col">Value</th>
					</tr>
				</thead>
				<tbody>
					<?php
					// Return if there was no transaction response
					if ($_POST or $_GET) {
						if ($_POST) {
							$payload = $_POST;
						}
						else {
							$payload = $_GET;
						}
					}
					else {
						echo ('No order has been processed, please try again.') ;
						return 0;
					}

					ksort($payload);

					foreach ($payload as $key => $value) {
						echo '<tr>';
						echo '<td>'.$key.'</td>';
						echo '<td>'.$value.'</td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>