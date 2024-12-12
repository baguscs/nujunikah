<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Event;
use App\Models\Detail_Gallery;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Konfirmasi hapus galeri!';
        $text = "Apakah anda yakin ingin menghapus data galeri ini?";
        confirmDelete($title, $text);

        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::where('status', Event::STATUS_COMPLETED)
            ->whereNotIn('id', function($query) {
                $query->select('event_id')->from('galleries');
            })
            ->get();
        return view('gallery.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $gallery = new Gallery();
        $gallery->event_id = $request->client;
        $gallery->foto = time() . '-' . $request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('gallery', $gallery->foto, 'public');
        $gallery->save();


        Alert::toast('Data Galleri Berhasil Ditambahkan','success')->autoClose(5000)->position('top-right');

        return redirect()->route('galleries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $events = Event::where('status', Event::STATUS_COMPLETED)->get();
        $detail_gallery = Detail_Gallery::where('gallery_id', $gallery->id)->get();

        return view('gallery.edit', compact('gallery', 'events', 'detail_gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validator = Validator::make($request->all(), [
            'client' => 'required',
            'foto' => 'nullable|file|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $gallery->event_id = $request->client;
        if ($request->hasFile('foto')) {
            \Storage::disk('public')->delete('gallery/' . $gallery->foto);
            $gallery->foto = time() . '-' . $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('gallery', $gallery->foto, 'public');
        }
        $gallery->save();

        // foreach ($request->file('photos') as $photo) {
        //     $detail_gallery = new Detail_Gallery();
        //     $detail_gallery->gallery_id = $gallery->id;
        //     $detail_gallery->image = time() . '-' . $photo->getClientOriginalName();
        //     $path = $photo->storeAs('gallery', $detail_gallery->image, 'public');
        //     $detail_gallery->save();
        // }

        Alert::toast('Data Galleri Berhasil Diubah','success')->autoClose(5000)->position('top-right');

        return redirect()->route('galleries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        \Storage::disk('public')->delete('gallery/' . $gallery->foto);
        $gallery->delete();
        Alert::toast('Data Galleri Berhasil Dihapus','success')->autoClose(5000)->position('top-right');
        return redirect()->route('galleries.index');
    }
}
