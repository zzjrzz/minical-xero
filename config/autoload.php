<?php 
//load js file on controller function
$config['js-files'] = array(
    array(
        "file" => 'assets/js/booking_list.js',
        "location" => array(
            "show_booking/show_latest_bookings",
        ),
    ),
);

//load css file for controller function
$config['css-files'] = array(
    array(
        "file" => 'assets/css/booking_list.css',
        "location" => array(
            "show_booking/show_latest_bookings",
        ),
    ),
);

//load helpers file 
$extension_helper = array(
    'booking_list_helper'
  );