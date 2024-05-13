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
		<script src="../components/cofOption.js" type="text/javascript" defer></script>
	</head>

	<body onload="initSession()">
		<navbar-component></navbar-component>

		<div class="container my-4">
			<div class="text text-center mb-4"><h2><strong>HPP - HostedPayPage</strong></h2></div>

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
					</div>
				</div>

				<cofoption-component></cofoption-component>

				<div class="row mb-3 cofInitial">
					<div class="col">
						<div class="form-group">
							<label class="m-0" for="cardOnFileTypeInput">cardOnFileType</label>
							<select class="form-control form-control-sm cofInitial" id="cardOnFileTypeInput" name="cardOnFileType">
								<option  value="First">First</option>
								<option  value="Repeat">Repeat</option>
							</select>
						</div>
					</div>

					<div class="col">
						<div class="form-group">
							<label class="m-0" for="cardOnFileReasonInput">cardOnFileReason</label>
							<select class="form-control form-control-sm cofInitial" id="cardOnFileReasonInput" name="cardOnFileReason">
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
							<label class="m-0" for="integrationModeInput">integrationMode</label>
							<input class="form-control form-control-sm" id="integrationModeInput" name="integrationMode" value="HostedPayPage">
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
		</div>

		<script>
			function initSession() {
				setTimestamp();
				getUserConfigParams();
				COFParams("Not Included");
			}
			
			$("#tokenForm").on("submit",function(e) {
				e.preventDefault();
				submitTokenForm(this);
			});
		</script>
		
		<!-- JS functions -->
		<script src="../config/endpointConfig.js" type="text/javascript"></script>
		<script src="../scripts/js/utils.js" type="text/javascript"></script>
		<script src="../scripts/js/formSubmissionController.js" type="text/javascript"></script>
	</body>
</html>