class SessionTokenResponseCard extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
            <h4>Session Token Response</h4>
            <div class="card bg-light text-dark mb-4">
                <div class="card-body" id="sessionTokenResponseCard" ></div>
            </div>
		`;
	}	
}

customElements.define('sessiontokenresponsecard-component', SessionTokenResponseCard);