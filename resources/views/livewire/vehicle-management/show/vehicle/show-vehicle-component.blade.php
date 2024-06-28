<div class="mt-7">
    <div class="row border border-slate-400 p-3">
        <!-- Basic Infos part Start !-->
        <div class="col-lg-5 pe-3" style="border-right:1px solid #c2c7ce">
            @include('livewire.vehicle-management.show.vehicle.partials.basic-infos')
        </div>
        <!-- Basic Infos part End !-->

        <div class="col-lg-7 ps-3">
            <!-- Media Costing Part Start !-->
            @include('livewire.vehicle-management.show.vehicle.partials.media-costing')
            <!--Media Costing Part End !-->

            <!-- Maintenance Costing Part Start !-->
            @include('livewire.vehicle-management.show.vehicle.partials.maintenance-costing')
            <!--Maintenance Costing Part End !-->

            <!-- Service Costing Part Start !-->
            @include('livewire.vehicle-management.show.vehicle.partials.service-costing')
            <!--Service Costing Part End !-->

            <!-- Parts Costing Part Start !-->
            @include('livewire.vehicle-management.show.vehicle.partials.parts-costing')
            <!-- Parts Costing Part End !-->

            <!-- Total Costing Part Start !-->
            <hr class="hr">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between pb-1">
                        <p style="width:49%">Total Costing</p>
                        <p style="width:21%">=</p>
                        <p style="width:30%;text-align:end">{{ $response?->mediaCosting?->sum('amount') + $response?->maintenanceCosting?->sum('amount') + $response?->serviceCosting?->sum('amount') + $response?->partsCosting?->sum('amount') }} tk</p>
                    </div>
                </div>
            </div>
            <!-- Total Costing Part End !-->
        </div>

    </div>
</div>
