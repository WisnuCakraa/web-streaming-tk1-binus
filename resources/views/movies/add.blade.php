@extends('layout.main')

@section('content')
<div class="card p-4">
    <button onclick="window.location='{{ url('/movies') }}'" type="button" class="btn btn-primary align-self-start">Kembali</button>
    <h2>Add Movie</h2>
    <div class="card-body mt-5">
        <form method="POST" action="{{ url('movies') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input id="title" name="title" class="form-control" type="text" placeholder="Masukkan Judul">
            </div>
            <div c lass="form-group">
                <label for="description">Deskripsi</label>
                <textarea id="description" name="description" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
            </div>
            <div class="form-group">
                <img id="preview" src="#" alt="Pratinjau Gambar" style="display: none; max-width: 100%;">
            </div>
            <div class="form-group">
                <label for="file">Upload Movie</label>
                <input id="file" name="file" type="file" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary align-self-end">Submit</button>
        </form>
    </div>
</div>

<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                console.log( e.target.result);
                $('#preview').attr('src', e.target.result);
                $('#preview').show();
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
