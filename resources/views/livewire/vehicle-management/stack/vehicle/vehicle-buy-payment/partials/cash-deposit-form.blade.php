@if ($currentFormType === 'Cash Deposit')
    <form action="#" wire:submit="saveCashDeposit" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentCashDepositRequest.account_holder_name">Account Holder Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="createVehicleBuyPaymentCashDepositRequest.account_holder_name" class="form-control @error('createVehicleBuyPaymentCashDepositRequest.account_holder_name') {{ 'is-invalid' }} @enderror" placeholder="account holder name">
                    @error('createVehicleBuyPaymentCashDepositRequest.account_holder_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentCashDepositRequest.credit_bank_name">Credit Bank Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="createVehicleBuyPaymentCashDepositRequest.credit_bank_name" class="form-control @error('createVehicleBuyPaymentCashDepositRequest.credit_bank_name') {{ 'is-invalid' }} @enderror" placeholder="credit bank name">
                    @error('createVehicleBuyPaymentCashDepositRequest.credit_bank_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentCashDepositRequest.credit_bank_account_number">Credit Bank Account Number<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="createVehicleBuyPaymentCashDepositRequest.credit_bank_account_number" class="form-control @error('createVehicleBuyPaymentCashDepositRequest.credit_bank_account_number') {{ 'is-invalid' }} @enderror" placeholder="client bacnk account number">
                    @error('createVehicleBuyPaymentCashDepositRequest.credit_bank_account_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentCashDepositRequest.amount">Amount<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="number" wire:model.live="createVehicleBuyPaymentCashDepositRequest.amount" class="form-control @error('createVehicleBuyPaymentCashDepositRequest.amount') {{ 'is-invalid' }} @enderror" placeholder="amout">
                    @error('createVehicleBuyPaymentCashDepositRequest.amount')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentCashDepositRequest.date">Date<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="date" wire:model.live="createVehicleBuyPaymentCashDepositRequest.date" class="form-control @error('createVehicleBuyPaymentCashDepositRequest.date') {{ 'is-invalid' }} @enderror">
                    @error('createVehicleBuyPaymentCashDepositRequest.date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <label for="createVehicleBuyPaymentCashDepositRequest.remarks">Remark<span class="text-danger"></span></label>
                <div class="input-group mb-3">
                    <textarea wire:model.live="createVehicleBuyPaymentCashDepositRequest.remarks" cols="30" rows="5" class="form-control" placeholder="remakrs"></textarea>
                </div>
            </div>
        </div>

        <div class="text-start">
            <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
            <button wire:click='skip' class="bg-transparent border border-blue-400 px-4 py-1 rounded" type="button">Skip &Next</button>
        </div>
    </form>
@endif
