 <!-- Image Name & Color Part Start !-->
 <div class="row">
     <div class="col-lg-12 pt-3 m-auto text-center">
         <img src="https://pilotbazar.com/storage/galleries/666700e21cc0c.jpg" alt="" class="w-50 border rounded" height="170px">
     </div>
     <div class="col-lg-12 text-center pt-3">
         <p>{{ $response?->name . ' ' . $response?->models?->name . ' ' . $response?->model_year?->name }}</p>
         <p>Color : {{ $response?->color?->name }}</p>
     </div>
 </div>
 <!-- Image Name & Color Part End !-->

 <!-- Basic & Purchase Infos Part Start !-->
 <div class="row pt-5">
     <div class="col-lg-12 d-flex justify-content-between">
         <p class="color-bluis">Basic Infos</p>
         <a style="margin-top: -10px" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="{{ route('admin.version1.vehicle-management.vehicle.create') }}">
             <span class="icon">
                 <span class="feather-icon">
                     <i class="fa-solid fa-pen" style="color:gray"></i>
                 </span>
             </span>
         </a>
     </div>
 </div>
 <div class="row pt-3">
     <div class="col-lg-12">
         <div class="d-flex justify-content-between pb-1">
             <p style="width:49%">Engine Number</p>
             {{-- <p style="width:1%">:</p> --}}
             <p style="width:50%;text-align:end">{{ $response?->engine_number ?? '---' }}</p>
         </div>
         <div class="d-flex justify-content-between pb-1">
             <p style="width:49%">Chassis Number</p>
             {{-- <p style="width:1%">:</p> --}}
             <p style="width:50%;text-align:end">{{ $response?->chassis_number ?? '---' }}</p>
         </div>
         <div class="d-flex justify-content-between pb-1">
             <p style="width:49%">Registration Number</p>
             {{-- <p style="width:1%">:</p> --}}
             <p style="width:50%;text-align:end">{{ $response?->registration_number ?? '---' }}</p>
         </div>
         <div class="d-flex justify-content-between pb-1">
             <p style="width:49%">Purchase Date</p>
             {{-- <p style="width:1%">:</p> --}}
             <p style="width:50%;text-align:end">{{ date('d M, Y', strtotime($response?->purchase_date)) ?? '---' }}</p>
         </div>
         <div class="d-flex justify-content-between pb-1">
             <p style="width:49%">Purchase Price</p>
             {{-- <p style="width:1%">:</p> --}}
             <p style="width:50%;text-align:end">{{ $response?->purchase_price ?? '---' }} tk</p>
         </div>
         <div class="d-flex justify-content-between pb-1">
             <p style="width:49%">Total Costing</p>
             {{-- <p style="width:1%">:</p> --}}
             <p style="width:50%;text-align:end">{{ $response?->mediaCosting?->sum('amount') + $response?->maintenanceCosting?->sum('amount') + $response?->serviceCosting?->sum('amount') + $response?->partsCosting?->sum('amount') }} tk</p>
         </div>
         <hr class="hr">
         <div class="d-flex justify-content-between pb-1">
            <p style="width:49%">Final Price</p>
            {{-- <p style="width:1%">:</p> --}}
            <p style="width:50%;text-align:end">{{ ($response?->purchase_price + $response?->mediaCosting?->sum('amount') + $response?->maintenanceCosting?->sum('amount') + $response?->serviceCosting?->sum('amount') + $response?->partsCosting?->sum('amount')) }} tk</p>
        </div>
     </div>
 </div>
 <!-- Basic & Purchase Infos Part End !-->

 <!-- Buy Payment Infos Part Start !-->
 <div class="row pt-5">
     <div class="col-lg-12 d-flex justify-content-between">
         <p class="color-bluis">Buy Payment Infos (Purchase)</p>
         <a style="margin-top: -10px" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="{{ route('admin.version1.vehicle-management.vehicle.create') }}">
             <span class="icon">
                 <span class="feather-icon">
                     <i class="fa-solid fa-circle-plus" style="color:gray"></i>
                 </span>
             </span>
         </a>
     </div>
 </div>
 <div class="row pt-3">
     <div class="col-lg-12">
         @forelse ($response?->buyPayments as $payment)
             <div class="d-flex justify-content-between pb-1">
                 <p style="width:78%">{{ $payment->account_holder_name . ' ' . '(' . $payment?->credit_bank_account_number . ')' }} <i class="fa-solid fa-arrow-right"></i> {{ $payment->paymentMethod?->name }}</p>
                 {{-- <p style="width:1%">:</p> --}}
                 <p style="width:21%;text-align:end">{{ $payment?->amount ?? '---' }} tk</p>
             </div>
         @empty
             <div class="text-center">
                 <p class="text-danger">No Payment Done Yet.</p>
             </div>
         @endforelse
         <hr class="hr">
         <div class="d-flex justify-content-between pb-1">
             <p style="width:70%">Total Buy Info</p>
             {{-- <p style="width:1%">:</p> --}}
             <p style="width:29%;text-align:end">{{ $response?->buyPayments->sum('amount') ?? '---' }} tk</p>
         </div>

     </div>
 </div>
 <!-- Buy Payment Infos Part End !-->

 <!-- Sell Payment Infos Part Start !-->
 <div class="row pt-5">
     <div class="col-lg-12 d-flex justify-content-between">
         <p class="color-bluis">Sell Payment Infos (Sell)</p>
         <a style="margin-top: -10px" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="{{ route('admin.version1.vehicle-management.vehicle.create') }}">
             <span class="icon">
                 <span class="feather-icon">
                     <i class="fa-solid fa-circle-plus" style="color:gray"></i>
                 </span>
             </span>
         </a>
     </div>
 </div>
 <div class="row pt-3">
     <div class="col-lg-12">
         @forelse ($response?->sellPayments as $payment)
             <div class="d-flex justify-content-between pb-1">
                 <p style="width:78%">{{ $payment->account_holder_name . ' ' . '(' . $payment?->debit_bank_account_number . ')' }} <i class="fa-solid fa-arrow-right"></i> {{ $payment->paymentMethod?->name }}</p>
                 {{-- <p style="width:1%">:</p> --}}
                 <p style="width:21%;text-align:end">{{ $payment?->amount ?? '---' }} tk</p>
             </div>
         @empty
             <div class="text-center">
                 <p class="text-danger">No Payment Done Yet.</p>
             </div>
         @endforelse
         <hr class="hr">
         <div class="d-flex justify-content-between pb-1">
             <p style="width:70%">Total Sell Info</p>
             {{-- <p style="width:1%">:</p> --}}
             <p style="width:29%;text-align:end">{{ $response?->sellPayments->sum('amount') ?? '---' }} tk</p>
         </div>

     </div>
 </div>
 <!-- Sell Payment Infos Part End !-->
