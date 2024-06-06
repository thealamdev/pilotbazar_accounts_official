<div class="pt-7">
    <!-- Header Part Start !-->
    <header class="pb-4 d-flex justify-content-between align-items-center">
        <div class="">
            <p for="investor" class="fs-5 fw-600">Color Create</p>
            <span>Please must fill the field where (*) sign is visible.</span>
        </div>

        <div>
            <button class="bg-transparent border border-slate-400 px-2 py-1 rounded" type="button">Colors</button>
        </div>
    </header>
    <!-- Header Part End !-->

    <!-- Form Part End !-->
    <div class="border border-slate-400 rounded p-3">
        <form action="#" wire:submit="save" method="POST">
            <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input type="text" wire:model="name" name="name" class="form-control"
                            placeholder="color name">
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button class="bg-transparent border border-slate-400 px-2 py-1 rounded" type="submit">Save</button>
            </div>
        </form>
    </div>
    <!-- Form Part End !-->
</div>

@if (Session::has('success'))
    {{ Session::get('success') }}
@endif
