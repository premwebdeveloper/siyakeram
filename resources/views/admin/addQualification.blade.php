@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add Qualification</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li>  Castes </li>
            <li class="active">
                <strong>Add Qualification</strong>
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
                <h5>Add Qualification</h5>
            </div>
            <div class="ibox-content">
                <form method="post" class="form-horizontal" action="{{ route('add_qualification') }}">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Qualification</label>
                        <div class="col-sm-8">
                            <input type="text" name="qualification" id="qualification" class="form-control" placeholder="Qualification" required="required">
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" name="add_caste" type="submit">Add Qualification</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection