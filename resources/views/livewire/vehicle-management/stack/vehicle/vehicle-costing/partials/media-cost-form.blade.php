<div class="d-flex align-items-center mb-3" style="width: 200px">
    <p for="mediaCosting">Media Costing</p>
    <p wire:click='mediaCostingFormStatus' class="ms-5 border border-slate-400 text-center fs-4" style="border-radius: 50%;width:20px;height:20px;line-height:15px;cursor: pointer;">
        {{ $mediaCostingForm == 'yes' ? '-' : '+' }}
    </p>
</div>
@if ($mediaCostingForm == 'yes')
    <div class="border border-slate-400 rounded p-3 my-5 ">
        <form wire:submit.prevent="saveMediaCost">
            @csrf
            @for ($i = 0; $i < $mediaCostFormLen; $i++)
                <div class="row" wire:key="media-costing-form-{{ $i }}">
                    <div class="col-lg-4">
                        <label for="vehicleMediaCostingRequest.costing_name.{{ $i }}">Costing Name<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="text" wire:model.live="vehicleMediaCostingRequest.costing_name.{{ $i }}" class="form-control @error('vehicleMediaCostingRequest.costing_name.' . $i) is-invalid @enderror" placeholder="client name">
                            @error('vehicleMediaCostingRequest.costing_name.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="vehicleMediaCostingRequest.amount.{{ $i }}">Amount<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model.live="vehicleMediaCostingRequest.amount.{{ $i }}" class="form-control @error('vehicleMediaCostingRequest.amount.' . $i) is-invalid @enderror" placeholder="amount">
                            @error('vehicleMediaCostingRequest.amount.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="vehicleMediaCostingRequest.date.{{ $i }}">Date<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="date" wire:model.live="vehicleMediaCostingRequest.date.{{ $i }}" class="form-control @error('vehicleMediaCostingRequest.date.' . $i) is-invalid @enderror">
                            @error('vehicleMediaCostingRequest.date.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for="vehicleMediaCostingRequest.remarks.{{ $i }}">Remark</label>
                        <div class="input-group mb-3">
                            <textarea wire:model.live="vehicleMediaCostingRequest.remarks.{{ $i }}" cols="30" rows="3" class="form-control" placeholder="remarks"></textarea>
                        </div>
                    </div>
                </div>
                <hr class="hr">
            @endfor

            <div class="text-start">
                <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
                <button wire:click.prevent="mediaCostFormLenIncrement" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">+</button>
            </div>
        </form>
    </div>
@endif
