@extends('layouts.public_app')

@section('content')
<div class="container" style="padding-top: 170px;">
<div class="row content wrapper">

      <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12 margin-bottom-20">
        <div class="contactus-section" style="box-shadow: 0px 0px 13px rgba(68, 68, 68, 0.15);">
        <h2 class="contactus-heading">Let's Get In Touch!</h2>
        <p>We always love to hear from our customers! We are happy to answer your questions and assist you</p>
		<div class="row">
        <form action="javascript:;" name="contact" method="POST" enctype="multipart/form-data">
          <div class="form-groups row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><label class="roboto-regular">Name<span>*</span></label></div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <div class="error-message">Please fill required field</div>
              <div class="error-message-server"></div>
               <input type="text" name="name" id="name" maxlength="100" class="form-control" required>

            </div>

          </div>
          <div class="form-groups row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><label class="roboto-regular">Email<span>*</span></label></div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <div class="error-message">Please fill required field</div>
              <div class="error-message-server"></div>
               <input type="text" name="email" id="email" maxlength="100" class="form-control" required>
            </div>
          </div>
          <div class="form-groups row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><label class="roboto-regular">Comment<span>*</span></label></div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <div class="error-message">Please fill required field</div>
               <div class="error-message-server"></div>
              <textarea type="textarea" class="form-control" name="desc" id="desc" rows="6" required></textarea>
            </div>
          </div>

          <div class="clear"></div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="button-holder">
              <button type="submit" class="btn btn-theme ripplelink padd-10 border-r2 float-right">SUBMIT</button>
            </div>
          </div>
        </form>
		</div>
      </div>
	  </div>
      	<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12" ng-app="root">
			<div class="officeadd-section">
			    <h4>Our Office Locations </h4>
			    <div class="padd-30" style="padding-top:20px;">
			     <div class="gurgaonadd">
			     <h5>Jaipur Office - Head Office</h5>
			     <ul>
			      <li><strong>Address</strong> : B-7, Adarsh Plaza, Khasa Khoti Circle, Station Rd, Barodia Scheme, Banipark, Gopalbari, Jaipur, Rajasthan 302006</li>
			      <li><strong>Email</strong> : support@siyakeram.com</li>
			      <li><strong>Tel</strong> : +91-97720 70234 (India)</li>
			     </ul>
			     </div>

			    </div>
		    </div>
		</div>
    </div>
</div>
<section class="someone-special">
    <h1 class="text-center white-text">Why SiyakeRam?</h1>
    <div class="row wrapper">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
        <div class="steps-holder">
          <div>
            <span class="step_1"></span>
            <span class="steps">1</span>
          </div>
        </div>
        <h3 class="white-text">100% Trustworthy</h3>
        <p>
          We are highly authentic, 100% trustworthy matrimonial platform. We follow multi-level authentication to ensure genuine profiles.
        </p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
        <div class="steps-holder">
          <div>
            <span class="step_2"></span>
            <span class="steps">2</span>
          </div>
        </div>
        <h3 class="white-text">Higher Authentication</h3>
        <p>
        Higher level of verification to keep fake users at bay. We authenticate Aadhaar Card Number through UIDAI to ensure credibility of members.
        </p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
        <div class="steps-holder">
          <div>
            <span class="step_3"></span>
            <span class="steps">3</span>
          </div>
        </div>
        <h3 class="white-text">Better Search &amp; Matches</h3>
        <p>
           Better search results &amp; matches based on your preferences. Search the desired profiles without any hassle &amp; get relevant matches.
        </p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
        <div class="steps-holder">
          <div>
            <span class="step_4"></span>
            <span class="steps">4</span>
          </div>
        </div>
        <h3 class="white-text">Explore &amp; Connect</h3>
        <p>
         Explore and connect anytime, anywhere with registered users at your ease. Get access to unlimited profiles &amp; share interest with the one you like.
        </p>
      </div>
    </div>
</section>
@endsection
