<div class="pt-7">
    <!-- Header Part Start !-->
    <header class="pb-4 d-flex justify-content-between align-items-center">
        <div class="">
            <p class="fs-5 fw-600">PBL Bank Update</p>
            <span>Please must fill the field where (*) sign is visible.</span>
        </div>
        <div>
            <a href="{{ route('admin.version1.vehicle-management.vehicle.module.color.index') }}" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">PBL Bank</a>
        </div>
    </header>
    <!-- Header Part End !-->

    <!-- Form Part End !-->
    <div class="border border-slate-400 rounded p-3">
        <form action="#" wire:submit="update" method="POST" wire:key="pbl_bank_update_component">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="form.name">PBL Bank <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-droplet"></i></span>
                        <input type="text" wire:model="form.name" value="{{ $response?->name }}" class="form-control @error('form.name')
                            {{ 'is-invalid' }}
                        @enderror" placeholder="pbl bank name">
                        @error('form.name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="form.account_number">Account Number<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-credit-card"></i></span>
                        <input type="text" wire:model="form.account_number" value="{{ $response?->account_number }}" class="form-control @error('form.account_number') {{ 'is-invalid' }} @enderror" placeholder="account number">
                        @error('form.account_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="form.status">Status<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                        <select wire:model="form.status" class="form-control @error('form.status')
                            {{ 'is-invalid' }}
                        @enderror">
                            <option selected value>-- Please Select Status --</option>
                            <option value="1" @if ($response?->status === 1) selected @endif>Active</option>
                            <option value="0" @if ($response?->status === 0) selected @endif>Inactive</option>
                        </select>
                        @error('form.status')
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