<div>
    <div class="content-wrap">
        <div class="content-content">
            <div class="content-detail-wrap">
                <header class="content-header">
                    <div class="d-flex align-items-center flex-grow-1">
                        <a class="content-title link-dark" href="#">
                            <h1>Model Year</h1>
                        </a>

                        <form class="mx-3 flex-grow-1 mw-400p" role="search">
                            <input type="text" wire:model.live="search" class="form-control" placeholder="Search media by Name">
                        </form>
                    </div>

                    <div class="content-options-wrap">
                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover ms-0 d-xl-inline-block d-none" href="{{ route('admin.version1.vehicle-management.vehicle.module.model-year.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Add New">
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
                                    <h6>Model Year
                                        <span class="badge badge-sm badge-light ms-1">{{ !empty($responses) ? count($responses) : 0 }}</span>
                                    </h6>
                                    <div class="card-action-wrap">
                                        <a href="{{ route('admin.version1.vehicle-management.vehicle.module.model-year.create') }}" class="btn btn-sm btn-primary ms-3">
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
                                                    <th class="text-center">Status</th>
                                                    <th>Created By</th>
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
                                                        <td class="text-center">
                                                            {!! Helper::status($each?->status) !!}
                                                        </td>
                                                        <td>{{ $each?->user?->name }}</td>
                                                        <td class="text-end">
                                                            {!! Helper::ISOdate($each?->updated_at) !!}
                                                        </td>
                                                        <td class="text-end">
                                                            <div class="dropdown">
                                                                <x-action.action-button />
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <x-action.edit name="Edit" route="{{ route('admin.version1.vehicle-management.vehicle.module.model-year.update', ['model_year' => $each?->id]) }}" />
                                                                    <x-action.delete name="Delete" :id="$each->id" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <td colspan="5" class="text-center">No data found !!</td>
                                                @endforelse
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td>Name</td>
                                                    <td class="text-center">Status</td>
                                                    <td>Created By</td>
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
