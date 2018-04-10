<form action="/peralatan" method="POST">  
              <div class="form-group">
                  <label>nama</label>
                  <input type="text" class="form-control" name="a" placeholder="Nama">
              </div>
              <div class="form-group">
                  <label>habitat</label>
                  <input type="text" class="form-control" name="b" placeholder="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>lokasi</label>
                  <input type="text" class="form-control" name="c" placeholder="tanggal lahir">
              </div>
              <div class="form-group">
                  <label>jumlah</label>
                  <input type="text" class="form-control" name="d" placeholder="tempat lahir">
              </div>
              <div class="form-group">
                  <label>status</label>
                  <input type="text" class="form-control" name="e" placeholder="Jenis Kelamin">
              </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>