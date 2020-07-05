@extends('layouts.master')

@section('content')
@foreach ($data as $key => $value)
<form action= "/artikel/{{$value->id}}" method= "POST">
  @method('PUT')
  @csrf
  <div class="form-group">
    <label for="judul">Judul</label>
  <input type="text" class="form-control" value="{{$value->judul}}"  id="judul" name="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" value="{{$value->isi}}" id="isi" name="isi">
</div>
<div class="form-group">
    <label for="tag">Tag (Gunakan "-" sebagai pemisah jika tag lebih dari 1)</label>
    <input type="text" class="form-control" value="{{$value->tag}}"  id="tag" name="tag">
    @if (count($errors) > 0)
    <span class="badge badge-pill badge-danger">
        Max 255 Character for each Judul, Isi dan tag
    </span>
    @endif
</div>
<input type="text" class="form-control" value="{{$value->id}}"  id="id" name="id" hidden>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
@endsection
