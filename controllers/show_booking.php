<?php
class Show_booking extends MY_Controller
{
    public $module_name;
	function __construct()
	{
        parent::__construct();

        $this->module_name = $this->router->fetch_module();
        $this->load->model('../extensions/'.$this->module_name.'/models/Bookings_model');
        $this->load->library('../extensions/'.$this->module_name.'/libraries/GreetingEmail');

	}
	
    function show_latest_bookings(){

        $data['bookings'] = $this->Bookings_model->get_bookings();
        $files = get_asstes_files($this->module_assets_files, $this->module_name, $this->controller_name, $this->function_name);

        $data['menu_on'] = TRUE;
        $data['selected_menu'] = 'bookings';
        $data['main_content'] = '../extensions/'.$this->module_name.'/views/booking';

        // library function call
        // $this->greetingemail->send_greeting_email();

        // action call
        // do_action('action name', variable);
        // do_action('add.booking.created', $data);  // this is a core action
        // do_action('my-custom-action', $data);   //this is a custom action 

        // filter call
        // apply_filter('filter name', variable);
        // apply_filter('my-custom-action', $data);

        // helpers function call
        // check if funtion exists or not
        // if(function_exists('custom_helper')){
        //   custom_helper($data);
        // }

        $this->template->load('bootstrapped_template', null , $data['main_content'], $data);
    }

 
    /*
    * to add custom data into database 
    */
    // public function add_custom_data() 
    // {
            // The post table has type and title, and post-meta has a custom key-value array. 
            // This array will map with this particular post id. In this given example, we have a book as a category and its details in meta.
    //     $add_custom_data = array(
    //             'company_id' => $this->company_id,
    //             'user_id' => $this->user_id,
    //             'post_title' => 'Book',
    //             'post_type' => 'self-help-book',
    //             'post_date' =>  date('Y-m-d H:i:s'),
    //             'meta' => array(
    //                     'author' => 'James Clear',
    //                     'book_name' => 'Atomic Habits',
    //                     'pages' => '290'
    //                 )
    //     );
    //     add_post($add_custom_data);
    // }

    /*
    * to get custom data from database 
    */
    // public function get_custom_data()
    // {
    //     $post_type = null;
    //     get_post($post_type);
    // }

    /*
    * to update custom data 
    */
    // public function update_custom_data()
    // {
    //     $update_custom_data = array(
    //                 'company_id' => $this->company_id,
    //                 'user_id' => $this->user_id,
    //                 'post_title' => 'Book update',
    //                 'post_type' => 'self-help-book',
    //                 'post_date' =>  date('Y-m-d H:i:s'),
    //     );
    //     update_post($update_custom_data);    
    // }

    /*
    * to delete custom data from database
    */
    // public function detele_custom_data()
    // {
    //     $post_type = null;
    //     delete_post($post_type);
    // }

    /*
    * for add options 
    */
    // public function add_custom_options(Type $var = null)
    // {
    //     // The options table has option_key and option_value. This table stores data related to company settings.
            //  For example, some payment gateway's secret key name, and its value.

    //     $add_custom_data = array(
    //             'company_id' => $this->company_id, // current company id
    //             'option_name' => 'x-secret-key', // any option you want to enable or disable for company
    //             'option_value' => '1234', // any value cossponding to option_name
    //             'autoload' => true, // boolean, either this option is enabled for autoload or not                
    //     );
    //     add_options($add_custom_data);
    // }
}