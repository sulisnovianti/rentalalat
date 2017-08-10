@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Kembali</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Kembali
	<div class="panel-title pull-right">
		<a  href="{{ URL::previous() }}"> Kembali</a>
	</div></div>

	<div class="panel-body">
		<form action="{{route('kembali.store')}}" method="post">
			{{csrf_field()}}

			<div class="form-group">
				<label class="control-label">Tgl Kembali </label>
				<input type="date" name="a" class="form-control" required="">
			</div>
			
              

				<div class="form-group">
				<label class="control-label">Tgl Pinjam </label>
				<input type="date" name="b" class="form-control" required="" >
			</div>
			

              

             <div class="form-group">
				<label class="control-label">Telat </label>
				<input type="number" name="c" class="form-control" required="">
			</div>
  

             <div class="form-group">
				<label class="control-label">Denda </label>
				<input type="text" name="d" class="form-control" required="">
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