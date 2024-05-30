<?php echo Form::model(request()->all(), ['route' => 'dispositivos.index', 'method' => 'GET', 'class' => 'form-inline']); ?>

    <?php echo Form::select('status', $status->get(), null, [
        'placeholder' => 'Seleccione un estado',
        'class' => 'form-control mr-sm-2 mb-sm-4']); ?>


    <?php echo Form::label('entry_date_from', 'Desde (F. entrada):', ['class' => 'mr-sm-2 mb-sm-4']); ?>

    <?php echo Form::date('entry_date_from', null, ['class' => 'form-control mr-sm-2 mb-sm-4']); ?>


    <?php echo Form::label('entry_date_to', 'Hasta (F. entrada):', ['class' => 'mr-sm-2 mb-sm-4']); ?>

    <?php echo Form::date('entry_date_to', null, ['class' => 'form-control mr-sm-2 mb-sm-4']); ?>


    <button type="submit" class="btn btn-primary mr-sm-2 mb-sm-4">
        <i class="fas fa-search"></i> Filtrar
    </button>
    <a href="<?php echo e(route('dispositivos.index')); ?>" class="btn btn-dark mb-sm-4">
        <i class="fas fa-sync-alt"></i> Reiniciar
    </a>

<?php echo Form::close(); ?>

<?php /**PATH C:\laragon\www\laratec\resources\views/devices/filter_form.blade.php ENDPATH**/ ?>