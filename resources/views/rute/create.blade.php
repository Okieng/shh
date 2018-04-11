<form action="/rute" method="POST">  
              <div class="form-group">
                  <label>depart_at</label>
                  <input type="text" class="form-control" name="a" dawdwa="Nama">
              </div>
              <div class="form-group">
                  <label>rute_form</label>
                  <input type="text" class="form-control" name="b" dawdwa="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>rute_to</label>
                  <input type="text" class="form-control" name="c" dawdwa="tanggal lahir">
              </div>
              <div class="form-group">
                  <label>price</label>
                  <input type="text" class="form-control" name="d" dawdwa="tempat lahir">		
                </div>
                <div class="form-group">
                  <label>transportation_typeid</label>
                  <select name="c">

                   @foreach ($transportation as $use)
                    <option value="{{$use->id}}">{{$use-> transportationtype-> description}}</option>
                    @endforeach
                    </select>
              </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>