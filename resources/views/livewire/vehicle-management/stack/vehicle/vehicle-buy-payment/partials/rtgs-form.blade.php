@if ($currentFormType === 'RTGS')
    <form action="#" wire:submit="saveRTGS" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="formCashDeposit.pbl_bank">PBL Bank<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="formCashDeposit.pbl_bank" class="form-control @error('formCashDeposit.pbl_bank') {{ 'is-invalid' }} @enderror" placeholder="client name">
                    @error('formCashDeposit.pbl_bank')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="formCashDeposit.client_name">Client Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="formCashDeposit.client_name" class="form-control @error('formCashDeposit.client_name') {{ 'is-invalid' }} @enderror" placeholder="client name">
                    @error('formCashDeposit.client_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="formCashDeposit.clients_bank">Client Bank<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="formCashDeposit.clients_bank" class="form-control @error('formCashDeposit.clients_bank') {{ 'is-invalid' }} @enderror" placeholder="client bank">
                    @error('formCashDeposit.clients_bank')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="formCashDeposit.client_bank_account_number">Account Number<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="formCashDeposit.client_bank_account_number" class="form-control @error('formCashDeposit.client_bank_account_number') {{ 'is-invalid' }} @enderror" placeholder="client bacnk account number">
                    @error('formCashDeposit.client_bank_account_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="formCashDeposit.amount">Amount<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="number" wire:model.live="formCashDeposit.amount" class="form-control @error('formCashDeposit.amount') {{ 'is-invalid' }} @enderror" placeholder="amout">
                    @error('formCashDeposit.amount')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="formCashDeposit.date">Date<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="date" wire:model.live="formCashDeposit.date" class="form-control @error('formCashDeposit.date') {{ 'is-invalid' }} @enderror">
                    @error('formCashDeposit.date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <label for="formCashDeposit.remarks">Remark<span class="text-danger"></span></label>
                <div class="input-group mb-3">
                    <textarea wire:model.live="formCashDeposit.remarks" cols="30" rows="5" class="form-control" placeholder="remakrs"></textarea>
                </div>
            </div>
        </div>

        <div class="text-start">
            <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
            <button wire:click='skip' class="bg-transparent border border-blue-400 px-4 py-1 rounded" type="button">Skip & Next</button>
        </div>
    </form>
@endif
