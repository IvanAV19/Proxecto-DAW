<?php $__env->startComponent('components.main'); ?>

    <?php $__env->slot('title'); ?>
        Listado de Técnicos
        <a href=" <?php echo e(route('tecnicos.create')); ?> " class="btn btn-secondary float-right">
            <i class="fas fa-plus"></i> Crear Técnico
        </a>
    <?php $__env->endSlot(); ?>

    <?php echo $__env->make('technicians.filter_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Avatar</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">E-mail</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $technicians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $technician): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr id="target<?php echo e($technician->id); ?>">
                    <th scope="row">
                        <?php if($technician->avatar == 'default'): ?>
                            <img src="<?php echo e(asset('/storage/default.png')); ?>" class="img-thumbnail" alt="Avatar" width="50" height="50">
                        <?php else: ?>
                            <img src="<?php echo e(asset('/storage/avatars/'.$technician->avatar)); ?>" alt="Avatar" class="img-thumbnail" width="50" height="50">
                        <?php endif; ?>
                    </th>
                    <td><?php echo e($technician->name); ?></td>
                    <td><?php echo e($technician->last_name); ?></td>
                    <td><?php echo e($technician->email); ?></td>
                    <td>
                        <a href="<?php echo e(route('tecnicos.show', [$technician->id])); ?>" class="btn btn-outline-primary"><i class="fas fa-info-circle"></i> Ver más</a>
                        <a href="<?php echo e(route('tecnicos.edit', [$technician->id])); ?>" class="btn btn-outline-dark"><i class="fas fa-edit"></i> Editar</a>
                        <a href="<?php echo e(route('tecnicos.destroy', [$technician->id])); ?>" class="btn btn-outline-danger" @click="getElementData" data-id=<?php echo e($technician->id); ?> data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i> Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h3>No existen técnicos almacenados en el sistema.</h3>
            <?php endif; ?>

            </tbody>
        </table>
    </div>

    <section class="d-flex justify-content-center">
        <?php echo e($technicians->appends(request()->only('tech_data'))->links()); ?>

    </section>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\devicecare\resources\views/technicians/index.blade.php ENDPATH**/ ?>