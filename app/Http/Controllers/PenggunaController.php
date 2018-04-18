<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rute;
use App\Reservation;
use App\Transportasi;
use App\Customer;
use Auth;
class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $rute = Rute::all();
        return view('pengguna.index', compact(['user', $user], ['rute', $rute]));
    }

    public function search(Request $request)
    {       
        
       $keyword = $request['keyword'];
        $ruteto = $request['rute_to'];
        $rutefrom = $request['rute_form'];

        $rute = Rute::whereHas('transportasi', function($query) use($keyword) {
        $query->where('transportation_type_id', 'LIKE', "%{$keyword}%");
        })->where('rute_from','LIKE',"%{$rutefrom}%")->where('rute_to','LIKE',"%{$ruteto}%")->paginate(6);

        $customer = customer::all();
        $transportation = Transportasi::all();
        $reservation = Reservation::where('user_id','=',Auth::user()->username)->paginate(4);
        return view('pengguna.result',compact(['rute'],['customer'],['reservation'],['transportation']));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [

        'customer_id' => 'required',
        'rute_id' => 'required',
        'user_id' => 'required',

    ]);
        $resv = new Reservation;

        $resv->reservation_code = time();
        $resv->reservation_at = date('h:i:s');
        $resv->reservation_date = date('d-m-y');
        $resv->customer_id = $request->customer_id;
        $resv->seat_code = rand(0,20);
        $resv->rute_id = $request->rute_id;
        $resv->user_id = $request->user_id;
        
        $resv->save();
        return redirect('pengguna');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
