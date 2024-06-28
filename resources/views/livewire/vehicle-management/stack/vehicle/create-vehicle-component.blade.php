<div class="row mt-7 border border-slate-400 rounded">
    <div class="col-lg-12 px-4 py-3">
        <!-- Header Part Start !-->
        <header class="pb-4 d-flex justify-content-between align-items-center">
            <div class="">
                <p class="fs-5 fw-600">Vehicle Create</p>
                <span>Please must fill the field where (*) sign is visible.</span>
            </div>

            <div>
                <a href="{{ route('admin.version1.vehicle-management.vehicle.index') }}" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">
                    Vehicles
                </a>
            </div>
        </header>
        <hr class="hr-bg">
        <!-- Header Part End !-->

        <!-- Form Part End !-->
        <div class="mt-5">
            <form action="#" wire:submit="save" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-3">
                        <label for="form.name">Vehicle Name<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-car"></i></span>
                            <input type="text" wire:model="form.name" class="form-control @error('form.name') {{ 'is-invalid' }} @enderror" placeholder="vehicle name">
                            @error('form.name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.model_id">Model<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <select wire:model="form.model_id" class="form-control @error('form.model_id') {{ 'is-invalid' }} @enderror">
                                <option selected value>-- Please Select Status --</option>
                                @foreach ($models as $each)
                                    <option value="{{ $each->id }}">{{ $each->name }}</option>
                                @endforeach
                            </select>
                            @error('form.model_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.model_year_id">Model Year<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <select wire:model="form.model_year_id" class="form-control @error('form.model_year_id') {{ 'is-invalid' }} @enderror">
                                <option selected value>-- Please Select Status --</option>
                                @foreach ($modelYears as $each)
                                    <option value="{{ $each->id }}">{{ $each->name }}</option>
                                @endforeach
                            </select>
                            @error('form.model_year_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.color_id">Color<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <select wire:model="form.color_id" class="form-control @error('form.color_id') {{ 'is-invalid' }} @enderror">
                                <option selected value>-- Please Select Status --</option>
                                @foreach ($colors as $each)
                                    <option value="{{ $each->id }}">{{ $each->name }}</option>
                                @endforeach
                            </select>
                            @error('form.color_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.registration_number">Registration Number<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <input type="text" wire:model="form.registration_number" placeholder="registration number" class="form-control">
                            @error('form.registration_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.chassis_number">Chassis Number<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <input type="text" wire:model="form.chassis_number" placeholder="chassis number" class="form-control">
                            @error('form.chassis_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.engine_number">Engine Number<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <input type="text" wire:model="form.engine_number" placeholder="engine number" class="form-control">
                            @error('form.engine_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.purchase_date">Purchase Date<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                            <input type="date" wire:model="form.purchase_date" class="form-control">
                            @error('form.purchase_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.purchase_price">Purchase Price<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.purchase_price" placeholder="purchase price" class="form-control @error('form.purchase_price') {{ 'is-invalid' }} @enderror">
                            @error('form.purchase_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <label for="form.status">Status<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <select wire:model="form.status" class="form-control @error('form.status') {{ 'is-invalid' }} @enderror">
                                <option selected value>-- Please Select Status --</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            @error('form.status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-start mt-3">
                    <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save & Next</button>
                </div>
            </form>
        </div>
        <!-- Form Part End !-->
    </div>
</div>
