<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transportation;

class TransportationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportation = Transportation::paginate(10);
        return view ('transportation.index',compact('transportation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transportation = Transportation::all();

        return view('transportation.create',compact('transportation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $transportation = new Transportation;
        $transportation->code = $request->a;
        $transportation->seat_qty= $request->b;
        $transportation->transportation_typeid= $request->c;



        
        $transportation->save();
        return redirect('/transportation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transportation = Transportation::find($id);

        return view('transportation.detail',compact('transportation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transportation = Transportation::find($id);

        return view('transportation.edit',compact('transportation'));
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

        $transportation = transportation::find($id);
        $transportation->code = $request->a;
        $transportation->seat_qty= $request->b;
        $transportation->transportation_typeid= $request->c;

        
        $transportation->save();
        return redirect('/transportation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transportation = Transportation::find($id);
        $transportation->delete();
        return redirect('transportation');
    }
}
