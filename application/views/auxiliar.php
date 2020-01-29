
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('America/La_Paz');

class Ccompra extends CI_Controller {
    function __construct(){
        parent:: __construct(); 
        $this->load->model('Mcompra');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }


    

    



           

}
?>