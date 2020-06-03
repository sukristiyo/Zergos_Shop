@extends('templates.templates')
@section('title','Beli')
@section('content')
   <div class="container mt-4">
         <form action="{{route('input-beli')}}" method="post" enctype="multipart/form-data">
           @csrf    
            <div class="form-group">
                <label for="nama">Nama Ikan</label>
                 <h1 class="text-success">{{$ikan[0]->nama}}</h1>
                <input type="hidden" value="{{$ikan[0]->nama}}" class="form-control" name="nama" id="nama">
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <h1 class="text-success">{{$ikan[0]->harga}}</h1>
                <input type="hidden" value="{{$ikan[0]->harga}}" class="form-control" name="harga" id="harga">
              </div>
              <div class="form-group">
                <label for="stok">Stok</label>
                <h1 class="text-success">{{$ikan[0]->stok}}</h1>
                <input type="hidden" value="{{$ikan[0]->stok}}" class="form-control" name="stok" id="stok">
              </div>
              <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" id="jumlah">
              </div>
               <div class="form-group">
                <label for="nama_pembeli">Nama Pembeli</label>
                <input type="text" class="form-control" name="nama_pembeli" id="nama_pembeli">
              </div>
               <div class="form-group">
                <label for="nohp">Nomor HP</label>
                <input type="text" class="form-control" name="nohp" id="nohp">
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
              </div>
              <input type="hidden" value="{{$ikan[0]->id_ikan}}" class="form-control" name="id_ikan" id="id_ikan">
              <div class="modal-footer">
              <a href="{{route('homepage')}}" class="btn btn-secondary text-white" data-dismiss="modal">Kembali</a>
                <button type="submit" class="btn btn-primary">Beli</button>
              </div>    
     </form>
</div>
@endsection