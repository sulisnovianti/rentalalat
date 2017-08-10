@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">

	<center><h1>Data Peminjam</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Peminjam</div>
	<div class="panel-title pull-right"><a href="/peminjam/create">Tambah Data</a></div>
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Tgl Pinjam</th>
					<th>Nama Anggota</th>
					<th>Jumlah Hari</th>
					<th>Jenis Barang</th>
					<th>Nama Barang</th>
					<th>Stok</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($peminjam as $data)
				<tr>
					<td>{{$data->tgl_pinjam}}</td>
					<td>{{$data->anggota->nama}} </td>
					<td>{{$data->jumlah_hari}}</td>
					<td>{{$data->barang->jenis_barang}}</td>
					<td>{{$data->barang->nama_barang}}</td>
					<td>{{$data->barang->stok}}</td>

       
                <td>
                <a class="btn btn-warning" href="/peminjam/{{$data->id}}/edit">Edit</a>
                </td>

                  <td>
                <a class="btn btn-primary" href="/peminjam/{{$data->id}}">show</a>
                </td>

                <td>
                	<form action="{{route('peminjam.destroy',$data->id)}}" method="post" >
          
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