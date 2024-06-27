<table class="table nowrap w-100 mb-5">
    <thead>
        <tr>
            <th>Name</th>
            <th>Model</th>
            <th>Model Year</th>
            <th>Color</th>
            <th>Purchase Price</th>
            <th>Total Price</th>
            <th class="text-center">Status</th>
            <th class="text-end">Modified</th>
            <th class="text-end">Action</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($responses as $each)
            <tr>
                <td>
                    <div class="text-high-em">{{ $each?->name }}</div>
                </td>
                <td>
                    <div class="text-high-em">{{ $each?->models?->name }}</div>
                </td>
                <td>
                    <div class="text-high-em">{{ $each?->model_year?->name }}</div>
                </td>
                <td>
                    <div class="text-high-em">{{ $each?->color?->name }}</div>
                </td>
                <td>
                    <div class="text-high-em">{{ $each?->purchase_price }}</div>
                </td>
                <td>
                    <div class="text-high-em">{{ $each?->total_cost }}</div>
                </td>
                <td>
                    <div class="text-center">
                        {!! Helper::status($each->status) !!}
                    </div>
                </td>

                <td class="text-end">{!! Helper::ISOdate($each?->updated_at) !!}</td>
                <td class="text-end">
                    <div class="dropdown">
                        <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover dropdown-toggle no-caret" aria-expanded="false" data-bs-toggle="dropdown">
                            <span class="icon">
                                <span class="feather-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg>
                                </span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" style="">
                            <a class="dropdown-item" href="{{ route('admin.version1.vehicle-management.vehicle.module.color.update', ['color' => $each->id]) }}">
                                <span class="feather-icon dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </span>
                                <span>Edit Vehicle</span>
                            </a>
                            <button class="dropdown-item" wire:click="delete({{ $each->id }})">
                                <span class="feather-icon dropdown-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                        <polyline points="3 6 5 6 21 6">

                                        </polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg>
                                </span>
                                <span>Delete</span>
                            </button>

                            <div class="dropdown-divider"></div>
                            <h6 class="dropdown-header dropdown-header-bold">Othres Action</h6>
                            <a class="dropdown-item" href="{{ route('admin.version1.vehicle-management.vehicle.costing.create', ['vehicle' => $each?->id]) }}">Add Costing</a>
                            <a class="dropdown-item" href="{{ route('admin.version1.vehicle-management.vehicle.buy-payment.create', ['vehicle' => $each?->id]) }}">Buy Payment</a>
                            <a class="dropdown-item" href="{{ route('admin.version1.vehicle-management.vehicle.show', ['vehicle' => $each?->id]) }}">Vehicle View</a>

                        </div>
                    </div>
                </td>
            </tr>
        @empty
            <td class="text-center text-danger fs-3" colspan="9">No data found !!</td>
        @endforelse
    </tbody>

    <tfoot>
        <tr>
            <td>Name</td>
            <td>Model</td>
            <td>Model Year</td>
            <td>Color</td>
            <td>Purchase Price</td>
            <td>Total Price</td>
            <td class="text-center">Status</td>
            <td class="text-end">Modified</td>
            <td class="text-end">Action</td>
        </tr>
    </tfoot>
</table>
