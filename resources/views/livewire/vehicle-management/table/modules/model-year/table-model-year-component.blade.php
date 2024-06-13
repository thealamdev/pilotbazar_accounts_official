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
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @forelse ($responses as $each)
                                                    <tr>
                                                        <td>
                                                            <div class="text-high-em">{{ $each?->name }}</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="fs-7 ms-3">
                                                                @if ($each->status == 1)
                                                                    <p class="text-success">Active</p>
                                                                @else
                                                                    <p class="text-danger">Inactive</p>
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td>{{ $each?->user?->name }}</td>

                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="#">
                                                                    <span class="icon">
                                                                        <span class="feather-icon">
                                                                            <i class="fa-solid fa-pen" style="color:gray"></i>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                                <button type="button" wire:click="delete({{ $each->id }})" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button" wire:confirm="Are you sure you want to delete this post?">
                                                                    <span class="icon">
                                                                        <span class="feather-icon">
                                                                            <i class="fa-solid fa-eraser" style="color:gray"></i>
                                                                        </span>
                                                                    </span>
                                                                </button>
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
                                                    <td>Action</td>
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
