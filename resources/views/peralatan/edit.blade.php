<form action="/peralatan/{{$peralatan -> id}}" method="POST">
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
                  <input type="text" class="form-control" name="a" value="{{$peralatan -> nama_hewan}}" placeholder="Nama">
              </div>
              <div class="form-group">
                  <label>status</label>
                  <input type="text" class="form-control" name="b" value="{{$peralatan -> habitat}}"  placeholder="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>kondisi</label>
                  <input type="text" class="form-control" name="c"  value="{{$peralatan -> lokasi}}" placeholder="tanggal lahir">
              </div>
              <div class="form-group">
                  <label>jumlah</label>
                  <input type="text" class="form-control" name="d" value="{{$peralatan -> jumlah}}" placeholder="tempat lahir">
              </div>
              <div class="form-group">
                  <label>lokasi</label>
                  <input type="text" class="form-control" name="e" value="{{$peralatan -> status}}" placeholder="Jenis Kelamin">
              </div>
              <input type="hidden" name="_method" value="put"> 
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>