@extends('templates.admintemplates')
@section('title','Halaman Admin')
@section('content')

{{-- Menu Table ikan --}}
    <div class="container-fluid">
        @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
        @endif

        <div class="form-group form-inline">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
           Tambah Data
          </button>
        
        <form action="{{route('cari-data')}}" method="post">
            @csrf
          <input type="text" style="width: 300px;" name="cari" class="form-control mx-3"> <button type="submit" class="btn btn-primary">Cari</button>
        <a href="{{route('home')}}" class="btn btn-primary"> Refresh</a>
        </form>
        </div>
        
       

        <table class="table mt-3">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($ikan as $i)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$i->nama}}</td>
                <td>Rp.{{$i->harga}}</td>
                <td>{{$i->stok}}</td>
                <td></td>
                <td>
                    <a href="{{route('edit-data',encrypt($i->id_ikan))}}" class="badge badge-success">Edit</a>
                    <a href="{{route('hapus-data',encrypt($i->id_ikan))}}" class="badge badge-danger">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Ikan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="{{route('tambah-data')}}" method="post" enctype="multipart/form-data">
           @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Ikan..">
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Ikan..">
              </div>
              <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukkan Jumlah Stok..">
              </div>
               <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" name="gambar" id="gambar">
              </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
              </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection

