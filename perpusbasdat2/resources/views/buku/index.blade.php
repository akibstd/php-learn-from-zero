@extends('layouts.master')


@section('content')
    <h1>halaman buku</h1>

    <div class="container">
        <div class="card">
            <div class="card-header">
                  <a href="{{route('buku.create')}}" class=" btn btn-danger">Tambah Buku</a> 
            </div>
            <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Tangal Terbit</th>
     <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($books as $item)
        <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$item->nama_buku}}</td>
      <td>{{$item->pengarang}}</td>
      <td>{{$item->tahun_terbit}}</td>
      <td> 
      <a href="buku/edit{{$item->id}}" class="bi bi-folder-symlink-fill"> </a>
      </td>
    </tr>
   @endforeach

  </tbody>
   {{-- {{ $books->links()}} --}}
</table>
{{-- {{ $books->onEachSide(5)->links()}}
            </div>
        </div>
    </div> --}}


@endsection