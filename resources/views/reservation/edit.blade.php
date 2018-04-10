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
            
              <div class="form-group">
                  <label>nama_per</label>
                  <input type="text" class="form-control" name="a" value="{{$reservation -> reservation_code}}" dawdada="Nama">
              </div>
              <div class="form-group">
                  <label>status</label>
                  <input type="text" class="form-control" name="b" value="{{$reservation -> reservation_at}}"  dawdada="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>kondisi</label>
                  <input type="text" class="form-control" name="c"  value="{{$reservation -> reservation_date}}" dawdada="tanggal lahir">
              </div>
              <div class="form-group">
                  <label>jumlah</label>
                  <input type="text" class="form-control" name="d" value="{{$reservation -> customerid}}" dawdada="tempat lahir">
              </div>
              <div class="form-group">
                  <label>jumlah</label>
                  <input type="text" class="form-control" name="d" value="{{$reservation -> seat_code}}" dawdada="tempat lahir">
              </div>
              <div class="form-group">
                  <label>jumlah</label>
                  <input type="text" class="form-control" name="d" value="{{$reservation -> rute_id}}" dawdada="tempat lahir">
              </div>
              <div class="form-group">
                  <label>jumlah</label>
                  <input type="text" class="form-control" name="d" value="{{$reservation -> userid}}" dawdada="tempat lahir">
              </div>
              <input type="hidden" name="_method" value="put"> 
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>