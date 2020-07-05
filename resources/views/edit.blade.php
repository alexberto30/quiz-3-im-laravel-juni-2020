@extends('layouts.master')

@section('content')

	<div class="card shadow mb-4">
	    <div class="card-body">
	        <form action="{{ url('artikel/' . $artikel->id)}}" method="POST">
	            @csrf
	            @method('put')
	            <div class="form-group">
	              <label for="judul">Judul</label>
	              <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul" value="{{ $artikel->judul }}" required>
	            </div>
	            <div class="form-group">
	              <label for="isi">Isi</label>
	              <textarea name="isi" id="isi" class="form-control" required placeholder="Isi Artikel">{{ $artikel->isi }}</textarea>
	            </div>
	            <div class="form-group">
	                <label for="tag">Tag</label>
	                <textarea name="tag" id="tag" class="form-control" required placeholder="Tag Artikel">{{ $artikel->tag }}</textarea>
	            </div>
	            <button type="submit" class="btn btn-primary">Submit</button>
	        </form>
	    </div>
	</div>
@endsection