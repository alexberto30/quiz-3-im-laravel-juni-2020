@extends('layouts.master')

@section('content')
    <div>
        <a href="{{ url('artikel/create')}}" class="btn btn-primary mb-4">Tambah Artikel</a>
    </div>

    <div>
    	<div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Judul</th>
                  <th>Slug</th>
                  <th>Isi</th>
                  <th>Tag</th>
                  <th>Tanggal Dibuat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($artikel as $art)
                      <tr>
                        <td>{{ $art->judul }}</td>
                        <td>{{ $art->slug }}</td>
                        <td>{{ $art->isi }}</td>
                        <td>{{ $art->tag }}</td>
                        <td>{{ $art->created_at }}</td>
                        <td>
                            <a href="{{url('artikel/' . $art->id)}}" title="Detail"><button class="btn btn-secondary">Show</button></a>
                            <a href="{{url('artikel/' . $art->id . '/edit')}}" title="Edit"><button class="btn btn-warning">Edit</button></a>
                        </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
        </div>      
    </div>    
@endsection

@push('scripts')
	<script src="{{asset('/sbadmin2/js/swal.min.js')}}"></script>
	<script>
		Swal.fire({
	        title: 'Berhasil!',
	        text: 'Memasangkan script sweet alert',
	        icon: 'success',
	        confirmButtonText: 'Cool'
	    })
    </script>
@endpush