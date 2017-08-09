@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Anggota</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Anggota
	<div class="panel-title pull-right">
		<a  href="{{ URL::previous() }}"> Kembali</a>
	</div></div>

	<div class="panel-body">
		<form action="{{route('anggota.store')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-label">Nama</label>
				<input type="text" name="a" class="form-control" required="">
			</div>

          
				<div class="form-group">
				<label class="control-label">Jenis Kelamin</label><br>
				<input name="b" type="radio" value="Laki-laki">laki-laki &nbsp&nbsp
				<input name="b" type="radio" value="Perempuan">Perempuan			</div>
            
            <div class="form-group">
				<label class="control-label">Status</label>
				<input type="text" name="c" class="form-control" required="">
			</div>
 
         
           

            <div class="form-group">
            	<button type="submit" class="btn btn-success">Simpan</button>
            	<button type="reset" class="btn btn-danger">Reset</button>
            </div>
            </form>
			</div>
	</div>
</div>
@endsection