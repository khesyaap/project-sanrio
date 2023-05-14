<?php

namespace App\Http\Controllers;

use App\Models\Sanrio;
use Illuminate\Http\Request;

class SanrioController extends Controller
{
    // untuk menampilkan data keseluruhannya
    public function index()
    {
       $sanrios = Sanrio::paginate(10);
       return view('sanrios.index', [
          'data' => $sanrios
       ]);
    }

    public function show($id)
    {
        $sanrio = Sanrio::find($id);
        return $sanrio;
    }

    // untuk direct viewnya ke formulir create data
    public function create()
    {
        return view('sanrios.create');
    }

    // logic untuk menyimpan data yang baru dibuat ke db
    public function store(Request $request)
    {
        // validasi kolom wajib diisi
        $request->validate([
            'name_product' => 'required',
            'price' => 'required',
            'desc' => 'required',
            'rate' => 'required'
        ]);

        Sanrio::create([
            'name_product' => $request->name_product,
            'price' => $request->price,
            'desc' => $request->desc,
            'rate' => $request->rate
        ]);
        return redirect('/sanrios');
    }

    // menampilkan view form untuk edit data
    public function edit(Request $request, $id)
    {
        $sanrio = Sanrio::find($id);
        return view('sanrios.edit', compact('sanrio'));
    }

    // logic mengubah data yang dipilih
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_product' => 'required',
            'price' => 'required',
        ]);
        $sanrio = $request->all();
        $sanrio = Sanrio::find($id);
        $sanrio -> update([
            'name_product' => $request->name_product,
            'price' => $request->price,
            'desc' => $request->desc,
            'rate' => $request->rate
        ]);
        return redirect ('/sanrios');
    }

    // menghapus data
    public function destroy($id)
    {
        $sanrio = Sanrio::find($id);
        $sanrio->delete();
        return redirect('/sanrios');
    }
}
