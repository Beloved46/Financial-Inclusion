<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

        <x-slot name="header">
            {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2> --}}
        </x-slot>
    
        <div class="py-12">
            <div class="mx-auto stats bg-primary text-primary-content">
  
                <div class="stat">
                  <div class="stat-title">Account balance</div>
                  <div class="stat-value">N {{ Auth::user()->account_balance }}</div>
                  <div class="stat-actions">
                    <button class="btn btn-sm btn-success">Add funds</button>
                  </div>
                </div>
                
                <div class="stat">
                  <div class="stat-title">Wallet balance</div>
                  <div class="stat-value">N89,400</div>
                  <div class="stat-actions">
                    <button class="btn btn-sm">Fund wallet</button> 
                  </div>
                </div>

                <div class="stat">
                    <div class="stat-title">Savings</div>
                    <div class="stat-value">N89,400</div>
                    <div class="stat-actions">
                      <button class="btn btn-sm">Withdraw</button> 
                    </div>
                </div>
                
               
                
            </div>


            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-4">
                <!-- Left side with the card image -->
                <div class="w-full lg:col-span-1">
                    <div class="w-96 rounded-full mb-3 h-80">
                        <img src="{{ asset('img/credit-card-transparent-background-png.webp') }}" />
                    </div>
                </div>
                
                <!-- Right side with statistics -->
                <div class="w-full lg:col-span-1 mt-5">
                    <!-- First row of statistics -->
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <x-stat
                            title="Total Income"
                            description="This month"
                            value="3,000,000"
                            icon="o-arrow-trending-up"
                            tooltip-bottom="There" class="bg-accent" />
                        
                        <x-stat
                            title="Total Expense"
                            description="This month"
                            value="34"
                            icon="o-arrow-trending-down"
                            tooltip-left="Ops!" class="bg-primary"/>
                    </div>
    
                    <!-- Second row of statistics -->
                    <div class="grid grid-cols-2 gap-4">
                        <x-stat
                            title="Goals"
                            description="This month"
                            value="500,000"
                            icon="o-arrow-trending-down"
                            class="text-orange-500"
                            color="text-pink-500"
                            tooltip-right="Gosh!"  class="bg-secondary"/>
    
                        <x-stat
                            title="Savings"
                            description="This month"
                            value="22.124"
                            icon="o-arrow-trending-down"
                            class="text-orange-500"
                            color="text-pink-500"
                            tooltip-right="Gosh!"  class="bg-info"/>
                    </div>
                </div>
                <div class="grid gap-5">
                    {{-- <x-button label="Randomize" wire:click="randomize" class="btn-primary" spinner /> --}}
                    <x-button label="Switch" wire:click="switch" spinner />
                </div>
            <x-chart wire:model="myChart" class="h-fit" />
            </div>
           
        </div>
       
    {{-- </x-layouts.app> --}}
    
</div>
