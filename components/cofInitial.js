class CofInitial extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
        <div class="row cofInitial">
            <div class="col">
                <div class="form-group">
                    <label class="m-0" for="cardOnFileTypeInput1">cardOnFileType</label>
                    <input class="form-control form-control-sm cofInitial" id="cardOnFileTypeInput1" name="cardOnFileType" value="First">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label class="m-0" for="cardOnFileReasonInput1">cardOnFileReason</label>
                    <select class="form-control form-control-sm cofInitial" id="cardOnFileReasonInput1" name="cardOnFileReason">
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
		`;
	}	
}

customElements.define('cofinitial-component', CofInitial);