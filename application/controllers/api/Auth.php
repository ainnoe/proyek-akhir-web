<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Auth extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
    }
    public function index_post() {
        $email = $this->post('email');
        $password = $this->db->query("select md5('" . $this->post('password') . "') as pass")->row_array();

        $wr = array(
            'email' => $email
        );

        $user = $this->db->get_where('user', $wr)->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if ($password['pass'] == $user['password']) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    // return response dengan data user
                    $this->response([
                        'status' => TRUE,
                        'data' => $data
                    ], REST_Controller::HTTP_OK);
                } else {
                    // return response dengan pesan error
                    $this->response([
                        'status' => FALSE,
                        'message' => 'Wrong password!'
                    ], REST_Controller::HTTP_BAD_REQUEST);
                }
            } else {
                // return response dengan pesan error
                $this->response([
                    'status' => FALSE,
                    'message' => 'This email has not been activated!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        } else {
            // return response dengan pesan error
            $this->response([
                'status' => FALSE,
                'message' => 'hahahaha'
   
            ] , REST_Controller::HTTP_BAD_REQUEST);
        };
    }

    public function index_get()
    {
        $list = $this->m_auth->getData();
        $this->response(['status'=>true,'data'=> $list],REST_Controller::HTTP_OK);
    }

}