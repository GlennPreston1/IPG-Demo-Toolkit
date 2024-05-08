class Divider extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
            <br />
            <hr style="height:2px; border-width:0; color:gray; background-color:lightgray" />
            <br />
		`;
	}	
}

customElements.define('divider-component', Divider);