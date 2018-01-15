@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>All Annual Income</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Annual Income</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
    	<h2>
			<a href="{{ route('addAnnualIncome') }}" class="btn btn-info">Add Annual Income</a>
    	</h2>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
	        <div class="ibox float-e-margins">

	            <div class="ibox-title">
	                <h5>Annual Incomes</h5>
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
	                                <th>Annual Income</th>
	                                <th>Action</th>
	                            </tr>
	                        </thead>
	                        <tbody>

	                            @foreach($annual_income as $income)

	                                <tr class="gradeX">
	                                    <td id="existAnnualIncome_{{ $income->id }}">{{ $income->annual_income }}</td>
	                                    <td>
                                            <a class="btn btn-success editAnnualIncome" href="javascript:;" id="{{ $income->id }}">
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

<div id="casteAnnualIncome" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Annual Income</h4>
        </div>
        <div class="modal-body">
            <p>
                <form method="post" action="{{ route('editAnnualIncome') }}">

                    {{ csrf_field() }}

                    <input type="hidden" name="annual_income_id" id="annual_income_id">

                    <div class="form-group">
                        <input type="text" name="annual_income" id="annual_income" required="required" class="form-control" placeholder="Annual Income">
                    </div>

                    <div class="form-group text-right">
                        <input type="submit" name="editAnnualIncome" class="btn btn-warning" id="editAnnualIncome" value="Update">
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
        $(document).on('click', '.editAnnualIncome', function(){
            var id = $(this).attr('id');
            var caste = $('#existAnnualIncome_'+id).text();

            $('#annual_income_id').val(id);
            $('#annual_income').val(caste);
            $('#casteAnnualIncome').modal('show');
        });
    });
</script>
@endsection