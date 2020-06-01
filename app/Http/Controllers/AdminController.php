<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->input('cari')) {
            $ikan = DB::table('ikan')
                ->where('nama', 'like', '%' . $request->input('cari') . '%')
                ->get();
        } else {

            $ikan = DB::table('ikan')->get();
        }

        // dd($ikan); (Menampilkan data variable khusus untuk sementara)
        // $nama = 'willy';
        // echo $nama; (Menampilkan 1 variable)
        // die; (Menghentikan kode setelahnya)
        return view('admin', ['ikan' => $ikan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('ikan')
            ->insert([
                'nama' => $request->input('nama'),
                'harga' => $request->input('harga'),
                'stok' => $request->input('stok'),
                'deskripsi' => $request->input('deskripsi')
            ]);

        return redirect(route('home'))->with(['success' => 'Data Berhasil di Tambahkan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ikan = DB::table('ikan')
            ->where('id_ikan', '=', decrypt($id))
            ->get();
        return view('editdata', ['ikan' => $ikan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $ikan = DB::table('ikan')
            ->where('id_ikan', '=', decrypt($request->get('id')))
            ->update([
                'nama' => $request->input('nama'),
                'harga' => $request->input('harga'),
                'stok' => $request->input('stok'),
                'deskripsi' => $request->input('deskripsi')
            ]);
        return redirect(route('home'))->with(['success' => 'Data Berhasil di Ubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id; (Menampilkan Data)
        DB::table('ikan')
            ->where('id_ikan', '=', decrypt($id))
            ->delete();

        return redirect(route('home'))->with(['success' => 'Data Berhasil Di Hapus!']);
    }
}
