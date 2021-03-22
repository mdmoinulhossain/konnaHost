<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GeneratePdfController extends CI_Controller {

    function index($user_id)
    {
        if($user_id == null)
            {
                redirect('/');
            }
        $data['userInfo'] = $this->mu->getUserInfo($user_id);
        $this->load->library('pdf');
        $html = $this->load->view('GeneratePdfView', $data, true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
?>