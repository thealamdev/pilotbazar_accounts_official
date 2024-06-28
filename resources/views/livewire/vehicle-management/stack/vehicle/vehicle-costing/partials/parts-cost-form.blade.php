<div class="d-flex align-items-center mb-3" style="width: 200px">
    <p for="partsCosting">Parts Costing</p>
    <p wire:click='partsCostingFormStatus' class="ms-5 border border-slate-400 text-center fs-4" style="border-radius: 50%;width:20px;height:20px;line-height:15px;cursor: pointer;">
        {{ $partsCostingForm == 'yes' ? '-' : '+' }}
    </p>
</div>
@if ($partsCostingForm == 'yes')
    <div class="border border-slate-400 rounded p-3 my-5 ">
        <form wire:submit.prevent="savePartsCost">
            @csrf
            @for ($i = 0; $i < $partsCostFormLen; $i++)
                <div class="row" wire:key="media-costing-form-{{ $i }}">
                    <div class="col-lg-4">
                        <label for="vehiclePartsCostingRequest.costing_name.{{ $i }}">Costing Name<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="text" wire:model.live="vehiclePartsCostingRequest.costing_name.{{ $i }}" class="form-control @error('vehiclePartsCostingRequest.costing_name.' . $i) is-invalid @enderror" placeholder="client name">
                            @error('vehiclePartsCostingRequest.costing_name.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="vehiclePartsCostingRequest.amount.{{ $i }}">Amount<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model.live="vehiclePartsCostingRequest.amount.{{ $i }}" class="form-control @error('vehiclePartsCostingRequest.amount.' . $i) is-invalid @enderror" placeholder="amount">
                            @error('vehiclePartsCostingRequest.amount.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="vehiclePartsCostingRequest.date.{{ $i }}">Date<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="date" wire:model.live="vehiclePartsCostingRequest.date.{{ $i }}" class="form-control @error('vehiclePartsCostingRequest.date.' . $i) is-invalid @enderror">
                            @error('vehiclePartsCostingRequest.date.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for="vehiclePartsCostingRequest.remarks.{{ $i }}">Remark</label>
                        <div class="input-group mb-3">
                            <textarea wire:model.live="vehiclePartsCostingRequest.remarks.{{ $i }}" cols="30" rows="3" class="form-control" placeholder="remarks"></textarea>
                        </div>
                    </div>
                </div>
                <hr class="hr">
            @endfor

            <div class="text-start">
                <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
                <button wire:click.prevent="partsCostFormLenIncrement" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">+</button>
            </div>
        </form>
    </div>
@endif
