<?php if (isset($component)) { $__componentOriginal511d4862ff04963c3c16115c05a86a9d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal511d4862ff04963c3c16115c05a86a9d = $attributes; } ?>
<?php $component = Illuminate\View\DynamicComponent::resolve(['component' => $getFieldWrapperView()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dynamic-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\DynamicComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['has-inline-label' => $hasInlineLabel(),'id' => $getId(),'label' => $getLabel(),'label-sr-only' => $isLabelHidden(),'helper-text' => $getHelperText(),'hint' => $getHint(),'hint-actions' => $getHintActions(),'hint-color' => $getHintColor(),'hint-icon' => $getHintIcon(),'hint-icon-tooltip' => $getHintIconTooltip(),'state-path' => $getStatePath()]); ?>
    <div
        <?php echo e($attributes
                ->merge($getExtraAttributes(), escape: false)
                ->class(['fi-fo-placeholder text-sm leading-6'])); ?>

    >
        <?php echo e($getContent()); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $attributes = $__attributesOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__attributesOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal511d4862ff04963c3c16115c05a86a9d)): ?>
<?php $component = $__componentOriginal511d4862ff04963c3c16115c05a86a9d; ?>
<?php unset($__componentOriginal511d4862ff04963c3c16115c05a86a9d); ?>
<?php endif; ?>
<?php /**PATH D:\coding\smester-5\web programming\laravel prayitno 8020220066\testing\testing4\vendor\filament\forms\src\/../resources/views/components/placeholder.blade.php ENDPATH**/ ?>