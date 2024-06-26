<?php $__env->startComponent('components.main'); ?>
    <?php $__env->slot('title'); ?>
        <?php echo e(!empty($customer) ? 'Editar ' : 'Crear '); ?> Cliente
    <?php $__env->endSlot(); ?>

    <?php if(!empty($customer)): ?>
        <?php echo Form::model($customer, ['route' => ['clientes.update', $customer->id], 'method' => 'put']); ?>

    <?php else: ?>
        <?php echo Form::open(['route' => 'clientes.store', 'method' => 'post']); ?>

    <?php endif; ?>
            <div class="form-group">
                <?php echo Form::label('name', 'Nombre'); ?>

                <?php echo Form::text('name', null, [
                    'placeholder' => 'Ingresa el nombre del cliente',
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
                    'placeholder' => 'Ingresa el apellido del cliente',
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
                <?php echo Form::label('id_number', 'Número de identificación'); ?>

                <?php echo Form::text('id_number', null, [
                    'placeholder' => 'Ingresa el número de identificación del cliente',
                    'class' => 'form-control '.(!empty($errors->first('id_number')) ? 'is-invalid' : '')]); ?>


                <?php $__errorArgs = ['id_number'];
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
                <?php echo Form::label('address', 'Dirección del cliente'); ?>

                <?php echo Form::textarea('address', null, [
                    'placeholder' => 'Ingresa la dirección del cliente',
                    'class' => 'form-control '.(!empty($errors->first('address')) ? 'is-invalid' : '')]); ?>


                <?php $__errorArgs = ['address'];
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
                <?php echo Form::label('phone', 'Número de teléfono'); ?>

                <?php echo Form::text('phone', null, [
                    'placeholder' => 'Ingresa el número de teléfono del cliente',
                    'class' => 'form-control '.(!empty($errors->first('phone')) ? 'is-invalid' : '')]); ?>


                <?php $__errorArgs = ['phone'];
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
                    <i class="fas fa-save"></i> <?php echo e(!empty($customer) ? 'Actualizar ' : 'Guardar '); ?>

                </button>
                <a href=" <?php echo e(route('clientes.index')); ?> " class="btn btn-secondary">
                    <i class="fas fa-undo"></i> Volver a clientes
                </a>
            </div>

        <?php echo Form::close(); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\laratec\resources\views/customers/create_or_edit.blade.php ENDPATH**/ ?>