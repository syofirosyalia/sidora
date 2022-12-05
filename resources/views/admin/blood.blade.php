@extends('template_admin')

@section('title_section')
   stok darah
@endsection

@section('header_section')
    <h2 class="text-white pb-2 fw-bold">stok darah</h2>
    <h5 class="text-white op-7 mb-2">Halaman stok</h5>
@endsection

@section('container_section')
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-body">
                <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th>JENIS DARAH</th>
                
                <th align="center">A</th>
                <th>B</th>
                <th>AB</th>
                <th>O</th>
                
                
            </tr>
            
            <tr>
            <th>Whole Blood</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <a href="/prodi/create" class="btn btn-sm btn-warning">Edit</a>
                </th>
                
            </tr>
            <tr>
            <th>Package Red Cell</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <a href="/prodi/create" class="btn btn-sm btn-warning">Edit</a>
                </th>
            </tr>
            <tr>
            <th>Trombocyte</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <a href="/prodi/create" class="btn btn-sm btn-warning">Edit</a>
                </th>
            </tr>
            <tr>
            <th>Fresh Frozen Plasma</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>
                    <a href="/prodi/create" class="btn btn-sm btn-warning">Edit</a>
                </th>
            </tr>
            
</td>
        </thead>
</table>
            </div>
        </div>
    </div>
@endsection

@section('script_section')
@endsection
