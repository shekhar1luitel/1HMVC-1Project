<?php
// defined('BASEPATH') or exit('No direct script access allowed');

class Test extends MY_Controller
{
    public function index()
    {
        $this->load->view("test");
    }
}
