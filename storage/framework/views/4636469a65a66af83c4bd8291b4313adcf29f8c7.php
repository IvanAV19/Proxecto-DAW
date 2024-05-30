
<?php $__env->startComponent('components.main'); ?>
<?php $__env->slot('title'); ?>
    Editando mi contraseña
<?php $__env->endSlot(); ?>

    <?php echo Form::model(auth()->user(), ['route' => 'profile.update_password', 'method' => 'put', 'files' => true]); ?>


        <div class="form-group">
            <?php echo Form::label('old_password', 'Contraseña actual'); ?>

            <?php echo Form::password('password', [
                'placeholder' => 'Ingresa la contraseña actual',
                'class' => 'form-control '.(!empty($errors->first('old_password')) ? 'is-invalid' : '')]); ?>


            <?php $__errorArgs = ['old_password'];
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
            <?php echo Form::label('password', 'Contraseña'); ?>

            <?php echo Form::password('password', [
                'placeholder' => 'Ingresa la nueva contraseña',
                'class' => 'form-control '.(!empty($errors->first('password')) ? 'is-invalid' : '')]); ?>


            <?php $__errorArgs = ['password'];
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
            <?php echo Form::label('password_confirmation', 'Confirmar Contraseña'); ?>

            <?php echo Form::password('password_confirmation', [
                'placeholder' => 'Confirme la nueva contraseña',
                'class' => 'form-control '.(!empty($errors->first('password_confirmation')) ? 'is-invalid' : '')]); ?>


            <?php $__errorArgs = ['password_confirmation'];
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
                <i class="fas fa-save"></i> Actualizar
            </button>
            <a href=" <?php echo e(route('profile.index')); ?> " class="btn btn-secondary">
                <i class="fas fa-undo"></i> Volver a mi perfil
            </a>
        </div>

    <?php echo Form::close(); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\laratec\resources\views/profile/password.blade.php ENDPATH**/ ?>