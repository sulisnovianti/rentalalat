@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Barang
	<div class="panel-title pull-right">
		<a  href="{{ URL::previous() }}"> Kembali</a>
	</div></div>

	<div class="panel-body">
		<form action="{{route('barang.update',$barang->id)}}" method="POST">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{ csrf_token()}}">

			
				<div class="form-group">
				<label class="control-label">Jenis Barang</label><br>
				<select name="a" value="{{$barang->jenis_barang}}">
					<option value="Obeng">Obeng</option>
					<option value="Tang">Tang</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Kabel">kabel</option>
                    
				</select>
				<div class="form-group">
				<label class="control-label">Nama Barang</label>
				<input type="text" name="b" value="{{$barang->nama_barang}}" class="form-control" required="">
			</div>
            
            <div class="form-group">
				<label class="control-label">Stok</label>
				<input type="text" name="c" value="{{$barang->stok}}" class="form-control" required="">
			</div>
 
            <div class="form-group">
				<label class="control-label">Jumlah</label>
				<input type="text" name="d" value="{{$barang->jumlah}}" class="form-control" required="">
			</div>
           
            

            <div class="form-group">
            	<button type="submit" class="btn btn-success">Simpan</button>
            	<button type="reset" class="btn btn-danger">Reset</button>
            </div>
            </form>
			</div>
	</div>
	</div>
</div>

@endsection