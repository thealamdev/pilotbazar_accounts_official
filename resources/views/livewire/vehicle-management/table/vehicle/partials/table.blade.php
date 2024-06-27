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
            <th class="text-center">Action</th>
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
                <td>
                    <div class="d-flex align-items-center">
                        <a title="Edit" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="{{ route('admin.version1.vehicle-management.vehicle.module.color.update', ['color' => $each->id]) }}">
                            <span class="icon">
                                <span class="feather-icon">
                                    <i class="fa-solid fa-pen" style="color:gray"></i>
                                </span>
                            </span>
                        </a>
                        <button title="Trash" type="button" wire:click="delete({{ $each->id }})" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" wire:confirm="Are you sure you want to delete this post?">
                            <span class="icon">
                                <span class="feather-icon">
                                    <i class="fa-solid fa-eraser" style="color:gray"></i>
                                </span>
                            </span>
                        </button>
                        <a title="Add Costing" href="{{ route('admin.version1.vehicle-management.vehicle.costing.create', ['vehicle' => $each?->id]) }}" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover">
                            <span class="icon">
                                <span class="feather-icon">
                                    <i class="fa-solid fa-coins" style="color:gray"></i>
                                </span>
                            </span>
                        </a>
                        <a title="Buy Payment" href="{{ route('admin.version1.vehicle-management.vehicle.buy-payment.create', ['vehicle' => $each?->id]) }}" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover">
                            <span class="icon">
                                <span class="feather-icon">
                                    <i class="fa-solid fa-money-bill-wave"></i>
                                </span>
                            </span>
                        </a>
                        <a title="Show" href="{{ route('admin.version1.vehicle-management.vehicle.show', ['vehicle' => $each?->id]) }}" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover">
                            <span class="icon">
                                <span class="feather-icon">
                                    <i class="fa-solid fa-arrow-right" style="color:gray"></i>
                                </span>
                            </span>
                        </a>
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
            <td class="text-center">Action</td>
        </tr>
    </tfoot>
</table>
