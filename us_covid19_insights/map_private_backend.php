<?php 
//error_reporting(0);
//session_start();
//$userid_sess_data = htmlentities(htmlentities($_SESSION['uid2'], ENT_QUOTES, "UTF-8"));
//$email_sess =  htmlentities(htmlentities($_SESSION['email2'], ENT_QUOTES, "UTF-8"));
 // ensure that there is no whitespace and included file settings.php does not have whitespace
header("Content-type: text/xml");
include('settings.php');
// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
$identity = strip_tags($_GET['identity']);
//$identity = '1.0';
$url =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_covid19.'?filter=FIPS="'."$identity".'" ';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken"));  
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 
if($output ==''){
echo "Cannot connect to Tigergraph Database. Ensure there is Internet Connection and Try Again";
exit();
}
$json = json_decode($output, true);
$msg = $json["message"];
if($msg !=''){
echo "Error Message: $msg";
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
$Long = htmlentities(htmlentities($row["attributes"]["Long_"], ENT_QUOTES, "UTF-8"));
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
$address= "$Province_State, $Country_Region";
$name= "Covid19 Data Analytic Insight";
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$id);
 $newnode->setAttribute("address",$address);
  $newnode->setAttribute("Province_State",$Province_State);
  $newnode->setAttribute("FIPS",$FIPS);
  $newnode->setAttribute("Country_Region", $Country_Region);
  $newnode->setAttribute("lat", $Lat);
  $newnode->setAttribute("lng", $Long);
  $newnode->setAttribute("Last_Update", $Last_Update);
$newnode->setAttribute("Confirmed", $Confirmed);
$newnode->setAttribute("Deaths", $Deaths);
$newnode->setAttribute("Recovered", $Recovered);
 $newnode->setAttribute("Active", $Active);
$newnode->setAttribute("Incident_Rate", $Incident_Rate);
 $newnode->setAttribute("Total_Test_Results", $Total_Test_Results);
$newnode->setAttribute("People_Hospitalized", $People_Hospitalized);
$newnode->setAttribute("Case_Fatality_Ratio", $Case_Fatality_Ratio);
$newnode->setAttribute("UID", $UID);
$newnode->setAttribute("ISO3", $ISO3);
$newnode->setAttribute("Testing_Rate", $Testing_Rate);
$newnode->setAttribute("Hospitalization_Rate", $Hospitalization_Rate);
}
echo $dom->saveXML();
?>