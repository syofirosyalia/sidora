@extends('template_admin')

@section('title_section')
   Riwayat pendonor
@endsection

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">Riwayat Pendonor</h2>
    <h5 class="text-white op-7 mb-2">Halaman </h5>
@endsection

@section('container_section')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama Pendonor</th>
                <th>Terakhir Donor</th>
                <th>Donor Kembali</th>
                
                
            </tr>
           
            </thead>
</table>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_section')
@endsection
