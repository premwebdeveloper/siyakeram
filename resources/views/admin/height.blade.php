@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>All Heights</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Heights</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
    	<h2>
			<a href="{{ route('addHeight') }}" class="btn btn-info">Add Height</a>
    	</h2>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
	        <div class="ibox float-e-margins">

	            <div class="ibox-title">
	                <h5>Heights</h5>
	                <div class="ibox-tools">
	                    <a class="collapse-link">
	                        <i class="fa fa-chevron-up"></i>
	                    </a>
	                </div>
	            </div>

	            <div class="ibox-content">

	                @if(session('status'))
	                   <div class="alert alert-success">{{ session('status') }}</div>
	                @endif

	                <div class="table-responsive">
	                    <table class="table table-striped table-bordered table-hover dataTables-example" >
	                        <thead>
	                            <tr>
	                                <th>Height</th>
	                                <th>Action</th>
	                            </tr>
	                        </thead>
	                        <tbody>

	                            @foreach($heights as $height)

	                                <tr class="gradeX">
	                                    <td>{{ $height->height }}</td>
	                                    <td>
	                                        <a class="btn btn-success" href="{{ route('deleteHeight', ['id' => $height->id]) }}">
	                                            Delete
	                                        </a>
	                                    </td>
	                                </tr>

	                            @endforeach

	                        </tbody>
	                    </table>
	                </div>

	            </div>
	        </div>
    	</div>
    </div>
</div>

@endsection