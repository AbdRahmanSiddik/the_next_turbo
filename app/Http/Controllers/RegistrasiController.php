<?php

namespace App\Http\Controllers;

use App\Mail\kirimEmail;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegistrasiController extends Controller
{
    public function daftar(Request $request)
    {
        $token = Str::random(20);
        $file = $request->file('gambar');

        $file_name = $request->nama.'__next__'.$request->kelas.'.'.$file->getClientOriginalExtension();

        $data = [
            'token_registrasi' => $token,
            'foto_profil' => $file_name,
            'email' => $request->email,
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'angkatan' => $request->angkatan,
            'link_portofolio' => $request->link_portofolio,
            'alasan' => $request->alasan,
        ];

        $file->move('profil', $file_name);
        Registrasi::create($data);

        Mail::to($request->email)->send(new kirimEmail($token));

        return redirect('/regis_email');
    }

    public function index()
    {
        return view('pages.registrasi');
    }

    public function status()
    {
        return view('pages.status');
    }

    // public function status_action(Request $request)
    // {
    //     $detail = Registrasi::where('token_registrasi', $request->token_registrasi)->first();


    //     return redirect('/status/'.$detail->token_registrasi);
    // }

    public function status_action(Request $request)
    {
        // Cari detail registrasi berdasarkan token_registrasi dari request
        $detail = Registrasi::where('token_registrasi', $request->token_registrasi)->first();

        // Jika $detail tidak ditemukan
        if (!$detail) {
            return redirect('/status')->with(['error' => 'Kode tidak ditemukan']);
        }

        // Jika $detail ditemukan, redirect dengan token_registrasi
        return redirect('/status/'.$detail->token_registrasi);
    }

    public function status_detail($token)
    {
        $detail = Registrasi::where('token_registrasi', $token)->first();
        return view('pages.status_detail', compact('detail'));
    }
}
