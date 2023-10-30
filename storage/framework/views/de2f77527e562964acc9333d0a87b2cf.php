<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-theme="cupcake">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo e($title ?? 'FinPal'); ?></title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    </head>
    <body class="min-h-screen font-sans antialiased">
        <?php if (isset($component)) { $__componentOriginalc7e9ca4bc90f51d317ff9ec682225f58 = $component; } ?>
<?php $component = Mary\View\Components\Nav::resolve(['sticky' => true,'fullWidth' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Nav::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'pt-3  text-white','style' => 'background-color: #7400B8;']); ?>
 
             <?php $__env->slot('brand', null, []); ?> 
                
                <label for="main-drawer" class="lg:hidden mr-3">
                    <?php if (isset($component)) { $__componentOriginalce0070e6ae017cca68172d0230e44821 = $component; } ?>
<?php $component = Mary\View\Components\Icon::resolve(['name' => 'o-bars-3'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'cursor-pointer']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0070e6ae017cca68172d0230e44821)): ?>
<?php $component = $__componentOriginalce0070e6ae017cca68172d0230e44821; ?>
<?php unset($__componentOriginalce0070e6ae017cca68172d0230e44821); ?>
<?php endif; ?>
                </label>
         
                
               <h1 class="text-center text-lg font-bold items-center">Hi! <?php echo e(Auth::user()->name); ?></h1>

             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc7e9ca4bc90f51d317ff9ec682225f58)): ?>
<?php $component = $__componentOriginalc7e9ca4bc90f51d317ff9ec682225f58; ?>
<?php unset($__componentOriginalc7e9ca4bc90f51d317ff9ec682225f58); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal11da67fd6f50ab34ca1b98cbdd145132 = $component; } ?>
<?php $component = Mary\View\Components\Main::resolve(['fullWidth' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Main::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         
             <?php $__env->slot('sidebar', null, ['drawer' => 'main-drawer','collapsible' => true,'class' => 'pt-3  text-white','style' => 'background-color: #7400B8;']); ?> 
         
                
               
              
                <?php if (isset($component)) { $__componentOriginal5a2f10112e92a9c01ae3ba423b1cc044 = $component; } ?>
<?php $component = Mary\View\Components\Menu::resolve(['activateByRoute' => true,'activeBgColor' => 'bg-blue-50'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Menu::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ' mt-20 items-center']); ?>
 
                    
                    <?php if($user = auth()->user()): ?>
                        <div class="avatar">
                            <div class="w-24 rounded-full mb-3 h-20">
                            <img src="<?php echo e(asset('img/avatar.jpg')); ?>" />
                            </div>
                        </div>
                        <?php if (isset($component)) { $__componentOriginald82092fa13795886cb51cb7dc7d7b48e = $component; } ?>
<?php $component = Mary\View\Components\MenuSub::resolve(['title' => ''.e(Auth::user()->name).'','icon' => 'o-cog-6-tooth'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-sub'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuSub::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php if (isset($component)) { $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879 = $component; } ?>
<?php $component = Mary\View\Components\MenuItem::resolve(['title' => 'Profile','icon' => 'o-user','link' => ''.e(route('profile.edit')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879)): ?>
<?php $component = $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879; ?>
<?php unset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879); ?>
<?php endif; ?>
                            

                             <!-- Authentication -->
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>

                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.responsive-nav-link','data' => ['href' => route('logout'),'class' => 'text-white','onclick' => 'event.preventDefault();
                                                    this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'class' => 'text-white','onclick' => 'event.preventDefault();
                                                    this.closest(\'form\').submit();']); ?>
                                    <?php echo e(__('Logout')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </form>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald82092fa13795886cb51cb7dc7d7b48e)): ?>
<?php $component = $__componentOriginald82092fa13795886cb51cb7dc7d7b48e; ?>
<?php unset($__componentOriginald82092fa13795886cb51cb7dc7d7b48e); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879 = $component; } ?>
<?php $component = Mary\View\Components\MenuItem::resolve(['title' => ''.e(Auth::user()->email).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879)): ?>
<?php $component = $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879; ?>
<?php unset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879); ?>
<?php endif; ?>
                    <?php endif; ?>

                    
                    <?php if (isset($component)) { $__componentOriginal254139bd69d0def79ecb6c40efbc400d = $component; } ?>
<?php $component = Mary\View\Components\MenuSeparator::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-separator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuSeparator::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal254139bd69d0def79ecb6c40efbc400d)): ?>
<?php $component = $__componentOriginal254139bd69d0def79ecb6c40efbc400d; ?>
<?php unset($__componentOriginal254139bd69d0def79ecb6c40efbc400d); ?>
<?php endif; ?>

                    <?php if (isset($component)) { $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879 = $component; } ?>
<?php $component = Mary\View\Components\MenuItem::resolve(['title' => 'Home','icon' => 'o-home','link' => '/dashboard'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'font-bold']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879)): ?>
<?php $component = $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879; ?>
<?php unset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879 = $component; } ?>
<?php $component = Mary\View\Components\MenuItem::resolve(['title' => 'Transact','icon' => 'o-arrow-path-rounded-square','link' => '#'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'font-bold']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879)): ?>
<?php $component = $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879; ?>
<?php unset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879 = $component; } ?>
<?php $component = Mary\View\Components\MenuItem::resolve(['title' => 'Analysis','icon' => 'o-ticket','link' => '#'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'font-bold']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879)): ?>
<?php $component = $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879; ?>
<?php unset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879 = $component; } ?>
<?php $component = Mary\View\Components\MenuItem::resolve(['title' => 'Loans','icon' => 'o-hand-raised','link' => '#'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'font-bold']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879)): ?>
<?php $component = $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879; ?>
<?php unset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879 = $component; } ?>
<?php $component = Mary\View\Components\MenuItem::resolve(['title' => 'Settings','icon' => 'o-cog-6-tooth','link' => '#'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879)): ?>
<?php $component = $__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879; ?>
<?php unset($__componentOriginal7c3255ff27a5c6d076ca64dbcfc1f879); ?>
<?php endif; ?>
                 
                    <?php if (isset($component)) { $__componentOriginal254139bd69d0def79ecb6c40efbc400d = $component; } ?>
<?php $component = Mary\View\Components\MenuSeparator::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('menu-separator'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\MenuSeparator::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal254139bd69d0def79ecb6c40efbc400d)): ?>
<?php $component = $__componentOriginal254139bd69d0def79ecb6c40efbc400d; ?>
<?php unset($__componentOriginal254139bd69d0def79ecb6c40efbc400d); ?>
<?php endif; ?>
                 
                 
                    <div class="w-24 rounded-full mt-12 h-20">
                       <a href="<?php echo e(route('chat-bot')); ?>">
                        <img src="<?php echo e(asset('img/pngtree-smart-chatbot-cartoon-clipart-png-image_6620453.png')); ?>" />
                       </a>
                    </div>
                   
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a2f10112e92a9c01ae3ba423b1cc044)): ?>
<?php $component = $__componentOriginal5a2f10112e92a9c01ae3ba423b1cc044; ?>
<?php unset($__componentOriginal5a2f10112e92a9c01ae3ba423b1cc044); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
         
            
             <?php $__env->slot('content', null, []); ?> 
                <?php echo e($slot); ?> 
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11da67fd6f50ab34ca1b98cbdd145132)): ?>
<?php $component = $__componentOriginal11da67fd6f50ab34ca1b98cbdd145132; ?>
<?php unset($__componentOriginal11da67fd6f50ab34ca1b98cbdd145132); ?>
<?php endif; ?>

         
    </body>
</html>
<?php /**PATH /var/www/finpal/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>