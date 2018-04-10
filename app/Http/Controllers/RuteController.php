<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rute;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rute = Rute::paginate(10);
        return view ('rute.index',compact('rute'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rute = Rute::all();

        return view('rute.create',compact('rute'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rute = new rute;
        $rute->depart_at = $request->a;
        $rute->rute_form= $request->b;
        $rute->rute_to= $request->c;
        $rute->price= $request->d;
        $rute->transportationid= $request->e;


        
        $rute->save();
        return redirect('/rute');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rute = Rute::find($id);

        return view('rute.detail',compact('rute'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rute = Rute::find($id);

        return view('rute.edit',compact('rute'));
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

        $rute = rute::find($id);
        $rute->depart_at = $request->a;
        $rute->rute_form= $request->b;
        $rute->rute_to= $request->c;
        $rute->price= $request->d;
        $rute->transportationid= $request->e;

        
        $rute->save();
        return redirect('/rute');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rute = Rute::find($id);
        $rute->delete();
        return redirect('rute');
    }
}
