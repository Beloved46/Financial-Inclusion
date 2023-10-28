<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    
        <x-slot name="header">

           //
        </x-slot>
        @if (session('success'))
        <div class="toast toast-center toast-top">
        
            <div class="alert alert-success">
            <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="toast toast-center toast-top">
        
            <div class="alert alert-error">
            <span>{{ session('error') }}</span>
            </div>
        </div>
    @endif 
        <div class="py-12">
            <div class="mx-auto stats bg-primary text-primary-content">
  
                <div class="stat">
                  <div class="stat-title">Account balance</div>
                  <div class="stat-value">N {{ Auth::user()->account_balance ?? 0}}</div>
                  <div class="stat-actions">
                    {{-- <button class="btn btn-sm btn-success" onclick="modal17.showModal()">Add funds</button> --}}

                  </div>
                </div>
                
                <div class="stat">
                  <div class="stat-title">Wallet balance</div>
                  <div class="stat-value">N {{ Auth::user()->wallet->amount ?? 0 }}</div>
                  <div class="stat-actions">
                    <button class="btn btn-sm btn-success" onclick="modalwallet.showModal()">Fund wallet</button> 

                    <x-modal id="modalwallet" title="Fund wallet">
                        
                        
                        <x-form action="{{ route('wallet.fund') }}" method="POST">
                            @csrf
                            <x-input label="Amount" name="amount" prefix="NGN" required/>

                            <select class="select select-primary mt-5 w-full max-w-xs" name="type" required>
                                <option disabled selected>Select Account to fund wallet from</option>
                                <option value="account_balance">Account Balance</option>
                                <option value="savings">Savings</option>
                            </select>

                            {{-- <x-input label="Amount" wire:model="amount" prefix="USD" money hint="It submits an unmasked value" /> --}}
                            <x-slot:actions>
                                <x-button label="Cancel" onclick="modalwallet.close()"/>
                                <x-button label="Fund" class="btn-md btn-primary" type="submit" spinner="save" />
                            </x-slot:actions>
                        </x-form>
                    </x-modal>
                    
                  </div>
                </div>

                <div class="stat">
                    <div class="stat-title">Savings</div>
                    <div class="stat-value">N {{ Auth::user()->savings ?? 0}}</div>
                    <div class="stat-actions">
                      <button class="btn btn-sm">Withdraw</button> 
                      <button class="btn btn-sm">Save</button> 
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
