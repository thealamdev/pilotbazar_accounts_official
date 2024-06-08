<div class="row mt-7 border border-slate-400 rounded">
    <div class="col-lg-12 px-3 py-3">
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
        <hr>
        <!-- Header Part End !-->

        <!-- Form Part End !-->
        <div class="">
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
                                  <option value="{{$each->id}}">{{ $each->name }}</option>
                                @endforeach
                            </select>
                            @error('form.model_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.modelYear_id">Model Year<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <select wire:model="form.modelYear_id" class="form-control @error('form.modelYear_id') {{ 'is-invalid' }} @enderror">
                                <option selected value>-- Please Select Status --</option>
                                @foreach ($modelYears as $each)
                                  <option value="{{$each->id}}">{{ $each->name }}</option>
                                @endforeach
                            </select>
                            @error('form.modelYear_id')
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
                                  <option value="{{$each->id}}">{{ $each->name }}</option>
                                @endforeach
                            </select>
                            @error('form.color_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.registratrion_number">Registration Number<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                            <input type="text" wire:model="form.registratrion_number" placeholder="registration number" class="form-control">
                            @error('form.registratrion_number')
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
                        <label for="form.media_cost_purchase">Media Cost Purchase<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.media_cost_purchase" placeholder="media cost purchase" class="form-control">
                            @error('form.media_cost_purchase')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.media_cost_selling">Media Cost Selling<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.media_cost_selling" placeholder="media cost selling" class="form-control">
                            @error('form.media_cost_selling')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.checkup_cost_purchase">Checkup Cost Purchase<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.checkup_cost_purchase" placeholder="checkup cost purchase" class="form-control">
                            @error('form.checkup_cost_purchase')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.estimate_cost">Estimate Cost<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.estimate_cost" placeholder="estimate cost" class="form-control">
                            @error('form.estimate_cost')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.touchup_cost">Touchup Cost<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.touchup_cost" placeholder="touchup cost" class="form-control">
                            @error('form.touchup_cost')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.engine_service">Engine Service<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.engine_service" placeholder="engine service" class="form-control">
                            @error('form.engine_service')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.fuel_cost">Fuel Cost<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.fuel_cost" placeholder="fuel cost" class="form-control">
                            @error('form.fuel_cost')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.bikrom_ad">Bikroy Ad Cost<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.bikrom_ad_cost" placeholder="bikroy ad cost" class="form-control">
                            @error('form.bikrom_ad_cost')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.facebook_ad_cost">Facebook Ad Cost<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.facebook_ad_cost" placeholder="facebook ad cost" class="form-control">
                            @error('form.facebook_ad_cost')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.paper_update_cost">Paper Update Cost<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.paper_update_cost" placeholder="paper update cost" class="form-control">
                            @error('form.paper_update_cost')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.seat_cover_cost">Seat Cover Cost<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.seat_cover_cost" placeholder="sear cover cost" class="form-control">
                            @error('form.seat_cover_cost')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.electric_cost">Electric Cost<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model="form.electric_cost" placeholder="electric cost" class="form-control">
                            @error('form.electric_cost')
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
                    <button class="bg-transparent border border-slate-400 px-4 py-1 rounded"
                        type="submit">Save</button>
                </div>
            </form>
        </div>
        <!-- Form Part End !-->
    </div>
    {{-- <div class="col-lg-4 px-3 py-3" style="border-left:1px solid gray">
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
    </div> --}}
</div>
