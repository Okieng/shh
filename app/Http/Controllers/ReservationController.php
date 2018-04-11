<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Rute;
use App\Customer;
use App\User;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::paginate(10);
        return view ('reservation.index',compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservation = Reservation::all();
        $rute = Rute::all();
        $customer = Customer::all();
        $user = User::all();

        return view('reservation.create',compact('reservation' , 'rute' , 'customer' , 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $reservation = new Reservation;
        $reservation->reservation_code = $request->a;
        $reservation->reservation_at= $request->b;
        $reservation->reservation_date= $request->c;
        $reservation->customerid= $request->d;
        $reservation->seat_code= $request->e;
        $reservation->rute_id= $request->f;
        $reservation->userid= $request->g;

        
        $reservation->save();
        return redirect('/reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::find($id);

        return view('reservation.detail',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::find($id);

        return view('reservation.edit',compact('reservation'));
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

        $reservation = Reservation::find($id);
        $reservation->reservation_code = $request->a;
        $reservation->reservation_at= $request->b;
        $reservation->reservation_date= $request->c;
        $reservation->customerid= $request->d;
        $reservation->seat_code= $request->e;
        $reservation->rute_id= $request->f;
        $reservation->userid= $request->g;
        
        $reservation->save();
        return redirect('/reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('reservation');
    }
}
