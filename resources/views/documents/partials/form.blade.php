<div class="form-group">
	{{ Form::label('name', 'Nombre')}}
	{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'CI, RIF, Pasaporte,...'])}}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])}}
</div>