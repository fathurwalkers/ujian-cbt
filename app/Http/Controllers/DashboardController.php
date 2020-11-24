<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function login()
    {
        $status_login = session('status_login');

        if ($status_login) {
            return redirect()->route('dashboard-index');
        }
        return view('login');
    }

    public function postlogin(Request $request)
    {
        $data_admin = Admin::where('username', $request->username)->firstOrFail();
        if ($data_admin) {
            if ($data_admin->password == $request->password) {
                $status_login = session(['status_login' => $data_admin]);
                return redirect()->route('dashboard-index');
            }
        }
        return back();
    }

    public function logout_dashboard(Request $request)
    {
        $request->session()->forget('status_login');
        return redirect('/login');
    }

    public function register()
    {
        return view('register');
    }

    public function postregister(Request $request)
    {
        //
    }

    public function master_assesor()
    {
        return view('dashboard.assesor.master-assesor');
    }

    public function master_nomorujian()
    {
        return view('dashboard.nomorujian.master-nomor-ujian');
    }
}
