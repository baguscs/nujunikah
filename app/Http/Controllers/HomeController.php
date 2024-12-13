<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Event;
use App\Models\Testimoni;
use App\Models\Gallery;
use App\Models\Tips;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalData = [
            'users' => User::count(),
            'vendors' => Vendor::count(),
            'events' => Event::count(),
            'testimoni' => Testimoni::count(),
            'gallery' => Gallery::count(),
            'tips' => Tips::count(),
        ];

        // dd($totalData);
        return view('home', compact('totalData'));
    }
}
