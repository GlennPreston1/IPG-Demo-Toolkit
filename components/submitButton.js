class SubmitButton extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
            <div class="row justify-content-center">
                <button class="btn btn-primary btn-lg my-4" type="submit">Submit</button>
            </div>
		`;
	}	
}

customElements.define('submitbutton-component', SubmitButton);