<?php

namespace App\Livewire\Forms\VehicleManagement\Modules\ModelYear;

use App\Models\VehicleManagement\Modules\ModelYear;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdateModelYearRequest extends Form
{
    /**
     * Define public property $ignore
     * @var string
     */
    public ?string $ignore;

    /**
     * Define the name property
     * @var string
     */
    public ?string $name = '';

    /**
     * Define the title property
     * @var string
     */
    public ?string $status = '';

    /**
     * Define public method rules()
     * @return array
     */
    public function rules(): array
    {
        $arr['form.name'] = ['required', 'max:4', Rule::unique(ModelYear::class, 'name')->ignore($this->ignore)];
        $arr['form.status'] = ['required', 'in:0,1'];

        return $arr;
    }

    /**
     * Define public method attributes()
     * @return array
     */
    public function attributes(): array
    {
        $attributes = [
            'form.name' => 'Name',
            'form.status' => 'Status'
        ];

        return $attributes;
    }
}
