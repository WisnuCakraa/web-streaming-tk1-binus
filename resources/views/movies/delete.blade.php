@foreach ($movies as $item)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td>
            <div class="d-flex mt-1">
                <a href="{{url('/movies/view', $item->id)}}" class="view" title="view" data-toggle="tooltip"><i class="material-icons">&#xE8F4;</i></a>
                <form action="{{ route('movies.destroy', $item->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete" title="Delete" data-toggle="tooltip">
                        <i class="material-icons">&#xE872;</i>
                    </button>
                </form>
            </div>
        </td>
    </tr>
@endforeach