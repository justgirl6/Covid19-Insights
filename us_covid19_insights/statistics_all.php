
<?php
$compare_id =$_GET['compare_id'];
if($compare_id==''){


echo "<script>
alert('Direct Access to Covid19 Statistical Comparism not allowed');
window.setTimeout(function() {
    window.location.href = 'index.php';
}, 1000);
</script><br><br>";

}
?>



<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title></title>

  </head>



  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>


<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<style>






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


        
<li class="navgate"><a  href="index.php" class='img-circle' style="border-style: solid; border-width:4px; border-color:orange;color:white;font-size:14px;">Dashboard</a></li>
 
      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->





<style>
/*
body {
    width: 660px;
    margin: 0 auto;
}
*/
</style>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script type="text/javascript">  

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(column_chart);
function column_chart() {

$('#loader1').fadeIn(400).html('<div style="background:#ddd;color:black;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp; &nbsp;Please Wait, Graph/Chart Statistical Data is being Loaded.</div>');

var st ='<?php echo $compare_id; ?>';
var res = $.ajax({
url: 'chart_ok_all.php',
data:{st:st},
dataType:"json",
async: false,
success: function(res)
{

  var options = {'title':'Statistical Graphs Comparism of Covid-19 (<?php echo $compare_id; ?> Cases) for all US Provinces/States', 'width':1450, 'height':1200,
 series: {
            0: { color: 'purple' },
            1: { color: 'navy' },
          
          }
};


var data = new google.visualization.arrayToDataTable(res);
var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_data'));
chart.draw(data, options);
$('#loader1').hide();

}
}).responseText;
}




google.charts.setOnLoadCallback(bar_chart);
function bar_chart() {


$('#loader2').fadeIn(400).html('<div style="background:#ddd;color:black;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp; &nbsp;Please Wait, Graph/Chart Statistical Data is being Loaded</div>');

var st ='<?php echo $compare_id; ?>';
var res1 = $.ajax({
url: 'chart_ok_all.php',
data:{st:st},
dataType:"json",
async: false,
success: function(res1)
{

  var options = {'title':'Statistical Graphs Comparism of Covid-19 (<?php echo $compare_id; ?> Cases) for all US Provinces/States', 'width':1450, 'height':1200,
 series: {
            0: { color: '#800000' },
            1: { color: 'orange' },
          
          }
};


var data = new google.visualization.arrayToDataTable(res1);
var chart = new google.visualization.BarChart(document.getElementById('areachart_data'));
chart.draw(data, options);
$('#loader2').hide();

}
}).responseText;
}







google.charts.setOnLoadCallback(pie_chart);
function pie_chart() {


var st ='<?php echo $compare_id; ?>';
$('#loader3').fadeIn(400).html('<div style="background:#ddd;color:black;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp; &nbsp;Please Wait, Graph/Chart Statistical Data is being Loaded</div>');

var res2 = $.ajax({
url: 'chart_ok_all.php',
data:{st:st},
dataType:"json",
async: false,
success: function(res2)
{

  var options = {'title':'Statistical Graphs Comparism of Covid-19 (<?php echo $compare_id; ?> Cases) for all US Provinces/States', 'width':1800, 'height':1800,
 series: {
            0: { color: '#800000' },
            1: { color: 'orange' },
          
          }
};


var data = new google.visualization.arrayToDataTable(res2);
var chart = new google.visualization.PieChart(document.getElementById('piechart_data'));
chart.draw(data, options);
$('#loader3').hide();

}
}).responseText;
}



</script>

<br><br>
<h3><center>Statistical Graphs Comparism of Covid-19 <b style='color:#800000;font-size:20px;'> (<?php echo $compare_id; ?> Cases)</b> for all US Provinces/States
</center></h3>


<?php


// Get Covid19 Data Records from vertex covid19_reports in Tigergraph Database

include('settings.php');
$url ="$tg_url:9000/graph/$graph_db/vertices/$table_covid19";

//$url =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_covid19.'?filter=FIPS="'."$fips".'" ';

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
echo "<div style='background:red;color:white;padding:8px;border:none;'>No Records found for Covid-19 Datta in  Tigergraph Database Yet..</div>";
exit();
}




?>

<div id="loader1"></div>
    <div id="areachart_data"></div>

<div id="loader2"></div>
    <div id="columnchart_data"></div>



<div id="loader3"></div>
    <div id="piechart_data"></div>



    </div>



<div id="loader" class='res_center_css'></div>

  </body>
</html>






