@extends('layouts.public_app')

@section('content')
<div class="container" style="padding-top: 170px;">
	<div class="row light searchpage mt-10">
   
  	<div class="col-md-12 col-sm-12 col-xs-12 mt-10 no-padding-sm"> 
  	<form method="POST" action="javascript:;" class="ng-pristine ng-valid">	 
        <div class="search-panel" style="padding-bottom:30px;">  
        
        <div class="row looking-section">
	        <div class="col-md-12 col-sm-12 no-padding">
	        <div class="col-md-3 col-sm-4"><label class="looking-label">I'm looking for a</label></div>     
		        <div class="col-md-9 col-sm-8 center-small"> 
		            <span class="segmented">
						<label>
						 	<input type="radio" name="looking_for" value="f" checked="">
						 	<span class="label">Bride</span>
						</label>
						<label>
							<input type="radio" name="looking_for" value="m">
						  	<span class="label">Groom</span>
						</label> 
					</span>
		         </div>
	        </div>
        </div>
        <div class="controller">
			<div class="row">
	         	<div class="col-md-7 no-padding person-age"> 
		          	<div class="row mb-10">
			          	<div class="col-md-6 control-group">
			          	<label class="control-label">Age </label>

			         	</div> 
			          	<div class="col-md-6 control-group">
				           <label class="control-label">&nbsp;</label>

			         	</div> 
			         	<span class="showerror11"></span>		 
		          	</div>
		          	<div class="row mb-10">
			          <div class="col-md-6 control-group">
			          	<label class="control-label">Height </label>

			         	</div> 
			          	<div class="col-md-6 control-group">
			           	<label class="control-label">&nbsp;</label>

			         	</div>      
			          	<span class="showerror2" style="color:red;"></span>	
		         	</div>
         		</div>
        	</div>

            <div class="row mb-10">
	         	<div class="col-md-12">
	         		<label class="control-label">Religion </label>
				</div>
        	</div>

	        <div class="row mb-10">
	         	<div class="col-md-12">
	         		<label class="control-label">Caste </label>
				</div>     
   		 	</div>     
        
        	<div class="row mb-10">
         		<div class="col-md-12">
         			<label class="control-label">Mother Tongue </label>
				</div>
       		 </div>
             
        	<div class="row mb-10">
         		<div class="col-md-12">
         			<label class="control-label">Marital Status </label>
				</div>
   		 	</div>
             
        	<div class="row mb-10">
         		<div class="col-md-12">
         			<label class="control-label">Country </label>
				</div>
   		 	</div>
        
	        <div class="row mb-10">
	         	<div class="col-md-12">
	         		<label class="control-label">State </label>
				</div>
	       	</div>
	
			<div class="row mb-10" id="showhidecity">
	         	<div class="col-md-12">
	         		<label class="control-label">City </label>
				</div>
	       	</div>
		
			<div class="row mb-10">
	         	<div class="col-md-12">
		         	<label class="control-label">Search By Keyword </label>
		          	<div class="src_field_box">
						<input type="text" name="search_key" id="search_key" class="common-input ui-autocomplete-input" value="" placeholder="eg. Doctor, IIT, IIM" autocomplete="off">
		           	</div>
	           </div>
	       	</div>
            <div class="row mb-10">
	         	<div class="col-md-12">
		         	<div class="profile-with-photo display-inline">
			            <input type="radio" name="photo_visible" id="radio1" checked="" value="">        
				        <label for="radio1">
				            <span class="fa-stack">
				                <i class="fa fa-circle-o fa-stack-2x"></i>
				                <i class="fa fa-dot-circle-o fa-stack-2x"></i>
				            </span>
				            All Profiles
				        </label>
				        <input type="radio" name="photo_visible" id="radio2" value="1">     
				        <label for="radio2">
				            <span class="fa-stack">
				                <i class="fa fa-circle-o fa-stack-2x"></i>
				                <i class="fa fa-dot-circle-o fa-stack-2x"></i>
				            </span>
				            Profile with Photo Only
				        </label>
			        </div>
	           	</div>
	       	</div>
           	
         </div>
         
         
     	<div class="moreoptions" id="moreoptions" style="display:none;">
         
          	<div class="row mb-10"> 
	          	<div class="col-md-12 no-padding person-age">
	        
		           <div class="row mb-10">
			         <div class="col-md-12">
			         <label class="control-label">Income </label>

			           </div>
			       	</div>
					
	     		</div>
         	</div>
         
           	<div class="row mb-10">
         		<div class="col-md-12">
         			<label class="control-label">Working As </label>
				</div>
   		 	</div>   
                    
            <div class="row mb-10">
           		<div class="col-md-12">
     				<label class="control-label">Education </label>
				</div>
       	  	</div> 
                      
          	<div class="row mb-10">
	           <div class="col-md-12">
	            	<label class="control-label">Diet </label>
			
		         	<div class="search-checkbox display-inline">
					 			
				  		<input type="checkbox" class="radInput" name="diet[]" id="Veg150" value="150">
        	        		<label for="Veg150">Eggetarian </label>
						<input type="checkbox" class="radInput" name="diet[]" id="Veg1089" value="1089">
		            	    <label for="Veg1089">Jain </label>
						<input type="checkbox" class="radInput" name="diet[]" id="Veg148" value="148">
	            	        <label for="Veg148">Non-Veg </label>
						<input type="checkbox" class="radInput" name="diet[]" id="Veg147" value="147">
	            	        <label for="Veg147">Veg </label>
						<input type="checkbox" class="radInput" name="diet[]" id="Veg152" value="152">
	            	        <label for="Veg152">Vegan </label>
				
		          	</div>
	          	</div>
       	 	</div>  
                      
            <div class="row mb-10">
	           <div class="col-md-12">
	            	<label class="control-label">Drink </label>
		         	<div class="search-checkbox display-inline">
		              	<input id="DrinkYes" name="drink[]" value="1" type="checkbox">
		              	<label for="DrinkYes">Yes</label>
		              	<input id="DrinkNo" name="drink[]" value="2" type="checkbox">
		              	<label for="DrinkNo">No</label>
		              	<input id="DrinkOccasionally" name="drink[]" value="3" type="checkbox">
		              	<label for="DrinkOccasionally">Occasionally</label>
		            </div>
	          	</div>
       	  	</div> 
             
            <div class="row mb-10">
	           <div class="col-md-12">
		            <label class="control-label">Smoke </label>
		         	<div class="search-checkbox display-inline">
		              	<input id="SmokeYes" name="smoke[]" value="3" type="checkbox">
		              	<label for="SmokeYes">Yes</label>
		              	<input id="SmokeNo" name="smoke[]" value="1" type="checkbox">
		              	<label for="SmokeNo">No</label>
		              	<input id="SmokeOccasionally" name="smoke[]" type="checkbox" value="2">
		              	<label for="SmokeOccasionally">Occasionally</label>
		            </div>
	          	</div>
       	 	</div>  
               
					 
          	<div class="row mb-10">
	           	<div class="col-md-12">
		            <label class="control-label">Manglik/Kuja Dosham </label>
		         	<div class="search-checkbox display-inline">
		              	<input id="OnlyMangliks" name="manglik[]" type="checkbox" value="1">
		              	<label for="OnlyMangliks">Only Mangliks</label>
		              	<input id="NoMangliks" name="manglik[]" value="2" type="checkbox">
		              	<label for="NoMangliks">No Mangliks</label>
		            </div>
	          	</div>
       	  	</div>  

       	</div>
             
		<div class="search-checkbox display-inline"></div>
			<div class="controller">
	        
	         	<div class="row mb-10">
		         	<div class="col-md-12 mt-15">
			         	<div class="col-md-6 no-padding morelink">
				         	<a id="advanced" href="javascript:void(0);" onclick="$('#moreoptions').slideToggle('slow');" class="showmore chagetext">
				         	<span class="fa fa-angle-down"></span> 
				         	<span>Show Advance Options</span>
				         	</a>
			         	</div>
			         	<div class="col-md-6 no-padding searchlink">
				         	<button type="submit" id="submit1" class="btn btn-lg btn-theme search-btn ripplelink"> 
				         		<i class="fa fa-search"></i> SEARCH
				         	</button>
			         	</div>
		         	</div>
		       	</div>
	        
	        	</div>
	       
			</div>
		</form>
     </div> 
     
 	</div>
</div>
@endsection
