<form action="/rute/{{$rute -> id}}" method="POST">
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
                  <label>depart_at</label>
                  <input type="text" class="form-control" name="a" value="{{$rute -> depart_at}}" dawdada="Nama">
              </div>
              <div class="form-group">
                  <label>rute_form</label>
                  <input type="text" class="form-control" name="b" value="{{$rute -> rute_form}}"  dawdada="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>rute_to</label>
                  <input type="text" class="form-control" name="c"  value="{{$rute -> rute_to}}" dawdada="tanggal lahir">
              </div>
              <div class="form-group">
                  <label>price</label>
                  <input type="text" class="form-control" name="d" value="{{$rute -> price}}" dawdada="tempat lahir">
              </div>
              <div class="form-group">
                  <label>transportationid</label>
                  <input type="text" class="form-control" name="d" value="{{$rute -> transportationid}}" dawdada="tempat lahir">
              </div>
              <input type="hidden" name="_method" value="put"> 
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>