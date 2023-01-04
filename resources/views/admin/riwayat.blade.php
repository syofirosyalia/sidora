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
                <th>Tanggal Donor</th>
<<<<<<< HEAD
                
            </tr>
            </thead>
            <tbody>
            @foreach($riwayat as $r )
                <tr>
                
                <td>{{ $r->nik }}</td>
                                    <td>{{ $r->nama }}</td>
                                    <td>{{ $r->tgl_donor }}</td>   
                    
                </tr>
             
                
                @endforeach
=======
                <th></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        
                    </td>
                </tr>
>>>>>>> f3b333f31f6bdf358cc0a571934f22874558d556
            </tbody>
    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_section')
@endsection
