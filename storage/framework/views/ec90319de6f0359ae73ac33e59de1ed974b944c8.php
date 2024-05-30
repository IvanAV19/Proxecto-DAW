<?php $__env->startComponent('components.main'); ?>

    <?php $__env->slot('title'); ?>
        Información del dispositivo
    <?php $__env->endSlot(); ?>

    <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-device-tab" data-toggle="pill" href="#v-pills-device" role="tab" aria-controls="v-pills-device" aria-selected="true">Dispositivo</a>
            <a class="nav-link" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer" aria-selected="false">Cliente</a>
            <a class="nav-link" id="v-pills-technician-tab" data-toggle="pill" href="#v-pills-technician" role="tab" aria-controls="v-pills-technician" aria-selected="false">Técnico</a>
            <a class="nav-link" id="v-pills-maintenance-tab" data-toggle="pill" href="#v-pills-maintenance" role="tab" aria-controls="v-pills-maintenance" aria-selected="false">Servicios</a>
          </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-device" role="tabpanel" aria-labelledby="v-pills-device-tab">
                    <table class="table table-bordered table-hover">
                        <tbody>
                          <tr>
                            <th>Descripción</th>
                            <td><?php echo e($device->description); ?></td>
                          </tr>
                          <tr>
                            <th>Estado</th>
                            <td><span class="badge badge-pill badge-<?php echo e(config('status.'.$device->status)); ?>"><?php echo e($device->status); ?></span></td>
                          </tr>
                          <tr>
                            <th>Fecha de entrada</th>
                            <td><?php echo e($device->entry_date); ?></td>
                          </tr>
                          <tr>
                            <th>Fecha de salida</th>
                            <td><?php echo e(!empty($device->departure_date) ?$device->departure_date : '--'); ?></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="tab-pane fade" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-customer-tab">
                    <table class="table table-bordered table-hover">
                        <tbody>
                          <tr>
                            <th>Nombre del cliente</th>
                            <td><?php echo e($device->customer->name); ?></td>
                          </tr>
                          <tr>
                            <th>Apellido del cliente</th>
                            <td><?php echo e($device->customer->last_name); ?></td>
                          </tr>
                          <tr>
                            <th>Número de identificación</th>
                            <td><?php echo e($device->customer->id_number); ?></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="tab-pane fade" id="v-pills-technician" role="tabpanel" aria-labelledby="v-pills-technician-tab">
                    <table class="table table-bordered table-hover">
                        <tbody>
                          <tr>
                            <th>Nombre del técnico</th>
                            <td><?php echo e(is_null($device->user) ? 'Sin asignar' : $device->user->name); ?></td>
                          </tr>
                          <tr>
                            <th>Apellido del técnico</th>
                            <td><?php echo e(is_null($device->user) ? '--' : $device->user->last_name); ?></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <div class="tab-pane fade" id="v-pills-maintenance" role="tabpanel" aria-labelledby="v-pills-maintenance-tab">
                    <?php if($device->maintenances->isEmpty()): ?>
                        <h3>No tiene mantenimientos asignados.</h3>
                    <?php else: ?>
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Código</th>
                            <th>Tipo de Mantenimiento</th>
                            <th>Precio</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $device->maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th><?php echo e($maintenance->id); ?></th>
                                    <td><?php echo e($maintenance->name); ?></td>
                                    <td><?php echo e($maintenance->price); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                    <?php endif; ?>
                </div>
            </div>
      </div>
    </div>
    <a href=" <?php echo e(route('dispositivos.index')); ?> " class="btn btn-secondary">
        <i class="fas fa-undo"></i> Volver a dispositivos
    </a>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\laratec\resources\views/devices/info.blade.php ENDPATH**/ ?>