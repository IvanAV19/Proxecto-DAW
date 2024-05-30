<?php $__env->startComponent('components.main'); ?>
    <?php $__env->slot('title'); ?>
        <?php echo e(!empty($maintenance) ? 'Editar ' : 'Crear '); ?> Tipo de mantenimiento
    <?php $__env->endSlot(); ?>

    <?php if(!empty($maintenance)): ?>
        <?php echo Form::model($maintenance, ['route' => ['mantenimientos.update', $maintenance->id], 'method' => 'put']); ?>

    <?php else: ?>
        <?php echo Form::open(['route' => 'mantenimientos.store', 'method' => 'post']); ?>

    <?php endif; ?>
            <div class="form-group">
                <?php echo Form::label('name', 'Nombre'); ?>

                <?php echo Form::text('name', null, [
                    'placeholder' => 'Ingresa el nombre del tipo de mantenimiento',
                    'class' => 'form-control '.(!empty($errors->first('name')) ? 'is-invalid' : '')]); ?>


                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('price', 'Precio'); ?>

                <?php echo Form::text('price', null, [
                    'placeholder' => 'Ingresa el precio del tipo de mantenimiento',
                    'class' => 'form-control '.(!empty($errors->first('price')) ? 'is-invalid' : '')]); ?>


                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> <?php echo e(!empty($maintenance) ? 'Actualizar ' : 'Guardar '); ?>

                </button>
                <a href=" <?php echo e(route('mantenimientos.index')); ?> " class="btn btn-secondary">
                    <i class="fas fa-undo"></i> Volver a mantenimientos
                </a>
            </div>

        <?php echo Form::close(); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\devicecare\resources\views/maintenances/create_or_edit.blade.php ENDPATH**/ ?>