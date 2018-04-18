
  <form action="/caritiket" method="get">
          <div class="collapse navbar-collapse">
          <div class="col-md-2">
        <div class="dropdown">
          <select class="form-control" name="keyword" style="height:40px">
                                <option disabled selected>Jenis Transportasi</option>
                                <option value="2">Pesawat</option>
                                <option value="1">Kereta Api</option>
                           <i class="fa fa-location-arrow" aria-hidden="true"></i>

          <span class="caret"></span>
           </select>
        </div>
        </div>
        <div class="col-md-4">
        <div class="dropdown">
          <select class="form-control" name="rute_from" style="height:40px">
                                <option disabled selected>Berangkat Dari</option>
                                @foreach($rute as $data2)
                                  <option value="{{$data2->rute_from}}">{{$data2->rute_form}}</option>
                                @endforeach
                           <i class="fa fa-location-arrow" aria-hidden="true"></i>

          <span class="caret"></span>
           </select>
        </div>
        </div>
        <div class="col-md-4">

  <div class="search">
          <select class="form-control" name="rute_to" style="height:40px">
                                <option disabled selected>Berangkat Ke</option>
                                @foreach($rute as $data2)
                                  <option value="{{$data2->rute_to}}">{{$data2->rute_to}}</option>
                                @endforeach
                           <i class="fa fa-location-arrow" aria-hidden="true"></i>

          <span class="caret"></span>
           </select>
          


          </div>
          </div>
          <div class="search">
          <div class="flex-shrink-0 plr0i col-md-2">
            <button id="search_button" class="btn btn-cyan cari" type="submit">Cari
          </div>
          </div>
          </div>
                </form>


 <table id="table_id" class="display" border="1">
      <thead>
        <tr>
         <th>Depart At</th>
         <th>Rute From</th>
         <th>Rute To</th>
         <th>Price</th>
         @foreach ($rute as $rut)
       </tr>
     </thead>
     <tbody>
       <tr>
        <td> {{ $rut->depart_at }} </td>
        <td> {{ $rut->rute_form }} </td>
        <td> {{ $rut->rute_to}} </td>
        <td> {{ $rut->price}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>



