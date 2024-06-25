$(document).ready(function () {
  "use strict";

  // Add class based on scroll position
  $(window).scroll(function () {
    $(window).scrollTop() >= 100
      ? $(".nvbrhdr").addClass("activenav")
      : $(".nvbrhdr").removeClass("activenav");
  });

  // Add or remove 'focused' class based on select input value
  $(".floating-control").on("change", function (e) {
    if ($(this).is("select")) {
      if ($(this).val() === $("option:first", $(this)).val()) {
        $(this).parents(".floating-diff").removeClass("focused");
      } else {
        $(this).parents(".floating-diff").addClass("focused");
      }
    }
  });

  // Hide validation messages initially
  $("#usercheck").hide();
  $("#CompanyNameCheck").hide();
  $("#emailvalid").hide();
  $("#passcheck").hide();
  $("#passperson").hide();

  // Set error flags initially
  let usernameError = true;
  let CompanyNameError = true;
  let emailError = true;
  let mobileNumberError = true;
  let ContactPersonError = true;

  // Validate username on keyup event
  $("#usernames").keyup(function () {
    validateCompanyDomain();
  });

  // Validate Company Name on keyup event
  $("#CompanyName").keyup(function () {
    validateCompanyName();
  });

  // Validate Contact Person on keyup event
  $("#ContactPerson").keyup(function () {
    validateContactPerson();
  });

  // Validate Email on blur event
  $("#email").blur(function () {
    validateEmail();
  });

  // Validate Mobile Number on keyup event
  $("#mobile-number").keyup(function () {
    validateMobileNumber();
  });

  // Validate Company Size on keyup event
  $("#companySize").keyup(function () {
    validateCompanySize();
  });

  // Function to validate company domain
  function validateCompanyDomain() {
    let usernameValue = $("#usernames").val();
    if (usernameValue.length === 0) {
      $("#usercheck").show().html("Field Required");
      usernameError = false;
      return false;
    } else {
      let regex = /\.(com|in|gov|org|net|mil|int)$/i;
      if (!regex.test(usernameValue)) {
        $("#usercheck").show().html("Invalid Company Domain");
        usernameError = false;
        return false;
      } else {
        $("#usercheck").hide();
        usernameError = true;
        return true;
      }
    }
  }

  // Function to validate Company Name
  function validateCompanyName() {
    let CompanyNameValue = $("#CompanyName").val();
    if (CompanyNameValue.length === 0) {
      $("#CompanyNameCheck").show();
      CompanyNameError = false;
      return false;
    } else if (CompanyNameValue.length < 3 || CompanyNameValue.length > 30) {
      $("#CompanyNameCheck").show();
      CompanyNameError = false;
      return false;
    } else {
      $("#CompanyNameCheck").hide();
      CompanyNameError = true;
      return true;
    }
  }

  // Function to validate Contact Person
  function validateContactPerson() {
    let contactPersonValue = $("#ContactPerson").val();
    if (contactPersonValue.length === 0) {
      $("#passperson").show().html("Field Required");
      ContactPersonError = false;
      return false;
    } else if (
      contactPersonValue.length < 3 ||
      contactPersonValue.length > 20
    ) {
      $("#passperson").show();
      ContactPersonError = false;
      return false;
    } else {
      $("#passperson").hide();
      ContactPersonError = true;
      return true;
    }
  }

  // Function to validate Company Size
  function validateCompanySize() {
    let CompanySizeValue = $("#CompanySize").val();
    if (CompanySizeValue.length === 0) {
      $("#companySize").show();
      CompanySizeError = false;
      return false;
    } else if (CompanySizeValue.length < 3 || CompanySizeValue.length > 30) {
      $("#companySize").show();
      CompanySizeError = false;
      return false;
    } else {
      $("#CompanySizeCheck").hide();
      CompanySizeError = true;
    }
  }

  // Function to validate Email
  function validateEmail() {
    let emailValue = $("#email").val();
    let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (emailValue === "") {
      $("#emailvalid").show().html("Field Required");
      return false;
    } else if (!regex.test(emailValue)) {
      $("#emailvalid").text("Invalid Email Format").show();
      return false;
    } else {
      $("#emailvalid").hide();
      return true;
    }
  }

  // Function to validate Mobile Number
  function validateMobileNumber() {
    let mobileNumberValue = $("#mobile-number").val();
    let regex = /^[0-9]*$/;
    if (!regex.test(mobileNumberValue)) {
      $("#passcheck")
        .show()
        .html("Mobile number can only contain numbers")
        .css("color", "red");
      mobileNumberError = false;
      return false;
    } else if (mobileNumberValue.length !== 10) {
      $("#passcheck").show().html("Field Required").css("color", "red");
      mobileNumberError = false;
      return false;
    } else {
      $("#passcheck").hide();
      mobileNumberError = true;
      return true;
    }
  }

  // Limit mobile number input to 10 characters
  document
    .getElementById("mobile-number")
    .addEventListener("input", function (event) {
      let mobileNumberValue = event.target.value;
      let numericValue = mobileNumberValue.replace(/\D/g, "");
      if (numericValue.length > 10) {
        numericValue = numericValue.slice(0, 10);
      }
      event.target.value = numericValue;
    });

  // Click event handler for form validation
  $("#checkvalidation").click(function () {
    if (!validateMobileNumber()) {
      return false;
    }
  });

  // Click event handler for next button
  $(".nextbtn").click(function () {
    validateCompanyDomain();
    validateCompanyName();
    validateCompanySize();
    validateContactPerson();
    validateEmail();
    validateMobileNumber();
    if (
      usernameError &&
      CompanyNameError &&
      CompanySizeError &&
      emailError &&
      mobileNumberError &&
      ContactPersonError
    ) {
      $(".fstform").hide();
      $(".nextfrmgrp").show();
    }
  });

  // Click event handler for back button
  $(".backbtn").click(function () {
    $(".nextfrmgrp").hide();
    $(".fstform").show();
  });
});

// Click event listener for navigation links
const navLinks = document.querySelectorAll(".nav-link");
navLinks.forEach((link) => {
  link.addEventListener("click", function () {
    navLinks.forEach((item) => {
      item.parentElement.classList.remove("active");
    });
    this.parentElement.classList.add("active");
  });
});
