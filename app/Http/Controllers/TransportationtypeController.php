<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transportationtype;

class TransportationtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportationtype = Transportationtype::paginate(10);
        return view ('transportationtype.index',compact('transportationtype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transportationtype = Transportationtype::all();

        return view('transportationtype.create',compact('transportationtype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $transportationtype = new Transportationtype;
        $transportationtype->description = $request->a;

        
        $transportationtype->save();
        return redirect('/transportationtype');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transportationtype = Transportationtype::find($id);

        return view('transportationtype.detail',compact('transportationtype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transportationtype = Transportationtype::find($id);

        return view('transportationtype.edit',compact('transportationtype'));
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

        $transportationtype = Transportationtype::find($id);
        $transportationtype->description = $request->a;
        
        $transportationtype->save();
        return redirect('/transportationtype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transportationtype = Transportationtype::find($id);
        $transportationtype->delete();
        return redirect('transportationtype');
    }
}
