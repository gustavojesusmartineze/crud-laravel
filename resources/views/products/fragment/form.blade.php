<div class="form-group">
    {!! Form::label('name','Product name') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('short','Product Short description') !!}
    {!! Form::text('short',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description','Product description') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('SEND',['class'=>'btn btn-primary']) !!}
</div>