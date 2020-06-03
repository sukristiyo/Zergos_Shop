<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ikan = DB::table('ikan')->paginate(6);
        return view('home', ['ikan' => $ikan]);
    }

    public function beli($id)
    {
        $ikan = DB::table('ikan')->paginate(6);
        return view('beli', ['ikan' => $ikan]);
    }

    public function store(Request $request)
    {
        DB::table('pemesanan')
            ->insert([
                'nama' => $request->input('nama'),
                'harga' => $request->input('harga'),
                'jumlah' => $request->input('jumlah'),
                'id_ikan' => $request->input('id_ikan'),
                'nohp' => $request->input('nohp'),
                'alamat' => $request->input('alamat'),
                'nama_pembeli' => $request->input('nama_pembeli')
            ]);
        return redirect(route('homepage'));
    }
}
