<div class="form-group">
	<label>Producto</label>
	<div class="input-field">
		{!! Form::select('product_id', $products, null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	<label>Proveedor</label>
	<div class="input-field">
		{!! Form::select('provider_id', $providers, null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	<label>Precio</label>
	<div class="input-field">
	{!!Form::text('price',null,['id'=>'price', 'class'=>'form-control', 'placeholder'=>'Precio por Unidad: Precio/Kg, Precio/Caja, Precio/Unidades', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	<label>Cantidad</label>
	<div class="input-field">
	{!!Form::number('cant',null,['id'=>'cant', 'class'=>'form-control', 'placeholder'=>'Cantidad', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	<label>Unidad</label>
	<div class="input-field">
	{!!Form::text('unity',null,['id'=>'unity', 'class'=>'form-control', 'placeholder'=>'Unidad de Medida: Kg, Caja, Unidades', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])}}
</div>