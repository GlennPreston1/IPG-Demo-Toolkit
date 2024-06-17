class Mmrp extends HTMLElement {
	constructor() {
		super();
	}

	connectedCallback() {
		this.innerHTML = `
        <div class="row mmrp">
            <div class="col">
                <div class="form-group">
                    <label class="m-0 cofInitial cofSubsequent mmrp" for="mmrpBillPayment">mmrpBillPayment</label>
                    <input class="form-control form-control-sm cofInitial cofSubsequent mmrp" id="mmrpBillPayment" name="mmrpBillPayment" value="Recurring">
                </div>

                <div class="form-group">
                    <label class="m-0 cofSubsequent mmrp" for="mmrpOriginalMerchantTransactionId">mmrpOriginalMerchantTransactionId</label>
                    <input class="form-control form-control-sm cofSubsequent mmrp" id="mmrpOriginalMerchantTransactionId" name="mmrpOriginalMerchantTransactionId">
                </div>

                <div class="form-group">
                    <label class="m-0 cofInitial cofSubsequent mmrp" for="mmrpRecurringFrequency">mmrpRecurringFrequency</label>
                    <input class="form-control form-control-sm cofInitial cofSubsequent mmrp" id="mmrpRecurringFrequency" name="mmrpRecurringFrequency" value="28">
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label class="m-0 cofInitial cofSubsequent mmrp" for="mmrpCustomerPresent">mmrpCustomerPresent</label>
                    <input class="form-control form-control-sm cofInitial cofSubsequent mmrp" id="mmrpCustomerPresent" name="mmrpCustomerPresent" value="BillPayment">
                </div>

                <div class="form-group">
                    <label class="m-0 cofInitial cofSubsequent mmrp" for="mmrpRecurringExpiry">mmrpRecurringExpiry</label>
                    <input class="form-control form-control-sm cofInitial cofSubsequent mmrp" id="mmrpRecurringExpiry" name="mmrpRecurringExpiry" value="20300101">
                </div>
            </div>
        </div>
		`;
	}	
}

customElements.define('mmrp-component', Mmrp);