{!! Form::model(request()->all(), ['route' => 'clientes.index', 'method' => 'GET', 'class' => 'form-inline']) !!}

    {!! Form::label('client_data', 'Dato del cliente', ['class' => 'mr-sm-2 mb-sm-4']) !!}
    {!! Form::text('client_data', null, [
        'placeholder' => 'Ingresa el id, nombre o apellido del cliente',
        'class' => 'form-control mr-sm-2 mb-sm-4 col-md-4'])
    !!}

    <button type="submit" class="btn btn-primary mr-sm-2 mb-sm-4">
        <i class="fas fa-search"></i> Filtrar
    </button>
    <a href="{{ route('clientes.index') }}" class="btn btn-dark mb-sm-4">
        <i class="fas fa-sync-alt"></i> Reiniciar
    </a>

{!! Form::close() !!}
