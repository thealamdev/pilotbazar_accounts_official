<div class="pt-7">
    <!-- Header Part Start !-->
    <header class="pb-4 d-flex justify-content-between align-items-center">
        <div class="">
            <p class="fs-5 fw-600">Investor Create</p>
            <span>Please must fill the field where (*) sign is visible.</span>
        </div>
        <div>
            <a href="{{ route('admin.version1.vehicle-management.vehicle.module.color.index') }}" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">Investors</a>
        </div>
    </header>
    <!-- Header Part End !-->

    <!-- Form Part End !-->
    <div class="border border-slate-400 rounded p-3">
        <form action="#" wire:submit="save" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="form.name">Investor Name <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" wire:model.live="form.name" class="form-control @error('form.name')
                            {{ 'is-invalid' }}
                        @enderror" placeholder="investor name">
                        @error('form.name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="form.email">Investor Email <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <input type="text" wire:model.live="form.email" class="form-control @error('form.email')
                            {{ 'is-invalid' }}
                        @enderror" placeholder="investor email">
                        @error('form.email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="form.mobile">Investor Mobile <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="text" wire:model="form.mobile" class="form-control @error('form.mobile')
                            {{ 'is-invalid' }}
                        @enderror" placeholder="investor mobile">
                        @error('form.mobile')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="form.amount">Invested Amout <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-bangladeshi-taka-sign"></i></span>
                        <input type="number" wire:model="form.amount" class="form-control @error('form.amount')
                            {{ 'is-invalid' }}
                        @enderror" placeholder="invested amount">
                        @error('form.amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="form.address">Investor Address <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-house-user"></i></span>
                        <input type="text" wire:model="form.address" class="form-control @error('form.address')
                            {{ 'is-invalid' }}
                        @enderror" placeholder="investor address">
                        @error('form.address')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="status">Status<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                        <select wire:model.live="form.status" class="form-control @error('form.status')
                            {{ 'is-invalid' }}
                        @enderror">
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
                <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
            </div>
        </form>
    </div>
    <!-- Form Part End !-->
</div>
