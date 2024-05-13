<!DOCTYPE html>

<html>
	<head>
		<title>IPG Demo Tool</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap/jquery -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

		<!-- Components -->
		<script src="../components/navbar.js" type="text/javascript" defer></script>
		<script src="../components/environmentSelector.js" type="text/javascript" defer></script>
		<script src="../components/divider.js" type="text/javascript" defer></script>
		<script src="../components/submitButton.js" type="text/javascript" defer></script>
		<script src="../components/sessionTokenResponseCard.js" type="text/javascript" defer></script>
		<script src="../components/actionResponseCard.js" type="text/javascript" defer></script>
		<script src="../components/cofOption.js" type="text/javascript" defer></script>
	</head>

	<body onload="initSession()">
		<navbar-component></navbar-component>

		<div class="container my-4">
			<div class="text text-center mb-4"><h2><strong>Direct API - Auth | Purchase | Verify</strong></h2></div>
			
			<environmentselector-component></environmentselector-component>

			<divider-component></divider-component>

			<h2 class="mb-4">Step 1: Session Token Request</h2>
			<form id="tokenForm">
				<div class="text text-center mb-3"><h6><strong>Required Parameters</strong></h6></div>
				<div class="row mb-3">
					<div class="col">
						<div class="form-group">
							<label class="m-0" for="merchantIdInput1">merchantId</label>
							<input class="form-control form-control-sm" id="merchantIdInput1" name="merchantId">
						</div>

						<div class="form-group">
							<label class="m-0" for="passwordInput">password</label>
							<input class="form-control form-control-sm" id="passwordInput" name="password">
						</div>
						
						<div class="form-group">
							<label class="m-0" for="customerIdInput">customerId</label>
							<input class="form-control form-control-sm" id="customerIdInput" name="customerId">
						</div>

						<div class="form-group">
							<label class="m-0" for="allowOriginUrlInput">allowOriginUrl</label>
							<input class="form-control form-control-sm" id="allowOriginUrlInput" name="allowOriginUrl" value="*">
						</div>

						<div class="form-group">
							<label class="m-0" for="timestampInput">timestamp</label>
							<input class="form-control form-control-sm" id="timestampInput" name="timestamp">
						</div>

						<div class="form-group">
							<label class="m-0" for="merchantLandingPageUrlInput">merchantLandingPageUrl</label>
							<input class="form-control form-control-sm" id="merchantLandingPageUrlInput" name="merchantLandingPageUrl" value="https://ipgcarts.com/Glenn/Demo/Transactions/landing.php">
						</div>

						<div class="form-group">
							<label class="m-0" for="merchantNotificationUrlInput">merchantNotificationUrl</label>
							<input class="form-control form-control-sm" id="merchantNotificationUrlInput" name="merchantNotificationUrl" value="https://ipgcarts.com/Glenn/Demo/Transactions/notification.php">
						</div>
						
						<div class="form-group">
							<label class="m-0" for="userDeviceInput">userDevice</label>
							<select class="form-control form-control-sm" id="userDeviceInput" name="userDevice">
								<option  value="DESKTOP">DESKTOP</option>
								<option  value="MOBILE">MOBILE</option>
							</select>
						</div>
						
						<div class="form-group">
							<label class="m-0" for="customerBrowserInput">customerBrowser</label>
							<input class="form-control form-control-sm" id="customerBrowserInput" name="customerBrowser" value='{"browserAcceptHeader":"text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",				"browserJavaEnabled":"false",				"browserJavascriptEnabled":"true",				"browserLanguage":"en",				"browserColorDepth":"24",				"browserScreenHeight":"864",				"browserScreenWidth":"1536",				"browserTZ":"-330",				"challengeWindowSize":"05"}'>
						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label class="m-0" for="countryInput">country</label>
							<input class="form-control form-control-sm" id="countryInput" name="country">
						</div>

						<div class="form-group">
							<label class="m-0" for="currencyInput">currency</label>
							<input class="form-control form-control-sm" id="currencyInput" name="currency">
						</div>
						
						<div class="form-group">
							<label class="m-0" for="specinCreditCardTokenInput">specinCreditCardToken</label>
							<input class="form-control form-control-sm" id="specinCreditCardTokenInput" name="specinCreditCardToken">
						</div>
						
						<div class="form-group">
							<label class="m-0" for="actionInput">action</label>
							<select class="form-control form-control-sm" id="actionInput" name="action">
								<option  value="AUTH">AUTH</option>
								<option  value="PURCHASE">PURCHASE</option>
								<option  value="VERIFY">VERIFY</option>
							</select>
						</div>

						<div class="form-group">
							<label class="m-0" for="amountInput">amount</label>
							<input class="form-control form-control-sm" id="amountInput" name="amount" value="5">
						</div>

						<div class="form-group">
							<label class="m-0" for="channelInput">channel</label>
							<select class="form-control form-control-sm" id="channelInput" name="channel">
								<option  value="ECOM">ECOM</option>
								<option  value="MOTO">MOTO</option>
							</select>
						</div>
						
						<div class="form-group">
							<label class="m-0" for="paymentSolutionIdInput">paymentSolutionId</label>
							<input class="form-control form-control-sm" id="paymentSolutionIdInput" name="paymentSolutionId" value="500">
						</div>
						
						<div class="form-group">
							<label class="m-0" for="userAgentInput">userAgent</label>
							<input class="form-control form-control-sm" id="userAgentInput" name="userAgent" value="Mozilla">
						</div>
						
						<div class="form-group">
							<label class="m-0" for="customerIPAddressInput">customerIPAddress</label>
							<input class="form-control form-control-sm" id="customerIPAddressInput" name="customerIPAddress" value="111.111.111.111">
						</div>
					</div>
				</div>

				<cofoption-component></cofoption-component>

				<div class="row mb-3 cofInitial">
					<div class="col">
						<div class="form-group">
							<label class="m-0" for="cardOnFileTypeInput1">cardOnFileType</label>
							<input class="form-control form-control-sm cofInitial" id="cardOnFileTypeInput1" name="cardOnFileType" value="First">
						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label class="m-0" for="cardOnFileReasonInput1">cardOnFileReason</label>
							<select class="form-control form-control-sm cofInitial" id="cardOnFileReasonInput1" name="cardOnFileReason">
								<option  value="C">C</option>
								<option  value="I">I</option>
								<option  value="R">R</option>
								<option  value="H">H</option>
								<option  value="E">E</option>
								<option  value="D">D</option>
								<option  value="M">M</option>
								<option  value="N">N</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row mb-3 cofSubsequent">
					<div class="col">
						<div class="form-group">
							<label class="m-0" for="cardOnFileTypeInput2">cardOnFileType</label>
							<input class="form-control form-control-sm cofSubsequent" id="cardOnFileTypeInput2" name="cardOnFileType" value="Repeat">
						</div>

						<div class="form-group">
							<label class="m-0" for="cardOnFileInitiatorInput">cardOnFileInitiator</label>
							<select class="form-control form-control-sm cofSubsequent" id="cardOnFileInitiatorInput" name="cardOnFileInitiator">
								<option  value="Cardholder">Cardholder</option>
								<option  value="Merchant">Merchant</option>
							</select>
						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label class="m-0" for="cardOnFileReasonInput2">cardOnFileReason</label>
							<select class="form-control form-control-sm cofSubsequent" id="cardOnFileReasonInput2" name="cardOnFileReason">
								<option  value="C">C</option>
								<option  value="I">I</option>
								<option  value="R">R</option>
								<option  value="H">H</option>
								<option  value="E">E</option>
								<option  value="D">D</option>
								<option  value="M">M</option>
								<option  value="N">N</option>
							</select>
						</div>

						<div class="form-group">
							<label class="m-0" for="cardOnFileInitialTransactionIdInput">cardOnFileInitialTransactionId</label>
							<input class="form-control form-control-sm cofSubsequent" id="cardOnFileInitialTransactionIdInput" name="cardOnFileInitialTransactionId">
						</div>
					</div>
				</div>
				
				<submitbutton-component></submitbutton-component>
			</form>

			<sessiontokenresponsecard-component></sessiontokenresponsecard-component>

			<divider-component></divider-component>

			<h2 class="my-4">Step 2: Action Request</h2>

			<form id="actionForm">
				<div class="row">
					<div class="col">
						<div class="form-group">
							<label class="m-0" for="merchantIdInput2">merchantId</label>
							<input class="form-control form-control-sm" id="merchantIdInput2" name="merchantId">
						</div>

						<div class="form-group">
							<label class="m-0" for="specinCreditCardCVVInput">specinCreditCardCVV</label>
							<input class="form-control form-control-sm" id="specinCreditCardCVVInput" name="specinCreditCardCVV" value="123">
						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label class="m-0" for="tokenInput">token</label>
							<input class="form-control form-control-sm" id="tokenInput" name="token" style="color: green;">
						</div>
					</div>
				</div>
				
				<submitbutton-component></submitbutton-component>
			</form>
			
			<actionresponsecard-component></actionresponsecard-component>
			
			<div class="row my-4" id="redirectionUrlContainer" hidden>
				<div class="col">
					<div class="row justify-content-center">
						<p id="redirectionUrlTxt">Click the below link to complete the payment:</p>
					</div>
					<div class="row justify-content-center">
						<a id="redirectionUrlLink" href=""></a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			function initSession() {
				setTimestamp();
				getUserConfigParams();
				COFParams("Not Included");
				setTokenizedParams();
			}
			
			$("#tokenForm").on("submit",function(e) {
				e.preventDefault();
				submitTokenForm(this);
			});
			
			$("#actionForm").on("submit",function(e) {
				e.preventDefault();
				submitActionForm(this);
			});
		</script>
		
		<!-- JS functions -->
		<script src="../config/endpointConfig.js" type="text/javascript"></script>
		<script src="../scripts/js/utils.js" type="text/javascript"></script>
		<script src="../scripts/js/formSubmissionController.js" type="text/javascript"></script>
	</body>
</html>