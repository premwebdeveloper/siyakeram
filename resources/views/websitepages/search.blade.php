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
            						 	<input type="radio" name="looking_for" value="2" checked="checked">
            						 	<span class="label">Bride</span>
            						</label>
            						<label>
            							<input type="radio" name="looking_for" value="1">
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
                                        <option value="18">18</option><option value="19">19</option>
                                        <option value="20">20</option><option value="21">21</option>
                                        <option value="22">22</option><option value="23">23</option>
                                        <option value="24">24</option><option value="25">25</option>
                                        <option value="26">26</option><option value="27">27</option>
                                        <option value="28">28</option><option value="29">29</option>
                                        <option value="30">30</option><option value="31">31</option>
                                        <option value="32">32</option><option value="33">33</option>
                                        <option value="34">34</option><option value="35">35</option>
                                        <option value="36">36</option><option value="37">37</option>
                                        <option value="38">38</option><option value="39">39</option>
                                        <option value="40">40</option><option value="45">45</option>
                                        <option value="50">50</option><option value="55">55</option>
                                        <option value="60">60</option><option value="65">65</option>
                                        <option value="70">70</option><option value="75">75</option>
                                    </select>
                	         	</div>

                	          	<div class="col-md-3 control-group">
                		            <h4>Age To</h4>
                                    <select name="age_to" id="age_to" class="form-control">
                                        <option value="">Select Age</option>
                                        <option value="18">18</option><option value="19">19</option>
                                        <option value="20">20</option><option value="21">21</option>
                                        <option value="22">22</option><option value="23">23</option>
                                        <option value="24">24</option><option value="25">25</option>
                                        <option value="26">26</option><option value="27">27</option>
                                        <option value="28">28</option><option value="29">29</option>
                                        <option value="30">30</option><option value="31">31</option>
                                        <option value="32">32</option><option value="33">33</option>
                                        <option value="34">34</option><option value="35">35</option>
                                        <option value="36">36</option><option value="37">37</option>
                                        <option value="38">38</option><option value="39">39</option>
                                        <option value="40">40</option><option value="45">45</option>
                                        <option value="50">50</option><option value="55">55</option>
                                        <option value="60">60</option><option value="65">65</option>
                                        <option value="70">70</option><option value="75">75</option>
                                    </select>
                	         	</div>

                                <div class="col-md-3 control-group">
                                    <h4>Height From</h4>
                                    <select name="height_from" id="height_from" class="form-control">
                                        <option value="">Select Height</option>
                                        @foreach($height as $hyt)
                                            <option value="{{ $hyt->height_cms }}">{{ $hyt->height }}</option>
                                        @endforeach
                                    </select>
                	         	</div>

                	          	<div class="col-md-3 control-group">
                                    <h4>Height to</h4>
                                    <select name="height_to" id="height_to" class="form-control">
                                        <option value="">Select Height</option>
                                        @foreach($height as $hyt)
                                            <option value="{{ $hyt->height_cms }}">{{ $hyt->height }}</option>
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

                	         	<!-- <div class="col-md-3">
                                     <h4>Search By Keyword </h4>
                                      <div class="src_field_box">
                                        <input type="text" name="search_key" id="search_key" class="common-input ui-autocomplete-input" placeholder="eg. Doctor, IIT, IIM">
                                       </div>
                               </div> -->

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
                                    <!-- <input type="checkbox" class="radInput" name="diet[]" id="Veg150" value="1">
                                        <label for="Veg150">Eggetarian </label>
                                    <input type="checkbox" class="radInput" name="diet[]" id="Veg1089" value="2">
                                        <label for="Veg1089">Jain </label> -->
                                    <input type="checkbox" class="radInput" name="diet[]" id="Veg148" value="1">
                                        <label for="Veg148">Non-Veg </label>
                                    <input type="checkbox" class="radInput" name="diet[]" id="Veg147" value="2">
                                        <label for="Veg147">Veg </label>
                                    <!-- <input type="checkbox" class="radInput" name="diet[]" id="Veg152" value="5">
                                        <label for="Veg152">Vegan </label> -->
                                </div>
                            </div>

                            <!-- <div class="col-md-6">
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
                            </div> -->

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



<script type="text/javascript">
    $(document).ready(function(){

        // Get states of selected country
        $(document).on("change", "#country", function(){
            var country = $(this).val();
            if(country == '')
            {
                $("#state").html('');
                $("#state").html('<option value="">Select State</option>');
            }
            else
            {
                $.ajax({
                    method: 'post',
                    url: 'getStateByCountryForUser',
                    data: {"_token": "{{ csrf_token() }}", 'country' : country},
                    async: true,
                    success: function(response){

                        var states = '<option value="">Select State</option>';
                        $.each(response, function(i, item) {
                            states += '<option value="'+item.id+'">'+item.name+'</option>';
                        })

                        $("#state").html('');
                        $("#state").html(states);
                    },
                    error: function(data){
                        console.log(data);
                    },
                });
            }
        });

        // Get Cities of selected state
        $(document).on("change", "#state", function(){
            var state = $(this).val();
            if(state == '')
            {
                $("#city").html('');
                $("#city").html('<option value="">Select City</option>');
            }
            else
            {
                $.ajax({
                    method: 'post',
                    url: 'getStateByStateForUser',
                    data: {"_token": "{{ csrf_token() }}", 'state' : state},
                    async: true,
                    success: function(response){

                        var cities = '<option value="">Select City</option>';
                        $.each(response, function(i, item) {
                            cities += '<option value="'+item.id+'">'+item.name+'</option>';
                        })

                        $("#city").html('');
                        $("#city").html(cities);
                    },
                    error: function(data){
                        console.log(data);
                    },
                });
            }
        });
    });

</script>
@endsection
