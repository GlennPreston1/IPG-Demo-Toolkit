var requestController = "../scripts/php/requestController.php";

function submitTokenForm(formObject) {
	let data = $(formObject).serializeArray();
	data.push({name: "endpoint", value: $(formObject).attr('action')});

	var sessionTokenResponseCard = document.querySelector("#sessionTokenResponseCard");
	var tokenInput = document.querySelector("#tokenInput");
	var merchantIdInput2 = document.querySelector("#merchantIdInput2");

	$.ajax({
		url: requestController,
		type: "POST",
		dataType: 'json',
		data: $.param(data),
		success  : function(result) {
			console.log(JSON.stringify(result));
			sessionTokenResponseCard.innerHTML = JSON.stringify(result);
			sessionTokenResponseCard.scrollIntoView();
			if (result.token != null) {
				tokenInput.value = result.token;
			}
			if (result.merchantId != null && merchantIdInput2.value != result.merchantId) {
				merchantIdInput2.value = result.merchantId;
				merchantIdInput2.style.color = "green";
			}
			else if (merchantIdInput2.value == result.merchantId) {
				merchantIdInput2.style.color = "black";
			}
		}
	});
}

function submitActionForm(formObject) {
	let data = $(formObject).serializeArray();
	data.push({name: "endpoint", value: $(formObject).attr('action')});

	var actionResponseCard = document.querySelector("#actionResponseCard");

	$.ajax({
		url: requestController,
		type: "POST",
		dataType: 'json',
		data: $.param(data),
		success  : function(result) {
			console.log(JSON.stringify(result));
			
			if (window.location.pathname.includes("DirectAPI/tokenize")) {
				showTokenizeParamsTxt(result["result"]);
			}
			
			if (window.location.pathname.includes("DirectAPI/auth_purchase_verify")) {
				showRedirectionUrl(result);
			}
			
			actionResponseCard.innerHTML = JSON.stringify(result);
			actionResponseCard.scrollIntoView();
		}
	});
}