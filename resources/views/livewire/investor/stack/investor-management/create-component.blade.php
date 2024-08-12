 <div class="pt-7">
     <!-- Header Part Start !-->
     <header class="pb-4 d-flex justify-content-between align-items-center">
         <div class="">
             <p for="investor" class="fs-5 fw-600">Investor Create</p>
             <span>Please must fill the field where (*) sign is visible.</span>
         </div>

         <div>
             <button class="bg-transparent border border-slate-400 px-2 py-1 rounded" type="button">Investors</button>
         </div>
     </header>
     <!-- Header Part End !-->

     <!-- Form Part End !-->
     <div class="border border-slate-400 rounded p-3">
         <form action="#" wire:submit="save" method="POST">
             <div class="row">
                 <div class="col-lg-6">
                     <div class="input-group mb-3">
                         <span class="input-group-text">u</span>
                         <input type="text" wire:model="name" name="name" class="form-control" placeholder="investor name">
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="input-group mb-3">
                         <span class="input-group-text">+88</span>
                         <input type="number" wire:model="mobile" name="mobile" class="form-control" placeholder="investor mobile bumber">
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="input-group mb-3">
                         <span class="input-group-text">@</span>
                         <input type="email" wire:model="email" class="form-control" placeholder="investor email account">
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="input-group mb-3">
                         <span class="input-group-text">$</span>
                         <input type="number" wire:model="amount" name="amount" class="form-control" placeholder="invested amount">
                         <span class="input-group-text">.00</span>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="input-group mb-3">
                         <span class="input-group-text">%</span>
                         <input type="number" wire:model="profit_percent" name="profit_percent" class="form-control" placeholder="profit percent">
                         <span class="input-group-text">.00</span>
                     </div>
                 </div>
             </div>

             <div class="text-center">
                 <button class="bg-transparent border border-slate-400 px-2 py-1 rounded" type="submit">Submit</button>
             </div>
         </form>
     </div>
     <!-- Form Part End !-->
 </div>

 @if (Session::has('success'))
     {{ Session::get('success') }}
 @endif
