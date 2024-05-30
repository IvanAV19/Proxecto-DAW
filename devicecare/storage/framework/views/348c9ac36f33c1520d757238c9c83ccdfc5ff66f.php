<?php $__env->startComponent('components.main'); ?>
    <?php $__env->slot('title'); ?>
        <?php echo e(!empty($technician) ? 'Editar ' : 'Crear '); ?> Técnico
    <?php $__env->endSlot(); ?>

    <?php if(!empty($technician)): ?>
        <?php echo Form::model($technician, ['route' => ['tecnicos.update', $technician->id], 'method' => 'put', 'files' => true]); ?>

    <?php else: ?>
        <?php echo Form::open(['route' => 'tecnicos.store', 'method' => 'post', 'files' => true]); ?>

    <?php endif; ?>
            <div class="form-group">
                <?php echo Form::label('name', 'Nombre'); ?>

                <?php echo Form::text('name', null, [
                    'placeholder' => 'Ingresa el nombre del técnico',
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
                <?php echo Form::label('last_name', 'Apellido'); ?>

                <?php echo Form::text('last_name', null, [
                    'placeholder' => 'Ingresa el apellido del técnico',
                    'class' => 'form-control '.(!empty($errors->first('last_name')) ? 'is-invalid' : '')]); ?>


                <?php $__errorArgs = ['last_name'];
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
                <?php echo Form::label('email', 'Correo electrónico'); ?>

                <?php echo Form::email('email', null, [
                    'placeholder' => 'Ingresa el correo electrónico del cliente',
                    'class' => 'form-control '.(!empty($errors->first('email')) ? 'is-invalid' : '')]); ?>


                <?php $__errorArgs = ['email'];
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
                <?php echo Form::label('avatar_label', 'Avatar'); ?>

                <div class="custom-file">
                    <?php echo Form::file('avatar', ['id' => 'avatar', 'class' => 'custom-file-input '.((!empty($errors->first('avatar')) || session()->has('file_error') ? 'is-invalid' : ''))]);; ?>

                    <?php echo Form::label('avatar', 'Elige un archivo (jpg, jpeg, png, gif)', ['class' => 'custom-file-label']); ?>


                    <?php $__errorArgs = ['avatar'];
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

                    <?php if(session()->has('file_error')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e(session('file_error')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo Form::label('password', 'Contraseña'); ?>

                <?php echo Form::password('password', [
                    'placeholder' => 'Ingresa una contraseña',
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
                    'placeholder' => 'Confirme la contraseña',
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
                    <i class="fas fa-save"></i> <?php echo e(!empty($technician) ? 'Actualizar ' : 'Guardar '); ?>

                </button>
                <a href=" <?php echo e(route('tecnicos.index')); ?> " class="btn btn-secondary">
                    <i class="fas fa-undo"></i> Volver a técnicos
                </a>
            </div>

        <?php echo Form::close(); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\laratec\resources\views/technicians/create_or_edit.blade.php ENDPATH**/ ?>