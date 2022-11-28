<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function create_admin()
    {
        AdminModel::create([
            'name' => 'Admin',
            'phone' => '085973729267',
            'address' => 'Jl. Pahlawan',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'active' => 1,
        ]);

        return redirect('app-admin');
    }

    public function process_login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $admin = AdminModel::where('username', $username)->first();
        
        if ($admin) {
            if($admin->active == 1){
                return redirect('app-admin/dashboard');
            } else {
                session()->flash('msg', "<strong>Maaf, login gagal.</strong> <br> Akun belum di aktivasi!");
                session()->flash('msg_status', 'danger');
                return back();
            }
        } else {
            session()->flash('msg', "<strong>Maaf, login gagal.</strong> <br> Periksa kembali data login anda !");
            session()->flash('msg_status', 'danger');
            return back();
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function blood()
    {
        return view('admin.blood');
    }
    public function agenda()
    {
        return view('admin.agenda');
    }
    public function riwayat()
    {
        return view('admin.riwayat');
    }
}
