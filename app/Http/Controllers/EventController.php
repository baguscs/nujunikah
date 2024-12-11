<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Vendor;
use App\Models\Client;
use App\Models\Detail_Event;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();

        $title = 'Konfirmasi hapus event!';
        $text = "Apakah anda yakin ingin menghapus data event ini?";
        confirmDelete($title, $text);

        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vendors = Vendor::all();
        return view('event.create', compact('vendors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => ['required'],
            'alamat' => ['required'],
            'no_hp' => ['required', 'numeric', 'digits:12'],
            'email' => ['required', 'email', 'unique:users'],
            'date' => ['required'],
            'budget' => ['required', 'numeric'],
            'pesan' => ['required'],
            'vanue' => ['required'],
            'catering' => ['required'],
            'decoration' => ['required'],
            'photo' => ['required'],
            'mua' => ['required'],
            'entertainment' => ['required'],
        ]);

        if ($validator->fails()) {

            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->route('events.create')
                ->withErrors($validator)
                ->withInput();
        }

        $client = Client::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);

        $event = Event::create([
            'client_id' => $client->id,
            'date' => $request->date,
            'budget' => $request->budget,
            'pesan' => $request->pesan,
        ]);

        $vendor = [
            'vanue' => $request->vanue,
            'catering' => $request->catering,
            'decoration' => $request->decoration,
            'photo' => $request->photo,
            'mua' => $request->mua,
            'entertainment' => $request->entertainment,
        ];

        foreach ($vendor as $key => $value) {
            Detail_Event::create([
                'event_id' => $event->id,
                'vendor_id' => $value,
            ]);
        }

        Alert::toast('Data Event Berhasil Ditambahkan','success')->autoClose(5000)->position('top-right');
        return redirect()->route('events.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $vendors = Vendor::all();
        $client = Client::find($event->client_id);
        $detail_event = Detail_Event::where('event_id', $event->id)->get();

        foreach ($detail_event as $key => $value) {
            $vendor_event[] = $value->vendor_id;
        }

        return view('event.edit', compact('event', 'vendors', 'client', 'vendor_event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'nama' => ['required'],
            'alamat' => ['required'],
            'no_hp' => ['required', 'numeric', 'digits:12'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($event->client_id)],
            'date' => ['required'],
            'budget' => ['required', 'numeric'],
            'pesan' => ['required'],
            'vanue' => ['required'],
            'catering' => ['required'],
            'decoration' => ['required'],
            'photo' => ['required'],
            'mua' => ['required'],
            'entertainment' => ['required'],
        ]);

        if ($validator->fails()) {
            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->route('events.edit', $event->id)
                ->withErrors($validator)
                ->withInput();
        }

        $client = Client::find($event->client_id);
        $client->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);

        $event->update([
            'date' => $request->date,
            'budget' => $request->budget,
            'pesan' => $request->pesan,
        ]);

        $vendor = [
            'vanue' => $request->vanue,
            'catering' => $request->catering,
            'decoration' => $request->decoration,
            'photo' => $request->photo,
            'mua' => $request->mua,
            'entertainment' => $request->entertainment,
        ];

        Detail_Event::where('event_id', $event->id)->delete();

        foreach ($vendor as $key => $value) {
           Detail_Event::create([
               'event_id' => $event->id,
               'vendor_id' => $value,
           ]);
        }

        Alert::toast('Data Event Berhasil Diupdate','success')->autoClose(5000)->position('top-right');
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $client = Client::find($event->client_id);
        $detail_event = Detail_Event::where('event_id', $event->id)->get();

        foreach ($detail_event as $key => $value) {
            $value->delete();
        }

        $client->delete();
        $event->delete();
        Alert::toast('Data Event Berhasil Dihapus','success')->autoClose(5000)->position('top-right');
        return redirect()->route('events.index');
    }
}
