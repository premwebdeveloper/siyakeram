@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>All Employed As</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Employed As</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
    	<h2>
			<a href="{{ route('addEmployedAs') }}" class="btn btn-info">Add Employed As</a>
    	</h2>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
	        <div class="ibox float-e-margins">

	            <div class="ibox-title">
	                <h5>Employed As</h5>
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
	                                <th>Employed As</th>
	                                <th>Action</th>
	                            </tr>
	                        </thead>
	                        <tbody>

	                            @foreach($employed_as as $employed)

	                                <tr class="gradeX">
	                                    <td id="existEmployedAs_{{ $employed->id }}">{{ $employed->employed_as }}</td>
	                                    <td>
                                            <a class="btn btn-success editEmployedAs" href="javascript:;" id="{{ $employed->id }}">
                                                Edit
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

<div id="employedAsModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Employed As</h4>
        </div>
        <div class="modal-body">
            <p>
                <form method="post" action="{{ route('editEmployedAs') }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="employed_as_id" id="employed_as_id">

                    <div class="form-group">
                        <input type="text" name="employed_as" id="employed_as" required="required" class="form-control" placeholder="Employed As">
                    </div>

                    <div class="form-group text-right">
                        <input type="submit" name="editEmployedAs" class="btn btn-warning" id="editEmployedAs" value="Update">
                    </div>
                </form>
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal">Close</button>
        </div>
    </div>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click', '.editEmployedAs', function(){
            var id = $(this).attr('id');
            var employed_as = $('#existEmployedAs_'+id).text();

            $('#employed_as_id').val(id);
            $('#employed_as').val(employed_as);
            $('#employedAsModal').modal('show');
        });
    });
</script>
@endsection