@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">

	<center><h1>Data Barang</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Barang</div>
	<div class="panel-title pull-right"><a href="/barang/create">Tambah Data</a></div>
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
				    <th>Jenis Barang</th>
					<th>Nama Barang</th>
					<th>Stok</th>
					<th>Jumlah </th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($barang as $data)
				<tr>
					<td>{{$data->jenis_barang}}</td>
					<td>{{$data->nama_barang}}</td>
					<td>{{$data->stok}}</td>
					<td>{{$data->jumlah}}</td>
                <td>
                	                

                </td>
                <td>
                <a class="btn btn-warning" href="/barang/{{$data->id}}/edit">Edit</a>
                </td>

                  <td>
                <a class="btn btn-primary" href="/barang/{{$data->id}}">show</a>
                </td>



                <td>
                	<form action="{{route('barang.destroy',$data->id)}}" method="post" >
          
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