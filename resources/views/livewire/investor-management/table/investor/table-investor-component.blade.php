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
                            <input wire:model.live="search" type="text" class="form-control" placeholder="Search Color by Name">
                        </form>
                    </div>

                    <div class="content-options-wrap">
                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover ms-0 d-xl-inline-block d-none" href="{{ route('admin.version1.investor-management.investor.create') }}">
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
                                        <span class="badge badge-sm badge-light ms-1">{{ !empty($responses) ? count($responses) : 0 }}</span>
                                    </h6>
                                    <div class="card-action-wrap">
                                        <a href="{{ route('admin.version1.investor-management.investor.create') }}" class="btn btn-sm btn-primary ms-3">
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
                                        <table class="table nowrap w-100 mb-5">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Amount</th>
                                                    <th>Invested On</th>
                                                    <th>Address</th>
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
                                                            <div class="text-high-em">{{ $each?->email }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-high-em">{{ $each?->mobile }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-high-em">{{ $each?->amount . ' tk' }}</div>
                                                        </td>
                                                        <td>
                                                            @foreach ($each->investedOn as $car)
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="text-high-em"> {{ $car->investedVehicles->first()->name }}</div>
                                                                    <div class="text-high-em"> {{ $car?->invested_amount . 'tk' }}</div>
                                                                </div>
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            <div class="text-high-em">{{ $each?->address }}</div>
                                                        </td>
                                                        <td>
                                                            <div class="text-center">
                                                                {!! Helper::status($each?->status) !!}
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            {!! Helper::ISOdate($each?->updated_at) !!}
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="dropdown">
                                                                <x-action.action-button />
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <x-action.edit name="Edit" route="{{ route('admin.version1.investor-management.investor.update', ['investor' => $each->id]) }}" />
                                                                    <x-action.delete name="Delete" :id="$each->id" />
                                                                    <x-action.edit name="Invested On" route="{{ route('admin.version1.investor-management.investor.invested-vehicle.create', ['investor' => $each->id]) }}" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <td colspan="8" class="text-center text-danger">No data found !!</td>
                                                @endforelse
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>Email</td>
                                                    <td>Mobile</td>
                                                    <td>Amount</td>
                                                    <td>Invested On</td>
                                                    <td>Address</td>
                                                    <td class="text-center">Status</td>
                                                    <td class="text-end">Modified</td>
                                                    <td class="text-end">Action</td>
                                                </tr>
                                            </tfoot>
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
