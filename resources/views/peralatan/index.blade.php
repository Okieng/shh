<a href="/peralatan/create">Tambah Data</a><br> 


@foreach ($peralatan as $data)
                            {{$data -> id}}<br>
                            {{$data -> nama_hewan}}<br>
                            {{$data -> habitat}}<br>
                            {{$data -> lokasi}}<br>
                            {{$data -> jumlah}}<br>
                            {{$data -> status}}<br>
<a href="/peralatan/{{$data->id}}/edit"> Edit</a>

                            <form class="" action="/peralatan/{{$data->id}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{csrf_token() }}">
            <button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i>  Hapus</button>
          </form>
                          @endforeach