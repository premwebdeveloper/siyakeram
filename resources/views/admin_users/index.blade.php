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
    <div class="col-lg-2 text-right">
        <h2>
            <a href="{{ route('addUser') }}" class="btn btn-info">Add User</a>
        </h2>
    </div>
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
	                                        <a class="btn btn-info" title="Delete" href="#{{$user->user_id}}" data-toggle="modal">
	                                            <i class="fa fa-trash" aria-hidden="true"></i>
	                                        </a>
	                                    </td>
	                                </tr>
									<div id="{{$user->user_id}}" class="modal fade" role="dialog">
										<div class="modal-dialog">

											<!-- Modal content-->
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title"><i class="fa fa-trash"></i> Delete Profile Image</h4>
											  </div>
											  <div class="modal-body">
												<p>Are you sure you want to Delete ?</p>
											  </div>
											  <div class="modal-footer">
												<form method="post" action="{{route('delete')}}">

													{{ csrf_field() }}

													<input type="hidden" id="delt" name="user_id" value="{{$user->user_id}}">

													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<button class="btn btn-danger" type="submit" name="delete" value="{{$user->user_id}}">Delete</button>
												</form>
											  </div>
											</div>

										</div>
									</div>
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