<?php

namespace App\Livewire\InvestorManagement\Table\Investor;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\InvestorManagement\Investor;
use App\Services\InvestorManagement\Stack\Investor\DeleteInvestorService;

class TableInvestorComponent extends Component
{
    /**
     * Define public property $responses
     */
    public $responses;

    /**
     * public property $search
     * @var string
     */
    public ?string $search = '';

    /**
     * public delete method 
     * @return void
     */
    public function delete(string $id): void
    {
        $isDelete = DeleteInvestorService::erase($id);
        $response = $isDelete ? 'Record has been Delete !' : 'Something went wrong !';
        $this->dispatch('success', ['message' => $response]);
    }

    #[Title('Investors')]
    public function render()
    {
        $this->responses = Investor::query()
            ->latest()
            ->where('name', 'like', "%{$this->search}%")
            ->get();
        return view('livewire.investor-management.table.investor.table-investor-component', ['responses' => $this->responses]);
    }
}
