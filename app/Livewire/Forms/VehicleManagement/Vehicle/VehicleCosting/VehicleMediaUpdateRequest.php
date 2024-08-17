<?php

namespace App\Livewire\Forms\VehicleManagement\Vehicle\VehicleCosting;

use Illuminate\Support\Arr;
use Livewire\Attributes\Validate;
use Livewire\Form;

class VehicleMediaUpdateRequest extends Form
{
    /**
     * Define public property $id
     */
    #[Validate('required|string')]
    public ?string $id = '';
    /**
     * Define public property $costing_name
     * @var string
     */
    #[Validate('required|string|min:1')]
    public ?string $costing_name;

    /**
     * Define public property $date
     * @var string
     */
    #[Validate('required|string|min:1')]
    public ?string $date;

    /**
     * Define public property $amount
     * @var string
     */
    #[Validate('required|string|min:1')]
    public ?string $amount;

    /**
     * Define public property $remarks
     * @var string
     */
    #[Validate('nullable|string|min:1')]
    public ?string $remarks;
}
