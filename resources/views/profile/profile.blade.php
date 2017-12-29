@extends('layouts.public_app')

@section('content')
<link href="{{ asset ('resources/frontend_assets/css/validationEngine.jquery.css') }}" rel="stylesheet" />
<script src="{{ asset ('resources/frontend_assets/js/jquery.validationEngine-en.js') }}" type="text/javascript"></script>
<script src="{{ asset ('resources/frontend_assets/js/jquery.validationEngine.js') }}" type="text/javascript"></script>

<style>
	.input-group1 {
	    width: 100%;
	    float: left;
	    padding-bottom: 4px;
	}
	.fieldname {
	    float: left;
	    width: 24%;
	    text-align: left;
	}
	.showvalue {
	    float: left;
	}
	input[type=file] {
	    display: block;
	}
	li .active {
	     background-color: #eee;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$('#basicName').hide();
		$(document).on("click", "#basicNext", function(e){
			e.preventDefault();
			var valid = $("#myForm").validationEngine("validate", {promptPosition : "topLeft"});
			if(valid==true)
			{
			var user_id = $('#user_id').val();
			var inputFullName = $('#inputFullName').val();
			var inputPhone = $('#inputPhone').val();
			var inputDate = $('#inputDate').val();
			var inputMonth = $('#inputMonth').val();
			var inputYear = $('#inputYear').val();
			var inputReligion = $('#inputReligion').val();
			var inputMotherTongue = $('#inputMotherTongue').val();
			var inputAboutus = $('#inputAboutus').val();
			var inputHeight = $('#inputHeight').val();
			var marital_for = $('.marital_for').val();
			var inputCaste = $('#inputCaste').val();
			var inputSubcaste = $('#inputSubcaste').val();
			var inputComplexion = $('#inputComplexion').val();
			var inputManglik = $('#inputManglik').val();
			var inputGotra = $('#inputGotra').val();
			var inputHrs = $('#inputHrs').val();
			var inputMin = $('#inputMin').val();
			var inputSec = $('#inputSec').val();
			var inputBirthPlace = $('#inputBirthPlace').val();

			$.ajax({
				method : 'post',
				url : 'update_basic_info',
				async : true,
                data : {"_token": "{{ csrf_token() }}", 'user_id': user_id, 'inputFullName': inputFullName, 'inputPhone': inputPhone, 'inputDate': inputDate, 'inputMonth': inputMonth, 'inputYear': inputYear, 'inputReligion': inputReligion, 'inputMotherTongue': inputMotherTongue, 'inputAboutus': inputAboutus, 'inputHeight': inputHeight, 'marital_for': marital_for, 'inputCaste': inputCaste, 'inputSubcaste': inputSubcaste, 'inputComplexion': inputComplexion, 'inputManglik': inputManglik, 'inputGotra': inputGotra, 'inputHrs': inputHrs, 'inputMin': inputMin, 'inputSec': inputSec, 'inputBirthPlace': inputBirthPlace},
                success:function(response){

                	console.log('response');
                	console.log(response);

    				$('#family').addClass('in active');
					$('#basic').removeClass('in active');
					$('.shownamefirst').hide();
					$('#basicName').html(inputFullName +' '+ "@SiyakeRam!");
					$('#basicName').show();
					$(window).scrollTop(0);
                },
			    error: function(data){
			        console.log(data);
			    },
			});
		}
		});

		//#Family Info
		$('#familySkip').on('click', function(){
			$('#education').addClass('in active');
			$('#family').removeClass('in active');
		});
	});

</script>
<div class="main">
    <div class="row content wrapper share light">

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-0">
          <span id="progress-val" class="progress-val">0% PROFILE COMPLETED</span>
          	<div class="progress">
	            <div class="progress-bar no-grdaient no-gradient" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
         	</div>
          	<h4 class="roboto-regular">Welcome
	           Mr. <span class="shownamefirst">{{ $user->name }} @SiyakeRam!</span>
           		   <span id="basicName"></span>
	       	</h4>
          	<h2 class="light-pink">Share Your Identity</h2>
        </div>
      </div>
      <div class="nav-tabs-three">
      	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="nav-tabs-three-sidebar">
                <ul class="nav">
                    <li class="active" id="a_basic">
                    	<a href="#basic" data-toggle="tab" role="tab" aria-expanded="true">Basic Details</a>
                    </li>
                    <li id="a_family"><a href="#family" data-toggle="tab" role="tab" aria-expanded="false">Family Details</a></li>
                    <li id="a_education"><a href="#education" data-toggle="tab" role="tab" aria-expanded="false">Education and Career</a></li>
                    <li id="a_address"><a href="#address" data-toggle="tab" role="tab" aria-expanded="false">Address</a></li>
                    <li id="a_photo"><a href="#photo" data-toggle="tab" role="tab" aria-expanded="false">Media(Photos/Videos)</a></li>
                </ul>
            </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  	                <!-- Design Three Content -->
            <div class="nav-tabs-three-content">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="basic">
        				<form id="myForm" method="post">

        					<input type="hidden" name="user_id" id="user_id" value="{{ $user->user_id }}">

						  	<div class="form-group row">
							    <label for="staticEmail" class="col-sm-2 col-form-label">Full Name</label>
							    <div class="col-sm-6">
							      <input type="text" class="validate[required] form-control" name="inputFullName" id="inputFullName" value="{{ $user->name }}">
							    </div>
						  	</div>
						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Phone No.</label>
							    <div class="col-sm-6">
							      <input type="text" class="validate[required] form-control" name="inputPhone" id="inputPhone" value="{{ $user->phone }}" >
							    </div>
						  	</div>
						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">DOB</label>
							    <div class="col-md-2">
	                                <select class="validate[required] form-control" id="inputDate" name="inputDate">
	                                	@if($user->date)
	                                    <option value="{{$user->date}}">{{$user->date}}</option>
	                                    @else
	                                    <option value="">Select Date</option>
	                                    @endif
	                                    <option label="01" value="01">01</option><option label="02" value="02">02</option>
	                                    <option label="03" value="03">03</option><option label="04" value="04">04</option>
	                                    <option label="05" value="05">05</option><option label="06" value="06">06</option>
	                                    <option label="07" value="07">07</option><option label="08" value="08">08</option>
	                                    <option label="09" value="09">09</option><option label="10" value="10">10</option>
	                                    <option label="11" value="11">11</option><option label="12" value="12">12</option>
	                                    <option label="13" value="13">13</option><option label="14" value="14">14</option>
	                                    <option label="15" value="15">15</option><option label="16" value="16">16</option>
	                                    <option label="17" value="17">17</option><option label="18" value="18">18</option>
	                                    <option label="19" value="19">19</option><option label="20" value="20">20</option>
	                                    <option label="21" value="21">21</option><option label="22" value="22">22</option>
	                                    <option label="23" value="23">23</option><option label="24" value="24">24</option>
	                                    <option label="25" value="25">25</option><option label="26" value="26">26</option>
	                                    <option label="27" value="27">27</option><option label="28" value="28">28</option>
	                                    <option label="29" value="29">29</option><option label="30" value="30">30</option>
	                                    <option label="31" value="31">31</option>
	                                </select>
	                            </div>
								    <div class="col-md-2">
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
	                                <select class="validate[required] form-control" id="inputMonth" name="inputMonth">
	                                	@if($user->month)
	                                    <option value="{{$user->month}}">{{$month}}</option>
	                                    @else
	                                    <option value="">Select Month</option>
	                                    @endif
	                                    <option label="January" value="01">January</option>
	                                    <option label="February" value="02">February</option>
	                                    <option label="March" value="03">March</option>
	                                    <option label="April" value="04">April</option>
	                                    <option label="May" value="05">May</option>
	                                    <option label="June" value="06">June</option>
	                                    <option label="July" value="07">July</option>
	                                    <option label="August" value="08">August</option>
	                                    <option label="September" value="09">September</option>
	                                    <option label="October" value="10">October</option>
	                                    <option label="November" value="11">November</option>
	                                    <option label="December" value="12">December</option>
	                                </select>
	                            </div>
							    <div class="col-md-2">
	                                <select class="validate[required] form-control" id="inputYear" name="inputYear">
	                                    @if($user->year)
	                                    <option value="{{$user->year}}">{{$user->year}}</option>
	                                    @else
	                                    <option value="">Select Year</option>
	                                    @endif
	                                    <option value="1999">1999</option><option value="1998">1998</option>
	                                    <option value="1997">1997</option><option value="1996">1996</option>
	                                    <option value="1995">1995</option><option value="1994">1994</option>
	                                    <option value="1993">1993</option><option value="1992">1992</option>
	                                    <option value="1991">1991</option><option value="1990">1990</option>
	                                    <option value="1989">1989</option><option value="1988">1988</option>
	                                    <option value="1987">1987</option><option value="1986">1986</option>
	                                    <option value="1985">1985</option><option value="1984">1984</option>
	                                    <option value="1983">1983</option><option value="1982">1982</option>
	                                    <option value="1981">1981</option><option value="1980">1980</option>
	                                    <option value="1979">1979</option><option value="1978">1978</option>
	                                    <option value="1977">1977</option><option value="1976">1976</option>
	                                    <option value="1975">1975</option><option value="1974">1974</option>
	                                    <option value="1973">1973</option><option value="1972">1972</option>
	                                    <option value="1971">1971</option><option value="1970">1970</option>
	                                    <option value="1969">1969</option><option value="1968">1968</option>
	                                    <option value="1967">1967</option><option value="1966">1966</option>
	                                    <option value="1965">1965</option><option value="1964">1964</option>
	                                    <option value="1963">1963</option><option value="1962">1962</option>
	                                    <option value="1961">1961</option><option value="1960">1960</option>
	                                    <option value="1959">1959</option><option value="1958">1958</option>
	                                    <option value="1957">1957</option><option value="1956">1956</option>
	                                    <option value="1955">1955</option><option value="1954">1954</option>
	                                    <option value="1953">1953</option><option value="1952">1952</option>
	                                    <option value="1951">1951</option><option value="1950">1950</option>
	                                </select>
	                            </div>
						  	</div>
						  	<div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Religion</label>
	                            <div class="col-md-6">
	                                <select class="validate[required] form-control" id="inputReligion" name="inputReligion">
	                                    @if($user->religion)
	                                    <option value="{{$user->religion}}">{{$user->religion}}</option>
	                                    @else
	                                    <option value="">Select Religion</option>
	                                    @endif
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
	                        </div>
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Mother Tongue</label>
	                            <div class="col-md-6">
	                                <select class="validate[required] form-control" id="inputMotherTongue" name="inputMotherTongue">
	                                    @if(!empty($mother_details->mother_tongue))
	                                    <option value="{{$mother_details->id}}">{{$mother_details->mother_tongue}}</option>
	                                    @else
	                                    <option value="">Select Mother Tongue</option>
	                                    @endif
	                                    @foreach($mother_tongue as $tongue)
	                                        <option value="{{ $tongue->id }}" title="{{ $tongue->mother_tongue }}">{{ $tongue->mother_tongue }}</option>
	                                    @endforeach
	                                </select>
	                            </div>
	                        </div>
						  	<div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">About Us</label>
	                            <div class="col-md-6">
	                                <textarea class="validate[required] form-control" rows="5" cols="5" name="inputAboutus" id="inputAboutus">
	                                	{{ $user->bio }}
	                                </textarea>
	                            </div>	
	                        </div>
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Height</label>
	                            <div class="col-md-6">
	                            	
	                            	<select class="validate[required] form-control" id="inputHeight" name="inputHeight">
	                            		@if(!empty($height_details->height))
	                                    <option value="{{$height_details->id}}">{{$height_details->height}}</option>
	                                    @else
	                                    <option value="">Select Height</option>
	                                    @endif
	                                    @foreach($height as $heig)
											<option value="{{ $heig->id }}" title="{{ $heig->height }}">{{ $heig->height }}</option>
										@endforeach
	                                </select>

	                            </div>
	                        </div>
	                        <div class="form-group row">
	                        		<?php

							    		if($user->marital_status == '1')
							    		{
											$Never = 'checked';$Annulled = '';$Awaiting = '';$Divorced = '';$Widowed = '';
							    		}
						    			if($user->marital_status == '2')
						    			{
											$Never = '';$Annulled = 'checked';$Awaiting = '';$Divorced = '';$Widowed = '';
						    			}
						    			if($user->marital_status == '3')
						    			{
											$Never = '';$Annulled = '';$Awaiting = 'checked';$Divorced = '';$Widowed = '';
						    			}
						    			if($user->marital_status == '4')
						    			{
											$Never = '';$Annulled = '';$Awaiting = '';$Divorced = 'checked';$Widowed = '';
						    			}
							    		if($user->marital_status == '5')
							    		{
											$Never = '';$Annulled = '';$Awaiting = '';$Divorced = '';$Widowed = 'checked';
							    		}

					    			?>
	                            <label for="gender" class="col-md-2 control-label">Marital Status</label>
	                            <div class="col-md-7">

                                	<input type="radio" name="marital_for" class="validate[required] marital_for" value="1" {{$Never}}> Never Married
	                                <input type="radio" name="marital_for" class="validate[required] marital_for" value="2" {{$Annulled}}> Annulled
	                                <input type="radio" name="marital_for" class="validate[required] marital_for" value="3" {{$Awaiting}}> Awaiting Divorce
	                                <input type="radio" name="marital_for" class="validate[required] marital_for" value="4" {{$Divorced}}> Divorced
	                                <input type="radio" name="marital_for" class="validate[required] marital_for" value="5" {{$Widowed}}> Widowed

	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Caste</label>
	                            <div class="col-md-6">
	                                <select class="validate[required] form-control" id="inputCaste" name="inputCaste">
	                                	@if(!empty($caste_details->caste))
	                                    <option value="{{$caste_details->id}}">{{$caste_details->caste}}</option>
	                                    @endif
	                                    <option value="">Select Caste</option>
	                                    @foreach($caste as $cast)
										<option value="{{$cast->id}}" title="{{$cast->caste}}">{{$cast->caste}}</option>
										@endforeach
	                                </select>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Sub-caste(optional)</label>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control validate[required]" name="inputSubcaste" id="inputSubcaste" placeholder="Sub-caste(optional)" value="{{$user->sub_caste}}">
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Complexion</label>
	                            <div class="col-md-6">
	                                <select class="validate[required] form-control" id="inputComplexion" name="inputComplexion">
	                                	@if($user->complexion)
	                                    <option value="{{$user->complexion}}">{{$user->complexion}}</option>
	                                    @else
	                                    <option value="">Select Complexion</option>
	                                    @endif
										<option value="Dark" title="Dark">Dark</option>
	                                    <option value="Fair" title="Fair">Fair</option>
	                                    <option value="Very Fair" title="Very Fair">Very Fair</option>
	                                    <option value="Wheatish" title="Wheatish">Wheatish</option>
	                                    <option value="Wheatish Brown" title="Wheatish Brown">Wheatish Brown</option>
	                                    <option value="Wheatish Medium" title="Wheatish Medium">Wheatish Medium</option>
	                                </select>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Manglik</label>
	                            <div class="col-md-6">
	                                <select class="validate[required] form-control" id="inputManglik" name="inputManglik">
	                                	@if($user->manglik)
	                                    <option value="{{$user->manglik}}">{{$user->manglik}}</option>
	                                    @else
	                                    <option value="">Select Manglik</option>
	                                    @endif
	                                    <option value="Dont Know" title="Don't Know">Dont Know</option>
	                                    <option value="No" title="No">No</option>
	                                    <option value="Yes" title="Yes">Yes</option>
	                                    <option value="Anshik" title="Anshik">Anshik</option>
	                                </select>
	                            </div>
	                        </div>
                    		<div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Gotra</label>
	                            <div class="col-md-6">
	                                <input type="text" class="validate[required] form-control" name="inputGotra" id="inputGotra" placeholder="Gotra" value="{{$user->gotra}}">
	                            </div>
	                        </div>
	                        <h5 style="color:red">*Please share your time and place of birth for horoscope matching.</h5>
	                        <br>
						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Time of birth</label>
							    <div class="col-md-2">
	                                <select class="validate[required] form-control" id="inputHrs" name="inputHrs">
	                                	@if($user->birth_hour)
	                                    <option value="{{$user->birth_hour}}">{{$user->birth_hour}}</option>
	                                    @else
	                                    <option value="">Select Hrs</option>
	                                    @endif
	                                    <option label="01" value="01">1</option><option label="02" value="02">2</option>
	                                    <option label="03" value="03">3</option><option label="04" value="04">4</option>
	                                    <option label="05" value="05">5</option><option label="06" value="06">6</option>
	                                    <option label="07" value="07">7</option><option label="08" value="08">8</option>
	                                    <option label="09" value="09">9</option><option label="10" value="10">10</option>
	                                    <option label="11" value="11">11</option><option label="12" value="12">12</option>
	                                    <option label="13" value="13">13</option><option label="14" value="14">14</option>
	                                    <option label="15" value="15">15</option><option label="16" value="16">16</option>
	                                    <option label="17" value="17">17</option><option label="18" value="18">18</option>
	                                    <option label="19" value="19">19</option><option label="20" value="20">20</option>
	                                    <option label="21" value="21">21</option><option label="22" value="22">22</option>
	                                    <option label="23" value="23">23</option>
	                                </select>
	                            </div>
							    <div class="col-md-2">
	                                <select class="validate[required] validate[required] form-control" id="inputMin" name="inputMin">
	                                	@if($user->birth_mint)
	                                    <option value="{{$user->birth_mint}}">{{$user->birth_mint}}</option>
	                                    @else
	                                    <option value="">Select Min</option>
	                                    @endif
	                                    <option label="01" value="01">1</option><option label="02" value="02">2</option>
	                                    <option label="03" value="03">3</option><option label="04" value="04">4</option>
	                                    <option label="05" value="05">5</option><option label="06" value="06">6</option>
	                                    <option label="07" value="07">7</option><option label="08" value="08">8</option>
	                                    <option label="09" value="09">9</option><option label="10" value="10">10</option>
	                                    <option label="11" value="11">11</option><option label="12" value="12">12</option>
	                                    <option label="13" value="13">13</option><option label="14" value="14">14</option>
	                                    <option label="15" value="15">15</option><option label="16" value="16">16</option>
	                                    <option label="17" value="17">17</option><option label="18" value="18">18</option>
	                                    <option label="19" value="19">19</option><option label="20" value="20">20</option>
	                                    <option label="21" value="21">21</option><option label="22" value="22">22</option>
	                                    <option label="23" value="23">23</option><option label="24" value="24">24</option>
	                                    <option label="25" value="25">25</option><option label="26" value="26">26</option>
	                                    <option label="27" value="27">27</option><option label="28" value="28">28</option>
	                                    <option label="29" value="29">29</option><option label="30" value="30">30</option>
	                                    <option label="31" value="31">31</option><option label="32" value="32">32</option>
	                                    <option label="33" value="33">33</option><option label="34" value="34">34</option>
	                                    <option label="35" value="35">35</option><option label="36" value="36">36</option>
	                                    <option label="37" value="37">37</option><option label="38" value="38">38</option>
	                                    <option label="39" value="39">39</option><option label="40" value="40">40</option>
	                                    <option label="41" value="41">41</option><option label="42" value="42">42</option>
	                                    <option label="43" value="43">43</option><option label="44" value="44">44</option>
	                                    <option label="45" value="45">45</option><option label="46" value="46">46</option>
	                                    <option label="47" value="47">47</option><option label="48" value="48">48</option>
	                                    <option label="49" value="49">49</option><option label="50" value="50">50</option>
	                                    <option label="52" value="51">51</option><option label="53" value="52">52</option>
	                                    <option label="54" value="53">53</option><option label="55" value="54">54</option>
	                                    <option label="56" value="55">55</option><option label="56" value="56">56</option>
	                                    <option label="57" value="57">57</option><option label="58" value="58">58</option>
	                                    <option label="59" value="59">59</option>
	                                </select>
	                            </div>
							    <div class="col-md-2">
	                                <select class="validate[required] form-control" id="inputSec" name="inputSec">
	                                	@if($user->birth_sec)
	                                    <option value="{{$user->birth_sec}}">{{$user->birth_sec}}</option>
	                                    @else
	                                    <option value="">Select Sec</option>
	                                    @endif
	                                    <option label="01" value="01">1</option><option label="02" value="02">2</option>
	                                    <option label="03" value="03">3</option><option label="04" value="04">4</option>
	                                    <option label="05" value="05">5</option><option label="06" value="06">6</option>
	                                    <option label="07" value="07">7</option><option label="08" value="08">8</option>
	                                    <option label="09" value="09">9</option><option label="10" value="10">10</option>
	                                    <option label="11" value="11">11</option><option label="12" value="12">12</option>
	                                    <option label="13" value="13">13</option><option label="14" value="14">14</option>
	                                    <option label="15" value="15">15</option><option label="16" value="16">16</option>
	                                    <option label="17" value="17">17</option><option label="18" value="18">18</option>
	                                    <option label="19" value="19">19</option><option label="20" value="20">20</option>
	                                    <option label="21" value="21">21</option><option label="22" value="22">22</option>
	                                    <option label="23" value="23">23</option><option label="24" value="24">24</option>
	                                    <option label="25" value="25">25</option><option label="26" value="26">26</option>
	                                    <option label="27" value="27">27</option><option label="28" value="28">28</option>
	                                    <option label="29" value="29">29</option><option label="30" value="30">30</option>
	                                    <option label="31" value="31">31</option><option label="32" value="32">32</option>
	                                    <option label="33" value="33">33</option><option label="34" value="34">34</option>
	                                    <option label="35" value="35">35</option><option label="36" value="36">36</option>
	                                    <option label="37" value="37">37</option><option label="38" value="38">38</option>
	                                    <option label="39" value="39">39</option><option label="40" value="40">40</option>
	                                    <option label="41" value="41">41</option><option label="42" value="42">42</option>
	                                    <option label="43" value="43">43</option><option label="44" value="44">44</option>
	                                    <option label="45" value="45">45</option><option label="46" value="46">46</option>
	                                    <option label="47" value="47">47</option><option label="48" value="48">48</option>
	                                    <option label="49" value="49">49</option><option label="50" value="50">50</option>
	                                    <option label="52" value="51">51</option><option label="53" value="52">52</option>
	                                    <option label="54" value="53">53</option><option label="55" value="54">54</option>
	                                    <option label="56" value="55">55</option><option label="56" value="56">56</option>
	                                    <option label="57" value="57">57</option><option label="58" value="58">58</option>
	                                    <option label="59" value="59">59</option>
	                                </select>
	                            </div>
						  	</div>
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Place of birth</label>
	                            <div class="col-md-6">
	                                <input type="text" class="validate[required] form-control" name="inputBirthPlace" id="inputBirthPlace" placeholder="Birth Place" value="{{ $user->birth_place }}">
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="col-md-6 col-md-offset-2">
	                                <input type="button" name="basicNext" id="basicNext" value="Next" class="btn btn-success">
	                            </div>
	                        </div>
						</form>
                    </div>

                    <!-- #Family -->
                    <div class="tab-pane fade" id="family">
        				<form>
						  	<div class="form-group row">
							    <label for="staticEmail" class="col-sm-2 col-form-label">About My Family</label>
							    <div class="col-sm-6">
							      	<textarea class="form-control" rows="3" cols="10"></textarea>
							    </div>
						  	</div>

						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Father's Occupation</label>
							    <div class="col-md-6">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Father's Status</option>
	                                    <option value="01">Father's Status</option>
	                                    <option value="02">Business</option>
	                                    <option value="03">Employed-Govt</option>
	                                    <option value="04">Employed-Private</option>
	                                    <option value="05">Not-Employed</option>
	                                    <option value="06">Passed Away</option>
	                                    <option value="07">Professional</option>
	                                    <option value="08">Retired</option>
                                    </select>
	                            </div>
						  	</div>
						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Mother's Occupation</label>
							    <div class="col-md-6">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Mother's Status</option>
	                                    <option value="01">Mother's Status</option>
	                                    <option value="02">Business</option>
	                                    <option value="03">Employed-Govt</option>
	                                    <option value="04">Employed-Private</option>
	                                    <option value="05">Homemaker</option>
	                                    <option value="06">Passed Away</option>
	                                    <option value="07">Professional</option>
	                                    <option value="08">Retired</option>
                                    </select>
	                            </div>
						  	</div>

	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Married Sisters</label>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" id="Subcaste">
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Unmarried Sisters</label>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" id="Subcaste">
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Married Brothers</label>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" id="Subcaste">
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Unmarried Brothers</label>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" id="Subcaste">
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Native Country</label>
	                            <div class="col-md-6">
	                                <select class="form-control" id="caste" name="caste" required="required">
	                                    <option value="">Select Country</option>
										<option value="1" title="6000 Niyogi">6000 Niyogi</option>
	                                    <option value="2" title="96K Kokanastha">96K Kokanastha</option>
	                                    <option value="3" title="Addharmi">Addharmi</option>
	                                    <option value="4" title="Aggarwal">Aggarwal</option>
	                                    <option value="5" title="Agri">Agri</option>
	                                    <option value="6" title="Ahluwalia">Ahluwalia</option>
	                                    <option value="7" title="Ahom">Ahom</option>
	                                    <option value="8" title="Dogri">Dogri</option>
	                                    <option value="9" title="Ambalavasi">Ambalavasi</option>
	                                    <option value="10" title="Arekatica">Arekatica</option>
	                                    <option value="11" title="Arora">Arora</option>
	                                    <option value="12" title="Arunthathiyar">Arunthathiyar</option>
	                                    <option value="13" title="Arya Vysya">Arya Vysya</option>
	                                    <option value="14" title="Aryasamaj">Aryasamaj</option>
	                                    <option value="15" title="Baghel/Pal/Gaderiya">Baghel/Pal/Gaderiya</option>
	                                    <option value="16" title="Baidya">Baidya</option>
	                                </select>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Native State</label>
	                            <div class="col-md-6">
	                                <select class="form-control" id="caste" name="caste" required="required">
	                                    <option value="">Select State</option>
										<option value="1" title="6000 Niyogi">6000 Niyogi</option>
	                                    <option value="2" title="96K Kokanastha">96K Kokanastha</option>
	                                    <option value="3" title="Addharmi">Addharmi</option>
	                                    <option value="4" title="Aggarwal">Aggarwal</option>
	                                    <option value="5" title="Agri">Agri</option>
	                                    <option value="6" title="Ahluwalia">Ahluwalia</option>
	                                    <option value="7" title="Ahom">Ahom</option>
	                                    <option value="8" title="Dogri">Dogri</option>
	                                    <option value="9" title="Ambalavasi">Ambalavasi</option>
	                                    <option value="10" title="Arekatica">Arekatica</option>
	                                    <option value="11" title="Arora">Arora</option>
	                                    <option value="12" title="Arunthathiyar">Arunthathiyar</option>
	                                    <option value="13" title="Arya Vysya">Arya Vysya</option>
	                                    <option value="14" title="Aryasamaj">Aryasamaj</option>
	                                    <option value="15" title="Baghel/Pal/Gaderiya">Baghel/Pal/Gaderiya</option>
	                                    <option value="16" title="Baidya">Baidya</option>
	                                </select>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Family Value</label>
	                            <div class="col-md-6">
	                                <select class="form-control" id="caste" name="caste" required="required">
	                                    <option value="">Family Values</option>
										<option value="1" title="Liberal">Liberal</option>
	                                    <option value="2" title="Moderate">Moderate</option>
	                                    <option value="3" title="Moral">Moral</option>
	                                    <option value="4" title="Traditional">Traditional</option>
	                                </select>
	                            </div>
	                        </div>
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Affluence Level</label>
	                            <div class="col-md-6">
	                                <select class="form-control" id="caste" name="caste" required="required">
	                                    <option value="">Select Affluence</option>
										<option value="1" title="Affluence">Affluence</option>
	                                    <option value="2" title="Middle Class">Middle Class</option>
	                                    <option value="3" title="Upper Middle Class">Upper Middle Class</option>
	                                </select>
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <div class="col-md-4 col-md-offset-2">
	                                <button type="submit" class="btn btn-success" id="familySkip">
	                                    Skip
	                                </button>
	                            </div>
	                            <div class="col-md-4 col-md-offset-1">
	                                <button type="submit" class="btn btn-success" id="familyInfo">
	                                    Submit
	                                </button>
	                            </div>
	                        </div>
						</form>
                    </div>

                    <!-- #Education -->
                    <div class="tab-pane fade" id="education">
        				<form>
						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Educational Qualification</label>
							    <div class="col-md-6">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Educational Qualification</option>
	                                    <option value="01">A.M.I.E</option>
	                                    <option value="02">ACS</option>
	                                    <option value="03">ANM</option>
	                                    <option value="04">Associates Degree</option>
	                                    <option value="05">B.A</option>
	                                    <option value="06">B.Arch</option>
	                                    <option value="07">B.Com</option>
	                                    <option value="08">B.Ed</option>
                                    </select>
	                            </div>
						  	</div>

						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Employed As</label>
							    <div class="col-md-6">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Employed As</option>
	                                    <option value="01">Accounting Professional</option>
	                                    <option value="02">Actor</option>
	                                    <option value="03">Admin Professional</option>
	                                    <option value="04">Advertising Professional</option>
	                                    <option value="05">Agent/Broker</option>
	                                </select>
	                            </div>
						  	</div>

						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Area/Field</label>
							    <div class="col-md-6">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Area/Field</option>
	                                    <option value="01">Admnistrative Services</option>
	                                    <option value="02">Advertising Marketing</option>
	                                    <option value="03">Architecture</option>
	                                </select>
	                            </div>
						  	</div>

						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Employed With</label>
							    <div class="col-md-6">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Employed With</option>
	                                    <option value="01">Business/Self Employed</option>
	                                    <option value="02">Civil Services</option>
	                                    <option value="03">Defense Forces</option>
	                                    <option value="04">Goverment/Public Sector</option>
	                                    <option value="05">NGO/NPT</option>
	                                </select>
	                            </div>
						  	</div>

						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Employed As</label>
							    <div class="col-md-6">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Annual Income</option>
	                                    <option value="01">Dont Want to Specify</option>
	                                    <option value="02">INR Up to 50 Thousand</option>
	                                </select>
	                            </div>
						  	</div>

	                        <div class="form-group">
	                            <div class="col-md-4 col-md-offset-2">
	                                <button type="submit" class="btn btn-success">
	                                    Skip
	                                </button>
	                            </div>
	                            <div class="col-md-4 col-md-offset-1">
	                                <button type="submit" class="btn btn-success">
	                                    Submit
	                                </button>
	                            </div>
	                        </div>
						</form>
                    </div>

                    <!-- #Address -->
                    <div class="tab-pane fade" id="address">
        				<form>
						  	<div class="form-group row">
							    <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
							    <div class="col-sm-6">
							      	<textarea class="form-control" rows="3" cols="10"></textarea>
							    </div>
						  	</div>

							<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Country</label>
							    <div class="col-md-6">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Employed As</option>
	                                    <option value="01">Accounting Professional</option>
	                                    <option value="02">Actor</option>
	                                    <option value="03">Admin Professional</option>
	                                    <option value="04">Advertising Professional</option>
	                                    <option value="05">Agent/Broker</option>
	                                </select>
	                            </div>
						  	</div>

						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">State</label>
							    <div class="col-md-6">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Area/Field</option>
	                                    <option value="01">Admnistrative Services</option>
	                                    <option value="02">Advertising Marketing</option>
	                                    <option value="03">Architecture</option>
	                                </select>
	                            </div>
						  	</div>

						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">City</label>
							    <div class="col-md-6">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Employed With</option>
	                                    <option value="01">Business/Self Employed</option>
	                                    <option value="02">Civil Services</option>
	                                    <option value="03">Defense Forces</option>
	                                    <option value="04">Goverment/Public Sector</option>
	                                    <option value="05">NGO/NPT</option>
	                                </select>
	                            </div>
						  	</div>

						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">ZipCode</label>
							    <div class="col-md-6">

	                                <input type="text" class="form-control" name="zipcode">

	                            </div>
						  	</div>

	                        <div class="form-group">
	                            <div class="col-md-4 col-md-offset-2">
	                                <button type="submit" class="btn btn-success">
	                                    Skip
	                                </button>
	                            </div>
	                            <div class="col-md-4 col-md-offset-1">
	                                <button type="submit" class="btn btn-success">
	                                    Submit
	                                </button>
	                            </div>
	                        </div>
						</form>
                    </div>

                    <!-- #Address -->
                    <div class="tab-pane fade" id="photo">
        				<form>
						  	<div class="form-group row">
							    <label for="staticEmail" class="col-sm-2 col-form-label">Upload Images</label>
							    <div class="col-sm-6">
							      	<input type="file" class="form-control">
							    </div>
						  	</div>

	                        <div class="form-group">
	                            <div class="col-md-4 col-md-offset-2">
	                                <button type="submit" class="btn btn-success">
	                                    Submit
	                                </button>
	                            </div>
	                        </div>
						</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
@endsection