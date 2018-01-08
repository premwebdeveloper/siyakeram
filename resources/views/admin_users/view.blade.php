@extends('layouts.auth_app')

@section('content')

<style>
    .prtd{
        color: #000;
        font-weight: bold;
    }
</style>
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

        <div class="col-md-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Profile Detail</h5>
                </div>

                <div>
                    <div class="ibox-content no-padding border-left-right">
                        <img alt="image" class="img-responsive" src="storage/app/uploads/profile_images/{{ $images->image }}">
                    </div>
                    <div class="ibox-content profile-content">
                        <h4><strong>{{$user->name}}</strong></h4>
                        <h5><strong>{{$user->email}}</strong></h5>
                        <h5><strong>{{$user->phone}}</strong></h5>
                        <p><i class="fa fa-map-marker"></i> Address :  {{$user->address}}, {{$cities_details->name}}, {{$states_details->name}}, {{$countries_details->name}} - {{$user->zipcode}}</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <h5>User Informations</h5>
                </div>

                <div class="ibox-content">
                    <div class="feed-activity-list">

                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1">Basic Detail</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Family Detail</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3">Education & Career Detail</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-4">Address Detail</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-5">User Images</a></li>
                            </ul>
                            <div class="tab-content">

                                <!-- User personal information -->
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <strong>Biography</strong>

                                        <p> {{$user->bio}} </p>

                                        <table class="table table-bordered">

                                            <tbody>
                                                <tr>
                                                    <td>Full Name</td>
                                                    <td class="prtd">{{ $user->name }}</td>
                                                    <td>Phone No.</td>
                                                    <td class="prtd">{{ $user->phone }}</td>
                                                </tr>                                               
                                                <tr>
                                                    <td>DOB</td>
                                                    <?php

                                                        if($user->month == '01')
                                                        {
                                                            $month = 'January';
                                                        }
                                                        if($user->month == '02')
                                                        {
                                                            $month = 'February';
                                                        }
                                                        if($user->month == '03')
                                                        {
                                                            $month = 'March';
                                                        }
                                                        if($user->month == '04')
                                                        {
                                                            $month = 'April';
                                                        }
                                                        if($user->month == '05')
                                                        {
                                                            $month = 'May';
                                                        }
                                                        if($user->month == '06')
                                                        {
                                                            $month = 'June';
                                                        }
                                                        if($user->month == '07')
                                                        {
                                                            $month = 'July';
                                                        }
                                                        if($user->month == '08')
                                                        {
                                                            $month = 'August';
                                                        }                                           
                                                        if($user->month == '09')
                                                        {
                                                            $month = 'September';
                                                        }
                                                        if($user->month == '10')
                                                        {
                                                            $month = 'October';
                                                        }
                                                        if($user->month == '11')
                                                        {
                                                            $month = 'November';
                                                        }
                                                        if($user->month == '12')
                                                        {
                                                            $month = 'December';
                                                        }

                                                    ?>
                                                    <td class="prtd">@if($user->date) {{$user->date}} @endif, @if($user->month) {{$month}} @endif @if($user->year) {{$user->year}} @endif</td>

                                                    <td>Religion</td>
                                                    <td class="prtd">@if($user->religion) {{$user->religion}} @endif</td>
                                                </tr>                                                
                                                <tr>
                                                    <td>Mother Tongue</td>
                                                    <td class="prtd">@if(!empty($mother_details->mother_tongue)) {{$mother_details->mother_tongue}} @endif</td>

                                                    <td>Height</td>
                                                    <td class="prtd">@if(!empty($height_details->height)) {{$height_details->height}} @endif</td>
                                                </tr>                                                

                                                <tr>
                                                <?php

                                                    if($user->marital_status == '1')
                                                    {
                                                        $Never = 'Never Married';
                                                    }
                                                    elseif($user->marital_status == '2')
                                                    {
                                                        $Never = 'Annulled';
                                                    }
                                                    elseif($user->marital_status == '3')
                                                    {
                                                        $Never = 'Awaiting Divorce';
                                                    }
                                                    elseif($user->marital_status == '4')
                                                    {
                                                        $Never = 'Divorced';
                                                    }
                                                    elseif($user->marital_status == '5')
                                                    {
                                                        $Never = 'Widowed';
                                                    }
                                                    else
                                                    {
                                                        $Never = 'Never Married';
                                                    }
                                                ?>
                                                    <td>Marital Status</td>
                                                    <td class="prtd">@if(!empty($Never)) {{$Never}} @endif</td>

                                                    <td>Caste</td>
                                                    <td class="prtd">@if(!empty($caste_details->caste)) {{$caste_details->caste}} @endif</td>
                                                </tr>                                                

                                                <tr>
                                                    <td>Sub-caste(optional)</td>
                                                    <td class="prtd">@if(!empty($user->sub_caste)) {{$user->sub_caste}} @endif</td>

                                                    <td>Complexion</td>
                                                    <td class="prtd">@if(!empty($user->complexion)) {{$user->complexion}} @endif</td>
                                                </tr>                                                

                                                <tr>
                                                    <td>Manglik</td>
                                                    <td class="prtd">@if(!empty($user->manglik)) {{$user->manglik}} @endif</td>

                                                    <td>Gotra</td>
                                                    <td class="prtd">@if(!empty($user->gotra)) {{$user->gotra}} @endif</td>
                                                </tr>

                                                <tr>
                                                    <?php
                                                        if($user->diet == '1')
                                                        {
                                                            $veg = 'Vegetarian';
                                                        }
                                                        elseif($user->diet == '2')
                                                        {
                                                            $veg = 'Non-Vegetarian';
                                                        }
                                                        else
                                                        {
                                                            $veg = 'Vegetarian';
                                                        }
                                                    ?>
                                                    <td>Diet</td>
                                                    <td class="prtd">@if(!empty($veg)) {{$veg}} @endif</td>

                                                    <td>Time of birth</td>
                                                    <td class="prtd">@if(!empty($user->birth_hour)) {{$user->birth_hour}} : @endif @if(!empty($user->birth_mint)) {{$user->birth_mint}} @endif : @if(!empty($user->birth_sec)) {{$user->birth_sec}} @endif</td>
                                                </tr>

                                                <tr>

                                                    <td>Place of birth</td>
                                                    <td class="prtd">@if(!empty($user->birth_place )) {{$user->birth_place }} @endif</td>

                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                               <!-- Family Information -->
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">

                                        <table class="table table-bordered">
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

                                <!-- Education Information -->
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">
                                        <strong>&nbsp;</strong>

                                        <table class="table table-bordered">
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

                                 <!-- Address Information -->
                                <div id="tab-4" class="tab-pane">
                                    <div class="panel-body">
                                        <strong>&nbsp;</strong>

                                        <table class="table table-bordered">
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

                                <!-- User Images Information -->
                                <div id="tab-5" class="tab-pane">
                                    <div class="panel-body">
                                        <strong>&nbsp;</strong>

                                        <table class="table table-bordered">
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