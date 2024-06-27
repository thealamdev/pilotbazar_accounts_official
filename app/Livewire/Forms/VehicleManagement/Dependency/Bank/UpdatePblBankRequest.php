<?php

namespace App\Livewire\Forms\VehicleManagement\Dependency\Bank;

use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdatePblBankRequest extends Form
{
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
    public $status;

    /**
     * Define public rules method
     * @return array
     */
    public function rules(): array
    {
        $arr['form.name'] = ['required'];
        $arr['form.account_number'] = ['required'];
        $arr['status'] = ['required'];

        return $arr;
    }

    /**
     * Define public attributes method
     * @return array
     */
    public function attributes(): array
    {
        $arr['form.name'] = 'name';
        $arr['form.account_number'] = 'account_number';
        $arr['form.status'] = 'status';

        return $arr;
    }
}
