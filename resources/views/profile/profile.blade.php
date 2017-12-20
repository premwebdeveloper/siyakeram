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
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> 
        <div class="text-center">
	        <ul class="profile-list">
			    <li class=""><a href="#">Basic Details <span class="no-orange"></span></a></li>
			    <li class=""><a href="#">Family Details <span class="no-orange"></span></a></li>
			    <li class=""><a href="#">Education and Career <span class="no-orange"></span></a></li>
			    <li class=""><a href="#">Address <span class="no-orange"></span></a></li>
			    <li class=""><a href="#">Media(Photos/Videos) <span class="no-orange"></span></a></li>
			    <li class=""><a href="#">Future Plans <span class="no-orange"></span></a></li>
			    <li class=""><a href="#">Fair Disclosure <span class="no-orange"></span></a></li>
				<li class=""><a href="#">Verify(Facebook/LinkedIn)<span class="no-orange"></span></a></li>
			    <li class=""><a href="#">Partner Preference <span class="no-orange"></span></a></li>
			</ul>        
		</div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	        <div class="aadhaar-set-holder ">
				<form>
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-2 col-form-label">Full Name</label>
					    <div class="col-sm-4">
					      <input type="text" readonly class="form-control" id="staticEmail" value="{{ $user->name }}">
					    </div>
				  	</div>
				  	<div class="form-group row">
					    <label for="inputPassword" class="col-sm-2 col-form-label">Phone No.</label>
					    <div class="col-sm-4">
					      <input type="text" class="form-control" id="inputPassword" value="{{ $user->phone }}" readonly>
					    </div>
				  	</div>				  	
				  	<div class="form-group row">
					    <label for="inputPassword" class="col-sm-2 col-form-label">DOB</label>
					    <div class="col-sm-1">
					      <input type="text" class="form-control" id="inputPassword" value="{{ $user->date }}" readonly>
					    </div>					    
					    <div class="col-sm-1">
					      <input type="text" class="form-control" id="inputPassword" value="{{ $user->month }}" readonly>
					    </div>					    
					    <div class="col-sm-2">
					      <input type="text" class="form-control" id="inputPassword" value="{{ $user->year }}" readonly>
					    </div>
				  	</div>				  	
				  	<div class="form-group row">
					    <label for="inputPassword" class="col-sm-2 col-form-label">Phone No.</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputPassword" value="{{ $user->phone }}">
					    </div>
				  	</div>
				</form> 			  
		    </div>
          
      		<div class="clear"></div>
      		     
		    <a href="https://www.lovevivah.com/share_controller/share_basic_details/">
		    	<button type="button" class="btn btn-default yellow float-right">SKIP<span class="next"></span>
		    </a>
        </div>
    </div>
  </div>
@endsection