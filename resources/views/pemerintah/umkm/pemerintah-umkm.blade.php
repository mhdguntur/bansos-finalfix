@extends('layouts.pemerintah')

@section('content')
	<div class="row mt-4">
		<div class="col">
			<p class="text-secondary">Dashboard &nbsp; /
				&nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('pemerintah/umkm') }}" class="text-dark">Bantuan Sosial</a></span>
			</p>
			<div class="mt-2">
				@include('components.flash_message')
			</div>
		</div>
	</div>
	<div class="row d-flex justify-content-between mt-5">
		<div class="col-4">
			{{ $umkm->links() }}
		</div>
	</div>
	<div class="row mt-3">
		<div class="col">
			<div class="table-responsive">
				<table class="table">
					<thead class="rounded" style="background-color: #39E54E">
						<tr>
							<th>Nama Pemilik</th>
							<th>NIK</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody id="umkm">
						@forelse ($umkm as $data)
							<tr>
								<td>{{ $data->nama }}</td>
								<td>{{ $data->nik }}</td>
								<td>{{ $data->status }}</td>
								<td>
									<div class="d-flex">
										{{-- <a href="{{ route('umkm.show', $data->id) }}" class="btn btn-sm text-primary bg-none">Detail</a> --}}
										<a href="{{ route('umkm.edit', $data->id) }}" class="btn btn-sm text-warning bg-none">Edit</a>
										<form action="{{ route('umkm.destroy', $data->id) }}" method="post">
											@method('delete')
											@csrf
											<button onclick="return confirm('Apakah Anda Yakin?')" type="submit"
												class="btn btn-sm text-danger bg-none">Hapus</button>
										</form>
									</div>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="6">
									<h4 class="font-weight-bold text-center">Tidak ada UMKM terdaftar</h4>
								</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>

		</div>
	</div>
@endsection
