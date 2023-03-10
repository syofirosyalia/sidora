<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendaModel;

class AgendaLPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'agenda';
        $slug = 'agenda';
        $dataAgenda = AgendaModel::all();
        return view('home.agendadonor', compact('title', 'slug', 'dataAgenda'));
    }

}