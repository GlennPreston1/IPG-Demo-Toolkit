class EnvironmentSelector extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
			<div class="row justify-content-center">
				<div class="form-inline">
					<div class="form-check-inline">
						<label for="environmentInput">Select environment:</label>
					</div>
					<select class="form-control" id="environmentInput" onchange="setEnvironment(this.value)">
						<option  value="BOIPA UAT">BOIPA UAT</option>
						<option  value="BOIPA PROD">BOIPA PROD</option>
						<option  value="EVO UK UAT">EVO UK UAT</option>
						<option  value="EVO UK PROD">EVO UK PROD</option>
						<option  value="Universal Pay UAT">Universal Pay UAT</option>
						<option  value="Universal Pay PROD">Universal Pay PROD</option>
						<option  value="eService UAT">eService UAT</option>
						<option  value="eService PROD">eService PROD</option>
						<option  value="EVO Germany UAT">EVO Germany UAT</option>
						<option  value="EVO Germany PROD">EVO Germany PROD</option>
					</select>
				</div>
			</div>
		`;
		
		var environmentInput = document.querySelector("#environmentInput");
		setEnvironment(environmentInput.value);
	}	
}

customElements.define('environmentselector-component', EnvironmentSelector);