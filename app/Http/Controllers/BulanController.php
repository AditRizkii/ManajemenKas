<?php

namespace App\Http\Controllers;

use App\Models\Bulan;
use App\Http\Requests\StoreBulanRequest;
use App\Http\Requests\UpdateBulanRequest;
use Illuminate\Http\Request;

class BulanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bulans = Bulan::all();
        return view('uang-kas.uang-kas', compact("bulans"));
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
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'tahun' => ['required', 'string', 'max:255'],
            'pembayaran_perminggu' => ['required', 'string', 'max:255'],

        ]);

        Bulan::create([
            'nama' => $request->nama,
            'tahun' => $request->tahun,
            'pembayaran_perminggu' => $request->pembayaran_perminggu,
            'total' => 0,
        ]);
        toast('Bulan created successfully', 'success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Bulan $bulan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bulan $bulan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBulanRequest $request, Bulan $bulan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bulan $bulan)
    {
        //
    }
}
