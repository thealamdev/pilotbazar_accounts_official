<div class="mt-7">
    <div class="row border border-slate-400 p-3">
        <!-- Basic Infos part Start !-->
        <div class="col-lg-6 pe-3" style="border-right:1px solid #c2c7ce">
            @include('livewire.vehicle-management.show.vehicle.partials.basic-infos')
        </div>
        <!-- Basic Infos part End !-->

        <div class="col-lg-6 ps-3">
            <!-- Media Costing Part Start !-->
            @include('livewire.vehicle-management.show.vehicle.partials.media-costing')
            <!--Media Costing Part End !-->
            <!-- Media Costing Part Start !-->
            @include('livewire.vehicle-management.show.vehicle.partials.maintenance-costing')
            <!--Media Costing Part End !-->
        </div>

    </div>
</div>
