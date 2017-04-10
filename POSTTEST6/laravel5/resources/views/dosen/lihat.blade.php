@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('dosen')}}"><i style="color:#8a6d3b"
	class="fa text-default fa-chevron-left"></i></a>Detail Data dosen </strong>
	</div>
	<table class="table">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{$dosen->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{$dosen->password }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diperbarui Tanggal</td>
			<td class="col-xs-1">:</td>
			<td>{{$dosen->updated_at}}</td>
		</tr>
	</table>
</div>
@stop