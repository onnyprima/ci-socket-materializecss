<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('socketpush');
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }
    
    public function startImport()
    {
        $this->socketpush->importExcel();
        if(count($this->socketpush->getValues() > 0)){
            echo json_encode([
                'status' => true,
                'data' => 'Data berhasil di ekstrak.'
            ]);
        }
    }
    public function materialize()
    {
        $this->load->view('materialize');
    }

    public function sendPublish()
    {
        $param = array(
            'category' => $_POST['category']
            , 'title' => $_POST['title']
            , 'article' => $_POST['article']
            , 'when' => time()
        );

        $this->socketpush->publish($param);
    }

}
