<form action="/reservation" method="POST">  
              <div class="form-group">
                  <label>reservation code</label>
                  <input type="text" class="form-control" name="a" dawdwa="Nama">
              </div>
              <div class="form-group">
                  <label>reservation at</label>
                  <input type="text" class="form-control" name="b" dawdwa="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>reservation date</label>
                  <input type="text" class="form-control" name="c" dawdwa="tanggal lahir">
              </div>
              <div class="form-group">
                  <label>Customer ID</label>
                  <select name="d">
                   @foreach ($customer as $use)
                    <option value="{{$use->id}}">{{$use->name}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group">
                  <label>seat code</label>
                  <input type="text" class="form-control" name="e" dawdwa="tempat lahir">		
              </div>
              <div class="form-group">
                  <label>Rute ID</label>
                  <select name="f">
                   @foreach ($rute as $use)
                    <option value="{{$use->id}}">{{$use->rute_to}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group">
                  <label>Depart at</label>
                  <select name="g">
                   @foreach ($rute as $use)
                    <option value="{{$use->id}}">{{$use->depart_at}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group">
                  <label>Price</label>
                  <select name="h">
                   @foreach ($rute as $use)
                    <option value="{{$use->id}}">{{$use->price}}</option>
                    @endforeach
                    </select>
              </div>
              <div class="form-group">
                  <label>User id</label>
                  <select name="i">
                   @foreach ($user as $use)
                    <option value="{{$use->id}}">{{$use->name}}</option>
                    @endforeach
                    </select>
              </div>

        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>