<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kantor_polisi;

class kantor_polisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kantor_polisi = kantor_polisi::all();

        return view('kantor_polisi.index', [
            'kantor_polisi' => $kantor_polisi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kantor_polisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kantor_polisi = new kantor_polisi;
        $kantor_polisi->kantorpolisi = $request->kantorpolisi;
        $kantor_polisi->alamat = $request->alamat;
        $kantor_polisi->jamoperasional = $request->jamoperasional;
        $kantor_polisi->nohp = $request->nohp;
        $kantor_polisi->latitude = $request->latitude;
        $kantor_polisi->longitude = $request->longitude;
        $kantor_polisi->save();

        return redirect()->route('kantor_polisi.index')
            ->with('success_message', 'Berhasil menambah data baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kantor_polisi = kantor_polisi::find($id);
        return view('kantor_polisi.edit', compact('kantor_polisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kantor_polisi = kantor_polisi::find($id);
        $kantor_polisi->kantorpolisi = $request->kantorpolisi;
        $kantor_polisi->alamat = $request->alamat;
        $kantor_polisi->jamoperasional = $request->jamoperasional;
        $kantor_polisi->nohp = $request->nohp;
        $kantor_polisi->latitude = $request->latitude;
        $kantor_polisi->longitude = $request->longitude;
        $kantor_polisi->save();

        return redirect()->route('kantor_polisi.index')->with('success_message', 'Kantor Polisi updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kantor_polisi::find($id)->delete();
        return redirect()->route('kantor_polisi.index')->with('success_message', 'Kantor Polisi deleted successfully!');
    }
}
