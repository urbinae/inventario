<div class="form-group">
	<label>Nombre</label>
	<div class="input-field">
	{!!Form::text('name',null,['id'=>'name', 'class'=>'form-control', 'placeholder'=>'Nombre', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	<label>Categoría</label>
	<div class="input-field">
		{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])}}
</div>