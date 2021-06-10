<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\data;

class dataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = data::all();

        
        $dataJanuari = data::whereYear('created_at',date('Y'))->whereMonth('created_at','01')->count();
        
        $dataFebruari = data::whereYear('created_at',date('Y'))->whereMonth('created_at','02')->count();
        
        $dataMaret = data::whereYear('created_at',date('Y'))->whereMonth('created_at','03')->count();
        
        $dataApril = data::whereYear('created_at',date('Y'))->whereMonth('created_at','04')->count();
        
        $dataMei = data::whereYear('created_at',date('Y'))->whereMonth('created_at','05')->count();
        
        $dataJuni = data::whereYear('created_at',date('Y'))->whereMonth('created_at','06')->count();
        
        $dataJuli = data::whereYear('created_at',date('Y'))->whereMonth('created_at','07')->count();
        
        $dataAgustus = data::whereYear('created_at',date('Y'))->whereMonth('created_at','08')->count();
        
        $dataSeptember = data::whereYear('created_at',date('Y'))->whereMonth('created_at','09')->count();
        
        $dataOktober = data::whereYear('created_at',date('Y'))->whereMonth('created_at','10')->count();
        
        $dataNovember = data::whereYear('created_at',date('Y'))->whereMonth('created_at','11')->count();
        
        $dataDesember = data::whereYear('created_at',date('Y'))->whereMonth('created_at','12')->count();
        

        $total_anggota = data::all()->count();

        return view('/admin/index', [
                            'data' => $data,

                            'Januari' => $dataJanuari,
                            'Februari' => $dataFebruari,
                            'Maret' => $dataMaret,
                            'April' => $dataApril,
                            'Mei' => $dataMei,
                            'Juni' => $dataJuli,
                            'Juli' => $dataJuli,
                            'Agustus' => $dataAgustus,
                            'September' => $dataSeptember,
                            'Oktober' => $dataOktober,
                            'November' => $dataNovember,
                            'Desember' => $dataDesember,

                            'title' => 'Dashboard',
                            'total_anggota' => $total_anggota
            ]);
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
        $request->validate([
            'nama_depan' => 'required',
            'nama_blkg' => 'required',
            'kata_sandi' => 'required',
            'konfirm_kata_sandi' => 'required',
            'noktp' => 'required',
            'fotoktp' => 'required',
            'foto' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'email' => 'required|email',
            'nohp' => 'required',
            'ig' => 'required',
            'fb' => 'required',
            'twit' => 'required'
        ]);

        if(!$request->kata_sandi == $request->konfirm_kata_sandi){
            return redirect('/register')->with('kata_sandi_tidak_sesuai','Kata sandi tidak sesuai');

            return false;
        }

        // validasi alamat email
        $email = data::where('email',$request->email)->count();
        if($email > 0){
            return redirect('/register')->with('email_terdaftar','Alamat email terdaftar, Harap gunakan alamat email lain');

            return false;
        }

        // validasi no ktp
        $noktp = data::where('noktp',$request->noktp)->count();
        if($noktp > 0){
            return redirect('/register')->with('no_ktp_terdaftar','No KTP telah terdaftar');

            return false;
        }


        //$ktp_img = $request->file('fotoktp')->store('public/img');

        //$status = data::create([
        //    'fotoktp' => $ktp_img,
        //    'nama_depan' => $request->nama_depan,
        //    'nama_blkg' => $request->nama_blkg,
        //    'noktp' => $request->noktp,
        //    'prov' => $request->provinsi,
        //    'kota' => $request->kota,
        //    'kec' => $request->kecamatan,
        //    'des' => $request->desa,
        //    'rw' => $request->rw,
        //    'rt' => $request->rt,
        //    'no_telp' => $request->nohp,
        //    'fb' => $request->fb,
        //    'ig' => $request->ig,
        //    'twitter' => $request->twit,
        //    'email' => $request->email,
        //    'kata_sandi' => $request->kata_sandi,
        //    'level' => 'Anggota'
        //]);


        
        if($request){
            return redirect('/register/status')->with(['register_status_berhasil' => '
                      Data berhasil terkirim...
                      Harap tunggu beberapa waktu, Admin akan menghubungi mu melalui email
                ']);
        } else {
            return redirect('/register/status')->with('register_status_failed','Register gagal');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_detail = data::where('id',$id)->get();
        
        return view('/admin/detail', ['data_detail' => $data_detail,'title' => 'Detail']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
