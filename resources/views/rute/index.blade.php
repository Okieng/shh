<a href="/rute/create">Tambah Data</a><br> 


@foreach ($rute as $data)
                            {{$data -> id}}<br>
                            {{$data -> depart_at}}<br>
                            {{$data -> rute_form}}<br>
                            {{$data -> rute_to}}<br>
                            {{$data -> price}}<br>
                            {{$data -> transportationid}}<br>
<a href="/rute/{{$data->id}}/edit"> Edit</a>

                            <form class="" action="/rute/{{$data->id}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{csrf_token() }}">
            <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>  Hapus</button>
          </form>
                          @endforeach