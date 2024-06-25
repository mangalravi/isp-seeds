<?php 
/* Template Name: testsignup */
?>

<?php
if($_POST['company_name']!="" && $_POST['companydomain']!="" && $_POST['contact_person']!="" && $_POST['contact_email']!="" && $_POST['contact_number']!=""){
$company_name = $_POST['company_name'];
$companydomain = $_POST['companydomain'];
$contact_person = $_POST['contact_person'];
$contact_email = $_POST['contact_email'];
$contact_number = $_POST['contact_number'];
$company_type = 0;
$country_id = 0;
$state_id = 0;
$industry_type =0;

/*
$fullname = "Krishna";
$emailId = "krishna@gmail.com";
$phoneno = "8976543219";
$subject = "Query Form";
$message = "Succes";*/
//$description="Name:$fullname</br>Phone:$phoneno</br>Email:$emailId<br>Message:$message";
//$currentDate = date('j-M-Y');
 $url = 'https://bidzedge.com/API/api/CompanyMasterApi/Save';


$data= array(
    "company_name"=> $company_name ,
    "companydomain" => $companydomain,
    "contact_person" => $contact_person,
    "contact_email" => $contact_email,
    "contact_number" =>  $contact_number, 
    "company_type" => $company_type,
    "country_id" => $country_id,
    "state_id" => $state_id,
    "industry_type" =>"$industry_type",
    ); // Add parameters in key value
  // print_r($data);
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);



//$jsonString = '{"Status":true,"Message":"record(s) found.","data":{"Result":9,"Status":true,"Message":"Record saved successfully.","TENDER_ID":null,"BID_ID":null}}';
 
// Decode the JSON string
 $data1 = json_decode($response, true);
 
// // Accessing elements
// $status = $data['Status']; // true
// $message = $data['Message']; // "record(s) found."
  $result = $data1['data']['Result']; // 9
// $dataStatus = $data['data']['Status']; // true
// $dataMessage = $data['data']['Message']; // "Record saved successfully."
// $tenderId = $data['data']['TENDER_ID']; // null
// $bidId = $data['data']['BID_ID']; // null
session_start();
$_SESSION["id"]=$result;
echo $response;
//echo'<script>alert('.$result.')</script>';
// if($result!=0){
// echo'<script>
// // Delay the redirection by 3 seconds (3000 milliseconds)
// setTimeout(function() {
//   window.location.href = "http://localhost/bidzedge/signupsecond/";
// }, 3000);
// </script>';
// }
// Example output
// echo "Status: $status\n";
// echo "Message: $message\n";
// echo "Result: $result\n";
// echo "Data Status: $dataStatus\n";
// echo "Data Message: $dataMessage\n";
// echo "Tender ID: $tenderId\n";
// echo "Bid ID: $bidId\n";

curl_close($ch);
//  echo '<script type="text/javascript">document.addEventListener("DOMContentLoaded", function () {toastr.success("'.$dataMessage.'")});</script>';
}
?>