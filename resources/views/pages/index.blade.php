@extends('layouts.master')

@section('content')
<table class="table">
    <thead>
        <tr>
          <th>Id</th>
          <th>Judul</th>
          <th>Isi</th>
          <th><a href="/artikel/create" class="btn btn-success">Add New Artikel</a></th>
        </tr>
      </thead>
    <tbody>
    @foreach($data as $key => $value)
      <tr>
      <td>{{$value->id}}</td>
      <td>{{$value->judul}}</td>
      <td>{{$value->isi}}</td>
      <form action="/artikel/{{$value->id}}" method="GET">
        @csrf
        <td>
          <input name = "id" value="{{$value->id}}" hidden>
          <button type="submit" class="badge-pill badge-primary">detail</button>
        </td>
      </form>
    </tr>
    @endforeach
    </tbody>
  </table>
@endsection

@push('scripts')
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush
