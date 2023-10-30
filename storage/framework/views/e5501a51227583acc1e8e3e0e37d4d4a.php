    <?php foreach ((['activeBgColor' => 'bg-base-300']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

    <?php 
        $submenuActive = Str::contains($slot, 'mary-active-menu');                    
    ?>

    <li 
        x-data="
        { 
            show: <?php if($submenuActive): ?> true <?php else: ?> false <?php endif; ?>,
            toggle(){                            
                // From parent Sidebar
                if (this.collapsed) {
                    this.show = true
                    $dispatch('menu-sub-clicked');
                    return
                }   
                
                this.show = !this.show
            }                        
        }"
    >
        <details :open="show" <?php if($submenuActive): ?> open <?php endif; ?>>
            <summary @click.prevent="toggle()" class="<?php echo \Illuminate\Support\Arr::toCssClasses(["hover:text-inherit text-inherit", $activeBgColor => $submenuActive]); ?>">
                <?php if($icon): ?>
                    <?php if (isset($component)) { $__componentOriginalce0070e6ae017cca68172d0230e44821 = $component; } ?>
<?php $component = Mary\View\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'inline-flex']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0070e6ae017cca68172d0230e44821)): ?>
<?php $component = $__componentOriginalce0070e6ae017cca68172d0230e44821; ?>
<?php unset($__componentOriginalce0070e6ae017cca68172d0230e44821); ?>
<?php endif; ?>
                <?php endif; ?>    
                <span class="mary-hideable"><?php echo e($title); ?></span>                            
            </summary>
            <ul class="mary-hideable">
                <?php echo e($slot); ?>

            </ul>                        
        </details>
    </li>                <?php /**PATH /var/www/finpal/storage/framework/views/07ef0746260ead1d342603e29c81851f.blade.php ENDPATH**/ ?>