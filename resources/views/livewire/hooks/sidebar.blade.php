 <!-- Vertical Nav -->
 <div>
     <div class="hk-menu">
         <!-- Brand -->
         <div class="menu-header">
             <span>
                 <a class="navbar-brand" href="index.html">
                     <img class="brand-img img-fluid" src="https://pilotbazar.com/assets/img/logo-3.png" width="100px" alt="brand" />
                     <img class="brand-img img-fluid" src="https://pilotbazar.com/assets/img/logo-3.png" width="50px" alt="brand" />
                 </a>
                 <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                     <span class="icon">
                         <span class="svg-icon fs-5">
                             <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                 <line x1="10" y1="12" x2="20" y2="12"></line>
                                 <line x1="10" y1="12" x2="14" y2="16"></line>
                                 <line x1="10" y1="12" x2="14" y2="8"></line>
                                 <line x1="4" y1="4" x2="4" y2="20"></line>
                             </svg>
                         </span>
                     </span>
                 </button>
             </span>
         </div>
         <!-- /Brand -->

         <!-- Main Menu -->
         <div data-simplebar class="nicescroll-bar">
             <div class="menu-content-wrap">
                 <div class="menu-group">
                     <ul class="navbar-nav flex-column">
                         <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
                             <a class="nav-link" href="{{ route('dashboard') }}">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <rect x="4" y="4" width="16" height="4" rx="1" />
                                             <rect x="4" y="12" width="6" height="8" rx="1" />
                                             <line x1="14" y1="12" x2="20" y2="12" />
                                             <line x1="14" y1="16" x2="20" y2="16" />
                                             <line x1="14" y1="20" x2="20" y2="20" />
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Dashboard</span>
                                 <span class="badge badge-sm badge-soft-pink ms-auto">Hot</span>
                             </a>
                         </li>
                     </ul>
                 </div>

                 <!-- Vehicle menu start !-->
                 <div class="menu-gap"></div>
                 <div class="menu-group">
                     <div class="nav-header">
                         <span>Vehicle Management</span>
                     </div>
                     <div class="menu-group">
                         <ul class="navbar-nav flex-column">
                             <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.index') || Route::is('admin.version1.vehicle-management.vehicle.create') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.index') }}">
                                     <span class="nav-icon-wrap">
                                         <span class="svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                 <rect x="4" y="4" width="16" height="4" rx="1" />
                                                 <rect x="4" y="12" width="6" height="8" rx="1" />
                                                 <line x1="14" y1="12" x2="20" y2="12" />
                                                 <line x1="14" y1="16" x2="20" y2="16" />
                                                 <line x1="14" y1="20" x2="20" y2="20" />
                                             </svg>
                                         </span>
                                     </span>
                                     <span class="nav-link-text">Vehicle</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <!-- Vehicle Management -> Modules !-->
                     <ul class="navbar-nav flex-column">
                         <li class="nav-item  @if (Route::is('admin.version1.vehicle-management.vehicle.module.*')) active @endif">
                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_pages">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <line x1="4" y1="4" x2="10" y2="4"></line>
                                             <line x1="14" y1="4" x2="20" y2="4"></line>
                                             <rect x="4" y="8" width="6" height="12" rx="2"></rect>
                                             <rect x="14" y="8" width="6" height="6" rx="2"></rect>
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Modules</span>
                             </a>
                             <ul id="dash_pages" class="nav flex-column collapse nav-children @if (Route::is('admin.version1.vehicle-management.vehicle.module.*')) show @endif">
                                 <li class="nav-item">
                                     <ul class="nav flex-column">
                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.module.color.*') ? 'active' : '' }}">
                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.module.color.index') }}">
                                                 <span class="nav-link-text">Color</span>
                                             </a>
                                         </li>
                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.module.model.*') ? 'active' : '' }}">
                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.module.model.index') }}">
                                                 <span class="nav-link-text">Model</span>
                                             </a>
                                         </li>
                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.module.model-year.*') ? 'active' : '' }}">
                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.module.model-year.index') }}"><span class="nav-link-text">Model Year</span></a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                     <!-- Vehicle Management -> Sell Service -->
                     <!-- Sell Management -> Modules !-->
                     <ul class="navbar-nav flex-column">
                         <li class="nav-item  @if (Route::is('admin.version1.vehicle-management.vehicle.sell-service.*')) active @endif">
                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#sell_service_pages">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <line x1="4" y1="4" x2="10" y2="4"></line>
                                             <line x1="14" y1="4" x2="20" y2="4"></line>
                                             <rect x="4" y="8" width="6" height="12" rx="2"></rect>
                                             <rect x="14" y="8" width="6" height="6" rx="2"></rect>
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Sell Service</span>
                             </a>
                             <ul id="sell_service_pages" class="nav flex-column collapse nav-children @if (Route::is('admin.version1.vehicle-management.vehicle.sell-service.*')) show @endif">
                                 <li class="nav-item">
                                     <ul class="nav flex-column">
                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.sell-service.*') ? 'active' : '' }}">
                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.sell-service.create') }}">
                                                 <span class="nav-link-text">Category</span>
                                             </a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                     <!-- Vehicle Management -> Dependency !-->
                     <ul class="navbar-nav flex-column">
                         <li class="nav-item @if (Route::is('admin.version1.vehicle-management.vehicle.dependency.*')) active @endif">
                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dependency_pages">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-details" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                             <path d="M13 5h8"></path>
                                             <path d="M13 9h5"></path>
                                             <path d="M13 15h8"></path>
                                             <path d="M13 19h5"></path>
                                             <rect x="3" y="4" width="6" height="6" rx="1"></rect>
                                             <rect x="3" y="14" width="6" height="6" rx="1"></rect>
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Dependency</span>
                             </a>
                             <ul id="dependency_pages" class="nav flex-column collapse  nav-children @if (Route::is('admin.version1.vehicle-management.vehicle.dependency.*')) show @endif">
                                 <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.dependency.bank.pbl_bank.*') ? 'active' : '' }}">
                                     <ul class="nav flex-column">
                                         <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_log">
                                                 <span class="nav-link-text">Payment</span>
                                             </a>
                                             <ul id="dash_log" class="nav flex-column collapse  nav-children {{ Route::is('admin.version1.vehicle-management.vehicle.dependency.payment.method.*') ? 'show' : '' }}">
                                                 <li class="nav-item">
                                                     <ul class="nav flex-column">
                                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.dependency.payment.method.*') ? 'active' : '' }}">
                                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.dependency.payment.method.index') }}"><span class="nav-link-text">Method</span></a>
                                                         </li>
                                                     </ul>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.dependency.bank.pbl_bank.*') ? 'active' : '' }}">
                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.dependency.bank.pbl_bank.index') }}"><span class="nav-link-text">Bank</span></a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </div>
                 <!-- Vehicle menu end !-->

                 <!-- Investor menu start !-->
                 <div class="menu-gap"></div>
                 <div class="menu-group">
                     <div class="nav-header">
                         <span>Investor Management</span>
                     </div>
                     <div class="menu-group">
                         <ul class="navbar-nav flex-column">
                             <li class="nav-item {{ Route::is('admin.version1.investor-management.investor.index') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('admin.version1.investor-management.investor.index') }}">
                                     <span class="nav-icon-wrap">
                                         <span class="svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                 <circle cx="12" cy="7" r="4"></circle>
                                                 <path d="M6 21v-2a4 4 0 0 1 4 -4h1"></path>
                                                 <circle cx="16.5" cy="17.5" r="2.5"></circle>
                                                 <path d="M18.5 19.5l2.5 2.5"></path>
                                             </svg>
                                         </span>
                                     </span>
                                     <span class="nav-link-text">Investors</span>
                                 </a>
                             </li>
                             <li class="nav-item {{ Route::is('admin.version1.investor-management.investor.investment.index') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('admin.version1.investor-management.investor.investment.index') }}">
                                     <span class="nav-icon-wrap">
                                         <span class="svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                 <circle cx="12" cy="7" r="4"></circle>
                                                 <path d="M6 21v-2a4 4 0 0 1 4 -4h1"></path>
                                                 <circle cx="16.5" cy="17.5" r="2.5"></circle>
                                                 <path d="M18.5 19.5l2.5 2.5"></path>
                                             </svg>
                                         </span>
                                     </span>
                                     <span class="nav-link-text">Investments</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                     {{-- <!-- Vehicle Management -> Modules !-->
                     <ul class="navbar-nav flex-column">
                         <li class="nav-item  @if (Route::is('admin.version1.vehicle-management.vehicle.module.*')) active @endif">
                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_pages">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <circle cx="9" cy="7" r="4" />
                                             <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                             <path d="M16 11h6m-3 -3v6" />
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Modules</span>
                             </a>
                             <ul id="dash_pages" class="nav flex-column collapse nav-children @if (Route::is('admin.version1.vehicle-management.vehicle.module.*')) show @endif">
                                 <li class="nav-item">
                                     <ul class="nav flex-column">
                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.module.color.*') ? 'active' : '' }}">
                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.module.color.index') }}">
                                                 <span class="nav-link-text">Color</span>
                                             </a>
                                         </li>
                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.module.model.*') ? 'active' : '' }}">
                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.module.model.index') }}">
                                                 <span class="nav-link-text">Model</span>
                                             </a>
                                         </li>
                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.module.model-year.*') ? 'active' : '' }}">
                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.module.model-year.index') }}"><span class="nav-link-text">Model Year</span></a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                     <!-- Vehicle Management -> Dependency !-->
                     <ul class="navbar-nav flex-column">
                         <li class="nav-item @if (Route::is('admin.version1.vehicle-management.vehicle.dependency.*')) active @endif">
                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dependency_pages">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <circle cx="9" cy="7" r="4" />
                                             <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                             <path d="M16 11h6m-3 -3v6" />
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Dependency</span>
                             </a>
                             <ul id="dependency_pages" class="nav flex-column collapse  nav-children @if (Route::is('admin.version1.vehicle-management.vehicle.dependency.*')) show @endif">
                                 <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.dependency.bank.pbl_bank.*') ? 'active' : '' }}">
                                     <ul class="nav flex-column">
                                         <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_log">
                                                 <span class="nav-link-text">Payment</span>
                                             </a>
                                             <ul id="dash_log" class="nav flex-column collapse  nav-children {{ Route::is('admin.version1.vehicle-management.vehicle.dependency.payment.method.*') ? 'show' : '' }}">
                                                 <li class="nav-item">
                                                     <ul class="nav flex-column">
                                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.dependency.payment.method.*') ? 'active' : '' }}">
                                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.dependency.payment.method.index') }}"><span class="nav-link-text">Method</span></a>
                                                         </li>
                                                     </ul>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.dependency.bank.pbl_bank.*') ? 'active' : '' }}">
                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.dependency.bank.pbl_bank.index') }}"><span class="nav-link-text">Bank</span></a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul> --}}
                 </div>
                 <!-- Investor menu end !-->

                 <!-- Expenses menu start !-->
                 <div class="menu-gap"></div>
                 <div class="menu-group">
                     <div class="nav-header">
                         <span>Expense Management</span>
                     </div>
                     <div class="menu-group">
                         <ul class="navbar-nav flex-column">
                             <li class="nav-item {{ Route::is('admin.version1.expense-management.expense.daily.index') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('admin.version1.expense-management.expense.daily.index') }}">
                                     <span class="nav-icon-wrap">
                                         <span class="svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                 <circle cx="12" cy="7" r="4"></circle>
                                                 <path d="M6 21v-2a4 4 0 0 1 4 -4h1"></path>
                                                 <circle cx="16.5" cy="17.5" r="2.5"></circle>
                                                 <path d="M18.5 19.5l2.5 2.5"></path>
                                             </svg>
                                         </span>
                                     </span>
                                     <span class="nav-link-text">Daily Expense</span>
                                 </a>
                             </li>
                             <li class="nav-item {{ Route::is('admin.version1.expense-management.expense.category.*') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('admin.version1.expense-management.expense.category.index') }}">
                                     <span class="nav-icon-wrap">
                                         <span class="svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                 <circle cx="12" cy="7" r="4"></circle>
                                                 <path d="M6 21v-2a4 4 0 0 1 4 -4h1"></path>
                                                 <circle cx="16.5" cy="17.5" r="2.5"></circle>
                                                 <path d="M18.5 19.5l2.5 2.5"></path>
                                             </svg>
                                         </span>
                                     </span>
                                     <span class="nav-link-text">Expense Category</span>
                                 </a>
                             </li>
                             <li class="nav-item {{ Route::is('admin.version1.expense-management.expense.sub-category.*') ? 'active' : '' }}">
                                 <a class="nav-link" href="{{ route('admin.version1.expense-management.expense.sub-category.create') }}">
                                     <span class="nav-icon-wrap">
                                         <span class="svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                 <circle cx="12" cy="7" r="4"></circle>
                                                 <path d="M6 21v-2a4 4 0 0 1 4 -4h1"></path>
                                                 <circle cx="16.5" cy="17.5" r="2.5"></circle>
                                                 <path d="M18.5 19.5l2.5 2.5"></path>
                                             </svg>
                                         </span>
                                     </span>
                                     <span class="nav-link-text">Expense Sub Category</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <!-- Expenses menu end !-->

                 <div class="menu-gap"></div>
                 <div class="menu-group">
                     <div class="nav-header">
                         <span>Documentation</span>
                     </div>
                     <ul class="navbar-nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link" href="https://nubra-ui.hencework.com/" target="_blank">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-code-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <path d="M10 12h-1v5h1" />
                                             <path d="M14 12h1v5h-1" />
                                             <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                             <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Documentation</span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <!-- /Main Menu -->
     </div>
     <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
 </div>
 <!-- /Vertical Nav -->
