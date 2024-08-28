@if ($currentFormType === 'Cash')
    <form action="#" wire:submit="saveCash" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="createVehicleSellPaymentCashtRequest.account_holder_name">Client Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="text" wire:model.live="createVehicleSellPaymentCashtRequest.account_holder_name" class="form-control @error('createVehicleSellPaymentCashtRequest.account_holder_name') {{ 'is-invalid' }} @enderror" placeholder="account holder name">
                    @error('createVehicleSellPaymentCashtRequest.account_holder_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleSellPaymentCashtRequest.amount">Amount<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="number" wire:model.live="createVehicleSellPaymentCashtRequest.amount" class="form-control @error('createVehicleSellPaymentCashtRequest.amount') {{ 'is-invalid' }} @enderror" placeholder="amout">
                    @error('createVehicleSellPaymentCashtRequest.amount')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <label for="createVehicleSellPaymentCashtRequest.date">Date<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text">৳</span>
                    <input type="date" wire:model.live="createVehicleSellPaymentCashtRequest.date" class="form-control @error('createVehicleSellPaymentCashtRequest.date') {{ 'is-invalid' }} @enderror">
                    @error('createVehicleSellPaymentCashtRequest.date')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-12">
                <label for="createVehicleSellPaymentCashtRequest.remarks">Remark<span class="text-danger"></span></label>
                <div class="input-group mb-3">
                    <textarea wire:model.live="createVehicleSellPaymentCashtRequest.remarks" cols="30" rows="5" class="form-control" placeholder="remakrs"></textarea>
                </div>
            </div>
        </div>

        <div class="text-start">
            <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
            <button wire:click='skip' class="bg-transparent border border-blue-400 px-4 py-1 rounded" type="button">Skip &Next</button>
        </div>
    </form>
@endif
