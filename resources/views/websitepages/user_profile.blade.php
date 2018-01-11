@extends('layouts.public_app')

@section('content')

<style type="text/css">
  .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    border-top: 1px solid #ffffff;
}
</style>

<div class="prf-header-bg">
    <div class="prf-cover1" style="height:300px; background-image: url(https://www.lovevivah.com/images/defaultViewProfileCover.jpg)"></div>
</div>

<section class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 prf-topminus100">
  	<div class="col-md-12">
        <div class="prf-section" style="visibility: visible; animation-name: fadeIn;">
          	<div class="row">
				      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 padlr0 prf-pic-landscape">
	                <div class="prf-user-img" id="showimageee">
	                	<a class="group2 cboxElement" id="showimagepop" href="javascript:;">

                    <?php
                    if(!empty($images[1]))
                    {
                      if(count($images) > 1)
                      {
                        ?>
                        <img src="../storage/app/uploads/profile_images/<?= $images[0]->image; ?>" class="img-responsive" alt="Profilepic">
                        <?php
                      }
                      else
                      {
                        ?>
                        <img src="../storage/app/uploads/profile_images/user.png" class="img-responsive" alt="Profilepic">
                        <?php
                      }
                    }
                    else
                    {
                      ?>
                        <img src="../storage/app/uploads/profile_images/user.png" class="img-responsive" alt="Profilepic">
                      <?php
                    }
                    ?>


	                	<span class="pics-count">1</span> <i class="fa fa-camera"></i></a>
	                </div>
           		</div>

	 		 	      <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 padlr0 prf-detail-landscape">

                <?php
                  // Age
                  $date = date('Y-m-d');
                  $y = date('Y', strtotime($date));
                  $year = $userInfo->year;
                  $age = $y - $year;

                  // Gender
                  if($userInfo->gender == 1)
                  {
                    $gender = 'Male';
                  }
                  else
                  {
                    $gender = 'Female';
                  }

                  // Diet
                  if($userInfo->diet == 1)
                  {
                    $diet = 'Non-veg';
                  }
                  elseif($userInfo->diet == 2)
                  {
                    $diet = 'Veg';
                  }
                  else
                  {
                    $diet = '';
                  }

                  // Marital Status
                  if($userInfo->marital_status == 1)
                  {
                    $marital_status = 'Never Married';
                  }
                  elseif($userInfo->marital_status == 2)
                  {
                    $marital_status = 'Annulled';
                  }
                  elseif($userInfo->marital_status == 3)
                  {
                    $marital_status = 'Awaiting Divorce';
                  }
                  elseif($userInfo->marital_status == 4)
                  {
                    $marital_status = 'Divorced';
                  }
                  elseif($userInfo->marital_status == 5)
                  {
                    $marital_status = 'Widowed';
                  }
                  else
                  {
                    $marital_status = '';
                  }
                ?>
	              	<div class="prf-user-name">
		                <h3> {{ $userInfo->name }}</h3>
		                <h5>{{ $userInfo->unique_id }}</h5>
			                <ul class="prf-user-info">
				                <li>Age - {{ $age }}</li>
				                <li>Height - {{ $userInfo->height }}</li>
        								<li>Location - {{ $userInfo->state }}</li>
        								<li>Religion - {{ $userInfo->religion }}</li>
								        <li>Caste - {{ $userInfo->caste }}</li>
								        <li>Mother Tongue - {{ $userInfo->mother_tongue }}</li>
								        <li>Education - {{ $userInfo->education }}</li>
			                </ul>
    			       </div>

            </div>

          </div>

          <div class="row prf-verified-row">
            <div class="col-md-12 prf-theme-bg">

            </div>
          </div>

        </div>
      </div>
  	</div>
  </div>
</section>

<section class="container">
  <div class="row">
    <div class="col-md-12">
     <div class="col-md-12">
        <div class="prf-detail-tabs">
          <div class="card">

            <ul class="nav nav-tabs" role="tablist">
              	<li role="presentation" class="active">
              		<a href="#Personal" aria-controls="Personal" role="tab" data-toggle="tab">Personal Details</a>
              	</li>
              	<li role="presentation">
                  <a href="#Family" aria-controls="Family" role="tab" data-toggle="tab">Family Details</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              	<div role="tabpanel" class="tab-pane active" id="Personal">
                <p class="prf-fulldetail-color"> {{ $userInfo->bio }} </p>
                <hr>
                <div class="prfbr3" id="section-basic">
                	<div class="clearfix"> <i class="sprite2 prf-basic-icon prf-sprit-float"></i>
                  	<div class="prf-fulldetail-heading">Basic Information </div>
                	</div>
                	<div class="pl27 prflist1 lv-basicView">

                    <table class="table">
                      <tr><td style="width: 25%;">Name</td><td>{{ $userInfo->name }}</td></tr>
                      <tr><td>Date of Birth</td><td>{{ $userInfo->date }}-{{ $userInfo->month }}-{{ $userInfo->year }}</td></tr>
                      <tr><td>Age</td><td>{{ $age }}</td></tr>
                      <tr><td>Gender</td><td>{{ $gender }}</td></tr>
                      <tr><td>Height</td><td>{{ $userInfo->height }}</td></tr>
                      <tr><td>Location</td><td>{{ $userInfo->state }}</td></tr>
                      <tr><td>Complexion</td><td>{{ $userInfo->complexion }}</td></tr>
                      <tr><td>Marital Status</td><td>{{ $marital_status }}</td></tr>
                      <tr><td>Mother Tongue</td><td>{{ $userInfo->mother_tongue }}</td></tr>
                    </table>

                	</div>
                </div>

                <hr>

                <div class="prfbr3" id="section-basic">
                  <div class="clearfix"> <i class="sprite2 prf-education-icon prf-sprit-float"></i>
                    <div class="prf-fulldetail-heading">Qualification &amp; Career </div>
                  </div>
                  <div class="pl27 prflist1 lv-basicView">

                    <table class="table">
                      <tr><td style="width: 25%;">Educational Qualification</td><td>{{ $userInfo->education }}</td></tr>
                      <tr><td>Employed As</td><td>{{ $userInfo->employed_as }}</td></tr>
                      <tr><td>Area/Field</td><td>{{ $userInfo->area_field }}</td></tr>
                      <tr><td>Annual Income</td><td>{{ $userInfo->annual_income }}</td></tr>
                    </table>

                  </div>
                </div>
                <hr>
                <div class="prfbr3" id="section-basic">
                  <div class="clearfix"> <i class="sprite2 prf-location-icon prf-sprit-float"></i>
                    <div class="prf-fulldetail-heading">Current Location </div>
                  </div>
                  <div class="pl27 prflist1 lv-basicView">
                    <table class="table">
                      <tr><td style="width: 25%;">Country of Residence</td><td>{{ $userInfo->country }}</td></tr>
                      <tr><td>State of Residency</td><td>{{ $userInfo->state }}</td></tr>
                      <tr><td>City of Residence</td><td>{{ $userInfo->city }}</td></tr>
                      <tr><td>Zip/Pin Code</td><td>{{ $userInfo->zipcode }}</td></tr>
                    </table>
                  </div>
                </div>

                <hr>

                <hr>
                <div class="prfbr3" id="section-basic">
                  <div class="clearfix"> <i class="sprite2 prf-lifestyle-icon prf-sprit-float"></i>
                    <div class="prf-fulldetail-heading">Lifestyle </div>
                  </div>
                  <div class="pl27 prflist1 lv-basicView">
                    <table class="table">
                      <tr><td style="width: 25%;">Diet</td><td>{{ $diet }}</td></tr>
                    </table>
                  </div>
                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="Family">
                <p class="prf-fulldetail-color"></p>
                <hr>
                <div class="prfbr3" id="section-basic">
                  <div class="clearfix"> <i class="sprite2 prf-familyinfo-icon prf-sprit-float"></i>
                    <div class="prf-fulldetail-heading">Family Information  </div>
                  </div>
                  <div class="pl27 prflist1 lv-basicView">
                    <table class="table">
                      <tr><td style="width: 25%;">Father's Occupation</td><td>{{ $familyInfo->father_occupation }}</td></tr>
                      <tr><td>Mother's Occupation</td><td>{{ $familyInfo->mother_occupation }}</td></tr>
                      <tr><td>Married Sisters</td><td>{{ $familyInfo->married_sisters }}</td></tr>
                      <tr><td>Unmarried Sisters</td><td>{{ $familyInfo->unmarried_sisters }}</td></tr>
                      <tr><td>Married Brothers</td><td>{{ $familyInfo->married_brothers }}</td></tr>
                      <tr><td>Unmarried Brothers</td><td>{{ $familyInfo->unmarried_brothers }}</td></tr>
                    </table>
                  </div>
                </div>
                <hr>
                <div class="prfbr3" id="section-basic">
                  <div class="clearfix"> <i class="sprite2 prf-familyvalue-icon prf-sprit-float"></i>
                    <div class="prf-fulldetail-heading">Family Values and Native Information </div>
                  </div>
                  <div class="pl27 prflist1 lv-basicView">
                    <table class="table">
                      <tr><td style="width: 25%;">Native Country</td><td>{{ $familyInfo->family_country }}</td></tr>
                      <tr><td>Native State</td><td>{{ $familyInfo->family_state }}</td></tr>
                      <tr><td>Family Value</td><td>{{ $familyInfo->family_value }}</td></tr>
                      <tr><td>Affluence Level</td><td>{{ $familyInfo->affluence_level }}</td></tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
