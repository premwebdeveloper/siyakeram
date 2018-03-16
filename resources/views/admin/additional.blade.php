@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>All Success Stories</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="active">
                <strong>Success Stories</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
        <h2>
            <a href="{{ route('addAdditional') }}" class="btn btn-info">Add</a>
        </h2>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <h5>Success Stories</h5>
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
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i=1;
                                ?>
                                @foreach($additional as $add)

                                    <tr class="gradeX">
                                        <td>{{ $i }}</td>
                                        <td>{{ $add->name }}</td>
                                        <td id=""><img src="storage/app/uploads/profile_images/{{$add->image}}" class="img-responsive" width="200" height="150"></td>
                                        <td>{{ $add->description }}</td>
                                        <td>
                                            <a class="btn btn-success editCaste" href="javascript:;" id="{{ $add->id }}">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php $i++;?>
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
                <h4 class="modal-title"><i class="fa fa-trash"></i> Delete Profile Image</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Delete ?</p>
            </div>
            <div class="modal-footer">
                <form method="post" action="{{route('delete_success')}}">

                    {{ csrf_field() }}

                    <input type="hidden" id="user_id" name="user_id">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-danger" type="submit" name="delete">Delete</button>
                </form>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click', '.editCaste', function(){
            var id = $(this).attr('id');
            var caste = $('#existCaste_'+id).text();

            $('#user_id').val(id);
            $('#caste').val(caste);
            $('#casteModal').modal('show');
        });
    });
</script>
@endsection