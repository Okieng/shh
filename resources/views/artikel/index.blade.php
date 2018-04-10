<a href="/artikel/create">Tambah Data</a><br> 


@foreach ($artikel as $data)
                            {{$data -> judul}}<br>
                            {{$data -> nama}}<br>
                            {{$data -> tgl_penulis}}<br>
                            {{$data -> no_tabloid}}<br>
                            {{$data -> tgl_cetak}}<br>
                            <form action="/artikel/{{$data->id_perjalanan}}" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <a href="/artikel/{{$data->no_pesawat}}/edit" type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a></a>
              <button type="submit" class="btn btn-default btn-xs btn-danger" value="Delete"><i class="fa fa-times"></i>Delete</button>
              </form>
                          @endforeach