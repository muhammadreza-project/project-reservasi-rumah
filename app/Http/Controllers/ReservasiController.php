<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'rumah_id' => 'required|exists:rumahs,id',
        'tanggal_reservasi' => 'required|date',
    ]);

    Reservasi::create([
        'user_id' => auth()->id(),
        'rumah_id' => $validated['rumah_id'],
        'tanggal_reservasi' => $validated['tanggal_reservasi'],
    ]);

    return redirect()->back()->with('success', 'Reservasi berhasil dibuat.');
}

    /**
     * Display the specified resource.
     */
    public function show(Reservasi $reservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservasi $reservasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservasi $reservasi)
    {
        //
    }
}
