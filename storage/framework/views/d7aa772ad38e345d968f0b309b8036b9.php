 <main class="<?php echo \Illuminate\Support\Arr::toCssClasses(["flex mx-auto", "max-w-screen-2xl" => !$fullWidth]); ?>">   
    
    <!-- SIDEBAR -->
    <?php if($sidebar): ?>                        
        <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(["h-screen sticky top-0", "top-20" => $withNav]); ?>">                                      
            <div>                                                                
                <div 
                    x-data="
                        {
                            collapsed: <?php echo e(cache('mary-sidebar-collapsed')); ?>,
                            collapseText: '<?php echo e($collapseText); ?>',
                            toggle() {
                                this.collapsed = !this.collapsed;     
                                fetch('/mary/toogle-sidebar?collapsed=' + this.collapsed); 
                            }
                        }"
                    @menu-sub-clicked="if(collapsed) { toggle() }"
                >
                    <div  
                        :class="collapsed 
                                    ? '!w-[70px] [&>*_summary::after]:!hidden [&_.mary-hideable]:!hidden [&_.display-when-collapsed]:!block [&_.hidden-when-collapsed]:!hidden' 
                                    : '!w-[270px] [&>*_summary::after]:!block [&_.mary-hideable]:!block [&_.hidden-when-collapsed]:!block [&_.display-when-collapsed]:!hidden'"                                        

                        <?php echo e($sidebar->attributes->class([
                                "hidden lg:block h-screen transition-all duration-100 ease-out overflow-y-auto overflow-x-hidden",
                                "pb-24" => $withNav,
                                "w-[70px] [&>*_summary::after]:hidden [&_.mary-hideable]:hidden [&_.display-when-collapsed]:block [&_.hidden-when-collapsed]:hidden" => cache('mary-sidebar-collapsed') == 'true',
                                "w-[270px] [&>*_summary::after]:block [&_.mary-hideable]:block [&_.hidden-when-collapsed]:block [&_.display-when-collapsed]:hidden" => cache('mary-sidebar-collapsed') != 'true'
                            ])); ?>                                  
                    >              
                        <?php echo e($sidebar); ?>


                        <!-- SIDEBAR COLLAPSE -->
                        <?php if($sidebar->attributes['collapsible']): ?>
                            <?php if (isset($component)) { $__componentOriginal5a2f10112e92a9c01ae3ba423b1cc044 = $component; } ?>
<?php $component = Mary\View\Components\Menu::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Menu::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'fixed bottom-0 hidden bg-inherit lg:block']); ?>
                                <?php if (isset($component)) { $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879 = $component; } ?>
<?php $component = Mary\View\Components\MenuItem::resolve(['icon' => 'o-bars-3-bottom-right','title' => ''.e($sidebar->attributes['collapse-text'] ?? $collapseText).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@click' => 'toggle']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879)): ?>
<?php $component = $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879; ?>
<?php unset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879); ?>
<?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a2f10112e92a9c01ae3ba423b1cc044)): ?>
<?php $component = $__componentOriginal5a2f10112e92a9c01ae3ba423b1cc044; ?>
<?php unset($__componentOriginal5a2f10112e92a9c01ae3ba423b1cc044); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </div>                    
                </div>
            </div>
        </div>                        
    <?php endif; ?>

    <!-- MAIN CONTENT -->
    <div <?php echo e($content->attributes->class(["min-h-screen mx-auto w-full p-5 lg:p-10"])); ?>>
        <?php echo e($content); ?>                        
    </div>              
                                                                       
    <!-- DRAWER FOR SIDEBAR -->
    <?php if($sidebar?->attributes['drawer']): ?> 
        <?php if (isset($component)) { $__componentOriginal40f76302556bfbc1c9486f0510e50a96 = $component; } ?>
<?php $component = Mary\View\Components\Drawer::resolve(['id' => ''.e($sidebar->attributes['drawer']).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Drawer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> 
            <?php echo e($sidebar); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal40f76302556bfbc1c9486f0510e50a96)): ?>
<?php $component = $__componentOriginal40f76302556bfbc1c9486f0510e50a96; ?>
<?php unset($__componentOriginal40f76302556bfbc1c9486f0510e50a96); ?>
<?php endif; ?>                        
    <?php endif; ?>
</main>   

 <!-- FOOTER -->
 <?php if($footer): ?>  
    <div 
        <?php echo e($footer->attributes->class([
                    "mx-auto w-full",
                    "max-w-screen-2xl" => !$fullWidth
                ])); ?>

    >
        <?php echo e($footer); ?>

    </div>
<?php endif; ?>                    <?php /**PATH /var/www/finpal/storage/framework/views/bd6ffe52c0900c14df67259dbace684b.blade.php ENDPATH**/ ?>