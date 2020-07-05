@extends('layouts.master')

@section('content')
    @foreach($data as $key => $value)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Judul: {{$value->judul}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Slug: {{$value->slug}}</h6>
          <p class="card-text">Isi: {{$value->isi}}</p>
          <h6 class="card-subtitle mb-2 text-muted">Tag :</h6>
          <?php $split = explode("-", $value->tag);
          $tag = " ";
                for ($i=0; $i <count($split) ; $i++) {
                    $tag = $split[$i];
                    ?>
          <span class="badge badge-pill badge-success">{{$tag}}</span>
       <?php } ?>
        </div>
      </div>
      <form action="/artikel/{{$value->id}}/edit" method="GET">
        @csrf
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
      <form action="/artikel/{{$value->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    @endforeach
@endsection
