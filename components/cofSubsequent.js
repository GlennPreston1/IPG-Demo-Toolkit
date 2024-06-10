class CofSubsequent extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
        <div class="row mb-3 cofSubsequent">
            <div class="col">
                <div class="form-group">
                    <label class="m-0" for="cardOnFileTypeInput2">cardOnFileType</label>
                    <input class="form-control form-control-sm cofSubsequent" id="cardOnFileTypeInput2" name="cardOnFileType" value="Repeat">
                </div>

                <div class="form-group">
                    <label class="m-0" for="cardOnFileInitiatorInput">cardOnFileInitiator</label>
                    <select class="form-control form-control-sm cofSubsequent" id="cardOnFileInitiatorInput" name="cardOnFileInitiator">
                        <option  value="Cardholder">Cardholder</option>
                        <option  value="Merchant">Merchant</option>
                    </select>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label class="m-0" for="cardOnFileReasonInput2">cardOnFileReason</label>
                    <select class="form-control form-control-sm cofSubsequent" id="cardOnFileReasonInput2" name="cardOnFileReason">
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

                <div class="form-group">
                    <label class="m-0" for="cardOnFileInitialTransactionIdInput">cardOnFileInitialTransactionId</label>
                    <input class="form-control form-control-sm cofSubsequent" id="cardOnFileInitialTransactionIdInput" name="cardOnFileInitialTransactionId">
                </div>
            </div>
        </div>
		`;
	}	
}

customElements.define('cofsubsequent-component', CofSubsequent);