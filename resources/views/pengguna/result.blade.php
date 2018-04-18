
<a href="/pengguna"><button>Back</button></a>

 <table id="table_id" class="display" border="1">
      <thead>
        <tr>
         <th>Depart At</th>
         <th>Rute From</th>
         <th>Rute To</th>
         <th>Price</th>
		<th>Pilih</th>
         @foreach ($rute as $rut)
       </tr>
     </thead>
     <tbody>
       <tr>
        <td> {{ $rut->depart_at }} </td>
        <td> {{ $rut->rute_form }} </td>
        <td> {{ $rut->rute_to}} </td>
        <td> {{ $rut->price}} </td>	   
 		<td> <form action="pengguna" method="POST" onSubmit="if(!confirm('Apakah anda yakin ingin memesan tiket ini??')){return false;}">
		    	@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		    	<div class="hide" style="display:none;">
		        <input type="text" name="reservation_at" placeholder="Reservation At" class="form-control">

		        <input type="date" name="reservation_date" class="form-control">
					
		        <input type="hidden" name="costumer_id" value="@foreach($costumer as $cost)
															   
				@if($cost->user_id == Auth::user()->username){{$cost->id}}@endif @endforeach">
					
		        <select name="costumer_id" id="" class="form-control">
		        	@foreach($costumer as $data2)
		        	<option value="{{$data2->id}}">{{$data2->name}}</option>
		        	@endforeach
		        </select>

		        <input type="text" name="seat_code" placeholder="Seat Code" class="form-control">
		        <input type="hidden" value="{{$data2->id}}" name="rute_id">
		        <input type="hidden" value="{{Auth::user()->username}}" name="user_id">
		    <input type="hidden" name="_token" value="{{csrf_token()}}">
		    </div>
		    <input type="submit" value="Pesan!" class="btn btn-primary">
		</form> </td>
      </tr>
      @endforeach
    </tbody>
  </table>

<p>{{Auth::user()->username}}</p>



