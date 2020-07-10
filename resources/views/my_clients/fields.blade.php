<!-- Name Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::number('phone', null, ['class' => 'form-control', 'min' => '0', 'required' ]) !!}
</div>

<!-- Mail Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('mail', 'Correo electrónico:') !!}
    {!! Form::email('mail', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Comments Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comments', 'Comentarios:') !!}
    {!! Form::textarea('comments', null, ['class' => 'form-control', 'rows' => '4']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('myClients.index') }}" class="btn btn-default">Cancel</a>
</div>