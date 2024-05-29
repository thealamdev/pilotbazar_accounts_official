 <div>
     <div class="content-wrap">
         <div class="content-content">
             <div class="content-detail-wrap">
                 <header class="content-header">
                     <div class="d-flex align-items-center flex-grow-1">
                         <a class="content-title link-dark" href="#">
                             <h1>Investors</h1>
                         </a>

                         <form class="mx-3 flex-grow-1 mw-400p" role="search">
                             <input type="text" class="form-control" placeholder="Search media by Name">
                         </form>
                     </div>

                     <div class="content-options-wrap">
                         <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover ms-0 d-xl-inline-block d-none"
                             href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                             data-bs-original-title="Add New">
                             <span class="icon">
                                 <span class="feather-icon">
                                     <i data-feather="folder-plus"></i>
                                 </span>
                             </span>
                         </a>
                     </div>
                 </header>

                 <div class="py-5">
                     <div class="row">
                         <div class="col-md-12 mb-md-4 mb-3">
                             <div class="card card-border mb-0 h-100">
                                 <div class="card-header card-header-action">
                                     <h6>Investors
                                         <span class="badge badge-sm badge-light ms-1">240</span>
                                     </h6>
                                     <div class="card-action-wrap">
                                         <a href="{{ route('admin.investor.create') }}"
                                             class="btn btn-sm btn-primary ms-3">
                                             <span>
                                                 <span class="icon">
                                                     <span class="feather-icon">
                                                         <i data-feather="plus"></i>
                                                     </span>
                                                 </span>
                                                 <span class="btn-text">
                                                     Add new
                                                 </span>
                                             </span>
                                         </a>
                                     </div>
                                 </div>
                                 <div class="card-body">
                                     <div class="contact-list-view">
                                         <table id="datable_1" class="table nowrap w-100 mb-5">
                                             <thead>
                                                 <tr>
                                                     <th>
                                                         <span class="form-check fs-6 mb-0">
                                                             <input type="checkbox"
                                                                 class="form-check-input check-select-all"
                                                                 id="customCheck1">
                                                             <label class="form-check-label" for="customCheck1"></label>
                                                         </span>
                                                     </th>
                                                     <th>Name</th>
                                                     <th>Email</th>
                                                     <th>Mobile</th>
                                                     <th>Amount</th>
                                                     <th>Profit(%)</th>
                                                     <th>Action</th>
                                                 </tr>
                                             </thead>

                                             <tbody>
                                                 @forelse ($investors as $each)
                                                     <tr>
                                                         <td>
                                                         </td>
                                                         <td>
                                                             <div class="text-high-em">{{ $each?->name }}</div>
                                                         </td>
                                                         <td>
                                                             <div class="fs-8 ms-3">{{ $each?->email }}</div>
                                                         </td>
                                                         <td>{{ $each?->mobile }}</td>
                                                         <td>
                                                             <span class="badge badge-soft-secondary  my-1  me-2">
                                                                {{ $each?->amount }} taka
                                                             </span>
                                                         </td>
                                                         <td>{{ $each?->profit_percent }} %</td>
                                                         <td>
                                                             <div class="d-flex align-items-center">
                                                                 <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                     data-bs-toggle="tooltip" data-placement="top"
                                                                     title="" data-bs-original-title="Edit"
                                                                     href="#">
                                                                     <span class="icon">
                                                                         <span class="feather-icon">
                                                                             <i data-feather="edit-2"></i>
                                                                         </span>
                                                                     </span>
                                                                 </a>
                                                                 <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button"
                                                                     data-bs-toggle="tooltip" data-placement="top"
                                                                     title="" data-bs-original-title="Delete"
                                                                     href="#">
                                                                     <span class="icon">
                                                                         <span class="feather-icon"><i
                                                                                 data-feather="trash"></i>
                                                                         </span>
                                                                     </span>
                                                                 </a>
                                                             </div>
                                                         </td>
                                                     </tr>
                                                 @empty
                                                     <td>No data found !!</td>
                                                 @endforelse
                                             </tbody>
                                         </table>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
