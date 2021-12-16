"use strict";

//Notify
$.notify(
  {
    icon: "flaticon-alarm-1",
    title: "Atlantis",
    message: "Premium Bootstrap 4 Admin Dashboard",
  },
  {
    type: "secondary",
    placement: {
      from: "bottom",
      align: "right",
    },
    time: 1000,
  }
);

// Owl Carousel

$(document).ready(function () {
  $("#products").owlCarousel({
    autoplaySpeed: 300,
    navSpeed: 400,
    autoWidth: true,
    dots: false,
  });
});
