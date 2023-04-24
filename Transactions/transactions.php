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

	<body>
		<navbar-component></navbar-component>

		<div class="container my-5">
			<div class="text text-center mb-4"><h2><strong>Previous Transactions</strong></h2></div>

			<table id="transactionsTable" class="table table-sm table-striped table-bordered">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Timestamp</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$logDir = 'logs/';
					$payloadList = array_diff(scandir($logDir), array('..', '.'));
					rsort($payloadList);

					foreach($payloadList as $key => $value)
					{
						echo '<tr>';
						echo '<td>'.pathinfo($value)['filename'].'</td>';
						echo '<td>'.date('Y-m-d H:i:s', explode('_', pathinfo($value)['filename'])[1]).'</td>';
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
		$(document).ready(function () {
			$('#transactionsTable').DataTable({
				order: [[0, 'desc']],
				columnDefs: [
					{
						targets: [2],
						orderable: false,
					},
				],
			});
		});
	</script>

	<script>
		function deleteLogConfirmation(payloadFile) {
			let text = "Are you sure you want to delete " + (payloadFile.substring(0, payloadFile.lastIndexOf('.')) || payloadFile) + " log file?";

			if (confirm(text) == true) {
				console.log(payloadFile);

				$.ajax({
					type: 'POST',
					url: 'utils/deletePayloadFile.php',
					data: { 'file' : '../logs/' + payloadFile }
				});
			}
		}
	</script>
</html>