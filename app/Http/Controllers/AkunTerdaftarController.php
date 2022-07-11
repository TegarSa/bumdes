<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunTerdaftarController extends Controller
{
    public function index()
    {
        $users = User::whereNotIn('hak_akses',['0'])->get();
        return view('admin.akunterdaftar.index',['users'=>$users]);
    }
    public function lihat($id)
    {
        $users = User::select('users.id','users.name','profil.nama_instansi','profil.jabatan','provinces.name AS provinsi', 'regencies.name AS kota')
        ->join('profil','users.id','=','profil.user_id')
        ->join('provinces','profil.province_id','=','provinces.id')
        ->join('regencies','profil.city_id','=','regencies.id')
        ->where('users.id',$id)->first();
        //$users = User::find($id);
        return response()->json([
            'data' => $users
        ]);

    }
}
