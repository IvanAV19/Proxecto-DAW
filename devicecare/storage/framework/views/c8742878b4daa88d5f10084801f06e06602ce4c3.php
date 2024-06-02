<?php echo Form::model(request()->all(), ['route' => 'tecnicos.index', 'method' => 'GET', 'class' => 'form-inline']); ?>


    <?php echo Form::label('tech_data', 'Dato del técnico', ['class' => 'mr-sm-2 mb-sm-4']); ?>

    <?php echo Form::text('tech_data', null, [
        'placeholder' => 'Ingresa el nombre, apellido o email del técnico',
        'class' => 'form-control mr-sm-2 mb-sm-4 col-md-4']); ?>


    <button type="submit" class="btn btn-primary mr-sm-2 mb-sm-4">
        <i class="fas fa-search"></i> Filtrar
    </button>
    <a href="<?php echo e(route('tecnicos.index')); ?>" class="btn btn-dark mb-sm-4">
        <i class="fas fa-sync-alt"></i> Reiniciar
    </a>

<?php echo Form::close(); ?>

<?php /**PATH /var/www/resources/views/technicians/filter_form.blade.php ENDPATH**/ ?>