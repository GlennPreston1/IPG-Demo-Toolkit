class NavBar extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<a class="navbar-brand" href="../HPP/hostedpaypage.php">IPG Demo Tool</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown" id="HPP">
							<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HPP</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="../HPP/hostedpaypage.php">HostedPayPage</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../HPP/standalone.php">Standalone</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../HPP/iframe.php">Iframe</a>
							</div>
						</li>
						<li class="nav-item dropdown" id="DirectAPI">
							<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Direct API</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="../DirectAPI/tokenize.php">Tokenize</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../DirectAPI/auth_purchase_verify.php">Auth | Purchase | Verify</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../DirectAPI/capture.php">Capture</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../DirectAPI/void.php">Void</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../DirectAPI/refund.php">Refund</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../DirectAPI/get_status.php">Get Status</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="../DirectAPI/get_available_paysols.php">Get Available Paysols</a>
							</div>
						</li>
						<li class="nav-item" id="Transactions">
							<a class="nav-link" href="../Transactions/transactions.php">Transactions</a>
						</li>
					</ul>
				</div>
			</nav>
		`;
		
		var currentUrl = window.location.pathname;

		if (currentUrl.includes("DirectAPI"))
		{
			document.getElementById("DirectAPI").className += " active";
		}
		else if (currentUrl.includes("Transactions"))
		{
			document.getElementById("Transactions").className += " active";
		}
		else
		{
			document.getElementById("HPP").className += " active";
		}
	}
}

customElements.define('navbar-component', NavBar);