<?php
// This is a custom action and can be executed from this extension controllers.
add_filter('my-custom-filter', 'your_callback_function_2', 10, 1);
function your_callback_function_2($data) {
    
    // start writing code here
    // return $data;
}