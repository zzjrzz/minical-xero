<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Xero_integration extends Extension {

    function __construct()
    {
        parent::__construct();
        
        // Load necessary libraries
        $this->load->library('Xero_lib');
        
        // Hook into the booking creation process
        add_hook('post_create_booking', array($this, 'send_booking_to_xero'));
    }

    /**
     * Send booking information to Xero
     *
     * @param array $booking_data
     */
    public function send_booking_to_xero($booking_data)
    {
        // Implement the logic to send booking data to Xero
        $result = $this->xero_lib->create_invoice($booking_data);
        
        if ($result) {
            log_message('info', 'Booking successfully sent to Xero: ' . $booking_data['booking_id']);
        } else {
            log_message('error', 'Failed to send booking to Xero: ' . $booking_data['booking_id']);
        }
    }
}

// Initialize the extension
$xero_integration = new Xero_integration();