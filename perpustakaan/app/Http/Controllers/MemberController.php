<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Anggota;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Anggota::all();
        return view('admin.anggota.index', [
        'members' => $members
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'name' => 'required|min:5|max:200',
            'email' => 'required',
            'gender' => 'required|in:Pria,Wanita',
            'status' => 'required',
            'address' => 'required'

        ]);

        Anggota::create($validated);
        return redirect('dashboard/anggota');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $anggota = Anggota::find($id);
        $anggota -> delete();
        return redirect('/dashboard/anggota');
    }
}
