@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>All Users</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Users</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right"> &nbsp; </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
	        <div class="ibox float-e-margins">

	            <div class="ibox-title">
	                <h5>Users</h5>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
	                                <th>Action</th>
	                            </tr>
	                        </thead>
	                        <tbody>

	                            @foreach($users as $user)

                                    @if($user->gender == 1)
                                        <?php $gender = 'Male'; ?>
                                    @else
                                        <?php $gender = 'Female'; ?>
                                    @endif

	                                <tr class="gradeX">
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
	                                    <td>{{ $gender }}</td>
	                                    <td>
                                            <a class="btn btn-success" title="View" href="{{ route('view', ['user_id' => $user->user_id]) }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
	                                        <a class="btn btn-info" title="Delete" href="{{ route('delete', ['user_id' => $user->user_id]) }}">
	                                            <i class="fa fa-trash" aria-hidden="true"></i>
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