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
                                    <option value="">Select date</option><option label="01" value="01">01</option><option label="02" value="02">02</option><option label="03" value="03">03</option><option label="04" value="04">04</option><option label="05" value="05">05</option><option label="06" value="06">06</option><option label="07" value="07">07</option><option label="08" value="08">08</option><option label="09" value="09">09</option><option label="10" value="10">10</option><option label="11" value="11">11</option><option label="12" value="12">12</option><option label="13" value="13">13</option><option label="14" value="14">14</option><option label="15" value="15">15</option><option label="16" value="16">16</option><option label="17" value="17">17</option><option label="18" value="18">18</option><option label="19" value="19">19</option><option label="20" value="20">20</option><option label="21" value="21">21</option><option label="22" value="22">22</option><option label="23" value="23">23</option><option label="24" value="24">24</option><option label="25" value="25">25</option><option label="26" value="26">26</option><option label="27" value="27">27</option><option label="28" value="28">28</option><option label="29" value="29">29</option><option label="30" value="30">30</option><option label="31" value="31">31</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <select class="form-control" id="month" name="month" required="required">
                                    <option value="">Select Month</option><option label="January" value="01">January</option>February<option label="February" value="02">February</option>March<option label="March" value="03">March</option>April<option label="April" value="04">April</option>May<option label="May" value="05">May</option>June<option label="June" value="06">June</option>July<option label="July" value="07">July</option>August<option label="August" value="08">August</option>September<option label="September" value="09">September</option>October<option label="October" value="10">October</option>November<option label="November" value="11">November</option>December<option label="December" value="12">December</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <select class="form-control" id="year" name="year" required="required">
                                    <option value="">Select Year</option>
                                    <option label="1999" value="1999">1999</option><option label="1998" value="1998">1998</option><option label="1997" value="1997">1997</option><option label="1996" value="1996">1996</option><option label="1995" value="1995">1995</option><option label="1994" value="1994">1994</option><option label="1993" value="1993">1993</option><option label="1992" value="1992">1992</option><option label="1991" value="1991">1991</option><option label="1990" value="1990">1990</option><option label="1989" value="1989">1989</option><option label="1988" value="1988">1988</option><option label="1987" value="1987">1987</option><option label="1986" value="1986">1986</option><option label="1985" value="1985">1985</option><option label="1984" value="1984">1984</option><option label="1983" value="1983">1983</option><option label="1982" value="1982">1982</option><option label="1981" value="1981">1981</option><option label="1980" value="1980">1980</option><option label="1979" value="1979">1979</option><option label="1978" value="1978">1978</option><option label="1977" value="1977">1977</option><option label="1976" value="1976">1976</option><option label="1975" value="1975">1975</option><option label="1974" value="1974">1974</option><option label="1973" value="1973">1973</option><option label="1972" value="1972">1972</option><option label="1971" value="1971">1971</option><option label="1970" value="1970">1970</option><option label="1969" value="1969">1969</option><option label="1968" value="1968">1968</option><option label="1967" value="1967">1967</option><option label="1966" value="1966">1966</option><option label="1965" value="1965">1965</option><option label="1964" value="1964">1964</option><option label="1963" value="1963">1963</option><option label="1962" value="1962">1962</option><option label="1961" value="1961">1961</option><option label="1960" value="1960">1960</option><option label="1959" value="1959">1959</option><option label="1958" value="1958">1958</option><option label="1957" value="1957">1957</option><option label="1956" value="1956">1956</option><option label="1955" value="1955">1955</option><option label="1954" value="1954">1954</option><option label="1953" value="1953">1953</option><option label="1952" value="1952">1952</option><option label="1951" value="1951">1951</option><option label="1950" value="1950">1950</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">State</label>
                            <div class="col-md-6">
                                <select class="form-control" id="state" name="state" required="required">
                                    <option value="">Select State</option>
                                    <option value="1" title="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="2" title="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="3" title="Assam">Assam</option>
                                    <option value="4" title="Bihar">Bihar</option>
                                    <option value="5" title="Chandigarh">Chandigarh</option>
                                    <option value="6" title="Chhattisgarh">Chhattisgarh</option>
                                    <option value="7" title="Dadra and Nagar">Dadra and Nagar</option>
                                    <option value="8" title="Daman and Diu">Daman and Diu</option>
                                    <option value="9" title="Delhi">Delhi</option>
                                    <option value="10" title="Goa">Goa</option>
                                    <option value="11" title="Gujarat">Gujarat</option>
                                    <option value="12" title="Haryana">Haryana</option>
                                    <option value="13" title="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="14" title="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                                    <option value="15" title="Jharkhand">Jharkhand</option>
                                    <option value="16" title="Karnataka">Karnataka</option>
                                    <option value="17" title="Kerala">Kerala</option>
                                    <option value="18" title="LakshadweepIsland">LakshadweepIsland</option>
                                    <option value="19" title="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="20" title="Maharashtra">Maharashtra</option>
                                    <option value="21" title="Manipur">Manipur</option>
                                    <option value="22" title="Meghalaya">Meghalaya</option>
                                    <option value="23" title="Mizoram">Mizoram</option>
                                    <option value="24" title="Nagaland">Nagaland</option>
                                    <option value="25" title="Orissa">Orissa</option>
                                    <option value="26" title="Pondicherry">Pondicherry</option>
                                    <option value="27" title="Punjab">Punjab</option>
                                    <option value="28" title="Rajasthan">Rajasthan</option>
                                    <option value="29" title="Sikkim">Sikkim</option>
                                    <option value="30" title="Tamil Nadu">Tamil Nadu</option>
                                    <option value="31" title="Tripura">Tripura</option>
                                    <option value="32" title="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="33" title="Uttaranchal">Uttaranchal</option>
                                    <option value="34" title="West Bengal">West Bengal</option>
                                    <option value="35" title="Andaman&amp;Nicobar">Andaman&amp;Nicobar</option>
                                    <option value="36" title="Telangana">Telangana</option>
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
