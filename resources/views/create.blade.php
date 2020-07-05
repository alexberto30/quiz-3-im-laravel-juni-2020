@extends('layouts.master')

@section('content')
	<div class="card shadow mb-4">
	    <div class="card-body">
	        <form action="{{ url('artikel')}}" method="POST">
	            @csrf
	            <div class="form-group">
	              <label for="judul">Judul</label>
	              <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul">
	            </div>
	            <div class="form-group">
	              <label for="isi">Isi</label>
	              <textarea name="isi" id="isi" class="form-control" placeholder="Isi Artikel"></textarea>
	            </div>
	            <div class="form-group">
	                <label for="tag">Tag</label>
	                <input name="tag" id="tag" class="form-control" placeholder="Tag Artikel"></input>
	            </div>
	            <button type="submit" class="btn btn-primary">Submit</button>
	        </form>
	    </div>
	</div>
@endsection