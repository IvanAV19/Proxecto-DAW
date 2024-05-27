{!! Form::model(request()->all(), ['route' => 'dispositivos.index', 'method' => 'GET', 'class' => 'form-inline']) !!}
    {!! Form::select('status', $status->get(), null, [
        'placeholder' => 'Seleccione un estado',
        'class' => 'form-control mr-sm-2 mb-sm-4'])
    !!}

    {!! Form::label('entry_date_from', 'Desde (F. entrada):', ['class' => 'mr-sm-2 mb-sm-4']) !!}
    {!! Form::date('entry_date_from', null, ['class' => 'form-control mr-sm-2 mb-sm-4']) !!}

    {!! Form::label('entry_date_to', 'Hasta (F. entrada):', ['class' => 'mr-sm-2 mb-sm-4']) !!}
    {!! Form::date('entry_date_to', null, ['class' => 'form-control mr-sm-2 mb-sm-4']) !!}

    <button type="submit" class="btn btn-primary mr-sm-2 mb-sm-4">
        <i class="fas fa-search"></i> Filtrar
    </button>
    <a href="{{ route('dispositivos.index') }}" class="btn btn-dark mb-sm-4">
        <i class="fas fa-sync-alt"></i> Reiniciar
    </a>

{!! Form::close() !!}
