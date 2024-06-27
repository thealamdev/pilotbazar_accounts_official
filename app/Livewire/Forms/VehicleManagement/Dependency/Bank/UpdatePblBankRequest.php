<?php

namespace App\Livewire\Forms\VehicleManagement\Dependency\Bank;

use App\Models\VehicleManagement\Dependency\Bank\PblBank;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdatePblBankRequest extends Form
{
    /**
     * Define public property to ignore to prevent this colum update
     * @var string
     */
    public ?string $ignore;

    /**
     * Define public property $name
     * @var string
     */
    public ?string $name;

    /**
     * Define public property $account_number
     * @var string
     */
    public ?string $account_number;

    /**
     * Define public property $status
     * @var string
     */
    public ?string $status;

    /**
     * Define public rules method
     * @return array
     */
    public function rules(): array
    {
        $arr['form.name'] = ['required', Rule::unique(PblBank::class, 'name')->ignore($this->ignore, 'id')];
        $arr['form.account_number'] = ['required', Rule::exists(PblBank::class, 'account_number')];
        $arr['form.status'] = ['required','in:0,1'];

        return $arr;
    }

    /**
     * Define public attributes method
     * @return array
     */
    public function attributes(): array
    {
        $attributes = [
            'form.name' => 'name',
            'form.account_number' => 'account_number',
            'form.status' => 'status'
        ];

        return $attributes;
    }
}
