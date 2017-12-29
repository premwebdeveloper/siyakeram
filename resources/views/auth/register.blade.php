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
                                    <option value="">Select date</option><option value="01">01</option>
                                    <option value="02">02</option><option value="03">03</option><option value="04">04</option>
                                    <option value="05">05</option><option value="06">06</option><option value="07">07</option>
                                    <option value="08">08</option><option value="09">09</option><option value="10">10</option>
                                    <option value="11">11</option><option value="12">12</option><option value="13">13</option>
                                    <option value="14">14</option><option value="15">15</option><option value="16">16</option>
                                    <option value="17">17</option><option value="18">18</option><option value="19">19</option>
                                    <option value="20">20</option><option value="21">21</option><option value="22">22</option>
                                    <option value="23">23</option><option value="24">24</option><option value="25">25</option>
                                    <option value="26">26</option><option value="27">27</option><option value="28">28</option>
                                    <option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <select class="form-control" id="month" name="month" required="required">
                                    <option value="">Select Month</option><option value="01">January</option>
                                    <option value="02">February</option><option value="03">March</option>
                                    <option value="04">April</option><option value="05">May</option>
                                    <option value="06">June</option><option value="07">July</option>
                                    <option value="08">August</option><option value="09">September</option>
                                    <option value="10">October</option><option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <select class="form-control" id="year" name="year" required="required">
                                <option value="">Select Year</option>
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

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Religion</label>
                            <div class="col-md-6">
                                <select class="form-control" id="religion" name="religion" required="required">
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
                        </div>

                        <div class="form-group">
                            <label for="gender" class="col-md-4 control-label">Mother Tongue</label>
                            <div class="col-md-6">
                                <select class="form-control" id="mother_tongue" name="mother_tongue" required="required">
                                    <option value="">Select Mother Tongue</option>
                                    @foreach($mother_tongue as $tongue)
                                        <option value="{{ $tongue->id }}" title="{{ $tongue->mother_tongue }}">{{ $tongue->mother_tongue }}</option>
                                    @endforeach
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
