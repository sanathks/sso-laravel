@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Verticals</div>
                <div class="panel-body">
                    <a href="/verticals/register" class="btn btn-primary pull-right"> Register </a>
                    <br>
                    <br>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Domain</th>
                            <th>Vertical Id</th>
                            <th>Vertical secret</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($verticals as $vertical)
                               <tr>
                                   <td>{{ $vertical->name }}</td>
                                   <td>{{ $vertical->domain }}</td>
                                   <td>{{ $vertical->vertical_id }}</td>
                                   <td>{{ $vertical->vertical_secret }}</td>
                                   <td><a href="/verticals/edit/{{ $vertical->id }}" class="glyphicon glyphicon-pencil"> </a> | <a href="/verticals/delete/{{ $vertical->id }}" class="glyphicon glyphicon-trash"> </a></td>

                               </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
