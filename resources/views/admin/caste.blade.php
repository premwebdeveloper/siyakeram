@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>All Castes</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Castes</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
    	<h2>
			<a href="{{ route('addCaste') }}" class="btn btn-info">Add Caste</a>
    	</h2>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
	        <div class="ibox float-e-margins">

	            <div class="ibox-title">
	                <h5>Castes</h5>
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
	                                <th>Caste</th>
	                                <th>Action</th>
	                            </tr>
	                        </thead>
	                        <tbody>

	                            @foreach($castes as $caste)
	                                <tr class="gradeX">
	                                    <td id="existCaste_{{ $caste->id }}">{{ $caste->caste }}</td>
	                                    <td>
                                            <!-- <a class="btn btn-success" href="{{ route('deleteCaste', ['id' => $caste->id]) }}">
                                                Delete
                                            </a> -->
	                                        <a class="btn btn-success editCaste" href="javascript:;" id="{{ $caste->id }}">
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

<div id="casteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Caste</h4>
        </div>
        <div class="modal-body">
            <p>
                <form method="post" action="{{ route('editCaste') }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="caste_id" id="caste_id">

                    <div class="form-group">
                        <input type="text" name="caste" id="caste" required="required" class="form-control" placeholder="Caste">
                    </div>

                    <div class="form-group text-right">
                        <input type="submit" name="editCaste" class="btn btn-warning" id="editCaste" value="Update">
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
        $(document).on('click', '.editCaste', function(){
            var id = $(this).attr('id');
            var caste = $('#existCaste_'+id).text();

            $('#caste_id').val(id);
            $('#caste').val(caste);
            $('#casteModal').modal('show');
        });
    });
</script>
@endsection