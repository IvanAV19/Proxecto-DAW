{!! Form::model(request()->all(), ['route' => 'mantenimientos.index', 'method' => 'GET', 'class' => 'form-inline']) !!}

    {!! Form::label('maintenance_name', 'Nombre del mantenimiento', ['class' => 'mr-sm-2 mb-sm-4']) !!}
    {!! Form::text('maintenance_name', null, [
        'placeholder' => 'Ingresa el nombre del mantenimiento',
        'class' => 'form-control mr-sm-2 mb-sm-4 col-md-4'])
    !!}

    <button type="submit" class="btn btn-primary mr-sm-2 mb-sm-4">
        <i class="fas fa-search"></i> Filtrar
    </button>
    <a href="{{ route('mantenimientos.index') }}" class="btn btn-dark mb-sm-4">
        <i class="fas fa-sync-alt"></i> Reiniciar
    </a>

{!! Form::close() !!}
