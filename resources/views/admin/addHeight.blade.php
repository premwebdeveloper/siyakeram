@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add Height</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li>  Heights </li>
            <li class="active">
                <strong>Add Height</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
    	&nbsp;
    </div>
</div>

<br />

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Add Height</h5>
            </div>
            <div class="ibox-content">
                <form method="post" class="form-horizontal" action="{{ route('add_height') }}">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Height</label>
                        <div class="col-sm-8">
                            <input type="text" name="height" id="height" class="form-control" placeholder="Height" required="required">
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" name="add_height" type="submit">Add Height</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection