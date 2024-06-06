 <!-- Vertical Nav -->
 <div>
     <div class="hk-menu">
         <!-- Brand -->
         <div class="menu-header">
             <span>
                 <a class="navbar-brand" href="index.html">
                     <img class="brand-img img-fluid" src="https://pilotbazar.com/assets/img/logo-3.png" width="100px"
                         alt="brand" />
                     <img class="brand-img img-fluid" src="https://pilotbazar.com/assets/img/logo-3.png" width="50px"
                         alt="brand" />
                 </a>
                 <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                     <span class="icon">
                         <span class="svg-icon fs-5">
                             <svg xmlns="http://www.w3.org/2000/svg"
                                 class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
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
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-template" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
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
                 <div class="menu-gap"></div>
                 <div class="menu-group">
                     <div class="nav-header">
                         <span>Apps</span>
                     </div>
                     <ul class="navbar-nav flex-column">
                         <li class="nav-item">
                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                 data-bs-target="#dash_chat">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-message-dots" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                             fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <path
                                                 d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                             <line x1="12" y1="11" x2="12" y2="11.01" />
                                             <line x1="8" y1="11" x2="8" y2="11.01" />
                                             <line x1="16" y1="11" x2="16" y2="11.01" />
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Chat</span>
                             </a>
                             <ul id="dash_chat" class="nav flex-column collapse  nav-children">
                                 <li class="nav-item">
                                     <ul class="nav flex-column">
                                         <li class="nav-item">
                                             <a class="nav-link" href="chats.html"><span
                                                     class="nav-link-text">Chats</span></a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="chats-group.html"><span
                                                     class="nav-link-text">Groups</span></a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="chats-contact.html"><span
                                                     class="nav-link-text">Contacts</span></a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                 data-bs-target="#dash_chatpop">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-message-circle-2" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1" />
                                             <line x1="12" y1="12" x2="12" y2="12.01" />
                                             <line x1="8" y1="12" x2="8" y2="12.01" />
                                             <line x1="16" y1="12" x2="16" y2="12.01" />
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Chat Popup</span>

                             </a>
                             <ul id="dash_chatpop" class="nav flex-column collapse  nav-children">
                                 <li class="nav-item">
                                     <ul class="nav flex-column">
                                         <li class="nav-item">
                                             <a class="nav-link" href="chatpopup.html"><span
                                                     class="nav-link-text">Direct
                                                     Message</span></a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="chatbot.html"><span
                                                     class="nav-link-text">Chatbot</span></a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('admin.investor.index') }}">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-calendar-time" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <path
                                                 d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                                             <circle cx="18" cy="18" r="4" />
                                             <path d="M15 3v4" />
                                             <path d="M7 3v4" />
                                             <path d="M3 11h16" />
                                             <path d="M18 16.496v1.504l1 1" />
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Investor</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="email.html">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-inbox" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                             fill="none" stroke-linecap="round" stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <rect x="4" y="4" width="16" height="16" rx="2" />
                                             <path d="M4 13h3l3 3h4l3 -3h3" />
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Email</span>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                 data-bs-target="#dash_invoice">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-file-digit" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                             <rect x="9" y="12" width="3" height="5" rx="1" />
                                             <path
                                                 d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                             <path d="M15 12v5" />
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Invoices</span>
                             </a>
                             <ul id="dash_invoice" class="nav flex-column collapse  nav-children">
                                 <li class="nav-item">
                                     <ul class="nav flex-column">
                                         <li class="nav-item">
                                             <a class="nav-link" href="invoice-list.html"><span
                                                     class="nav-link-text">Invoice List</span></a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="invoice-templates.html"><span
                                                     class="nav-link-text">Invoice Templates</span></a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="create-invoice.html"><span
                                                     class="nav-link-text">Create Invoice</span></a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="invoice-preview.html"><span
                                                     class="nav-link-text">Invoice Preview</span></a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </div>

                 <div class="menu-gap"></div>
                 <div class="menu-group">
                     <div class="nav-header">
                         <span>Vehicle Management</span>
                     </div>
                     <div class="menu-group">
                         <ul class="navbar-nav flex-column">
                             <li
                                 class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.index') ? 'active' : '' }}">
                                 <a class="nav-link"
                                     href="{{ route('admin.version1.vehicle-management.vehicle.index') }}">
                                     <span class="nav-icon-wrap">
                                         <span class="svg-icon">
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="icon icon-tabler icon-tabler-template" width="24"
                                                 height="24" viewBox="0 0 24 24" stroke-width="2"
                                                 stroke="currentColor" fill="none" stroke-linecap="round"
                                                 stroke-linejoin="round">
                                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                 <rect x="4" y="4" width="16" height="4" rx="1" />
                                                 <rect x="4" y="12" width="6" height="8" rx="1" />
                                                 <line x1="14" y1="12" x2="20"
                                                     y2="12" />
                                                 <line x1="14" y1="16" x2="20"
                                                     y2="16" />
                                                 <line x1="14" y1="20" x2="20"
                                                     y2="20" />
                                             </svg>
                                         </span>
                                     </span>
                                     <span class="nav-link-text">Vehicle</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                     <ul class="navbar-nav flex-column">
                         <li class="nav-item  @if (Route::is('admin.version1.vehicle-management.vehicle.module.color.create') || Route::is('admin.version1.vehicle-management.vehicle.module.model.create')) active @endif">
                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                 data-bs-target="#dash_pages">
                                 <span class="nav-icon-wrap">
                                     <span class="svg-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-user-plus" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <circle cx="9" cy="7" r="4" />
                                             <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                             <path d="M16 11h6m-3 -3v6" />
                                         </svg>
                                     </span>
                                 </span>
                                 <span class="nav-link-text">Modules</span>
                             </a>
                             <ul id="dash_pages"
                                 class="nav flex-column collapse nav-children @if (Route::is('admin.version1.vehicle-management.vehicle.module.color.create') || Route::is('admin.version1.vehicle-management.vehicle.module.model.create')) show @endif">
                                 <li class="nav-item">
                                     <ul class="nav flex-column">
                                         {{-- <li class="nav-item">
                                             <a class="nav-link"
                                                 href="{{ route('admin.version1.vehicle-management.vehicle.index') }}"
                                                 data-bs-toggle="collapse" data-bs-target="#dash_log">
                                                 <span class="nav-link-text">Create</span>
                                             </a>
                                             <ul id="dash_log" class="nav flex-column collapse  nav-children">
                                                 <li class="nav-item">
                                                     <ul class="nav flex-column">
                                                         <li class="nav-item">
                                                             <a class="nav-link" href="login.html"><span
                                                                     class="nav-link-text">Login</span></a>
                                                         </li>
                                                         <li class="nav-item">
                                                             <a class="nav-link" href="login-simple.html"><span
                                                                     class="nav-link-text">Login Simple</span></a>
                                                         </li>
                                                         <li class="nav-item">
                                                             <a class="nav-link" href="login-classic.html"><span
                                                                     class="nav-link-text">Login Classic</span></a>
                                                         </li>
                                                     </ul>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                                 data-bs-target="#dash_sign">
                                                 <span class="nav-link-text">Sign Up</span>
                                             </a>
                                             <ul id="dash_sign" class="nav flex-column collapse nav-children">
                                                 <li class="nav-item">
                                                     <ul class="nav flex-column">
                                                         <li class="nav-item">
                                                             <a class="nav-link" href="signup.html"><span
                                                                     class="nav-link-text">Signup</span></a>
                                                         </li>
                                                         <li class="nav-item">
                                                             <a class="nav-link" href="signup-simple.html"><span
                                                                     class="nav-link-text">Signup Simple</span></a>
                                                         </li>
                                                         <li class="nav-item">
                                                             <a class="nav-link" href="signup-classic.html"><span
                                                                     class="nav-link-text">Signup Classic</span></a>
                                                         </li>
                                                     </ul>
                                                 </li>
                                             </ul>
                                         </li> --}}
                                         <li class="nav-item {{ Route::is('admin.version1.vehicle-management.vehicle.module.color.create') ? 'active' : '' }}">
                                             <a class="nav-link"
                                                 href="{{ route('admin.version1.vehicle-management.vehicle.module.color.create') }}">
                                                 <span class="nav-link-text">Color</span>
                                             </a>
                                         </li>
                                         <li class="nav-item {{  Route::is('admin.version1.vehicle-management.vehicle.module.model.create') ? 'active' : '' }}">
                                             <a class="nav-link" href="{{ route('admin.version1.vehicle-management.vehicle.module.model.create') }}">
                                                <span class="nav-link-text">Model</span>
                                             </a>
                                         </li>
                                         <li class="nav-item">
                                             <a class="nav-link" href="404.html"><span class="nav-link-text">Model Year</span></a>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </div>

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
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-file-code-2" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                             <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                             <path d="M10 12h-1v5h1" />
                                             <path d="M14 12h1v5h-1" />
                                             <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                             <path
                                                 d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
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
