<?php

namespace App\Livewire\VehicleManagement\Stack\Vehicle\VehicleSell;

use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Attributes\Title;
use App\Models\VehicleManagement\Vehicle\Vehicle;
use App\Livewire\Forms\VehicleManagement\Vehicle\VehicleSell\CreateVehicleSellRequest;

class CreateVehicleSellComponent extends Component
{
    /**
     * Define public property $client_name
     * @var string
     */
    public ?string $client_name = '';

    /**
     * Define public property $mobile
     * @var string
     */
    public ?string $mobile = '';

    /**
     * Define publilc property $nid
     * @var ?string
     */
    public ?string $nid = '';

    /**
     * Define public property $address
     * @var ?string
     */
    public ?string $address = '';

    /**
     * Define public property $sell_price
     * @var ?string
     */
    public $sell_price;

    /**
     * Define public property $vehicle
     * @var array|object
     */
    public $vehicle;

    /**
     * Define public property $costing_details
     * @var array|object
     */
    public $costing_details;

    /**
     * Define public form object $form
     */
    public CreateVehicleSellRequest $form;

    /**
     * Define public method mount()
     * @return void
     */
    public function mount(Vehicle $vehicle): void
    {
        $this->vehicle = Vehicle::query()
            ->where('id', $vehicle->id)
            ->with('user', 'color', 'models', 'model_year')
            ->with('sellPayments', fn($query) => $query->with('paymentMethod'))
            ->first();
    }

    /**
     * Define public method generatePDF()
     */
    public function generatePDF()
    {
        // $this->costing_details = [
        //     'client_name' => $this->client_name,
        //     'vehicle'     => $this->vehicle,
        //     'mobile'      => $this->mobile,
        //     'nid'         => $this->nid,
        //     'sell_price'  => $this->sell_price,
        //     'address'     => $this->address,
        // ];
        // $pdf = PDF::loadView('livewire.vehicle-management.stack.vehicle.vehicle-sell.partials.money-receipt-pdf', [$this->costing_details]);
        // return $pdf->download('itsolutionstuff.pdf');
        // Prepare the data for the PDF
        $costing_details = [
            'client_name' => $this->client_name,
            'vehicle'     => $this->vehicle,
            'mobile'      => $this->mobile,
            'nid'         => $this->nid,
            'sell_price'  => $this->sell_price,
            'address'     => $this->address,
        ];
        $data = ['one' => 1];

        // Load the view and pass the data
        $pdf = PDF::loadView('livewire.vehicle-management.stack.vehicle.vehicle-sell.partials.money-receipt-pdf', $data);

        // Provide a meaningful filename or make it dynamic
        $filename = 'vehicle-receipt-' . now()->format('YmdHis') . '.pdf';

        // Download the PDF file
        return $pdf->download($filename);
    }

    /**
     * Define public method save() to save the resourses
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
    }

    #[Title('Vehicle Sell')]
    public function render()
    {
        $this->client_name = $this->form->name;
        $this->mobile = $this->form->mobile;
        $this->nid = $this->form->nid;
        $this->sell_price = $this->form->sell_price;
        $this->address = $this->form->address;
        return view(
            'livewire.vehicle-management.stack.vehicle.vehicle-sell.create-vehicle-sell-component',
            [
                'client_name' => $this->client_name,
                'mobile' => $this->mobile,
                'nid' => $this->nid,
                'address' => $this->address,
            ]
        );
    }
}
