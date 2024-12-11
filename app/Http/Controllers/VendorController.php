<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::all();

        $title = 'Konfirmasi hapus data vendor!';
        $text = "Apakah anda yakin ingin menghapus data vendor ini?";
        confirmDelete($title, $text);

        return view('vendor.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Vendor::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
        ]);

        Alert::toast('Data Vendor Berhasil Ditambahkan','success')->autoClose(5000)->position('top-right');

        return redirect()->route('vendors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        $vendor = Vendor::find($vendor->id);
        return view('vendor.edit', compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $vendor = Vendor::find($vendor->id);
        $vendor->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
        ]);

        Alert::toast('Data Vendor Berhasil Diubah','success')->autoClose(5000)->position('top-right');

        return redirect()->route('vendors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
        $vendor = Vendor::find($vendor->id);
        $vendor->delete();

        Alert::toast('Data Vendor Berhasil Dihapus','success')->autoClose(5000)->position('top-right');

        return redirect()->route('vendors.index');
    }
}
