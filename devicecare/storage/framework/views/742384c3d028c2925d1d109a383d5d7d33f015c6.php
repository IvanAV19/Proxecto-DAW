<?php $status = app('App\Services\Status'); ?>
<?php $customers = app('App\Services\Customers'); ?>
<?php $technicians = app('App\Services\Technicians'); ?>
<?php $maintenances = app('App\Services\Maintenances'); ?>

<?php $__env->startComponent('components.main'); ?>
    <?php $__env->slot('title'); ?>
        <?php echo e(!empty($device) ? 'Editar ' : 'Crear '); ?> Dispositivo
    <?php $__env->endSlot(); ?>

    <?php if(!empty($device)): ?>
        <?php echo Form::model($device, ['route' => ['dispositivos.update', $device->id], 'method' => 'put']); ?>

    <?php else: ?>
        <?php echo Form::open(['route' => 'dispositivos.store', 'method' => 'post']); ?>

    <?php endif; ?>
            <div class="form-group">
                <?php echo Form::label('customer_id', 'Cliente'); ?>

                <?php echo Form::select('customer_id', $customers->get(), null, [
                    'placeholder' => 'Seleccione un cliente',
                    'class' => 'form-control '.(!empty($errors->first('customer_id')) ? 'is-invalid' : '')]); ?>


                <?php $__errorArgs = ['customer_id'];
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
                <?php if(auth()->user()->isAdmin()): ?>
                    <?php echo Form::label('user_id', 'Técnico'); ?>

                    <?php echo Form::select('user_id', $technicians->get(), null, [
                        'placeholder' => 'Seleccione un técnico',
                        'class' => 'form-control '.(!empty($errors->first('user_id')) ? 'is-invalid' : '')]); ?>


                    <?php $__errorArgs = ['user_id'];
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
                <?php endif; ?>
            </div>

            <div class="form-group">
                <?php echo Form::label('maintenance', 'Seleccione los tipos de mantenimientos'); ?>

                <?php echo Form::select('maintenances[]', $maintenances->get(), null, [
                    'id' => 'maintenance',
                    'class' => 'form-control '.(!empty($errors->first('maintenances')) ? 'is-invalid' : ''),
                    'multiple' => true,
                    'size' => 10]); ?>


                <?php $__errorArgs = ['maintenances'];
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
                <?php echo Form::label('description', 'Descripción'); ?>

                <?php echo Form::textarea('description', null, [
                    'placeholder' => 'Ingresa una descripción',
                    'class' => 'form-control '.(!empty($errors->first('description')) ? 'is-invalid' : '')]); ?>


                <?php $__errorArgs = ['description'];
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
            <?php if(!empty($device)): ?>
                <div class="form-group">
                    <?php echo Form::label('status', 'Estado del dispositivo'); ?>

                    <?php echo Form::select('status', $status->get(), null, [
                        'placeholder' => 'Seleccione un estado',
                        'class' => 'form-control '.(!empty($errors->first('status')) ? 'is-invalid' : '')]); ?>


                    <?php $__errorArgs = ['status'];
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
            <?php endif; ?>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> <?php echo e(!empty($device) ? 'Actualizar ' : 'Guardar '); ?>

                </button>
                <a href=" <?php echo e(route('dispositivos.index')); ?> " class="btn btn-secondary">
                    <i class="fas fa-undo"></i> Volver a dispositivos
                </a>
            </div>

        <?php echo Form::close(); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\laratec\resources\views/devices/create_or_edit.blade.php ENDPATH**/ ?>