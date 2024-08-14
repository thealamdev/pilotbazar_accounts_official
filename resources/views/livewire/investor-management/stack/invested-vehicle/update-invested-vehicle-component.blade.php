<div class="pt-7">
    <!-- Header Part Start !-->
    <header class="pb-4 d-flex justify-content-between align-items-center">
        <div class="">
            <p class="fs-5 fw-600">Invested On Update</p>
            <span>Please must fill the field where (*) sign is visible.</span>
        </div>
        <div>
            <a href="{{ route('admin.version1.investor-management.investor.index') }}" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">Investors</a>
        </div>
    </header>
    <!-- Header Part End !-->

    <!-- Form Part End !-->
    <div class="border border-slate-400 rounded p-3">
        <form action="#" wire:submit="save" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="form.invested_amount">Invested Amount <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-percent"></i></span>
                        <input type="number" wire:model="form.invested_amount" value="{{ $investedVehicle->invested_amount }}" class="form-control @error('form.invested_amount')
                            {{ 'is-invalid' }}
                        @enderror" placeholder="invested amount">
                        @error('form.invested_amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="form.profit_percentage"> Profit Percentage <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-percent"></i></span>
                        <input type="number" wire:model="form.profit_percentage" value="{{ $investedVehicle->profit_percentage }}" class="form-control @error('form.profit_percentage')
                            {{ 'is-invalid' }}
                        @enderror" placeholder="profit percentage">
                        @error('form.profit_percentage')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="form.vehicle_id">Invested On<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-car"></i></span>
                        <select wire:model.live="form.vehicle_id" class="form-control @error('form.vehicle_id')
                            {{ 'is-invalid' }}
                        @enderror">
                            <option selected value>-- Please Select Status --</option>
                            @foreach ($vehicles as $each)
                                <option @selected(old('vehicle_id',$investedVehicle->vehicle_id) == $each->id) value="{{ $each?->id }}">{{ $each?->name . ' ' . $each?->models?->name . ' ' . $each?->model_year?->name }}</option>
                            @endforeach
                        </select>
                        @error('form.vehicle_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="text-start">
                <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Update</button>
            </div>
        </form>
    </div>
    <!-- Form Part End !-->
</div>
