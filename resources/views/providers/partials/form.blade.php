<div class="form-group">
	<label>Nombre</label>
	<div class="input-field">
	{!!Form::text('name',null,['id'=>'name', 'class'=>'form-control', 'placeholder'=>'Nombre o Razón Social', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	<label>Tipo de Documento</label>
	<div class="input-field">
		{!! Form::select('document_id', $documents, null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	<label>Documento</label>
	<div class="input-field">
	{!!Form::text('document',null,['id'=>'document', 'class'=>'form-control', 'placeholder'=>'Numero de documento', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	<label>Dirección</label>
	<div class="input-field">
	{!!Form::text('address',null,['id'=>'adress', 'class'=>'form-control', 'placeholder'=>'Dirección: Casa/Local, Calle/Av, Ciudad, Estado, País', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	<label>Teléfono</label>
	<div class="input-field">
	{!!Form::text('phone',null,['id'=>'phone', 'class'=>'form-control', 'placeholder'=>'Numero de Teléfono: 0123-456 78 90', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	<label>Correo</label>
	<div class="input-field">
	{!!Form::text('email',null,['id'=>'email', 'class'=>'form-control', 'placeholder'=>'Correo electrónico: usuario@email.com', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	<label>Banco</label>
	<div class="input-field">
	{!!Form::text('banck',null,['id'=>'banck', 'class'=>'form-control', 'placeholder'=>'Agencia Bancaria: BDV, Bicentenario', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	<label>Cuenta</label>
	<div class="input-field">
	{!!Form::text('acount',null,['id'=>'acount', 'class'=>'form-control', 'placeholder'=>'Numero de cuenta: 0175 1234 4567 8912', 'required'=>'required'])!!}
	</div>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary'])}}
</div>