class CofOption extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
        <div class="row justify-content-center mb-3">
            <div class="form-check-inline">
                <h6 class="mb-0"><strong>Card On File Parameters:</strong></h6>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="cofOption" onclick="COFParams(this.value)" value="Not Included" checked="checked">Not Included
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="cofOption" onclick="COFParams(this.value)" value="Initial">Initial
                </label>
            </div>
        </div>
		`;
	}	
}

customElements.define('cofoption-component', CofOption);