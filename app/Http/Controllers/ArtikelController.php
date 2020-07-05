<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    //

    public function index()
    {
        $data = ArtikelModel::get_all();
        return view('artikel.index', compact('data'));
    }
    public function tambah()
    {
        return view('artikel.tambah');
    }
    public function insert(Request $request)
    {
        $new_data = ArtikelModel::insert($request->all());

        return redirect('/artikel');
    }

    public function detail($id)
    {
        $data = ArtikelModel::detail($id)->first();
        $tag = explode(' ', $data->artikel_tag);
        // dd($tag);
        return view('artikel.detail', compact('data'), ['tag' => $tag]);
    }

    public function edit($id)
    {
        $data = ArtikelModel::detail($id)->first();
        return view('artikel.edit', compact('data'));
    }
    // public function update($id, Request $request)
    // {
    //     // $new_data = ArtikelModel::update($id, $data);
    //     // return redirect('/artikel/' . $request->tanya_id);
    //     $artikel = ArtikelModel::update($id, $request->all());

    //     return redirect('/artikel');
    // }
    public function update($id, Request $request)
    {
        // dd($request->all());
        $artikel = ArtikelModel::simpanupdate($id, $request->all());

        return redirect('/artikel');
    }

    public function destroy($id)
    {
        $deleted = ArtikelModel::destroy($id);

        return redirect('/artikel');
    }
    // public function delete($id)
    // {
    //     $new_data = ArtikelModel::delete($id);
    //     return redirect('/artikel');
    // }
}
