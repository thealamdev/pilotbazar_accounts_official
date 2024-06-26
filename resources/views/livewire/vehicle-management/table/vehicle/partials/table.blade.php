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
                        <x-action.action-button />
                        <div class="dropdown-menu dropdown-menu-end" style="">
                            <x-action.edit name="Edit Vehicle" route="{{ route('admin.version1.vehicle-management.vehicle.module.color.update', ['color' => $each->id]) }}" />
                            <x-action.delete name="Delete" :id="$each->id" />
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
