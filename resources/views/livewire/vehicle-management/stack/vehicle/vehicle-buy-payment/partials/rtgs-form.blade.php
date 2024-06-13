@if ($currentFormType === 'RTGS')
    <form action="#" wire:submit="saveRTGS" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentRTGSRequest.debit_bank">Debit Bank(Our Bank)<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <select wire:model.live="createVehicleBuyPaymentRTGSRequest.debit_bank" class="form-control @error('createVehicleBuyPaymentRTGSRequest.debit_bank') {{ 'is-invalid' }} @enderror">
                        <option selected></option>
                        @foreach ($banks as $each)
                            <option value="{{ $each?->id }}">{{ $each?->name }}</option>
                        @endforeach
                    </select>
                    @error('createVehicleBuyPaymentRTGSRequest.debit_bank')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentRTGSRequest.account_holder_name">Account Holder Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="createVehicleBuyPaymentRTGSRequest.account_holder_name" class="form-control @error('createVehicleBuyPaymentRTGSRequest.account_holder_name') {{ 'is-invalid' }} @enderror" placeholder="account holder name">
                    @error('createVehicleBuyPaymentRTGSRequest.account_holder_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentRTGSRequest.credit_bank_name">Credit Bank Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="createVehicleBuyPaymentRTGSRequest.credit_bank_name" class="form-control @error('createVehicleBuyPaymentRTGSRequest.credit_bank_name') {{ 'is-invalid' }} @enderror" placeholder="credit bank name">
                    @error('createVehicleBuyPaymentRTGSRequest.credit_bank_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentRTGSRequest.credit_bank_account_number">Credit Bank Account Number<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="createVehicleBuyPaymentRTGSRequest.credit_bank_account_number" class="form-control @error('createVehicleBuyPaymentRTGSRequest.credit_bank_account_number') {{ 'is-invalid' }} @enderror" placeholder="client bacnk account number">
                    @error('createVehicleBuyPaymentRTGSRequest.credit_bank_account_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentRTGSRequest.amount">Amount<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="number" wire:model.live="createVehicleBuyPaymentRTGSRequest.amount" class="form-control @error('createVehicleBuyPaymentRTGSRequest.amount') {{ 'is-invalid' }} @enderror" placeholder="amout">
                    @error('createVehicleBuyPaymentRTGSRequest.amount')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleBuyPaymentRTGSRequest.date">Date<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="date" wire:model.live="createVehicleBuyPaymentRTGSRequest.date" class="form-control @error('createVehicleBuyPaymentRTGSRequest.date') {{ 'is-invalid' }} @enderror">
                    @error('createVehicleBuyPaymentRTGSRequest.date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <label for="createVehicleBuyPaymentRTGSRequest.remarks">Remark<span class="text-danger"></span></label>
                <div class="input-group mb-3">
                    <textarea wire:model.live="createVehicleBuyPaymentRTGSRequest.remarks" cols="30" rows="5" class="form-control" placeholder="remakrs"></textarea>
                </div>
            </div>
        </div>

        <div class="text-start">
            <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
            <button wire:click='skip' class="bg-transparent border border-blue-400 px-4 py-1 rounded" type="button">Skip & Next</button>
        </div>
    </form>
@endif
