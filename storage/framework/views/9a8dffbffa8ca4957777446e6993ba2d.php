<?php if($sticky): ?>
    <div class="sticky top-0 z-10">
<?php endif; ?>

    <header <?php echo e($attributes->class(["bg-base-100 border-gray-100 border-b"])); ?>>
        <div class="mx-auto px-6 py-5 flex items-center <?php if(!$fullWidth): ?> max-w-screen-2xl <?php endif; ?>">
            <div <?php echo e($attributes->class(["flex-1 flex items-center"])); ?>>
                <?php echo e($brand); ?>

            </div>
            <div <?php echo e($attributes->class(["flex items-center gap-4"])); ?>>
                <?php echo e($actions); ?>

            </div>
        </div>
    </header>

<?php if($sticky): ?>
    </div>
<?php endif; ?><?php /**PATH /var/www/finpal/storage/framework/views/53b1cde025458454be5ce6dccefdcbf5.blade.php ENDPATH**/ ?>