<?php $__env->startComponent('components.main'); ?>

    <?php $__env->slot('title'); ?>
        Tipos de Mantenimientos
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('check-admin')): ?>
            <a href=" <?php echo e(route('mantenimientos.create')); ?> " class="btn btn-secondary float-right">
                <i class="fas fa-plus"></i> Crear Mantenimiento
            </a>
        <?php endif; ?>
    <?php $__env->endSlot(); ?>

    <?php echo $__env->make('maintenances.filter_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Precio</th>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('check-admin')): ?>
                    <th scope="col">Acciones</th>
                <?php endif; ?>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr id="target<?php echo e($maintenance->id); ?>">
                    <th><?php echo e($maintenance->name); ?></th>
                    <td><?php echo e($maintenance->price); ?></td>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('check-admin')): ?>
                        <td>
                            <a href="<?php echo e(route('mantenimientos.edit', [$maintenance])); ?>" class="btn btn-outline-dark"><i class="fas fa-edit"></i> Editar</a>
                            <a href="<?php echo e(route('mantenimientos.destroy', [$maintenance])); ?>" class="btn btn-outline-danger" @click="getElementData" data-id=<?php echo e($maintenance->id); ?> data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i> Eliminar</a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h3>No existen tipos almacenados en el sistema.</h3>
            <?php endif; ?>

            </tbody>
        </table>
    </div>

    <section class="d-flex justify-content-center">
        <?php echo e($maintenances->appends(request()->only('maintenance_name'))->links()); ?>

    </section>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\laratec\resources\views/maintenances/index.blade.php ENDPATH**/ ?>