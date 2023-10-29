    <div
        <?php echo e($attributes->class(["bg-base-100 rounded-lg px-5 py-4  w-full", "lg:tooltip lg:$tooltipPosition" => $tooltip])); ?>


        <?php if($tooltip): ?>
            data-tip="<?php echo e($tooltip); ?>"
        <?php endif; ?>
    >
        <div class="flex items-center gap-3">
            <!--[if BLOCK]><![endif]--><?php if($icon): ?>
                <div class="  <?php echo e($color); ?>">
                    <?php if (isset($component)) { $__componentOriginalce0070e6ae017cca68172d0230e44821 = $component; } ?>
<?php $component = Mary\View\Components\Icon::resolve(['name' => $icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-9 h-9']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce0070e6ae017cca68172d0230e44821)): ?>
<?php $component = $__componentOriginalce0070e6ae017cca68172d0230e44821; ?>
<?php unset($__componentOriginalce0070e6ae017cca68172d0230e44821); ?>
<?php endif; ?>
                </div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

            <div class="text-left">
                <!--[if BLOCK]><![endif]--><?php if($title): ?>
                    <div class="text-xs text-gray-500 whitespace-nowrap"><?php echo e($title); ?></div>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                <div class="font-black text-xl"><?php echo e($value ?? $slot); ?></div>

                <!--[if BLOCK]><![endif]--><?php if($description): ?>
                    <div class="stat-desc"><?php echo e($description); ?></div>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>

        <!--  Force tailwind compile tooltip classes   -->
        <span class="hidden">
            <span class="lg:tooltip lg:tooltip-left lg:tooltip-right lg:tooltip-bottom lg:tooltip-top"></span>
        </span>
    </div><?php /**PATH /var/www/finpal/storage/framework/views/bcb9be751ea22e48b0c4e7c5db4346d8.blade.php ENDPATH**/ ?>