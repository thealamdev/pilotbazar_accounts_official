<div class="row mt-7 border border-slate-400 rounded">
    <div class="col-lg-7 px-3 py-3">
        <!-- Header Part Start !-->
        <header class="pb-4 d-flex justify-content-between align-items-center">
            <div class="">
                <p class="fs-5 fw-600">Vehicle Create</p>
                <span>Please must fill the field where (*) sign is visible.</span>
            </div>

            <div>
                <a href="#" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">
                   Vehicle
                </a>
            </div>
        </header>
        <hr>
        <!-- Header Part End !-->

        <!-- Form Part End !-->
        <div class="">
            <form action="#" wire:submit="save" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <label for="form.name">Vehicle Name<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-car"></i></span>
                            <input type="text" wire:model="form.name" class="form-control @error('form.name') {{ 'is-invalid' }} @enderror" placeholder="vehicle name">
                            @error('form.name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="form.model">Model<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <select wire:model="form.model" class="form-control @error('form.model') {{ 'is-invalid' }} @enderror">
                                <option selected value>-- Please Select Status --</option>
                                @foreach ($models as $each)
                                  <option value="{{$each->id}}">{{ $each->name }}</option>
                                @endforeach
                            </select>
                            @error('form.model')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="form.modelYear">Model Year<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <select wire:model="form.modelYear" class="form-control @error('form.modelYear') {{ 'is-invalid' }} @enderror">
                                <option selected value>-- Please Select Status --</option>
                                @foreach ($modelYears as $each)
                                  <option value="{{$each->id}}">{{ $each->name }}</option>
                                @endforeach
                            </select>
                            @error('form.modelYear')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="form.color">Color<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <select wire:model="form.color" class="form-control @error('form.color') {{ 'is-invalid' }} @enderror">
                                <option selected value>-- Please Select Status --</option>
                                @foreach ($colors as $each)
                                  <option value="{{$each->id}}">{{ $each->name }}</option>
                                @endforeach
                            </select>
                            @error('form.color')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="form.registratrion_number">Registration Number<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <input type="text" wire:model="form.registratrion_number" placeholder="registration number" class="form-control">
                            @error('form.registratrion_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="form.chassis_number">Chassis Number<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <input type="text" wire:model="form.chassis_number" placeholder="chassis number" class="form-control">
                            @error('form.chassis_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                <div class="text-start">
                    <button class="bg-transparent border border-slate-400 px-4 py-1 rounded"
                        type="submit">Save</button>
                </div>
            </form>
        </div>
        <!-- Form Part End !-->
    </div>
    <div class="col-lg-5 px-3 py-3" style="border-left:1px solid gray">
        <!-- Header Part Start !-->
        <header class="pb-4 d-flex justify-content-between align-items-center">
            <div class="">
                <p class="fs-5 fw-600">Details</p>
                <span>Details for shown</span>
            </div>
        </header>
        <hr>
        <!-- Header Part End !-->

        <!-- Details Part Start !-->
        <div class="row">
            <div class="col-lg-5">
                <p class="fs-6 fw-400">Vehicle Name</p>
            </div>
            <div class="col-lg-2">
                <p class="fs-6 fw-400">:</p>
            </div>
            <div class="col-lg-5">
                 <p class="fs-6 fw-400">Toyota CHR</p>
            </div>
        </div>
        <!-- Details Part End !-->
    </div>
</div>
