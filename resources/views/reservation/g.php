@if(Auth::user()->level == 'admin')
@extends('layouts.template')
@section('content')

<h1> Edit </h1>

@if (count($errors) > 0)
    
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

@endif

<?php 
        $rit = $resv->rute_id;
 ?>


<form class="" action="/reservation/{{$resv->id}}" method="post">

    
     <div class="form-group">
        <label for="reservation_code">Reservation Code</label>
             <input type="text" class="form-control form-control-line" id="reservation_code" name="reservation_code" placeholder="Reservation Code"
                     value="{{ $resv->reservation_code }}">
            </div> 
        
         <div class="form-group">
        <label for="reservation_at">Reservation At</label>
             <input type="text" class="form-control form-control-line" id="reservation_at" name="reservation_at" placeholder="Reservation At"
                    value="{{ $resv->reservation_at }}">                        
            </div> 
        
           <div class="form-group">
        <label for="reservation_date">Reservation Date</label>
             <input type="date" class="form-control form-control-line" id="reservation_date" name="reservation_date" placeholder="Reservation Date"
                    value="{{ $resv->reservation_date }}">
            </div>
        
                   <div class="form-group">
        <label for="seat_code">Seat Code</label>
             <input type="text" class="form-control form-control-line" id="seat_code" name="seat_code" placeholder="Seat Code"
                    value="{{ $resv->seat_code }}">
            </div>
        
      <div class="form-group">
      <label for="rute_id">Depart At</label>
                  <select class="form-control-1 form-control-line" name="rute_id">
                        @foreach ($rute as $rut)
                    <option value="{{$rut->id}}" 
                    <?php 
                      if($rit == $rut->id){
                        echo "selected";
                      }
                    ?>
                    >{{$rut->depart_at}}</option>
                    @endforeach
                  </select>
    </div>
    

     <input type="hidden" name="_method" value="put"> 
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
     <input class="btn btn-sm btn-primary" type="submit" name="name" value="Edit">
    <a class="btn btn-sm btn-primary" href="/reservation">Cancel</a>
    



</form>
@endsection


@else
<script type="text/javascript">
    window.location = "/404";//here double curly bracket
  </script>

  @endif