@extends('layouts.public_app')

@section('content')

<div class="main" ng-app="HomePage">
    <section class="slider-holder">
        <div class="mobile-img">
            <h2 class="banner-text">India’s 1st matrimonial platform linked with Aadhaar</h2>
        </div>
        <div class="slider">
            <div id="mainCarousel" class="carousel slide row" data-ride="carousel" >
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainCarousel" data-slide-to="1"></li>
                <li data-target="#mainCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img class="img-responsive" src="resources/frontend_assets/images/carousel_img_1.jpg" >
                </div>
                <div class="item">
                  <img class="img-responsive" src="resources/frontend_assets/images/carousel_img_2.jpg" >
                </div>
                <div class="item">
                  <img class="img-responsive" src="resources/frontend_assets/images/carousel_img_3.jpg" >
                </div>
              </div>
            </div>
        </div>
        <div class="best-time-holder">
        <div class="wrapper row position-relative">
          <div class="get-started-holder">
     <div class="col-md-12">
               <!-- Search Form -->

               <div class="srch_frm">
                  <h3 style="color: #000;font-weight: bold;">Free Register</h3>
                  <form name="reg_home_frm" id="reg_home_frm" action="" method="post">

                     <div class="control-group form-group">
                        <div class="controls col-md-6">
                           <input pattern="[A-Za-z]+" name="first_name" type="text" id="first_name" class="form-control" required="" data-validation-required-message="Please enter a first name." placeholder="First Name">
                           <p class="help-block"></p>
                        </div>
                        <div class="controls col-md-6">
                           <input pattern="[A-Za-z]+" name="last_name" type="text" id="last_name" class="form-control" required="" data-validation-required-message="Please enter a last name." placeholder="Last Name">
                           <p class="help-block"></p>
                        </div>
                     </div>
                     <div class="control-group form-group">
                        <div class="controls col-md-12">
                            <label class="radio-inline radio">
                              <input type="radio" name="looking_for" id="bride" value="f" checked>
                              <label for="bride">Male</label>
                            </label>
                            <label class="radio-inline radio">
                              <input type="radio" name="looking_for" id="groom" value="m">
                              <label for="groom">Female</label>
                            </label>
                        <p class="help-block"></p>
                     </div>
                     </div>
                     <div style="clear: both;">
                        <div class="control-group form-group">
                            <div class="controls col-md-12">
                            <label for="dob_m">Date of Birth:</label>
                            </div>
                           <div class="controls">
                                <div class="controls col-md-4">
                                    <select class="form-control" name="dob_m" id="dob_m" required="" data-validation-required-message="Please select a month.">
                                        <option selected="selected" value="" style="color:#888;">Month</option>
                                        <option value="01">Jan</option>
                                    </select>
                                    <p class="help-block"></p>
                                </div>
                                <div class="controls col-md-4">
                                 <select class="form-control" name="dob_d" id="dob_d" required="" data-validation-required-message="Please select a day.">
                                    <option selected="selected" value="" style="color:#888;">Day</option>
                                       <option value="01">01</option>
                                 </select>
                                 <p class="help-block"></p>
                                </div>
                                 <div class="controls col-md-4">
                                 <select class="form-control" name="dob_y" id="dob_y" required="" data-validation-required-message="Please select a year.">
                                    <option selected="selected" value="" style="color:#888;">Year</option>
                                        <option value="1999">1999</option>

                                 </select>
                                 <p class="help-block"></p>
                              </div>
                           </div>
                        </div>
                        <div class="control-group form-group">

                            <div class="controls col-md-12">
                              <select name="religion" id="ddlReligion" class="form-control" required="" data-validation-required-message="Please select a religion.">
                                 <option value="" style="color:#888;">Religion</option>
                                 <option value="7-0">Hinduism</option>
                              </select>
                              <p class="help-block"></p>
                           </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls col-md-12">
                              <select name="country_id" id="ddlCountry" class="form-control" required="" data-validation-required-message="Please select a location.">
                                 <option value="" style="color:#888;">Country</option>
                                 <option value="113">India</option>
                                </optgroup>
                              </select>
                           </div>
                        </div>
                        <br>
                        <div class="control-group form-group">
                           <div class="controls col-md-12">
                              <input class="form-control" autocomplete="off" name="user_email" type="email" id="txtEmailAddress" required="" data-validation-required-message="Please enter a Email Address." placeholder="Email Address">
                              <p class="help-block"></p>
                           </div>
                        </div>
                        <div class="control-group form-group">
                           <div class="controls col-md-12">
                              <input maxlength="16" class="form-control" name="user_pass" type="password" id="txtPassword" required="" data-validation-required-message="Please enter a password." placeholder="Password">
                              <p class="help-block"></p>
                           </div>
                        </div>

                     </div>

                    <div id="success"></div>
                     <!-- For success/fail messages -->
                    <div class="controls col-md-12">
                         <input type="hidden" name="action" value="register">
                         <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>

            </div>
          </div>
      </div>
    </section>


<section class="success-stories">
      <div class="text-center">
        <span class="spn-success">Siya Ke Ram Matrimony Success Stories</span>
        <div id="myCarousel" class="carousel slide row" data-ride="carousel" data-interval="false">

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
           <div class="item row active">
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                   <img class="img-responsive pad-20" src="resources/frontend_assets/images/February202017522pm.png">
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <h2 class="ng-binding">Megha and Anshul</h2>
                <p class="maroon-text ng-binding">Me and Anshul met each-morable and smooth sail. I have opted for three months paid services. My account manager shared some p.. </p>
                <a href="javascript:;" id="HP_View_Stories"><button class="btn btn-default view-all-stories custom-botton">View more stories</button></a>
              </div>
            </div>
            <div class="item row">
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                   <img class="img-responsive pad-20" src="resources/frontend_assets/images/successstory/J
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <h2 class="ng-binding">Mandakini and Naveen</h2>
                <p class="maroon-text ng-binding">After seeing Naveen’s profd. After two weeks, I once again sent him the interest and this time he accepted my request... </p>
                <a href="javascript:;" id="HP_View_Stories">
                    <button class="btn btn-default view-all-stories custom-botton">View more stories</button>
                </a>
              </div>
            </div>

          </div>

          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon button_left" aria-hidden="true"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon button_right" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </section>
    <section class="promotion">
        <div class="pormo_left_panel">

            <div class="heading"><span>Search your</span>Life Partner On the Go.</div>

            <div class="step_box">
                <div class="arrow_box first"><div class="number">1</div>SIMPLE</div>
                <div class="arrow_box second"><div class="number">2</div>FAST</div>
                <div class="arrow_box third"><div class="number">3</div>CONVENIENT</div>
                <div class="arrow_box fourth"><div class="number">4</div>SAFE & SECURE</div>
            </div>
        </div>
        <div class="pormo_right_panel">
            <div class="heading">Simplify your search in 4 easy steps</div>
            <div class="steps">
                <div class="box">
                    <div class="icon_outer">
                        <div class="icon"><span class="step_1"></span></div>
                    </div>
                    <div class="text">
                            <span>Sign Up</span>
                            Register & complete your profile to get started! Register Now for FREE!
                    </div>
                </div>
                <div class="box">
                    <div class="icon_outer">
                        <div class="icon"><span class="step_2"></span></div>
                    </div>
                    <div class="text">
                            <span>Search & connect</span>
                            Browse through millions of profiles & Share your interest with preferred matches.
                    </div>
                </div>
                <div class="clear"></div>
                <div class="box">
                    <div class="icon_outer">
                        <div class="icon"><span class="step_3"></span></div>
                    </div>
                    <div class="text">
                            <span>Interact & Chat</span>
                            Find out more about your preferred profiles. Interact and chat with the active users.
                    </div>
                </div>
                <div class="box">
                    <div class="icon_outer">
                        <div class="icon"><span class="step_4"></span></div>
                    </div>
                    <div class="text">
                            <span>Meet & Marry</span>
                            Get ready to start a new journey. Meet & Marry the most compatible partner.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-benefit">
      <h2 class="feature-heading">Features and benefits </h2>
      <div class="feature-table wrapper">
        <div>
          <div class="content-holder">
            <h3 class="sub-heading">Aadhaar Authentic & Trustworthy Profiles</h3>
            <div class="sub-content">To make this platform safe, truic and Aadhaar number Authentication of the registered members of LoveVivah.com.</div>
          </div>
          <div class="image-holder features_img_1"></div>
        </div>
        <div>
          <div class="content-holder">
            <h3 class="sub-heading">Quick & Easy Profile Sharing</h3>
            <div class="sub-content">To give users a hassle free experienc to registered profiles or your preferred profiles within seconds.</div>
          </div>
          <div class="image-holder features_img_2"></div>
        </div>
        <div class="hidden-xs">
          <div class="content-holder">
            <h3 class="sub-heading">Photo Gallery</h3>
            <div class="sub-content">Now, you can upload more photos in yof with your latest photos.</div>
          </div>
          <div class="image-holder features_img_3"></div>
        </div>
        <div class="hidden-xs">
          <div class="content-holder">
            <h3 class="sub-heading">Meet Whom You Want</h3>
            <div class="sub-content">It is really simple to meet someone special and get Meeting for Happy Marriage.</div>
          </div>
          <div class="image-holder features_img_4"></div>
        </div>
      </div>
    </section>
    </div>

@endsection