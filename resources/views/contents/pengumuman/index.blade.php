
@extends('layout/default')
@section('title','Pengumuman OLFAR')
@section('head')
<meta id="token" name="token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/kofein_pengumuman.css') }}">
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
@stop
@section('content')

 <div class="jumbotron custom-header" style="margin-bottom: 0;">
  <div class="container">
    <h1><span id="span-header">PENGUMUMAN OLFAR 2016!</span></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis doloribus, veritatis corporis deleniti voluptas temporibus illum cumque voluptates, cupiditate beatae aperiam fugit est, esse. Esse quae voluptate ullam et, animi..</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Beri Kami Feedback &raquo;</a></p>
  </div>
</div>

<div class="jumbotron">
	<div class="container">
		<form class="form-inline" id="form_peringkat" action="{{ URL('/') }}" method="POST">
			{!! Form::token() !!}
			<div class="form-group">
				<label for="no_induk">No induk</label>
				<input type="text" class="form-control" id="no_induk" name="no_induk" placeholder="XX-XX-XX-XXXX">
			</div>
			<button type="submit" class="btn btn-default">Lihat Peringkat Anda</button>
		</form>
	</div>
</div>

<div class="container">
	<!-- untuk cari urutan nasial -->
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
						<td>{{ ($id + 1) }}</td>
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

<!-- for pop up -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_peringkat">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Peringkat Nasional OLFAR 2016</h4>
      </div>
      <div class="modal-body">
        <p>Hasil Anda adalah sebagai berikut</p>
      	<table class="table table-bordered">
      		<thead>
      			<tr>
      				<td width="15%">Rank</td>
					<td width="30%">Nama</td>
					<td width="20%">No induk</td>
					<td width="30%">Asal Sekolah</td>
					<td width="10%">Point</td>
      			</tr>
      		</thead>
      		<tbody>
      			<tr>
      				<td id="m_rank" width="5%">Rank</td>
					<td id="m_nama">Nama</td>
					<td id="m_induk">No induk</td>
					<td id="m_asal">Asal Sekolah</td>
					<td id="m_point">Point</td>
      			</tr>
      		</tbody>
      	</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
        $('#tabel').DataTable();
    } );

    $('#form_peringkat').submit(function(e){
    	e.preventDefault();
    	var url = $(this).attr('action');
    	$.ajaxSetup({ headers: { 'X-CSRF-Token' : $('meta[name=token]').attr('content') } });
    	$.ajax({
    		type: "POST",
    		url: url,
    		data: $(this).serialize(),
    		success: function(data) {
    			$('#m_rank').html(data.rank);
    			$('#m_nama').html(data.name);
    			$('#m_induk').html(data.no_induk);
    			$('#m_asal').html(data.asal_sekolah);
    			$('#m_point').html(data.result);
    			$('#modal_peringkat').modal('show');
    		}
    	});
    });
</script>
<div style="margin-bottom:100px"></div>
<hr>
<div class="text-center" style="margin-bottom:25px">
	developed by <a href="http://haiunair.com">hai unair</a>
</div>

@endsection
