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
	</head>

	<body onload="initSession()">
		<navbar-component></navbar-component>

		<div class="container my-4">
			<div class="text text-center mb-4"><h2><strong>Direct API - Auth | Purchase | Verify</strong></h2></div>
			
			<environmentselector-component></environmentselector-component>

			<h2 class="mb-4">Step 1: Session Token Request</h2>
			<form id="tokenForm">
				<div class="row">
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
				<div class="row justify-content-center">
					<button class="btn btn-primary btn-lg my-4" type="submit">Submit</button>
				</div>
			</form>

			<h4>Token Response</h4>
			<div class="card bg-light text-dark mb-4">
				<div class="card-body" id="tokenResponseCard" ></div>
			</div>

			<br />

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
				<div class="row justify-content-center">
					<button class="btn btn-primary btn-lg my-4" type="submit">Submit</button>
				</div>
			</form>
			
			<h4>Action Response</h4>
			<div class="card bg-light text-dark mb-4">
				<div class="card-body" id="actionResponseCard" ></div>
			</div>
		</div>
		
		<script>
			function initSession() {
				setTimestamp();
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