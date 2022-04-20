<?php
error_reporting(0); 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: GSQL-TIMEOUT, Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
//add header GSQL-TIMEOUT
?>



<!DOCTYPE html>
<html lang="en">

<head>
 <title> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">







<style>
.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}
  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:#008080;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }


.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: #008080;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}




.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: #008080;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: #008080;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:fuchsia;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: black;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}




.e_search_form{
width: 38vw;
height:60px;
padding:10px;
cursor:pointer;
border:none;
border-radius:15%;
color:black;
font-size:16px;
background:white;

//transform: skew(-22deg);
margin-left:-90px;

}

.e_search_form:hover{

border-style: solid; border-width:4px; border-color: #824c4e;
background: #dddddd;
color: black;
}



@media screen and (max-width: 768px) {
  .e_search_form{

  width: 100%;
  padding: 20px;
margin-left:0px;
  }
}



@media screen and (max-width: 600px) {
  .e_search_form{
  width: 100%;
  padding: 20px 
margin-left:0px; 
  }
}





.readmore_btn{
background-color: #008080;
padding: 6px;
color:white;
font-size:14px;
border-radius: 10%;
border: none;
cursor: pointer;
text-align: center;
//width:100%;
z-index: -999;
}
.readmore_btn:hover {
background: black;
color:white;
}	






.category_post1{
background-color: #008080;
padding: 10px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
width:300px;
}
.category_post1:hover {
background: black;
color:white;
width:200px;
}



.category_post1x{
background-color: purple;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1x:hover {
background: black;
color:white;
}



.category_post1xx{
background-color: #3b5998;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1xx:hover {
background: black;
color:white;
}


.compare_css{
background-color: #008080	;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.compare_css:hover {
background: black;
color:white;
}

			
</style>





    </head>
    <body>

 
</head>
<body>




<?php

$token = '1';
$usern  = '1';

?>



<script>

// stopt all bootstrap drop down menu from closing on click inside
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});


</script>


<!--start left column all-->

    <div class="left-column-all left_shifting">

<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo1.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">






 <li class="navgate_no"><a title='Map Covid19 Infections Data for all <br>USA Province/States' href="create_event.php" style="color:white;font-size:14px;">
<button class="category_post1">Map Covid19 Infections Data for all <br>USA Province/States</button></a></li>


 <li class="navgate_no"><a title='Compare Covid19 Infections Statistical Graph/Chart for all<br>USA Province/States' data-toggle='modal' data-target='#myModal_covid' style="color:white;font-size:14px;">
<button class="category_post1">Compare Covid19 Infections Statistical Graph/Chart for all<br>USA Province/States </button></a></li>


      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->




<div class='row'>
<br>
<br>
<br>

<center><h1>US COVID-19 Infections Cases <BR>
<b style='color:purple'>Johns Hopkins Data Analytic Insights</b></h1>

</center><br>

&nbsp;&nbsp;&nbsp;&nbsp;<b>Data Source: </b> 
<a href='https://github.com/CSSEGISandData/COVID-19/blob/master/csse_covid_19_data/csse_covid_19_daily_reports_us/01-01-2021.csv'>
https://github.com/CSSEGISandData/COVID-19/blob/master/csse_covid_19_data/csse_covid_19_daily_reports_us/01-01-2021.csv</a><br>

<br>










<!--   covid19 modal starts here -->


<div class="container_search_modal">

  <div class="modal fade " id="myModal_covid" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1  modaling_sizing">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Compare Covid19 Infections Statistical Graph/Chart for all USA Province/States </h4>
        </div>
        <div class="modal-body">

          
<div class="col-sm-12 form-group">
Compare Covid19 Infections Statistical Graph/Chart for all USA Province/States
</div>
<br>


        <script>


$(document).ready(function(){
$('#save_btn').click(function () {
	
var compare = $('#ps').val();

if(compare==""){
alert('please Select Covid19 Data Parameter to Compare..');
return false;
}


alert('Data in Progress. Click ok to be Redirected to Covid19 Infections Data Comparism');
$('#ps').val('');

window.location.href = 'statistics_all.php?compare_id='+compare;
		
	})
					
});



        </script>

<div class="col-sm-12 form-group">
<label>Select Covid19 Infection Cases Data to Compare </label>
<select class="form-control select_btn ps" name="ps" id="ps" required>
<option value="">---Select ---</option>
<option value="Confirmed">Confirmed Cases</option>
<option value="Deaths">Deaths Cases</option>
<option value="Recovered">Recovered Cases</option>
<option value="Active">Active Cases</option>
<option value="Incident_Rate">Incident Rate</option>
<option value="Total_Test_Results">Total Test Results</option>
<option value="Case_Fatality_Ratio">Case Fatality Ratio</option>

</select>
</div>
<!--form START-->

<div class="col-sm-12 form-group">

                    <input type="button" id="save_btn" class="pull-right compare_css" value="Search and Compare Now" />
<br><br>

</div>
<br><br><br><br>

</div><br><br>

<br><br>




    


                  

<!--form ENDS-->


        </div>
        <div class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--  covid19 modal ends here -->












<!--Start Left-->
<div class='col-sm-0'>





</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-12'>






<!-- Main Post Database query starts here -->









<style>
.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


</style>

<script>
        
  

</script>


        <div class="content">

            <?php

//exit();


//error_reporting(0);



// Get Covid19 Data Records from vertex covid19_reports in Tigergraph Database

include('settings.php');
$url ="$tg_url:9000/graph/$graph_db/vertices/$table_covid19?sort=FIPS";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken")); 
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("accept: application/json", 'Content-Type: application/json'));  
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 

if($output ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Cannot connect to Tigergraph Database. Ensure there is Internet Connection and Try Again</div>";
//exit();
}



$json = json_decode($output, true);
$msg = $json["message"];
$vertex_id = $json["results"][0]["v_id"];
$email_x = $vertex_id;

if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: ($msg)</div>";
exit();
}


if($vertex_id ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>No Records Stored in  Tigergraph Database Yet..</div>";
exit();
}

/*
Province_State,Country_Region,Last_Update,Lat,Long_,Confirmed,Deaths,Recovered,Active,
FIPS,Incident_Rate,Total_Test_Results,People_Hospitalized,Case_Fatality_Ratio,UID,ISO3,Testing_Rate,Hospitalization_Rate
*/


echo '<table border="0" cellspacing="2" cellpadding="2" class="table table-striped_no table-bordered table-hover"> 
      <tr> 
          <th> <font face="Arial">FIPS</font> </th> 
          <th> <font face="Arial">Province_State</font> </th> 
          <th> <font face="Arial">Country_Region</font> </th> 
          <th> <font face="Arial">Last_Update</font> </th> 
<th> <font face="Arial">Confirmed</font> </th> 
<th> <font face="Arial">Deaths</font> </th> 
<th> <font face="Arial">Recovered</font> </th> 
<th> <font face="Arial">Active</font> </th> 
<th> <font face="Arial">Incident_Rate</font> </th> 
<th> <font face="Arial">Total_Test_Results</font> </th> 
 


      </tr>';



foreach($json["results"] as $row){

$vertex_id = $row["v_id"];
$vertex_type = $row["v_type"];
$id = $vertex_id;

$Province_State = htmlentities(htmlentities($id, ENT_QUOTES, "UTF-8"));

$FIPS = htmlentities(htmlentities($row["attributes"]["FIPS"], ENT_QUOTES, "UTF-8"));
$Country_Region = htmlentities(htmlentities($row["attributes"]["Country_Region"], ENT_QUOTES, "UTF-8"));
$Last_Update = htmlentities(htmlentities($row["attributes"]["Last_Update"], ENT_QUOTES, "UTF-8"));
$Lat = htmlentities(htmlentities($row["attributes"]["Lat"], ENT_QUOTES, "UTF-8"));
$Long_ = htmlentities(htmlentities($row["attributes"]["Long_"], ENT_QUOTES, "UTF-8"));
$Confirmed = htmlentities(htmlentities($row["attributes"]["Confirmed"], ENT_QUOTES, "UTF-8"));
$Deaths = htmlentities(htmlentities($row["attributes"]["Deaths"], ENT_QUOTES, "UTF-8"));
$Recovered = htmlentities(htmlentities($row["attributes"]["Recovered"], ENT_QUOTES, "UTF-8"));
$Active = htmlentities(htmlentities($row["attributes"]["Active"], ENT_QUOTES, "UTF-8"));
$Incident_Rate = htmlentities(htmlentities($row["attributes"]["Incident_Rate"], ENT_QUOTES, "UTF-8"));
$Total_Test_Results = htmlentities(htmlentities($row["attributes"]["Total_Test_Results"], ENT_QUOTES, "UTF-8"));

$People_Hospitalized = htmlentities(htmlentities($row["attributes"]["People_Hospitalized"], ENT_QUOTES, "UTF-8"));

$Case_Fatality_Ratio = htmlentities(htmlentities($row["attributes"]["Case_Fatality_Ratio"], ENT_QUOTES, "UTF-8"));
$UID = htmlentities(htmlentities($row["attributes"]["UID"], ENT_QUOTES, "UTF-8"));
$ISO3 = htmlentities(htmlentities($row["attributes"]["ISO3"], ENT_QUOTES, "UTF-8"));
$Testing_Rate = htmlentities(htmlentities($row["attributes"]["Testing_Rate"], ENT_QUOTES, "UTF-8"));
$Hospitalization_Rate = htmlentities(htmlentities($row["attributes"]["Hospitalization_Rate"], ENT_QUOTES, "UTF-8"));

            ?>







                <div class='post'  id="post_<?php echo $id; ?>">


<?php
if($Country_Region){
?>



<tr> 
                  <td><?php echo $FIPS; ?></td> 
               
 <td><?php echo $Province_State; ?></td> 
                  <td><?php echo $Country_Region; ?></td> 
 <td><?php echo $Last_Update; ?></td> 
                  <td><?php echo $Confirmed; ?></td> 
 <td><?php echo $Deaths; ?></td> 
                  <td><?php echo $Recovered; ?></td> 
 <td><?php echo $Active; ?></td> 
                  <td><?php echo $Incident_Rate; ?></td> 
 <td><?php echo $Total_Test_Results; ?></td> 


 <td>


<button title="Province Map Data" data-toggle="modal" data-target="#myModal_map" class="category_post1x btn_action_map" data-lat="<?php echo $Lat; ?>" data-lng="<?php echo $Long_; ?>" data-id="<?php echo $id; ?>"  data-identity="<?php echo $FIPS; ?>">
<span style="font-size:26px;color:white;" class="fa fa-map-marker" aria-hidden="true"></span>Map (<b><?php echo $Province_State; ?></b>) Province</button>




<button class="category_post1xx"><a style='color:white;' href='statistics.php?fips=<?php echo $FIPS; ?>&ps=<?php echo $Province_State; ?>' title="Graph/Chart Statistics"  >
<span style="font-size:26px;color:white;" class="fa fa-bar-chart"></span> View Graph/Chart of (<b><?php echo $Province_State; ?></b>) Province</a></button>
</td> 



              </tr>


    






<?php } ?>








                   
                </div>

            <?php
            }
            ?>




<!-- Main Post Database query ends here-->



</div>








</div>
<!--End Right-->

</div>
<!--Row-->











<style>

.title_css{
//background: green;
color:green;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: #008080;
color:white;
padding:6px;
cursor:pointer;
border:none;
border-radius:10%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: green;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.offering_css:hover{
background: black;
color:white;

}



.cat_css{
background: #ec5574;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_css:hover{
background: black;
color:white;

}



</style>



<!--form START-->











<!-- footer Section start -->


<!-- footer Section ends -->










<!-- map  modal starts here -->


<div class="container_map">

  <div class="modal fade" id="myModal_map" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center pull-right1_no modaling_sizing1  full-screen-modal_no">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Covid19 Infections Province/State Map Locations</h4>
        </div>
        <div class="modal-body">





      <h3>Covid19 Infections Maps Locations</h3>

<!-- start map loading-->
<style>
#map {
        height: 80%;
      }
    
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
.res_center_css{
position:absolute;top:50%;left:50%;margin-top: -50px;margin-left -50px;width:100px;height:100px;
}

</style>

<div id="loader" class='res_center_css'></div>

    <div style='width:600px; height:600px;' id="map"></div>

    <script>


      var customLabel = {

        Vaccine: {
          label: 'P'
        }
       

      };
//center: new google.maps.LatLng(-33.863276, 151.207977),
//zoom: 12
 
/*
 var url_content1 = window.location.href;
var url_p1 = new URL(url_content1);
var identity = url_p1.searchParams.get("identity");
*/



        function initMap() {
//function {
$('.btn_action_map').click(function(){
//$(document).on( 'click', '.btn_action_map', function(){ 


var postid = $(this).data('id');
var title = $(this).data('title');
var identity = $(this).data('identity');
var lngx = $(this).data('lng');
var latx = $(this).data('lat');

/*
alert(postid);
alert(title);
alert(identity);
alert(lngx);
alert(latx);
*/

//center: new google.maps.LatLng(32.944012, -85.953850),

        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(latx, lngx),
          zoom: 11
        });
        var infoWindow = new google.maps.InfoWindow;

$('#loader').fadeIn(400).html('<br><div style="color:black;background:#c1c1c1;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>  &nbsp;Please Wait, Google Map is being Loaded...</div>');

          //downloadUrl('map1_backend.php', function(data) {
			  downloadUrl('map_private_backend.php?identity='+identity, function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');


              var type = 'must_inplace';

var Province_State = markerElem.getAttribute('Province_State');
              var FIPS = markerElem.getAttribute('FIPS');
 var Country_Region = markerElem.getAttribute('Country_Region');
var Last_Update = markerElem.getAttribute('Last_Update');
var Confirmed = markerElem.getAttribute('Confirmed');
var Deaths = markerElem.getAttribute('Deaths');
var Recovered = markerElem.getAttribute('Recovered');
var Active = markerElem.getAttribute('Active');
var Incident_Rate = markerElem.getAttribute('Incident_Rate');
var Total_Test_Results = markerElem.getAttribute('Total_Test_Results');
var People_Hospitalized = markerElem.getAttribute('People_Hospitalized');
var Case_Fatality_Ratio = markerElem.getAttribute('Case_Fatality_Ratio');	
var UID = markerElem.getAttribute('UID');
              var UID = markerElem.getAttribute('UID');
var ISO3 = markerElem.getAttribute('ISO3');
var Testing_Rate = markerElem.getAttribute('Testing_Rate');



              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

$('#loader').hide();

              var infowincontent = document.createElement('div');
             var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};


var pic ='public.png';
var private ='private.png';


//if(data_type=='public'){
                var map_data = "<div style='background:#c1c1c1; border-bottom: 2px dashed purple;'>" +
"<div style='background:#008080;color:white;padding:10px;'>Covid19 Infections Map Location</div><br />" +


"<span><b>FIPS:</b> " + FIPS + "</span><br />" +
"<span><b>Province_State:</b> " + Province_State + "</span><br />" +
"<span><b>Country_Region:</b> " + Country_Region + "</span><br />" +
"<span><b>Confirmed: </b>" + Confirmed + "</span><br />" +
"<span><b>Deaths: </b>" + Deaths + "</span><br />" +
"<span><b>Recovered: </b>" + Recovered + "</span><br />" +
"<span><b>Active: </b>" + Active + "</span><br />" +
"<span><b>Incident_Rate: </b>" + Incident_Rate + "</span><br />" +
"<span><b>Total_Test_Results: </b>" + Total_Test_Results + "</span><br />" +
"<span><b>People_Hospitalized: </b>" + People_Hospitalized + "</span><br />" +
"<span><b>Case_Fatality_Ratio: </b>" + Case_Fatality_Ratio + "</span><br />" +
"<span><b>UID: </b>" + UID + "</span><br />" +
"<span><b>ISO3: </b>" + ISO3 + "</span><br />" +
"<span><b>Testing_Rate: </b>" + Testing_Rate + "</span><br />" +


"<span><b><span class='fa fa-calendar'></span>Last_Updated Time: </b>" + Last_Update + "</span><br />" +


                    "</div>";
//}



              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label,
 title : 'welcome'
              });
              marker.addListener('click', function() {
                //infoWindow.setContent(infowincontent);

//infoWindow.setContent('<b>'+name + "</b><br>" + address);

infoWindow.setContent(map_data);
                infoWindow.open(map, marker);
              });
            });
          });
		  
		   });  // close jquery clickbutton
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}

 $('#myModal_map').on('shown.bs.modal', function(){
    //init();
initMap();

    });


    </script>

  


<!-- end map loading-->





        </div>
        <div class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- map modal ends here -->


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_map_keys; ?>&callback=initMap">
    </script>







   
</body>
</html>



















