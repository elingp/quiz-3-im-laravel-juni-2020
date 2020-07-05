@extends('layouts.master')

@section('content')
<form action= "/artikel" method= "POST">
    @csrf
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control"  id="judul" name="judul">
    </div>
    <div class="form-group">
      <label for="isi">Isi</label>
      <input type="text" class="form-control"  id="isi" name="isi">
    </div>
    <div class="form-group">
        <label for="tag">Tag (Gunakan "-" sebagai pemisah jika tag lebih dari 1)</label>
        <input type="text" class="form-control"  id="tag" name="tag">
        @if (count($errors) > 0)
        <span class="badge badge-pill badge-danger">
            Max 255 Character for each Judul, Isi dan tag
        </span>
      @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  @endsection
