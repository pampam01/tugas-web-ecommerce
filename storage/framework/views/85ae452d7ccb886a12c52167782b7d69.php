<input
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
                'type' => 'hidden',
                $applyStateBindingModifiers('wire:model') => $getStatePath(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)
            ->class(['fi-fo-hidden'])); ?>

/>
<?php /**PATH D:\coding\smester-5\web programming\laravel prayitno 8020220066\testing\testing4\vendor\filament\forms\src\/../resources/views/components/hidden.blade.php ENDPATH**/ ?>