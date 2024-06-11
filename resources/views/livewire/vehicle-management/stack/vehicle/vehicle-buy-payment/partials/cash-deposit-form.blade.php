@if ($currentFormType === 'Cash Deposit')
    <form action="#" wire:submit="saveCashDeposit" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="form.pbl_bank">PBL Bank<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="form.pbl_bank" class="form-control @error('form.pbl_bank') {{ 'is-invalid' }} @enderror" placeholder="client name">
                    @error('form.pbl_bank')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="form.client_name">Client Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="form.client_name" class="form-control @error('form.client_name') {{ 'is-invalid' }} @enderror" placeholder="client name">
                    @error('form.client_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="form.clients_bank">Client Bank<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="form.clients_bank" class="form-control @error('form.clients_bank') {{ 'is-invalid' }} @enderror" placeholder="client bank">
                    @error('form.clients_bank')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="form.client_bank_account_number">Account Number<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="form.client_bank_account_number" class="form-control @error('form.client_bank_account_number') {{ 'is-invalid' }} @enderror" placeholder="client bacnk account number">
                    @error('form.client_bank_account_number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="form.amount">Amount<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="number" wire:model.live="form.amount" class="form-control @error('form.amount') {{ 'is-invalid' }} @enderror" placeholder="amout">
                    @error('form.amount')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="form.date">Date<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="date" wire:model.live="form.date" class="form-control @error('form.date') {{ 'is-invalid' }} @enderror">
                    @error('form.date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <label for="form.remarks">Remark<span class="text-danger"></span></label>
                <div class="input-group mb-3">
                    <textarea wire:model.live="form.remarks" cols="30" rows="10" class="form-control" placeholder="remakrs"></textarea>
                </div>
            </div>
        </div>

        <div class="text-start">
            <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save & Next</button>
        </div>
    </form>
@endif
