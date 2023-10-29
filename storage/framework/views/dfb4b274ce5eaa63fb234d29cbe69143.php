<dialog 
    <?php echo e($attributes->except('wire:model')->class(["modal"])); ?>

    
    <?php if($id): ?>
        id="<?php echo e($id); ?>"
    <?php else: ?>
        x-data="{open: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>.live }"                         
        :class="{'modal-open !animate-none': open}"
        :open="open"
        @keydown.escape.window = "$wire.<?php echo e($attributes->wire('model')->value()); ?> = false"
    <?php endif; ?>
>
    <div class="modal-box">
        <!--[if BLOCK]><![endif]--><?php if($title): ?>
            <?php if (isset($component)) { $__componentOriginal6f99ffca722ef3c8789c4087c5ac9f0d = $component; } ?>
<?php $component = Mary\View\Components\Header::resolve(['title' => $title,'subtitle' => $subtitle,'size' => 'text-2xl','separator' => $separator] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Mary\View\Components\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6f99ffca722ef3c8789c4087c5ac9f0d)): ?>
<?php $component = $__componentOriginal6f99ffca722ef3c8789c4087c5ac9f0d; ?>
<?php unset($__componentOriginal6f99ffca722ef3c8789c4087c5ac9f0d); ?>
<?php endif; ?>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

        <p class="">
            <?php echo e($slot); ?>

        </p>

        <!--[if BLOCK]><![endif]--><?php if($separator): ?> 
            <hr class="mt-5" /> 
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

        <div class="modal-action">
            <?php echo e($actions); ?>

        </div>
    </div>
</dialog><?php /**PATH /var/www/finpal/storage/framework/views/b0fe51e8a1274d62af4a282c968a4510.blade.php ENDPATH**/ ?>