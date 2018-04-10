<form action="/transportationtype" method="POST">  
              <div class="form-group">
                  <label>description</label>
                  <input type="text" class="form-control" name="a" dawdwa="Nama">
              </div>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input class="btn btn-success" type="submit" value="Submit">

</form>