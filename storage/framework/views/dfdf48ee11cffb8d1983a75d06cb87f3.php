    <div
        wire:key="<?php echo e($uuid); ?>-<?php echo e(rand()); ?>"
        x-data="{
            settings: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>,
            init(){
                new Chart($refs.chart, this.settings);
            }
        }"

        <?php echo e($attributes->class(["relative"])); ?>

    >
        <canvas x-ref="chart"></canvas>
    </div><?php /**PATH /var/www/finpal/storage/framework/views/2d45f9d04cd1ab379f0820a5d89829da.blade.php ENDPATH**/ ?>