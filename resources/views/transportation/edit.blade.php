<form action="/transportation/{{$transportation -> id}}" method="POST">
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
                  <label>code</label>
                  <input type="text" class="form-control" name="a" value="{{$transportation -> code}}" dawdada="Nama">
              </div>
              <div class="form-group">
                  <label>seat_qty</label>
                  <input type="text" class="form-control" name="b" value="{{$transportation -> seat_qty}}"  dawdada="Tanggal anggota">
              </div>
              <div class="form-group">
                  <label>transportation_typeid</label>
                  <select name="c">
                   @foreach ($transportationtype as $use)
                    <option value="{{$use->id}}">{{$use->description}}</option>
                    @endforeach
                    </select>
              </div>
              <input type="hidden" name="_method" value="put"> 
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>