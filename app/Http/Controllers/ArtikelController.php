<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{

    public function index()
    {
        $data = Artikel::get_all();
        return view('pages.index', compact('data'));
    }
    public function show($id)
    {
        $data = Artikel::get($id);
        return view('pages.show', compact('data'));
    }
    public function destroy($id)
    {
        Artikel::destroy($id);
        return redirect('/artikel');
    }
    public function edit($id)
    {
        $data = Artikel::get($id);
        return view('pages.edit_artikel', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => ['required', 'max:255'],
            'isi' => ['required', 'max:255'],
            'tag' => ['required', 'max:255'],
        ]);
        $take = strtolower($data['judul']);
        $split = explode(" ", $take);
        $slug = $split[0];
        if (count($split) > 1) {
            for ($i = 1; $i < count($split); $i++) {
                $slug .= "-" . $split[$i];
            }
        }
        $data['slug'] = $slug;
        $data = Artikel::edit($data, $id);
        return redirect('/artikel');
    }
    public function create()
    {
        return view('pages/create_artikel');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => ['required', 'max:255'],
            'isi' => ['required', 'max:255'],
        ]);
        $data = $request->all();
        unset($data["_token"]);
        $take = strtolower($data['judul']);
        $split = explode(" ", $take);
        $slug = $split[0];
        if (count($split) > 1) {
            for ($i = 1; $i < count($split); $i++) {
                $slug .= "-" . $split[$i];
            }
        }
        $data['slug'] = $slug;
        $item = Artikel::store($data);
        if ($item) {
            return redirect('/artikel');
        }
    }
}
