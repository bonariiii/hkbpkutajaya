<?php 

class Admin extends Controller {
    public function index()
    {
        $this->view('admin/header/header');
        $this->view('admin/index');
        $this->view('admin/footer/footer');
    }
}


 ?>