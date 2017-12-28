@extends('layouts.public_app')

@section('content')

<script>
    $(document).ready(function(){
        $('.profile_for').on('click', function(){
            var profile_value = $(this).val();
            if(profile_value == 2)
            {
                $('#male').prop('checked', true);
            }
            else if(profile_value == 3)
            {
                $('#female').prop('checked', true);
            }
            else if(profile_value == 4)
            {
                $('#male').prop('checked', true);
            }
            else if(profile_value == 5)
            {
                $('#female').prop('checked', true);
            }
            else
            {
                $('.gender').prop('checked', false);
            }

        });
    });
</script>

<div class="container" style="padding-top: 170px;">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">
                                Let's know for whom you are creating the profile?
                            </label>
                            <div class="col-md-6">
                                <input type="radio" name="profile_for" class="profile_for" value="1" required> Self
                                <input type="radio" name="profile_for" class="profile_for" id="Son_1" value="2" required> Son
                                <input type="radio" name="profile_for" class="profile_for" id="Daughter_1" value="3" required> Daughter
                                <input type="radio" name="profile_for" class="profile_for" id="Brother_1" value="4" required> Brother
                                <input type="radio" name="profile_for" class="profile_for" id="Sister_1" value="5" required> Sister
                                <input type="radio" name="profile_for" class="profile_for" value="6" required> Relative
                                <input type="radio" name="profile_for" class="profile_for" value="7" required> Friend
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">
                                <input type="radio" name="gender" id="male" class="gender" value="1" required> Male
                                <input type="radio" name="gender" id="female" class="gender" value="2" required> Female
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-2">
                                <select class="form-control" id="date" name="date" required="required">
                                    <option value="">Select date</option><option label="1" value="1">01</option><option label="2" value="2">02</option><option label="3" value="3">03</option><option label="4" value="4">04</option><option label="5" value="5">05</option><option label="6" value="6">06</option><option label="7" value="7">07</option><option label="8" value="8">08</option><option label="9" value="9">09</option><option label="10" value="10">10</option><option label="11" value="11">11</option><option label="12" value="12">12</option><option label="13" value="13">13</option><option label="14" value="14">14</option><option label="15" value="15">15</option><option label="16" value="16">16</option><option label="17" value="17">17</option><option label="18" value="18">18</option><option label="19" value="19">19</option><option label="20" value="20">20</option><option label="21" value="21">21</option><option label="22" value="22">22</option><option label="23" value="23">23</option><option label="24" value="24">24</option><option label="25" value="25">25</option><option label="26" value="26">26</option><option label="27" value="27">27</option><option label="28" value="28">28</option><option label="29" value="29">29</option><option label="30" value="30">30</option><option label="31" value="31">31</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <select class="form-control" id="month" name="month" required="required">
                                    <option value="">Select Month</option><option label="January" value="1">January</option>February<option label="February" value="2">February</option>March<option label="March" value="3">March</option>April<option label="April" value="4">April</option>May<option label="May" value="5">May</option>June<option label="June" value="6">June</option>July<option label="July" value="7">July</option>August<option label="August" value="8">August</option>September<option label="September" value="9">September</option>October<option label="October" value="10">October</option>November<option label="November" value="11">November</option>December<option label="December" value="12">December</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <select class="form-control" id="year" name="year" required="required">
                                    <option value="">Select Year</option>
                                    <option label="1999" value="1">1999</option><option label="1998" value="2">1998</option><option label="1997" value="3">1997</option><option label="1996" value="4">1996</option><option label="1995" value="5">1995</option><option label="1994" value="6">1994</option><option label="1993" value="7">1993</option><option label="1992" value="8">1992</option><option label="1991" value="9">1991</option><option label="1990" value="10">1990</option><option label="1989" value="11">1989</option><option label="1988" value="12">1988</option><option label="1987" value="13">1987</option><option label="1986" value="14">1986</option><option label="1985" value="15">1985</option><option label="1984" value="16">1984</option><option label="1983" value="17">1983</option><option label="1982" value="18">1982</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Religion</label>
                            <div class="col-md-6">
                                <select class="form-control" id="religion" name="religion" required="required">
                                    <option value="">Select Religion</option>
                                    <option value="1" title="Hindu">Hindu</option>
                                    <option value="2" title="Jain">Jain</option>
                                    <option value="3" title="Muslim">Muslim</option>
                                    <option value="4" title="Sikh">Sikh</option>
                                    <option value="5" title="Christian">Christian</option>
                                    <option value="6" title="Spiritual">Spiritual</option>
                                    <option value="7" title="Parsi">Parsi</option>
                                    <option value="8" title="Jewish">Jewish</option>
                                    <option value="9" title="Buddhist">Buddhist</option>
                                    <option value="10" title="No Religion">No Religion</option>
                                    <option value="11" title="Other">Other</option>
                               </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Mother Tongue</label>
                            <div class="col-md-6">
                                <select class="form-control" id="mother_tongue" name="mother_tongue" required="required">
                                    <option value="">Select Mother Tongue</option>
                                    <option value="1" title="Arabic">Arabic</option>
                                    <option value="2" title="Assamese">Assamese</option>
                                    <option value="3" title="Awadhi">Awadhi</option>
                                    <option value="4" title="Bangali">Bangali</option>
                                    <option value="5" title="Bhojpuri">Bhojpuri</option>
                                    <option value="6" title="Chattisgari">Chattisgari</option>
                                    <option value="7" title="Coorgi">Coorgi</option>
                                    <option value="8" title="Dogri">Dogri</option>
                                    <option value="9" title="English">English</option>
                                    <option value="10" title="French">French</option>
                                    <option value="11" title="Garhwali">Garhwali</option>
                                    <option value="12" title="Gujarati">Gujarati</option>
                                    <option value="13" title="Haryanavi">Haryanavi</option>
                                    <option value="14" title="Himachali">Himachali</option>
                                    <option value="15" title="Hindi">Hindi</option>
                                    <option value="16" title="Jewish">Jewish</option>
                                    <option value="17" title="Kannada">Kannada</option>
                                    <option value="18" title="Kashmiri">Kashmiri</option>
                                    <option value="19" title="Konkani">Konkani</option>
                                    <option value="20" title="Kumaoni">Kumaoni</option>
                                    <option value="21" title="Kutchi">Kutchi</option>
                                    <option value="22" title="Magahi">Magahi</option>
                                    <option value="23" title="Malayalam">Malayalam</option>
                                    <option value="24" title="Manipuri">Manipuri</option>
                                    <option value="25" title="Marathi">Marathi</option>
                                    <option value="26" title="Marwari">Marwari</option>
                                    <option value="27" title="Nepali">Nepali</option>
                                    <option value="28" title="Oriya">Oriya</option>
                                    <option value="29" title="Persian">Persian</option>
                                    <option value="30" title="Punjabi">Punjabi</option>
                                    <option value="31" title="Rajasthani">Rajasthani</option>
                                    <option value="32" title="Russian">Russian</option>
                                    <option value="33" title="Sindhi">Sindhi</option>
                                    <option value="34" title="Spanish">Spanish</option>
                                    <option value="35" title="Tamil">Tamil</option>
                                    <option value="36" title="Telugu">Telugu</option>
                                    <option value="37" title="Tulu">Tulu</option>
                                    <option value="38" title="Urdu">Urdu</option>
                                    <option value="39" title="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
