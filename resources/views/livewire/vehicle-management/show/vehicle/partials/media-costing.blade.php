 <div class="row pt-3 pb-2">
     <div class="col-lg-12 d-flex justify-content-between">
         <p class="color-bluis">Media Costing Infos</p>
         <a style="margin-top: -10px" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="{{ route('admin.version1.vehicle-management.vehicle.create') }}">
             <span class="icon">
                 <span class="feather-icon">
                     <i class="fa-solid fa-pen" style="color:gray"></i>
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
             <a style="margin-top: -10px;" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="{{ route('admin.version1.vehicle-management.vehicle.create') }}">
                 <span class="icon">
                     <span class="feather-icon">
                         <i class="fa-solid fa-pen" style="color:gray"></i>
                     </span>
                 </span>
             </a>
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
