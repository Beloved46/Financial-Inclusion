<div>
    
    
         <?php $__env->slot('header', null, []); ?> 

           //
         <?php $__env->endSlot(); ?>
        <!--[if BLOCK]><![endif]--><?php if(session('success')): ?>
            <div class="toast toast-center toast-top">
            
                <div class="alert alert-success">
                <span><?php echo e(session('success')); ?></span>
                </div>
            </div>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--><?php if(session('error')): ?>
        <div class="toast toast-center toast-top">
        
            <div class="alert alert-error">
            <span><?php echo e(session('error')); ?></span>
            </div>
        </div>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]--> 
        <div class="py-12">

            <div class="container mx-auto mb-8 grid grid-cols-12 gap-4">
                <div class="col-span-8">
                    <div class="stats mb-5 text-primary-content" style="background-color: #7400B8;">
                        <div class="stats  mb-5 " style="background-color: #7400B8;">
  
                            <div class="stat">
                              <div class="stat-title text-white">Account balance</div>
                              <div class="stat-value">N <?php echo e(Auth::user()->account_balance ?? 0); ?></div>
                              <div class="stat-actions">
                                
            
                              </div>
                            </div>
                            
                            <div class="stat">
                              <div class="stat-title text-white">Wallet balance</div>
                              <div class="stat-value">N <?php echo e(Auth::user()->wallet->amount ?? 0); ?></div>
                              <div class="stat-actions">
                                <button class="btn btn-sm btn-success" onclick="modalwallet.showModal()">Fund wallet</button> 
            
                                <?php if (isset($component)) { $__componentOriginal89a573612f1f1cb2dd9fc072235d4356 = $component; } ?>
<?php $component = Mary\View\Components\Modal::resolve(['id' => 'modalwallet','title' => 'Fund wallet'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                   
                                    <?php if (isset($component)) { $__componentOriginal6bfd0631c6b8a47111403266db046f63 = $component; } ?>
<?php $component = Mary\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('wallet.fund')).'','method' => 'POST']); ?>
                                        <?php echo csrf_field(); ?>
                                        <?php if (isset($component)) { $__componentOriginalf51438a7488970badd535e5f203e0c1b = $component; } ?>
<?php $component = Mary\View\Components\Input::resolve(['label' => 'Amount','prefix' => 'NGN'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'amount','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf51438a7488970badd535e5f203e0c1b)): ?>
<?php $component = $__componentOriginalf51438a7488970badd535e5f203e0c1b; ?>
<?php unset($__componentOriginalf51438a7488970badd535e5f203e0c1b); ?>
<?php endif; ?>
            
                                        <select class="select select-primary mt-5 w-full max-w-xs" name="type" required>
                                            <option disabled selected>Select Account to fund wallet from</option>
                                            <option value="account_balance">Account Balance</option>
                                            <option value="savings">Savings</option>
                                        </select>
            
                                        
                                         <?php $__env->slot('actions', null, []); ?> 
                                            <?php if (isset($component)) { $__componentOriginal602b228a887fab12f0012a3179e5b533 = $component; } ?>
<?php $component = Mary\View\Components\Button::resolve(['label' => 'Cancel'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'modalwallet.close()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal602b228a887fab12f0012a3179e5b533)): ?>
<?php $component = $__componentOriginal602b228a887fab12f0012a3179e5b533; ?>
<?php unset($__componentOriginal602b228a887fab12f0012a3179e5b533); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginal602b228a887fab12f0012a3179e5b533 = $component; } ?>
<?php $component = Mary\View\Components\Button::resolve(['label' => 'Fund','spinner' => 'save'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn-md text-white','type' => 'submit','style' => 'background-color: #7400B8;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal602b228a887fab12f0012a3179e5b533)): ?>
<?php $component = $__componentOriginal602b228a887fab12f0012a3179e5b533; ?>
<?php unset($__componentOriginal602b228a887fab12f0012a3179e5b533); ?>
<?php endif; ?>
                                         <?php $__env->endSlot(); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bfd0631c6b8a47111403266db046f63)): ?>
<?php $component = $__componentOriginal6bfd0631c6b8a47111403266db046f63; ?>
<?php unset($__componentOriginal6bfd0631c6b8a47111403266db046f63); ?>
<?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89a573612f1f1cb2dd9fc072235d4356)): ?>
<?php $component = $__componentOriginal89a573612f1f1cb2dd9fc072235d4356; ?>
<?php unset($__componentOriginal89a573612f1f1cb2dd9fc072235d4356); ?>
<?php endif; ?>
                                
                              </div>
                            </div>
            
                            <div class="stat">
                                <div class="stat-title text-white">Savings</div>
                                <div class="stat-value">N <?php echo e(Auth::user()->savings ?? 0); ?></div>
                                <div class="stat-actions">
            
                                <button class="btn btn-sm" onclick="modalsavingw.showModal()">Withdraw</button> 
                                <?php if (isset($component)) { $__componentOriginal89a573612f1f1cb2dd9fc072235d4356 = $component; } ?>
<?php $component = Mary\View\Components\Modal::resolve(['id' => 'modalsavingw','title' => 'Fund wallet'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                   
                                    <?php if (isset($component)) { $__componentOriginal6bfd0631c6b8a47111403266db046f63 = $component; } ?>
<?php $component = Mary\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('withdraw-fund')).'','method' => 'POST']); ?>
                                        <?php echo csrf_field(); ?>
                                        <?php if (isset($component)) { $__componentOriginalf51438a7488970badd535e5f203e0c1b = $component; } ?>
<?php $component = Mary\View\Components\Input::resolve(['label' => 'Amount','prefix' => 'NGN'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'amount','max' => ''.e(Auth::user()->savings).'','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf51438a7488970badd535e5f203e0c1b)): ?>
<?php $component = $__componentOriginalf51438a7488970badd535e5f203e0c1b; ?>
<?php unset($__componentOriginalf51438a7488970badd535e5f203e0c1b); ?>
<?php endif; ?>
                                       
            
                                        
                                         <?php $__env->slot('actions', null, []); ?> 
                                            <?php if (isset($component)) { $__componentOriginal602b228a887fab12f0012a3179e5b533 = $component; } ?>
<?php $component = Mary\View\Components\Button::resolve(['label' => 'Cancel'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'modalsavingw.close()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal602b228a887fab12f0012a3179e5b533)): ?>
<?php $component = $__componentOriginal602b228a887fab12f0012a3179e5b533; ?>
<?php unset($__componentOriginal602b228a887fab12f0012a3179e5b533); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginal602b228a887fab12f0012a3179e5b533 = $component; } ?>
<?php $component = Mary\View\Components\Button::resolve(['label' => 'Withdaraw','spinner' => 'save'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn-md text-white ','type' => 'submit','style' => 'background-color: #7400B8;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal602b228a887fab12f0012a3179e5b533)): ?>
<?php $component = $__componentOriginal602b228a887fab12f0012a3179e5b533; ?>
<?php unset($__componentOriginal602b228a887fab12f0012a3179e5b533); ?>
<?php endif; ?>
                                         <?php $__env->endSlot(); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bfd0631c6b8a47111403266db046f63)): ?>
<?php $component = $__componentOriginal6bfd0631c6b8a47111403266db046f63; ?>
<?php unset($__componentOriginal6bfd0631c6b8a47111403266db046f63); ?>
<?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89a573612f1f1cb2dd9fc072235d4356)): ?>
<?php $component = $__componentOriginal89a573612f1f1cb2dd9fc072235d4356; ?>
<?php unset($__componentOriginal89a573612f1f1cb2dd9fc072235d4356); ?>
<?php endif; ?>
                                
                                  
                                <button class="btn btn-sm" onclick="modalwalletsavingsa.showModal()">Save</button> 
                                <?php if (isset($component)) { $__componentOriginal89a573612f1f1cb2dd9fc072235d4356 = $component; } ?>
<?php $component = Mary\View\Components\Modal::resolve(['id' => 'modalwalletsavingsa','title' => 'Add funds to Savings'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                   
                                    <?php if (isset($component)) { $__componentOriginal6bfd0631c6b8a47111403266db046f63 = $component; } ?>
<?php $component = Mary\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('save-fund')).'','method' => 'POST']); ?>
                                        <?php echo csrf_field(); ?>
                                        <?php if (isset($component)) { $__componentOriginalf51438a7488970badd535e5f203e0c1b = $component; } ?>
<?php $component = Mary\View\Components\Input::resolve(['label' => 'Amount','prefix' => 'NGN'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'amount','min' => '1000','max' => ''.e(Auth::user()->account_balance).'','placeholder' => ''.e(Auth::user()->account_balance).'','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf51438a7488970badd535e5f203e0c1b)): ?>
<?php $component = $__componentOriginalf51438a7488970badd535e5f203e0c1b; ?>
<?php unset($__componentOriginalf51438a7488970badd535e5f203e0c1b); ?>
<?php endif; ?>
            
                                        
                                        
                                         <?php $__env->slot('actions', null, []); ?> 
                                            <?php if (isset($component)) { $__componentOriginal602b228a887fab12f0012a3179e5b533 = $component; } ?>
<?php $component = Mary\View\Components\Button::resolve(['label' => 'Cancel'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'modalwalletsavingsa.close()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal602b228a887fab12f0012a3179e5b533)): ?>
<?php $component = $__componentOriginal602b228a887fab12f0012a3179e5b533; ?>
<?php unset($__componentOriginal602b228a887fab12f0012a3179e5b533); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginal602b228a887fab12f0012a3179e5b533 = $component; } ?>
<?php $component = Mary\View\Components\Button::resolve(['label' => 'Save','spinner' => 'save'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn-md text-white','type' => 'submit','style' => 'background-color: #7400B8;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal602b228a887fab12f0012a3179e5b533)): ?>
<?php $component = $__componentOriginal602b228a887fab12f0012a3179e5b533; ?>
<?php unset($__componentOriginal602b228a887fab12f0012a3179e5b533); ?>
<?php endif; ?>
                                         <?php $__env->endSlot(); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bfd0631c6b8a47111403266db046f63)): ?>
<?php $component = $__componentOriginal6bfd0631c6b8a47111403266db046f63; ?>
<?php unset($__componentOriginal6bfd0631c6b8a47111403266db046f63); ?>
<?php endif; ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89a573612f1f1cb2dd9fc072235d4356)): ?>
<?php $component = $__componentOriginal89a573612f1f1cb2dd9fc072235d4356; ?>
<?php unset($__componentOriginal89a573612f1f1cb2dd9fc072235d4356); ?>
<?php endif; ?>
                                
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-span-4 me-5">
                    <div class="rounded-full">
                        <img src="<?php echo e(asset('img/IMG_20231028_143902_597.jpg')); ?>" />
                    </div>
                </div>
            </div>
                <hr>

            <div class="max-w-7xl mt-8 mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-4">
                <!-- Left side with the card image -->
                <div class="w-full lg:col-span-1">
                    <div class="w-96 rounded-full mb-3 h-80">
                        
                         <?php if (isset($component)) { $__componentOriginal0733d91eecb57dd40f6337077004fe75 = $component; } ?>
<?php $component = Mary\View\Components\Chart::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('chart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Chart::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'myChart','class' => 'h-80']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0733d91eecb57dd40f6337077004fe75)): ?>
<?php $component = $__componentOriginal0733d91eecb57dd40f6337077004fe75; ?>
<?php unset($__componentOriginal0733d91eecb57dd40f6337077004fe75); ?>
<?php endif; ?>
                    </div>
                </div>
                
                <!-- Right side with statistics -->
                <div class="w-full lg:col-span-1 mt-5">
                    <!-- First row of statistics -->
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <?php if (isset($component)) { $__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5 = $component; } ?>
<?php $component = Mary\View\Components\Stat::resolve(['title' => 'Total Income','value' => ''.e(Auth::user()->account_balance ?? 0 + Auth::user()->wallet->amount ?? 0).'','icon' => 'o-arrow-trending-up','tooltipBottom' => 'There'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Stat::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-warning']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5)): ?>
<?php $component = $__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5; ?>
<?php unset($__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5); ?>
<?php endif; ?>
                        
                        <?php if (isset($component)) { $__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5 = $component; } ?>
<?php $component = Mary\View\Components\Stat::resolve(['title' => 'Total Expense','description' => 'This month','value' => ''.e(Auth::user()->expenses()->sum('amount') ?? 0).'','icon' => 'o-arrow-trending-down','tooltipLeft' => 'Ops!'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Stat::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-primary']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5)): ?>
<?php $component = $__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5; ?>
<?php unset($__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5); ?>
<?php endif; ?>
                    </div>
    
                    <!-- Second row of statistics -->
                    <div class="grid grid-cols-2 gap-4">
                        <?php if (isset($component)) { $__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5 = $component; } ?>
<?php $component = Mary\View\Components\Stat::resolve(['title' => 'Goals','description' => 'This Year','value' => '1,000,000','icon' => 'o-arrow-trending-down','color' => 'text-pink-500','tooltipRight' => 'Gosh!'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Stat::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-secondary']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5)): ?>
<?php $component = $__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5; ?>
<?php unset($__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5); ?>
<?php endif; ?>
    
                        <?php if (isset($component)) { $__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5 = $component; } ?>
<?php $component = Mary\View\Components\Stat::resolve(['title' => 'Savings','description' => 'This month','value' => ''.e(Auth::user()->savings ?? 0).'','icon' => 'o-arrow-trending-down','color' => 'text-pink-500','tooltipRight' => 'Gosh!'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Stat::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-info']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5)): ?>
<?php $component = $__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5; ?>
<?php unset($__componentOriginal8fc4ad737f3c40ff5ac76f434f4104b5); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="grid gap-5">
                    
                    
                </div>
            
            </div>
           
            <hr>
            <div class="container  mt-8 mx-auto grid grid-cols-12 gap-4">
               <div class="col-span-4"> 
                    <div class="card w-96 shadow-xl">
                        <ul class="menu bg-base-200  rounded-box">
                            <li>
                              <h2 class="menu-title text-lg">Scheduled Bill Payment</h2>
                              <ul>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $billPayments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="my-4"><button class="btn btn-neutral-content"><?php echo e($expense->name); ?><div class="badge">N <?php echo e($expense->amount); ?></div>
                                         <div class="badge badge-secondary"  onclick="modalPayE<?php echo e($expense->id); ?>.showModal()">pay</div></button>
                                    </li>

                                   
                                    <?php if (isset($component)) { $__componentOriginal89a573612f1f1cb2dd9fc072235d4356 = $component; } ?>
<?php $component = Mary\View\Components\Modal::resolve(['id' => 'modalPayE'.e($expense->id).'','title' => 'Are you sure you want to pay for '.e($expense->name).'?'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        Click "cancel" or press ESC to exit.
                                        <?php if (isset($component)) { $__componentOriginal6bfd0631c6b8a47111403266db046f63 = $component; } ?>
<?php $component = Mary\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('pay-expense', $expense)).'','method' => 'POST']); ?>
                                            <?php echo csrf_field(); ?>
                                             <?php $__env->slot('actions', null, []); ?> 
                                                
                                                <?php if (isset($component)) { $__componentOriginal602b228a887fab12f0012a3179e5b533 = $component; } ?>
<?php $component = Mary\View\Components\Button::resolve(['label' => 'Cancel'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'modalPayE'.e($expense->id).'.close()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal602b228a887fab12f0012a3179e5b533)): ?>
<?php $component = $__componentOriginal602b228a887fab12f0012a3179e5b533; ?>
<?php unset($__componentOriginal602b228a887fab12f0012a3179e5b533); ?>
<?php endif; ?>
                                                <?php if (isset($component)) { $__componentOriginal602b228a887fab12f0012a3179e5b533 = $component; } ?>
<?php $component = Mary\View\Components\Button::resolve(['label' => 'Pay','spinner' => 'save'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn-md text-white','type' => 'submit','style' => 'background-color: #7400B8;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal602b228a887fab12f0012a3179e5b533)): ?>
<?php $component = $__componentOriginal602b228a887fab12f0012a3179e5b533; ?>
<?php unset($__componentOriginal602b228a887fab12f0012a3179e5b533); ?>
<?php endif; ?>
                                             <?php $__env->endSlot(); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bfd0631c6b8a47111403266db046f63)): ?>
<?php $component = $__componentOriginal6bfd0631c6b8a47111403266db046f63; ?>
<?php unset($__componentOriginal6bfd0631c6b8a47111403266db046f63); ?>
<?php endif; ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89a573612f1f1cb2dd9fc072235d4356)): ?>
<?php $component = $__componentOriginal89a573612f1f1cb2dd9fc072235d4356; ?>
<?php unset($__componentOriginal89a573612f1f1cb2dd9fc072235d4356); ?>
<?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                <li class="my-4"><button class="btn btn-neutral-content">Groceries<div class="badge">N 300000</div><div class="badge badge-secondary">pay</div></button></li>
                                <li class="my-4"><button class="btn btn-neutral-content">Electricity<div class="badge">N 40000</div><div class="badge badge-secondary">pay</div></button></li>
                                <li class="my-4"><button class="btn btn-neutral-content">Pet Food<div class="badge">N 9000</div></button></li>
                                
                              </ul>
                            </li>
                            <div class="text-center text-lg font-bold"><a class="link link-hover" style="color: #7400B8;"  onclick="modalPayments.showModal()">+ App Payment</a></div>

                            <?php if (isset($component)) { $__componentOriginal89a573612f1f1cb2dd9fc072235d4356 = $component; } ?>
<?php $component = Mary\View\Components\Modal::resolve(['id' => 'modalPayments','title' => 'Add Expense'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                   
                                <?php if (isset($component)) { $__componentOriginal6bfd0631c6b8a47111403266db046f63 = $component; } ?>
<?php $component = Mary\View\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => ''.e(route('add-expense')).'','method' => 'POST']); ?>
                                    <?php echo csrf_field(); ?>
                                    <?php if (isset($component)) { $__componentOriginalf51438a7488970badd535e5f203e0c1b = $component; } ?>
<?php $component = Mary\View\Components\Input::resolve(['label' => 'Expense Name'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'name','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf51438a7488970badd535e5f203e0c1b)): ?>
<?php $component = $__componentOriginalf51438a7488970badd535e5f203e0c1b; ?>
<?php unset($__componentOriginalf51438a7488970badd535e5f203e0c1b); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginalf51438a7488970badd535e5f203e0c1b = $component; } ?>
<?php $component = Mary\View\Components\Input::resolve(['label' => 'Expense Amount'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'amount','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf51438a7488970badd535e5f203e0c1b)): ?>
<?php $component = $__componentOriginalf51438a7488970badd535e5f203e0c1b; ?>
<?php unset($__componentOriginalf51438a7488970badd535e5f203e0c1b); ?>
<?php endif; ?>
                                   
                                    
                                     <?php $__env->slot('actions', null, []); ?> 
                                        <?php if (isset($component)) { $__componentOriginal602b228a887fab12f0012a3179e5b533 = $component; } ?>
<?php $component = Mary\View\Components\Button::resolve(['label' => 'Cancel'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['onclick' => 'modalPayments.close()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal602b228a887fab12f0012a3179e5b533)): ?>
<?php $component = $__componentOriginal602b228a887fab12f0012a3179e5b533; ?>
<?php unset($__componentOriginal602b228a887fab12f0012a3179e5b533); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal602b228a887fab12f0012a3179e5b533 = $component; } ?>
<?php $component = Mary\View\Components\Button::resolve(['label' => 'Add Expense','spinner' => 'save'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn-md text-white','type' => 'submit','style' => 'background-color: #7400B8;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal602b228a887fab12f0012a3179e5b533)): ?>
<?php $component = $__componentOriginal602b228a887fab12f0012a3179e5b533; ?>
<?php unset($__componentOriginal602b228a887fab12f0012a3179e5b533); ?>
<?php endif; ?>
                                     <?php $__env->endSlot(); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bfd0631c6b8a47111403266db046f63)): ?>
<?php $component = $__componentOriginal6bfd0631c6b8a47111403266db046f63; ?>
<?php unset($__componentOriginal6bfd0631c6b8a47111403266db046f63); ?>
<?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89a573612f1f1cb2dd9fc072235d4356)): ?>
<?php $component = $__componentOriginal89a573612f1f1cb2dd9fc072235d4356; ?>
<?php unset($__componentOriginal89a573612f1f1cb2dd9fc072235d4356); ?>
<?php endif; ?>
                        </ul>

                        
                    </div>
               </div>

               <div class="col-span-8 ps-4">
                    <div class="card  shadow-xl">

                        <div class="overflow-x-auto">
                            <table class="table table-zebra bg-base-200  rounded-box">
                              <!-- head -->
                              <thead>
                                <tr>
                                  <th colspan="3"><h2 class="menu-title text-lg text-center">Recent Transactions</h2></th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                                <!-- row 1 -->
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    <td>#</td>
                                    <td class="<?php if($transaction->type == 'debit'): ?> text-error <?php else: ?> text-success <?php endif; ?>"><?php echo e($transaction->type); ?></td>
                                    <td><?php echo e($transaction->description); ?></td>
                                    <td>N <?php echo e($transaction->amount); ?></td>
                                    <td><?php echo e($transaction->reference_no); ?></td>
                                     <td><?php echo e(date_format(new DateTime($transaction->created_at), "d M Y, h:ia")); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                                
                              </tbody>
                              <div><?php echo e($transactions->links()); ?></div>
                            </table>
                            
                          </div>
                        
                    </div>
               </div>
            </div>
        </div>
       
    
</div>
<?php /**PATH /var/www/finpal/resources/views/livewire/dashboard.blade.php ENDPATH**/ ?>