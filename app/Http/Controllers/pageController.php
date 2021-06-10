<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\data;

class pageController extends Controller
{
    public function loginPage()
    {
    	
        return view('index', ['title' => 'Login']);
    }

    public function login(Request $request)
    {
        if($request->session()->has('anggota')){
            return redirect('/beranda');
            return false;
        }

        if($request->session()->has('admin')){
            return redirect('/admin');
            return false;
        }

        $request->validate([
            'no_pin' => 'required',
            'kata_sandi' => 'required'
        ]);

        $anggota = data::where([
                    'no_pin' => $request->no_pin, 
                    'kata_sandi' => $request->kata_sandi])->count();

        if($anggota > 0){
            $request->session()->put('anggota',$request->no_pin);
            return redirect('/beranda');

        } else {
            return redirect('/')->with('','No PIN atau Kata sandi salah');
        }

    }

    public function adminPage(Request $request)
    {
        if(!$request->session()->has('admin')){
            //return redirect('/')->with('login_dahulu','Yuk masuk dengan mengisi form!');
            echo 'bukan admin';
            return false;
        }
        return view('admin.index', ['title' => 'Dashboard']);
    }

    public function beranda(Request $request)
    {

        if($request->session()->has('anggota')){

            $no_pin = $request->session()->get('anggota');
            $data = data::where([
                    'no_pin' => $no_pin
                    ])->get();

            return view('/beranda', ['title' => 'Beranda','data_detail' => $data]);
        } else if(!$request->session()->has('anggota')) {
            return redirect('/')->with('login_dahulu','Yuk masuk dengan mengisi form!');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('anggota');
        return redirect('/');
    }

    public function register()
    {
        return view('/register', ['title' => 'Register']);
    }

    public function register_status()
    {
        
        return view('/register_status');
    }

    public function admin_anggota()
    {
        $data = data::all();
        return view('/admin/anggota', ['title' => 'Data anggota','data' => $data]); 
    }

    public function logout_admin(Request $request)
    {
        $request->session()->forget('admin');
        return redirect('/');
    }
}
