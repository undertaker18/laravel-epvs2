{!! Form::open(['url' => route('upload'), 'method' => 'post', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('file', 'CSV File') !!}
        {!! Form::file('file', ['class' => 'form-control-file']) !!}
    </div>

    {!! Form::submit('Upload', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
