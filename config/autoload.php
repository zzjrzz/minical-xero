<?php 
//load js file on controller function
$config['js-files'] = array(
    array(
        "file" => 'https://nightly.datatables.net/js/jquery.dataTables.js',
        "location" => array(
            "show_booking/show_latest_bookings",
            "show_booking/show_customer_list",      
            "custom_data/get_post_data",
            "option_data/get_option_data",
        ),
    ), 
    array(
        "file" => 'assets/js/booking_list.js',
        "location" => array(
            "show_booking/show_latest_bookings",
            "show_booking/show_customer_list", 
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
        "file" => 'https://nightly.datatables.net/css/jquery.dataTables.css',
        "location" => array(
            "show_booking/show_latest_bookings",
            "show_booking/show_customer_list",
            "custom_data/get_post_data",
            "option_data/get_option_data",
         ),
    ),
);

$config['xero_client_id'] = 'YOUR_XERO_CLIENT_ID';
$config['xero_client_secret'] = 'YOUR_XERO_CLIENT_SECRET';
$config['xero_redirect_uri'] = 'YOUR_REDIRECT_URI';
$config['xero_tenant_id'] = 'YOUR_XERO_TENANT_ID';

// Add this line to autoload the Xero library
$config['autoload_libraries'] = array('Xero_lib');

//load helpers file 
$extension_helper = array(
    'booking_list_helper'
  );
  