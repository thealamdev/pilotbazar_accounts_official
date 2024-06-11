<div class="pt-7">
    <!-- Header Part Start !-->
    <header class="pb-4 d-flex justify-content-between align-items-center">
        <div class="">
            <p class="fs-5 fw-600">Costings of <span class="text-success">{{ $vehicle->name . ' ' . $vehicle->models?->name . ' ' . $vehicle->model_year?->name }}</span> </p>
            <span>Please must fill the field where (<span class="text-danger">*</span>) sign is visible.</span>
        </div>
    </header>
    <!-- Header Part End !-->

    <!-- Form Part End !-->
    <div class="d-flex align-items-center" style="width: 200px">
        <p for="mediaCosting">Media Costing</p>
        <p wire:click='mediaCostingFormStatus' class="ms-5 border border-slate-400 text-center fs-4" style="border-radius: 50%;width:20px;height:20px;line-height:15px;cursor: pointer;">
            {{ $mediaCostingForm == 'yes' ? '-' : '+' }}
        </p>
    </div>
    @if ($mediaCostingForm == 'yes')
        <div class="border border-slate-400 rounded p-3 mt-5">
            <form action="#" wire:submit="saveMediaCost" method="POST">
                @csrf
                @for ($i = 1; $i <= $mediaCostFormLen; $i++)
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="form.costing_field">Client Name<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">৳</span>
                                <input type="text" wire:model.live="form.client_name" class="form-control @error('form.client_name') {{ 'is-invalid' }} @enderror" placeholder="client name">
                                @error('form.client_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="form.amount">Amount<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">৳</span>
                                <input type="number" wire:model.live="form.amount" class="form-control @error('form.amount') {{ 'is-invalid' }} @enderror" placeholder="amout">
                                @error('form.amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
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
                                <textarea wire:model.live="form.remarks" cols="30" rows="3" class="form-control" placeholder="remakrs"></textarea>
                            </div>
                        </div>
                    </div>
                @endfor

                <div class="text-start">
                    <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
                    <button wire:click="mediaCostFormLenIncrement" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">+</button>
                </div>
            </form>
        </div>
    @endif

</div>
<!-- Form Part End !-->
</div>
