@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">

	<center><h1>Data Anggota</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Anggota</div>
	<div class="panel-title pull-right"><a href="/anggota/create">Tambah Data</a></div>
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
				    <th>Nama Anggota</th>
					<th>Jenis Kelamin</th>
					<th>Status</th>
										<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($anggota as $data)
				<tr>
					<td>{{$data->nama}}</td>
					<td>{{$data->jk}}</td>
					<td>{{$data->status}}</td>
                <td>
                	                

                </td>
                <td>
                <a class="btn btn-warning" href="/anggota/{{$data->id}}/edit">Edit</a>
                </td>

                  <td>
                <a class="btn btn-primary" href="/anggota/{{$data->id}}">show</a>
                </td>



                <td>
                	<form action="{{route('anggota.destroy',$data->id)}}" method="post" >
          
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