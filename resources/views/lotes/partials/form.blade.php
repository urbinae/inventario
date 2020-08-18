<div class="form-group">
	{{ Form::label('name', 'Nombre')}}
	{{ Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Ej: Mes-año', 'required'])}}
</div>
<div class="form-group">
	{{ Form::label('name', 'Costo fijo')}}
	{{ Form::text('costo_fijo_usd', null, ['class' => 'form-control', 'required'])}}
</div>
<!-- <div class="form-group">
	{{ Form::label('name', 'Costo del fijo (COP)')}}
	{{ Form::text('costo_fijo_cop', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
	{{ Form::label('name', 'Costo del fijo (BsS)')}}
	{{ Form::text('costo_fijo', null, ['class' => 'form-control'])}}
</div> -->
<div class="form-group">
	{{ Form::label('name', 'Costo variable')}}
	{{ Form::text('costo_variable_usd', null, ['class' => 'form-control', 'required'])}}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])}}
</div>