<?php
//file name bookings_model.php
class Bookings_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    

    function get_bookings()
    {
        $company_id = $this->session->userdata('current_company_id');
        
        $sql_query ="SELECT b.rate,b.booking_id,bb.room_id,bb.check_in_date, bb.check_out_date, r.room_name, c.customer_name, c.email
                from booking b, booking_block bb, room r, customer c
                where b.booking_id=bb.booking_id 
                and bb.room_id=r.room_id
                and b.booking_customer_id=c.customer_id
                and b.company_id=$company_id";
        
        $booking_data = $this->db->query($sql_query);    
            if ($this->db->_error_message()) 
            {
                show_error($this->db->_error_message());
            }
            

        $result = $booking_data->result_array();       
        return $result;
    }

    
}
