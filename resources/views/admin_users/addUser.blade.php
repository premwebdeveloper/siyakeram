@extends('layouts.auth_app')

@section('content')

<style type="text/css">
.form-horizontal .control-label
{
    padding-top: 0px;
    padding: 0px;
    text-align: left;
    font-size: 11px;
}
</style>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Add User</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('users') }}">Users</a>
            </li>
            <li class="active">
                <strong>Add User</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2 text-right">
    	&nbsp;
    </div>
</div>

<br />

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Add User</h5>
            </div>
            <div class="ibox-content" style="float: left;">

                <form method="post" class="form-horizontal" action="{{ route('add_user') }}">

                    {{ csrf_field() }}

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Name</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone" class="col-md-2 control-label">Phone</label>

                            <div class="col-md-10">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="col-md-2 control-label">E-Mail</label>

                            <div class="col-md-10">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password" class="col-md-2 control-label">Password</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-2 control-label">Confirm Password</label>

                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender" class="col-md-2 control-label">DOB</label>

                            <div class="col-md-3">
                                <select class="form-control" id="date" name="date">
                                    <option value="">date</option><option value="01">01</option>
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

                                @if ($errors->has('date'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-3">
                                <select class="form-control" id="month" name="month">
                                    <option value="">Month</option><option value="01">January</option>
                                    <option value="02">February</option><option value="03">March</option>
                                    <option value="04">April</option><option value="05">May</option>
                                    <option value="06">June</option><option value="07">July</option>
                                    <option value="08">August</option><option value="09">September</option>
                                    <option value="10">October</option><option value="11">November</option>
                                    <option value="12">December</option>
                                </select>

                                @if ($errors->has('month'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('month') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <select class="form-control" id="year" name="year">
                                <option value="">Year</option>
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

                                @if ($errors->has('year'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender" class="col-md-2 control-label">Religion</label>
                            <div class="col-md-10">
                                <select class="form-control" id="religion" name="religion">
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

                               @if ($errors->has('religion'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('religion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender" class="col-md-2 control-label">Mother Tongue</label>
                            <div class="col-md-10">
                                <select class="form-control" id="mother_tongue" name="mother_tongue">
                                    <option value="">Select Mother Tongue</option>
                                    @foreach($mother_tongue as $tongue)
                                        <option value="{{ $tongue->id }}" title="{{ $tongue->mother_tongue }}">{{ $tongue->mother_tongue }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('mother_tongue'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('mother_tongue') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender" class="col-md-2 control-label">Gender</label>
                            <div class="col-md-10">
                                <input type="radio" name="gender" id="male" class="gender" value="1"> Male
                                <input type="radio" name="gender" id="female" class="gender" value="2"> Female

                                @if ($errors->has('gender'))
                                    <span class="help-block red">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-right">
                        <input type="submit" name="addUser" class="btn btn-success" value="Add User" style="margin-bottom: 30px;">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection