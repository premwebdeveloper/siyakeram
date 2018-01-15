@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>All Area/Fields</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Area/Fields</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
    	<h2>
			<a href="{{ route('addAreaField') }}" class="btn btn-info">Add Area/Field</a>
    	</h2>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
	        <div class="ibox float-e-margins">

	            <div class="ibox-title">
	                <h5>Area/Fields</h5>
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
	                                <th>Area/Field</th>
	                                <th>Action</th>
	                            </tr>
	                        </thead>
	                        <tbody>

	                            @foreach($area_field as $area)

	                                <tr class="gradeX">
	                                    <td id="existAreaField_{{ $area->id }}">{{ $area->area_field }}</td>
	                                    <td>
                                            <a class="btn btn-success editAreaField" href="javascript:;" id="{{ $area->id }}">
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

<div id="areaFieldModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Area Field</h4>
        </div>
        <div class="modal-body">
            <p>
                <form method="post" action="{{ route('editAreaField') }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="area_field_id" id="area_field_id">

                    <div class="form-group">
                        <input type="text" name="area_field" id="area_field" required="required" class="form-control" placeholder="Area / Field">
                    </div>

                    <div class="form-group text-right">
                        <input type="submit" name="editAreaField" class="btn btn-warning" id="editAreaField" value="Update">
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
        $(document).on('click', '.editAreaField', function(){
            var id = $(this).attr('id');
            var area_field = $('#existAreaField_'+id).text();

            $('#area_field_id').val(id);
            $('#area_field').val(area_field);
            $('#areaFieldModal').modal('show');
        });
    });
</script>
@endsection