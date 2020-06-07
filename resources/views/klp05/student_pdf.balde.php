<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan PDF Mahasiswa</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
					<th>No</th>
					<th>NIK</th>
					<th>NIM</th>
					<th>Name</th>
					<th>Address</th>
					<th>Photo</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($students as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->nik}}</td>
					<td>{{$p->nim}}</td>
					<td>{{$p->name}}</td>
					<td>{{$p->address}}</td>
					<td>{{$p->photo}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>