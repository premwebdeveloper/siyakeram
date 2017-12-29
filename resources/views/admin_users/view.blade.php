@extends('layouts.auth_app')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>User Profile</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('users') }}">Users</a>
            </li>
            <li class="active">
                <strong>User Profile</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">

        <div class="col-md-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Profile Detail</h5>
                </div>
                <div>
                    <div class="ibox-content no-padding border-left-right">
                        <img alt="image" class="img-responsive" src="resources/uploads/profile_images/">
                    </div>
                    <div class="ibox-content profile-content">
                        <h4><strong>{{$user->name}}</strong></h4>
                        <h5><strong>{{$user->email}}</strong></h5>
                        <h5><strong>{{$user->phone}}</strong></h5>
                        <p><i class="fa fa-map-marker"></i> address </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <h5>User Informations</h5>
                </div>

                <div class="ibox-content">
                    <div class="feed-activity-list">

                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> Personal Information</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Optional Information</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3">Family Members</a></li>
                            </ul>
                            <div class="tab-content">

                                <!-- User personal information -->
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <strong>Biography</strong>

                                        <p> {{$user->bio}} </p>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Relation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <!-- User optional information -->
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Relation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                                <!-- User family members -->
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">
                                        <strong>&nbsp;</strong>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Relation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                    <td>asd</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection