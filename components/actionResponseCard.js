class ActionResponseCard extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
            <h4>Action Response</h4>
            <div class="card bg-light text-dark mb-4">
                <div class="card-body" id="actionResponseCard" ></div>
            </div>
		`;
	}	
}

customElements.define('actionresponsecard-component', ActionResponseCard);