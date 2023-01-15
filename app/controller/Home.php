<?php 

class Home extends Controller {
    public function index ()
    {   
        $data["judul"] = "Home";
        $data["warta"] = $this->model('Warta_model')->getAllWarta();
        $this->view("header/header", $data);
        $this->view("home",$data);
        $this->view("footer/footer");
    }
}

?>