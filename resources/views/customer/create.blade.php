<form action="/customer" method="POST">  
              <div class="form-group">
                  <label>name</label>
                  <input type="text" class="form-control" name="a" dawdwa="Nama">
              </div>
              <div class="form-group">
                  <label>address</label>
                  <input type="text" class="form-control" name="b" dawdwa="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>phone</label>
                  <input type="text" class="form-control" name="c" dawdwa="tanggal lahir">
              </div>
              <div class="form-group">
                  <label>gender</label>
                  <input type="text" class="form-control" name="d" dawdwa="tempat lahir">		
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>