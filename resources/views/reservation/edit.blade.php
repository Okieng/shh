<form action="/reservation/{{$reservation -> id}}" method="POST">
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            
            <?php 
        $jalan = $reservation->rute_id;
 ?>

             <form class="" action="/reservation/{{$reservation->id}}" method="post">

    
     <div class="form-group">
        <label for="reservation_code">Reservation Code</label>
             <input type="text" class="form-control form-control-line" id="reservation_code" name="reservation_code" placeholder="Reservation Code"
                     value="{{ $reservation->reservation_code }}">
            </div> 
        
         <div class="form-group">
        <label for="reservation_at">Reservation At</label>
             <input type="text" class="form-control form-control-line" id="reservation_at" name="reservation_at" placeholder="Reservation At"
                    value="{{ $reservation->reservation_at }}">                        
            </div> 
        
           <div class="form-group">
        <label for="reservation_date">Reservation Date</label>
             <input type="date" class="form-control form-control-line" id="reservation_date" name="reservation_date" placeholder="Reservation Date"
                    value="{{ $reservation->reservation_date }}">
            </div>
        
                   <div class="form-group">
        <label for="seat_code">Seat Code</label>
             <input type="text" class="form-control form-control-line" id="seat_code" name="seat_code" placeholder="Seat Code"
                    value="{{ $reservation->seat_code }}">
            </div>
        
      <div class="form-group">
      <label for="rute_id">Depart At</label>
                  <select class="form-control-1 form-control-line" name="rute_id">
                        @foreach ($rute as $data)
                    <option value="{{$data->id}}" 
                    <?php 
                      if($jalan == $data->id){
                        echo "selected";
                      }
                    ?>
                    >{{$data->depart_at}}</option>
                    @endforeach
                  </select>
    </div>
              <input type="hidden" name="_method" value="put"> 
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>

