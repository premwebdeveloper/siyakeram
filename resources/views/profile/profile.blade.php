@extends('layouts.public_app')

@section('content')

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
	       	</h4>
          	<h2 class="light-pink">Share Your Identity</h2>
        </div>
      </div>
      <div class="nav-tabs-three">
      	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> 
            <div class="nav-tabs-three-sidebar">
                <ul class="nav">
                    <li class="active">
                    	<a href="#basic" data-toggle="tab" role="tab" aria-expanded="true">Basic Details</a>
                    </li>
                    <li class=""><a href="#family" data-toggle="tab" role="tab" aria-expanded="false">Family Details</a></li>
                    <li class=""><a href="#education" data-toggle="tab" role="tab" aria-expanded="false">Education and Career</a></li>
                    <li class=""><a href="#address" data-toggle="tab" role="tab" aria-expanded="false">Address</a></li>
                    <li class=""><a href="#photo" data-toggle="tab" role="tab" aria-expanded="false">Media(Photos/Videos)</a></li>
                </ul>
            </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  	                <!-- Design Three Content -->
            <div class="nav-tabs-three-content">
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="basic">
        				<form>
						  	<div class="form-group row">
							    <label for="staticEmail" class="col-sm-2 col-form-label">Full Name</label>
							    <div class="col-sm-6">
							      <input type="text" readonly class="form-control" id="staticEmail" value="{{ $user->name }}">
							    </div>
						  	</div>
						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Phone No.</label>
							    <div class="col-sm-6">
							      <input type="text" class="form-control" id="inputPassword" value="{{ $user->phone }}" readonly>
							    </div>
						  	</div>				  	
						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">DOB</label>
							    <div class="col-md-2">
	                                <select class="form-control" id="date" name="date" required="required">
	                                    <option value="">Select date</option>
	                                    <option label="01" value="01">01</option>
	                                    <option label="02" value="02">02</option>
	                                    <option label="03" value="03">03</option>
	                                    <option label="04" value="04">04</option>
	                                    <option label="05" value="05">05</option>
	                                    <option label="06" value="06">06</option>
	                                    <option label="07" value="07">07</option>
	                                    <option label="08" value="08">08</option>
	                                    <option label="09" value="09">09</option>
	                                    <option label="10" value="10">10</option>
	                                    <option label="11" value="11">11</option>
	                                    <option label="12" value="12">12</option>
	                                    <option label="13" value="13">13</option>
	                                    <option label="14" value="14">14</option>
	                                    <option label="15" value="15">15</option>
	                                    <option label="16" value="16">16</option>
	                                    <option label="17" value="17">17</option>
	                                    <option label="18" value="18">18</option>
	                                    <option label="19" value="19">19</option>
	                                    <option label="20" value="20">20</option>
	                                    <option label="21" value="21">21</option>
	                                    <option label="22" value="22">22</option>
	                                    <option label="23" value="23">23</option>
	                                    <option label="24" value="24">24</option>
	                                    <option label="25" value="25">25</option>
	                                    <option label="26" value="26">26</option>
	                                    <option label="27" value="27">27</option>
	                                    <option label="28" value="28">28</option>
	                                    <option label="29" value="29">29</option>
	                                    <option label="30" value="30">30</option>
	                                    <option label="31" value="31">31</option>
	                                </select>
	                            </div>					    
							    <div class="col-md-2">
	                                <select class="form-control" id="month" name="month" required="required">
	                                    <option value="">Select Month</option>
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
	                                <select class="form-control" id="year" name="year" required="required">
	                                    <option value="">Select Year</option>
	                                    <option label="1999" value="1999">1999</option><option label="1998" value="1998">1998</option><option label="1997" value="1997">1997</option><option label="1996" value="1996">1996</option><option label="1995" value="1995">1995</option><option label="1994" value="1994">1994</option><option label="1993" value="1993">1993</option><option label="1992" value="1992">1992</option><option label="1991" value="1991">1991</option><option label="1990" value="1990">1990</option><option label="1989" value="1989">1989</option><option label="1988" value="1988">1988</option><option label="1987" value="1987">1987</option><option label="1986" value="1986">1986</option><option label="1985" value="1985">1985</option><option label="1984" value="1984">1984</option><option label="1983" value="1983">1983</option><option label="1982" value="1982">1982</option><option label="1981" value="1981">1981</option><option label="1980" value="1980">1980</option><option label="1979" value="1979">1979</option><option label="1978" value="1978">1978</option><option label="1977" value="1977">1977</option><option label="1976" value="1976">1976</option><option label="1975" value="1975">1975</option><option label="1974" value="1974">1974</option><option label="1973" value="1973">1973</option><option label="1972" value="1972">1972</option><option label="1971" value="1971">1971</option><option label="1970" value="1970">1970</option><option label="1969" value="1969">1969</option><option label="1968" value="1968">1968</option><option label="1967" value="1967">1967</option><option label="1966" value="1966">1966</option><option label="1965" value="1965">1965</option><option label="1964" value="1964">1964</option><option label="1963" value="1963">1963</option><option label="1962" value="1962">1962</option><option label="1961" value="1961">1961</option><option label="1960" value="1960">1960</option><option label="1959" value="1959">1959</option><option label="1958" value="1958">1958</option><option label="1957" value="1957">1957</option><option label="1956" value="1956">1956</option><option label="1955" value="1955">1955</option><option label="1954" value="1954">1954</option><option label="1953" value="1953">1953</option><option label="1952" value="1952">1952</option><option label="1951" value="1951">1951</option><option label="1950" value="1950">1950</option>
	                                </select>
	                            </div>
						  	</div>				  	
						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">State</label>
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
						  	<div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Religion</label>
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
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Mother Tongue</label>
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
						  	<div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">About Us</label>
	                            <div class="col-md-6">
	                                <textarea class="form-control" rows="5" cols="5"></textarea>
	                            </div>
	                        </div>						  	
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Height</label>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" id="Subcaste" placeholder="Height">
	                            </div>
	                        </div>						  	
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Marital Status</label>
	                            <div class="col-md-7">
                                    <input type="radio" name="marital_for" class="marital_for" value="1" required> Never Married
	                                <input type="radio" name="marital_for" class="marital_for" value="2" required> Annulled
	                                <input type="radio" name="marital_for" class="marital_for" value="3" required> Awaiting Divorce
	                                <input type="radio" name="marital_for" class="marital_for" value="4" required> Divorced
	                                <input type="radio" name="marital_for" class="marital_for" value="5" required> Widowed
	                            </div>
	                        </div>						  	
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Caste</label>
	                            <div class="col-md-6">
	                                <select class="form-control" id="caste" name="caste" required="required">
	                                    <option value="">Select Caste</option>
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
	                            <label for="gender" class="col-md-2 control-label">Sub-caste(optional)</label>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" id="Subcaste" placeholder="Sub-caste(optional)">
	                            </div>
	                        </div>						  	
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Complexion</label>
	                            <div class="col-md-6">
	                                <select class="form-control" id="caste" name="caste" required="required">
	                                    <option value="">Select Complexion</option>
										<option value="1" title="Dark">Dark</option>
	                                    <option value="2" title="Fair">Fair</option>
	                                    <option value="3" title="Very Fair">Very Fair</option>
	                                    <option value="4" title="Wheatish">Wheatish</option>
	                                    <option value="5" title="Wheatish Brown">Wheatish Brown</option>
	                                    <option value="6" title="Wheatish Medium">Wheatish Medium</option>
	                                </select>
	                            </div>
	                        </div>	                        
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Manglik</label>
	                            <div class="col-md-6">
	                                <select class="form-control" id="caste" name="caste" required="required">
	                                    <option value="">Select Manglik</option>
										<option value="1" title="Don't Know">Don't Know</option>
	                                    <option value="2" title="No">No</option>
	                                    <option value="3" title="Yes">Yes</option>
	                                    <option value="4" title="Anshik">Anshik</option>
	                                </select>
	                            </div>
	                        </div>
                    		<div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Gotra</label>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" id="Gotra" placeholder="Gotra">
	                            </div>
	                        </div>
	                        <h5 style="color:red">*Please share your time and place of birth for horoscope matching.</h5>
	                        <br>
						  	<div class="form-group row">
							    <label for="inputPassword" class="col-sm-2 col-form-label">Time of birth</label>
							    <div class="col-md-2">
	                                <select class="form-control" id="hrs" name="hrs" required="required">
	                                    <option value="">Select Hrs</option>
	                                    <option label="01" value="1">1</option>
	                                    <option label="02" value="2">2</option>
	                                    <option label="03" value="3">3</option>
	                                    <option label="04" value="4">4</option>
	                                    <option label="05" value="5">5</option>
	                                    <option label="06" value="6">6</option>
	                                    <option label="07" value="7">7</option>
	                                    <option label="08" value="8">8</option>
	                                    <option label="09" value="9">9</option>
	                                    <option label="10" value="10">10</option>
	                                    <option label="11" value="11">11</option>
	                                    <option label="12" value="12">12</option>
	                                    <option label="13" value="13">13</option>
	                                    <option label="14" value="14">14</option>
	                                    <option label="15" value="15">15</option>
	                                    <option label="16" value="16">16</option>
	                                    <option label="17" value="17">17</option>
	                                    <option label="18" value="18">18</option>
	                                    <option label="19" value="19">19</option>
	                                    <option label="20" value="20">20</option>
	                                    <option label="21" value="21">21</option>
	                                    <option label="22" value="22">22</option>
	                                    <option label="23" value="23">23</option>
	                                </select>
	                            </div>					    
							    <div class="col-md-2">
	                                <select class="form-control" id="min" name="min" required="required">
	                                    <option value="">Select Min</option>
	                                    <option label="01" value="1">1</option>
	                                    <option label="02" value="2">2</option>
	                                    <option label="03" value="3">3</option>
	                                    <option label="04" value="4">4</option>
	                                    <option label="05" value="5">5</option>
	                                    <option label="06" value="6">6</option>
	                                    <option label="07" value="7">7</option>
	                                    <option label="08" value="8">8</option>
	                                    <option label="09" value="9">9</option>
	                                    <option label="10" value="10">10</option>
	                                    <option label="11" value="11">11</option>
	                                    <option label="12" value="12">12</option>
	                                    <option label="13" value="13">13</option>
	                                    <option label="14" value="14">14</option>
	                                    <option label="15" value="15">15</option>
	                                    <option label="16" value="16">16</option>
	                                    <option label="17" value="17">17</option>
	                                    <option label="18" value="18">18</option>
	                                    <option label="19" value="19">19</option>
	                                    <option label="20" value="20">20</option>
	                                    <option label="21" value="21">21</option>
	                                    <option label="22" value="22">22</option>
	                                    <option label="23" value="23">23</option>
	                                    <option label="23" value="24">24</option>
	                                    <option label="23" value="25">25</option>
	                                    <option label="23" value="26">26</option>
	                                    <option label="23" value="27">27</option>
	                                    <option label="23" value="28">28</option>
	                                    <option label="23" value="29">29</option>
	                                    <option label="23" value="30">30</option>
	                                    <option label="23" value="31">31</option>
	                                    <option label="23" value="32">32</option>
	                                    <option label="23" value="33">33</option>
	                                    <option label="23" value="34">34</option>
	                                    <option label="23" value="35">35</option>
	                                    <option label="23" value="36">36</option>
	                                    <option label="23" value="37">37</option>
	                                    <option label="23" value="38">38</option>
	                                    <option label="23" value="39">39</option>
	                                    <option label="23" value="40">40</option>
	                                    <option label="23" value="41">41</option>
	                                    <option label="23" value="42">42</option>
	                                    <option label="23" value="43">43</option>
	                                    <option label="23" value="44">44</option>
	                                    <option label="23" value="45">45</option>
	                                    <option label="23" value="46">46</option>
	                                    <option label="23" value="47">47</option>
	                                    <option label="23" value="48">48</option>
	                                    <option label="23" value="48">48</option>
	                                    <option label="23" value="49">49</option>
	                                    <option label="23" value="50">50</option>
	                                    <option label="23" value="51">51</option>
	                                    <option label="23" value="52">52</option>
	                                    <option label="23" value="53">53</option>
	                                    <option label="23" value="54">54</option>
	                                    <option label="23" value="55">55</option>
	                                    <option label="23" value="56">56</option>
	                                    <option label="23" value="57">57</option>
	                                    <option label="23" value="58">58</option>
	                                    <option label="23" value="59">59</option>
	                                </select>
	                            </div>					    
							    <div class="col-md-2">
	                                <select class="form-control" id="sec" name="sec" required="required">
	                                    <option value="">Select Sec</option>
	                                    <option label="01" value="1">1</option>
	                                    <option label="02" value="2">2</option>
	                                    <option label="03" value="3">3</option>
	                                    <option label="04" value="4">4</option>
	                                    <option label="05" value="5">5</option>
	                                    <option label="06" value="6">6</option>
	                                    <option label="07" value="7">7</option>
	                                    <option label="08" value="8">8</option>
	                                    <option label="09" value="9">9</option>
	                                    <option label="10" value="10">10</option>
	                                    <option label="11" value="11">11</option>
	                                    <option label="12" value="12">12</option>
	                                    <option label="13" value="13">13</option>
	                                    <option label="14" value="14">14</option>
	                                    <option label="15" value="15">15</option>
	                                    <option label="16" value="16">16</option>
	                                    <option label="17" value="17">17</option>
	                                    <option label="18" value="18">18</option>
	                                    <option label="19" value="19">19</option>
	                                    <option label="20" value="20">20</option>
	                                    <option label="21" value="21">21</option>
	                                    <option label="22" value="22">22</option>
	                                    <option label="23" value="23">23</option>
	                                    <option label="23" value="24">24</option>
	                                    <option label="23" value="25">25</option>
	                                    <option label="23" value="26">26</option>
	                                    <option label="23" value="27">27</option>
	                                    <option label="23" value="28">28</option>
	                                    <option label="23" value="29">29</option>
	                                    <option label="23" value="30">30</option>
	                                    <option label="23" value="31">31</option>
	                                    <option label="23" value="32">32</option>
	                                    <option label="23" value="33">33</option>
	                                    <option label="23" value="34">34</option>
	                                    <option label="23" value="35">35</option>
	                                    <option label="23" value="36">36</option>
	                                    <option label="23" value="37">37</option>
	                                    <option label="23" value="38">38</option>
	                                    <option label="23" value="39">39</option>
	                                    <option label="23" value="40">40</option>
	                                    <option label="23" value="41">41</option>
	                                    <option label="23" value="42">42</option>
	                                    <option label="23" value="43">43</option>
	                                    <option label="23" value="44">44</option>
	                                    <option label="23" value="45">45</option>
	                                    <option label="23" value="46">46</option>
	                                    <option label="23" value="47">47</option>
	                                    <option label="23" value="48">48</option>
	                                    <option label="23" value="48">48</option>
	                                    <option label="23" value="49">49</option>
	                                    <option label="23" value="50">50</option>
	                                    <option label="23" value="51">51</option>
	                                    <option label="23" value="52">52</option>
	                                    <option label="23" value="53">53</option>
	                                    <option label="23" value="54">54</option>
	                                    <option label="23" value="55">55</option>
	                                    <option label="23" value="56">56</option>
	                                    <option label="23" value="57">57</option>
	                                    <option label="23" value="58">58</option>
	                                    <option label="23" value="59">59</option>
	                                </select>
	                            </div>
						  	</div>
	                        <div class="form-group row">
	                            <label for="gender" class="col-md-2 control-label">Place of birth</label>
	                            <div class="col-md-6">
	                                <input type="text" class="form-control" id="Subcaste" placeholder="Birth Place">
	                            </div>
	                        </div>	
	                        <div class="form-group">
	                            <div class="col-md-6 col-md-offset-2">
	                                <button type="submit" class="btn btn-success">
	                                    Next
	                                </button>
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