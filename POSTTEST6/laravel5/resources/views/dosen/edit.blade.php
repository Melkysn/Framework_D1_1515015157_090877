@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('mahasiswa')}}">
<i style=="color:white;" class="fa text-default fa-chevron-left"></i>
</a>Perbarui Data mahasiswa</strong>
</div>
	{!! Form::open(['url'=>'mahasiswa/simpan','class'=>'form-horizontal']) !!}
		@include('mahasiswa.form')
		<div style="width:100%;text-align:right;">
			<button class="btn btn-info"><i class="fa fa-save"></i>
			Simpan </button>
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i>Ulangi</button>
		</div>
	{!! Form::close() !!}
	</div>
@stop