<a href="/reservation/create">Tambah Data</a><br> 


@foreach ($reservation as $data)
                            {{$data -> id}}<br>
                            {{$data -> reservation_code}}<br>
                            {{$data -> reservation_at}}<br>
                            {{$data -> reservation_date}}<br>
                            {{$data -> costumerid}}<br>
                            {{$data -> seat_code}}<br>
                            {{$data -> rute_id}}<br>
                            {{$data -> userid}}<br>
<a href="/reservation/{{$data->id}}/edit"> Edit</a>

                            <form class="" action="/reservation/{{$data->id}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{csrf_token() }}">
            <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>  Hapus</button>
          </form>
                          @endforeach