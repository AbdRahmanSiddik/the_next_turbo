<?php

namespace App\Http\Controllers;

use App\Mail\AcceptRegistration;
use Illuminate\Http\Request;
use App\Models\Registrasi;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        $registrations = Registrasi::get();

        return view('admin.list_registrasi', compact('registrations'));
    }

    public function accept($kode)
    {
        $data = [
            'status' => 'accepted'
        ];

        $registrasi = Registrasi::where('token_registrasi', $kode)->first();

        Registrasi::where('token_registrasi', $kode)->update($data);

        Mail::to($registrasi->email)->send(new AcceptRegistration($kode));

        return redirect('/home');
    }

    public function denied($kode)
    {
        $data = [
            'status' => 'pending'
        ];

        $registrasi = Registrasi::where('token_registrasi', $kode)->first();

        Registrasi::where('token_registrasi', $kode)->update($data);

        // Mail::to($registrasi->email)->send(new AcceptRegistration($kode));

        return redirect('/home');
    }

    public function reject($kode)
    {
        $data = [
            'status' => 'rejected'
        ];

        $registrasi = Registrasi::where('token_registrasi', $kode)->first();

        Registrasi::where('token_registrasi', $kode)->update($data);

        // Mail::to($registrasi->email)->send(new AcceptRegistration($kode));

        return redirect('/home');
    }
}
