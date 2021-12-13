<?php

//sample page
$extension_route['sample_page'] = 'sample_controller/index';

//list route    
$extension_route['bookings_list'] = 'show_booking/show_latest_bookings';
$extension_route['customer_list'] = 'show_booking/show_customer_list';

//post route
$extension_route['post_data'] = 'custom_data/get_post_data';
$extension_route['add_custom_data'] = 'custom_data/add_custom_data';
$extension_route['edit_custom_data/(:any)'] = 'custom_data/edit_custom_data/$1';
$extension_route['update_custom_data'] = 'custom_data/update_custom_data';
$extension_route['delete_custom_data/(:any)'] = 'custom_data/delete_custom_data/$1';

//option route
$extension_route['option_data'] = 'option_data/get_option_data';
$extension_route['add_option_data'] = 'option_data/add_option_data';
$extension_route['edit_option_data'] = 'option_data/edit_option_data';
$extension_route['update_option_data'] = 'option_data/update_option_data';
$extension_route['delete_option_data'] = 'option_data/delete_option_data';

//info route
$extension_route['info_page'] = 'sample_controller/show_info_page';