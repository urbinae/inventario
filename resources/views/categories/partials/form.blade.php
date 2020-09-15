<div class="form-group">
	{{ Form::label('name', 'Nombre de la Categoría')}}
	{{ Form::text('name', null, ['class' => 'form-control', 'required' => true])}}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])}}
</div>