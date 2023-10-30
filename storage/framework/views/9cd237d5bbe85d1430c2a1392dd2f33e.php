<div id="<?php echo e($anchor); ?>" <?php echo e($attributes->class(["mb-10", "mary-header-anchor" => $withAnchor])); ?>">
    <div class="flex flex-wrap gap-5 justify-between items-center">
        <div>
            <div class="<?php echo e($size); ?> font-extrabold">
                <!--[if BLOCK]><![endif]--><?php if($withAnchor): ?>
                    <a href="#<?php echo e($anchor); ?>">
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->

                <?php echo e($title); ?>


                <!--[if BLOCK]><![endif]--><?php if($withAnchor): ?>
                    </a>
                <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
            </div>

            <!--[if BLOCK]><![endif]--><?php if($subtitle): ?>
                <div class="text-gray-500 text-sm mt-1"><?php echo e($subtitle); ?></div>
            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
        </div>
        <div class="flex items-center justify-center gap-3 grow order-last sm:order-none">
            <div class="w-full lg:w-auto">
                <?php echo e($middle); ?>

            </div>
        </div>
        <div class="flex items-center gap-3">
            <?php echo e($actions); ?>

        </div>
    </div>

    <!--[if BLOCK]><![endif]--><?php if($separator): ?>
        <hr class="my-5" />

        <!--[if BLOCK]><![endif]--><?php if($progressIndicator): ?>
            <div class="h-0.5 -mt-9 mb-9">
                <progress
                    class="progress progress-primary w-full h-0.5 dark:h-1"
                    wire:loading

                    <?php if($progressTarget()): ?>
                        wire:target="<?php echo e($progressTarget()); ?>"
                     <?php endif; ?>></progress>
            </div>
        <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH /var/www/finpal/storage/framework/views/35ef7cf9aac91ac81248b8f80d8000fc.blade.php ENDPATH**/ ?>