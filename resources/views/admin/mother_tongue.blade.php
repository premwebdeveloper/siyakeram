@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>All Mother Tongues</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Mother Tongues</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
    	<h2>
			<a href="{{ route('addMotherTongue') }}" class="btn btn-info">Add Mother Tongue</a>
    	</h2>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
	        <div class="ibox float-e-margins">

	            <div class="ibox-title">
	                <h5>Mother Tongues</h5>
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
	                                <th>Mother Tongue</th>
	                                <th>Action</th>
	                            </tr>
	                        </thead>
	                        <tbody>

	                            @foreach($mother_tongue as $tongue)

	                                <tr class="gradeX">
	                                    <td id="existTongue_{{ $tongue->id }}">{{ $tongue->mother_tongue }}</td>
	                                    <td>
                                            <a class="btn btn-success editMotherTongue" href="javascript:;" id="{{ $tongue->id }}">
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

<div id="tongueModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Mother Tongue</h4>
        </div>
        <div class="modal-body">
            <p>
                <form method="post" action="{{ route('editMotherTongue') }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="tongue_id" id="tongue_id">

                    <div class="form-group">
                        <input type="text" name="tongue" id="tongue" required="required" class="form-control" placeholder="Mother Tongue">
                    </div>

                    <div class="form-group text-right">
                        <input type="submit" name="editMotherTongue" class="btn btn-warning" id="editMotherTongue" value="Update">
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
        $(document).on('click', '.editMotherTongue', function(){
            var id = $(this).attr('id');
            var tongue = $('#existTongue_'+id).text();

            $('#tongue_id').val(id);
            $('#tongue').val(tongue);
            $('#tongueModal').modal('show');
        });
    });
</script>

@endsection