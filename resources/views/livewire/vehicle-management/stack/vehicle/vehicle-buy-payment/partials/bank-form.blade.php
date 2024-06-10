@if ($currentFormType === 'Bank')
    <form action="#" wire:submit="save" method="POST">
        @csrf
        <div class="row">
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
                <label for="form.amount">Amount<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="number" wire:model.live="form.amount" class="form-control @error('form.amount') {{ 'is-invalid' }} @enderror" placeholder="amout">
                    @error('form.amount')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="text-start">
            <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
        </div>
    </form>
@endif
