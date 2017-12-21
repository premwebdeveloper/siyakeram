@extends('layouts.public_app')

@section('content')
<div class="main page-bg">
  	<section class="container-full theme-bg-panel col-xs-12">
	  	<div class="row">
	   	<h1>Membership Plans</h1>
	   	<p class="plan-subheading">Welcome to SiyakeRam.com! We are a leading Indian Matrimonial Matchmaking Service provider.</p> 
	 	</div>
  	</section>  
  <div class="container-fluid mobile-padding-lr0">
   <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
	<div class="LV-package-box">
     <div class="padd-60">    
     	 <div class="row text-center">
         
			<ul class="nav nav-pills pckg-option text-center">
                <li class="active"><a data-toggle="pill" class="bor-r-l" href="#Online">Online</a></li>
          	</ul>
              
              <div class="tab-content plans-box">
                <div id="Online" class="tab-pane fade in active  gallery">                  
                  <p class="plan-tagline"> All online services are self-assisted. Search, Shortlist and Send Interest. </p>
   					<form name="membershipForm" id="membershipForm" action="javascript:;" method="POST">
   
		                 <div class="row ">
		                    <div class="col-md-12 col-sm-12 col-xs-12 packages-section ">
		                     	<div class="col-md-3 col-sm-3 col-xs-3 LV-Basic">
		                     	<h2>SR-Basic</h2>                     
		                     	</div>
		                     	<div class="col-md-3 col-sm-3 col-xs-3 get-contacts">
		                      		<div class="get-contacts-detail">
				                      	<p>View</p>
				                      	<h3>75</h3>
				                      	<p>Contacts</p>
			                      	</div>
		                    	</div>
		                     	<div class="col-md-3 col-sm-3 col-xs-3 validity-offer-section">
			                     	<div class="get-validity-detail">
				                      <p>Validity</p>					  
				                      <h3>3</h3> 
				                      <p>Months</p>
				                      <p><i class="fa fa-rupee"></i> 1100/PM</p>
			                      	</div>
			                    </div>
			                    <div class="col-md-3 col-sm-3 col-xs-3 final-price-section">
			                      <div class="price-detail">
			                      	<p>Final Price</p>
			                      	<h3><i class="fa fa-rupee"></i> 3300</h3>
			                     	<a href="#">
										<button type="submit" class="btn btn-theme border-r-50 btn-LV-Basic ripplelink">BUY NOW</button>  
									</a>
								  </div>
			                    </div>
		                    </div>
	                    </div>
					</form>
   					<form name="membershipForm" id="membershipForm" action="javascript:;" method="POST">
	   
	                  <div class="row ">
	                    <div class="col-md-12 col-sm-12 col-xs-12 packages-section ">
	                     <div class="col-md-3 col-sm-3 col-xs-3 LV-Super">
	                     <h2>SR-Super</h2>                     
	                     </div>
	                     <div class="col-md-3 col-sm-3 col-xs-3 get-contacts">
	                      <div class="get-contacts-detail">
	                      <p>View</p>
	                      <h3>150</h3>
	                      <p>Contacts</p></div>
	                     </div>
	                     <div class="col-md-3 col-sm-3 col-xs-3 validity-offer-section">
	                     					  <div class="get-validity-detail">
	                      <p>Validity</p>					  
	                      <h3>6</h3> 
	                      <p>Months</p>
	                      <p><i class="fa fa-rupee"></i> 900/PM</p>
	                      </div>
						                       </div>
	                     <div class="col-md-3 col-sm-3 col-xs-3 final-price-section">
	                      <div class="price-detail">
	                      <p>Final Price</p>
	                      <h3><i class="fa fa-rupee"></i> 5400</h3>
     						<a href="#">
							<button type="submit" class="btn btn-theme border-r-50 btn-LV-Super ripplelink">BUY NOW</button>  
							</a>
						  					 
	                      </div>
	                     </div>
	                    </div>
                  	</div> 
				  </form>
   					<form name="membershipForm" id="membershipForm" action="javascript:;" method="POST">
   
                  <div class="row ">
                    <div class="col-md-12 col-sm-12 col-xs-12 packages-section ">
                     <div class="col-md-3 col-sm-3 col-xs-3 LV-Advance">
                     <h2>SR-Advance</h2>                     
                     </div>
                     <div class="col-md-3 col-sm-3 col-xs-3 get-contacts">
                      <div class="get-contacts-detail">
                      <p>View</p>
                      <h3>300</h3>
                      <p>Contacts</p></div>
                     </div>
                     <div class="col-md-3 col-sm-3 col-xs-3 validity-offer-section">
                     					  <div class="get-validity-detail">
                      <p>Validity</p>					  
                      <h3>12</h3> 
                      <p>Months</p>
                      <p><i class="fa fa-rupee"></i> 700/PM</p>
                      </div>
					                       </div>
                     <div class="col-md-3 col-sm-3 col-xs-3 final-price-section">
                      <div class="price-detail">
                      <p>Final Price</p>
                      <h3><i class="fa fa-rupee"></i> 8400</h3>
                     	<a href="#">
						<button type="submit" class="btn btn-theme border-r-50 btn-LV-Advance ripplelink">BUY NOW</button>  
						</a>
					  					 
                      </div>
                     </div>
                    </div>
					</div> 
				</form>
				              
                  
                  <div class="row row-padded plan-features row-bordered p-t text-center">
                   <h3>Features of Paid Membership</h3>
                    <div class="col-sm-3 col-xs-6">
                      <span class="feature-steps"><i class="fa fa-address-card-o"></i></span>
                      <h5>View Contact Details</h5>
                      
                    </div>
                
                    <div class="col-sm-3 col-xs-6">
                     <span class="feature-steps"><i class="fa fa-mobile-phone"></i></span>
                      <h5>View Mobile Number</h5>
                      
                    </div>
                    
                    <div class="col-sm-3 col-xs-6">
                      <span class="feature-steps"><i class="fa fa-commenting-o"></i></span>
                      <h5>Initiate Chat</h5>
                      
                    </div>
                
                    <div class="col-sm-3 col-xs-6">
                      <span class="feature-steps"><i class="fa fa-envelope-o"></i></span>
                      <h5>Send Messages </h5>
                    </div>
                  </div>
                   
                </div>              
              </div>
             
            </div>
  				
     <!-- row end -->
     </div>
     
     
	       <div class="plan-register-section">
	  <h2>Register Now &amp; Enjoy <strong> Unlimited Benefits </strong> </h2>
      <a href="{{ route('register') }}">  <button type="submit" class="btn register-now-btn btn-Pright">Register Free</button></a>
	 </div>
	 	 
     
     <div class="row all-free-features padd-60">
     <div class="col-md-12 col-sm-12 col-xs-12">
       <h3>FREE Features for all</h3>
       <div class="col-md-4 col-sm-4 col-xs-12">
        <ul class="free-feature-list">
        <li><i class="fa fa-check"></i> Create Profile</li>
        <li><i class="fa fa-check"></i> Upload Photos</li>
        <li><i class="fa fa-check"></i> Define Partner Preference</li>
        <li><i class="fa fa-check"></i> Search Relevant Profiles</li>
        </ul>
       </div>
       <div class="col-md-4 col-sm-4 col-xs-12">
        <ul class="free-feature-list">
        <li><i class="fa fa-check"></i>  View Full Profile</li>
        <li><i class="fa fa-check"></i> View Photos</li>
        <li><i class="fa fa-check"></i> Send Interest</li>
        <li><i class="fa fa-check"></i> Receive Interest</li>
        </ul>
       </div>
       <div class="col-md-4 col-sm-4 col-xs-12">
        <ul class="free-feature-list">
        <li><i class="fa fa-check"></i> Block Profile</li>
        <li><i class="fa fa-check"></i> View Visitor to Your Profile</li>
        <li><i class="fa fa-check"></i> Get Auto Matches</li>
        <li><i class="fa fa-check"></i> View Latest Profiles</li>
        </ul>
       </div>
		</div>
     </div>
     <div class="plan-condition">*Offer is valid on SR-Basic Membership Plan only to be upgraded within a week of achieving 90% Trust Score.</div>
	</div>	
   </div>         
  </div>
   
   
  </div>
@endsection
