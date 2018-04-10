<a href="/transportationtype/create">Tambah Data</a><br> 


@foreach ($transportationtype as $data)
                            {{$data -> id}}<br>
                            {{$data -> description}}<br>
<a href="/transportationtype/{{$data->id}}/edit"> Edit</a>

                            <form class="" action="/transportationtype/{{$data->id}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{csrf_token() }}">
            <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>  Hapus</button>
          </form>
                          @endforeach