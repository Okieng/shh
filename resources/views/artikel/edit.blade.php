<form action="/penulis/{{$penulis -> id}}" method="POST">
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
                  <label>judul</label>
                  <input type="text" class="form-control" name="nama_peg" value="{{$penulis -> judul}}" placeholder="Nama">
              </div>
              <div class="form-group">
                  <label>nama</label>
                  <input type="text" class="form-control" name="tgl_lahir" value="{{$penulis -> nama}}"  placeholder="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>tgl_penulis</label>
                  <input type="date" class="form-control" name="jabatan"  value="{{$penulis -> tgl_penulis}}" placeholder="tanggal lahir">
              </div>
              <div class="form-group">
                  <label>no_tablodi</label>
                  <input type="date" class="form-control" name="tgl_aktif" value="{{$penulis -> no_tabloid}}" placeholder="tempat lahir">
              </div>
              <div class="form-group">
                  <label>tgl_cetak</label>
                  <input type="date" class="form-control" name="tgl_nonaktif" value="{{$penulis -> tgl_cetak}}" placeholder="Jenis Kelamin">
              </div>
              <input type="hidden" name="_method" value="put"> 
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>s