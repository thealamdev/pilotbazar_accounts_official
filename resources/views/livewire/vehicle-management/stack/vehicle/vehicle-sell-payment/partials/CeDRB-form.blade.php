@if ($currentFormType === 'RTGS' || $currentFormType === 'Check Deposit' || $currentFormType === 'Bank Pay Order')
    <form action="#" wire:submit="saveCeDRB" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="form.credit_bank">Credit Bank(Our Bank)<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <select wire:model.live="form.credit_bank" class="form-control @error('form.credit_bank') {{ 'is-invalid' }} @enderror">
                        <option selected>--Select an Option--</option>
                        @foreach ($banks as $each)
                            <option value="{{ $each?->id }}">{{ $each?->name }}</option>
                        @endforeach
                    </select>
                    @error('form.credit_bank')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="form.account_holder_name">Account Holder Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="form.account_holder_name" class="form-control @error('form.account_holder_name') {{ 'is-invalid' }} @enderror" placeholder="account holder name">
                    @error('form.account_holder_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="form.debit_bank_name">Debit Bank Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="form.debit_bank_name" class="form-control @error('form.debit_bank_name') {{ 'is-invalid' }} @enderror" placeholder="debit bank name">
                    @error('form.debit_bank_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="form.debit_bank_account_number">Debit Bank Account Number<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="form.debit_bank_account_number" class="form-control @error('form.debit_bank_account_number') {{ 'is-invalid' }} @enderror" placeholder="debit bacnk account number">
                    @error('form.debit_bank_account_number')
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
                    <textarea wire:model.live="form.remarks" cols="30" rows="5" class="form-control" placeholder="remakrs"></textarea>
                </div>
            </div>
        </div>

        <div class="text-start">
            <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
            <button wire:click='skip' class="bg-transparent border border-blue-400 px-4 py-1 rounded" type="button">Skip & Next</button>
        </div>
    </form>
@endif
