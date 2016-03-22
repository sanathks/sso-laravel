@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('verticals/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Domain</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="domain" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Vertical Id</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="vertical_id" value="{{ $vertical_id }}" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Vertical Secret</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="vertical_secret" value="{{ $vertical_secret }}" readonly="true">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
