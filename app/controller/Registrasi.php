<?php 

class Registrasi extends Controller {
    public function index()
    {
        $this->view('admin/header/header');
        $this->view('admin/pages-register');
        $this->view('admin/footer/footer');
    }

}


?>