<?php 

class Login extends Controller {
    public function index()
    {
        $this->view('admin/header/header');
        $this->view('admin/pages-login');
        $this->view('admin/footer/footer');
    }
}


?>