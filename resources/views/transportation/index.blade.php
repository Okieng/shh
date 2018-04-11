<a href="/transportation/create">Tambah Data</a><br> 


@foreach ($transportation as $data)
                            {{$data -> id}}<br>
                            {{$data -> code}}<br>
                            {{$data -> description}}<br>
                            {{$data -> seat_qty}}<br>
                            {{$data -> transportationtype-> description}}<br>
<a href="/transportation/{{$data->id}}/edit"> Edit</a>

                            <form class="" action="/transportation/{{$data->id}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{csrf_token() }}">
            <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>  Hapus</button>
          </form>
          <hr>
                          @endforeach