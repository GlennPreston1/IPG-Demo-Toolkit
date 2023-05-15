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
			<div class="text text-center mb-4"><h2><strong>Settings</strong></h2></div>

			<h2 class="mb-4">Settings</h2>
			<form id="settingsForm">
				<div class="form-group">
					<label class="m-0" for="merchantIdInput1">merchantId</label>
					<input class="form-control form-control-sm" id="merchantIdInput1" name="merchantId">
				</div>

				<div class="form-group">
					<label class="m-0" for="passwordInput">password</label>
					<input class="form-control form-control-sm" id="passwordInput" name="password">
				</div>
				
				<div class="form-group">
					<label class="m-0" for="countryInput">country</label>
					<input class="form-control form-control-sm" id="countryInput" name="country">
				</div>

				<div class="form-group">
					<label class="m-0" for="currencyInput">currency</label>
					<input class="form-control form-control-sm" id="currencyInput" name="currency">
				</div>

				<div class="form-group">
					<label class="m-0" for="merchantLandingPageUrlInput">merchantLandingPageUrl</label>
					<input class="form-control form-control-sm" id="merchantLandingPageUrlInput" name="merchantLandingPageUrl">
				</div>

				<div class="form-group">
					<label class="m-0" for="merchantNotificationUrlInput">merchantNotificationUrl</label>
					<input class="form-control form-control-sm" id="merchantNotificationUrlInput" name="merchantNotificationUrl">
				</div>
				
				<div class="row justify-content-center">
					<button class="btn btn-primary btn-lg my-4" type="submit">Save</button>
				</div>
			</form>
		</div>
		
		<script>
			function initSession() {
				getUserConfigParams();
			}
			
			$("#settingsForm").on("submit",function(e) {
				e.preventDefault();
				saveUserConfig(this);
			});
		</script>
		
		<!-- JS functions -->
		<script src="../config/endpointConfig.js" type="text/javascript"></script>
		<script src="../scripts/js/utils.js" type="text/javascript"></script>
	</body>
</html>