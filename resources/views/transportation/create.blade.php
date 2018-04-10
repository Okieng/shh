<form action="/transportation" method="POST">  
              <div class="form-group">
                  <label>code</label>
                  <input type="text" class="form-control" name="a" dawdwa="Nama">
              </div>
              <div class="form-group">
                  <label>seat_qty</label>
                  <input type="text" class="form-control" name="b" dawdwa="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>transportation_typeid</label>
                  <select name="c">
                   @foreach ($transportation as $use)
                    <option value="{{$use->id}}">{{$use->id}}</option>
                    @endforeach
                    </select>
              </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>