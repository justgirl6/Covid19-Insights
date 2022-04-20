
<?php
error_reporting(0);


ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);


$compare_id = $_GET['st'];

$data[] = array("$compare_id Cases", "$compare_id");



// Get Covid19 Data Records from vertex covid19_reports in Tigergraph Database

include('settings.php');
$url ="$tg_url:9000/graph/$graph_db/vertices/$table_covid19";

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

$data[] = array($Province_State,(int)$Confirmed);

}

echo json_encode($data);



