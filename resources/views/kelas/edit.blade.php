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
			<div class="col">
    			<h3 class="pt-2 text-center text-primary">Edit Data Kelas</h3>
			</div>
        	<form action="/kelas/{{$kelas->id}}/update" method="POST">
				{{csrf_field()}}
					<div class="mb-3">
						<label for="nama_kelas" class="form-label"><strong>Nama Kelas</strong></label>
						<input name="nama_kelas" type="text" class="form-control" id="nama_kelas" value="{{$kelas->nama_kelas}}"> 
					</div>
					<div class="mb-3">
						<label for="kompetensi_keahlian" class="form-label"><strong>Kompetensi Keahlian</strong></label>
						<input name="kompetensi_keahlian" type="text" class="form-control" id="kompetensi_keahlian" value="{{$kelas->kompetensi_keahlian}}">
					</div>
					<div class="float-right">
						<button type="button" class="btn btn-secondary mr-3"><a href="/kelas">Back</a></button>
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
			</form>
		</div>
	</div>

@endsection