@extends('layouts.master')

@section('content')
	@if(session('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		{{session('success')}}
		<button type="button" class="btn-close mt-n1" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@endif
	<div class="card">
		<div class="card-body">
			<div class="d-flex justify-content-between">
				<div class="col-10">
					<h3 class="pt-2 text-primary">Data SPP</h3>
				</div>
				<div class="col">
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Data SPP</button>
				</div>			
			</div>
			<table class="table mt-3 table-hover">
			<thead>
				<th>ID SPP</th>
				<th>TAHUN</th>
				<th>NOMINAL</th>
				<th>AKSI</th>
			</thead>
			 @foreach($data_spp as $spp)
			<tr>
				<td>{{$spp->id}}</td>
				<td>{{$spp->tahun}}</td>
				<td>@currency($spp->nominal)</td>
				<td>
					<a href="/spp/{{$spp->id}}/edit" class="btn btn-warning btn-sm me-2">Edit</a>
					<a href="/spp/{{$spp->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
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
				<h5 class="modal-title" id="exampleModalLabel">Tambahkan Data SPP</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="spp/create" method="POST">
				{{csrf_field()}}
					<div class="mb-3">
						<label for="tahun" class="form-label">Tahun</label>
						<input name="tahun" type="text" class="form-control" id="tahun">
					</div>
					<div class="mb-3">
						<label for="nominal" class="form-label"><strong>Nominal</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                            <input name="nominal" type="text" class="form-control" id="nominal">
                        </div>
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