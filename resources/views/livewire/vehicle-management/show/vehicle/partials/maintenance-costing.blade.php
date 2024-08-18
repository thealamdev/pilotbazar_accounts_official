<div class="row pt-5 pb-3">
    <div class="col-lg-12 d-flex justify-content-between">
        <p class="color-bluis">Maintenance Costing Infos</p>
        <a style="margin-top: -10px" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="{{ route('admin.version1.vehicle-management.vehicle.costing.create', ['vehicle' => $response->id]) }}">
            <span class="icon">
                <span class="feather-icon">
                    <i class="fa-solid fa-circle-plus" style="color:gray"></i>
                </span>
            </span>
        </a>
    </div>
</div>

<div class="d-flex justify-content-between pb-3">
    <p style="width:30%"><span class="border-bottom">Costing Name</span></p>
    <p style="width:25%"><span class="border-bottom">Date</span></p>
    <p style="width:25%"><span class="border-bottom">Remarks</span></p>
    <p style="width:10%;text-align:end"><span class="border-bottom">Amount</span></p>
    <p style="width:10%; text-align:end"><span class="border-bottom">Edit</span></p>
</div>

@forelse ($response?->maintenanceCosting as $each)
    <div class="d-flex justify-content-between pb-1">
        <p style="width:30%">{{ $each?->costing_name }}</p>
        <p style="width:25%">{{ date('d M, Y', strtotime($each?->date)) }}</p>
        <p style="width:25%" title="{{ $each?->remarks }}">{{ Str::limit($each?->remarks, 25, '...') }}</p>
        <p style="width:10%;text-align:end">{{ $each?->amount }} tk</p>
        <p style="width:10%;text-align:end">
            <button style="margin-top: -10px;" type="button" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#maintenanceCostingUpdateModal" wire:click="maintenanceCostingUpdate({{ $each?->id }})">
                <span class="icon">
                    <span class="feather-icon">
                        <i class="fa-solid fa-pen" style="color:gray"></i>
                    </span>
                </span>
            </button>
        </p>
    </div>
@empty
    <div class="text-center">
        <p class="text-danger">No Costing has been added yet.</p>
    </div>
@endforelse
<hr class="hr">

<div class="d-flex justify-content-between pb-1">
    <p style="width:49%">Total Maintenance Costing</p>
    <p style="width:21%">=</p>
    <p style="width:30%;text-align:end">{{ $response?->maintenanceCosting?->sum('amount') }} tk</p>
</div>

<!-- Maintenance Costing Update Modal !-->
<div class="modal fade" id="maintenanceCostingUpdateModal" tabindex="-1" aria-labelledby="maintenanceCostingUpdateLabel" aria-hidden="true" wire:ignore>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="maintenanceCostingUpdateLabel">Maintenance Costing Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" wire:submit="maintenanceCostUpdate">
                    <input type="hidden" wire:model.live='vehicleMaintenanceCostingUpdateRequest.id' value="{{ $maintenanceCostingUpdateResponse?->id }}">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="vehicleMaintenanceCostingUpdateRequest.costing_name">Costing Name<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="text" wire:model.live="vehicleMaintenanceCostingUpdateRequest.costing_name" value="{{ $maintenanceCostingUpdateResponse?->costing_name }}" class="form-control @error('vehicleMaintenanceCostingUpdateRequest.costing_name') is-invalid @enderror" placeholder="client name">
                                @error('vehicleMaintenanceCostingUpdateRequest.costing_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="vehicleMaintenanceCostingUpdateRequest.amount">Amount<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="number" wire:model.live="vehicleMaintenanceCostingUpdateRequest.amount" value="{{ $maintenanceCostingUpdateResponse?->amount }}" class="form-control @error('vehicleMaintenanceCostingUpdateRequest.amount') is-invalid @enderror" placeholder="amount">
                                @error('vehicleMaintenanceCostingUpdateRequest.amount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="vehicleMaintenanceCostingUpdateRequest.date">Date<span class="text-danger">*</span></label>
                            <div class="input-group mb-3">
                                <input type="date" wire:model.live="vehicleMaintenanceCostingUpdateRequest.date" value="{{ $maintenanceCostingUpdateResponse?->date }}" class="form-control @error('vehicleMaintenanceCostingUpdateRequest.date') is-invalid @enderror">
                                @error('vehicleMaintenanceCostingUpdateRequest.date')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="vehicleMaintenanceCostingUpdateRequest.remarks">Remark</label>
                            <div class="input-group mb-3">
                                <textarea wire:model.live="vehicleMaintenanceCostingUpdateRequest.remarks" value="{{ $maintenanceCostingUpdateResponse?->remarks }}" cols="30" rows="3" class="form-control" placeholder="remarks"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
