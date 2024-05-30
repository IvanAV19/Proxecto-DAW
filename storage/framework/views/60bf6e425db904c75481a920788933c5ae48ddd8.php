<?php echo Form::model(request()->all(), ['route' => 'clientes.index', 'method' => 'GET', 'class' => 'form-inline']); ?>


    <?php echo Form::label('client_data', 'Dato del cliente', ['class' => 'mr-sm-2 mb-sm-4']); ?>

    <?php echo Form::text('client_data', null, [
        'placeholder' => 'Ingresa el id, nombre o apellido del cliente',
        'class' => 'form-control mr-sm-2 mb-sm-4 col-md-4']); ?>


    <button type="submit" class="btn btn-primary mr-sm-2 mb-sm-4">
        <i class="fas fa-search"></i> Filtrar
    </button>
    <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-dark mb-sm-4">
        <i class="fas fa-sync-alt"></i> Reiniciar
    </a>

<?php echo Form::close(); ?>

<?php /**PATH C:\laragon\www\laratec\resources\views/customers/filter_form.blade.php ENDPATH**/ ?>