@extends('layouts.master')

@section('content')
<div class="text-center">
  <h1 style="color: black"> Gambar ERD</h1>
  <img src="{{asset('images/ERD.png')}}" class="img-fluid" alt="Responsive image">
</div>
<h4 style="color: black"> *Untuk implementasi saat ini pada tabel artikel tidak ada kolom user_id karena tidak diperlukan</h4>
<h4 style="color: black"> *Jika implementasi berikutnya menggunakan user maka kolom user_id akan dipakai</h4>
@endsection
