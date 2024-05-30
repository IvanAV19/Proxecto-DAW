<?php $customers = app('App\Services\Customers'); ?>

<?php $__env->startComponent('components.main'); ?>

    <?php $__env->slot('title'); ?>
        Información del técnico
    <?php $__env->endSlot(); ?>

    <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-tech-tab" data-toggle="pill" href="#v-pills-tech" role="tab" aria-controls="v-pills-tech" aria-selected="true">Técnico</a>
            <a class="nav-link" id="v-pills-device-tab" data-toggle="pill" href="#v-pills-device" role="tab" aria-controls="v-pills-device" aria-selected="false">Dispositivos</a>
            <a class="nav-link" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer" aria-selected="false">Clientes atendidos</a>
          </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-tech" role="tabpanel" aria-labelledby="v-pills-tech-tab">
                    <table class="table table-bordered table-hover">
                        <tbody>
                          <tr>
                            <th>Nombre</th>
                            <td><?php echo e($technician->name); ?></td>
                          </tr>
                          <tr>
                            <th>Apellido</th>
                            <td><?php echo e($technician->last_name); ?></td>
                          </tr>
                          <tr>
                            <th>E-mail</th>
                            <td><?php echo e($technician->email); ?></td>
                          </tr>
                          <tr>
                            <th>Avatar</th>
                            <td>
                                <?php if($technician->avatar == 'default'): ?>
                                    <img src="<?php echo e(asset('/storage/default.png')); ?>" class="img-thumbnail" alt="Avatar" width="50" height="50">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('/storage/avatars/'.$technician->avatar)); ?>" alt="Avatar" class="img-thumbnail" width="50" height="50">
                                <?php endif; ?>
                            </td>
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
                            <?php $__currentLoopData = $technician->devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                <div class="tab-pane fade" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-customer-tab">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>E-mail</th>
                            <th>Ver más info</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $customers->getCustomersFromDevice($technician); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($customer->name); ?></th>
                                    <td><?php echo e($customer->last_name); ?></td>
                                    <td><?php echo e($customer->email); ?></td>
                                    <td><a href="<?php echo e(route('clientes.show', [$customer->id])); ?>" target="_blank">Ver cliente</a></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                </div>
            </div>
      </div>
    </div>
    <a href=" <?php echo e(route('tecnicos.index')); ?> " class="btn btn-secondary">
        <i class="fas fa-undo"></i> Volver a técnicos
    </a>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\devicecare\resources\views/technicians/info.blade.php ENDPATH**/ ?>