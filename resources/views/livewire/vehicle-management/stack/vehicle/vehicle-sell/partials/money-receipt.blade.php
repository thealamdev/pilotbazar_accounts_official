<!-- Money Receipt Part Start !-->
<div class="col-lg-12 mt-7">
    <table class="border-collapse border border-slate-500 w-100">
        <tr>
            <td class="border border-slate-600 px-2">Name</td>
            <td class="border border-slate-600 px-2">{{ $client_name }}</td>
        </tr>
        <tr>
            <td class="border border-slate-600 px-2">NID NO</td>
            <td class="border border-slate-600 px-2">{{ $nid }}</td>
        </tr>
        <tr>
            <td class="border border-slate-600 px-2">MOBILE</td>
            <td class="border border-slate-600 px-2">{{ $mobile }}</td>
        </tr>
        <tr>
            <td class="border border-slate-600 px-2">ADDRESS</td>
            <td class="border border-slate-600 px-2">{{ $address }}</td>
        </tr>
    </table>

    <table class="border-collapse border border-slate-500 w-100 mt-7">
        <tr>
            <td class="border border-slate-600 px-2">CAR NAME</td>
            <td class="border border-slate-600 px-2">{{ $vehicle?->name . ' ' . $vehicle?->models?->name }}</td>
        </tr>
        <tr>
            <td class="border border-slate-600 px-2">REGISTRATION NO</td>
            <td class="border border-slate-600 px-2">{{ $vehicle?->registration_number }}</td>
        </tr>
        <tr>
            <td class="border border-slate-600 px-2">MODEL YEAR</td>
            <td class="border border-slate-600 px-2">{{ $vehicle?->model_year->name }}</td>
        </tr>
        <tr>
            <td class="border border-slate-600 px-2">CHASSIS NO</td>
            <td class="border border-slate-600 px-2">{{ $vehicle?->chassis_number }}</td>
        </tr>
        <tr>
            <td class="border border-slate-600 px-2">ENGINE NO</td>
            <td class="border border-slate-600 px-2">{{ $vehicle?->engine_number }}</td>
        </tr>
    </table>

    <table class="border-collapse border border-slate-500 w-100 mt-7">
        <tr>
            <td class="border border-slate-600 px-2">Car Price</td>
            <td class="border border-slate-600 px-2">{{ number_format((float) $sell_price, 0) }} /=</td>
        </tr>
        @foreach ($vehicle->buyPayments as $each)
            <tr>
                <td class="border border-slate-600 px-2">{{ $each?->paymentMethod->name }}</td>
                <td class="border border-slate-600 px-2">{{ number_format($each?->amount, 0) }} /=</td>
            </tr>
        @endforeach
        <tr>
            <td class="border border-slate-600 px-2 font-bold">Total Paid</td>
            <td class="border border-slate-600 px-2 font-bold">{{ number_format($vehicle->buyPayments->sum('amount'), 0) }} /=</td>
        </tr>

        <tr>
            <td class="border border-slate-600 px-2 font-bold">Customer Due</td>
            <td class="border border-slate-600 px-2 font-bold">{{ number_format((int) $sell_price - $vehicle->buyPayments->sum('amount'), 0) }} /=</td>
        </tr>

    </table>
</div>
<!-- Money Receipt Part End !-->
