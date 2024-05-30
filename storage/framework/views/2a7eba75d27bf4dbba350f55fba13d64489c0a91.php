<?php echo Form::model(request()->all(), ['route' => 'mantenimientos.index', 'method' => 'GET', 'class' => 'form-inline']); ?>


    <?php echo Form::label('maintenance_name', 'Nombre del mantenimiento', ['class' => 'mr-sm-2 mb-sm-4']); ?>

    <?php echo Form::text('maintenance_name', null, [
        'placeholder' => 'Ingresa el nombre del mantenimiento',
        'class' => 'form-control mr-sm-2 mb-sm-4 col-md-4']); ?>


    <button type="submit" class="btn btn-primary mr-sm-2 mb-sm-4">
        <i class="fas fa-search"></i> Filtrar
    </button>
    <a href="<?php echo e(route('mantenimientos.index')); ?>" class="btn btn-dark mb-sm-4">
        <i class="fas fa-sync-alt"></i> Reiniciar
    </a>

<?php echo Form::close(); ?>

<?php /**PATH C:\laragon\www\devicecare\resources\views/maintenances/filter_form.blade.php ENDPATH**/ ?>