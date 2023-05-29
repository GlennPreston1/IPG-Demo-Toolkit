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

// Show showTokenizeParamsTxt
function showTokenizeParamsTxt(result) {
	if(result == "success") {
		document.querySelector("#passTokenizeParamsContainer").removeAttribute("hidden");
	}
}
			
// Send specinCreditCardToken and customerId to Auth/Purchase/Verify
function passTokenizedParams() {
	var actionResponse = JSON.parse(document.querySelector("#actionResponseCard").innerHTML);
	window.location.href = "./auth_purchase_verify.php?customerId="+actionResponse["customerId"]+"&cardToken="+actionResponse["cardToken"];
}

// Set specinCreditCardToken and customerId if they were passed from Tokenize response
function setTokenizedParams() {
	var params = new Map(location.search.slice(1).split('&').map(kv => kv.split('=')));
	
	if (params.has("customerId") && params.has("cardToken")) {
		document.querySelector("#customerIdInput").value = params.get("customerId");
		document.querySelector("#customerIdInput").style.color = "green";
		document.querySelector("#specinCreditCardTokenInput").value = params.get("cardToken");
		document.querySelector("#specinCreditCardTokenInput").style.color = "green";
	}
}

// Show redirectionUrl as link
function showRedirectionUrl(result) {
	if(result["result"] == "redirection") {
		document.querySelector("#redirectionUrlLink").href = result["redirectionUrl"];
		document.querySelector("#redirectionUrlLink").innerHTML = result["redirectionUrl"];
		document.querySelector("#redirectionUrlContainer").removeAttribute("hidden");
	}
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
		
		var user = getCookie("user");
		if (user == null || user == "") {
			user = "Guest";
		}

		$.ajax({
			type: 'POST',
			url: '../scripts/php/deletePayloadFile.php',
			data: { 'file' : '../../Transactions/logs/' + user + "/" + payloadFile },
			success  : function(result) {
				location.reload();
			}
		});
	}
}

/**** USERS ****/

// Get user settings from config file
function getUserConfig(callback) {
	$.ajax({
		type: 'POST',
		url: '../scripts/php/getUserConfigSettings.php',
		dataType: 'json',
		success  : function(params) {
			callback(params);
		}
	});
}

// Get user's saved params from config
function getUserConfigParams() {
	getUserConfig(function(userConfig) {
		Object.entries(userConfig["params"]).forEach(param => {
			const [key, value] = param;
			var elements = document.querySelectorAll('[id*="'+key+'"]');
			
			elements.forEach(element => {
				element.value = value;
			});
		});
	});
}

// Save user settings
function saveUserConfig(formObject) {
	let data = $(formObject).serializeArray();
	
	console.log(data);
	
	$.ajax({
		type: 'POST',
		url: '../scripts/php/saveUserConfigSettings.php',
		dataType: 'json',
		data: $.param(data),
		success  : function(params) {
			console.log(JSON.stringify(params));
		}
	});
}

// Log out user by expiring the "user" cookie
function logOut() {
	document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	return true;
}