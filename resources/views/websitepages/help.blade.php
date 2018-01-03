@extends('layouts.public_app')

@section('content')
<div class="col-md-12 no-padding aadhar_verfy_strip" style="padding:0px;margin-bottom:30px;">

</div>
<div class="main page-bg">
	<div class="banar">
		<div class="container">
			<div class="row">
				<div class="col col-md-8 col-md-offset-2">
					<h1>How can we help you today?</h1>
				</div>
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div>
	<div class="container-fluid mobile-padding-lr0">
		<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
			<div class="col-md-12 help3-section">
				<div class="col-md-4">
					<div class="help-boxes">
						<span><img src="resources/frontend_assets/images/emailhelp.png" alt=""></span>
						<p>Send your queries to: <a href="mailto:support@siyakeram.com">support@siyakeram.com</a></p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="help-boxes">
						<span><img alt="" src="resources/frontend_assets/images/callhelp.png"></span>
						<p>Call +91-124-265 8600 (India)</p>
						<small>9 am - 6 pm (Mon - Fri) - 10 am - 3 pm (Sat)</small>
					</div>
				</div>
				<div class="col-md-4">
					<div class="help-boxes">
						<span><img alt="" src="resources/frontend_assets/images/chathelp.png"></span>
						<p style="margin-top:5px;">For instant answer</p>
						<small>9 am - 6 pm (Mon-Fri) - 10 am - 3 pm (Sat)</small>
					</div>
				</div>

			</div>

			<div class="col-md-12">
				<div class="col-md-12">
					<div class="bg-white help-faqs">
						<div class="col-md-8">
							<div class="helpsupport">
								<h3>Most Popular FAQs</h3>
								<p>We have created FAQs based on various queries and feedback received from our members. We tried to capture most of the topics related to different categories.<br> We are sure that all your queries will get resolved here.</p>
								<ul class="padding-0">
									<li><a href="javascipt:;" class="black-text"> 1. General FAQs</a></li>
									<li><a href="javascipt:;" class="black-text">2. Registration &amp; Process</a></li>
									<li><a href="javascipt:;" class="black-text">3. Profile &amp; Photos</a></li>
									<li><a href="javascipt:;" class="black-text">4. Login Help </a></li>
									<li><a href="javascipt:;" class="black-text">5. Contact Members</a></li>
									<li><a href="javascipt:;" class="black-text">6. Search Options &amp; Getting Responses</a></li>
									<li><a href="javascipt:;" class="black-text">7. Upgrade &amp; Paid Services</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 hidden-xs text-center padd-30"><img src="resources/frontend_assets/images/faqs.jpg" alt=""></div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
