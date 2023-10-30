    <?php 
        $id = $id ?? $attributes?->whereStartsWith('wire:model')->first() 
    ?>

    <div class="drawer absolute z-50 <?php if($right): ?> drawer-end <?php endif; ?>">
        <!-- Toggle visibility  -->
        <input 
            id="<?php echo e($id); ?>" 
            type="checkbox" 
            class="drawer-toggle" 
            <?php echo e($attributes->whereStartsWith('wire:model')); ?> />

        <div class="drawer-side">
            <!-- Overlay effect , click outside -->                        
            <label for="<?php echo e($id); ?>" class="drawer-overlay"></label>

            <!-- Content -->
            <div <?php echo e($attributes->class(['bg-base-100 min-h-screen'])); ?>>
                <?php echo e($slot); ?>

            </div>
        </div>
    </div><?php /**PATH /var/www/finpal/storage/framework/views/45b88a4b4c3d1e6cb1ff5ad0078e48b7.blade.php ENDPATH**/ ?>