<?php $__env->startComponent('components.main'); ?>

    <?php $__env->slot('title'); ?>
        Información del cliente
    <?php $__env->endSlot(); ?>

    <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer" aria-selected="true">Cliente</a>
            <a class="nav-link" id="v-pills-device-tab" data-toggle="pill" href="#v-pills-device" role="tab" aria-controls="v-pills-device" aria-selected="false">Dispositivos</a>
            <a class="nav-link" id="v-pills-technician-tab" data-toggle="pill" href="#v-pills-technician" role="tab" aria-controls="v-pills-technician" aria-selected="false">Atendido por</a>
          </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-customer-tab">
                    <table class="table table-bordered table-hover">
                        <tbody>
                          <tr>
                            <th>Nombre</th>
                            <td><?php echo e($customer->name); ?></td>
                          </tr>
                          <tr>
                            <th>Apellido</th>
                            <td><?php echo e($customer->last_name); ?></td>
                          </tr>
                          <tr>
                            <th>Número de identificación</th>
                            <td><?php echo e($customer->id_number); ?></td>
                          </tr>
                          <tr>
                            <th>E-mail</th>
                            <td><?php echo e($customer->email); ?></td>
                          </tr>
                          <tr>
                            <th>Dirección</th>
                            <td><?php echo e($customer->address); ?></td>
                          </tr>
                          <tr>
                            <th>Teléfono</th>
                            <td><?php echo e($customer->phone); ?></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="tab-pane fade" id="v-pills-device" role="tabpanel" aria-labelledby="v-pills-device-tab">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Tipos de Mantenimientos</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $customer->devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($device->description); ?></td>
                                    <td><span class="badge badge-pill badge-<?php echo e(config('status.'.$device->status)); ?>"><?php echo e($device->status); ?></span></td>
                                    <td>
                                        <ul>
                                            <?php $__currentLoopData = $device->maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($maintenance->name); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                </div>
                <div class="tab-pane fade" id="v-pills-technician" role="tabpanel" aria-labelledby="v-pills-technician-tab">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>E-mail</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $customer->devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($device->user->name ?? null); ?></th>
                                    <td><?php echo e($device->user->last_name ?? null); ?></td>
                                    <td><?php echo e($device->user->email ?? null); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                </div>
            </div>
      </div>
    </div>
    <a href=" <?php echo e(route('clientes.index')); ?> " class="btn btn-secondary">
        <i class="fas fa-undo"></i> Volver a clientes
    </a>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\laratec\resources\views/customers/info.blade.php ENDPATH**/ ?>