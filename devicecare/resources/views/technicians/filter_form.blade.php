{!! Form::model(request()->all(), ['route' => 'tecnicos.index', 'method' => 'GET', 'class' => 'form-inline']) !!}

    {!! Form::label('tech_data', 'Dato del técnico', ['class' => 'mr-sm-2 mb-sm-4']) !!}
    {!! Form::text('tech_data', null, [
        'placeholder' => 'Ingresa el nombre, apellido o email del técnico',
        'class' => 'form-control mr-sm-2 mb-sm-4 col-md-4'])
    !!}

    <button type="submit" class="btn btn-primary mr-sm-2 mb-sm-4">
        <i class="fas fa-search"></i> Filtrar
    </button>
    <a href="{{ route('tecnicos.index') }}" class="btn btn-dark mb-sm-4">
        <i class="fas fa-sync-alt"></i> Reiniciar
    </a>

{!! Form::close() !!}
