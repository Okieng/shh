<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peralatan;

class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peralatan = Peralatan::paginate(10);
        return view ('peralatan.index',compact('peralatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peralatan = Peralatan::all();

        return view('peralatan.create',compact('peralatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $peralatan = new Peralatan;
        $peralatan->nama_hewan = $request->a;
        $peralatan->habitat= $request->b;
        $peralatan->lokasi= $request->c;
        $peralatan->jumlah= $request->d;
        $peralatan->status= $request->e;

        
        $peralatan->save();
        return redirect('/peralatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peralatan = Peralatan::find($id);

        return view('peralatan.detail',compact('peralatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peralatan = Peralatan::find($id);

        return view('peralatan.edit',compact('peralatan'));
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

        $peralatan = Peralatan::find($id);
        $peralatan->nama_hewan = $request->a;
        $peralatan->habitat = $request->b;
        $peralatan->lokasi = $request->c;
        $peralatan->jumlah = $request->d;
        $peralatan->status = $request->e;
        
        $peralatan->save();
        return redirect('/peralatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peralatan = Peralatan::find($id);
        $peralatan->delete();
        return redirect('peralatan');
    }
}
