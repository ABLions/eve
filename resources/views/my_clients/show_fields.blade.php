<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $myClients->name }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $myClients->phone }}</p>
</div>

<!-- Mail Field -->
<div class="form-group">
    {!! Form::label('mail', 'Mail:') !!}
    <p>{{ $myClients->mail }}</p>
</div>

<!-- Comments Field -->
<div class="form-group">
    {!! Form::label('comments', 'Comments:') !!}
    <p>{{ $myClients->comments }}</p>
</div>

