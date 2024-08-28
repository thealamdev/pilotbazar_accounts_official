@if ($currentFormType === 'Cash Deposit')
    <form action="#" wire:submit="saveCashDeposit" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="createVehicleSellPaymentCashDepositRequest.account_holder_name">Account Holder Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="createVehicleSellPaymentCashDepositRequest.account_holder_name" class="form-control @error('createVehicleSellPaymentCashDepositRequest.account_holder_name') {{ 'is-invalid' }} @enderror" placeholder="account holder name">
                    @error('createVehicleSellPaymentCashDepositRequest.account_holder_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleSellPaymentCashDepositRequest.debit_bank_name">Debit Bank Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="createVehicleSellPaymentCashDepositRequest.debit_bank_name" class="form-control @error('createVehicleSellPaymentCashDepositRequest.debit_bank_name') {{ 'is-invalid' }} @enderror" placeholder="debit bank name">
                    @error('createVehicleSellPaymentCashDepositRequest.debit_bank_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleSellPaymentCashDepositRequest.debit_bank_account_number">Debit Bank Account Number<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="createVehicleSellPaymentCashDepositRequest.debit_bank_account_number" class="form-control @error('createVehicleSellPaymentCashDepositRequest.debit_bank_account_number') {{ 'is-invalid' }} @enderror" placeholder="client bacnk account number">
                    @error('createVehicleSellPaymentCashDepositRequest.debit_bank_account_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleSellPaymentCashDepositRequest.amount">Amount<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="number" wire:model.live="createVehicleSellPaymentCashDepositRequest.amount" class="form-control @error('createVehicleSellPaymentCashDepositRequest.amount') {{ 'is-invalid' }} @enderror" placeholder="amout">
                    @error('createVehicleSellPaymentCashDepositRequest.amount')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleSellPaymentCashDepositRequest.date">Date<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="date" wire:model.live="createVehicleSellPaymentCashDepositRequest.date" class="form-control @error('createVehicleSellPaymentCashDepositRequest.date') {{ 'is-invalid' }} @enderror">
                    @error('createVehicleSellPaymentCashDepositRequest.date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <label for="createVehicleSellPaymentCashDepositRequest.remarks">Remark<span class="text-danger"></span></label>
                <div class="input-group mb-3">
                    <textarea wire:model.live="createVehicleSellPaymentCashDepositRequest.remarks" cols="30" rows="5" class="form-control" placeholder="remakrs"></textarea>
                </div>
            </div>
        </div>

        <div class="text-start">
            <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
            <button wire:click='skip' class="bg-transparent border border-blue-400 px-4 py-1 rounded" type="button">Skip &Next</button>
        </div>
    </form>
@endif
