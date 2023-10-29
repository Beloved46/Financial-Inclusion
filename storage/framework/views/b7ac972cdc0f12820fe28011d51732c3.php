    <?php foreach ((['activateByRoute' => false, 'activeBgColor' => 'bg-base-300']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

    <li>
        <a
            <?php echo e($attributes->class([
                    "my-0.5 hover:text-inherit rounded-md",
                    "mary-active-menu $activeBgColor" => ($active || ($activateByRoute && $routeMatches()))
                ])); ?>


            <?php if($link): ?>
                href="<?php echo e($link); ?>" wire:navigate
            <?php endif; ?>
        >
            <?php if($icon): ?>
                <?php if (isset($component)) { $__componentOriginalce0070e6ae017cca68172d0230e44821 = $component; } ?>
<?php $component = Mary\View\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0070e6ae017cca68172d0230e44821)): ?>
<?php $component = $__componentOriginalce0070e6ae017cca68172d0230e44821; ?>
<?php unset($__componentOriginalce0070e6ae017cca68172d0230e44821); ?>
<?php endif; ?>
            <?php endif; ?>

            <span class="mary-hideable whitespace-nowrap">
                <?php if($title): ?>
                    <?php echo e($title); ?>


                    <?php if($badge): ?>
                        <span class="badge badge-ghost badge-sm <?php echo e($badgeClasses); ?>"><?php echo e($badge); ?></span>
                    <?php endif; ?>
                <?php else: ?>
                    <?php echo e($slot); ?>

                <?php endif; ?>
            </span>
        </a>
    </li><?php /**PATH /var/www/finpal/storage/framework/views/0a0a8cd247b73120b237207c7e2e39fe.blade.php ENDPATH**/ ?>