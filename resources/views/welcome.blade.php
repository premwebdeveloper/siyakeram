@extends('layouts.public_app')

@section('content')
<script type="text/javascript">
    $(document).ready(function(){
        $('#1').addClass('active');
    });
</script>
<div class="main discover">
    <section class="slider-holder">
        <div class="mobile-img">
            <h2 class="banner-text">India’s 1st matrimonial platform linked with Aadhaar</h2>
        </div>
        <div class="slider">
            <div id="mainCarousel" class="carousel slide row" data-ride="carousel" >
              <!-- Indicators -->
              <div class="carousel-inner" role="listbox">
                <?php
                  $i=1;
                ?>
                @foreach($slider as $slid)
                  <div class="item" id="<?= $i;?>">
                    <img class="img-responsive" src="storage/app/uploads/profile_images/{{$slid->image}}" >
                  </div>
                <?php
                  $i++;
                ?>
                @endforeach
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
                  <form name="reg_home_frm" id="reg_home_frm" action="{{ route('register') }}" method="post">
                    {{ csrf_field() }}

                        <div class="control-group form-group">
                          <div class="controls col-md-6">
                             <input pattern="[A-Za-z]+" type="text" id="first_name" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>
                             <p class="help-block"></p>
                          </div>
                          <div class="controls col-md-6">
                             <input type="tel" id="last_name" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone') }}" required autofocus>
                             <p class="help-block"></p>
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                            </div>
                        </div>
                     <div class="control-group form-group">
                        <div class="controls col-md-12">
                          <label for="gender" class="col-md-3 control-label">Gender</label>
                            <label class="radio-inline radio">
                              <input type="radio" name="gender" id="bride" value="1" required>
                              <label for="bride">Male</label>
                            </label>
                            <label class="radio-inline radio">
                              <input type="radio" name="gender" id="groom" value="2" required>
                              <label for="groom">Female</label>
                            </label>
                        <p class="help-block"></p>
                     </div>
                     </div>
                     <div style="clear: both;">
                       <label for="gender" class="col-md-12 control-label">Date of Birth</label>
                        <div class="form-group">
                            <div class="col-md-4">
                                <select class="form-control" id="date" name="date" required="required">
                                    <option value="">Date</option><option value="01">01</option>
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

                            <div class="col-md-4">
                                <select class="form-control" id="month" name="month" required="required">
                                    <option value="">Month</option><option value="01">January</option>
                                    <option value="02">February</option><option value="03">March</option>
                                    <option value="04">April</option><option value="05">May</option>
                                    <option value="06">June</option><option value="07">July</option>
                                    <option value="08">August</option><option value="09">September</option>
                                    <option value="10">October</option><option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="form-control" id="year" name="year" required="required">
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
                            </div>

                        </div>
                        <div class="form-group">
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
                           <div class="col-md-6">
                                <select class="form-control" id="mother_tongue" name="mother_tongue" required="required">
                                    <option value="">Select Mother Tongue</option>
                                    @foreach($mother_tongue as $tongue)
                                        <option value="{{ $tongue->id }}" title="{{ $tongue->mother_tongue }}">{{ $tongue->mother_tongue }}</option>
                                    @endforeach
                                </select>
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
            <div class="sub-content">To make this platform safe, truic and Aadhaar number Authentication of the registered members of Siya Ke Ram.</div>
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

@if(!empty($home_users[0]))

  <section class="feature-benefit discover-grid">
      <h2 class="light-pink heading text-center" style="margin-bottom: 40px;">Latest Registered Users</h2>
        <div id="Bride" class="tab-section">
          <div class="row">
            @foreach($home_users as $bride)
              <?php
                $date = date('Y');
                $age = $bride->year;
                $current_age = $date-$age;

                $bride_count = DB::table('user_details')->where(array('gender'=> 2, 'status' => 1))->get();

                $bride_count_result = count($bride_count);

                $user_id = $bride->user_id;

                  $images = DB::table('user_images')->where('user_id', $user_id)->get();

                    if(count($images) > 1)
                      {
                          foreach ($images as $img)
                          {
                              $image = $img->image;
                              if($image != 'user.png')
                              {
                                  $image = $image;
                                  break;
                              }
                          }
                      }
                      else
                      {
                          $image = 'user.png';
                      }

              ?>
              @if(($bride->gender == 2) && ($bride_count_result <= 6)) 
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6 text-center">
                  <div class="matches-holder">
                    <span class="profile_viewed"></span>
                    <span class="notification-number">60</span>
                      
                        <img class="pinkprofileimage" src="storage/app/uploads/profile_images/{{ $image }}"> 
                     
                      <div class="profile-name">{{$bride->unique_id}} </div>
                      <div class="info-holder"> <span>{{$current_age}}</span> <span>{{$bride->user_height}}</span> <span>{{$bride->employed_with}}</span> <span>{{$bride->user_country}}</span></div>
                      <div class="gallery">
                      <?php
                        if($user = Auth::user())
                          {
                      ?>
                          <a href="#showmodel" data-toggle="modal">
                            <button class="btn yellow-hollow"><span class="shortlist active"></span><span class="text">Contact Us</span></button>
                          </a>                    
                      <?php
                        }
                        else
                        {
                      ?>
                          <a href="{{ route('login') }}">
                            <button class="btn yellow-hollow"><span class="shortlist active"></span><span class="text">Contact Us</span></button>
                          </a>
                      <?php
                        }
                      ?>
                      <a href="{{ route('user_profile', ['id' => $user_id]) }}">  
                        <button class="btn yellow-hollow position-relative" id="showview-614980">
                          <span class="view-full-profile"></span>
                          <span class="text">VIEW</span>
                        </button>
                      </a>
                      </div>
                  </div>  
                </div> 
              @endif            
            @endforeach
        </div>
      </div>        

      <div id="Groom" class="tab-section">
          <div class="row">

            @foreach($home_users as $groom)
              <?php
                $date = date('Y');
                $age = $groom->year;
                $current_age = $date-$age;

                $groom_count = DB::table('user_details')->where(array('gender'=> 1, 'status' => 1))->get();

                $groom_count_result = count($groom_count);

                  $user_id = $groom->user_id;

                    $images = DB::table('user_images')->where('user_id', $user_id)->get();

                        if(count($images) > 1)
                          {
                              foreach ($images as $img)
                              {
                                  $image = $img->image;
                                  if($image != 'user.png')
                                  {
                                      $image = $image;
                                      break;
                                  }
                              }
                          }
                          else
                          {
                              $image = 'user.png';
                          }

              ?>
                @if(($groom->gender == 1) && ($groom_count_result <= 6))

                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 text-center">
                  <div class="matches-holder">
                    <span class="profile_viewed"></span>
                    <span class="notification-number">60</span>
                      
                        <img class="pinkprofileimage" src="storage/app/uploads/profile_images/{{ $image }}"> 
                      
                      <div class="profile-name">{{$groom->unique_id}}</div>
                      <div class="info-holder"> <span>{{$current_age}}</span> <span>{{$groom->user_height}}</span> <span>{{$groom->employed_with}}</span> <span>{{$groom->user_country}}</span></div>
                      <div class="gallery">
                      <?php
                        if($user = Auth::user())
                          {
                      ?>
                          <a href="#showmodel" data-toggle="modal">
                            <button class="btn yellow-hollow"><span class="shortlist active"></span><span class="text">Contact Us</span></button>
                          </a>                    
                      <?php
                        }
                        else
                        {
                      ?>
                          <a href="{{ route('login') }}">
                            <button class="btn yellow-hollow"><span class="shortlist active"></span><span class="text">Contact Us</span></button>
                          </a>
                      <?php
                        }
                      ?>
                      <a href="{{ route('user_profile', ['id' => $user_id]) }}">  
                      <button class="btn yellow-hollow position-relative" id="showview-614980"><span class="view-full-profile"></span><span class="text">VIEW</span></button></a>
                      </div>
                  </div>  
                </div>   

                @endif  

            @endforeach
        </div>
      </div>
  </section>

  @endif

</div>
    <div class="modal animated fade in" id="showmodel" tabindex="-1" role="dialog">
        <div class="modal-dialog lvmodal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body LVmodal">
                    <h3>Contact Details</h3>
                    <a href="#" class="close-LVmodal" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></a>
                    <div class="LVModal-content">
                        <p><i class="fa fa-refresh"></i><br></p>
                        <div style="line-height:15px;padding-left:10px;">
                            You are on a Free Membership Plan. Please upgrade your membership by availing our paid services to contact selected profiles.
                        </div>
                        <a href="{{route('membership')}}">
                            <button class="btn btn-theme ripplelink btn-shadow padd-10 mt-15">Upgrade Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection