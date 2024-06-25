<?php 
/* Template Name: signup */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bidzedge</title>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/content/images/favicon.png" />
    <link
      rel="stylesheet"
      as="style"
      href="<?php echo get_template_directory_uri(); ?>/content/bootstrap/bootstrap.min.css"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/content/css/swiper.css" />
    <link href="<?php echo get_template_directory_uri(); ?>/content/css/font-family.css" />
    <link rel="stylesheet" as="style" href="<?php echo get_template_directory_uri(); ?>/content/css/custom.css" />
  </head>
  <body>
  <script src="<?php echo get_template_directory_uri(); ?>/content/js/toastr.min.js" defer></script>
        	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
          <?php
//POST DATA
if(isset($_POST['submit'])){
$company_name = $_POST['company_name'];
$companydomain = $_POST['companydomain'];
$contact_person = $_POST['contact_person'];
$contact_email = $_POST['contact_email'];
$contact_number = $_POST['contact_number'];
$company_type = 0;
$company_size =0;
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
    "company_size" => $company_size,
    "country_id" => $country_id,
    "state_id" => $state_id,
    "industry_type" =>"$industry_type",
    ); // Add parameters in key value
   
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

//$jsonString = '{"Status":true,"Message":"record(s) found.","data":{"Result":9,"Status":true,"Message":"Record saved successfully.","TENDER_ID":null,"BID_ID":null}}';
 
// Decode the JSON string
$data = json_decode($response, true);
 
// Accessing elements
$status = $data['Status']; // true
$message = $data['Message']; // "record(s) found."
$result = $data['data']['Result']; // 9
$dataStatus = $data['data']['Status']; // true
$dataMessage = $data['data']['Message']; // "Record saved successfully."
$tenderId = $data['data']['TENDER_ID']; // null
$bidId = $data['data']['BID_ID']; // null
session_start();
$_SESSION["id"]=$result;
 echo'<script>
 window.location.href="http://localhost:8080/bidzedge/signupsecond/";
 </script>';
// Example output
// echo "Status: $status\n";
// echo "Message: $message\n";
// echo "Result: $result\n";
// echo "Data Status: $dataStatus\n";
// echo "Data Message: $dataMessage\n";
// echo "Tender ID: $tenderId\n";
// echo "Bid ID: $bidId\n";



//curl_close($ch);
//echo '<script type="text/javascript">document.addEventListener("DOMContentLoaded", function () {toastr.success("Message sent successfully. We will get back to you shortly!")});</script>';

}
?>




<section class="signup py-0">
      <div class="row gx-0 h-100 justify-content-center">
        <div class="col-md-6 d-flex">
          <div class="signupform">
            <div class="signhdr">
                <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/content/images/logo-tdr.png" alt="logo" />
</a>
</div>
              <div class="row justify-content-center">
                <div class="col-sm-8 col-md-12 col-lg-7">
                  <div class="mb-3 fstform">
                    <div class="sgnhd">
                      <h6 class="mb-1">Sign Up</h6>
                      <p>WelCome Bidzedge !</p>
                    </div>
                    <form class="mb-0 mb-md-5" method="post" action="" name="registration">
                    <div class="mb-3">
                      <div class="input-group mb-2">
                      <input required="" type="text" name="companydomain" id="usernames" />
                      <label class="user-label required">Company Domain</label>
</div>
                      <p id="usercheck">Company Domain is Required</p>
                    </div>
                  
                    <div class="mb-3">
                      <div class="input-group mb-2">
                      <input required="" type="text" name="company_name"  id="CompanyName" />
                      <label class="user-label required">Company Name</label>
</div>
                      <p id="CompanyNameCheck">Company Name is Required</p>
                    </div>
                    <div class="mb-3">
                      <div class="input-group mb-2">
                      <input required="" type="text" name="contact_person" id="ContactPerson" />
                      <label class="user-label required">Contact Person</label>
</div>
                      <p id="passperson">Contact Person Name is Required</p>
                    </div>
                    <div class="mb-3">
                      <div class="input-group mb-2">
                      <input required="" type="number" name="contact_number"  id="mobile-number"
                          oninput="limitInputLength(this, 10)"
                          maxlength="10" />
                      <label class="user-label required">Mobile Number</label>
</div>
                      <p id="passcheck">Mobile number Required</p>
                    </div>
                    <div class="mb-3">
                      <div class="input-group mb-2">
                      <input required="" type="email" name="contact_email"  id="email" class="mandatory email" />
                      <label class="user-label required">Email ID</label>
</div>
                      <p id="emailvalid" class="form-text text-muted invalid-feedback"> Email ID is Required </p>
                    </div>
                    <div class="trmcnd">
                    By clicking register, you agree to our
                    <a href="<?php echo home_url('term-condition'); ?>"> Terms of Use </a>and that you have read our
                    <a href=<a href="<?php echo home_url('privacy-policy'); ?>"> Privacy Policy.</a>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary w-100 mb-4 fw-bold">Registred</button>
                       

                    <p class="lnkpara">
                      Already Registered ? <a href="https://bidzedge.com">Login</a>
                    </p>
                  </div>
                  </form>
                  <form id="nextdiv">
                  <div class="nextfrmgrp">
                  <div class="sgnhd">
                      <h6 class="mb-1">About your business</h6>
                      <p>Helpful to understand more...</p>
                    </div>
                    <div class="form-group floating-diff mb-4">
                      <label class="floating-label user-label">Country</label>
                      <select
                        name="country"
                        class="form-control floating-control"
                      >
                      <option value=""> Choose Country</option>
                      <?php

// API endpoint URL
$apiUrl = 'https://bidzedge.com/API/api/CommonCompanyapi/List';

// Data to send with the request
$data = json_encode(array("Flag" => "GET_COUNTRY"));

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data)
));

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

// Print the response
//print_r($data);

// Check if the response contains data for GET_COUNTRY
if (isset($data["GET_COUNTRY"])) {
    // Iterate over the country data
    foreach ($data["GET_COUNTRY"] as $country) {
        // Output an option for each country
        echo '<option value="' . $country["ID"] . '">' . $country["NAME"] . '</option>';
    }
}



?>
                      </select>
                    </div>
                    <div class="form-group floating-diff mb-4">
                      <label class="floating-label user-label">State</label>
                      <select
                        name="state"  id="stateId"
                        class="form-control floating-control"
                      >
                      <option value=""> Choose State</option>
                      <?php

// API endpoint URL
$apiUrl = 'https://bidzedge.com/API/api/CommonCompanyapi/List';

// Data to send with the request
$data = json_encode(array(
    "Flag" => "GET_STATE",
    "ID" => 1 // Replace 1 with the actual country ID
));

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data)
));

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

// Print the response
//print_r($data);


// Check if the response contains data for GET_COUNTRY
if (isset($data["GET_STATE"])) {
  // Iterate over the country data
  foreach ($data["GET_STATE"] as $state) {
      // Output an option for each country
      echo '<option value="' . $state["ID"] . '">' . $state["NAME"] . '</option>';
  }
}

?>

                      </select>
                    </div>

                    <div class="form-group floating-diff mb-4">
                      <label class="floating-label user-label"
                        >City</label
                      >
                     
                      <select id="cityId">
    <!-- City options will be populated dynamically through AJAX -->
</select>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).on('change', '#stateId', function() {
        var stateId = $(this).val();

        $.ajax({
            type: "POST",
            url: "http://localhost/bidzedge/citylist/",
            data: { stateId: stateId },
            dataType: "json",
            success: function(response) {
                // Clear existing city options
                $('#cityId').empty();

                // Append new city options
                $.each(response, function(index, option) {
                    $('#cityId').append(option);
                });
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                // Handle error appropriately
            }
        });
    });
</script>
                    </div>

                    <div class="form-group floating-diff mb-4">
                      <label class="floating-label user-label"
                        >Company Type</label
                      >
                      <select
                        name="company_type"
                        class="form-control floating-control"
                      >

                      <option value=""> Choose Company Type</option>
                      <?php

// API endpoint URL
$apiUrl = 'https://bidzedge.com/API/api/CommonCompanyapi/List';

// Data to send with the request
$data = json_encode(array("Flag" => "GET_COMPANY_TYPE"));

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data)
));

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

// Print the response
//print_r($data);

// Check if the response contains data for GET_COUNTRY
if (isset($data["GET_COMPANY_TYPE"])) {
  // Iterate over the country data
  foreach ($data["GET_COMPANY_TYPE"] as $companytype) {
      // Output an option for each country
      echo '<option value="' . $companytype["ID"] . '">' . $companytype["NAME"] . '</option>';
  }
}
?>

                      </select>
                    </div>
                    <div class="form-group floating-diff mb-4">
                      <label class="floating-label user-label">Industry</label>
                      <select
                        name="industry_type"
                        class="form-control floating-control"
                      >
                      <option value=""> Choose Industry</option>
                      <?php

// API endpoint URL
$apiUrl = 'https://bidzedge.com/API/api/CommonCompanyapi/List';

// Data to send with the request
$data = json_encode(array("Flag" => "GET_INDUSTRY_TYPE"));

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data)
));

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

// Print the response
//print_r($data);

// Check if the response contains data for GET_COUNTRY
if (isset($data["GET_INDUSTRY_TYPE"])) {
  // Iterate over the country data
  foreach ($data["GET_INDUSTRY_TYPE"] as $industrytype) {
      // Output an option for each country
      echo '<option value="' . $industrytype["ID"] . '">' . $industrytype["NAME"] . '</option>';
  }
}

?>

                      </select>
                    </div>
                    
                    <div class="form-group floating-diff mb-4">
                      <label class="user-label">Company Size</label>
                      <input type="number"  name="company_size" class="form-control floating-control" />
                      
              
                    </div>
                    <div class="row">
                      <div class="col-5">
                        <a
                          href="#"
                          class="btn btn-outline-primary w-100 mb-4 fw-bold backbtn"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-arrow-left me-2"
                            viewBox="0 0 16 16"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"
                            />
                          </svg>
                          Back
                        </a>
                      </div>
                      <div class="col-7">
                      <button type="submit" name="submit" class="btn btn-primary w-100 mb-4 fw-bold">Submit</button>
                        
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-6 d-none d-md-flex flex-column">
          <div class="lftslider">
            <div class="row justify-content-center align-items-center w-100">
              <div class="col-md-10">
                <div class="swiper-container signup-slider p-0 overflow-hidden">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="slide-inner p-0">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/content/images/Login1.svg"
                          alt="Login1"
                          class="mb5"
                        />
                        <h6>Welcome to Bidzedge!</h6>
                        <p>
                          Unlock Premium Services With our Transparent Pricing &
                          Enjoy a risk freee trial Period. Sign Up today to
                          access exclusive benefites and Elevate your business
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="slide-inner p-0">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/content/images/Login2.svg"
                          alt="Login2"
                          class="mb5"
                        />
                        <h6>Notification Alert!</h6>
                        <p>
                          The user can view priority issues like fee
                          notifications and bid submissions for the next two
                          days or week, with an activity calendar alerting
                          them. 
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="slide-inner p-0">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/content/images/Login3.svg"
                          alt="Login3"
                          class="mb5"
                        />
                        <h6>Tracking Made Easy!</h6>
                        <p>
                          Mainly used by the Business Development team for
                          creating and bringing new EOI, Pilot projects which
                          can be tracked and upgraded easily.
                        </p>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="slide-inner p-0">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/content/images/Login4.svg"
                          alt="Login4"
                          class="mb5"
                        />
                        <h6>Multi Document Upload!</h6>
                        <p>
                          Users can submit an Excel document that is specific to
                          the bid and tender they are participating in for
                          organized and structured submission.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="sgnup">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-sm-5 col-md-6">
            <div class="lftftr mb-2 mb-md-0">
              <p class="mb-0">© 2024 Bidzedge. All Right Reserved</p>
            </div>
          </div>
          <div class="col-sm-7 col-md-6">
            <div class="rgtftr">
              <ul class="d-flex align-items-center justify-content-sm-end">
                <li><a href="/#About" class="ps-0">About The Company</a></li>
                <li><a href="<?php echo home_url('privacy-policy'); ?>">Privacy Policy</a></li>
                <li><a href="<?php echo home_url('term-condition'); ?>" class="pe-0">Terms of use</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php echo get_template_directory_uri(); ?>/content/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/content/js/swiper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/content/js/custom.js"></script>
  </body>
</html>