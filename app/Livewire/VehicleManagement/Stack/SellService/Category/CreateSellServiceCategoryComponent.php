<?php

namespace App\Livewire\VehicleManagement\Stack\SellService\Category;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\VehicleManagement\SellService\Category\CreateSellServiceCategoryRequest;

class CreateSellServiceCategoryComponent extends Component
{
    /**
     * Define public form object CreateSellServiceCategoryRequest $form;
     */
    public CreateSellServiceCategoryRequest $form;

    /**
     * Define public method save() to store the resourses
     * @return void
     */
    public function save(): void
    {
        $this->form->validate();
    }
    
    #[Title('Create Sell Service Category')]
    public function render()
    {
        return view('livewire.vehicle-management.stack.sell-service.category.create-sell-service-category-component');
    }
}
