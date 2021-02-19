@extends('layouts.master')

@section('content')
	@if(session('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{session('success')}}
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@endif
	<div class="card">
		<div class="card-body">
			<div class="d-flex justify-content-between">
				<div class="col-10">
					<h3 class="pt-2 text-primary">Data Kelas</h3>
				</div>
				<div class="col">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Data kelas</button>
				</div>			
			</div>
			<table class="table mt-3 table-hover">
			<thead>
				<th>ID</th>
				<th>NAMA KELAS</th>
				<th>KOMPETENSI KEAHLIAN</th>
				<th>AKSI</th>
			</thead>
			 @foreach($data_kelas as $kelas)
			<tr>
				<td>{{$kelas->id}}</td>
				<td>{{$kelas->nama_kelas}}</td>
				<td>{{$kelas->kompetensi_keahlian}}</td>
				<td>
					<a href="/kelas/{{$kelas->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
					<a href="/kelas/{{$kelas->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
				</td>
			</tr>
			 @endforeach
			</table>
		</div>
	</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambahkan Data Kelas</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="kelas/create" method="POST">
				{{csrf_field()}}
					<div class="mb-3">
						<label for="nama_kelas" class="form-label">Nama Kelas</label>
						<input name="nama_kelas" type="text" class="form-control" id="nama_kelas">
					</div>
					<div class="mb-3">
						<label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
						<input name="kompetensi_keahlian" type="text" class="form-control" id="kompetensi_keahlian">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection 