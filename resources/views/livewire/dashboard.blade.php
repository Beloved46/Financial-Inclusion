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

            <div class="container mx-auto mb-8 grid grid-cols-12 gap-4">
                <div class="col-span-8">
                    <div class="stats mb-5 text-primary-content" style="background-color: #7400B8;">
                        <div class="stats  mb-5 " style="background-color: #7400B8;">
  
                            <div class="stat">
                              <div class="stat-title text-white">Account balance</div>
                              <div class="stat-value">N {{ Auth::user()->account_balance ?? 0}}</div>
                              <div class="stat-actions">
                                {{-- <button class="btn btn-sm btn-success" onclick="modal17.showModal()">Add funds</button> --}}
            
                              </div>
                            </div>
                            
                            <div class="stat">
                              <div class="stat-title text-white">Wallet balance</div>
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
                                            <x-button label="Fund" class="btn-md text-white" type="submit" spinner="save" style="background-color: #7400B8;"/>
                                        </x-slot:actions>
                                    </x-form>
                                </x-modal>
                                
                              </div>
                            </div>
            
                            <div class="stat">
                                <div class="stat-title text-white">Savings</div>
                                <div class="stat-value">N {{ Auth::user()->savings ?? 0}}</div>
                                <div class="stat-actions">
            
                                <button class="btn btn-sm" onclick="modalsavingw.showModal()">Withdraw</button> 
                                <x-modal id="modalsavingw" title="Fund wallet">
                                   
                                    <x-form action="{{ route('withdraw-fund') }}" method="POST">
                                        @csrf
                                        <x-input label="Amount" name="amount" max="{{ Auth::user()->savings }}"  prefix="NGN" required/>
                                       
            
                                        {{-- <x-input label="Amount" wire:model="amount" prefix="USD" money hint="It submits an unmasked value" /> --}}
                                        <x-slot:actions>
                                            <x-button label="Cancel" onclick="modalsavingw.close()"/>
                                            <x-button label="Withdaraw" class="btn-md text-white " type="submit" spinner="save" style="background-color: #7400B8;"/>
                                        </x-slot:actions>
                                    </x-form>
                                </x-modal>
                                
                                  
                                <button class="btn btn-sm" onclick="modalwalletsavingsa.showModal()">Save</button> 
                                <x-modal id="modalwalletsavingsa" title="Add funds to Savings">
                                   
                                    <x-form action="{{ route('save-fund') }}" method="POST">
                                        @csrf
                                        <x-input label="Amount" name="amount" min="1000" max="{{ Auth::user()->account_balance }}" prefix="NGN" placeholder="{{ Auth::user()->account_balance }}" required/>
            
                                        {{-- <x-input label="Account Balance" name="amount" prefix="NGN" placeholder="{{ Auth::user()->account_balance }} "  /> --}}
                                        {{-- <x-input label="Amount" wire:model="amount" prefix="USD" money hint="It submits an unmasked value" /> --}}
                                        <x-slot:actions>
                                            <x-button label="Cancel" onclick="modalwalletsavingsa.close()"/>
                                            <x-button label="Save" class="btn-md text-white" type="submit" spinner="save" style="background-color: #7400B8;"/>
                                        </x-slot:actions>
                                    </x-form>
                                </x-modal>
                                
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-span-4 me-5">
                    <div class="rounded-full">
                        <img src="{{ asset('img/IMG_20231028_143902_597.jpg') }}" />
                    </div>
                </div>
            </div>
                <hr>

            <div class="max-w-7xl mt-8 mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-4">
                <!-- Left side with the card image -->
                <div class="w-full lg:col-span-1">
                    <div class="w-96 rounded-full mb-3 h-80">
                        {{-- <img src="{{ asset('img/credit-card-transparent-background-png.webp') }}" />
                         --}}
                         <x-chart wire:model="myChart" class="h-80" />
                    </div>
                </div>
                
                <!-- Right side with statistics -->
                <div class="w-full lg:col-span-1 mt-5">
                    <!-- First row of statistics -->
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <x-stat
                            title="Total Income"
                            {{-- description="This month" --}}
                            value="{{ Auth::user()->account_balance + Auth::user()->wallet->amount }}"
                            icon="o-arrow-trending-up"
                            tooltip-bottom="There" class="bg-warning" />
                        
                        <x-stat
                            title="Total Expense"
                            description="This month"
                            value="{{ Auth::user()->expenses()->sum('amount') ?? 0 }}"
                            icon="o-arrow-trending-down"
                            tooltip-left="Ops!" class="bg-primary"/>
                    </div>
    
                    <!-- Second row of statistics -->
                    <div class="grid grid-cols-2 gap-4">
                        <x-stat
                            title="Goals"
                            description="This Year"
                            value="1,000,000"
                            icon="o-arrow-trending-down"
                            class="text-orange-500"
                            color="text-pink-500"
                            tooltip-right="Gosh!"  class="bg-secondary"/>
    
                        <x-stat
                            title="Savings"
                            description="This month"
                            value="{{ Auth::user()->savings }}"
                            icon="o-arrow-trending-down"
                            class="text-orange-500"
                            color="text-pink-500"
                            tooltip-right="Gosh!"  class="bg-info"/>
                    </div>
                </div>
                <div class="grid gap-5">
                    {{-- <x-button label="Randomize" wire:click="randomize" class="btn-primary" spinner /> --}}
                    {{-- <x-button label="Switch" wire:click="switch" spinner /> --}}
                </div>
            
            </div>
           
            <hr>
            <div class="container mt-8 mx-auto grid grid-cols-12 gap-4">
               <div class="col-span-4"> 
                    <div class="card w-96 shadow-xl">
                        <ul class="menu bg-base-200  rounded-box">
                            <li>
                              <h2 class="menu-title text-lg">Scheduled Bill Payment</h2>
                              <ul>
                                @foreach ($billPayments as $expense)
                                    <li class="my-4"><button class="btn btn-neutral-content">{{ $expense->name }}<div class="badge">N {{ $expense->amount }}</div>
                                         <div class="badge badge-secondary"  onclick="modalPayE{{ $expense->id }}.showModal()">pay</div></button>
                                    </li>

                                   
                                    <x-modal id="modalPayE{{ $expense->id }}" title="Are you sure you want to pay for {{ $expense->name }}?">
                                        Click "cancel" or press ESC to exit.
                                        <x-form action="{{ route('pay-expense', $expense) }}" method="POST">
                                            @csrf
                                            <x-slot:actions>
                                                {{-- Note `onclick` is HTML --}}
                                                <x-button label="Cancel" onclick="modalPayE{{ $expense->id }}.close()" />
                                                <x-button label="Pay" class="btn-md text-white" type="submit" spinner="save" style="background-color: #7400B8;"/>
                                            </x-slot:actions>
                                        </x-form>
                                    </x-modal>
                                @endforeach
                                <li class="my-4"><button class="btn btn-neutral-content">Groceries<div class="badge">N 300000</div><div class="badge badge-secondary">pay</div></button></li>
                                <li class="my-4"><button class="btn btn-neutral-content">Electricity<div class="badge">N 40000</div><div class="badge badge-secondary">pay</div></button></li>
                                <li class="my-4"><button class="btn btn-neutral-content">Pet Food<div class="badge">N 9000</div></button></li>
                                
                              </ul>
                            </li>
                            <div class="text-center text-lg font-bold"><a class="link link-hover" style="color: #7400B8;"  onclick="modalPayments.showModal()">+ App Payment</a></div>

                            <x-modal id="modalPayments" title="Add Expense">
                                   
                                <x-form action="{{ route('add-expense') }}" method="POST">
                                    @csrf
                                    <x-input label="Expense Name" name="name"  required/>
                                    <x-input label="Expense Amount" name="amount"  required/>
                                   
                                    {{-- <x-input label="Amount" wire:model="amount" prefix="USD" money hint="It submits an unmasked value" /> --}}
                                    <x-slot:actions>
                                        <x-button label="Cancel" onclick="modalPayments.close()"/>
                                        <x-button label="Add Expense" class="btn-md text-white" type="submit" spinner="save" style="background-color: #7400B8;"/>
                                    </x-slot:actions>
                                </x-form>
                            </x-modal>
                        </ul>

                        
                    </div>
               </div>
            </div>
        </div>
       
    
</div>
