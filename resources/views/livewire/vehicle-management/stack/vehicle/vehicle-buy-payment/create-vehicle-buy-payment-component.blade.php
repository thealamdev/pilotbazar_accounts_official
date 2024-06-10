<div class="pt-7">
    <!-- Header Part Start !-->
    <header class="pb-4 d-flex justify-content-between align-items-center">
        <div class="">
            <p class="fs-5 fw-600">Vehicle Buy Payment of <span class="text-success">{{ $vehicle->name . ' ' . $vehicle->model?->name . ' ' . $vehicle->model_year?->name }}</span> </p>
            <span>Please must fill the field where (<span class="text-danger">*</span>) sign is visible.</span>
        </div>
    </header>
    <!-- Header Part End !-->

    <!-- Form Part End !-->
    <div class="border border-slate-400 rounded p-3">
        <!-- Select the Payment Method Start !-->
        <div class="row">
            <div class="col-lg-12">
                <label for="form.name">Method Name<span class="text-danger">*</span></label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                    <select wire:model.live="selectedMethod" class="form-control">
                        <option selected value>-- Please Select Method --</option>
                        @foreach ($methods as $each)
                            <option value="{{ $each?->id }}">{{ $each?->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <!-- Select the Payment Method End !-->

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
    </div>
    <!-- Form Part End !-->
</div>
