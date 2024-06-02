<?php $__env->startComponent('components.main'); ?>

    <?php $__env->slot('title'); ?>
        Listado de Clientes
        <a href=" <?php echo e(route('clientes.create')); ?> " class="btn btn-secondary float-right">
            <i class="fas fa-plus"></i> Crear Cliente
        </a>
    <?php $__env->endSlot(); ?>

    <?php echo $__env->make('customers.filter_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"># de identificación</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr id="target<?php echo e($customer->id); ?>">
                    <th scope="row"><?php echo e($customer->id_number); ?></th>
                    <td><?php echo e($customer->name); ?></td>
                    <td><?php echo e($customer->last_name); ?></td>
                    <td>
                        <a href="<?php echo e(route('clientes.show', [$customer->id])); ?>" class="btn btn-outline-primary"><i class="fas fa-info-circle"></i> Ver más</a>
                        <a href="<?php echo e(route('clientes.edit', [$customer->id])); ?>" class="btn btn-outline-dark"><i class="fas fa-edit"></i> Editar</a>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('check-admin')): ?>
                            <a href="<?php echo e(route('clientes.destroy', [$customer->id])); ?>" class="btn btn-outline-danger" @click="getElementData" data-id="<?php echo e($customer->id); ?>" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i> Eliminar</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h3>No existen clientes almacenados en el sistema.</h3>
            <?php endif; ?>

            </tbody>
        </table>
    </div>

    <section class="d-flex justify-content-center">
        <?php echo e($customers->appends(request()->only('client_data'))->links()); ?>

    </section>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/resources/views/customers/index.blade.php ENDPATH**/ ?>