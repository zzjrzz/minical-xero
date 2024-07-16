<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use XeroAPI\XeroPHP\Api\AccountingApi;
use XeroAPI\XeroPHP\Configuration;
use GuzzleHttp\Client;
use League\OAuth2\Client\Provider\GenericProvider;

class Xero_lib {

    private $ci;
    private $xero;

    public function __construct()
    {
        $this->ci =& get_instance();
        
        // Load configuration
        $this->ci->load->config('xero_config');
        
        // Set up Xero API connection
        $this->setup_xero_connection();
    }

    private function setup_xero_connection()
    {
        $provider = new GenericProvider([
            'clientId'                => $this->ci->config->item('xero_client_id'),
            'clientSecret'            => $this->ci->config->item('xero_client_secret'),
            'redirectUri'             => $this->ci->config->item('xero_redirect_uri'),
            'urlAuthorize'            => 'https://login.xero.com/identity/connect/authorize',
            'urlAccessToken'          => 'https://identity.xero.com/connect/token',
            'urlResourceOwnerDetails' => 'https://api.xero.com/api.xro/2.0/Organisation'
        ]);

        $accessToken = $this->get_access_token(); // Implement this method to retrieve or refresh the access token

        $config = Configuration::getDefaultConfiguration()->setAccessToken($accessToken);
        $this->xero = new AccountingApi(
            new Client(),
            $config
        );
    }

    public function create_invoice($booking_data)
    {
        try {
            $tenantId = $this->ci->config->item('xero_tenant_id');

            $lineItem = new \XeroAPI\XeroPHP\Models\Accounting\LineItem([
                'description' => 'Room Booking: ' . $booking_data['room_type'],
                'quantity' => 1,
                'unit_amount' => $booking_data['rate'],
                'account_code' => '200' // Adjust this based on your Xero account structure
            ]);

            $invoice = new \XeroAPI\XeroPHP\Models\Accounting\Invoice([
                'type' => 'ACCREC',
                'contact' => [
                    'name' => $booking_data['customer_name']
                ],
                'date' => new \DateTime($booking_data['check_in_date']),
                'due_date' => new \DateTime($booking_data['check_out_date']),
                'line_items' => [$lineItem],
                'status' => 'AUTHORISED'
            ]);

            $result = $this->xero->createInvoices($tenantId, $invoice);
            return $result->getInvoices()[0]->getInvoiceId();
        } catch (Exception $e) {
            log_message('error', 'Xero API Error: ' . $e->getMessage());
            return false;
        }
    }

    private function get_access_token()
    {
        // Implement token retrieval and refresh logic here
        // This could involve checking a database for a stored token,
        // refreshing if necessary, or redirecting to the OAuth flow if no token exists
    }
}