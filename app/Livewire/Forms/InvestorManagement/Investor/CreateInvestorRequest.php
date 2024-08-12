<?php

namespace App\Livewire\Forms\InvestorManagement\Investor;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateInvestorRequest extends Form
{
    /**
     * Define validation property field
     */
    public $name, $email, $mobile, $amount, $address, $status;

    /**
     * Define public method rules()
     * @return void
     */
    public function rules(): array
    {
        $arr['form.name']       = ['required'];
        $arr['form.email']      = ['required'];
        $arr['form.mobile']     = ['required'];
        $arr['form.amount']     = ['required'];
        $arr['form.address']    = ['required'];
        $arr['form.status']     = ['required'];

        return $arr;
    }

    /**
     * Define the attributes method
     * @return array
     */
    public function attributes(): array
    {
        $arr['form.name']        = 'name';
        $arr['form.email']       = 'email';
        $arr['form.mobile']      = 'mobile';
        $arr['form.amount']      = 'amount';
        $arr['form.address']     = 'address';
        $arr['form.status']      = 'status';

        return $arr;
    }
}
