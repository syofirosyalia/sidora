<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendaModel;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function tentang_darah()
    {
        return view('home.tentangdarah');
    }

    public function agenda_donor()
    {

        $dataAgenda = AgendaModel::all();
        return view('home.agendadonor', compact($dataAgenda));
    }

    public function stok_darah()
    {
        return view('home.stokdarah');
    }
}
