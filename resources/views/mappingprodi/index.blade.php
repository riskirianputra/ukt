
@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 7
    });

} );
</script>
@stop
@extends('layouts.applay')
@section('content')

<div class="col-lg-12 col-lg-offset-1">
  <h3><i class="fa fa-graduation-cap"></i> MAPPING JALUR
    <a href="{{ route('mappingprodi.create') }}" class="btn btn-info pull-right"> + Add </a>                         
      <hr> </h3>
        <div class="row" style="margin-top: 20px;">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header bg-info">&nbsp;</div>     
                <div class="card-body">
                  <h4 class="card-title"></h4>                  
                  <div class="table-responsive">
                    <table class="table table-secondary table-striped" id="table">
                      <thead>
                        <tr align="center">                                                    
							              <th><b>KODE PRODI SNMPTN</b></th>										
                          	<th><b>KODE PRODI SBMPTN</b></th>
                            <th><b>NAMA PRODI</b></th>
                            <th><b>ID PRODI SIREG</b></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr align="center">                         
                         	<td>{{ $data->kodeProdiSnmptn}}</td>
							            <td>{{ $data->kodeProdiSbmptn }}</td>
                          <td>{{ $data->namaProdi }}</td>
                          <TD>{{ $data->idprodisireg }}</TD>						                          	
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
               {{--  {!! $datas->links() !!} --}}
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection