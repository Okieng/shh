<form action="/transportationtype/{{$transportationtype -> id}}" method="POST">
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
                  <label>Description</label>
                  <input type="text" class="form-control" name="a" value="{{$transportationtype -> description}}" dawdada="Nama">
              </div>
              <input type="hidden" name="_method" value="put"> 
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>