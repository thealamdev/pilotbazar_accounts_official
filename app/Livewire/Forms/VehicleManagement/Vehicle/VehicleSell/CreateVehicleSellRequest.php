<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle\VehicleSell;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateVehicleSellRequest extends Form
{
    /**
     * Define public property $name
     * @var string
     */
    #[Validate('required')]
    public ?string $name = '';

    /**
     * Define public property $mobile
     * @var string
     */
    #[Validate('required')]
    public ?string $mobile = '';

    /**
     * Define public property $nid
     * @var string
     */
    #[Validate('required')]
    public ?string $nid = '';

    /**
     * Define public property $sell_date
     * @var string
     */
    #[Validate('required')]
    public ?string $sell_date = '';

    /**
     * Define public property $sell_price
     * @var string
     */
    #[Validate('required')]
    public ?string $sell_price = '';

    /**
     * Define public property $address
     * @var string
     */
    #[Validate('required')]
    public ?string $address = '';

    /**
     * Define public property $status
     * @var string
     */
    #[Validate('required')]
    public ?string $status = '';
}
