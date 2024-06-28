<div class="pt-7">
    <header class="pb-4 d-flex justify-content-between align-items-center">
        <div class="">
            <p class="fs-5 fw-600">Costings of <span class="text-success">{{ $vehicle->name . ' ' . $vehicle->models?->name . ' ' . $vehicle->model_year?->name }}</span> </p>
            <span>Please must fill the field where (<span class="text-danger">*</span>) sign is visible.</span>
        </div>
    </header>
    <hr class="hr-bg">

    <!-- Media Cost Form Start !-->
    @include('livewire.vehicle-management.stack.vehicle.vehicle-costing.partials.media-cost-form')
    <!-- Media Cost Form End !-->

    <!-- Maintenance Cost Form Start !-->
    @include('livewire.vehicle-management.stack.vehicle.vehicle-costing.partials.maintenance-cost-form')
    <!-- Maintenance Cost Form End !-->

    <!-- Service Cost Form Start !-->
    @include('livewire.vehicle-management.stack.vehicle.vehicle-costing.partials.service-cost-form')
    <!-- Service Cost Form End !-->

    <!-- Parts Cost Form Start !-->
    @include('livewire.vehicle-management.stack.vehicle.vehicle-costing.partials.parts-cost-form')
    <!-- Parts Cost Form End !-->
</div>
