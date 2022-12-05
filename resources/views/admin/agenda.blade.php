@extends('template_admin')

@section('title_section')
   Agenda Donor
@endsection

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">agenda donor</h2>
    <h5 class="text-white op-7 mb-2">Halaman agenda</h5>
@endsection

@section('container_section')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th> <a href="" class="far fa-calendar-alt fa-3x text-danger"></a></th>
                <th>Lokasi</th>
                <th>Waktu</th>
                <th>Target Kantong</th>
                
                
            </tr>
            
           
            </thead>
</table>
<h3><b>Jadwal Donor UTD PMI Indramayu</b></h3>
            <a href="" class="far fa-calendar-alt fa-2x text-danger"></a> <th>Senin - Minggu, 24 Jam</th>
            </div>
        </div>
    </div>
@endsection

@section('script_section')
@endsection
