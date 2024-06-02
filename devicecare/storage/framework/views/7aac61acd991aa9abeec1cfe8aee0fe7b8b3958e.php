<?php $status = app('App\Services\Status'); ?>

<?php $__env->startComponent('components.main'); ?>

    <?php $__env->slot('title'); ?>
        <?php echo app('translator')->get('general.Devices'); ?>
        <a href=" <?php echo e(route('dispositivos.create')); ?> " class="btn btn-secondary float-right">
            <i class="fas fa-plus"></i> Crear
        </a>
    <?php $__env->endSlot(); ?>

    <?php if(session()->has('message')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?>

    <?php echo $__env->make('devices.filter_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-4 col-device" id="target<?php echo e($device->id); ?>">
                <div class="card device">
                    <div class="card-body">
                        <h5 class="card-title">Cliente: <?php echo e($device->customer->name); ?></h5>
                        <p class="card-text"><?php echo e($device->description); ?></p>
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Estado: <span class="badge badge-pill badge-<?php echo e(config('status.'.$device->status)); ?>"><?php echo e($device->status); ?></span>
                        </li>
                    </ul>

                    <div class="card-footer">
                        <a href="<?php echo e(route('dispositivos.show', [$device->id])); ?>" class="btn btn-primary"><i class="fas fa-info-circle"></i> Ver más</a>
                        <a href="<?php echo e(route('dispositivos.edit', [$device->id])); ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('check-admin')): ?>
                            <a href="<?php echo e(route('dispositivos.destroy', [$device->id])); ?>" class="btn btn-danger" @click="getElementData" data-id="<?php echo e($device->id); ?>" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i> Eliminar</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h3>No existen datos para mostrar.</h3>
        <?php endif; ?>
    </div>

    <section class="d-flex justify-content-center">
        <?php echo e($devices->appends(request()->only('status', 'entry_date_from', 'entry_date_to'))->links()); ?>

    </section>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/resources/views/devices/index.blade.php ENDPATH**/ ?>