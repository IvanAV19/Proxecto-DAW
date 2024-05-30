<?php $__env->startComponent('components.main'); ?>

    <?php $__env->slot('title'); ?>
        Mis datos
    <?php $__env->endSlot(); ?>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tbody>
              <tr>
                <th>Avatar</th>
                <td>
                    <?php if(auth()->user()->avatar == 'default'): ?>
                        <img src="<?php echo e(asset('/storage/default.png')); ?>" class="img-thumbnail" alt="Avatar" width="70" height="70">
                    <?php else: ?>
                        <img src="<?php echo e(asset('/storage/avatars/'.auth()->user()->avatar)); ?>" alt="Avatar" class="img-thumbnail" width="70" height="70">
                    <?php endif; ?>
                </td>
                </tr>
              <tr>
                <th>Nombre</th>
                <td><?php echo e(auth()->user()->name); ?></td>
              </tr>
              <tr>
                <th>Apellido</th>
                <td><?php echo e(auth()->user()->last_name); ?></td>
              </tr>
              <tr>
                <th>E-mail</th>
                <td><?php echo e(auth()->user()->email); ?></td>
              </tr>
            </tbody>
          </table>
    </div>

    <a href=" <?php echo e(url('/')); ?> " class="btn btn-secondary">
        <i class="fas fa-undo"></i> Volver al inicio
    </a>
    <a href=" <?php echo e(route('profile.edit')); ?> " class="btn btn-warning">
        <i class="fas fa-edit"></i> Editar datos personales
    </a>
    <a href=" <?php echo e(route('profile.password')); ?> " class="btn btn-warning">
        <i class="fas fa-lock"></i> Editar contraseña
    </a>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\laratec\resources\views/profile/index.blade.php ENDPATH**/ ?>