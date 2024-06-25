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

  $(".floating-control").on("change", function (e) {
    if ($(this).is("select")) {
      if ($(this).val() === $("option:first", $(this)).val()) {
        $(this).parents(".floating-diff").removeClass("focused");
      } else {
        $(this).parents(".floating-diff").addClass("focused");
      }
    }
  });
});

// third time

$(document).ready(function () {
  $("#usercheck").hide();
  $("#CompanyNameCheck").hide();
  $("#emailvalid").hide();
  $("#passcheck").hide();
  $("#passperson").hide();

  let usernameError = true;
  let CompanyNameError = true;
  let emailError = true;
  let mobileNumberError = true;
  let ContactPersonError = true;

  $("#usernames").keyup(function () {
    validateCompanyDomain();
  });

  $("#CompanyName").keyup(function () {
    validateCompanyName();
  });
  $("#ContactPerson").keyup(function () {
    validateContactPerson();
  });

  $("#email").blur(function () {
    validateEmail();
  });

  $("#mobile-number").keyup(function () {
    validateMobileNumber();
  });
  $("#companySize").keyup(function () {
    validateCompanySize();
  });
  function validateCompanyDomain() {
    let usernameValue = $("#usernames").val();
    if (usernameValue.length === 0) {
      $("#usercheck").show();
      $("#usercheck").html("Field Required");
      usernameError = false;
      return false;
    } else {
      // Regular expression to match domain extensions
      let regex = /\.(com|in|gov|org|net|mil|int)$/i;

      if (!regex.test(usernameValue)) {
        $("#usercheck").show();
        $("#usercheck").html("Invalid Company Domain");
        usernameError = false;
        return false;
      } else {
        $("#usercheck").hide();
        usernameError = true;
        return true;
      }
    }
  }

  function validateCompanyName() {
    let CompanyNameValue = $("#CompanyName").val();
    if (CompanyNameValue.length == "") {
      $("#CompanyNameCheck").show();
      CompanyNameError = false;
      return false;
    } else if (CompanyNameValue.length < 3 || CompanyNameValue.length > 30) {
      $("#CompanyNameCheck").show();
      // $("#CompanyNameCheck").html(
      //   "**length of Company Name must be between 3 and 30"
      // );
      CompanyNameError = false;
      return false;
    } else {
      $("#CompanyNameCheck").hide();
      CompanyNameError = true;
    }
  }
  function validateContactPerson() {
    let contactPersonValue = $("#ContactPerson").val();
    if (contactPersonValue.length == 0) {
      $("#passperson").show(); // Show error for contact person field
      $("#passperson").html("Field Required");
      ContactPersonError = false;
      return false;
    } else if (
      contactPersonValue.length < 3 ||
      contactPersonValue.length > 20
    ) {
      $("#passperson").show();
      // $("#passperson").html(
      //   "Length of contact person's name must be between 3 and 20 characters"
      // );
      ContactPersonError = false;
      return false;
    } else {
      $("#passperson").hide(); // Hide error for contact person field
      ContactPersonError = true;
      return true;
    }
  }

  function validateCompanySize() {
    let CompanySizeValue = $("#CompanySize").val();
    if (CompanySizeValue.length == "") {
      $("#companySize").show();
      CompanySizeError = false;
      return false;
    } else if (CompanySizeValue.length < 3 || CompanySizeValue.length > 30) {
      $("#companySize").show();
      // $("#CompanyNameCheck").html(
      //   "**length of Company Name must be between 3 and 30"
      // );
      CompanySizeError = false;
      return false;
    } else {
      $("#CompanySizeCheck").hide();
      CompanySizeError = true;
    }
  }

  function validateEmail() {
    let emailValue = $("#email").val();
    // let regex = /^[a-zA-Z0-9._-]+@+\.[a-zA-Z]{2,6}$/;
    // let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if (emailValue === "") {
      $("#emailvalid").show(); // Show error for email field
      return false;
    } else if (!regex.test(emailValue)) {
      $("#emailvalid").text("Invalid Email Format").show(); // Show error for invalid email format
      return false;
    } else {
      $("#emailvalid").hide(); // Hide error for email field
      return true;
    }
  }

  function validateMobileNumber() {
    let mobileNumberValue = $("#mobile-number").val();
    let regex = /^[0-9]*$/; // Regular expression to match only numeric characters
    if (!regex.test(mobileNumberValue)) {
      $("#passcheck").show();
      $("#passcheck").html("Mobile number can only contain numbers");
      $("#passcheck").css("color", "red");
      mobileNumberError = false;
      return false;
    } else if (mobileNumberValue.length !== 10) {
      // Corrected the comparison operator
      $("#passcheck").show();
      $("#passcheck").html("Field Required");
      $("#passcheck").css("color", "red");
      mobileNumberError = false;
      return false;
    } else {
      $("#passcheck").hide();
      mobileNumberError = true;
      return true;
    }
  }

  document
    .getElementById("mobile-number")
    .addEventListener("input", function (event) {
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

  $(".backbtn").click(function () {
    $(".nextfrmgrp").hide();
    $(".fstform").show();
  });
});

const navLinks = document.querySelectorAll(".nav-link");

// Loop through each nav link
navLinks.forEach((link) => {
  // Add click event listener to each link
  link.addEventListener("click", function () {
    // Remove 'active' class from all nav items
    navLinks.forEach((item) => {
      item.parentElement.classList.remove("active");
    });
    // Add 'active' class to the clicked nav item
    this.parentElement.classList.add("active");
  });
});
