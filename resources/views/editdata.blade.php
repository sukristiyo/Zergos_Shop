@extends('templates.admintemplates')
@section('title','Edit Data')
@section('content')
    <div class="container-fluid">
        <form action="{{route('update-data',['id'=> encrypt($ikan[0]->id_ikan)]) }}" method="post" enctype="multipart/form-data">
            @csrf
             <div class="form-group">
                 <label for="nama">Nama</label>
             <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Ikan.." value="{{$ikan[0]->nama}}">
               </div>
               <div class="form-group">
                 <label for="harga">Harga</label>
                 <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga Ikan.." value="{{$ikan[0]->harga}}">
               </div>
               <div class="form-group">
                 <label for="stok">Stok</label>
                 <input type="text" class="form-control" name="stok" id="stok" placeholder="Masukkan Jumlah Stok.." value="{{$ikan[0]->stok}}">
               </div>
                <div class="form-group">
                 <label for="gambar">Gambar</label>
                 <input type="file" class="form-control" name="gambar" id="gambar">
               </div>
               <div class="form-group">
                 <label for="deskripsi">Deskripsi</label>
                 <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{$ikan[0]->deskripsi}}</textarea>
               </div>
           
         </div>
         <div class="modal-footer">
         <a href="{{route('home')}}" class="btn btn-secondary" data-dismiss="modal">Kembali</a>
           <button type="submit" class="btn btn-primary">Simpan</button>
         </div>
     </form>    
    </div>    
@endsection