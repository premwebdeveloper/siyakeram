@extends('layouts.public_app')

@section('content')
<div class="container" style="padding-top: 170px;">
	<div class="row light searchpage mt-10">
      	<div class="col-md-12 col-sm-12 col-xs-12 mt-10 no-padding-sm">
          	<form method="POST" action="{{ route('search_for') }}" class="ng-pristine ng-valid">

                {{ csrf_field() }}

                <div class="search-panel" style="padding-bottom:30px;">

                    <div class="row looking-section">
            	        <div class="col-md-12 col-sm-12 no-padding">
            	        <div class="col-md-3 col-sm-4"><h3>I'm looking for a</h3></div>

            		        <div class="col-md-9 col-sm-8 center-small">
            		            <span class="segmented">
            						<label>
            						 	<input type="radio" name="looking_for" value="1" checked="checked">
            						 	<span class="label">Bride</span>
            						</label>
            						<label>
            							<input type="radio" name="looking_for" value="2">
            						  	<span class="label">Groom</span>
            						</label>
            					</span>
                            </div>

            	        </div>
                    </div>

                    <div class="controller">
            			<div class="row">
                            <div class="row mb-10">
                	          	<div class="col-md-3 control-group">
                                    <h4>Age From</h4>
                                    <select name="age_from" id="age_from" class="form-control">
                                        <option value="">Select Age</option>
                                    </select>
                	         	</div>

                	          	<div class="col-md-3 control-group">
                		            <h4>Age To</h4>
                                    <select name="age_to" id="age_to" class="form-control">
                                        <option value="">Select Age</option>
                                    </select>
                	         	</div>

                                <div class="col-md-3 control-group">
                                    <h4>Height From</h4>
                                    <select name="height_from" id="height_from" class="form-control">
                                        <option value="">Select Height</option>
                                        @foreach($height as $hyt)
                                            <option value="{{ $hyt->id }}">{{ $hyt->height }}</option>
                                        @endforeach
                                    </select>
                	         	</div>

                	          	<div class="col-md-3 control-group">
                                    <h4>Height to</h4>
                                    <select name="height_to" id="height_to" class="form-control">
                                        <option value="">Select Height</option>
                                        @foreach($height as $hyt)
                                            <option value="{{ $hyt->id }}">{{ $hyt->height }}</option>
                                        @endforeach
                                    </select>
                	         	</div>

                	         	<div class="col-md-3">
                	         		<h4>Religion </h4>
                                    <select name="religion" id="religion" class="form-control">
                                        <option value="">Select Religion</option>
                                        <option value="Hindu" title="Hindu">Hindu</option>
                                        <option value="Jain" title="Jain">Jain</option>
                                        <option value="Muslim" title="Muslim">Muslim</option>
                                        <option value="Sikh" title="Sikh">Sikh</option>
                                        <option value="Christian" title="Christian">Christian</option>
                                        <option value="Spiritual" title="Spiritual">Spiritual</option>
                                        <option value="Parsi" title="Parsi">Parsi</option>
                                        <option value="Jewish" title="Jewish">Jewish</option>
                                        <option value="Buddhist" title="Buddhist">Buddhist</option>
                                        <option value="No Religion" title="No Religion">No Religion</option>
                                        <option value="Other" title="Other">Other</option>
                                    </select>

                				</div>

                	         	<div class="col-md-3">
                	         		<h4>Caste </h4>
                                    <select name="caste" id="caste" class="form-control">
                                        <option value="">Select Caste</option>
                                        @foreach($caste as $cst)
                                            <option value="{{ $cst->id }}">{{ $cst->caste }}</option>
                                        @endforeach
                                    </select>
                				</div>

                         		<div class="col-md-3">
                         			<h4>Mother Tongue </h4>
                                    <select name="mother_tongue" id="mother_tongue" class="form-control">
                                        <option value="">Select Mother Tongue</option>
                                        @foreach($mother_tongue as $tongue)
                                            <option value="{{ $tongue->id }}">{{ $tongue->mother_tongue }}</option>
                                        @endforeach
                                    </select>
                				</div>

                         		<div class="col-md-3">
                         			<h4>Marital Status </h4>
                                    <select name="marital_status" id="marital_status" class="form-control">
                                        <option value="">Select Marital Status</option>
                                        <option value="1">Never Married</option>
                                        <option value="2">Annulled</option>
                                        <option value="3">Awaiting Divorce</option>
                                        <option value="4">Divorced</option>
                                        <option value="5">Widowed</option>
                                    </select>
                				</div>

                         		<div class="col-md-3">
                         			<h4>Country </h4>
                                    <select name="country" id="country" class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                				</div>

                	         	<div class="col-md-3">
                	         		<h4>State </h4>
                                    <select name="state" id="state" class="form-control">
                                        <option value="">Select State</option>
                                    </select>
                				</div>

                	         	<div class="col-md-3">
                	         		<h4>City </h4>
                                    <select name="city" id="city" class="form-control">
                                        <option value="">Select City</option>
                                    </select>
                				</div>

                	         	<div class="col-md-3">
                		         	<h4>Search By Keyword </h4>
                		          	<div class="src_field_box">
                						<input type="text" name="search_key" id="search_key" class="common-input ui-autocomplete-input" placeholder="eg. Doctor, IIT, IIM">
                		           	</div>
                	           </div>

            	       	   </div>
                        </div>
                    </div>

                 	<div class="moreoptions" id="moreoptions">
                      	<div class="row mb-10">

                            <div class="col-md-3">
                                <h4>Working As </h4>
                                <select name="working_as" id="working_as" class="form-control">
                                    <option value="">Select Working As</option>
                                    @foreach($employed_as as $employed)
                                        <option value="{{ $employed->id }}">{{ $employed->employed_as }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-3">
                                <h4>Income </h4>
                                <select name="income" id="income" class="form-control">
                                    <option value="">Select Income</option>
                                    @foreach($annual_income as $income)
                                        <option value="{{ $income->id }}">{{ $income->annual_income }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-3">
                                <h4>Education </h4>
                                <select name="education" id="education" class="form-control">
                                    <option value="">Select Education</option>
                                    @foreach($educational_qualification as $education)
                                        <option value="{{ $education->id }}">{{ $education->education }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <h4>Diet </h4>
                                <div class="search-checkbox display-inline">
                                    <input type="checkbox" class="radInput" name="diet[]" id="Veg150" value="150">
                                        <label for="Veg150">Eggetarian </label>
                                    <input type="checkbox" class="radInput" name="diet[]" id="Veg1089" value="1089">
                                        <label for="Veg1089">Jain </label>
                                    <input type="checkbox" class="radInput" name="diet[]" id="Veg148" value="148">
                                        <label for="Veg148">Non-Veg </label>
                                    <input type="checkbox" class="radInput" name="diet[]" id="Veg147" value="147">
                                        <label for="Veg147">Veg </label>
                                    <input type="checkbox" class="radInput" name="diet[]" id="Veg152" value="152">
                                        <label for="Veg152">Vegan </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4>Drink </h4>
                                <div class="search-checkbox display-inline">
                                    <input id="DrinkYes" name="drink[]" value="1" type="checkbox">
                                    <label for="DrinkYes">Yes</label>
                                    <input id="DrinkNo" name="drink[]" value="2" type="checkbox">
                                    <label for="DrinkNo">No</label>
                                    <input id="DrinkOccasionally" name="drink[]" value="3" type="checkbox">
                                    <label for="DrinkOccasionally">Occasionally</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4>Smoke </h4>
                                <div class="search-checkbox display-inline">
                                    <input id="SmokeYes" name="smoke[]" value="3" type="checkbox">
                                    <label for="SmokeYes">Yes</label>
                                    <input id="SmokeNo" name="smoke[]" value="1" type="checkbox">
                                    <label for="SmokeNo">No</label>
                                    <input id="SmokeOccasionally" name="smoke[]" type="checkbox" value="2">
                                    <label for="SmokeOccasionally">Occasionally</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4>Manglik/Kuja Dosham </h4>
                                <div class="search-checkbox display-inline">
                                    <input id="OnlyMangliks" name="manglik[]" type="checkbox" value="1">
                                    <label for="OnlyMangliks">Only Mangliks</label>
                                    <input id="NoMangliks" name="manglik[]" value="2" type="checkbox">
                                    <label for="NoMangliks">No Mangliks</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 text-right">
                        <button type="submit" id="search" name="search" class="btn btn-lg btn-theme search-btn ripplelink">
                            <i class="fa fa-search"></i> SEARCH
                        </button>
                    </div>

               	</div>

        	</form>
        </div>
 	</div>
</div>
@endsection
