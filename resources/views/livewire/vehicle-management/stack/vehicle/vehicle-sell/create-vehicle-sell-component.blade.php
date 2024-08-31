<div class="row mt-7">
    <div class="col-lg-12 px-4 py-4 border border-slate-400 rounded">
        <!-- Header Part Start !-->
        <header class="pb-4 d-flex justify-content-between align-items-center">
            <div class="">
                <p class="fs-5 fw-600">Vehicle Sell to <span class="text-success">{{ $client_name }}</span>
                <div class=""></div>
                </p>
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
                <input type="hidden" wire:model.live="form.vehicle_id">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="form.name">Client Name<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                            <input type="text" wire:model.live="form.name" value="{{ $vehicle->seller?->name }}" class="form-control @error('form.name') {{ 'is-invalid' }} @enderror" placeholder="vehicle name">
                            @error('form.name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <label for="form.mobile">Mobile Number<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                            <input type="text" wire:model.live="form.mobile" value="{{ old('form.mobile', $vehicle->seller?->mobile) }} placeholder="mobile number" class="form-control @error('form.mobile') {{ 'is-invalid' }} @enderror"">
                            @error('form.mobile')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <label for="form.nid">NID Number<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-id-card"></i></span>
                            <input type="text" wire:model.live="form.nid" placeholder="NId number" class="form-control @error('form.nid')
                                {{ 'is-invalid' }}
                            @enderror">
                            @error('form.nid')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <label for="form.sell_date">Sell Date<span class="text-danger"></span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                            <input type="date" wire:model.live="form.sell_date" class="form-control @error('form.sell_date') {{ 'is-invalid' }} @enderror"">
                            @error('form.sell_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <label for="form.sell_price">Sell Price<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">৳</span>
                            <input type="number" wire:model.live="form.sell_price" placeholder="purchase price" class="form-control @error('form.sell_price') {{ 'is-invalid' }} @enderror">
                            @error('form.sell_price')
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

                    <div class="col-lg-6">
                        <label for="form.address">Address<span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-house-chimney"></i></span>
                            <textarea wire:model.live="form.address" placeholder="address" cols="30" rows="1" class="form-control @error('form.sell_price') {{ 'is-invalid' }} @enderror"></textarea>
                            @error('form.sell_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-start mt-3">
                    <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
                </div>
            </form>
        </div>
        <!-- Form Part End !-->
    </div>

    <div class="col-lg-12 mt-3 d-flex justify-content-between">
        <div class="print-save">
            <button class="border border-slate-500 bg-transparent rounded px-3 py-1" onclick="saveDiv('printMoneyReceipt', '{{ $client_name . '-' . $today }}')">Save as PDF</button>
            <button class="border border-slate-500 bg-transparent rounded px-3 py-1" onclick="printDiv('printMoneyReceipt', '{{ $client_name . '-' . $today }}')">Print</button>
        </div>
        <div class="services">
            <button type="button" data-bs-target="#sellServiceSaveModal" data-bs-toggle="modal" class="border border-slate-500 bg-transparent rounded px-3 py-1">Sell Services</button>
        </div>

        <!-- Sell service add Modal !-->
        <div class="modal fade" id="sellServiceSaveModal" tabindex="-1" aria-labelledby="sellServiceSaveLabel" aria-hidden="true" wire:ignore>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="sellServiceSaveLabel">Sell Service Add</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" wire:submit="sellServiceSave" method="POST">
                            <input type="hidden" wire:model.live="createVehicleSellServiceRequest.vehicle_id">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="createVehicleSellServiceRequest.name">Service Name<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                                        <select wire:model.live="createVehicleSellServiceRequest.name" class="form-control @error('createVehicleSellServiceRequest.name')
                                            {{ 'is-invalid' }}
                                        @enderror">
                                            <option selected value>-- Please Select Status --</option>
                                            @foreach ($sell_service_categories as $each)
                                                <option value="{{ $each->id }}">{{ $each->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('form.status')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label for="createVehicleSellServiceRequest.amount">Service Charge <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-brands fa-servicestack"></i></span>
                                        <input type="text" wire:model.live="createVehicleSellServiceRequest.amount" class="form-control @error('createVehicleSellServiceRequest.amount')
                                            {{ 'is-invalid' }}
                                        @enderror" placeholder="Service charge">
                                        @error('createVehicleSellServiceRequest.amount')
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

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <hr class="hr mt-3">
    @include('livewire.vehicle-management.stack.vehicle.vehicle-sell.partials.money-receipt')
</div>
