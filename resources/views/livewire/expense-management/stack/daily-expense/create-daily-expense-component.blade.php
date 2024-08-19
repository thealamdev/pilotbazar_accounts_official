<div class="pt-7">
    <!-- Header Part Start !-->
    <header class="pb-4 d-flex justify-content-between align-items-center">
        <div class="">
            <p class="fs-5 fw-600">Expense Sub Category Create</p>
            <span>Please must fill the field where (*) sign is visible.</span>
        </div>
        <div>
            <a href="{{ route('admin.version1.expense-management.expense.category.index') }}" class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="button">Category</a>
        </div>
    </header>
    <!-- Header Part End !-->

    <!-- Form Part End !-->
    <div class="border border-slate-400 rounded p-3">
        <form action="#" wire:submit="save" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="form.expense_category_id">Category <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                        <select wire:model.live="form.expense_category_id" class="form-control @error('form.expense_category_id')
                            {{ 'is-invalid' }}
                        @enderror">
                            <option selected value>-- Please Select Category --</option>
                            @foreach ($expense_categories as $each)
                                <option value="{{ $each?->id }}">{{ $each?->name }}</option>
                            @endforeach
                        </select>
                        @error('form.expense_category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group position-relative col-lg-6">
                    <label for="searchInput">Purpose <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                        <input type="text" id="searchInput" wire:model="form.expense_sub_category" class="form-control @error('form.expense_sub_category')
                    {{ 'is-invalid' }}
                @enderror" placeholder="sub category">
                        <div id="searchResults" class="search-results" style="display: none;"></div>
                        @error('form.expense_sub_category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="form.amount">Amount <span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                        <input type="text" wire:model.live="form.amount" class="form-control @error('form.amount')
                            {{ 'is-invalid' }}
                        @enderror" placeholder="amount">
                        @error('form.amount')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-6">
                    <label for="status">Status<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-star"></i></span>
                        <select wire:model.live="form.status" class="form-control @error('form.status')
                            {{ 'is-invalid' }}
                        @enderror">
                            <option selected value>-- Please Select Status --</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('form.status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="text-start">
                <button class="bg-transparent border border-slate-400 px-4 py-1 rounded" type="submit">Save</button>
            </div>
        </form>
    </div>
    <!-- Form Part End !-->
</div>


@push('css')
    <style>
        .search-results {
            position: absolute;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            max-height: 200px;
            overflow-y: auto;
            background-color: #fff;
            z-index: 1000;
        }

        .search-result-item {
            padding: .375rem .75rem;
            cursor: pointer;
        }

        .search-result-item:hover {
            background-color: #e9ecef;
        }

        .container {
            position: relative;
            width: 300px;
            /* Adjust width as needed */
        }
    </style>
@endpush

@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const options = @json($expense_sub_categories_response->pluck('name'));
             
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');

            searchInput.addEventListener('input', function() {
                const query = searchInput.value.toLowerCase();
                searchResults.innerHTML = '';

                if (query.length === 0) {
                    searchResults.style.display = 'none';
                    return;
                }

                const filteredOptions = options.filter(option => option.toLowerCase().includes(query));

                if (filteredOptions.length === 0) {
                    searchResults.style.display = 'block';
                } else {
                    searchResults.style.display = 'block';
                    filteredOptions.forEach(option => {
                        const div = document.createElement('div');
                        div.textContent = option;
                        div.className = 'search-result-item';
                        div.addEventListener('click', () => {
                            searchInput.value = option;
                            searchResults.style.display = 'none';
                            if (typeof Livewire !== 'undefined') {
                                Livewire.dispatch('updateExpenseSubCategory', [option]);
                            } else {
                                console.error('Livewire is not defined.');
                            }
                        });
                        searchResults.appendChild(div);
                    });
                }
            });

            document.addEventListener('click', function(event) {
                if (!event.target.closest('#searchInput') && !event.target.closest('#searchResults')) {
                    searchResults.style.display = 'none';
                }
            });
        });
    </script>
@endpush
