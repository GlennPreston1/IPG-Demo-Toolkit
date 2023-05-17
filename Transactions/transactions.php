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

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap4.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap4.min.css">

		<script src="../components/navbar.js" type="text/javascript" defer></script>
	</head>

	<body onload="initSession()">
		<navbar-component></navbar-component>

		<div class="container my-4">
			<div class="text text-center mb-4"><h2><strong>Previous Transactions</strong></h2></div>

			<table id="transactionsTable" class="table table-sm table-striped table-bordered">
				<thead>
					<tr>
						<th scope="col">Timestamp</th>
						<th scope="col">Merchant ID</th>
						<th scope="col">MerchantTx ID</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php
					// Check if user or guest
					$user = "Guest";
					if(isset($_COOKIE["user"])) {
						$user = $_COOKIE["user"];
					}
					
					// Get logs for the user
					$logDir = 'logs/'.$user;
					$payloadList = array_diff(scandir($logDir), array('..', '.'));
					rsort($payloadList);
					
					// Put previous transactions in a table
					foreach($payloadList as $key => $value)
					{
						$filenameSplit = explode('_', pathinfo($value)['filename'], 3);
						
						echo '<tr>';
						echo '<td>'.date('Y-m-d H:i:s', $filenameSplit[0]).'</td>';
						echo '<td>'.$filenameSplit[1].'</td>';
						echo '<td>'.$filenameSplit[2].'</td>';
						echo '<td>
						<a href="selectedTransaction.php?id='.$value.'">view</a>
						 | 
						<a id="'.$value.'" href="" onclick="deleteLogConfirmation(\''.$value.'\')">delete</a></td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</body>

	<script>
		function initSession() {
			formatTransactionsTable();
		}
	</script>
	
	<!-- JS functions -->
	<script src="../scripts/js/utils.js" type="text/javascript"></script>
</html>