





<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title></title>
    <style>
    
      #map {
        height: 80%;
      }
    
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>



  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>


<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">







<style>



.section_padding {
padding: 60px 40px;
}

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

background: #ec5574;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}



.res_center_css{
position:absolute;top:50%;left:50%;margin-top: -50px;margin-left -50px;width:100px;height:100px;
}



.category_post1{
background-color: #008080;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
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



.cal_btn{
background-color: #008080;
padding: 10px;
color:white;
font-size:14px;
border: none;
cursor: pointer;
text-align: center;
}
.cal_btn:hover {
background: black;
color:white;
}



.cal_css{
background-color: green;
padding: 10px;
color:white;
font-size:14px;
border: none;
cursor: pointer;
text-align: center;
}
.cal_css:hover {
background: black;
color:white;
}



.com_btn{
background-color: purple;
padding: 10px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.com_btn:hover {
background: black;
color:white;
}

	
</style>

<html>
  <body>

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
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">


 <li class="navgate_no"><a title='View Dashboard' href="index.php" style="color:white;font-size:14px;">
<button class="category_post1">Dashboard</button></a></li>
       
      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->



<br><br>

      <h3>Map Covid19 Infections Data for all USA Province/States</h3><br>
<?php
include('settings.php');
?>

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

    <div  id="map"></div>

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



var lngx = '-75.000000';
var latx = '43.000000';
//center: new google.maps.LatLng(32.944012, -85.953850),

        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(latx, lngx),
          zoom: 4
        });
        var infoWindow = new google.maps.InfoWindow;

$('#loader').fadeIn(400).html('<br><div style="color:black;background:#c1c1c1;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>  &nbsp;Please Wait, Google Map is being Loaded...</div>');

          downloadUrl('map_public_backend.php', function(data) {
			 // downloadUrl('map_private_backend.php?identity='+identity, function(data) {
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
"<div style='background:#008080;color:white;padding:10px;'>Covid19 Infections Maps for (<b>Province/State: " + Province_State + " </b>)</div><br />" +


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
		  
		  // });  // close jquery clickbutton
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

/*
 $('#myModal_map').on('shown.bs.modal', function(){
    //init();
initMap();

    });
*/

    </script>
  
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_map_keys; ?>&callback=initMap">
    </script>
  </body>
</html>





























