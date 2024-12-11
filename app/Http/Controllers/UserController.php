<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        $title = 'Konfirmasi hapus pegawai!';
        $text = "Apakah anda yakin ingin menghapus data pegawai ini?";
        confirmDelete($title, $text);

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => ['required'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'alamat' => ['required'],
            'no_hp' => ['required', 'numeric', 'digits:12'],
        ]);

        if ($validator->fails()) {

            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->route('users.create')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'password' => Hash::make("secret_password"),
        ]);

        Alert::toast('Data Pegawai Berhasil Ditambahkan','success')->autoClose(5000)->position('top-right');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => ['required'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            'alamat' => ['required'],
            'no_hp' => ['required', 'numeric', 'digits:12'],
        ]);

        if ($validator->fails()) {

            Alert::error('Mohon Perihatikan Form Input Anda', 'Validasi Error');
            return redirect()->route('users.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::find($id);
        $user->update([
            'name' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        Alert::toast('Data Pegawai Berhasil Diubah','success')->autoClose(5000)->position('top-right');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        Alert::toast('Data Pegawai Berhasil Dihapus','success')->autoClose(5000)->position('top-right');
        return redirect()->route('users.index');
    }
}
