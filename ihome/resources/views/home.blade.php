@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        
                    @endif
                         You are logged in!

                         <h3>Your Records</h3>
                    @if(count($records) > 0 )
                         <table class="table table-striped">
                             <tr>
                                 <th>Title</th>
                                 <th></th>
                                 <th></th>
                             </tr>
                        @foreach($records as $record)
                             <tr>
                                 <td><a href="/records/{{$record->id}}">{{$record->name}}</a></td>
                                 <td><a href="/records/{{$record->id}}/edit"><button class="btn btn-default">Edit</button></a></td>
                                 <td>
                                    {!!Form::open(['action'=>['OrphansController@destroy',$record->id],'method'=>'POST','class'=>'float-right']) !!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                    {!!Form::close() !!}
                                 </td>
                             </tr>
                        @endforeach

                         </table>
                    @else
                         <p>You have no records</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
