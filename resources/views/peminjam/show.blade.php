@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 	<center><h1>Data Peminjam</h1></center>
 	<div class="panel panel-primary">
 		<div class="panel-heading">Data Peminjam
 		<div class="panel-title pull-right">
 			<a href="{{ URL::previous() }}">Kembali </a></div>
 		</div>

 		<div class="panel-body">
 			<form action="{{route('peminjam.update', $peminjam->id)}}" method="POST">
 			<input type="hidden" name="_method" value="PUT">
 			<input type="hidden" name="_token" value="{{ csrf_token() }}">
 			

<div class="form-group">
				<label class="control-label">Tgl Pinjam </label>
				<input type="date" name="a" value="{{$peminjam->tgl_pinjam}}" class="form-control" readonly="" >
			</div>
			
 			<div class="form-group">
				<label class="control-label">Nama Anggota</label>
				<select class="form-control" name="b" >
					@foreach($anggota as $data)
					<option value="{{$data->id}}">{{$data->nama}} </option>
					@endforeach
				</select>

				 <div class="form-group">
				<label class="control-label">Jumlah Hari </label>
				<input type="text" name="c" class="form-control"  value="{{$peminjam->jumlah_hari}}"   readonly="">
			</div>
            
            <div class="form-group">
				<label class="control-label">Nama Barang</label>
				<select class="form-control" name="d" >
					@foreach($barang as $data)
					<option value="{{$data->id}}">{{$data->nama_barang}} 
					{{$data->jenis_barang}} dan {{$data->jumlah}} </option>
					@endforeach
				</select>
 		
 			
 				
 			</div>
 		</form>
 		</div>
 	</div>
 </div>
 </div>
 @endsection