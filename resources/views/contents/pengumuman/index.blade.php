
@extends('layout/default')
@section('title','Pengumuman OLFAR')
@section('head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/kofein_pengumuman.css') }}">
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
@stop
@section('content')

 <div class="jumbotron custom-header">
  <div class="container">
    <h1><span id="span-header">PENGUMUMAN OLFAR 2016!</span></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis doloribus, veritatis corporis deleniti voluptas temporibus illum cumque voluptates, cupiditate beatae aperiam fugit est, esse. Esse quae voluptate ullam et, animi..</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Beri Kami Feedback &raquo;</a></p>
  </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<table id="tabel" class="table table-bordered table-hover">
				<thead>
					<tr>
						<td width="5%">No</td>
						<td>Nama</td>
						<td>No induk</td>
						<td>Asal Sekolah</td>
						<td>Point</td>
					</tr>
				</thead>
				<tbody>
				@if( isset( $peserta ) )
				@foreach($peserta as $id => $value)
					<tr>
						<td>{{ $id }}</td>
						<td>{{ $value->name }}</td>
						<td>{{ $value->no_induk }}</td>
						<td>{{ $value->school_name }}</td>
						<td>{{ $value->result }}</td>
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
