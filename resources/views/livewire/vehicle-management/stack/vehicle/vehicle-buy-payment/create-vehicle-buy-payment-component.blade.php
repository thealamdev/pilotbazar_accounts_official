<div class="pt-7">
    <!-- Header Part Start !-->
    <header class="pb-4 d-flex justify-content-between align-items-center">
        <div class="">
            <p class="fs-5 fw-600">Vehicle Buy Payment of {{ $vehicle->name . ' ' . $vehicle->model?->name . ' ' . $vehicle->model_year?->name }}</p>
            <span>Please must fill the field where (*) sign is visible.</span>
        </div>
    </header>
    <!-- Header Part End !-->

    <!-- Form Part End !-->
    <div class="border border-slate-400 rounded p-3">
        <form action="#" wire:submit="save" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <input type="hidden" value="{{ $vehicle?->id }}">
                    <label for="form.name">Method Name<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                        <select wire:model.live="form.name" class="form-control @error('form.name')
                            {{ 'is-invalid' }}
                        @enderror">
                            <option selected value>-- Please Select Method --</option>
                            @foreach ($methods as $each)
                                <option value="{{ $each?->id }}">{{ $each?->name }}</option>
                            @endforeach
                        </select>
                        @error('form.status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="form.amount">Amount<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-droplet"></i></span>
                        <input type="text" wire:model.live="form.name" class="form-control @error('form.name')
                            {{ 'is-invalid' }}
                        @enderror" placeholder="method name">
                        @error('form.name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>

            <div class="text-start">
                <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
            </div>
        </form>
    </div>
    <!-- Form Part End !-->
</div>
