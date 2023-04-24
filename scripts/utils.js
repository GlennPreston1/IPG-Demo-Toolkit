var timestampInput = document.querySelector("#timestampInput");
var tokenForm = document.querySelector("#tokenForm");
var actionForm = document.querySelector("#actionForm");

function initSession() {
	setTimestamp();
}

function setTimestamp() {
	timestampInput.value = Date.now();
}

function setEnvironment(environment) {
	tokenForm.action = endpointConfig[environment].sessionTokenURL;
	
	var currentUrl = window.location.pathname;
	
	if (currentUrl.includes("DirectAPI"))
	{
		actionForm.action = endpointConfig[environment].actionURL;
	}
	else if (currentUrl.includes("HPP"))
	{
		actionForm.action = endpointConfig[environment].cashierURL;
	}
	console.log(actionForm.action);
}