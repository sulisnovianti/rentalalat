@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">

	<center><h1>Data Pengembalian</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Pengembalian</div>
	<div class="panel-title pull-right"><a href="/kembali/create">Tambah Data</a></div>
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Tgl Pinjam</th>
					<th>Tgl Kembali</th>
					<th>Telat</th>
					<th>Denda</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($kembali as $data)
				<tr>
					<td>{{$data->peminjam->tgl_pinjam}} </td>
					<td>{{$data->tgl_kembali}}</td>
					<td>{{$data->telat}}</td>
					<td>{{$data->denda}}</td>
					
       
                <td>
                <a class="btn btn-warning" href="/kembali/{{$data->id}}/edit">Edit</a>
                </td>

                  <td>
                <a class="btn btn-primary" href="/kembali/{{$data->id}}">show</a>
                </td>

                <td>
                	<form action="{{route('kembali.destroy',$data->id)}}" method="post" >
          
                		<input type="hidden" name="_method"  value="DELETE">
                		<input type="hidden" name="_token" >
                		<input class="btn btn-danger" type="submit" value="Delete">
                		{{csrf_field()}}
                	</form>
                </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
@endsection