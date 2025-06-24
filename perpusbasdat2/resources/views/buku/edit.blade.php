@extends('buku.edit')

@section('content')
     <div class="card-body">
    <form action="{{route('')}}" method="post">
        @method('put')
        @csrf
            <div class="mb-3">
                <label  class="form-label">nama Buku</label>
                <input type="text" class="form-control" name="nama_buku" >
                <div  class="form-text"></div>
            </div>
            <div class="mb-3">
                <label class="form-label">pengarang</label>
                <input type="text" class="form-control" name="pengarang" >
                <div  class="form-text"></div>
            </div>

             <div class="mb-3">
                <label class="form-label">tahun terbit</label>
                <input type="number" class="form-control" name="tahun_terbit" >
                <div class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-info">submit</button>
        </form>
  </div>
@endsection