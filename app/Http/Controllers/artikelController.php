<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function index() {
        $artikel = Artikel::all();

        return view('index', compact('artikel'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
    	$data = $request->except('_token');
    	Artikel::save($data);

    	return redirect('artikel');
    }

    public function show($id) {
    	$artikel = Artikel::findById($id);

    	if ($artikel) {
    		return view('show', compact('artikel'));
    	}
    }

    public function edit($id) {
    	$artikel = Artikel::findById($id);

    	if ($artikel) {
    		return view('edit', compact('artikel'));
    	}
    }

    public function update($id, Request $request) {
    	$artikel = Artikel::update($id, [
            'judul'=>($request->judul),
            'isi'=>($request->isi),
            'slug'=>($request->judul),
            'tag'=>($request->tag),
        ]);
        return redirect('/artikel');
    }

    public function destroy($id) {
    	$artikel = Artikel::findById($id);

    	if ($artikel) {
    		Artikel::delete($id);
    		return redirect('artikel/');
    	}
    }
}
