@extends('template_home')

@section('container_section')
<div class="card full-height">
    <div class="card-body">
    <table class="table table-bordered table-striped" id="example1">
<thead>
<tr>
    
    <th>Tanggal Donor</th>
    <th>Lokasi</th>
    <th>Target Kantong</th>
    
    
   
</tr>


</thead>
<tbody>
    
    @foreach ($dataAgenda as $agendas)
    <tr>
        <td>{{ $agendas->tanggal }}</td>
        <td>{{ $agendas->tempat }}</td>
        <td>{{ $agendas->target }}</td>
        
    </tr>
    
    @endforeach
</tbody>
</table>

</div>
</div>
</div>
</div>
@endsection

