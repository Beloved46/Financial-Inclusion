<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BillPayment;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Mary\Traits\Toast;

class Dashboard extends Component
{
    use WithPagination, Toast;
    
    public array $myChart = [
        'type' => 'pie',
        'data' => [
            'labels' => ['Savings', 'Goals', 'Expense'],
            'datasets' => [
                [
                    'label' => '# of Votes',
                    'data' => [32000, 45000, 50000],
                ]
            ]
        ]
    ];
     
    public function randomize()
    {
        Arr::set($this->myChart, 'data.datasets.0.data', [fake()->randomNumber(2), fake()->randomNumber(2), fake()->randomNumber(2)]);
    }
     
    public function switch()
    {
        $type = $this->myChart['type'] == 'bar' ? 'pie' : 'bar';
        Arr::set($this->myChart, 'type', $type);
    }

    
    public function render()
    {
        $billPayments = BillPayment::where('user_id', Auth::user()->id)->where('is_paid', false)->latest()->get();

        $transactions = Auth::user()->transactions()->latest()->paginate(10);
        
        return view('livewire.dashboard')->with([
            'billPayments' => $billPayments,
            'transactions' => $transactions,
        ]);
    }
}