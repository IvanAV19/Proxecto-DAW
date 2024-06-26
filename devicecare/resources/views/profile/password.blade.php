
@component('components.main')
@slot('title')
    Editando mi contraseña
@endslot

    {!! Form::model(auth()->user(), ['route' => 'profile.update_password', 'method' => 'put', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('old_password', 'Contraseña actual') !!}
            {!! Form::password('password', [
                'placeholder' => 'Ingresa la contraseña actual',
                'class' => 'form-control '.(!empty($errors->first('old_password')) ? 'is-invalid' : '')])
            !!}

            @error('old_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', [
                'placeholder' => 'Ingresa la nueva contraseña',
                'class' => 'form-control '.(!empty($errors->first('password')) ? 'is-invalid' : '')])
            !!}

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirmar Contraseña') !!}
            {!! Form::password('password_confirmation', [
                'placeholder' => 'Confirme la nueva contraseña',
                'class' => 'form-control '.(!empty($errors->first('password_confirmation')) ? 'is-invalid' : '')])
            !!}

            @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Actualizar
            </button>
            <a href=" {{ route('profile.index') }} " class="btn btn-secondary">
                <i class="fas fa-undo"></i> Volver a mi perfil
            </a>
        </div>

    {!! Form::close() !!}
@endcomponent
