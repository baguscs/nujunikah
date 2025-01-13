<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Event;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notifications = Notification::all();

        $title = 'Konfirmasi hapus notifikasi!';
        $text = "Apakah anda yakin ingin menghapus data notifikasi ini?";
        confirmDelete($title, $text);

        return view('notif.index', compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::where('status', Event::STATUS_PROCESS)
            ->whereNotIn('id', function($query) {
                $query->select('event_id')->from('notifications');
            })
            ->get();
        return view('notif.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'client' => 'required',
            'pesan' => 'required',
            'file' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', $validator->errors()->first());
            return redirect()->back();
        }

        Notification::create([
            'event_id' => $request->client,
            'pesan' => $request->pesan,
            'file' => $request->file,
        ]);

        Alert::toast('Data Vendor Berhasil Ditambahkan','success')->autoClose(5000)->position('top-right');
        return redirect()->route('notifications.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        $events = Event::where('status', Event::STATUS_PROCESS)->get();
        return view('notif.edit', compact('notification', 'events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Notification $notification)
    {
        $validator = Validator::make($request->all(), [
            'client' => 'required',
            'pesan' => 'required',
            'file' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Error', $validator->errors()->first());
            return redirect()->back();
        }

        $notification->update([
            'event_id' => $request->client,
            'pesan' => $request->pesan,
            'file' => $request->file,
        ]);

        Alert::toast('Data Notifikasi Berhasil Diubah','success')->autoClose(5000)->position('top-right');
        return redirect()->route('notifications.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();
        Alert::toast('Data Notifikasi Berhasil Dihapus','success')->autoClose(5000)->position('top-right');
        return redirect()->route('notifications.index');
    }

    public function sendMessage(Request $request, Notification $notification, $id)
    {
        $notification = Notification::find($id);
        // dd($notification);
        $destinationNumber = $notification->event->client->no_hp;
        $notificationMessage = $notification->pesan . " \n File Rincian: " . $notification->file;
        $sendNotifWA = "https://wa.me/+62". $destinationNumber ."?text=". urlencode($notificationMessage);

        return redirect()->away($sendNotifWA);
    }
}
