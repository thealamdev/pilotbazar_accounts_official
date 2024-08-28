<div class="pt-7">
    <!-- Header Part Start !-->
    <header class="pb-4 d-flex justify-content-between align-items-center">
        <div class="">
            <p class="fs-5 fw-600">Vehicle Sell Payment of <a href="{{ route('admin.version1.vehicle-management.vehicle.show', ['vehicle' => $vehicle->id]) }}"><span class="text-success">{{ $vehicle->name . ' ' . $vehicle->models?->name . ' ' . $vehicle->model_year?->name }}</span></a> </p>
            <span>Please must fill the field where (<span class="text-danger">*</span>) sign is visible.</span>
        </div>
    </header>
    <!-- Header Part End !-->

    <!-- Form Part End !-->
    <div class="border border-slate-400 rounded p-3">
        <!-- Select the Payment Method Start !-->
        <div class="row">
            <div class="col-lg-12">
                <label>Method Name<span class="text-danger">*</span></label>
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

        <hr class="hr">
        <div class="text-center">
            <p style="width:150px;margin:0 auto;margin-top:-32px;background:white;padding:0 10px;font-size:20px">{{ $currentFormType ? $currentFormType : 'Nothing' }}</p>
        </div>
        <!-- Select the Payment Method End !-->

        <div class="mt-5">
            <!-- Check Form Start !-->
            @include('livewire.vehicle-management.stack.vehicle.vehicle-sell-payment.partials.cash-form')
            <!-- Check Form End !-->

            <!-- Cash Deposit Form Start !-->
            @include('livewire.vehicle-management.stack.vehicle.vehicle-sell-payment.partials.cash-deposit-form')
            <!-- Cash Deposit Form End !-->

            <!-- Check Depost, RTGS and Bank Pay Order  Form Start !-->
            @include('livewire.vehicle-management.stack.vehicle.vehicle-sell-payment.partials.CeDRB-form')
            <!-- Check Depost, RTGS and Bank Pay Order Form End !-->
        </div>

    </div>
    <!-- Form Part End !-->
</div>
