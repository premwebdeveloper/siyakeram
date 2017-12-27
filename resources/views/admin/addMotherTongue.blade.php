@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add Mother Tongue</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li>  Mother Tongues </li>
            <li class="active">
                <strong>Add Mother Tongue</strong>
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
                <h5>Add Mother Tongue</h5>
            </div>
            <div class="ibox-content">
                <form method="post" class="form-horizontal" action="{{ route('add_mother_tongue') }}">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Mother Tongue</label>
                        <div class="col-sm-8">
                            <input type="text" name="mother_tongue" id="mother_tongue" class="form-control" placeholder="Mother Tongue" required="required">
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" name="add_mother_tongue" type="submit">Add Mother Tongue</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection