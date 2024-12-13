<?php

namespace App\Http\Controllers;

use App\Models\Tips;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipses = Tips::all();

        $title = 'Konfirmasi hapus data tips!';
        $text = "Apakah anda yakin ingin menghapus data tips ini?";
        confirmDelete($title, $text);

        return view('tips.index', compact('tipses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tips.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Tips::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => time() . '-' . $request->file('foto')->getClientOriginalName(),
        ]);

        $path = $request->file('foto')->storeAs('tips', time() . '-' . $request->file('foto')->getClientOriginalName(), 'public');

        Alert::toast('Data Tips Berhasil Ditambahkan','success')->autoClose(5000)->position('top-right');

        return redirect()->route('tips.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tips $tips)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tips $tips, $id)
    {
        $tips = Tips::find($id);
        return view('tips.edit', compact('tips'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'file|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tips = Tips::find($id);
        $tips->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        if ($request->hasFile('foto')) {
           \Storage::disk('public')->delete('tips/' . $tips->gambar);
            $path = $request->file('foto')->storeAs('tips', time() . '-' . $request->file('foto')->getClientOriginalName(), 'public');
            $tips->gambar = basename($path);
            $tips->save();
        }

        Alert::toast('Data Tips Berhasil Diubah','success')->autoClose(5000)->position('top-right');

        return redirect()->route('tips.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tips $tips, $id)
    {
        $tips = Tips::find($id);
        \Storage::disk('public')->delete('tips/' . $tips->gambar);
        $tips->delete();

        Alert::toast('Data Tips Berhasil Dihapus','success')->autoClose(5000)->position('top-right');
        return redirect()->route('tips.index');
    }
}
