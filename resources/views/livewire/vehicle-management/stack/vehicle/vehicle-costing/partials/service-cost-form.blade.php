<div class="d-flex align-items-center mb-3" style="width: 200px">
    <p for="serviceCosting">Service Costing</p>
    <p wire:click='serviceCostingFormStatus' class="ms-5 border border-slate-400 text-center fs-4" style="border-radius: 50%;width:20px;height:20px;line-height:15px;cursor: pointer;">
        {{ $serviceCostingForm == 'yes' ? '-' : '+' }}
    </p>
</div>
@if ($serviceCostingForm == 'yes')
    <div class="border border-slate-400 rounded p-3 my-5 ">
        <form wire:submit.prevent="saveServiceCost">
            @csrf
            @for ($i = 0; $i < $serviceCostFormLen; $i++)
                <div class="row" wire:key="media-costing-form-{{ $i }}">
                    <div class="col-lg-4">
                        <label for="vehicleServiceCostingRequest.costing_name.{{ $i }}">Costing Name<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="text" wire:model.live="vehicleServiceCostingRequest.costing_name.{{ $i }}" class="form-control @error('vehicleServiceCostingRequest.costing_name.' . $i) is-invalid @enderror" placeholder="client name">
                            @error('vehicleServiceCostingRequest.costing_name.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="vehicleServiceCostingRequest.amount.{{ $i }}">Amount<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model.live="vehicleServiceCostingRequest.amount.{{ $i }}" class="form-control @error('vehicleServiceCostingRequest.amount.' . $i) is-invalid @enderror" placeholder="amount">
                            @error('vehicleServiceCostingRequest.amount.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="vehicleServiceCostingRequest.date.{{ $i }}">Date<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="date" wire:model.live="vehicleServiceCostingRequest.date.{{ $i }}" class="form-control @error('vehicleServiceCostingRequest.date.' . $i) is-invalid @enderror">
                            @error('vehicleServiceCostingRequest.date.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for="vehicleServiceCostingRequest.remarks.{{ $i }}">Remark</label>
                        <div class="input-group mb-3">
                            <textarea wire:model.live="vehicleServiceCostingRequest.remarks.{{ $i }}" cols="30" rows="3" class="form-control" placeholder="remarks"></textarea>
                        </div>
                    </div>
                </div>
                <hr class="hr">
            @endfor

            <div class="text-start">
                <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
                <button wire:click.prevent="serviceCostFormLenIncrement" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">+</button>
            </div>
        </form>
    </div>
@endif
