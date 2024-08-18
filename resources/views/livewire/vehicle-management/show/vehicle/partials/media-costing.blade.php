 <div class="row pt-3 pb-2">
     <div class="col-lg-12 d-flex justify-content-between">
         <p class="color-bluis">Media Costing Infos</p>
         <a style="margin-top: -10px" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="{{ route('admin.version1.vehicle-management.vehicle.create') }}">
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

 @forelse ($response?->mediaCosting as $each)
     <div class="d-flex justify-content-between pb-1">
         <p style="width:30%">{{ $each?->costing_name }}</p>
         <p style="width:25%">{{ date('d M, Y', strtotime($each?->date)) }}</p>
         <p style="width:25%" title="{{ $each?->remarks }}">{{ Str::limit($each?->remarks, 25, '...') }}</p>
         <p style="width:10%;text-align:end">{{ $each?->amount }} tk</p>
         <p style="width:10%;text-align:end">
             <button style="margin-top: -10px;" type="button" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#mediaCostingUpdateModal" wire:click="mediaCostingUpdate({{ $each?->id }})">
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
     <p style="width:49%">Total Media Costing</p>
     <p style="width:21%">=</p>
     <p style="width:30%;text-align:end">{{ $response?->mediaCosting?->sum('amount') }} tk</p>
 </div>

 <!-- Media Costing Update Modal !-->
 <div class="modal fade" id="mediaCostingUpdateModal" tabindex="-1" aria-labelledby="mediaCostingUpdateLabel" aria-hidden="true" wire:ignore>
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="mediaCostingUpdateLabel">Media Costing Update</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="#" wire:submit="mediaCostUpdate">
                     <input type="hidden" wire:model.live='vehicleMediaCostingUpdateRequest.id' value="{{ $mediaCostingUpdateResponse?->id }}">
                     <div class="row">
                         <div class="col-lg-4">
                             <label for="vehicleMediaCostingUpdateRequest.costing_name">Costing Name<span class="text-danger">*</span></label>
                             <div class="input-group mb-3">
                                 <span class="input-group-text">৳</span>
                                 <input type="text" wire:model.live="vehicleMediaCostingUpdateRequest.costing_name" value="{{ $mediaCostingUpdateResponse?->costing_name }}" class="form-control @error('vehicleMediaCostingUpdateRequest.costing_name') is-invalid @enderror" placeholder="client name">
                                 @error('vehicleMediaCostingUpdateRequest.costing_name')
                                     <div class="invalid-feedback">{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <label for="vehicleMediaCostingUpdateRequest.amount">Amount<span class="text-danger">*</span></label>
                             <div class="input-group mb-3">
                                 <span class="input-group-text">৳</span>
                                 <input type="number" wire:model.live="vehicleMediaCostingUpdateRequest.amount" value="{{ $mediaCostingUpdateResponse?->amount }}" class="form-control @error('vehicleMediaCostingUpdateRequest.amount') is-invalid @enderror" placeholder="amount">
                                 @error('vehicleMediaCostingUpdateRequest.amount')
                                     <div class="invalid-feedback">{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                         <div class="col-lg-4">
                             <label for="vehicleMediaCostingUpdateRequest.date">Date<span class="text-danger">*</span></label>
                             <div class="input-group mb-3">
                                 <span class="input-group-text">৳</span>
                                 <input type="date" wire:model.live="vehicleMediaCostingUpdateRequest.date" value="{{ $mediaCostingUpdateResponse?->date }}" class="form-control @error('vehicleMediaCostingUpdateRequest.date') is-invalid @enderror">
                                 @error('vehicleMediaCostingUpdateRequest.date')
                                     <div class="invalid-feedback">{{ $message }}</div>
                                 @enderror
                             </div>
                         </div>
                         <div class="col-lg-12">
                             <label for="vehicleMediaCostingUpdateRequest.remarks">Remark</label>
                             <div class="input-group mb-3">
                                 <textarea wire:model.live="vehicleMediaCostingUpdateRequest.remarks" value="{{ $mediaCostingUpdateResponse?->remarks }}" cols="30" rows="3" class="form-control" placeholder="remarks"></textarea>
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
