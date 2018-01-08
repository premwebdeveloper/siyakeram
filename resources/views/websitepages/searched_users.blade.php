@extends('layouts.public_app')

@section('content')
<div class="container container-full" style="padding-top: 40px;">
   <div class="row light searchpage mt-95">
   
     <div class="col-md-3 col-sm-12 col-xs-12 mt-20 no-padding-sm"> 
     <script type="text/javascript">
function submit_refine_panel(d){
    
 
    $(".overlay-load").show();
    var b=$(d).val();
    
    var a=$(d).attr("id");
    
    var res = a.split("."); 
    
    
    var selected_value = []; 
    
    var classval=$(d).attr("class");
    
    
    if(b=='0'){
    selected_value="0"; 
        
    }else{  
    $("."+classval+":checked").each(function(){
        selected_value.push($(this).val());
    });
    
    //alert(selected_value.length); 
    if(selected_value.length>1){
    for(var i=0; i<selected_value.length;i++ )
    { 
         if(selected_value[i] == 0)
         {
             selected_value.splice(i,1);  //data[i] is replaced with data
             i--; //reduce the i counter;
         }
    }  
    } 
   if($(d).is(':checked')){
    $(d).attr("checked");
    //alert($(d).val());
    }else{
      // alert(selected_value.length );
      if(selected_value.length > 0){   
      // alert(selected_value);
       // selected_value.pop($(this).val());
       selected_value=selected_value;
        }else{
          selected_value="0";
        }
       
    }   
    }
    //alert(selected_value);
    

$.ajax({
        type: 'POST',
        url: 'https://www.lovevivah.com/search_controller/search_result/',
        data: "field1=" + res['0'] + "&field2=" + selected_value + "&ofield1=" + $("#oldfield1").val() + "&ofield2=" + $("#oldfield2").val(),  
        success: function (response) {
        
       
            
        window.location.href="https://www.lovevivah.com/search_controller/search_result/";
         $(".overlay-load").hide(); 
        
        },
        error: function () {
        window.location.href="https://www.lovevivah.com/search_controller/search_result/";
        //alert("hello");
            //your error code
        }
    }); 

}


</script>

<script>
$("#filter-icon").click(function(){
 
 if(!($("#refine_criteria").is(':visible'))){
  
  $("#refine_criteria").slideDown("slow");
 }else{
  
  $("#refine_criteria").slideUp("slow");
 }
});

$(document).ready(function(){
     
        // scroll body to 0px on click
        $('#listingHideShow1').click(function () {
            $('#listingHideShow1').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#listingHideShow1').tooltip('show');
        
         var getclass= $("#oldfield1").val();
         //alert(getclass);
         $("."+getclass).attr('tabindex', -1).focus();
         
        
        

});
</script>

  
 <div class="Refine-Search">      
<input type="hidden" id="oldfield1" value="">
<input type="hidden" id="oldfield2" value="">
       <h2>Refine Your Search <a class="filter-mobile-toggle pull-right" href="javascript:void(0);" id="listingHideShow"><i class="fa fa-plus-circle"></i></a></h2>
       
       <div class="row" id="filter-collapse">
        <ul class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">   
                        
            <li class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                     <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" href="#FilterMatrialStatus">
                  Marital Status
                </a>
              </h4>
        
                </div>
                <div id="FilterMatrialStatus" class="panel-collapse collapse in">
                    <div class="panel-body">
                     <ul>
                       <li class="lvcheckbox">
                  <input type="checkbox" class="marital_status" name="marital_status[]" onclick="submit_refine_panel(this);" id="marital_status.0" value="0">
                  <label for="marital_status.0" title="all"><span class="lvwordellips">All</span><span class="numberresult"></span></label>
                    
                    
                    </li>
                                          <li class="lvcheckbox">
                  <input type="checkbox" class="marital_status" name="marital_status[]" onclick="submit_refine_panel(this);" id="marital_status.153" value="153">
                  <label for="marital_status.153" title="Never Married"><span class="lvwordellips">Never Married</span><span class="numberresult">(19358)</span></label>
                    
                    
                    </li>
                                          <li class="lvcheckbox">
                  <input type="checkbox" class="marital_status" name="marital_status[]" onclick="submit_refine_panel(this);" id="marital_status.154" value="154">
                  <label for="marital_status.154" title="Divorced"><span class="lvwordellips">Divorced</span><span class="numberresult">(450)</span></label>
                    
                    
                    </li>
                                          <li class="lvcheckbox">
                  <input type="checkbox" class="marital_status" name="marital_status[]" onclick="submit_refine_panel(this);" id="marital_status.156" value="156">
                  <label for="marital_status.156" title="Awaiting Divorce"><span class="lvwordellips">Awaiting Divorce</span><span class="numberresult">(92)</span></label>
                    
                    
                    </li>
                                          <li class="lvcheckbox">
                  <input type="checkbox" class="marital_status" name="marital_status[]" onclick="submit_refine_panel(this);" id="marital_status.155" value="155">
                  <label for="marital_status.155" title="Widowed"><span class="lvwordellips">Widowed</span><span class="numberresult">(60)</span></label>
                    
                    
                    </li>
                                          <li class="lvcheckbox">
                  <input type="checkbox" class="marital_status" name="marital_status[]" onclick="submit_refine_panel(this);" id="marital_status.157" value="157">
                  <label for="marital_status.157" title="Annulled"><span class="lvwordellips">Annulled</span><span class="numberresult">(34)</span></label>
                    
                    
                    </li>
                                                          
                    </ul>
                    </div>
                </div>
            </li>
            
            <li class="panel panel-default">
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" href="#FilterIncome" aria-expanded="false">Income</a>
                  </h4>
                 </div>
                 <div id="FilterIncome" class="panel-collapse collapse in">
                    <div class="panel-body Max-height-filter">
                     <ul>
                      <li class="lvcheckbox">
                  <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.0" value="0">
                  <label for="annual_income.0" title="all"><span class="lvwordellips">All</span><span class="numberresult"></span></label>
                    
                    
                    </li>
                       
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.233" value="233">
                      <label for="annual_income.233" title="Dont Want to Specify"><span class="lvwordellips">Dont Want to Specify</span><span class="numberresult">(8912)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.227" value="227">
                      <label for="annual_income.227" title="INR 5 Lakhs to 7 Lakhs"><span class="lvwordellips">INR 5 Lakhs to 7 Lakhs</span><span class="numberresult">(1601)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.225" value="225">
                      <label for="annual_income.225" title="INR 3 Lakhs to 4 Lakhs"><span class="lvwordellips">INR 3 Lakhs to 4 Lakhs</span><span class="numberresult">(1597)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.226" value="226">
                      <label for="annual_income.226" title="INR 4 Lakhs to 5 Lakhs"><span class="lvwordellips">INR 4 Lakhs to 5 Lakhs</span><span class="numberresult">(1523)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.224" value="224">
                      <label for="annual_income.224" title="INR 2 Lakhs to 3 Lakhs"><span class="lvwordellips">INR 2 Lakhs to 3 Lakhs</span><span class="numberresult">(1370)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.228" value="228">
                      <label for="annual_income.228" title="INR 7 Lakhs to 10 Lakhs"><span class="lvwordellips">INR 7 Lakhs to 10 Lakhs</span><span class="numberresult">(1060)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.223" value="223">
                      <label for="annual_income.223" title="INR 1 Lakh to 2 Lakhs"><span class="lvwordellips">INR 1 Lakh to 2 Lakhs</span><span class="numberresult">(1035)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.229" value="229">
                      <label for="annual_income.229" title="INR 10 Lakhs to 15 Lakhs"><span class="lvwordellips">INR 10 Lakhs to 15 Lakhs</span><span class="numberresult">(584)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.222" value="222">
                      <label for="annual_income.222" title="INR 50 Thousand to 1 Lakh"><span class="lvwordellips">INR 50 Thousand to 1 Lakh</span><span class="numberresult">(242)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.230" value="230">
                      <label for="annual_income.230" title="INR 15 Lakhs to 20 Lakhs"><span class="lvwordellips">INR 15 Lakhs to 20 Lakhs</span><span class="numberresult">(195)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.231" value="231">
                      <label for="annual_income.231" title="INR 20 Lakhs to 30 Lakhs"><span class="lvwordellips">INR 20 Lakhs to 30 Lakhs</span><span class="numberresult">(112)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.221" value="221">
                      <label for="annual_income.221" title="INR Up to 50 Thousand"><span class="lvwordellips">INR Up to 50 Thousand</span><span class="numberresult">(110)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1246" value="1246">
                      <label for="annual_income.1246" title="USD 75K to 100K"><span class="lvwordellips">USD 75K to 100K</span><span class="numberresult">(26)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.232" value="232">
                      <label for="annual_income.232" title="INR 30 Lakhs to 50 Lakhs"><span class="lvwordellips">INR 30 Lakhs to 50 Lakhs</span><span class="numberresult">(24)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1281" value="1281">
                      <label for="annual_income.1281" title="INR Up to 1 Crore and above"><span class="lvwordellips">INR Up to 1 Crore and above</span><span class="numberresult">(16)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1245" value="1245">
                      <label for="annual_income.1245" title="USD 50K to 75K"><span class="lvwordellips">USD 50K to 75K</span><span class="numberresult">(11)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1241" value="1241">
                      <label for="annual_income.1241" title="INR 50 Lakhs to 80 Lakhs"><span class="lvwordellips">INR 50 Lakhs to 80 Lakhs</span><span class="numberresult">(9)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1243" value="1243">
                      <label for="annual_income.1243" title="USD Up to 40K"><span class="lvwordellips">USD Up to 40K</span><span class="numberresult">(9)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1242" value="1242">
                      <label for="annual_income.1242" title="INR 80 Lakhs to 1 Crore"><span class="lvwordellips">INR 80 Lakhs to 1 Crore</span><span class="numberresult">(8)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1244" value="1244">
                      <label for="annual_income.1244" title="USD 40K to 50K"><span class="lvwordellips">USD 40K to 50K</span><span class="numberresult">(8)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1247" value="1247">
                      <label for="annual_income.1247" title="USD 100K to 125K"><span class="lvwordellips">USD 100K to 125K</span><span class="numberresult">(6)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1248" value="1248">
                      <label for="annual_income.1248" title="USD 125K to 150K"><span class="lvwordellips">USD 125K to 150K</span><span class="numberresult">(3)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1250" value="1250">
                      <label for="annual_income.1250" title="USD 200K to 250K"><span class="lvwordellips">USD 200K to 250K</span><span class="numberresult">(2)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1270" value="1270">
                      <label for="annual_income.1270" title="AUD 250K or Higher"><span class="lvwordellips">AUD 250K or Higher</span><span class="numberresult">(2)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1249" value="1249">
                      <label for="annual_income.1249" title="USD 150K to 200K"><span class="lvwordellips">USD 150K to 200K</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1251" value="1251">
                      <label for="annual_income.1251" title="USD 250K or Higher"><span class="lvwordellips">USD 250K or Higher</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1253" value="1253">
                      <label for="annual_income.1253" title="GBP 20K to 30K"><span class="lvwordellips">GBP 20K to 30K</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1257" value="1257">
                      <label for="annual_income.1257" title="GBP 100K to 125K"><span class="lvwordellips">GBP 100K to 125K</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1260" value="1260">
                      <label for="annual_income.1260" title="GBP 200K to 250K"><span class="lvwordellips">GBP 200K to 250K</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1263" value="1263">
                      <label for="annual_income.1263" title="AUD 40K to 50K"><span class="lvwordellips">AUD 40K to 50K</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1264" value="1264">
                      <label for="annual_income.1264" title="AUD 50K to 75K"><span class="lvwordellips">AUD 50K to 75K</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1269" value="1269">
                      <label for="annual_income.1269" title="AUD 200K to 250K"><span class="lvwordellips">AUD 200K to 250K</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="annual_income" name="annual_income[]" onclick="submit_refine_panel(this);" id="annual_income.1280" value="1280">
                      <label for="annual_income.1280" title="EURO 250K or Higher"><span class="lvwordellips">EURO 250K or Higher</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                          
                    </ul>
                    
                    </div>
                 </div>
            </li>
            
            <li class="panel panel-default">
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" href="#FilterWorking" aria-expanded="false">Working As</a>
                  </h4>
                 </div>
                 <div id="FilterWorking" class="panel-collapse collapse in">
                    <div class="panel-body  Max-height-filter">
                     <ul>
                      <li class="lvcheckbox">
                  <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.0" value="0">
                  <label for="work_as.0" title="all"><span class="lvwordellips">All</span><span class="numberresult"></span></label>
                    
                    
                    </li>
                       
                    
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1074" value="1074">
                      <label for="work_as.1074" title="Others"><span class="lvwordellips">Others</span><span class="numberresult">(4758)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1161" value="1161">
                      <label for="work_as.1161" title="Not Working"><span class="lvwordellips">Not Working</span><span class="numberresult">(2831)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.182" value="182">
                      <label for="work_as.182" title="IT Computer Engineer"><span class="lvwordellips">IT Computer Engineer</span><span class="numberresult">(1234)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1155" value="1155">
                      <label for="work_as.1155" title="Teaching"><span class="lvwordellips">Teaching</span><span class="numberresult">(1168)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1173" value="1173">
                      <label for="work_as.1173" title="Engineer (Non IT)"><span class="lvwordellips">Engineer (Non IT)</span><span class="numberresult">(898)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1191" value="1191">
                      <label for="work_as.1191" title="Student"><span class="lvwordellips">Student</span><span class="numberresult">(789)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.163" value="163">
                      <label for="work_as.163" title="Banking Professional"><span class="lvwordellips">Banking Professional</span><span class="numberresult">(754)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1158" value="1158">
                      <label for="work_as.1158" title="Doctor"><span class="lvwordellips">Doctor</span><span class="numberresult">(649)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.168" value="168">
                      <label for="work_as.168" title="Accounting Professional"><span class="lvwordellips">Accounting Professional</span><span class="numberresult">(595)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.170" value="170">
                      <label for="work_as.170" title="Human Resources Professional"><span class="lvwordellips">Human Resources Professional</span><span class="numberresult">(553)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.166" value="166">
                      <label for="work_as.166" title="Finance Professional"><span class="lvwordellips">Finance Professional</span><span class="numberresult">(473)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.169" value="169">
                      <label for="work_as.169" title="Admin Professional"><span class="lvwordellips">Admin Professional</span><span class="numberresult">(473)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1153" value="1153">
                      <label for="work_as.1153" title="Manager"><span class="lvwordellips">Manager</span><span class="numberresult">(379)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1150" value="1150">
                      <label for="work_as.1150" title="Marketing"><span class="lvwordellips">Marketing</span><span class="numberresult">(297)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1185" value="1185">
                      <label for="work_as.1185" title="Medical Profession"><span class="lvwordellips">Medical Profession</span><span class="numberresult">(272)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1172" value="1172">
                      <label for="work_as.1172" title="Professor"><span class="lvwordellips">Professor</span><span class="numberresult">(268)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1154" value="1154">
                      <label for="work_as.1154" title="Consultant"><span class="lvwordellips">Consultant</span><span class="numberresult">(257)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1186" value="1186">
                      <label for="work_as.1186" title="Businessman"><span class="lvwordellips">Businessman</span><span class="numberresult">(248)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.202" value="202">
                      <label for="work_as.202" title="Lecturer"><span class="lvwordellips">Lecturer</span><span class="numberresult">(215)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.195" value="195">
                      <label for="work_as.195" title="BPO/KPO/Support"><span class="lvwordellips">BPO/KPO/Support</span><span class="numberresult">(201)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.164" value="164">
                      <label for="work_as.164" title="Chartered Accountant"><span class="lvwordellips">Chartered Accountant</span><span class="numberresult">(179)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1151" value="1151">
                      <label for="work_as.1151" title="Sales Professional"><span class="lvwordellips">Sales Professional</span><span class="numberresult">(145)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1169" value="1169">
                      <label for="work_as.1169" title="Dentist"><span class="lvwordellips">Dentist</span><span class="numberresult">(145)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1178" value="1178">
                      <label for="work_as.1178" title="Lawyer"><span class="lvwordellips">Lawyer</span><span class="numberresult">(142)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.191" value="191">
                      <label for="work_as.191" title="Fashion Designer"><span class="lvwordellips">Fashion Designer</span><span class="numberresult">(135)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1177" value="1177">
                      <label for="work_as.1177" title="IT Networking Eng"><span class="lvwordellips">IT Networking Eng</span><span class="numberresult">(108)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1156" value="1156">
                      <label for="work_as.1156" title="Scientist /Research"><span class="lvwordellips">Scientist /Research</span><span class="numberresult">(102)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1180" value="1180">
                      <label for="work_as.1180" title="Nurse"><span class="lvwordellips">Nurse</span><span class="numberresult">(100)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.183" value="183">
                      <label for="work_as.183" title="Architect"><span class="lvwordellips">Architect</span><span class="numberresult">(90)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.175" value="175">
                      <label for="work_as.175" title="Media Professional"><span class="lvwordellips">Media Professional</span><span class="numberresult">(68)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.194" value="194">
                      <label for="work_as.194" title="Designer (Others)"><span class="lvwordellips">Designer (Others)</span><span class="numberresult">(62)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.171" value="171">
                      <label for="work_as.171" title="Advertising Professional"><span class="lvwordellips">Advertising Professional</span><span class="numberresult">(53)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.165" value="165">
                      <label for="work_as.165" title="Company Secretary"><span class="lvwordellips">Company Secretary</span><span class="numberresult">(47)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1157" value="1157">
                      <label for="work_as.1157" title="Hotel/Hospitality"><span class="lvwordellips">Hotel/Hospitality</span><span class="numberresult">(47)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.189" value="189">
                      <label for="work_as.189" title="Artist (Others)"><span class="lvwordellips">Artist (Others)</span><span class="numberresult">(44)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.190" value="190">
                      <label for="work_as.190" title="Beautician"><span class="lvwordellips">Beautician</span><span class="numberresult">(44)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1179" value="1179">
                      <label for="work_as.1179" title="Legal Profession"><span class="lvwordellips">Legal Profession</span><span class="numberresult">(43)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1181" value="1181">
                      <label for="work_as.1181" title="Pharmacist"><span class="lvwordellips">Pharmacist</span><span class="numberresult">(40)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1182" value="1182">
                      <label for="work_as.1182" title="Doctor- Specialist"><span class="lvwordellips">Doctor- Specialist</span><span class="numberresult">(38)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1193" value="1193">
                      <label for="work_as.1193" title="Homemaker"><span class="lvwordellips">Homemaker</span><span class="numberresult">(38)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.188" value="188">
                      <label for="work_as.188" title="Web/UX Designers"><span class="lvwordellips">Web/UX Designers</span><span class="numberresult">(36)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.184" value="184">
                      <label for="work_as.184" title="Interior Designer"><span class="lvwordellips">Interior Designer</span><span class="numberresult">(33)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1188" value="1188">
                      <label for="work_as.1188" title="Travel Profession"><span class="lvwordellips">Travel Profession</span><span class="numberresult">(33)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.203" value="203">
                      <label for="work_as.203" title="Home Maker"><span class="lvwordellips">Home Maker</span><span class="numberresult">(32)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1167" value="1167">
                      <label for="work_as.1167" title="Social Worker/NGO"><span class="lvwordellips">Social Worker/NGO</span><span class="numberresult">(30)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1170" value="1170">
                      <label for="work_as.1170" title="Civil Engineer"><span class="lvwordellips">Civil Engineer</span><span class="numberresult">(26)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1176" value="1176">
                      <label for="work_as.1176" title="IT Hardware Engineer"><span class="lvwordellips">IT Hardware Engineer</span><span class="numberresult">(26)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.180" value="180">
                      <label for="work_as.180" title="Air Hostess/Flight Attendant"><span class="lvwordellips">Air Hostess/Flight Attendant</span><span class="numberresult">(24)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.174" value="174">
                      <label for="work_as.174" title="Journalist"><span class="lvwordellips">Journalist</span><span class="numberresult">(22)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.176" value="176">
                      <label for="work_as.176" title="Public Relations Professional"><span class="lvwordellips">Public Relations Professional</span><span class="numberresult">(20)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1160" value="1160">
                      <label for="work_as.1160" title="Defense-Others"><span class="lvwordellips">Defense-Others</span><span class="numberresult">(20)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.179" value="179">
                      <label for="work_as.179" title="Agricultural Professional"><span class="lvwordellips">Agricultural Professional</span><span class="numberresult">(19)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1171" value="1171">
                      <label for="work_as.1171" title="Actor"><span class="lvwordellips">Actor</span><span class="numberresult">(18)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1192" value="1192">
                      <label for="work_as.1192" title="Retired"><span class="lvwordellips">Retired</span><span class="numberresult">(18)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.198" value="198">
                      <label for="work_as.198" title="Law Enforcement Employee (Others)"><span class="lvwordellips">Law Enforcement Employee (Others)</span><span class="numberresult">(17)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1152" value="1152">
                      <label for="work_as.1152" title="Manufacturing"><span class="lvwordellips">Manufacturing</span><span class="numberresult">(17)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.186" value="186">
                      <label for="work_as.186" title="Animator"><span class="lvwordellips">Animator</span><span class="numberresult">(16)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.196" value="196">
                      <label for="work_as.196" title="IAS/IRS/IES/IFS"><span class="lvwordellips">IAS/IRS/IES/IFS</span><span class="numberresult">(16)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.200" value="200">
                      <label for="work_as.200" title="Defense-Army"><span class="lvwordellips">Defense-Army</span><span class="numberresult">(15)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.173" value="173">
                      <label for="work_as.173" title="Event Manager"><span class="lvwordellips">Event Manager</span><span class="numberresult">(13)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1164" value="1164">
                      <label for="work_as.1164" title="Agent/Broker"><span class="lvwordellips">Agent/Broker</span><span class="numberresult">(12)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1159" value="1159">
                      <label for="work_as.1159" title="CEO/CFO/GM/DGM"><span class="lvwordellips">CEO/CFO/GM/DGM</span><span class="numberresult">(11)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1183" value="1183">
                      <label for="work_as.1183" title="Doctor- Surgeon"><span class="lvwordellips">Doctor- Surgeon</span><span class="numberresult">(11)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.199" value="199">
                      <label for="work_as.199" title="Defense-Airforce"><span class="lvwordellips">Defense-Airforce</span><span class="numberresult">(10)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1190" value="1190">
                      <label for="work_as.1190" title="Writer"><span class="lvwordellips">Writer</span><span class="numberresult">(10)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1166" value="1166">
                      <label for="work_as.1166" title="Contractor"><span class="lvwordellips">Contractor</span><span class="numberresult">(7)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1175" value="1175">
                      <label for="work_as.1175" title="Catering Profession"><span class="lvwordellips">Catering Profession</span><span class="numberresult">(6)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.172" value="172">
                      <label for="work_as.172" title="Entertainment Professional"><span class="lvwordellips">Entertainment Professional</span><span class="numberresult">(5)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.181" value="181">
                      <label for="work_as.181" title="Pilot/Co-Pilot"><span class="lvwordellips">Pilot/Co-Pilot</span><span class="numberresult">(5)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.187" value="187">
                      <label for="work_as.187" title="Commercial Artist"><span class="lvwordellips">Commercial Artist</span><span class="numberresult">(5)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1189" value="1189">
                      <label for="work_as.1189" title="Transport Profession"><span class="lvwordellips">Transport Profession</span><span class="numberresult">(5)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1162" value="1162">
                      <label for="work_as.1162" title="Director/President/SDO"><span class="lvwordellips">Director/President/SDO</span><span class="numberresult">(4)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1165" value="1165">
                      <label for="work_as.1165" title="Trader"><span class="lvwordellips">Trader</span><span class="numberresult">(4)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1174" value="1174">
                      <label for="work_as.1174" title="Chef/Cook"><span class="lvwordellips">Chef/Cook</span><span class="numberresult">(4)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.167" value="167">
                      <label for="work_as.167" title="Investment Professional"><span class="lvwordellips">Investment Professional</span><span class="numberresult">(3)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.192" value="192">
                      <label for="work_as.192" title="Hairstylist"><span class="lvwordellips">Hairstylist</span><span class="numberresult">(3)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.193" value="193">
                      <label for="work_as.193" title="Jewellery Designer"><span class="lvwordellips">Jewellery Designer</span><span class="numberresult">(3)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.201" value="201">
                      <label for="work_as.201" title="Defense-Navy"><span class="lvwordellips">Defense-Navy</span><span class="numberresult">(3)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1163" value="1163">
                      <label for="work_as.1163" title="VP/AVP"><span class="lvwordellips">VP/AVP</span><span class="numberresult">(3)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1168" value="1168">
                      <label for="work_as.1168" title="Merchant Navy"><span class="lvwordellips">Merchant Navy</span><span class="numberresult">(3)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1184" value="1184">
                      <label for="work_as.1184" title="Doctor -Veterinary"><span class="lvwordellips">Doctor -Veterinary</span><span class="numberresult">(3)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.1187" value="1187">
                      <label for="work_as.1187" title="Sportsman"><span class="lvwordellips">Sportsman</span><span class="numberresult">(3)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.177" value="177">
                      <label for="work_as.177" title="Farming"><span class="lvwordellips">Farming</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.185" value="185">
                      <label for="work_as.185" title="Landscape Architect"><span class="lvwordellips">Landscape Architect</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="work_as" name="work_as[]" onclick="submit_refine_panel(this);" id="work_as.197" value="197">
                      <label for="work_as.197" title="Indian Police Services (IPS)"><span class="lvwordellips">Indian Police Services (IPS)</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                                          
                    </ul>
                    
                    </div>
                 </div>
            </li>
            
            <li class="panel panel-default">
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" href="#FilterEducation" aria-expanded="false">Education</a>
                  </h4>
                 </div>
                 <div id="FilterEducation" class="panel-collapse collapse in">
                    <div class="panel-body Max-height-filter">
                     <ul>
                      <li class="lvcheckbox">
                  <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.0" value="0">
                  <label for="education.0" title="all"><span class="lvwordellips">All</span><span class="numberresult">&nbsp;</span></label>
                    
                    
                    </li>

                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.98" value="98">
                      <label for="education.98" title="MBA/PGDM"><span class="lvwordellips">MBA/PGDM</span><span class="numberresult">(3667)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.79" value="79">
                      <label for="education.79" title="BE/B.Tech"><span class="lvwordellips">BE/B.Tech</span><span class="numberresult">(2952)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.72" value="72">
                      <label for="education.72" title="B.Com"><span class="lvwordellips">B.Com</span><span class="numberresult">(1028)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.70" value="70">
                      <label for="education.70" title="B.A"><span class="lvwordellips">B.A</span><span class="numberresult">(902)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.95" value="95">
                      <label for="education.95" title="M.Sc"><span class="lvwordellips">M.Sc</span><span class="numberresult">(842)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.108" value="108">
                      <label for="education.108" title="Masters"><span class="lvwordellips">Masters</span><span class="numberresult">(759)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.97" value="97">
                      <label for="education.97" title="MA"><span class="lvwordellips">MA</span><span class="numberresult">(757)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.102" value="102">
                      <label for="education.102" title="MCA/PGDCA"><span class="lvwordellips">MCA/PGDCA</span><span class="numberresult">(650)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.73" value="73">
                      <label for="education.73" title="B.Ed"><span class="lvwordellips">B.Ed</span><span class="numberresult">(584)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.75" value="75">
                      <label for="education.75" title="B.Sc"><span class="lvwordellips">B.Sc</span><span class="numberresult">(584)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.91" value="91">
                      <label for="education.91" title="M.Com"><span class="lvwordellips">M.Com</span><span class="numberresult">(561)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.113" value="113">
                      <label for="education.113" title="Others"><span class="lvwordellips">Others</span><span class="numberresult">(513)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.96" value="96">
                      <label for="education.96" title="M.Tech"><span class="lvwordellips">M.Tech</span><span class="numberresult">(475)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1136" value="1136">
                      <label for="education.1136" title="Bachelors"><span class="lvwordellips">Bachelors</span><span class="numberresult">(463)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.82" value="82">
                      <label for="education.82" title="CA"><span class="lvwordellips">CA</span><span class="numberresult">(429)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.78" value="78">
                      <label for="education.78" title="BDS"><span class="lvwordellips">BDS</span><span class="numberresult">(361)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.84" value="84">
                      <label for="education.84" title="Diploma"><span class="lvwordellips">Diploma</span><span class="numberresult">(360)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.104" value="104">
                      <label for="education.104" title="MD/MS"><span class="lvwordellips">MD/MS</span><span class="numberresult">(315)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.105" value="105">
                      <label for="education.105" title="ME/M.Tech"><span class="lvwordellips">ME/M.Tech</span><span class="numberresult">(300)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.100" value="100">
                      <label for="education.100" title="MBBS"><span class="lvwordellips">MBBS</span><span class="numberresult">(262)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.111" value="111">
                      <label for="education.111" title="Post Graduation"><span class="lvwordellips">Post Graduation</span><span class="numberresult">(248)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.110" value="110">
                      <label for="education.110" title="Doctorate-PhD"><span class="lvwordellips">Doctorate-PhD</span><span class="numberresult">(223)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.77" value="77">
                      <label for="education.77" title="BCA"><span class="lvwordellips">BCA</span><span class="numberresult">(186)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.66" value="66">
                      <label for="education.66" title="High School"><span class="lvwordellips">High School</span><span class="numberresult">(179)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.76" value="76">
                      <label for="education.76" title="BBA"><span class="lvwordellips">BBA</span><span class="numberresult">(166)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.89" value="89">
                      <label for="education.89" title="LLB"><span class="lvwordellips">LLB</span><span class="numberresult">(136)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.83" value="83">
                      <label for="education.83" title="CS"><span class="lvwordellips">CS</span><span class="numberresult">(133)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.67" value="67">
                      <label for="education.67" title="Higher Secondary"><span class="lvwordellips">Higher Secondary</span><span class="numberresult">(131)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.101" value="101">
                      <label for="education.101" title="MS-Science"><span class="lvwordellips">MS-Science</span><span class="numberresult">(123)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1141" value="1141">
                      <label for="education.1141" title="MDS"><span class="lvwordellips">MDS</span><span class="numberresult">(123)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.93" value="93">
                      <label for="education.93" title="M.Pharm"><span class="lvwordellips">M.Pharm</span><span class="numberresult">(96)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.81" value="81">
                      <label for="education.81" title="BL/LLB"><span class="lvwordellips">BL/LLB</span><span class="numberresult">(95)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.71" value="71">
                      <label for="education.71" title="B.Arch"><span class="lvwordellips">B.Arch</span><span class="numberresult">(87)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1137" value="1137">
                      <label for="education.1137" title="Undergraduate"><span class="lvwordellips">Undergraduate</span><span class="numberresult">(78)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1142" value="1142">
                      <label for="education.1142" title="BAMS"><span class="lvwordellips">BAMS</span><span class="numberresult">(72)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.92" value="92">
                      <label for="education.92" title="M.Ed"><span class="lvwordellips">M.Ed</span><span class="numberresult">(71)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.94" value="94">
                      <label for="education.94" title="M.Phil"><span class="lvwordellips">M.Phil</span><span class="numberresult">(71)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.106" value="106">
                      <label for="education.106" title="ML/LLM"><span class="lvwordellips">ML/LLM</span><span class="numberresult">(70)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.74" value="74">
                      <label for="education.74" title="B.Pharm"><span class="lvwordellips">B.Pharm</span><span class="numberresult">(53)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.99" value="99">
                      <label for="education.99" title="MBA/PGDM partime"><span class="lvwordellips">MBA/PGDM partime</span><span class="numberresult">(47)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.88" value="88">
                      <label for="education.88" title="Intermediate"><span class="lvwordellips">Intermediate</span><span class="numberresult">(42)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.80" value="80">
                      <label for="education.80" title="BHM"><span class="lvwordellips">BHM</span><span class="numberresult">(38)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1138" value="1138">
                      <label for="education.1138" title="Associates Degree"><span class="lvwordellips">Associates Degree</span><span class="numberresult">(35)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.109" value="109">
                      <label for="education.109" title="PGDBM"><span class="lvwordellips">PGDBM</span><span class="numberresult">(34)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.90" value="90">
                      <label for="education.90" title="M.Arch"><span class="lvwordellips">M.Arch</span><span class="numberresult">(33)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1140" value="1140">
                      <label for="education.1140" title="Trade School"><span class="lvwordellips">Trade School</span><span class="numberresult">(29)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.107" value="107">
                      <label for="education.107" title="MS-Surgery"><span class="lvwordellips">MS-Surgery</span><span class="numberresult">(26)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1143" value="1143">
                      <label for="education.1143" title="GNM"><span class="lvwordellips">GNM</span><span class="numberresult">(22)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.85" value="85">
                      <label for="education.85" title="ICWA"><span class="lvwordellips">ICWA</span><span class="numberresult">(20)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1134" value="1134">
                      <label for="education.1134" title="BPT"><span class="lvwordellips">BPT</span><span class="numberresult">(19)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1135" value="1135">
                      <label for="education.1135" title="MPT"><span class="lvwordellips">MPT</span><span class="numberresult">(18)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1139" value="1139">
                      <label for="education.1139" title="Honours Degree"><span class="lvwordellips">Honours Degree</span><span class="numberresult">(15)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.69" value="69">
                      <label for="education.69" title="ACS"><span class="lvwordellips">ACS</span><span class="numberresult">(12)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.1144" value="1144">
                      <label for="education.1144" title="ANM"><span class="lvwordellips">ANM</span><span class="numberresult">(11)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.65" value="65">
                      <label for="education.65" title="Less than High School"><span class="lvwordellips">Less than High School</span><span class="numberresult">(10)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.86" value="86">
                      <label for="education.86" title="ITI"><span class="lvwordellips">ITI</span><span class="numberresult">(8)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.103" value="103">
                      <label for="education.103" title="MCA/PGDCA partime"><span class="lvwordellips">MCA/PGDCA partime</span><span class="numberresult">(7)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.68" value="68">
                      <label for="education.68" title="A.M.I.E"><span class="lvwordellips">A.M.I.E</span><span class="numberresult">(4)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.87" value="87">
                      <label for="education.87" title="Integrated PG"><span class="lvwordellips">Integrated PG</span><span class="numberresult">(3)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="education" name="education[]" onclick="submit_refine_panel(this);" id="education.112" value="112">
                      <label for="education.112" title="Service-IAS/IPS/IFS/IES"><span class="lvwordellips">Service-IAS/IPS/IFS/IES</span><span class="numberresult">(1)</span></label>
                        
                        
                        </li>
                        
                      
                    </ul>
                    
                    </div>
                 </div>
            </li>
                                <li class="panel panel-default">
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#FilterDiet" aria-expanded="false">Diet</a>
                  </h4>
                 </div>
                 <div id="FilterDiet" class="panel-collapse collapse">
                    <div class="panel-body">
                     <ul>
                       <li class="lvcheckbox">
                  <input type="checkbox" class="diet" name="diet[]" onclick="submit_refine_panel(this);" id="diet.0" value="0">
                  <label for="diet.0" title="all"><span class="lvwordellips">All</span><span class="numberresult"></span></label>
                    
                    
                    </li>
                                               <li class="lvcheckbox">
                      <input type="checkbox" class="diet" name="diet[]" onclick="submit_refine_panel(this);" id="diet.147" value="147">
                      <label for="diet.147" title="Veg"><span class="lvwordellips">Veg</span><span class="numberresult">(3579)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="diet" name="diet[]" onclick="submit_refine_panel(this);" id="diet.148" value="148">
                      <label for="diet.148" title="Non-Veg"><span class="lvwordellips">Non-Veg</span><span class="numberresult">(2631)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="diet" name="diet[]" onclick="submit_refine_panel(this);" id="diet.150" value="150">
                      <label for="diet.150" title="Eggetarian"><span class="lvwordellips">Eggetarian</span><span class="numberresult">(717)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="diet" name="diet[]" onclick="submit_refine_panel(this);" id="diet.152" value="152">
                      <label for="diet.152" title="Vegan"><span class="lvwordellips">Vegan</span><span class="numberresult">(38)</span></label>
                        
                        
                        </li>
                                           <li class="lvcheckbox">
                      <input type="checkbox" class="diet" name="diet[]" onclick="submit_refine_panel(this);" id="diet.1089" value="1089">
                      <label for="diet.1089" title="Jain"><span class="lvwordellips">Jain</span><span class="numberresult">(22)</span></label>
                        
                        
                        </li>
                                          
                    </ul>
                    
                    </div>
                 </div>
            </li>
                         <li class="panel panel-default">
            
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#FilterManglik" aria-expanded="false">Manglik/Kuja Dosham</a>
                  </h4>
                 </div>
                 <div id="FilterManglik" class="panel-collapse collapse">
                    <div class="panel-body">
                     <ul>
                       <li class="lvcheckbox">
                     <input type="checkbox" class="manglik" name="manglik[]" onclick="submit_refine_panel(this);" id="manglik.0" value="0">
                  <label for="manglik.0" title="all"><span class="lvwordellips">All</span><span class="numberresult"></span></label>
                  </li>
                                          <li class="lvcheckbox">
                  <input type="checkbox" class="manglik" name="manglik[]" onclick="submit_refine_panel(this);" id="manglik.3" value="3">
                  <label for="manglik.3" title="Anshik"><span class="lvwordellips">Anshik</span><span class="numberresult">(12716)</span></label>
                    
                    
                    </li>
                                          <li class="lvcheckbox">
                  <input type="checkbox" class="manglik" name="manglik[]" onclick="submit_refine_panel(this);" id="manglik.2" value="2">
                  <label for="manglik.2" title="No"><span class="lvwordellips">No</span><span class="numberresult">(2945)</span></label>
                    
                    
                    </li>
                                          <li class="lvcheckbox">
                  <input type="checkbox" class="manglik" name="manglik[]" onclick="submit_refine_panel(this);" id="manglik.1" value="1">
                  <label for="manglik.1" title="Yes"><span class="lvwordellips">Yes</span><span class="numberresult">(885)</span></label>
                    
                    
                    </li>
                                          
                    </ul>
                    
                    </div>
                 </div>
            </li>    
                       <li class="panel panel-default">
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#FilterCountry" aria-expanded="false">Country</a>
                  </h4>
                 </div>
                 <div id="FilterCountry" class="panel-collapse collapse">
                    <div class="panel-body Max-height-filter">
                <ul>
                 <li class="lvcheckbox">
                     <input type="checkbox" class="residing_country" name="residing_country[]" onclick="submit_refine_panel(this);" id="residing_country.0" value="0">
                  <label for="residing_country.0" title="all"><span class="lvwordellips">All</span><span class="numberresult"></span></label>
                  </li>
                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.100" onclick="submit_refine_panel(this);" value="100">
                    <label for="residing_country.100">India<span class="numberresult">(23331)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.222" onclick="submit_refine_panel(this);" value="222">
                    <label for="residing_country.222">United States<span class="numberresult">(137)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.38" onclick="submit_refine_panel(this);" value="38">
                    <label for="residing_country.38">Canada<span class="numberresult">(57)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.13" onclick="submit_refine_panel(this);" value="13">
                    <label for="residing_country.13">Australia<span class="numberresult">(19)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.220" onclick="submit_refine_panel(this);" value="220">
                    <label for="residing_country.220">United Arab Emirates<span class="numberresult">(18)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.221" onclick="submit_refine_panel(this);" value="221">
                    <label for="residing_country.221">United Kingdom<span class="numberresult">(18)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.102" onclick="submit_refine_panel(this);" value="102">
                    <label for="residing_country.102">Iran<span class="numberresult">(17)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.18" onclick="submit_refine_panel(this);" value="18">
                    <label for="residing_country.18">Bangladesh<span class="numberresult">(9)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.163" onclick="submit_refine_panel(this);" value="163">
                    <label for="residing_country.163">Pakistan<span class="numberresult">(9)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.183" onclick="submit_refine_panel(this);" value="183">
                    <label for="residing_country.183">Senegal<span class="numberresult">(7)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.10" onclick="submit_refine_panel(this);" value="10">
                    <label for="residing_country.10">Argentina<span class="numberresult">(5)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.129" onclick="submit_refine_panel(this);" value="129">
                    <label for="residing_country.129">Malaysia<span class="numberresult">(5)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.154" onclick="submit_refine_panel(this);" value="154">
                    <label for="residing_country.154">New Zealand<span class="numberresult">(5)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.157" onclick="submit_refine_panel(this);" value="157">
                    <label for="residing_country.157">Nigeria<span class="numberresult">(5)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.169" onclick="submit_refine_panel(this);" value="169">
                    <label for="residing_country.169">Philippines<span class="numberresult">(5)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.214" onclick="submit_refine_panel(this);" value="214">
                    <label for="residing_country.214">Turkey<span class="numberresult">(4)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.72" onclick="submit_refine_panel(this);" value="72">
                    <label for="residing_country.72">Fiji<span class="numberresult">(3)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.148" onclick="submit_refine_panel(this);" value="148">
                    <label for="residing_country.148">Nepal<span class="numberresult">(3)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.62" onclick="submit_refine_panel(this);" value="62">
                    <label for="residing_country.62">Dominican Republic<span class="numberresult">(2)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.75" onclick="submit_refine_panel(this);" value="75">
                    <label for="residing_country.75">France (European Ter.)<span class="numberresult">(2)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.80" onclick="submit_refine_panel(this);" value="80">
                    <label for="residing_country.80">Germany<span class="numberresult">(2)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.81" onclick="submit_refine_panel(this);" value="81">
                    <label for="residing_country.81">Ghana<span class="numberresult">(2)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.106" onclick="submit_refine_panel(this);" value="106">
                    <label for="residing_country.106">Ivory Coast<span class="numberresult">(2)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.111" onclick="submit_refine_panel(this);" value="111">
                    <label for="residing_country.111">Kenya<span class="numberresult">(2)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.143" onclick="submit_refine_panel(this);" value="143">
                    <label for="residing_country.143">Morocco<span class="numberresult">(2)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.192" onclick="submit_refine_panel(this);" value="192">
                    <label for="residing_country.192">Spain<span class="numberresult">(2)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.6" onclick="submit_refine_panel(this);" value="6">
                    <label for="residing_country.6">Angola<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.7" onclick="submit_refine_panel(this);" value="7">
                    <label for="residing_country.7">Anguilla<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.9" onclick="submit_refine_panel(this);" value="9">
                    <label for="residing_country.9">Antigua and Barbuda<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.11" onclick="submit_refine_panel(this);" value="11">
                    <label for="residing_country.11">Armenia<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.14" onclick="submit_refine_panel(this);" value="14">
                    <label for="residing_country.14">Austria<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.15" onclick="submit_refine_panel(this);" value="15">
                    <label for="residing_country.15">Azerbaidjan<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.16" onclick="submit_refine_panel(this);" value="16">
                    <label for="residing_country.16">Bahamas<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.17" onclick="submit_refine_panel(this);" value="17">
                    <label for="residing_country.17">Bahrain<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.21" onclick="submit_refine_panel(this);" value="21">
                    <label for="residing_country.21">Belgium<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.36" onclick="submit_refine_panel(this);" value="36">
                    <label for="residing_country.36">Cambodia<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.56" onclick="submit_refine_panel(this);" value="56">
                    <label for="residing_country.56">Czech Republic<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.65" onclick="submit_refine_panel(this);" value="65">
                    <label for="residing_country.65">Egypt<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.84" onclick="submit_refine_panel(this);" value="84">
                    <label for="residing_country.84">Greece<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.104" onclick="submit_refine_panel(this);" value="104">
                    <label for="residing_country.104">Ireland<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.108" onclick="submit_refine_panel(this);" value="108">
                    <label for="residing_country.108">Japan<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.110" onclick="submit_refine_panel(this);" value="110">
                    <label for="residing_country.110">Kazakhstan<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.118" onclick="submit_refine_panel(this);" value="118">
                    <label for="residing_country.118">Latvia<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.150" onclick="submit_refine_panel(this);" value="150">
                    <label for="residing_country.150">Netherland Antilles<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.162" onclick="submit_refine_panel(this);" value="162">
                    <label for="residing_country.162">Oman<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.173" onclick="submit_refine_panel(this);" value="173">
                    <label for="residing_country.173">Portugal<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.174" onclick="submit_refine_panel(this);" value="174">
                    <label for="residing_country.174">Qatar<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.182" onclick="submit_refine_panel(this);" value="182">
                    <label for="residing_country.182">Saudi Arabia<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.184" onclick="submit_refine_panel(this);" value="184">
                    <label for="residing_country.184">Seychelles<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.186" onclick="submit_refine_panel(this);" value="186">
                    <label for="residing_country.186">Singapore<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.191" onclick="submit_refine_panel(this);" value="191">
                    <label for="residing_country.191">South Africa<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.202" onclick="submit_refine_panel(this);" value="202">
                    <label for="residing_country.202">Sweden<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.205" onclick="submit_refine_panel(this);" value="205">
                    <label for="residing_country.205">Tadjikistan<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.213" onclick="submit_refine_panel(this);" value="213">
                    <label for="residing_country.213">Tunisia<span class="numberresult">(1)</span></label>

                    </li>
            

                           <li class="lvcheckbox">
                    <input type="checkbox" class="residing_country" name="residing_country[]" id="residing_country.229" onclick="submit_refine_panel(this);" value="229">
                    <label for="residing_country.229">Vietnam<span class="numberresult">(1)</span></label>

                    </li>
            

                
                    
                              
                    </ul>
                    
                    </div>
                 </div>
            </li>
                        <li class="panel panel-default">
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#FilterState" aria-expanded="false">State</a>
                  </h4>
                 </div>
                 <div id="FilterState" class="panel-collapse collapse">
                    <div class="panel-body Max-height-filter">
                     <ul>
                                      <li class="lvcheckbox">
                     <input type="checkbox" class="residing_state" name="residing_state[]" onclick="submit_refine_panel(this);" id="residing_state.0" value="0">
                  <label for="residing_state.0" title="all"><span class="lvwordellips">All</span><span class="numberresult"></span></label>
                  </li>
                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.9" onclick="submit_refine_panel(this);" value="9">
                            <label for="residing_state.9">Delhi<span class="numberresult">(4824)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.32" onclick="submit_refine_panel(this);" value="32">
                            <label for="residing_state.32">Uttar Pradesh<span class="numberresult">(2991)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.20" onclick="submit_refine_panel(this);" value="20">
                            <label for="residing_state.20">Maharashtra<span class="numberresult">(2341)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.27" onclick="submit_refine_panel(this);" value="27">
                            <label for="residing_state.27">Punjab<span class="numberresult">(2012)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.12" onclick="submit_refine_panel(this);" value="12">
                            <label for="residing_state.12">Haryana<span class="numberresult">(1606)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.16" onclick="submit_refine_panel(this);" value="16">
                            <label for="residing_state.16">Karnataka<span class="numberresult">(1224)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.17" onclick="submit_refine_panel(this);" value="17">
                            <label for="residing_state.17">Kerala<span class="numberresult">(1075)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.28" onclick="submit_refine_panel(this);" value="28">
                            <label for="residing_state.28">Rajasthan<span class="numberresult">(1050)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.1" onclick="submit_refine_panel(this);" value="1">
                            <label for="residing_state.1">Andhra Pradesh<span class="numberresult">(987)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.5" onclick="submit_refine_panel(this);" value="5">
                            <label for="residing_state.5">Chandigarh<span class="numberresult">(746)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.19" onclick="submit_refine_panel(this);" value="19">
                            <label for="residing_state.19">Madhya Pradesh<span class="numberresult">(736)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.30" onclick="submit_refine_panel(this);" value="30">
                            <label for="residing_state.30">Tamil Nadu<span class="numberresult">(723)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.34" onclick="submit_refine_panel(this);" value="34">
                            <label for="residing_state.34">West Bengal<span class="numberresult">(546)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.11" onclick="submit_refine_panel(this);" value="11">
                            <label for="residing_state.11">Gujarat<span class="numberresult">(421)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.103" onclick="submit_refine_panel(this);" value="103">
                            <label for="residing_state.103">Telangana<span class="numberresult">(411)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.4" onclick="submit_refine_panel(this);" value="4">
                            <label for="residing_state.4">Bihar<span class="numberresult">(397)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.33" onclick="submit_refine_panel(this);" value="33">
                            <label for="residing_state.33">Uttaranchal<span class="numberresult">(288)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.25" onclick="submit_refine_panel(this);" value="25">
                            <label for="residing_state.25">Orissa<span class="numberresult">(209)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.15" onclick="submit_refine_panel(this);" value="15">
                            <label for="residing_state.15">Jharkhand<span class="numberresult">(207)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.6" onclick="submit_refine_panel(this);" value="6">
                            <label for="residing_state.6">Chhattisgarh<span class="numberresult">(145)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.13" onclick="submit_refine_panel(this);" value="13">
                            <label for="residing_state.13">Himachal Pradesh<span class="numberresult">(130)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.3" onclick="submit_refine_panel(this);" value="3">
                            <label for="residing_state.3">Assam<span class="numberresult">(110)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.42" onclick="submit_refine_panel(this);" value="42">
                            <label for="residing_state.42">California<span class="numberresult">(41)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.10" onclick="submit_refine_panel(this);" value="10">
                            <label for="residing_state.10">Goa<span class="numberresult">(39)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.14" onclick="submit_refine_panel(this);" value="14">
                            <label for="residing_state.14">Jammu &amp; Kashmir<span class="numberresult">(30)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.96" onclick="submit_refine_panel(this);" value="96">
                            <label for="residing_state.96">Ontario<span class="numberresult">(28)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.2" onclick="submit_refine_panel(this);" value="2">
                            <label for="residing_state.2">Arunachal Pradesh<span class="numberresult">(18)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.69" onclick="submit_refine_panel(this);" value="69">
                            <label for="residing_state.69">New York<span class="numberresult">(18)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.26" onclick="submit_refine_panel(this);" value="26">
                            <label for="residing_state.26">Pondicherry<span class="numberresult">(14)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.88" onclick="submit_refine_panel(this);" value="88">
                            <label for="residing_state.88">Alberta<span class="numberresult">(11)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.67" onclick="submit_refine_panel(this);" value="67">
                            <label for="residing_state.67">New Jersey<span class="numberresult">(8)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.80" onclick="submit_refine_panel(this);" value="80">
                            <label for="residing_state.80">Texas<span class="numberresult">(7)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.8" onclick="submit_refine_panel(this);" value="8">
                            <label for="residing_state.8">Daman and Diu<span class="numberresult">(6)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.21" onclick="submit_refine_panel(this);" value="21">
                            <label for="residing_state.21">Manipur<span class="numberresult">(6)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.24" onclick="submit_refine_panel(this);" value="24">
                            <label for="residing_state.24">Nagaland<span class="numberresult">(6)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.37" onclick="submit_refine_panel(this);" value="37">
                            <label for="residing_state.37">Alaska<span class="numberresult">(6)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.46" onclick="submit_refine_panel(this);" value="46">
                            <label for="residing_state.46">Florida<span class="numberresult">(6)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.47" onclick="submit_refine_panel(this);" value="47">
                            <label for="residing_state.47">Georgia<span class="numberresult">(6)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.36" onclick="submit_refine_panel(this);" value="36">
                            <label for="residing_state.36">Alabama<span class="numberresult">(5)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.72" onclick="submit_refine_panel(this);" value="72">
                            <label for="residing_state.72">Ohio<span class="numberresult">(5)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.22" onclick="submit_refine_panel(this);" value="22">
                            <label for="residing_state.22">Meghalaya<span class="numberresult">(4)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.31" onclick="submit_refine_panel(this);" value="31">
                            <label for="residing_state.31">Tripura<span class="numberresult">(4)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.84" onclick="submit_refine_panel(this);" value="84">
                            <label for="residing_state.84">Washington<span class="numberresult">(4)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.108" onclick="submit_refine_panel(this);" value="108">
                            <label for="residing_state.108">London<span class="numberresult">(4)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.43" onclick="submit_refine_panel(this);" value="43">
                            <label for="residing_state.43">Colorado<span class="numberresult">(3)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.50" onclick="submit_refine_panel(this);" value="50">
                            <label for="residing_state.50">Illinois<span class="numberresult">(3)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.89" onclick="submit_refine_panel(this);" value="89">
                            <label for="residing_state.89">British Columbia<span class="numberresult">(3)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.90" onclick="submit_refine_panel(this);" value="90">
                            <label for="residing_state.90">Manitoba<span class="numberresult">(3)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.101" onclick="submit_refine_panel(this);" value="101">
                            <label for="residing_state.101">Suva<span class="numberresult">(3)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.104" onclick="submit_refine_panel(this);" value="104">
                            <label for="residing_state.104">England<span class="numberresult">(3)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.338" onclick="submit_refine_panel(this);" value="338">
                            <label for="residing_state.338">Toronto<span class="numberresult">(3)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.7" onclick="submit_refine_panel(this);" value="7">
                            <label for="residing_state.7">Dadra and Nagar<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.29" onclick="submit_refine_panel(this);" value="29">
                            <label for="residing_state.29">Sikkim<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.35" onclick="submit_refine_panel(this);" value="35">
                            <label for="residing_state.35">Andaman&amp;Nicobar<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.48" onclick="submit_refine_panel(this);" value="48">
                            <label for="residing_state.48">Hawaii<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.55" onclick="submit_refine_panel(this);" value="55">
                            <label for="residing_state.55">Louisiana<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.57" onclick="submit_refine_panel(this);" value="57">
                            <label for="residing_state.57">Maryland<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.76" onclick="submit_refine_panel(this);" value="76">
                            <label for="residing_state.76">Rhode Island<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.98" onclick="submit_refine_panel(this);" value="98">
                            <label for="residing_state.98">Quebec<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.314" onclick="submit_refine_panel(this);" value="314">
                            <label for="residing_state.314">South Australia<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.317" onclick="submit_refine_panel(this);" value="317">
                            <label for="residing_state.317">Victoria<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.322" onclick="submit_refine_panel(this);" value="322">
                            <label for="residing_state.322">Brisbane<span class="numberresult">(2)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.18" onclick="submit_refine_panel(this);" value="18">
                            <label for="residing_state.18">LakshadweepIsland<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.40" onclick="submit_refine_panel(this);" value="40">
                            <label for="residing_state.40">Arizona<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.44" onclick="submit_refine_panel(this);" value="44">
                            <label for="residing_state.44">Connecticut<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.45" onclick="submit_refine_panel(this);" value="45">
                            <label for="residing_state.45">Delaware<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.51" onclick="submit_refine_panel(this);" value="51">
                            <label for="residing_state.51">Indiana<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.52" onclick="submit_refine_panel(this);" value="52">
                            <label for="residing_state.52">Lowa<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.54" onclick="submit_refine_panel(this);" value="54">
                            <label for="residing_state.54">Kentucky<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.58" onclick="submit_refine_panel(this);" value="58">
                            <label for="residing_state.58">Massachusetts<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.62" onclick="submit_refine_panel(this);" value="62">
                            <label for="residing_state.62">Missouri<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.77" onclick="submit_refine_panel(this);" value="77">
                            <label for="residing_state.77">South Carolina<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.81" onclick="submit_refine_panel(this);" value="81">
                            <label for="residing_state.81">Utah<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.83" onclick="submit_refine_panel(this);" value="83">
                            <label for="residing_state.83">Virginia<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.91" onclick="submit_refine_panel(this);" value="91">
                            <label for="residing_state.91">New Brunswick<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.92" onclick="submit_refine_panel(this);" value="92">
                            <label for="residing_state.92">Newfoundland and Labrador<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.93" onclick="submit_refine_panel(this);" value="93">
                            <label for="residing_state.93">Northwest Territories<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.95" onclick="submit_refine_panel(this);" value="95">
                            <label for="residing_state.95">Nunavut<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.144" onclick="submit_refine_panel(this);" value="144">
                            <label for="residing_state.144">Bradford<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.318" onclick="submit_refine_panel(this);" value="318">
                            <label for="residing_state.318">Western Australia<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.319" onclick="submit_refine_panel(this);" value="319">
                            <label for="residing_state.319">Australian Capital Territory<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.323" onclick="submit_refine_panel(this);" value="323">
                            <label for="residing_state.323">Canberra<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.328" onclick="submit_refine_panel(this);" value="328">
                            <label for="residing_state.328">Sydney<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.345" onclick="submit_refine_panel(this);" value="345">
                            <label for="residing_state.345">Brandon<span class="numberresult">(1)</span></label>

                            </li>
                    

                                           <li class="lvcheckbox">
                            <input type="checkbox" class="residing_state" name="residing_state[]" id="residing_state.382" onclick="submit_refine_panel(this);" value="382">
                            <label for="residing_state.382">Bartley<span class="numberresult">(1)</span></label>

                            </li>
                    

                        
                    
                              
                    </ul>
                    
                    </div>
                 </div>
            </li>
            
            <li class="panel panel-default">
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#FilterAge" aria-expanded="false">Age</a>
                  </h4>
                 </div>
                 <div id="FilterAge" class="panel-collapse collapse">
                    <div class="panel-body">
                     <span class="irs js-irs-0  irs-with-grid"><span class="irs"><span class="irs-line" tabindex="0"><span class="irs-line-left"></span><span class="irs-line-mid"></span><span class="irs-line-right"></span></span><span class="irs-min" style="display: none;">0</span><span class="irs-max" style="display: none;">1</span><span class="irs-from">0</span><span class="irs-to">0</span><span class="irs-single">0</span></span><span class="irs-grid"><span class="irs-grid-pol" style="left: 0%"></span><span class="irs-grid-text js-grid-text-0" style="left: 0%">18</span><span class="irs-grid-pol small" style="left: 20%"></span><span class="irs-grid-pol small" style="left: 15%"></span><span class="irs-grid-pol small" style="left: 10%"></span><span class="irs-grid-pol small" style="left: 5%"></span><span class="irs-grid-pol" style="left: 25%"></span><span class="irs-grid-text js-grid-text-1" style="left: 25%; visibility: hidden;">32</span><span class="irs-grid-pol small" style="left: 45%"></span><span class="irs-grid-pol small" style="left: 40%"></span><span class="irs-grid-pol small" style="left: 35%"></span><span class="irs-grid-pol small" style="left: 30%"></span><span class="irs-grid-pol" style="left: 50%"></span><span class="irs-grid-text js-grid-text-2" style="left: 50%; visibility: hidden;">47</span><span class="irs-grid-pol small" style="left: 70%"></span><span class="irs-grid-pol small" style="left: 65%"></span><span class="irs-grid-pol small" style="left: 60%"></span><span class="irs-grid-pol small" style="left: 55%"></span><span class="irs-grid-pol" style="left: 75%"></span><span class="irs-grid-text js-grid-text-3" style="left: 75%; visibility: hidden;">61</span><span class="irs-grid-pol small" style="left: 95%"></span><span class="irs-grid-pol small" style="left: 90%"></span><span class="irs-grid-pol small" style="left: 85%"></span><span class="irs-grid-pol small" style="left: 80%"></span><span class="irs-grid-pol" style="left: 100%"></span><span class="irs-grid-text js-grid-text-4" style="left: 100%">75</span></span><span class="irs-bar"></span><span class="irs-shadow shadow-from"></span><span class="irs-shadow shadow-to"></span><span class="irs-slider from"></span><span class="irs-slider to type_last"></span></span><input type="text" id="fage" value="" name="range2" class="irs-hidden-input" tabindex="-1" readonly="">            
                    </div>
                 </div>
            </li>
                        <li class="panel panel-default">
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#FilterReligion" aria-expanded="false">Religion</a>
                  </h4>
                 </div>
                 <div id="FilterReligion" class="panel-collapse collapse">
                    <div class="panel-body Max-height-filter">
                    <ul>
                    <li class="lvcheckbox">
                     <input type="checkbox" class="religion" name="religion[]" onclick="submit_refine_panel(this);" id="religion.0" value="0">
                  <label for="religion.0" title="all"><span class="lvwordellips">All</span><span class="numberresult"></span></label>
                  </li>
                      
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.739" value="739">
          <label for="religion.739" title="Hindu"><span class="lvwordellips">Hindu</span><span class="numberresult">(19929)</span></label>
            
            
            </li>
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.742" value="742">
          <label for="religion.742" title="Sikh"><span class="lvwordellips">Sikh</span><span class="numberresult">(1512)</span></label>
            
            
            </li>
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.740" value="740">
          <label for="religion.740" title="Muslim"><span class="lvwordellips">Muslim</span><span class="numberresult">(993)</span></label>
            
            
            </li>
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.744" value="744">
          <label for="religion.744" title="Jain"><span class="lvwordellips">Jain</span><span class="numberresult">(637)</span></label>
            
            
            </li>
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.741" value="741">
          <label for="religion.741" title="Christian"><span class="lvwordellips">Christian</span><span class="numberresult">(406)</span></label>
            
            
            </li>
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.745" value="745">
          <label for="religion.745" title="Buddhist"><span class="lvwordellips">Buddhist</span><span class="numberresult">(160)</span></label>
            
            
            </li>
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.749" value="749">
          <label for="religion.749" title="Other"><span class="lvwordellips">Other</span><span class="numberresult">(41)</span></label>
            
            
            </li>
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.743" value="743">
          <label for="religion.743" title="Parsi"><span class="lvwordellips">Parsi</span><span class="numberresult">(25)</span></label>
            
            
            </li>
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.746" value="746">
          <label for="religion.746" title="Jewish"><span class="lvwordellips">Jewish</span><span class="numberresult">(19)</span></label>
            
            
            </li>
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.748" value="748">
          <label for="religion.748" title="Spiritual"><span class="lvwordellips">Spiritual</span><span class="numberresult">(17)</span></label>
            
            
            </li>
                          <li class="lvcheckbox">
          <input type="checkbox" name="religion[]" class="religion" onclick="submit_refine_panel(this);" id="religion.1090" value="1090">
          <label for="religion.1090" title="No Religion"><span class="lvwordellips">No Religion</span><span class="numberresult">(15)</span></label>
            
            
            </li>
                
                            </ul>
                    </div>
                 </div>
            </li>
                        <li class="panel panel-default">
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#FilterCaste" aria-expanded="false">Caste</a>
                  </h4>
                 </div>
                 <div id="FilterCaste" class="panel-collapse collapse">
                    <div class="panel-body Max-height-filter">
                    <ul>
                    <li class="lvcheckbox">
                     <input type="checkbox" class="caste" name="caste[]" onclick="submit_refine_panel(this);" id="caste.0" value="0">
                  <label for="caste.0" title="all"><span class="lvwordellips">All</span><span class="numberresult"></span></label>
                  </li>
                                              <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.342" value="342">
                     <label for="caste.342" title="Aggarwal"><span class="lvwordellips">Aggarwal</span><span class="numberresult">(1906)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.347" value="347">
                     <label for="caste.347" title="Brahmin"><span class="lvwordellips">Brahmin</span><span class="numberresult">(1693)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.343" value="343">
                     <label for="caste.343" title="Arora"><span class="lvwordellips">Arora</span><span class="numberresult">(1463)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.352" value="352">
                     <label for="caste.352" title="Khatri"><span class="lvwordellips">Khatri</span><span class="numberresult">(1443)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.351" value="351">
                     <label for="caste.351" title="Kayastha"><span class="lvwordellips">Kayastha</span><span class="numberresult">(1190)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.359" value="359">
                     <label for="caste.359" title="Other - Hindu"><span class="lvwordellips">Other - Hindu</span><span class="numberresult">(998)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.482" value="482">
                     <label for="caste.482" title="Ezhava"><span class="lvwordellips">Ezhava</span><span class="numberresult">(885)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.363" value="363">
                     <label for="caste.363" title="Rajput"><span class="lvwordellips">Rajput</span><span class="numberresult">(653)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1221" value="1221">
                     <label for="caste.1221" title="Sunni"><span class="lvwordellips">Sunni</span><span class="numberresult">(598)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.344" value="344">
                     <label for="caste.344" title="Baniya"><span class="lvwordellips">Baniya</span><span class="numberresult">(524)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1226" value="1226">
                     <label for="caste.1226" title="Sikh - Jat"><span class="lvwordellips">Sikh - Jat</span><span class="numberresult">(413)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1212" value="1212">
                     <label for="caste.1212" title="Digambar"><span class="lvwordellips">Digambar</span><span class="numberresult">(288)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.364" value="364">
                     <label for="caste.364" title="Scheduled Caste"><span class="lvwordellips">Scheduled Caste</span><span class="numberresult">(286)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.361" value="361">
                     <label for="caste.361" title="Punjabi"><span class="lvwordellips">Punjabi</span><span class="numberresult">(264)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.349" value="349">
                     <label for="caste.349" title="Gupta"><span class="lvwordellips">Gupta</span><span class="numberresult">(249)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.367" value="367">
                     <label for="caste.367" title="Yadav"><span class="lvwordellips">Yadav</span><span class="numberresult">(241)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.350" value="350">
                     <label for="caste.350" title="Jat"><span class="lvwordellips">Jat</span><span class="numberresult">(234)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1224" value="1224">
                     <label for="caste.1224" title="Sikh - Arora"><span class="lvwordellips">Sikh - Arora</span><span class="numberresult">(231)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.354" value="354">
                     <label for="caste.354" title="Kshatriya"><span class="lvwordellips">Kshatriya</span><span class="numberresult">(219)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1228" value="1228">
                     <label for="caste.1228" title="Sikh - Khatri"><span class="lvwordellips">Sikh - Khatri</span><span class="numberresult">(212)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1213" value="1213">
                     <label for="caste.1213" title="Shwetamber"><span class="lvwordellips">Shwetamber</span><span class="numberresult">(198)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1236" value="1236">
                     <label for="caste.1236" title="Sikh - Other"><span class="lvwordellips">Sikh - Other</span><span class="numberresult">(191)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.508" value="508">
                     <label for="caste.508" title="Jatav"><span class="lvwordellips">Jatav</span><span class="numberresult">(190)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.356" value="356">
                     <label for="caste.356" title="Maratha"><span class="lvwordellips">Maratha</span><span class="numberresult">(169)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1233" value="1233">
                     <label for="caste.1233" title="Sikh - Ramgharia"><span class="lvwordellips">Sikh - Ramgharia</span><span class="numberresult">(147)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.346" value="346">
                     <label for="caste.346" title="Brahmin - All"><span class="lvwordellips">Brahmin - All</span><span class="numberresult">(134)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1222" value="1222">
                     <label for="caste.1222" title="Other - Muslim"><span class="lvwordellips">Other - Muslim</span><span class="numberresult">(124)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.366" value="366">
                     <label for="caste.366" title="Sindhi"><span class="lvwordellips">Sindhi</span><span class="numberresult">(116)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.408" value="408">
                     <label for="caste.408" title="Brahmin - Gour"><span class="lvwordellips">Brahmin - Gour</span><span class="numberresult">(107)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.12874" value="12874">
                     <label for="caste.12874" title="Buddhist"><span class="lvwordellips">Buddhist</span><span class="numberresult">(102)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.549" value="549">
                     <label for="caste.549" title="Kurmi"><span class="lvwordellips">Kurmi</span><span class="numberresult">(88)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1441" value="1441">
                     <label for="caste.1441" title="Other - Christian"><span class="lvwordellips">Other - Christian</span><span class="numberresult">(83)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.695" value="695">
                     <label for="caste.695" title="Teli"><span class="lvwordellips">Teli</span><span class="numberresult">(82)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.526" value="526">
                     <label for="caste.526" title="Kashyap"><span class="lvwordellips">Kashyap</span><span class="numberresult">(81)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.444" value="444">
                     <label for="caste.444" title="Brahmin - Saraswat"><span class="lvwordellips">Brahmin - Saraswat</span><span class="numberresult">(77)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.420" value="420">
                     <label for="caste.420" title="Brahmin - Kanyakubja"><span class="lvwordellips">Brahmin - Kanyakubja</span><span class="numberresult">(76)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1208" value="1208">
                     <label for="caste.1208" title="Catholic - Roman"><span class="lvwordellips">Catholic - Roman</span><span class="numberresult">(72)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1235" value="1235">
                     <label for="caste.1235" title="Sikh - Saini"><span class="lvwordellips">Sikh - Saini</span><span class="numberresult">(72)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.698" value="698">
                     <label for="caste.698" title="Thakur"><span class="lvwordellips">Thakur</span><span class="numberresult">(71)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.733" value="733">
                     <label for="caste.733" title="Vishwakarma"><span class="lvwordellips">Vishwakarma</span><span class="numberresult">(69)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.553" value="553">
                     <label for="caste.553" title="Kushwaha"><span class="lvwordellips">Kushwaha</span><span class="numberresult">(67)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1215" value="1215">
                     <label for="caste.1215" title="Other - Jain"><span class="lvwordellips">Other - Jain</span><span class="numberresult">(65)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.462" value="462">
                     <label for="caste.462" title="Chambhar"><span class="lvwordellips">Chambhar</span><span class="numberresult">(63)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.445" value="445">
                     <label for="caste.445" title="Brahmin - Saryuparin"><span class="lvwordellips">Brahmin - Saryuparin</span><span class="numberresult">(60)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.596" value="596">
                     <label for="caste.596" title="Mudaliar - Senguntha"><span class="lvwordellips">Mudaliar - Senguntha</span><span class="numberresult">(59)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1232" value="1232">
                     <label for="caste.1232" title="Sikh - Ramdasia"><span class="lvwordellips">Sikh - Ramdasia</span><span class="numberresult">(58)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.680" value="680">
                     <label for="caste.680" title="Sonar"><span class="lvwordellips">Sonar</span><span class="numberresult">(57)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.580" value="580">
                     <label for="caste.580" title="Marwari"><span class="lvwordellips">Marwari</span><span class="numberresult">(56)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.505" value="505">
                     <label for="caste.505" title="Jaiswal"><span class="lvwordellips">Jaiswal</span><span class="numberresult">(53)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.360" value="360">
                     <label for="caste.360" title="Nair"><span class="lvwordellips">Nair</span><span class="numberresult">(51)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.399" value="399">
                     <label for="caste.399" title="Brahmin - Bhumihar"><span class="lvwordellips">Brahmin - Bhumihar</span><span class="numberresult">(50)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.566" value="566">
                     <label for="caste.566" title="Maheshwari"><span class="lvwordellips">Maheshwari</span><span class="numberresult">(49)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.479" value="479">
                     <label for="caste.479" title="Dhobi"><span class="lvwordellips">Dhobi</span><span class="numberresult">(47)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.604" value="604">
                     <label for="caste.604" title="Nai"><span class="lvwordellips">Nai</span><span class="numberresult">(46)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.370" value="370">
                     <label for="caste.370" title="Adi Dravida"><span class="lvwordellips">Adi Dravida</span><span class="numberresult">(45)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.648" value="648">
                     <label for="caste.648" title="Reddy"><span class="lvwordellips">Reddy</span><span class="numberresult">(45)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.466" value="466">
                     <label for="caste.466" title="Chaudary"><span class="lvwordellips">Chaudary</span><span class="numberresult">(44)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.638" value="638">
                     <label for="caste.638" title="Prajapati"><span class="lvwordellips">Prajapati</span><span class="numberresult">(44)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.681" value="681">
                     <label for="caste.681" title="Soni"><span class="lvwordellips">Soni</span><span class="numberresult">(42)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.557" value="557">
                     <label for="caste.557" title="Lingayat"><span class="lvwordellips">Lingayat</span><span class="numberresult">(41)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.562" value="562">
                     <label for="caste.562" title="Mahajan"><span class="lvwordellips">Mahajan</span><span class="numberresult">(41)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.710" value="710">
                     <label for="caste.710" title="Vaish"><span class="lvwordellips">Vaish</span><span class="numberresult">(41)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.377" value="377">
                     <label for="caste.377" title="Baghel/Pal/Gaderiya"><span class="lvwordellips">Baghel/Pal/Gaderiya</span><span class="numberresult">(39)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.387" value="387">
                     <label for="caste.387" title="Bhatia"><span class="lvwordellips">Bhatia</span><span class="numberresult">(39)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.653" value="653">
                     <label for="caste.653" title="Sahu"><span class="lvwordellips">Sahu</span><span class="numberresult">(39)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.717" value="717">
                     <label for="caste.717" title="Vaishya"><span class="lvwordellips">Vaishya</span><span class="numberresult">(39)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.623" value="623">
                     <label for="caste.623" title="Padmashali"><span class="lvwordellips">Padmashali</span><span class="numberresult">(38)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.713" value="713">
                     <label for="caste.713" title="Vaishnav"><span class="lvwordellips">Vaishnav</span><span class="numberresult">(37)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.527" value="527">
                     <label for="caste.527" title="Khandayat"><span class="lvwordellips">Khandayat</span><span class="numberresult">(35)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.572" value="572">
                     <label for="caste.572" title="Mali"><span class="lvwordellips">Mali</span><span class="numberresult">(34)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1202" value="1202">
                     <label for="caste.1202" title="Catholic"><span class="lvwordellips">Catholic</span><span class="numberresult">(34)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.429" value="429">
                     <label for="caste.429" title="Brahmin - Maithili"><span class="lvwordellips">Brahmin - Maithili</span><span class="numberresult">(33)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.375" value="375">
                     <label for="caste.375" title="Arya Vysya"><span class="lvwordellips">Arya Vysya</span><span class="numberresult">(32)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.607" value="607">
                     <label for="caste.607" title="Naidu"><span class="lvwordellips">Naidu</span><span class="numberresult">(31)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.719" value="719">
                     <label for="caste.719" title="Valmiki"><span class="lvwordellips">Valmiki</span><span class="numberresult">(28)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1231" value="1231">
                     <label for="caste.1231" title="Sikh - Rajput"><span class="lvwordellips">Sikh - Rajput</span><span class="numberresult">(28)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.517" value="517">
                     <label for="caste.517" title="Kamma"><span class="lvwordellips">Kamma</span><span class="numberresult">(27)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.348" value="348">
                     <label for="caste.348" title=""><span class="lvwordellips"></span><span class="numberresult">(26)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.416" value="416">
                     <label for="caste.416" title="Brahmin - Iyer"><span class="lvwordellips">Brahmin - Iyer</span><span class="numberresult">(26)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.442" value="442">
                     <label for="caste.442" title="Brahmin - Sanadya"><span class="lvwordellips">Brahmin - Sanadya</span><span class="numberresult">(26)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.534" value="534">
                     <label for="caste.534" title="Kori"><span class="lvwordellips">Kori</span><span class="numberresult">(26)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1201" value="1201">
                     <label for="caste.1201" title="Born Again"><span class="lvwordellips">Born Again</span><span class="numberresult">(26)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.362" value="362">
                     <label for="caste.362" title="Rajput - All"><span class="lvwordellips">Rajput - All</span><span class="numberresult">(25)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.382" value="382">
                     <label for="caste.382" title="Balija"><span class="lvwordellips">Balija</span><span class="numberresult">(25)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.531" value="531">
                     <label for="caste.531" title="Koli"><span class="lvwordellips">Koli</span><span class="numberresult">(25)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.547" value="547">
                     <label for="caste.547" title="Kunbi"><span class="lvwordellips">Kunbi</span><span class="numberresult">(25)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.563" value="563">
                     <label for="caste.563" title="Mahar"><span class="lvwordellips">Mahar</span><span class="numberresult">(25)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.629" value="629">
                     <label for="caste.629" title="Patel"><span class="lvwordellips">Patel</span><span class="numberresult">(25)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.637" value="637">
                     <label for="caste.637" title="Pillai"><span class="lvwordellips">Pillai</span><span class="numberresult">(24)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.657" value="657">
                     <label for="caste.657" title="Scheduled Tribe"><span class="lvwordellips">Scheduled Tribe</span><span class="numberresult">(24)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.520" value="520">
                     <label for="caste.520" title="Kapu"><span class="lvwordellips">Kapu</span><span class="numberresult">(23)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.602" value="602">
                     <label for="caste.602" title="Nadar"><span class="lvwordellips">Nadar</span><span class="numberresult">(23)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.397" value="397">
                     <label for="caste.397" title="Brahmin - Bengali"><span class="lvwordellips">Brahmin - Bengali</span><span class="numberresult">(22)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.496" value="496">
                     <label for="caste.496" title="Gowda"><span class="lvwordellips">Gowda</span><span class="numberresult">(22)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.530" value="530">
                     <label for="caste.530" title="Khatik"><span class="lvwordellips">Khatik</span><span class="numberresult">(22)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1238" value="1238">
                     <label for="caste.1238" title="Sikh - Kamboj"><span class="lvwordellips">Sikh - Kamboj</span><span class="numberresult">(22)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.386" value="386">
                     <label for="caste.386" title="Bhandari"><span class="lvwordellips">Bhandari</span><span class="numberresult">(21)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.467" value="467">
                     <label for="caste.467" title="Chaurasia"><span class="lvwordellips">Chaurasia</span><span class="numberresult">(21)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.582" value="582">
                     <label for="caste.582" title="Maurya"><span class="lvwordellips">Maurya</span><span class="numberresult">(21)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.593" value="593">
                     <label for="caste.593" title="Mudaliar"><span class="lvwordellips">Mudaliar</span><span class="numberresult">(21)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.642" value="642">
                     <label for="caste.642" title="Rajput - Kumaoni"><span class="lvwordellips">Rajput - Kumaoni</span><span class="numberresult">(21)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.724" value="724">
                     <label for="caste.724" title="Vanniyar"><span class="lvwordellips">Vanniyar</span><span class="numberresult">(21)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1196" value="1196">
                     <label for="caste.1196" title="Addharmi"><span class="lvwordellips">Addharmi</span><span class="numberresult">(21)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1220" value="1220">
                     <label for="caste.1220" title="Shia"><span class="lvwordellips">Shia</span><span class="numberresult">(20)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.528" value="528">
                     <label for="caste.528" title="Khandelwal"><span class="lvwordellips">Khandelwal</span><span class="numberresult">(19)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.559" value="559">
                     <label for="caste.559" title="Lohar"><span class="lvwordellips">Lohar</span><span class="numberresult">(19)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.641" value="641">
                     <label for="caste.641" title="Rajput - Garhwali"><span class="lvwordellips">Rajput - Garhwali</span><span class="numberresult">(19)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.369" value="369">
                     <label for="caste.369" title="96K Kokanastha"><span class="lvwordellips">96K Kokanastha</span><span class="numberresult">(18)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.477" value="477">
                     <label for="caste.477" title="Dhiman"><span class="lvwordellips">Dhiman</span><span class="numberresult">(18)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.511" value="511">
                     <label for="caste.511" title="Kallar"><span class="lvwordellips">Kallar</span><span class="numberresult">(18)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1230" value="1230">
                     <label for="caste.1230" title="Sikh - Mazhbi"><span class="lvwordellips">Sikh - Mazhbi</span><span class="numberresult">(18)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.368" value="368">
                     <label for="caste.368" title="6000 Niyogi"><span class="lvwordellips">6000 Niyogi</span><span class="numberresult">(17)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.453" value="453">
                     <label for="caste.453" title="Brahmin - Tyagi"><span class="lvwordellips">Brahmin - Tyagi</span><span class="numberresult">(17)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.499" value="499">
                     <label for="caste.499" title="Gujjar"><span class="lvwordellips">Gujjar</span><span class="numberresult">(17)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.689" value="689">
                     <label for="caste.689" title="Swarnakar"><span class="lvwordellips">Swarnakar</span><span class="numberresult">(17)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1436" value="1436">
                     <label for="caste.1436" title="Pentecost"><span class="lvwordellips">Pentecost</span><span class="numberresult">(17)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.468" value="468">
                     <label for="caste.468" title="Chettiar"><span class="lvwordellips">Chettiar</span><span class="numberresult">(16)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.483" value="483">
                     <label for="caste.483" title="Ezhuthachan"><span class="lvwordellips">Ezhuthachan</span><span class="numberresult">(16)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.494" value="494">
                     <label for="caste.494" title="Goud"><span class="lvwordellips">Goud</span><span class="numberresult">(16)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.522" value="522">
                     <label for="caste.522" title="Karana"><span class="lvwordellips">Karana</span><span class="numberresult">(16)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.535" value="535">
                     <label for="caste.535" title="Koshti"><span class="lvwordellips">Koshti</span><span class="numberresult">(16)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.647" value="647">
                     <label for="caste.647" title="Rawat"><span class="lvwordellips">Rawat</span><span class="numberresult">(16)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.723" value="723">
                     <label for="caste.723" title="Vanniyakullak Kshatriya"><span class="lvwordellips">Vanniyakullak Kshatriya</span><span class="numberresult">(16)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.381" value="381">
                     <label for="caste.381" title="Baishya"><span class="lvwordellips">Baishya</span><span class="numberresult">(15)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.475" value="475">
                     <label for="caste.475" title="Dhangar"><span class="lvwordellips">Dhangar</span><span class="numberresult">(15)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.643" value="643">
                     <label for="caste.643" title="Rajput - Lodhi"><span class="lvwordellips">Rajput - Lodhi</span><span class="numberresult">(15)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.355" value="355">
                     <label for="caste.355" title="Maratha - All"><span class="lvwordellips">Maratha - All</span><span class="numberresult">(14)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.521" value="521">
                     <label for="caste.521" title="Kapu Naidu"><span class="lvwordellips">Kapu Naidu</span><span class="numberresult">(14)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1198" value="1198">
                     <label for="caste.1198" title="Ahluwalia"><span class="lvwordellips">Ahluwalia</span><span class="numberresult">(14)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.374" value="374">
                     <label for="caste.374" title="Arunthathiyar"><span class="lvwordellips">Arunthathiyar</span><span class="numberresult">(13)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.391" value="391">
                     <label for="caste.391" title="Billava"><span class="lvwordellips">Billava</span><span class="numberresult">(13)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.426" value="426">
                     <label for="caste.426" title="Brahmin - Kumaoni"><span class="lvwordellips">Brahmin - Kumaoni</span><span class="numberresult">(13)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.487" value="487">
                     <label for="caste.487" title="Garhwali"><span class="lvwordellips">Garhwali</span><span class="numberresult">(13)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.573" value="573">
                     <label for="caste.573" title="Mala"><span class="lvwordellips">Mala</span><span class="numberresult">(13)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1219" value="1219">
                     <label for="caste.1219" title="Shafi"><span class="lvwordellips">Shafi</span><span class="numberresult">(13)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1427" value="1427">
                     <label for="caste.1427" title="Christian - CSI"><span class="lvwordellips">Christian - CSI</span><span class="numberresult">(13)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.398" value="398">
                     <label for="caste.398" title="Brahmin - Bhatt"><span class="lvwordellips">Brahmin - Bhatt</span><span class="numberresult">(12)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.406" value="406">
                     <label for="caste.406" title="Brahmin - Garhwali"><span class="lvwordellips">Brahmin - Garhwali</span><span class="numberresult">(12)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.415" value="415">
                     <label for="caste.415" title="Brahmin - Iyengar"><span class="lvwordellips">Brahmin - Iyengar</span><span class="numberresult">(12)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.558" value="558">
                     <label for="caste.558" title="Lohana"><span class="lvwordellips">Lohana</span><span class="numberresult">(12)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.515" value="515">
                     <label for="caste.515" title="Kalwar"><span class="lvwordellips">Kalwar</span><span class="numberresult">(11)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.715" value="715">
                     <label for="caste.715" title="Vaishnav - Vania"><span class="lvwordellips">Vaishnav - Vania</span><span class="numberresult">(11)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.726" value="726">
                     <label for="caste.726" title="Varshney"><span class="lvwordellips">Varshney</span><span class="numberresult">(11)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.514" value="514">
                     <label for="caste.514" title="Kalita"><span class="lvwordellips">Kalita</span><span class="numberresult">(10)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.544" value="544">
                     <label for="caste.544" title="Kumbhakar/Kumbhar"><span class="lvwordellips">Kumbhakar/Kumbhar</span><span class="numberresult">(10)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.545" value="545">
                     <label for="caste.545" title="Kumhar"><span class="lvwordellips">Kumhar</span><span class="numberresult">(10)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.561" value="561">
                     <label for="caste.561" title="Madiga"><span class="lvwordellips">Madiga</span><span class="numberresult">(10)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.584" value="584">
                     <label for="caste.584" title="Meena"><span class="lvwordellips">Meena</span><span class="numberresult">(10)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.597" value="597">
                     <label for="caste.597" title="Mudiraj"><span class="lvwordellips">Mudiraj</span><span class="numberresult">(10)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1234" value="1234">
                     <label for="caste.1234" title="Sikh - Ravidasia"><span class="lvwordellips">Sikh - Ravidasia</span><span class="numberresult">(10)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.353" value="353">
                     <label for="caste.353" title="Kshatriya - All"><span class="lvwordellips">Kshatriya - All</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.371" value="371">
                     <label for="caste.371" title="Ahom"><span class="lvwordellips">Ahom</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.393" value="393">
                     <label for="caste.393" title="Brahmbatt"><span class="lvwordellips">Brahmbatt</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.395" value="395">
                     <label for="caste.395" title="Brahmin - Audichya"><span class="lvwordellips">Brahmin - Audichya</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.431" value="431">
                     <label for="caste.431" title="Brahmin - Mohyal"><span class="lvwordellips">Brahmin - Mohyal</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.469" value="469">
                     <label for="caste.469" title="Chhetri"><span class="lvwordellips">Chhetri</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.473" value="473">
                     <label for="caste.473" title="Devanga"><span class="lvwordellips">Devanga</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.556" value="556">
                     <label for="caste.556" title="Leva Patil"><span class="lvwordellips">Leva Patil</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.568" value="568">
                     <label for="caste.568" title="Mahishya"><span class="lvwordellips">Mahishya</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.592" value="592">
                     <label for="caste.592" title="Mudaliar - All"><span class="lvwordellips">Mudaliar - All</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.608" value="608">
                     <label for="caste.608" title="Naidu - Balija"><span class="lvwordellips">Naidu - Balija</span><span class="numberresult">(9)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.365" value="365">
                     <label for="caste.365" title="Sindhi - All"><span class="lvwordellips">Sindhi - All</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.379" value="379">
                     <label for="caste.379" title="Baidya"><span class="lvwordellips">Baidya</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.404" value="404">
                     <label for="caste.404" title="Brahmin - Dhiman"><span class="lvwordellips">Brahmin - Dhiman</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.409" value="409">
                     <label for="caste.409" title="Brahmin - Gowd Saraswat"><span class="lvwordellips">Brahmin - Gowd Saraswat</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.481" value="481">
                     <label for="caste.481" title="Ediga"><span class="lvwordellips">Ediga</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.550" value="550">
                     <label for="caste.550" title="Kuruba"><span class="lvwordellips">Kuruba</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.578" value="578">
                     <label for="caste.578" title="Maruthuvar"><span class="lvwordellips">Maruthuvar</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.628" value="628">
                     <label for="caste.628" title="Patel - All"><span class="lvwordellips">Patel - All</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.645" value="645">
                     <label for="caste.645" title="Ramgharia"><span class="lvwordellips">Ramgharia</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.701" value="701">
                     <label for="caste.701" title="Thiyya"><span class="lvwordellips">Thiyya</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.728" value="728">
                     <label for="caste.728" title="Veerashaiva"><span class="lvwordellips">Veerashaiva</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1387" value="1387">
                     <label for="caste.1387" title="Jain Agarwal"><span class="lvwordellips">Jain Agarwal</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1389" value="1389">
                     <label for="caste.1389" title="Sikh - Gursikh"><span class="lvwordellips">Sikh - Gursikh</span><span class="numberresult">(8)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.390" value="390">
                     <label for="caste.390" title="Bhovi"><span class="lvwordellips">Bhovi</span><span class="numberresult">(7)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.448" value="448">
                     <label for="caste.448" title="Brahmin - Smartha"><span class="lvwordellips">Brahmin - Smartha</span><span class="numberresult">(7)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.463" value="463">
                     <label for="caste.463" title="Chandravanshi Kahar"><span class="lvwordellips">Chandravanshi Kahar</span><span class="numberresult">(7)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.489" value="489">
                     <label for="caste.489" title="Gavara"><span class="lvwordellips">Gavara</span><span class="numberresult">(7)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.606" value="606">
                     <label for="caste.606" title="Naidu - All"><span class="lvwordellips">Naidu - All</span><span class="numberresult">(7)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.632" value="632">
                     <label for="caste.632" title="Patel - Kadva"><span class="lvwordellips">Patel - Kadva</span><span class="numberresult">(7)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.651" value="651">
                     <label for="caste.651" title="Sadgop"><span class="lvwordellips">Sadgop</span><span class="numberresult">(7)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.699" value="699">
                     <label for="caste.699" title="Thevar"><span class="lvwordellips">Thevar</span><span class="numberresult">(7)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1383" value="1383">
                     <label for="caste.1383" title="Jain -Oswal"><span class="lvwordellips">Jain -Oswal</span><span class="numberresult">(7)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.432" value="432">
                     <label for="caste.432" title="Brahmin - Nagar"><span class="lvwordellips">Brahmin - Nagar</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.433" value="433">
                     <label for="caste.433" title="Brahmin - Niyogi Nandavariki"><span class="lvwordellips">Brahmin - Niyogi Nandavariki</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.454" value="454">
                     <label for="caste.454" title="Brahmin - Vaidiki"><span class="lvwordellips">Brahmin - Vaidiki</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.560" value="560">
                     <label for="caste.560" title="Sikh - Lubana"><span class="lvwordellips">Sikh - Lubana</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.619" value="619">
                     <label for="caste.619" title="Nepali"><span class="lvwordellips">Nepali</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.640" value="640">
                     <label for="caste.640" title="Rajbhar"><span class="lvwordellips">Rajbhar</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.660" value="660">
                     <label for="caste.660" title="Setti Balija"><span class="lvwordellips">Setti Balija</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.662" value="662">
                     <label for="caste.662" title="Shimpi"><span class="lvwordellips">Shimpi</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.696" value="696">
                     <label for="caste.696" title=""><span class="lvwordellips"></span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.721" value="721">
                     <label for="caste.721" title="Vankar"><span class="lvwordellips">Vankar</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.722" value="722">
                     <label for="caste.722" title="Vannar"><span class="lvwordellips">Vannar</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1209" value="1209">
                     <label for="caste.1209" title="Orthodox"><span class="lvwordellips">Orthodox</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1239" value="1239">
                     <label for="caste.1239" title="Nadar"><span class="lvwordellips">Nadar</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1408" value="1408">
                     <label for="caste.1408" title="Sikh  - Nai"><span class="lvwordellips">Sikh  - Nai</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.392" value="392">
                     <label for="caste.392" title="Boyer"><span class="lvwordellips">Boyer</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.402" value="402">
                     <label for="caste.402" title="Brahmin - Davadnya"><span class="lvwordellips">Brahmin - Davadnya</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.407" value="407">
                     <label for="caste.407" title="Brahmin - Goswami"><span class="lvwordellips">Brahmin - Goswami</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.422" value="422">
                     <label for="caste.422" title="Brahmin - Kashmiri Pandit"><span class="lvwordellips">Brahmin - Kashmiri Pandit</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.460" value="460">
                     <label for="caste.460" title="Bunt"><span class="lvwordellips">Bunt</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.476" value="476">
                     <label for="caste.476" title="Dheevara"><span class="lvwordellips">Dheevara</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.491" value="491">
                     <label for="caste.491" title="Goala"><span class="lvwordellips">Goala</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.501" value="501">
                     <label for="caste.501" title="Gurjar"><span class="lvwordellips">Gurjar</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.532" value="532">
                     <label for="caste.532" title="Kongu Vellala Gounder"><span class="lvwordellips">Kongu Vellala Gounder</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.555" value="555">
                     <label for="caste.555" title="Lambani"><span class="lvwordellips">Lambani</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.575" value="575">
                     <label for="caste.575" title="Munnuru Kapu"><span class="lvwordellips">Munnuru Kapu</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.605" value="605">
                     <label for="caste.605" title="Naicker"><span class="lvwordellips">Naicker</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.620" value="620">
                     <label for="caste.620" title="Nhavi"><span class="lvwordellips">Nhavi</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.676" value="676">
                     <label for="caste.676" title="Sindhi - Sahiti"><span class="lvwordellips">Sindhi - Sahiti</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.734" value="734">
                     <label for="caste.734" title="Viswabrahmin"><span class="lvwordellips">Viswabrahmin</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.735" value="735">
                     <label for="caste.735" title="Vokaliga"><span class="lvwordellips">Vokaliga</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1214" value="1214">
                     <label for="caste.1214" title="Vania"><span class="lvwordellips">Vania</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1217" value="1217">
                     <label for="caste.1217" title=""><span class="lvwordellips"></span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1218" value="1218">
                     <label for="caste.1218" title="Dawoodi"><span class="lvwordellips">Dawoodi</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1428" value="1428">
                     <label for="caste.1428" title="Evangelical"><span class="lvwordellips">Evangelical</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.12877" value="12877">
                     <label for="caste.12877" title="Agri"><span class="lvwordellips">Agri</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.12891" value="12891">
                     <label for="caste.12891" title="Rajaka/Chakali"><span class="lvwordellips">Rajaka/Chakali</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.383" value="383">
                     <label for="caste.383" title="Banik"><span class="lvwordellips">Banik</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.403" value="403">
                     <label for="caste.403" title="Brahmin - Deshastha"><span class="lvwordellips">Brahmin - Deshastha</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.425" value="425">
                     <label for="caste.425" title="Brahmin - Kulin"><span class="lvwordellips">Brahmin - Kulin</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.427" value="427">
                     <label for="caste.427" title="Brahmin - Madhwa"><span class="lvwordellips">Brahmin - Madhwa</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.441" value="441">
                     <label for="caste.441" title="Brahmin - Sakaldwipi"><span class="lvwordellips">Brahmin - Sakaldwipi</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.461" value="461">
                     <label for="caste.461" title="CKP"><span class="lvwordellips">CKP</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.498" value="498">
                     <label for="caste.498" title="Gudia"><span class="lvwordellips">Gudia</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.507" value="507">
                     <label for="caste.507" title="Jangam"><span class="lvwordellips">Jangam</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.510" value="510">
                     <label for="caste.510" title="Kaibarta"><span class="lvwordellips">Kaibarta</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.529" value="529">
                     <label for="caste.529" title="Kharwar"><span class="lvwordellips">Kharwar</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.533" value="533">
                     <label for="caste.533" title="Konkani"><span class="lvwordellips">Konkani</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.540" value="540">
                     <label for="caste.540" title="Kulalar"><span class="lvwordellips">Kulalar</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.542" value="542">
                     <label for="caste.542" title="Kumawat"><span class="lvwordellips">Kumawat</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.543" value="543">
                     <label for="caste.543" title="Kumbara"><span class="lvwordellips">Kumbara</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.577" value="577">
                     <label for="caste.577" title="Maratha - Gomantak"><span class="lvwordellips">Maratha - Gomantak</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.617" value="617">
                     <label for="caste.617" title="Nayak"><span class="lvwordellips">Nayak</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.624" value="624">
                     <label for="caste.624" title="Panchal"><span class="lvwordellips">Panchal</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.652" value="652">
                     <label for="caste.652" title="Saha"><span class="lvwordellips">Saha</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.655" value="655">
                     <label for="caste.655" title="Saliya"><span class="lvwordellips">Saliya</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.688" value="688">
                     <label for="caste.688" title="Sutar"><span class="lvwordellips">Sutar</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.692" value="692">
                     <label for="caste.692" title="Tanti"><span class="lvwordellips">Tanti</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.708" value="708">
                     <label for="caste.708" title="Vaddera"><span class="lvwordellips">Vaddera</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1200" value="1200">
                     <label for="caste.1200" title="Anglo Indian"><span class="lvwordellips">Anglo Indian</span><span class="numberresult">(4)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.357" value="357">
                     <label for="caste.357" title="Nair - All"><span class="lvwordellips">Nair - All</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.376" value="376">
                     <label for="caste.376" title="Aryasamaj"><span class="lvwordellips">Aryasamaj</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.411" value="411">
                     <label for="caste.411" title="Brahmin - Halua"><span class="lvwordellips">Brahmin - Halua</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.435" value="435">
                     <label for="caste.435" title="Brahmin - Panda"><span class="lvwordellips">Brahmin - Panda</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.436" value="436">
                     <label for="caste.436" title="Brahmin - Pareek"><span class="lvwordellips">Brahmin - Pareek</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.456" value="456">
                     <label for="caste.456" title="Brahmin - Viswa"><span class="lvwordellips">Brahmin - Viswa</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.457" value="457">
                     <label for="caste.457" title="Brahmin - Vyas"><span class="lvwordellips">Brahmin - Vyas</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.474" value="474">
                     <label for="caste.474" title="Devendra Kula Vellalar"><span class="lvwordellips">Devendra Kula Vellalar</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.484" value="484">
                     <label for="caste.484" title="Gabit"><span class="lvwordellips">Gabit</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.485" value="485">
                     <label for="caste.485" title="Gandla"><span class="lvwordellips">Gandla</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.513" value="513">
                     <label for="caste.513" title="Kalinga Vysya"><span class="lvwordellips">Kalinga Vysya</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.523" value="523">
                     <label for="caste.523" title="Karmakar"><span class="lvwordellips">Karmakar</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.609" value="609">
                     <label for="caste.609" title="Naik"><span class="lvwordellips">Naik</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.626" value="626">
                     <label for="caste.626" title="Parit"><span class="lvwordellips">Parit</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.627" value="627">
                     <label for="caste.627" title="Parkava Kulam"><span class="lvwordellips">Parkava Kulam</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.661" value="661">
                     <label for="caste.661" title="Shah"><span class="lvwordellips">Shah</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.667" value="667">
                     <label for="caste.667" title="Sindhi - Hyderabadi"><span class="lvwordellips">Sindhi - Hyderabadi</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.687" value="687">
                     <label for="caste.687" title="Sundhi"><span class="lvwordellips">Sundhi</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.691" value="691">
                     <label for="caste.691" title="Tamil Yadava"><span class="lvwordellips">Tamil Yadava</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.694" value="694">
                     <label for="caste.694" title="Telaga"><span class="lvwordellips">Telaga</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.700" value="700">
                     <label for="caste.700" title="Thigala"><span class="lvwordellips">Thigala</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1402" value="1402">
                     <label for="caste.1402" title="Sikh - Kashyap Rajput"><span class="lvwordellips">Sikh - Kashyap Rajput</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1418" value="1418">
                     <label for="caste.1418" title="Brethren"><span class="lvwordellips">Brethren</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1424" value="1424">
                     <label for="caste.1424" title="Catholic - Syrian"><span class="lvwordellips">Catholic - Syrian</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1426" value="1426">
                     <label for="caste.1426" title="Christian - CMS"><span class="lvwordellips">Christian - CMS</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1442" value="1442">
                     <label for="caste.1442" title="Sikh-Bhatia"><span class="lvwordellips">Sikh-Bhatia</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.12883" value="12883">
                     <label for="caste.12883" title="Besta/Gangaputra"><span class="lvwordellips">Besta/Gangaputra</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.12892" value="12892">
                     <label for="caste.12892" title="Catholic - All "><span class="lvwordellips">Catholic - All </span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.378" value="378">
                     <label for="caste.378" title=""><span class="lvwordellips"></span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.388" value="388">
                     <label for="caste.388" title="Bhatraju"><span class="lvwordellips">Bhatraju</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.400" value="400">
                     <label for="caste.400" title="Brahmin - Brahmbhatt"><span class="lvwordellips">Brahmin - Brahmbhatt</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.405" value="405">
                     <label for="caste.405" title="Brahmin - Dravida"><span class="lvwordellips">Brahmin - Dravida</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.418" value="418">
                     <label for="caste.418" title="Brahmin - Jhijhotiya"><span class="lvwordellips">Brahmin - Jhijhotiya</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.419" value="419">
                     <label for="caste.419" title="Brahmin - Kannada Madhva"><span class="lvwordellips">Brahmin - Kannada Madhva</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.424" value="424">
                     <label for="caste.424" title="Brahmin - Kota"><span class="lvwordellips">Brahmin - Kota</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.449" value="449">
                     <label for="caste.449" title="Brahmin - Sri Vishnava"><span class="lvwordellips">Brahmin - Sri Vishnava</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.455" value="455">
                     <label for="caste.455" title="Brahmin - Velanadu"><span class="lvwordellips">Brahmin - Velanadu</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.464" value="464">
                     <label for="caste.464" title="Chasa"><span class="lvwordellips">Chasa</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.465" value="465">
                     <label for="caste.465" title="Chattada Sri Vaishnava"><span class="lvwordellips">Chattada Sri Vaishnava</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.472" value="472">
                     <label for="caste.472" title="Devadiga"><span class="lvwordellips">Devadiga</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.486" value="486">
                     <label for="caste.486" title="Ganiga"><span class="lvwordellips">Ganiga</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.493" value="493">
                     <label for="caste.493" title="Goswami"><span class="lvwordellips">Goswami</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.495" value="495">
                     <label for="caste.495" title="Gounder"><span class="lvwordellips">Gounder</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.509" value="509">
                     <label for="caste.509" title="Kachara"><span class="lvwordellips">Kachara</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.541" value="541">
                     <label for="caste.541" title="Kulita"><span class="lvwordellips">Kulita</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.546" value="546">
                     <label for="caste.546" title="Kummari"><span class="lvwordellips">Kummari</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.551" value="551">
                     <label for="caste.551" title="Kuruhina Shetty"><span class="lvwordellips">Kuruhina Shetty</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.581" value="581">
                     <label for="caste.581" title="Matang"><span class="lvwordellips">Matang</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.585" value="585">
                     <label for="caste.585" title="Meenavar"><span class="lvwordellips">Meenavar</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.587" value="587">
                     <label for="caste.587" title="Menon"><span class="lvwordellips">Menon</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.590" value="590">
                     <label for="caste.590" title="Mogaveera"><span class="lvwordellips">Mogaveera</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.631" value="631">
                     <label for="caste.631" title="Patel - Dodia"><span class="lvwordellips">Patel - Dodia</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.634" value="634">
                     <label for="caste.634" title="Patnaick"><span class="lvwordellips">Patnaick</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.636" value="636">
                     <label for="caste.636" title="Perika"><span class="lvwordellips">Perika</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.678" value="678">
                     <label for="caste.678" title="Sindhi - Shikarpuri"><span class="lvwordellips">Sindhi - Shikarpuri</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.682" value="682">
                     <label for="caste.682" title="Sowrashtra"><span class="lvwordellips">Sowrashtra</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.683" value="683">
                     <label for="caste.683" title="Sozhiya Vellalar"><span class="lvwordellips">Sozhiya Vellalar</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.685" value="685">
                     <label for="caste.685" title="Subarna Banik"><span class="lvwordellips">Subarna Banik</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.690" value="690">
                     <label for="caste.690" title="Tamboli"><span class="lvwordellips">Tamboli</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.716" value="716">
                     <label for="caste.716" title="Vaishnava"><span class="lvwordellips">Vaishnava</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.718" value="718">
                     <label for="caste.718" title="Valluvan"><span class="lvwordellips">Valluvan</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.720" value="720">
                     <label for="caste.720" title="Vanjara"><span class="lvwordellips">Vanjara</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.731" value="731">
                     <label for="caste.731" title="Vellama"><span class="lvwordellips">Vellama</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.736" value="736">
                     <label for="caste.736" title="Vysya"><span class="lvwordellips">Vysya</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1207" value="1207">
                     <label for="caste.1207" title=""><span class="lvwordellips"></span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1406" value="1406">
                     <label for="caste.1406" title="Sikh - Kshatriya"><span class="lvwordellips">Sikh - Kshatriya</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1407" value="1407">
                     <label for="caste.1407" title="Sikh - Ahluwalia"><span class="lvwordellips">Sikh - Ahluwalia</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1409" value="1409">
                     <label for="caste.1409" title="Sikh - Tonk Kshatriya"><span class="lvwordellips">Sikh - Tonk Kshatriya</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.1433" value="1433">
                     <label for="caste.1433" title="Mangalorean"><span class="lvwordellips">Mangalorean</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.12881" value="12881">
                     <label for="caste.12881" title="Sagara/Uppara"><span class="lvwordellips">Sagara/Uppara</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.12884" value="12884">
                     <label for="caste.12884" title="Boya"><span class="lvwordellips">Boya</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.12888" value="12888">
                     <label for="caste.12888" title="Kshatriya/Raju/Verma"><span class="lvwordellips">Kshatriya/Raju/Verma</span><span class="numberresult">(2)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.372" value="372">
                     <label for="caste.372" title="Ambalavasi"><span class="lvwordellips">Ambalavasi</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.373" value="373">
                     <label for="caste.373" title="Arekatica"><span class="lvwordellips">Arekatica</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.389" value="389">
                     <label for="caste.389" title="Bhavsar"><span class="lvwordellips">Bhavsar</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.394" value="394">
                     <label for="caste.394" title="Brahmin - Anavil"><span class="lvwordellips">Brahmin - Anavil</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.396" value="396">
                     <label for="caste.396" title="Brahmin - Barendra"><span class="lvwordellips">Brahmin - Barendra</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.412" value="412">
                     <label for="caste.412" title="Brahmin - Havyaka"><span class="lvwordellips">Brahmin - Havyaka</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.414" value="414">
                     <label for="caste.414" title="Brahmin - Hoysala"><span class="lvwordellips">Brahmin - Hoysala</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.417" value="417">
                     <label for="caste.417" title="Brahmin - Jhadua"><span class="lvwordellips">Brahmin - Jhadua</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.423" value="423">
                     <label for="caste.423" title="Brahmin - Kokanastha"><span class="lvwordellips">Brahmin - Kokanastha</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.438" value="438">
                     <label for="caste.438" title="Brahmin - Pushkarna"><span class="lvwordellips">Brahmin - Pushkarna</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.439" value="439">
                     <label for="caste.439" title="Brahmin - Rarhi"><span class="lvwordellips">Brahmin - Rarhi</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.447" value="447">
                     <label for="caste.447" title="Brahmin - Shrimali"><span class="lvwordellips">Brahmin - Shrimali</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.450" value="450">
                     <label for="caste.450" title="Brahmin - Stanika"><span class="lvwordellips">Brahmin - Stanika</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.478" value="478">
                     <label for="caste.478" title="Dhoba"><span class="lvwordellips">Dhoba</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.488" value="488">
                     <label for="caste.488" title="Gavali"><span class="lvwordellips">Gavali</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.492" value="492">
                     <label for="caste.492" title="Goan"><span class="lvwordellips">Goan</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.504" value="504">
                     <label for="caste.504" title="Jaalari"><span class="lvwordellips">Jaalari</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.512" value="512">
                     <label for="caste.512" title="Kalinga"><span class="lvwordellips">Kalinga</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.519" value="519">
                     <label for="caste.519" title="Kansari"><span class="lvwordellips">Kansari</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.537" value="537">
                     <label for="caste.537" title="Kshatriya - Bhavasar"><span class="lvwordellips">Kshatriya - Bhavasar</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.538" value="538">
                     <label for="caste.538" title="Kudumbi"><span class="lvwordellips">Kudumbi</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.539" value="539">
                     <label for="caste.539" title="Kulal"><span class="lvwordellips">Kulal</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.552" value="552">
                     <label for="caste.552" title="Kurumbar"><span class="lvwordellips">Kurumbar</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.554" value="554">
                     <label for="caste.554" title="Kutchi"><span class="lvwordellips">Kutchi</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.565" value="565">
                     <label for="caste.565" title="Mahendra"><span class="lvwordellips">Mahendra</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.571" value="571">
                     <label for="caste.571" title="Malayalee Variar"><span class="lvwordellips">Malayalee Variar</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.574" value="574">
                     <label for="caste.574" title="Mangalorean"><span class="lvwordellips">Mangalorean</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.588" value="588">
                     <label for="caste.588" title="Meru Darji"><span class="lvwordellips">Meru Darji</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.589" value="589">
                     <label for="caste.589" title="Modak"><span class="lvwordellips">Modak</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.594" value="594">
                     <label for="caste.594" title="Mudaliar - Arcot"><span class="lvwordellips">Mudaliar - Arcot</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.595" value="595">
                     <label for="caste.595" title="Mudaliar - Saiva"><span class="lvwordellips">Mudaliar - Saiva</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.598" value="598">
                     <label for="caste.598" title="Mukkulathor"><span class="lvwordellips">Mukkulathor</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.600" value="600">
                     <label for="caste.600" title="Muthuraja"><span class="lvwordellips">Muthuraja</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.612" value="612">
                     <label for="caste.612" title="Nair - Vilakkithala"><span class="lvwordellips">Nair - Vilakkithala</span><span class="numberresult">(1)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" name="caste[]" class="caste" onclick="submit_refine_panel(this);" id="caste.614" value="614">
                     <label for="caste.614" title="Nambiar"><span class="lvwordellips">Nambiar</span><span class="numberresult">(1)</span></label>
                        </li>
                            
                       
                     </ul>
                    </div>
                 </div>
            </li>
                        <li class="panel panel-default">
                   <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" href="#FilterTungue" aria-expanded="false">Mother Tongue</a>
                  </h4>
                 </div>
                 <div id="FilterTungue" class="panel-collapse collapse">
                    <div class="panel-body Max-height-filter">
                    <ul>
                    <li class="lvcheckbox">
                     <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.0" value="0">
                     <label for="mother_tongue.0" title="all"><span class="lvwordellips">All</span><span class="numberresult"></span></label>
                  </li>
                                              <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.51" value="51">
                     <label for="mother_tongue.51" title="Hindi"><span class="lvwordellips">Hindi</span><span class="numberresult">(15256)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.52" value="52">
                     <label for="mother_tongue.52" title="Punjabi"><span class="lvwordellips">Punjabi</span><span class="numberresult">(1830)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1116" value="1116">
                     <label for="mother_tongue.1116" title="Malayalam"><span class="lvwordellips">Malayalam</span><span class="numberresult">(1096)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1127" value="1127">
                     <label for="mother_tongue.1127" title="Telugu"><span class="lvwordellips">Telugu</span><span class="numberresult">(926)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1118" value="1118">
                     <label for="mother_tongue.1118" title="Marathi"><span class="lvwordellips">Marathi</span><span class="numberresult">(743)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1126" value="1126">
                     <label for="mother_tongue.1126" title="Tamil"><span class="lvwordellips">Tamil</span><span class="numberresult">(716)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.329" value="329">
                     <label for="mother_tongue.329" title="Bangali"><span class="lvwordellips">Bangali</span><span class="numberresult">(513)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1128" value="1128">
                     <label for="mother_tongue.1128" title="Urdu"><span class="lvwordellips">Urdu</span><span class="numberresult">(337)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.327" value="327">
                     <label for="mother_tongue.327" title="Gujarati"><span class="lvwordellips">Gujarati</span><span class="numberresult">(257)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1110" value="1110">
                     <label for="mother_tongue.1110" title="Kannada"><span class="lvwordellips">Kannada</span><span class="numberresult">(235)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.337" value="337">
                     <label for="mother_tongue.337" title="Other"><span class="lvwordellips">Other</span><span class="numberresult">(201)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1121" value="1121">
                     <label for="mother_tongue.1121" title="Oriya"><span class="lvwordellips">Oriya</span><span class="numberresult">(197)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1104" value="1104">
                     <label for="mother_tongue.1104" title="English"><span class="lvwordellips">English</span><span class="numberresult">(150)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1100" value="1100">
                     <label for="mother_tongue.1100" title="Bhojpuri"><span class="lvwordellips">Bhojpuri</span><span class="numberresult">(125)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1098" value="1098">
                     <label for="mother_tongue.1098" title="Assamese"><span class="lvwordellips">Assamese</span><span class="numberresult">(91)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1108" value="1108">
                     <label for="mother_tongue.1108" title="Haryanavi"><span class="lvwordellips">Haryanavi</span><span class="numberresult">(89)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1124" value="1124">
                     <label for="mother_tongue.1124" title="Sindhi"><span class="lvwordellips">Sindhi</span><span class="numberresult">(68)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1097" value="1097">
                     <label for="mother_tongue.1097" title="Arabic"><span class="lvwordellips">Arabic</span><span class="numberresult">(60)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1119" value="1119">
                     <label for="mother_tongue.1119" title="Marwari"><span class="lvwordellips">Marwari</span><span class="numberresult">(60)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1109" value="1109">
                     <label for="mother_tongue.1109" title="Himachali"><span class="lvwordellips">Himachali</span><span class="numberresult">(54)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1099" value="1099">
                     <label for="mother_tongue.1099" title="Awadhi"><span class="lvwordellips">Awadhi</span><span class="numberresult">(49)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1106" value="1106">
                     <label for="mother_tongue.1106" title="Garhwali"><span class="lvwordellips">Garhwali</span><span class="numberresult">(44)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1112" value="1112">
                     <label for="mother_tongue.1112" title="Konkani"><span class="lvwordellips">Konkani</span><span class="numberresult">(38)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1113" value="1113">
                     <label for="mother_tongue.1113" title="Kumaoni"><span class="lvwordellips">Kumaoni</span><span class="numberresult">(37)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1101" value="1101">
                     <label for="mother_tongue.1101" title="Chattisgari"><span class="lvwordellips">Chattisgari</span><span class="numberresult">(29)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.12876" value="12876">
                     <label for="mother_tongue.12876" title="Tulu"><span class="lvwordellips">Tulu</span><span class="numberresult">(25)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1122" value="1122">
                     <label for="mother_tongue.1122" title="Rajasthani"><span class="lvwordellips">Rajasthani</span><span class="numberresult">(23)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.328" value="328">
                     <label for="mother_tongue.328" title="Persian"><span class="lvwordellips">Persian</span><span class="numberresult">(20)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1102" value="1102">
                     <label for="mother_tongue.1102" title="Coorgi"><span class="lvwordellips">Coorgi</span><span class="numberresult">(19)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1120" value="1120">
                     <label for="mother_tongue.1120" title="Nepali"><span class="lvwordellips">Nepali</span><span class="numberresult">(17)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1103" value="1103">
                     <label for="mother_tongue.1103" title="Dogri"><span class="lvwordellips">Dogri</span><span class="numberresult">(13)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1111" value="1111">
                     <label for="mother_tongue.1111" title="Kashmiri"><span class="lvwordellips">Kashmiri</span><span class="numberresult">(6)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1114" value="1114">
                     <label for="mother_tongue.1114" title="Kutchi"><span class="lvwordellips">Kutchi</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1115" value="1115">
                     <label for="mother_tongue.1115" title="Magahi"><span class="lvwordellips">Magahi</span><span class="numberresult">(5)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1105" value="1105">
                     <label for="mother_tongue.1105" title="French"><span class="lvwordellips">French</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1117" value="1117">
                     <label for="mother_tongue.1117" title="Manipuri"><span class="lvwordellips">Manipuri</span><span class="numberresult">(3)</span></label>
                        </li>
                                                  <li class="lvcheckbox">
                      <input type="checkbox" class="mother_tongue" name="mother_tongue[]" onclick="submit_refine_panel(this);" id="mother_tongue.1125" value="1125">
                     <label for="mother_tongue.1125" title="Spanish"><span class="lvwordellips">Spanish</span><span class="numberresult">(2)</span></label>
                        </li>
                                                 
                     </ul>
                    </div>
                 </div>
            </li>
    
        </ul>    
        <div class="clear" style="height:50px;"></div> 
        <div class="refine-float-btn"><button type="submit" class="btn btn-theme padd-10 btn-block ripplelink" id="listingHideShow1" data-original-title="" title=""><i class="fa fa-filter"></i> Filter Search</button></div>
        
        
     
          
       </div>
       
      </div>
         </div>
                 
     <div class="col-md-9 col-sm-12 col-xs-12 no-padding-sm pro-m10"> 
       
                 
        <div class="profile-listing" id="profile-listing" style="padding-bottom:30px;">  

        <div class="row"><div class="col-md-12 col-sm-12 no-padding">
         <div class="found-profile-panel">
         
            <div class="col-md-12 col-sm-12"><h2><span>26806 </span> Matched Profiles</h2>
            <a href="{{ route('search') }}" class="btn btn-theme btn-sm ripplelink pull-right modify-btn">Modify Search</a>
            </div>
            
            
            <div class="col-md-12 col-sm-12">
            <p class="search-criteria lvwordellips">
                        
            </p></div>
            
            
            
         </div>
        </div></div>
            
        <ul class="ul-profile">
@foreach($search_results as $result)
        <li>
            <div class="strip_profile" style="visibility: visible; animation-name: fadeIn;">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 padlr0">
                        <div class="img_list">
                            <a href="javascript:;" target="_blank">
                                <img src="https://res.cloudinary.com/www-lovevivah-com/image/upload/c_fill,f_auto,g_face,h_292,w_252/v1/photos/CFR_P241537_1474606231.JPG" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 padlr0">
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 padlr0 min-height-mobile">
                        <div class="Profile_list-name">              
                            <h3>
                                <a href="javascript:;" target="_blank">
                                <span class="lvNameellips"> {{$result->name}}</span></a> <span class="lv-id">{{$result->unique_id}}</span>
                            </h3>              
                         
                            <ul class="add_info">

                                <li>Age</li>
                                <li>30 Years</li> 
                                <li>Height</li>
                                <li>157cm - 5ft 2in</li>
                                <li>Location</li>
                                <li>Haryana</li>
                                <li>Religion</li>
                                <li>Hindu</li>
                                <li>Caste</li>
                                <li>Arora</li>
                                <li>Mother Tongue</li>
                                <li>Hindi</li>
                                <li>Profession</li>
                                <li>Consultant</li>
                                <li>Education</li>
                                <li>BE/B.Tech</li>   
                                <li>Annual Income</li>
                                <li>INR 20 Lakhs to 30 Lakhs</li>   
                                                 
                            </ul>
                              
                        </div>
                      </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 padlr0 btn-bottom-mobile">
                        <div class="profile-actions">
                          <div class="gallery">
                            <p>
                                <a href="javascript:;" class="p-action-btn btn-grey-light border-r2 ripplelink" target="_blank">
                                <i class="fa fa-eye"><strong>View</strong></i> <span>View</span></a>
                            </p>
                                            
                            <p>
                                <a href="javascript:;" data-toggle="modal" data-target="#loginModal" class="p-action-btn btn-grey-light border-r2 ripplelink">
                                    <i class="fa fa-phone"><strong>Contact</strong></i> <span>Contact</span></a>
                            </p>
                                                     
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
 @endforeach
</ul>  
 
            
        </div>
        
                
     </div> 
     
     
           
    </div>            
   </div>

@endsection
