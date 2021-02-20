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
			<div class="col">
    			<h3 class="pt-2 text-center text-primary">Edit Data SPP</h3>
			</div>
        	<form action="/spp/{{$spp->id}}/update" method="POST">
				{{csrf_field()}}
					<div class="mb-3">
						<label for="tahun" class="form-label"><strong>Tahun</strong></label>
						<input name="tahun" type="text" class="form-control" id="tahun" value="{{$spp->tahun}}"> 
					</div>
					<div class="mb-3">
						<label for="nominal" class="form-label"><strong>Nominal</strong></label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                            <input name="nominal" type="text" class="form-control" id="nominal" value="{{$spp->nominal}}">
                        </div>
					</div>
					<div class="float-right">
						<button type="button" class="btn btn-secondary mr-3"><a href="/spp">Back</a></button>
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
			</form>
		</div>
	</div>

@endsection