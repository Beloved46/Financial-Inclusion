    <ul <?php echo e($attributes->class(["menu rounded-md"])); ?> >
        <?php if($title): ?>
            <li class="menu-title text-inherit uppercase">
                <div class="flex items-center gap-2">

                    <?php if($icon): ?>
                        <?php if (isset($component)) { $__componentOriginalce0070e6ae017cca68172d0230e44821 = $component; } ?>
<?php $component = Mary\View\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 inline-flex']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0070e6ae017cca68172d0230e44821)): ?>
<?php $component = $__componentOriginalce0070e6ae017cca68172d0230e44821; ?>
<?php unset($__componentOriginalce0070e6ae017cca68172d0230e44821); ?>
<?php endif; ?>
                    <?php endif; ?>

                    <?php echo e($title); ?>

                </div>
            </li>
        <?php endif; ?>

        <?php if($separator): ?>
            <hr class="mb-3"/>
        <?php endif; ?>

        <?php echo e($slot); ?>

    </ul><?php /**PATH /var/www/finpal/storage/framework/views/8a2bca4f5077e269140c88079d3d3e0c.blade.php ENDPATH**/ ?>