@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 	<center><h1>Data Barang</h1></center>
 	<div class="panel panel-primary">
 		<div class="panel-heading">Data Barang
 		<div class="panel-title pull-right">
 			<a href="{{ URL::previous() }}">Kembali </a></div>
 		</div>

 		<div class="panel-body">
 			<form action="{{route('barang.update', $barang->id)}}" method="POST">
 			<input type="hidden" name="_method" value="PUT">
 			<input type="hidden" name="_token" value="{{ csrf_token() }}">
 			
 			<div class="form-group">
 				<label class="control-lable">Jenis Barang</label>
 				<input type="text" name="a" value="{{$barang->jenis_barang}}" class="form-control" readonly="">
 				</div>
		<div class="form-group">
 				<label class="control-lable">Nama Barang</label>
 				<input type="text" name="b" value="{{$barang->nama_barang}}" class="form-control" readonly="">
 				</div>

 		<div class="form-group">
 				<label class="control-lable">Stok</label>
 				<input type="text" name="c" value="{{$barang->stok}}" class="form-control" readonly="">
 				</div>
 		<div class="form-group">
 				<label class="control-lable">Jumlah</label>
 				<input type="text" name="d" value="{{$barang->jumlah}}" class="form-control" readonly="">
 				</div>
 		
 			
 				
 			</div>
 		</form>
 		</div>
 	</div>
 </div>
 </div>
 @endsection