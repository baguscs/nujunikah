<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\Event;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimoni::all();

        $title = 'Konfirmasi hapus testimoni!';
        $text = "Apakah anda yakin ingin menghapus data testimoni ini?";
        confirmDelete($title, $text);

        return view('testimoni.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::where('status', Event::STATUS_COMPLETED)->get();
        return view('testimoni.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client' => 'required',
            'ulasan' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Testimoni::create([
            'event_id' => $request->client,
            'ulasan' => $request->ulasan,
        ]);

        Alert::toast('Data Testimoni Berhasil Ditambahkan','success')->autoClose(5000)->position('top-right');

        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimoni $testimoni, $id)
    {
        $events = Event::where('status', Event::STATUS_COMPLETED)->get();
        $testimoni = Testimoni::find($id);
        return view('testimoni.edit', compact('testimoni', 'events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimoni $testimoni, $id)
    {
        $validator = Validator::make($request->all(), [
            'client' => 'required',
            'ulasan' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $testimoni = Testimoni::find($id);

        $testimoni->update([
            'event_id' => $request->client,
            'ulasan' => $request->ulasan,
        ]);

        Alert::toast('Data Testimoni Berhasil Diubah','success')->autoClose(5000)->position('top-right');

        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni, $id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();

        Alert::toast('Data Testimoni Berhasil Dihapus','success')->autoClose(5000)->position('top-right');

        return redirect()->route('testimonials.index');
    }
}
