<a href="/customer/create">Tambah Data</a><br> 


@foreach ($customer as $data)
                            {{$data -> id}}<br>
                            {{$data -> name}}<br>
                            {{$data -> address}}<br>
                            {{$data -> phone}}<br>
                            {{$data -> gender}}<br>
<a href="/customer/{{$data->id}}/edit"> Edit</a>

                            <form class="" action="/customer/{{$data->id}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{csrf_token() }}">
            <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>  Hapus</button>
          </form>
                          @endforeach