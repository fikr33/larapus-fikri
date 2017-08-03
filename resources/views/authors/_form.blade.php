<div class="form-group{{$error->has('name') ? 'has-error':''}}">
	{!! Form::label('name','Nama',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('name',null,['class'=>'form-control']) !!}
		{!! $error->first('name','<p class="help-block">message</p>')!!}
		}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-offset-2">
		{!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
	</div>
</div>