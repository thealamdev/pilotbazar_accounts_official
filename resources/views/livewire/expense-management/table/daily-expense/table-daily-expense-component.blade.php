<div>
    <div class="content-wrap">
        <div class="content-content">
            <div class="content-detail-wrap">
                <header class="content-header">
                    <div class="d-flex align-items-center flex-grow-1">
                        <a class="content-title link-dark" href="#">
                            <h1>Daily Expenses</h1>
                        </a>

                        <form class="mx-3 flex-grow-1 mw-400p" role="search">
                            <input wire:model.live="search" type="text" class="form-control" placeholder="Search Daily Expenses name by Name">
                        </form>
                    </div>

                    <div class="content-options-wrap">
                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover ms-0 d-xl-inline-block d-none" href="{{ route('admin.version1.expense-management.expense.category.create') }}">
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
                                    <h6>Daily Expenses
                                        <span class="badge badge-sm badge-light ms-1">{{ !empty($responses) ? count($responses) : 0 }}</span>
                                    </h6>
                                    <div class="card-action-wrap">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="date" wire:model="start_date" class="form-control">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="date" wire:model="end_date" class="form-control">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="card-action-wrap">
                                        <a href="{{ route('admin.version1.expense-management.expense.daily.create') }}" class="btn btn-sm btn-primary ms-3">
                                            <span>
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <i class="fa-solid fa-file-pdf"></i>
                                                    </span>
                                                </span>
                                                <span class="btn-text">
                                                    print
                                                </span>
                                            </span>
                                        </a>
                                        <a href="{{ route('admin.version1.expense-management.expense.daily.create') }}" class="btn btn-sm btn-primary ms-3">
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
                                                    <th class="text-end">Amount</th>
                                                    <th class="text-end">Purposes</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-end">Modified</th>
                                                    <th class="text-end">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @php
                                                    $total = 0;
                                                @endphp
                                                @forelse ($responses as $each)
                                                    <tr>
                                                        <td>
                                                            <div class="text-high-em">{{ $each?->name }}</div>
                                                        </td>
                                                        <td class="text-end">
                                                            {{ $each->daily_expense->sum('amount') }} tk
                                                            @php
                                                                $total += $each->daily_expense->sum('amount');
                                                            @endphp
                                                        </td>
                                                        <td class="text-end">
                                                            <x-dropdown.sub-category />
                                                            <div class="dropdown-menu dropdown-menu-end pt-4 pe-5">
                                                                <ul>
                                                                    @foreach ($each->expense_categories as $purpose)
                                                                        <li class="mb-2">
                                                                            <div class="d-flex justify-content-between">
                                                                                <p>{{ $purpose->purpose . ' =  ' . $purpose->amount }} tk</p>
                                                                            </div>
                                                                        </li>
                                                                        <hr class="hr">
                                                                    @endforeach
                                                                </ul>
                                                            </div>
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
                                                                    <x-action.edit name="Edit" route="{{ route('admin.version1.expense-management.expense.category.update', ['expenseCategory' => $each->id]) }}" />
                                                                    <x-action.delete name="Delete" :id="$each->id" />
                                                                    <x-action.add name="Add Sub Category" route="{{ route('admin.version1.expense-management.expense.sub-category.create') }}" />
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <td colspan="6" class="text-center text-danger">No data found !!</td>
                                                @endforelse
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td>Name</td>
                                                    <td class="text-end text-success">Total Expense : {{ $total }} tk</td>
                                                    <td class="text-end">Purpose</td>
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
