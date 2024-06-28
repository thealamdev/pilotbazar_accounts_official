<div class="d-flex align-items-center mb-3" style="width: 300px">
    <p for="maintenanceCost">Maintenance Costing</p>
    <p wire:click='maintenanceCostingFormStatus' class="ms-5 border border-slate-400 text-center fs-4" style="border-radius: 50%;width:20px;height:20px;line-height:15px;cursor: pointer;">
        {{ $maintenanceCostingForm == 'yes' ? '-' : '+' }}
    </p>
</div>
@if ($maintenanceCostingForm == 'yes')
    <div class="border border-slate-400 rounded p-3 my-5 ">
        <form wire:submit.prevent="saveMaintenanceCost">
            @csrf
            @for ($i = 0; $i < $maintenanceCostingFormLen; $i++)
                <div class="row" wire:key="maintenance-costing-form-{{ $i }}">
                    <div class="col-lg-4">
                        <label for="vehicleMaintenanceCostingRequest.costing_name.{{ $i }}">Costing Name<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="text" wire:model.live="vehicleMaintenanceCostingRequest.costing_name.{{ $i }}" class="form-control @error('vehicleMaintenanceCostingRequest.costing_name.' . $i) is-invalid @enderror" placeholder="client name">
                            @error('vehicleMaintenanceCostingRequest.costing_name.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="vehicleMaintenanceCostingRequest.amount.{{ $i }}">Amount<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model.live="vehicleMaintenanceCostingRequest.amount.{{ $i }}" class="form-control @error('vehicleMaintenanceCostingRequest.amount.' . $i) is-invalid @enderror" placeholder="amount">
                            @error('vehicleMaintenanceCostingRequest.amount.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="vehicleMaintenanceCostingRequest.date.{{ $i }}">Date<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="date" wire:model.live="vehicleMaintenanceCostingRequest.date.{{ $i }}" class="form-control @error('vehicleMaintenanceCostingRequest.date.' . $i) is-invalid @enderror">
                            @error('vehicleMaintenanceCostingRequest.date.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for="vehicleMaintenanceCostingRequest.remarks.{{ $i }}">Remark</label>
                        <div class="input-group mb-3">
                            <textarea wire:model.live="vehicleMaintenanceCostingRequest.remarks.{{ $i }}" cols="30" rows="3" class="form-control" placeholder="remarks"></textarea>
                        </div>
                    </div>
                </div>
            @endfor

            <div class="text-start">
                <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
                <button wire:click.prevent="maintenanceCostFormLenIncrement" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">+</button>
            </div>
        </form>
    </div>
@endif