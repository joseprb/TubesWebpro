<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

    public function index() {
        $data['title'] = 'Dashboard - Covid-19 Tracker';
        $this->load->view('dashboard', $data);
    }

}