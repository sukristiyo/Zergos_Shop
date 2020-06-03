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
        
        <form action="{{route('cari-data')}}" method="post">
            @csrf
                <input type="text" name="cari" class="form-control bg-light border-0 small ml-3" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                  <button class="btn btn-primary mr-3" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
        <a href="{{route('home')}}" class="btn btn-primary"> Refresh</a>
        </form>
        </div>
        
       

        <table class="table mt-3">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($pemesanan as $i)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$i->nama}}</td>
                <td>Rp.{{$i->harga}}</td>
                <td>{{$i->jumlah}}</td>
              <td>{{$i->nohp}}</td>
              <td>{{$i->alamat}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
         <div class="row justify-content-center">{{$pemesanan->links()}}</div> 
        </div>  
@endsection

