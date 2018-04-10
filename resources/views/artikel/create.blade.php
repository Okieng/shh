<form action="/artikel" method="POST">
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
                  <label>Nama Peg</label>
                  <input type="text" class="form-control" name="nama_peg" placeholder="Nama">
              </div>
              <div class="form-group">
                  <label>tgl_lahir</label>
                  <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>jabatan</label>
                  <input type="text" class="form-control" name="jabatan" placeholder="tanggal lahir">
              </div>
              <div class="form-group">
                  <label>tgl_aktif</label>
                  <input type="date" class="form-control" name="tgl_aktif" placeholder="tempat lahir">
              </div>
              <div class="form-group">
                  <label>tgl_nonaktif</label>
                  <input type="date" class="form-control" name="tgl_nonaktif" placeholder="Jenis Kelamin">
              </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>