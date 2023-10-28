<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Arr;

class Dashboard extends Component
{

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
        return view('livewire.dashboard');
    }
}
