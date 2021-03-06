@extends('layouts.public_app')

@section('content')

    <div class="container container-full" style="padding-top:30px;">
        <div class="row light searchpage mt-95">

            <div class="col-md-3 col-sm-12 col-xs-12 mt-20 no-padding-sm">
                <div class="Refine-Search">
                    <h2>Refine Your Search </h2>

                    <div class="row" id="filter-collapse">
                        <ul class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php
                                if(!empty($looking_for))
                                {
                            ?>
                            <input type="hidden" value="<?= $looking_for;?>" class="selected_checkbox" id="selected_input">
                            <?php
                                }
                            ?>
                            <!-- Marital Status -->
                            <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterMatrialStatus">
                                          Marital Status
                                        </a>
                                    </h4>
                                </div>
                                <div id="FilterMatrialStatus" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul>
                                            <!-- <li class="lvcheckbox">
                                                <input type="checkbox" class="marital_status selected_checkbox" name="marital[]" id="marital_0" value="0">
                                                <label for="marital_0" title="all">
                                                    <span class="lvwordellips">All</span>
                                                    <span class="numberresult"></span>
                                                </label>
                                            </li> -->

                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="marital_status selected_checkbox" name="marital[]" id="marital_1" value="1">
                                                <label for="marital_1" title="Never Married">
                                                    <span class="lvwordellips">Never Married</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="marital_status selected_checkbox" name="marital[]" id="marital_2" value="2">
                                                <label for="marital_2" title="Annulled">
                                                    <span class="lvwordellips">Annulled</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="marital_status selected_checkbox" name="marital[]" id="marital_3" value="3">
                                                <label for="marital_3" title="Awaiting Divorce">
                                                    <span class="lvwordellips">Awaiting Divorce</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="marital_status selected_checkbox" name="marital[]" id="marital_4" value="4">
                                                <label for="marital_4" title="Divorces">
                                                    <span class="lvwordellips">Divorces</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="marital_status selected_checkbox" name="marital[]" id="marital_5" value="5">
                                                <label for="marital_5" title="Widowed">
                                                    <span class="lvwordellips">Widowed</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Annual Income -->
                            <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterIncome" aria-expanded="false">Annual Income</a>
                                    </h4>
                                </div>
                                <div id="FilterIncome" class="panel-collapse collapse in">
                                    <div class="panel-body Max-height-filter">
                                        <ul>
                                            <!-- <li class="lvcheckbox">
                                                <input type="checkbox" class="annual_income selected_checkbox" name="income[]" id="income_0" value="0">
                                                <label for="income_0" title="all">
                                                    <span class="lvwordellips">All</span>
                                                    <span class="numberresult"></span>
                                                </label>
                                            </li> -->
                                            @foreach($annual_income as $income)
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="annual_income selected_checkbox" name="income[]" id="income_{{ $income->id }}" value="{{ $income->id }}">
                                                <label for="income_{{ $income->id }}" title="{{ $income->annual_income }}">
                                                    <span class="lvwordellips">{{ $income->annual_income }}</span>
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Caste -->
                            <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterCaste" aria-expanded="false">Caste</a>
                                    </h4>
                                </div>
                                <div id="FilterCaste" class="panel-collapse collapse in">
                                    <div class="panel-body Max-height-filter">
                                        <ul>
                                            <!-- <li class="lvcheckbox">
                                                <input type="checkbox" class="caste selected_checkbox" name="caste[]" id="caste_0" value="0">
                                                <label for="caste_0" title="all">
                                                    <span class="lvwordellips">All</span>
                                                </label>
                                            </li> -->
                                            @foreach($caste as $cast)
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="caste selected_checkbox" name="caste[]" id="caste_{{ $cast->id }}" value="{{ $cast->id }}">
                                                <label for="caste_{{ $cast->id }}" title="{{ $cast->caste }}">
                                                    <span class="lvwordellips">{{ $cast->caste }}</span>
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Height -->
                            <!-- <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterHeight" aria-expanded="false">Height</a>
                                    </h4>
                                </div>
                                <div id="FilterCaste" class="panel-collapse collapse in">
                                    <div class="panel-body Max-height-filter">
                                        <ul>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="height selected_checkbox" name="height[]" id="height_0" value="0">
                                                <label for="height_0" title="all">
                                                    <span class="lvwordellips">All</span>
                                                </label>
                                            </li>
                                            @foreach($height as $hyt)
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="height selected_checkbox" name="height[]" id="height_{{ $hyt->id }}" value="{{ $hyt->id }}">
                                                <label for="height_{{ $hyt->id }}" title="{{ $hyt->height }}">
                                                    <span class="lvwordellips">{{ $hyt->height }}</span>
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li> -->

                            <!-- Mother tongue -->
                            <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterMotherTongue" aria-expanded="false">Mother Tongue</a>
                                    </h4>
                                </div>
                                <div id="FilterMotherTongue" class="panel-collapse collapse in">
                                    <div class="panel-body Max-height-filter">
                                        <ul>
                                            <!-- <li class="lvcheckbox">
                                                <input type="checkbox" class="mother_tongue selected_checkbox" name="tongue[]" id="tongue_0" value="0">
                                                <label for="tongue_0" title="all">
                                                    <span class="lvwordellips">All</span>
                                                </label>
                                            </li> -->
                                            @foreach($mother_tongue as $tongue)
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="mother_tongue selected_checkbox" name="tongue[]" id="tongue_{{ $tongue->id }}" value="{{ $tongue->id }}">
                                                <label for="tongue_{{ $tongue->id }}" title="{{ $tongue->mother_tongue }}">
                                                    <span class="lvwordellips">{{ $tongue->mother_tongue }}</span>
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Education -->
                            <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterEducation" aria-expanded="false">Education</a>
                                    </h4>
                                </div>
                                <div id="FilterEducation" class="panel-collapse collapse in">
                                    <div class="panel-body Max-height-filter">
                                        <ul>
                                            <!-- <li class="lvcheckbox">
                                                <input type="checkbox" class="education selected_checkbox" name="education[]" id="education_0" value="0">
                                                <label for="education_0" title="all">
                                                    <span class="lvwordellips">All</span>
                                                </label>
                                            </li> -->
                                            @foreach($educational_qualification as $qualification)
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="education selected_checkbox" name="education[]" id="education_{{ $qualification->id }}" value="{{ $qualification->id }}">
                                                <label for="education_{{ $qualification->id }}" title="{{ $qualification->education }}">
                                                    <span class="lvwordellips">{{ $qualification->education }}</span>
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Employed As -->
                            <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSeven">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterEmployedAs" aria-expanded="false">Employed As</a>
                                    </h4>
                                </div>
                                <div id="FilterEmployedAs" class="panel-collapse collapse in">
                                    <div class="panel-body Max-height-filter">
                                        <ul>
                                            <!-- <li class="lvcheckbox">
                                                <input type="checkbox" class="employed_as selected_checkbox" name="employed[]" id="employed_0" value="0">
                                                <label for="employed_0" title="all">
                                                    <span class="lvwordellips">All</span>
                                                </label>
                                            </li> -->
                                            @foreach($employed_as as $employed)
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="employed_as selected_checkbox" name="employed[]" id="employed_{{ $employed->id }}" value="{{ $employed->id }}">
                                                <label for="employed_{{ $employed->id }}" title="{{ $employed->employed_as }}">
                                                    <span class="lvwordellips">{{ $employed->employed_as }}</span>
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Diet -->
                            <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingEight">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterDiet" aria-expanded="false">Diet</a>
                                    </h4>
                                </div>
                                <div id="FilterDiet" class="panel-collapse collapse in">
                                    <div class="panel-body Max-height-filter">
                                        <ul>
                                            <!-- <li class="lvcheckbox">
                                                <input type="checkbox" class="diet selected_checkbox" name="diet[]" id="diet_0" value="0">
                                                <label for="diet_0" title="all">
                                                    <span class="lvwordellips">All</span>
                                                </label>
                                            </li> -->
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="diet selected_checkbox" name="diet[]" id="diet_1" value="1">
                                                <label for="diet_1" title="Non-Veg">
                                                    <span class="lvwordellips">Non-Veg</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="diet selected_checkbox" name="diet[]" id="diet_2" value="2">
                                                <label for="diet_2" title="Veg">
                                                    <span class="lvwordellips">Veg</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Religion -->
                            <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingNine">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterReligion" aria-expanded="false">Religion</a>
                                    </h4>
                                </div>
                                <div id="FilterReligion" class="panel-collapse collapse in">
                                    <div class="panel-body Max-height-filter">
                                        <ul>
                                            <!-- <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_all" value="all">
                                                <label for="religion_all" title="all">
                                                    <span class="lvwordellips">All</span>
                                                </label>
                                            </li> -->
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_Hindu" value="Hindu">
                                                <label for="religion_Hindu" title="Hindu">
                                                    <span class="lvwordellips">Hindu</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_Jain" value="Jain">
                                                <label for="religion_Jain" title="Jain">
                                                    <span class="lvwordellips">Jain</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_Muslim" value="Muslim">
                                                <label for="religion_Muslim" title="Muslim">
                                                    <span class="lvwordellips">Muslim</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_Sikh" value="Sikh">
                                                <label for="religion_Sikh" title="Sikh">
                                                    <span class="lvwordellips">Sikh</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_Christian" value="Christian">
                                                <label for="religion_Christian" title="Christian">
                                                    <span class="lvwordellips">Christian</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_Spiritual" value="Spiritual">
                                                <label for="religion_Spiritual" title="Spiritual">
                                                    <span class="lvwordellips">Spiritual</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_Parsi" value="Parsi">
                                                <label for="religion_Parsi" title="Parsi">
                                                    <span class="lvwordellips">Parsi</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_Jewish" value="Jewish">
                                                <label for="religion_Jewish" title="Jewish">
                                                    <span class="lvwordellips">Jewish</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_Buddhist" value="Buddhist">
                                                <label for="religion_Buddhist" title="Buddhist">
                                                    <span class="lvwordellips">Buddhist</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_no religion" value="No Religion">
                                                <label for="religion_no religion" title="No Religion">
                                                    <span class="lvwordellips">No Religion</span>
                                                </label>
                                            </li>
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="religion selected_checkbox" name="religion[]" id="religion_Other" value="Other">
                                                <label for="religion_Other" title="Other">
                                                    <span class="lvwordellips">Other</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- States As -->
                            <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTen">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterStates" aria-expanded="false">States</a>
                                    </h4>
                                </div>
                                <div id="FilterEmployedAs" class="panel-collapse collapse in">
                                    <div class="panel-body Max-height-filter">
                                        <ul>
                                            @foreach($states as $state)
                                            <li class="lvcheckbox">
                                                <input type="checkbox" class="state selected_checkbox" name="state[]" id="state_{{ $state->id }}" value="{{ $state->id }}">
                                                <label for="state_{{ $state->id }}" title="{{ $state->name }}">
                                                    <span class="lvwordellips">{{ $state->name }}</span>
                                                </label>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingEleven">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" href="#FilterCities" aria-expanded="false">Cities</a>
                                    </h4>
                                </div>
                                <div id="FilterEmployedAs" class="panel-collapse collapse in">
                                    <div class="panel-body Max-height-filter">
                                        <ul id="searched_city"></ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="clear" style="height:50px;"></div>
                        <div class="refine-float-btn">
                            <button type="submit" class="btn btn-theme padd-10 btn-block ripplelink" id="listingHideShow1" data-original-title="" title=""><i class="fa fa-filter"></i> Filter Search</button>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-md-9 col-sm-12 col-xs-12 no-padding-sm pro-m10">
                <ul class="ul-profile" id="searched_data">

                    @if(!empty($search_results[0]))
                        @foreach($search_results as $result)

                            <?php
                            // Get user Images
                            $images = DB::table('user_images')->where('user_id', $result->user_id)->get();
                            
                            if(count($images) > 1)
                            {
                                foreach ($images as $img)
                                {
                                    $image = $img->image;
                                    if($image != 'user.png')
                                    {
                                        $image = $image;
                                        break;
                                    }
                                }
                            }
                            else

                            {

                                if(!empty($looking_for))
                                {
                                    if($looking_for == 2)
                                    {
                                        $image = 'user1.png';
                                    }
                                    else{
                                        $image = 'user.png';
                                    }
                                }

                                else{

                                    if($result->gender == 2)
                                    {
                                        $image = 'user1.png';
                                    }
                                    else{
                                        $image = 'user.png';
                                    }
                                }

                            }
                            ?>
                            <li>
                                <div class="strip_profile" style="visibility: visible; animation-name: fadeIn;">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padlr0">
                                            <div class="img_list">
                                                <a href="javascript:;" target="_blank">
                                                    <img src="storage/app/uploads/profile_images/{{ $image }}" class="img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 padlr0">

                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padlr0 min-height-mobile">
                                                <div class="Profile_list-name">
                                                    <h3>
                                                        <a href="javascript:;" target="_blank">
                                                            <span class="lvNameellips"> {{$result->name}}</span>
                                                        </a>
                                                        <span class="lv-id">{{$result->unique_id}}</span>
                                                    </h3>

                                                    <?php
                                                    $date = date('Y-m-d');
                                                    $y = date('Y', strtotime($date));
                                                    $year = $result->year;
                                                    $age = $y - $year;
                                                    ?>

                                                    <ul class="add_info">
                                                        <li>Age - {{ $age }}</li>
                                                        <li>Height - {{ $result->height }}</li>
                                                        <li>Location - {{ $result->state }}</li>
                                                        <li>Religion - {{ $result->religion }}</li>
                                                        <li>Caste - {{ $result->caste }}</li>
                                                        <li>Mother Tongue - {{ $result->mother_tongue }}</li>
                                                        <li>Profession - {{ $result->employed_as }}</li>
                                                        <li>Education - {{ $result->education }}</li>
                                                        <li>Annual Income - {{ $result->annual_income }}</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padlr0 btn-bottom-mobile">
                                                <div class="profile-actions">
                                                    <div class="gallery">
                                                        <p>
                                                            <a href="{{ route('user_profile', ['id' => $result->user_id] ) }}" class="p-action-btn btn-grey-light border-r2 ripplelink">
                                                                <i class="fa fa-eye"></i> <span>View</span>
                                                            </a>
                                                        </p>

                                                        <p>
                                                            <?php

                                                            if($user = Auth::user())
                                                            {
                                                                ?>
                                                                <a href="javascript:;" data-toggle="modal" data-target="#showmodel" class="p-action-btn btn-grey-light border-r2 ripplelink">
                                                                    <i class="fa fa-phone"></i> <span>Contact</span>
                                                                </a>
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                <a href="{{ route('login') }}" class="p-action-btn btn-grey-light border-r2 ripplelink">
                                                                    <i class="fa fa-phone"></i> <span>Contact</span>
                                                                </a>
                                                                <?php
                                                            }
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <li class="alert alert-danger">No Result found!</li>
                    @endif
                </ul>
            </div>

        </div>
    </div>

    <div class="modal animated fade in" id="showmodel" tabindex="-1" role="dialog">
        <div class="modal-dialog lvmodal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body LVmodal">
                    <h3>Contact Details</h3>
                    <a href="#" class="close-LVmodal" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a>
                    <div class="LVModal-content">
                        <p><i class="fa fa-refresh"></i><br></p>
                        <div style="line-height:15px;padding-left:10px;">
                            You are on a Free Membership Plan. Please upgrade your membership by availing our paid services to contact selected profiles.
                        </div>
                        <a href="{{route('membership')}}">
                            <button class="btn btn-theme ripplelink btn-shadow padd-10 mt-15">Upgrade Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
