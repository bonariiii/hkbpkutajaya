<?php 

class About extends Controller {
    public function index()
    {
        $data['judul'] = "About";
        $this->view("header/header", $data);
        $this->view("about");
        $this->view("footer/footer");
    }
}


?>