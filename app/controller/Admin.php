<?php 

class Admin extends Controller {
    public function index()
    {   
        if (!isset($_SESSION['nama'])) {
            $data['title']="Login";
            $this->view('admin/header/header',$data);
            $this->view('admin/pages-login');
            $this->view('admin/footer/footer');
        }else {
            $data['title'] = "Halaman Admin";
            $this->view('admin/header/header', $data);
            $this->view('admin/index');
            $this->view('admin/footer/footer');
        }
    }

    public function logout()
    {
        if (isset($_SESSION['nama'])) {
            unset($_SESSION['nama']);
            header('Location:' . BASEURL . 'login');
            exit;
        }
    }
    
}


 ?>