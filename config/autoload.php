<?php 
//load js file on controller function
$config['js-files'] = array(
    array(
        "file" => 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
        "location" => array(
            "show_booking/show_latest_bookings",
            "show_booking/show_customer_list",      
            "custom_data/get_post_data",
            "option_data/get_option_data",
        ),
    ),
    array(
        "file" => 'assets/js/post_custom_data.js',
        "location" => array(
            "custom_data/get_post_data",
        ),
    ),
    array(
        "file" => 'assets/js/option_data.js',
        "location" => array(
            "option_data/get_option_data",
        ),
    )
);


//load css file for controller function
$config['css-files'] = array(
    array(
        "file" => 'assets/css/extension.css',
        "location" => array(
            "show_booking/show_latest_bookings",
            "show_booking/show_customer_list",
            "custom_data/get_post_data",
            "option_data/get_option_data",
            "sample_controller/index",
            "sample_controller/show_info_page",
        ),
    ),
    array(
        "file" => 'https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css',
        "location" => array(
            "show_booking/show_latest_bookings",
            "show_booking/show_customer_list",
            "custom_data/get_post_data",
            "option_data/get_option_data",
         ),
    ),
);

//load helpers file 
$extension_helper = array(
    'booking_list_helper'
  );