@extends('layouts.design')
@section('content')
@extends('layouts.reports')

<div class="container">
      <table id="table" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Sponsorship Type</th>
                    <th>Remarks</th>

                </tr>
            </thead>
            <tbody>
               @foreach($services as $service)
                    <tr>
                        <td>{{$service->name}}</td>
                        <td>{{$service->email}}</td>
                        <td>{{$service->mobile}}</td>
                        <td>{{$service->type}}</td>
                        <td>{{$service->remarks}}</td>

                    </tr>
                @endforeach
            </tbody>
      </table>

  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
    $('#table').DataTable();
     } );
</script>
@endsection