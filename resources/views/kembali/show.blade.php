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
 			<form action="{{route('kembali.update', $kembali->id)}}" method="POST">
 			<input type="hidden" name="_method" value="PUT">
 			<input type="hidden" name="_token" value="{{ csrf_token() }}">
 			
 			<div class="form-group">
				<label class="control-label">Tgl Pinjam</label>
				<select class="form-control" name="b" readonly="">
					@foreach($peminjam as $data)
					<option value="{{$data->id}}">{{$data->tgl_pinjam}} </option>
					@endforeach
				</select>
			
		
	

			<div class="form-group">
				<label class="control-label">Tgl Kembali </label>
				<input type="date" name="a" class="form-control" value="{{$kembali->tgl_kembali}}" readonly="">
			</div>
			
            
             <div class="form-group">
				<label class="control-label">Telat </label>
				<input type="number" name="c" class="form-control" value="{{$kembali->telat}}" readonly="">
			</div>
  

             <div class="form-group">
				<label class="control-label">Denda </label>
				<input type="text" name="d" class="form-control" value="{{$kembali->denda}}" readonly="">
			</div>
 
 				
 			</div>
 		</form>
 		</div>
 	</div>
 </div>
 </div>
 @endsection