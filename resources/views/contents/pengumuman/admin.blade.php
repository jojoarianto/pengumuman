
@extends('layout/default')
@section('title','Pengumuman OLFAR')
@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css">
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
@stop
@section('content')

<div class="jumbotron custom-header">
  <div class="container">
    <h1>Selamat datang admin!</h1>
    <p>Silahkan menginput nama para finalis</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Beri Kami Feedback &raquo;</a></p>
  </div>
</div>
<div class="container">
	{!! Form::open(array('route' => 'admin.postFinalist')) !!}
	<h3>Please input </h3>
    {!! Form::label('name', 'Nama') !!}
    {!! Form::text('name', null, array('placeholder' => 'nama sekolah')) !!}
    {!! Form::label('name_school', 'Nama sekolah') !!}
    {!! Form::text('name_school', null, array('placeholder' => 'nama sekolah')) !!}
    {!! Form::submit('Click Me!') !!}
	{!! Form::close() !!}
	<hr>
	<br>
	<div class="row">
		<div class="col-md-10">
			<table id="tabel" class="table table-bordered table-hover">
				<thead>
					<tr>
						<td width="5%">No</td>
						<td>Nama</td>
						<td>Asal Sekolah</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
				@if( isset( $peserta ) )
				@foreach($peserta as $id => $value)
					<tr>
						<td>{{ $id }}</td>
						<td>{{ $value->name }}</td>
						<td>{{ $value->school_name }}</td>
						<td>
							<a href="#" class="btn btn-default">Edit</a>
							<a href="#" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				@endforeach
				@endif
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
    $(document).ready(function() {
        $('#tabel').DataTable();
    } );
</script>
<div style="margin-bottom:100px"></div>
@endsection
