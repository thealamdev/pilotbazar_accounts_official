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
                        <label for="form.costing_name.{{ $i }}">Costing Name<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="text" wire:model.live="form.costing_name.{{ $i }}" class="form-control @error('form.costing_name.' . $i) is-invalid @enderror" placeholder="client name">
                            @error('form.costing_name.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="form.amount.{{ $i }}">Amount<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model.live="form.amount.{{ $i }}" class="form-control @error('form.amount.' . $i) is-invalid @enderror" placeholder="amount">
                            @error('form.amount.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="form.date.{{ $i }}">Date<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="date" wire:model.live="form.date.{{ $i }}" class="form-control @error('form.date.' . $i) is-invalid @enderror">
                            @error('form.date.' . $i)
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for="form.remarks.{{ $i }}">Remark</label>
                        <div class="input-group mb-3">
                            <textarea wire:model.live="form.remarks.{{ $i }}" cols="30" rows="3" class="form-control" placeholder="remarks"></textarea>
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