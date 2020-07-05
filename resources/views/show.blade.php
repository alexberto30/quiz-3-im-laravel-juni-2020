@extends('layouts.master')

@section('content')
	<div class="card-body">
		<h4>Judul: {{ $artikel->judul }}</h4>
	    <h6>slug: {{ $artikel->slug }}</h6>
	    <p>Isi: {{ $artikel->isi }}</p>
	    @php($tags = explode(' ', $artikel->tag))
	    @foreach ($tags as $tag)
	       <button href="#" class="btn btn-sm btn-success text-white">{{ $tag }}</button>
	    @endforeach		
	</div>    

	<form action="{{ url('artikel/' . $artikel->id)}}" method="POST">
	    @csrf
	    @method('delete')

	    <button type="submit" class="btn btn-danger mb-4">Hapus Artikel</button>
	</form>
@endsection