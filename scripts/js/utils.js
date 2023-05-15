/**** HPP/DIRECT API ****/

// Set timestamp parameter
function setTimestamp() {
	var timestampInput = document.querySelector("#timestampInput");
	timestampInput.value = Date.now();
}

// Set the environment endpoints for session token request and action request forms
function setEnvironment(environment) {
	var tokenForm = document.querySelector("#tokenForm");
	var actionForm = document.querySelector("#actionForm");

	tokenForm.action = endpointConfig[environment].sessionTokenURL;
	
	var currentUrl = window.location.pathname;
	
	if (currentUrl.includes("DirectAPI")) {
		actionForm.action = endpointConfig[environment].actionURL;
	}
	else if (currentUrl.includes("HPP")) {
		actionForm.action = endpointConfig[environment].cashierURL;
	}
}

// Get cookie by cookie name
function getCookie(cookieName) {
	return document.cookie
		.split("; ")
		.find((row) => row.startsWith(cookieName + "="))
		?.split("=")[1];
}

/**** TRANSACTIONS ****/

// Format transactions table with DataTable
function formatTransactionsTable() {
	$('#transactionsTable').DataTable({
		order: [[0, 'desc']],
		columnDefs: [
			{
				targets: [2],
				orderable: false,
			},
		],
	});
}

// Confirmation window to delete payload file
function deleteLogConfirmation(payloadFile) {
	let text = "Are you sure you want to delete " + (payloadFile.substring(0, payloadFile.lastIndexOf('.')) || payloadFile) + " log file?";

	if (confirm(text) == true) {
		console.log(payloadFile);

		$.ajax({
			type: 'POST',
			url: '../scripts/php/deletePayloadFile.php',
			data: { 'file' : '../../Transactions/logs/' + payloadFile },
			success  : function(result) {
				location.reload();
			}
		});
	}
}