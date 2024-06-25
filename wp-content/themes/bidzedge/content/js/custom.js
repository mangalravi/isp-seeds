var menu = [];
$(".expertise-slider").each(function (index) {
  menu.push($(this).find(".slide-inner").attr("data-text"));
});
var interleaveOffset = 0.5;

var swiperOptions = {
  loop: true,
  speed: 1000,
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  on: {
    init: function () {
      var swiper = this;
      for (var i = 0; i < menu.length; i++) {
        $(".swiper-pagination").append(
          '<span class="swiper-pagination-bullet"></span>'
        );
      }
    },
    slideChange: function () {
      var swiper = this;
      $(".swiper-pagination-bullet")
        .removeClass("swiper-pagination-bullet-active")
        .eq(swiper.realIndex)
        .addClass("swiper-pagination-bullet-active");
    },
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 15,
    },
    576: {
      slidesPerView: 1,
      spaceBetween: 15,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 3,
    },
  },
};

var swiper = new Swiper(".expertise-slider", swiperOptions);

// DATA BACKGROUND IMAGE
var sliderBgSetting = $(".slide-bg-image");
sliderBgSetting.each(function (indx) {
  if ($(this).attr("data-background")) {
    $(this).css("background-image", "url(" + $(this).data("background") + ")");
  }
});
var menu = [];
$(".expertise-slider").each(function (index) {
  menu.push($(this).find(".slide-inner").attr("data-text"));
});

var swiperOptionsSignup = {
  loop: true,
  speed: 1500,
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 7000,
    disableOnInteraction: false,
  },
  on: {
    init: function () {
      var swiper = this;
      for (var i = 0; i < menu.length; i++) {
        $(".swiper-pagination").append(
          '<span class="swiper-pagination-bullet"></span>'
        );
      }
    },
    slideChange: function () {
      var swiper = this;
      $(".swiper-pagination-bullet")
        .removeClass("swiper-pagination-bullet-active")
        .eq(swiper.realIndex)
        .addClass("swiper-pagination-bullet-active");
    },
  },
};

var swiper = new Swiper(".signup-slider", swiperOptionsSignup);

var sliderBgSetting = $(".slide-bg-image");
sliderBgSetting.each(function (indx) {
  if ($(this).attr("data-background")) {
    $(this).css("background-image", "url(" + $(this).data("background") + ")");
  }
});

$(document).ready(function () {
  "use strict";

  $(window).scroll(function () {
    $(window).scrollTop() >= 100
      ? $(".nvbrhdr").addClass("activenav")
      : $(".nvbrhdr").removeClass("activenav");
  });

  $(".floating-control").on("change focus blur", function (e) {
    if ($(this).is("select")) {
      if ($(this).is(":focus") || $(this).val() !== "") {
        $(this).parents(".floating-diff").addClass("focused");
      } else {
        $(this).parents(".floating-diff").removeClass("focused");
      }
    }
  });
});
let usernameError = true;
let CompanyNameError = true;
let emailError = true;
let mobileNumberError = true;
let ContactPersonError = true;

// third time

$(document).ready(function () {
  $(".error-message").hide();

  $("#companydomain").keyup(function () {
    validateCompanyDomain();
  });

  $("#company_name").keyup(function () {
    validateCompanyName();
  });
  $("#contact_person").keyup(function () {
    validateContactPerson();
  });

  $("#contact_email").blur(function () {
    validateEmail();
  });

  $("#mobile-number").keyup(function () {
    validateMobileNumber();
  });
  $("#companySize").keyup(function () {
    validateCompanySize();
  });
});
$("#company_domain").on("input", validateCompanyDomain);
$("#company_name").on("input", validateCompanyName);
$("#contact_person").on("input", validateContactPerson);
$("#contact_email").on("input", validateEmail);
$("#contact_number").on("input", validateMobileNumber);

function validateCompanyDomain() {
  let usernameValue = $("#companydomain").val();
  if (usernameValue.trim() === "") {
    // Trim to remove leading and trailing whitespace
    $("#companydomain-error").html("Field Required").show();
    usernameError = false;
    return false;
  } else {
    let regex = /\.(com|co|in|gov|org|net|mil|int)$/i;
    if (!regex.test(usernameValue)) {
      $("#companydomain-error").html("Invalid Company Domain").show();
      usernameError = false;
      return false;
    } else {
      $("#companydomain-error").hide();
      usernameError = true;
      return true;
    }
  }
}

function validateCompanyName() {
  let CompanyNameValue = $("#company_name").val();
  if (CompanyNameValue.length == "") {
    $("#Ccompany_name-error").html("Field Required").show();
    CompanyNameError = false;
    return false;
  } else if (CompanyNameValue.length < 3 || CompanyNameValue.length > 500) {
    $("#company_name-error").html("Enter Valid Company").show();
    CompanyNameError = false;
    return false;
  } else {
    $("#company_name-error").hide();
    CompanyNameError = true;
    return true;
  }
}

function validateContactPerson() {
  let contactPersonValue = $("#contact_person").val();
  if (contactPersonValue.length == 0) {
    $("#contact_person-error").show().html("Field Required");
    ContactPersonError = false;
    return false;
  } else if (contactPersonValue.length < 3 || contactPersonValue.length > 500) {
    $("#contact_person-error").html("Enter Valid Name").show();
    ContactPersonError = false;
    return false;
  } else {
    $("#contact_person-error").hide();
    ContactPersonError = true;
    return true;
  }
}

function validateEmail() {
  debugger;

  let emailValue = $("#contact_email").val();
  let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

  if (emailValue === "") {
    $("#contact_email-error").html("Field Required").show();
    console.log(" error added");
    emailError = false;
    return false;
  } else if (!regex.test(emailValue)) {
    $("#contact_email-error").html("Enter Valid Email").show();
    emailError = false;
    return false;
  } else {
    $("#contact_email-error").hide();
    emailError = true;
    return true;
  }
}

function validateMobileNumber() {
  debugger;
  let mobileNumberValue = $("#contact_number").val();
  let regex = /^[0-9]*$/;

  if (!regex.test(mobileNumberValue)) {
    $("#contact_number-error")
      .show()
      .html("Mobile number can only contain numbers")
      .css("color", "red");
    mobileNumberError = false;
    return false;
  } else if (mobileNumberValue.length !== 10) {
    $("#contact_number-error")
      .show()
      .html("Enter valid Number")
      .css("color", "red");
    mobileNumberError = false;
    return false;
  } else {
    $("#contact_number-error").hide();
    mobileNumberError = true;
    return true;
  }
}

$("#contact_number").on("input", function (event) {
  let mobileNumberValue = event.target.value;
  // Remove non-numeric characters
  let numericValue = mobileNumberValue.replace(/\D/g, "");
  // Limit to 10 characters
  if (numericValue.length > 10) {
    numericValue = numericValue.slice(0, 10);
  }

  // Update input value
  event.target.value = numericValue;
});
$("#checkvalidation").click(function () {
  // Perform mobile number validation
  if (!validateMobileNumber()) {
    // If validation fails, prevent further action
    return false;
  }
  // If validation passes, proceed to the next step or submit the form
});

$(".nextbtn").click(function () {
  debugger;

  //$(".error-message").remove();
  let isUsernameValid = validateCompanyDomain();
  let isCompanyNameValid = validateCompanyName();
  let isContactPersonValid = validateContactPerson();
  let isMobileNumberValid = validateMobileNumber();
  let isEmailValid = validateEmail();
  addErrorMessages();
  // Check if all validation errors are false
  if (
    !isUsernameValid ||
    !isCompanyNameValid ||
    !isContactPersonValid ||
    !isEmailValid ||
    !isMobileNumberValid
  ) {
    // Ensure that mobile number has exactly 10 characters
    // if ($("#contact_number").val().length != 10) {
    //   // If mobile number doesn't have exactly 10 characters, show error message and prevent further action
    //   $("#contact_number-error").show();
    //   $("#contact_number-error").html("Enter Valid Number");
    //   return false;
    // }
    return false;
  } else {
    $(".error-message").hide();
    apicall();
  }
});

function addErrorMessages() {
  console.log("Adding error messages...");
  if (!usernameError) {
    console.log("Adding error message for username");
    addErrorMessage("companydomain", "Field Required");
  } else {
    console.log("Removing error message for username");
    removeErrorMessage("companydomain");
  }
  if (!CompanyNameError) {
    console.log("Adding error message for company name");
    addErrorMessage("company_name", "Field Required");
  } else {
    console.log("Removing error message for company name");
    removeErrorMessage("company_name");
  }
  if (!ContactPersonError) {
    console.log("Adding error message for contact person");
    addErrorMessage("contact_person", "Field Required");
  } else {
    console.log("Removing error message for contact person");
    removeErrorMessage("contact_person");
  }
  if (!mobileNumberError) {
    console.log("Adding error message for mobile number");
    addErrorMessage("contact_number", "Field Required");
  } else {
    console.log("Removing error message for mobile number");
    removeErrorMessage("contact_number");
  }
  if (!emailError) {
    console.log("Adding error message for email");
    addErrorMessage("contact_email", "Field Required");
  } else {
    console.log("Removing error message for email");
    removeErrorMessage("contact_email");
  }
}

// Function to add dynamic <p> tag for a specific input field
function addErrorMessage(inputId, errorMessage) {
  let $inputGroup = $("#" + inputId).closest(".input-group");
  // Check if error message already exists, if not, create and append it
  if (!$inputGroup.find("#" + inputId + "-error").length) {
    $inputGroup.append(
      "<span id='" +
        inputId +
        "-error' class='error-message'>" +
        errorMessage +
        "</span>"
    );
  }
  // Show the error message
  $("#" + inputId + "-error").show();
}

// Function to remove error message
function removeErrorMessage(inputId) {
  $("#" + inputId + "-error").remove();
}

$(".btncls").click(function (e) {
  e.preventDefault();
  $(".successfill").hide();
});

$(document).ready(function () {
  // Bind change event to all dropdowns
  $(".nextfrmgrp select").change(function () {
    // Check if any dropdown has a value selected
    var anySelected =
      $("select").filter(function () {
        return this.value !== "";
      }).length > 0;

    // Enable or disable submit button based on whether any dropdown has a value selected
    $(".submitbtn").prop("disabled", !anySelected);
  });
});

// Navigation functionality
const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach((link) => {
  link.addEventListener("click", function () {
    navLinks.forEach((item) => {
      item.parentElement.classList.remove("active");
    });
    this.parentElement.classList.add("active");
  });
});

function apicall() {
  debugger;
  // if (
  //   $("#usercheck").css("display") == "none" &&
  //   $("#CompanyNameCheck").css("display") == "none" &&
  //   $("#passperson").css("display") == "none" &&
  //   $("#passcheck").css("display") == "none" &&
  //   $("#emailvalid").css("display") == "none"
  // ) {
  document.getElementById("loader").style.display = "block";
  var company_name = $("#company_name").val();
  var companydomain = $("#companydomain").val();
  var contact_person = $("#contact_person").val();
  var contact_email = $("#contact_email").val();
  var contact_number = $("#contact_number").val();
  $.ajax({
    url: "https://stage.bidzedge.com/testvaldate/",
    type: "POST",
    data: {
      company_name: company_name,
      companydomain: companydomain,
      contact_person: contact_person,
      contact_email: contact_email,
      contact_number: contact_number,
    },
    success: function (response) {
      debugger;
      // Parse the JSON string into a JavaScript object
      var responseObject = JSON.parse(response);

      // Access properties of the JavaScript object
      // console.log("Status:", responseObject.Status);
      // console.log("Message:", responseObject.Message);

      // Access properties nested within the 'data' object
      var data = responseObject.data;
      // console.log("Result:", data.Result);
      // console.log("Inner Status:", data.Status);
      // console.log("Inner Message:", data.Message);
      // console.log("TENDER_ID:", data.TENDER_ID);
      // console.log("BID_ID:", data.BID_ID);
      //alert(data.Message);

      $("#paraalreadyexist").html(data.Message);
      $("#paraalreadyexist").show();
      document.getElementById("loader").style.display = "none";
      if (data.Result != 0) {
        // Delay the redirection by 3 seconds (3000 milliseconds)
        setTimeout(function () {
          window.location.href = "https://stage.bidzedge.com/secondsignup/";
        }, 1000);
      }
    },
    Error: function (error) {
      alert(error);
    },
  });
}
// }

$(document).ready(function () {
  // Bind change event to all dropdowns
  $(".nextfrmgrp select").change(function () {
    // Check if any dropdown has a value selected
    debugger;
    var anySelected =
      $("select").filter(function () {
        return this.value !== "";
      }).length > 0;

    // Enable or disable submit button based on whether any dropdown has a value selected
    $(".submitbtn").prop("disabled", !anySelected);
  });
});

/* Ravi Js 12 june 2024 */

document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".nav-link");
  const sections = document.querySelectorAll("section");
 
  // Add smooth scrolling on click
  navLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href");
      if (targetId.startsWith("#")) {
        e.preventDefault();
        const targetSection = document.querySelector(targetId);
        window.scrollTo({
          top:
            targetSection.offsetTop -
            document.querySelector("nav").offsetHeight,
          behavior: "smooth",
        });
        setActiveNavItem(this.parentElement);
      }
    });
  });
 
  // Intersection Observer to add/remove active class on scroll
  const observerOptions = {
    threshold: 0.1, // 10% of section in view for testing
  };
 
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      console.log(
        `Section ${entry.target.id} is ${
          entry.isIntersecting ? "" : "not "
        }intersecting`
      ); // Debugging log
      const id = entry.target.getAttribute("id");
      const navLink = document.querySelector(`.nav-link[href="#${id}"]`);
      if (entry.isIntersecting) {
        setActiveNavItem(navLink.parentElement);
      }
    });
  }, observerOptions);
 
  sections.forEach((section) => {
    observer.observe(section);
  });
 
  // Set active class on the nav item
  function setActiveNavItem(activeItem) {
    const navItems = document.querySelectorAll(".nav-item");
    navItems.forEach((item) => {
      item.classList.remove("active");
    });
    activeItem.classList.add("active");
  }
 
  // Set the first nav item as active by default
  setActiveNavItem(navLinks[0].parentElement);
});